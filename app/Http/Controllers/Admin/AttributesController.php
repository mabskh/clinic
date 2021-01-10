<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Attribute;
use App\Models\Patient;
use App\User;
use Dotenv\Validator;
use http\Env\Response;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class AttributesController extends Controller
{
    public function index(){
        $patients = Patient::with('account')->paginate(5);
        return view('admin.patients.index', compact('patients'));
    }


    public function create(){

         $accounts =   Account::select('id' , 'full_name')->get();
         $patients =   Patient::get();
        return view('admin.attributes.create' , compact('accounts', 'patients'));

    }


    public function store(Request $request){

        if ($request->ajax()){
            $rules = [
                'attr' => 'required',
                'attr_type' => 'required',
                'patient_id' => 'required',
            ];

            $error = Validator::make($request->all(), $rules);
            if($error->fails())
            {
                return response()->json([
                    'error'=> $error->errors()->all()
                ]);
            }

            $attr = $request->attr;
            $attr_type = $request->attr_type;

            for ($i = 0 ; $i < count($attr) ; $i++){
                $data = [
                    'attr' => $attr[$i],
                    'attr_type' => $attr_type[$i],
                ];
                $inser_data[] = $data;
            }
            Attribute::insert($inser_data);

            return Response()->json(array(
                'success' => true
            ));
        }

      }

      public function show($id){

        $patient = Patient::with('account')->find($id);
        if (!$patient)
                  return redirect()->route('admin.patients.index')->with(['error' => 'الحساب غير موجود ']);
        //  return $user;
                  return view('admin.patients.show2' , ['patient' => Patient::findOrFail($id)] );
      }


      public function edit($id)
      {

           $patient = Patient::find($id);

          if (!$patient)
              return redirect()->route('admin.patients.index')->with(['error' => 'هذا المريض غير موجود ']);

              $accounts =   Account::with('patients')->get();
          return view('admin.patients.edit', compact('patient' , 'accounts'));

      }


      public function update($id, Request $request)
      {

        $patient = Patient::find($id);

        if (!$patient)
            return redirect()->route('admin.patients.index')->with(['error' => 'هذا المريض غير موجود ']);


        $patient->update($request->all());


        return redirect()->route('admin.patients.index')->with(['success' => 'تم التحديث بنجاح']);

      }

      public function destroy($id){

        $patient = Patient::find($id);

        if (!$patient)
            return redirect()->route('admin.patients.index')->with(['error' => 'هذا المريض غير موجود ']);

            $patient->delete();
            return redirect()->route('admin.patients.index')->with(['success' => 'تم الحذف بنجاح']);
      }




}
