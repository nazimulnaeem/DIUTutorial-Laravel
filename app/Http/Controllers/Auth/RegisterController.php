<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        if (Auth::check() && Auth::user()->role->id == 1) {
            $this->redirectTo = route('admin.dashboard');
        } elseif (Auth::check() && Auth::user()->role->id == 2) {
            $this->redirectTo = route('user.dashboard');
        } else {
            $this->redirectTo = route('teacher.dashboard');
        }

        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
   {
//        if($data['role_id'] == 3){
//             return Validator::make($data, [
//            'name' => ['required', 'string', 'max:50'],
//            'username' => ['required', 'string', 'max:40'],
//            'role_id' => ['required', 'boolean'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//             'employee_id' =>'required',    
//            'password' => ['required', 'string', 'min:6', 'confirmed'],
//        ]);
//        }else{
//             return Validator::make($data, [
//            'name' => ['required', 'string', 'max:50'],
//            'username' => ['required', 'string', 'max:40'],
//            'role_id' => ['required', 'boolean'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'employee_id' =>'nullable',  
//            'password' => ['required', 'string', 'min:6', 'confirmed'],
//        ]);
//        }
        
         return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
//            'username' => ['required', 'string', 'max:40'],
//            'role_id' => ['required', 'boolean'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        
       
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'role_id' => $data['role_id'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
    }
    


//    public function store(Request $request) {
//

//         $validatedData = $request->validate([
//           'name' => ['required', 'string', 'max:50'],
//            'username' => ['required', 'string', 'max:40'],
//            'role_id' => ['required', 'boolean'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:6', 'confirmed'],
//    ]);
    
    

//
//
//        $user = new User;
//
//        $user->name = $request->name;
//        $user->username = $request->username;
//        $user->role_id = $request->role_id;
//        $user->email = $request->email;
//        $user->password = Hash::make($request->password);
//
//        $user->save();
//    }

}
