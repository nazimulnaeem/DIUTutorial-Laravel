<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;

class RegistrationController extends Controller
{
//    protected $redirectTo;
//    
//    public function __construct() {
//        if (Auth::check() && Auth::user()->role->id == 1) {
//            $this->redirectTo = route('admin.dashboard');
//        } elseif (Auth::check() && Auth::user()->role->id == 2) {
//            $this->redirectTo = route('user.dashboard');
//        } else {
//            $this->redirectTo = route('teacher.dashboard');
//        }
//
//        $this->middleware('guest');
//    }
    
    public function index(){
        return view('auth.admin.register');
    }

    

    public function store(Request $request) {


         $validatedData = $request->validate([
           'name' => ['required', 'string', 'max:50'],
            'username' => ['required', 'string', 'max:40'],
//            'role_id' => ['required', 'boolean'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
    ]);
         $diut = $_POST['email'];
         $diu = explode('@', $diut);
         if($diu[1] === 'diu.edu.bd'){
         
         $user = new User;

        $user->name = $request->name;
        $user->username = $request->username;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect()->route('login');
         } else {
            Toastr::error('Please Enter valid information','Error');
             return redirect()->back();
               
         }
    }
    
}
