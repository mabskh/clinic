<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\User;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function index(Request $request){
        $keyword = $request->has('keyword') ? $request->get('keyword') : null;
        $accounts = Account::with('user')->orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.accounts.index', compact('accounts' , 'keyword'));
    }

    public function create(){
        $patients = Patient::all();
     $users =   User::with('accounts')->get();

        return view('admin.accounts.create' , compact('users' , 'patients'));
    }

    public function store(Request $request){

   //return $request;
         $this->validate($request, [
            'link' => 'required|max:25|min:2',
            'email' => 'required|email',
            'mobile' => 'required|max:22|min:5',
            'job_title' => 'nullable|max:225',
            'description' => 'nullable|max:225',
            'user_id' => 'required|numeric',
            'full_name' => 'required|max:225|min:2',
        ]);

        $filePath = '';
        if ($request->has('photo')) {
            $filePath = uploadImage('accounts', $request->photo);
        }

       Account::create([
        'link' => $request->link ,
        'email' => $request->email ,
        'mobile' =>  $request->mobile ,
        'user_id' =>  $request->user_id ,
        'job_title' => $request->job_title ,
        'description' => $request->description ,
        'full_name' => $request->full_name,
        'national_id' => $request->national_id,
        'birth_place' => $request->birth_place,
        'birth_day' => $request->birth_day,
        'mother_name' => $request->mother_name,
        'work_place' => $request->work_place,
        'current_place' => $request->current_place ,
        'photo' => $filePath

        ]);

        return redirect()->route('admin.accounts.index')->with('success', 'تم الحفظ بنجاح');

      }

      public function show($id){
       $account =   Account::with('user' , 'patients')->find($id);
        if (!$account)
                  return redirect()->route('admin.accounts.index')->with(['error' => 'الحساب غير موجود ']);
        //  return $user;
                  return view('admin.accounts.show' , ['account' => Account::findOrFail($id)] );
      }

      public function edit($id)
      {

          //get specific categories and its translations
          $account = Account::find($id);

          if (!$account)
              return redirect()->route('admin.accounts.index')->with(['error' => 'هذا الحساب غير موجود ']);
              $users =   User::with('accounts')->get();
          return view('admin.accounts.edit', compact('account' , 'users'));

      }

      public function update($id, Request $request)
      {

        $account = Account::find($id);

        if (!$account)
            return redirect()->route('admin.accounts.index')->with(['error' => 'هذا الحساب غير موجود']);


        $account->update($request->all());


        return redirect()->route('admin.accounts.index')->with(['success' => 'تم التحديث بنجاح']);

      }

      public function destroy($id){

        $account = Account::find($id);

        if (!$account)
            return redirect()->route('admin.accounts.index')->with(['error' => 'هذا الحساب غير موجود']);

            $account->delete();
            return redirect()->route('admin.accounts.index')->with(['success' => 'تم الحذف بنجاح']);
      }




}
