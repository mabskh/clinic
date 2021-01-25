<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppStatic;
use App\Models\Note;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotesController extends Controller
{
    public function index()
    {
        $data[] = '';
        $data['notes'] = Note::with('patient')->paginate(10);
        return view('admin.notes.index' , $data );
    }

    public function create()
    {
        $data[] = '';
        $data['patients'] = Patient::with('notes')->get();
        return view('admin.notes.create' , $data);
    }

    public function edit($id)
    {
        $data[] = '';
        $data['note'] = Note::find($id);
        $data['patients'] = Patient::with('notes')->get();
        if (!$data['note'])
            return redirect()->route('admin.notes.index')->with(['error' => 'هذه القيمة غير موجودة ']);

      //  $data['row'] = Note::get();
        return view('admin.notes.edit', $data);
    }

    public function store(Request $request)
    {

        $data = new Note();
        $data->patient_id = $request->patient_id;
        $data->note       = $request->note;
        $data->user_id    = Auth::id();
        $data->save();

        return redirect()->route('admin.notes.index')->with(['success' => 'تمت الاضافة بنجاح']);
    }

    public function show($id){

        $row = Note::with('media' , 'user')->find($id);

        if (!$row)
            return redirect()->route('admin.notes.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        return view('admin.notes.show' , compact('row') );
    }


    public function update($id, Request $request)
    {

        $data = Note::find($id);

        if (!$data)
            return redirect()->route('admin.notes.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        $data->update($request->all());
        return redirect()->route('admin.notes.index')->with(['success' => 'تم التحديث بنجاح']);

    }

    public function destroy($id){

        $sata = Note::find($id);

        if (!$sata)
            return redirect()->route('admin.notes.index')->with(['error' => 'هذه القيمة غير موجودة ']);

        $sata->delete();
        return redirect()->route('admin.notes.index')->with(['success' => 'تم الحذف بنجاح']);
    }


    public function addNote(Request  $request)
    {
        $note = new Note();
        $note->patient_id = $request->patient_id;
        $note->note = $request->note;
        $note->user_id = Auth::id();
        $note->save();


        return response()->json([
                'created_at'=> $note->created_at->diffForHumans() ,
                'url' =>  route('admin.notes.edit', $note->id),
                'note' => $note->note ,
        ]);
    }

}
