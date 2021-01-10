<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Contact;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    public function index()
    {
        $patients = Patient::with('account')->paginate(5);
        return view('admin.patients.index', compact('patients'));
    }

    public function create()
    {
        $accounts = Account::select('id', 'name')->get();
        return view('admin.patients.create', compact('accounts'));
    }

    public function show($id)
    {
        $data[] = '';
        $patient = Patient::with('account', 'notes')
            ->find($id);

        if (!$patient)
            return redirect()->route('admin.patients.index')->with(['error' => 'هذا المريض غير موجود ']);

        $patients = Patient::with('account')->paginate(10);

        $defaultMobile = Contact::with('patient')
            ->where('is_primary', 1)->where('type', 'mobile')->get();
        $defaultEmail = Contact::with('patient')
            ->where('is_primary', 1)->where('type', 'email')->get();

        $data['mobile'] = collect($defaultMobile)->flatten()->values()->all();
        $data['email'] = collect($defaultEmail)->flatten()->values()->all();

        return view('admin.patients.show', ['patient' => Patient::findOrFail($id), 'patients' => $patients], $data);
    }

    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'email' => 'required|email',
            'mobile' => 'required|max:22|min:5',
            'job_title' => 'nullable|max:225',
            'description' => 'nullable|max:225',
            'account_id' => 'required|numeric',
            'name' => 'required|max:225|min:2',
            'national_id' => 'nullable|max:225',
        ]);

        $filePath = '';
        if ($request->has('photo')) {
            $filePath = uploadImage('patients', $request->photo);
        }

        Patient::create([
            'email' => $request->email,
            'mobile' => $request->mobile,
            'account_id' => $request->account_id,
            'job_title' => $request->job_title,
            'description' => $request->description,
            'name' => $request->name,
            'national_id' => $request->national_id,
            'birth_place' => $request->birth_place,
            'birth_day' => $request->birth_day,
            'work_place' => $request->work_place,
            'current_place' => $request->current_place,
            'photo' => $filePath,
        ]);
        return redirect()->route('admin.patients.index')->with('success', 'تم الحفظ بنجاح');
    }

    public function edit($id)
    {
        $patient = Patient::find($id);
        if (!$patient)
            return redirect()->route('admin.patients.index')->with(['error' => 'هذا المريض غير موجود ']);

        $accounts = Account::with('patients')->get();
        return view('admin.patients.edit', compact('patient', 'accounts'));
    }


    public function update($id, Request $request)
    {

        $patient = Patient::find($id);

        if (!$patient)
            return redirect()->route('admin.patients.index')->with(['error' => 'هذا المريض غير موجود ']);

        $patient->update($request->all());
        return redirect()->route('admin.patients.index')->with(['success' => 'تم التحديث بنجاح']);
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);

        if (!$patient)
            return redirect()->route('admin.patients.index')->with(['error' => 'هذا المريض غير موجود ']);

        $patient->delete();
        return redirect()->route('admin.patients.index')->with(['success' => 'تم الحذف بنجاح']);
    }


}
