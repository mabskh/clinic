<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppStatic;
use App\Models\Contact;
use App\Models\Patient;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $data[] = '';
        $data['patients'] = Patient::with('contacts')->get();
        $data['contacts'] = Contact::with('patient')->paginate(10);
     //   $data['primaryMobile'] = Contact::with('patientMobile')->pluck('value')->last();
        return view('admin.contacts.index' , $data );
    }

    public function create()
    {
        $data[] = '';
        $data['patients'] = Patient::get();
        return view('admin.contacts.create' , $data);
    }

    public function edit($id)
    {
        $data[] = '';
        $data['row'] = Contact::find($id);

        if (!$data['row'])
            return redirect()->route('admin.contacts.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        $data['patients'] = Patient::with('contacts')->get();
        return view('admin.contacts.edit', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'value' => 'required|unique:contacts,value' ,
            'type' => 'required',
            'patient_id' => 'required|max:225',
        ]);
       // return $request;
        if (!$request->is_primary == 1 ){
            $request->request->add(['is_primary' => 0]);
        }

        if ($request->is_primary == 1){

        }

        $data = new Contact();
        $data->value = $request->value;
        $data->type = $request->type;
        $data->is_primary = $request->is_primary;
        $data->patient_id = $request->patient_id;
        $data->save();

        $patient = Patient::find($request->patient_id);

        if($request->type == 'email' && $request->is_primary == 1){
            $patient->update([
               'email' =>  $request->value ,
            ]);
        }
        if($request->type == 'mobile' && $request->is_primary == 1){
            $patient->update([
                'mobile' =>  $request->value ,
            ]);
        }

        return redirect()->route('admin.contacts.index')->with(['success' => 'تمت الاضافة بنجاح']);
    }

    public function show($id){

        $row = AppStatic::with('children')->find($id);

        if (!$row)
            return redirect()->route('admin.statics.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        return view('admin.statics.show' , compact('row') );
    }


    public function update($id, Request $request)
    {
        // return $request ;
        $data = Contact::with('patient')->find($id);

        if (!$data)
            return redirect()->route('admin.contacts.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        if (!$request->is_primary == 1 ){
            $request->request->add(['is_primary' => 0]);
        }

        $data->update($request->all());
        return redirect()->route('admin.contacts.index')->with(['success' => 'تم التحديث بنجاح']);
    }

    public function destroy($id){
        $data = Contact::find($id);

        if (!$data)
            return redirect()->route('admin.contacts.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        $data->delete();
        return redirect()->route('admin.contacts.index')->with(['success' => 'تم الحذف بنجاح']);
    }

    public function changeDefaultStatus($id)
    {
           $contact = Contact::find($id);
           $status =  $contact->is_primary == 1 ? 0 : 1 ;
           $contact->update(['is_primary' => $status]);
           return  response()-> json($contact,200);
        //   return json_encode(array('statusCode'=>200));
    }

}
