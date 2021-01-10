<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppStatic;
use App\Models\Contact;
use App\Models\Patient;
use App\Models\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        $works = Work::with('patient','workCategory.allParents')->paginate(10);

        return view('admin.works.index', compact('works'));
    }

    public function create()
    {
        $data[] = '';
        $data['patients'] = Patient::get();
        $data['work_cat'] = AppStatic::where('parent_id', 15)->get();
        return view('admin.works.create', $data);
    }

    public function edit($id)
    {
        $data[] = '';
        $data['work'] = Work::with('patient', 'workCategory')->find($id);

        if (!$data['work'])
            return redirect()->route('admin.works.index')->with(['error' => 'هذه القيمة غير موجودة ']);
        $data['work_cat'] = AppStatic::where('parent_id', 15)->get();
        $data['patients'] = Patient::with('works')->get();

        return view('admin.works.edit', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'work_cat' => ['required', 'array',
                function ($attribute, $value, $fail) {
                    if (!in_array(last($value), $this->getcolumnFromNestedRelation(AppStatic::with('allChildren')
                        ->where('id', 15)->get(), 'id'))) {
                        $fail('The ' . $attribute . ' is invalid.');
                    }
                },
            ]
        ]);
        $work = new Work();
        $work->work = $request->work;
        $work->patient_id = $request->patient_id;
        $work->work_cat = last($request->get('work_cat'));
        $work->save();
        return redirect()->route('admin.works.index')->with('success', 'تم الحفظ بنجاح');
    }

    public function show($id)
    {

        $row = AppStatic::with('children')->find($id);

        if (!$row)
            return redirect()->route('admin.works.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        return view('admin.works.show', compact('row'));
    }


    public function update($id, Request $request)
    {
        // return $request ;
       return  $data = Work::with('patient', 'workCategory')->find($id);

        if (!$data)
            return redirect()->route('admin.works.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        if (!$request->is_primary == 1) {
            $request->request->add(['is_primary' => 0]);
        }

        $data->update($request->all());
        return redirect()->route('admin.works.index')->with(['success' => 'تم التحديث بنجاح']);
    }

    public function destroy($id)
    {
        $data = Contact::find($id);

        if (!$data)
            return redirect()->route('admin.works.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        $data->delete();
        return redirect()->route('admin.works.index')->with(['success' => 'تم الحذف بنجاح']);
    }

    public function changeDefaultStatus($id)
    {
        $contact = Contact::find($id);
        $status = $contact->is_primary == 1 ? 0 : 1;
        $contact->update(['is_primary' => $status]);
        return response()->json($contact, 200);
        //   return json_encode(array('statusCode'=>200));
    }

    private function getColumnFromNestedRelation($data, $column)
    {
        $result = [];
        foreach ($data as $item) {
            $result[] = $item['id'];
            $result = array_merge($result, $this->getColumnFromNestedRelation(collect($item->allChildren), $column));
        }
        return $result;
    }
}
