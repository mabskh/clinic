<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::with('accounts')->paginate(7);
        return view('admin.users.index', compact('users'));
    }

    public function create(){
    
        return view('admin.users.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|unique:users|max:255|min:5',
            'email' => 'required|email',
            'password' => 'required|max:20|min:5',
        ]);

       User::create([
        'name' => $request->name ,
        'email' => $request->email ,
        'password' => bcrypt($request->password)
       ]);

        return redirect()->route('admin.users.index')->with('success', 'تم الحفظ بنجاح');

    }

    public function show($id){
      $user =   User::with('accounts')->find($id);
      if (!$user)
                return redirect()->route('admin.users.index')->with(['error' => 'هذاالمستخدم غير موجود ']);
      //  return $user;
      
                return view('admin.users.show' ,['user' => User::findOrFail($id)] );
    }
}


