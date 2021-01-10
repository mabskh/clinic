<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppStatic;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class ConstantsController extends Controller
{
    public function index()
    {
        $data = QueryBuilder::for(AppStatic::class)
            ->allowedFilters('parent_id')
            ->allowedIncludes('children', 'allChildren', 'parent', 'allParents')
            ->get();
       return response()->json($data);
        // return view('admin.statics.index', $data);
    }

    public function create()
    {
        $data[] = '';
        $data['statics'] = AppStatic::where('parent_id', null)->get();
        return view('admin.statics.create', $data);
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
        if ($request->type == 1) {
            $request->request->add(['parent_id' => null]);
        }

        $data = new AppStatic();
        $data->parent_id = $request->parent_id;
        $data->name = $request->name;
        $data->label = $request->label;
        $data->save();

        return redirect()->route('admin.statics.index')->with(['success' => 'تمت الاضافة بنجاح']);
    }

    public function show($id)
    {
        $data = QueryBuilder::for(AppStatic::class)
            ->where('id', $id)
            ->allowedIncludes('children', 'allChildren', 'parent', 'allParents')
            ->get();
        return response()->json($data);
    }


    public function update($id, Request $request)
    {

        $data = AppStatic::find($id);

        if (!$data)
            return redirect()->route('admin.statics.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        $data->update($request->all());
        return redirect()->route('admin.statics.index')->with(['success' => 'تم التحديث بنجاح']);

    }

    public function destroy($id)
    {

        $sata = AppStatic::find($id);

        if (!$sata)
            return redirect()->route('admin.statics.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        $sata->delete();
        return redirect()->route('admin.statics.index')->with(['success' => 'تم الحذف بنجاح']);
    }

}
