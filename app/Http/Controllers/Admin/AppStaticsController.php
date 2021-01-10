<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\AppStatic;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppStaticsController extends Controller
{
    public function index()
    {
        $data[] = '';
        $data['patients'] = Patient::all();
        $data['statics'] = AppStatic::where('parent_id' , null)->paginate(10);
        return view('admin.statics.index' , $data );
    }

    public function create()
    {
        $data[] = '';
        $data['statics'] = AppStatic::where('parent_id' , null)->get();
        return view('admin.statics.create' , $data);
    }

    public function edit($id)
    {
        $data[] = '';
        $data['row'] = AppStatic::find($id);

        if (!$data['row'])
            return redirect()->route('admin.statics.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        $data['statics'] = AppStatic::get();
        return view('admin.statics.edit', $data);
    }

    public function store(Request $request)
    {
        if ($request->type == 1 ){
            $request->request->add(['parent_id' => null]);
        }

        $data = new AppStatic();
        $data->parent_id = $request->parent_id;
        $data->name = $request->name;
        $data->label = $request->label;
        $data->save();

        return redirect()->route('admin.statics.index')->with(['success' => 'تمت الاضافة بنجاح']);
    }

    public function show($id){

        $row = AppStatic::with('children')->find($id);

        if (!$row)
            return redirect()->route('admin.statics.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        return view('admin.statics.show' , compact('row') );
    }


    public function update($id, Request $request)
    {

        $data = AppStatic::find($id);

        if (!$data)
            return redirect()->route('admin.statics.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        $data->update($request->all());
        return redirect()->route('admin.statics.index')->with(['success' => 'تم التحديث بنجاح']);

    }

    public function destroy($id){

        $sata = AppStatic::find($id);

        if (!$sata)
            return redirect()->route('admin.statics.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        $sata->delete();
        return redirect()->route('admin.statics.index')->with(['success' => 'تم الحذف بنجاح']);
    }

}
