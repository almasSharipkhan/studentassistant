<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
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

    public $successStatus = 200;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'int', 'max:99999', 'unique:users'],
            'user_role' => ['required'],
            'user_course' => ['required'],
            'user_name' => ['required', 'string', 'max:255'],
            'user_surname' => ['required', 'string', 'max:255'],
            'user_birthday' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'group_id' => ['required', 'int',  'max:255'],
            'dep_id' => ['required', 'int',  'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => 'required|same:password',
        ]);

        if($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        } else {
            $user = $this->create($request->all());
            $success['token'] = $user->createToken($user->user_name . '\'s token')->accessToken;
            $success['user_id'] = $user->user_id;
            $success['user_name'] = $user->user_name;
            $success['user_surname'] = $user->user_surname;
            return response()->json(['success' => $success], $this->successStatus);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create($user_data)
    {
        $user = new \App\User;
        $user->user_id = $user_data['user_id'];
        $user->user_role = $user_data['user_role'];
        $user->user_name = $user_data['user_name'];
        $user->user_surname = $user_data['user_surname'];
        $user->user_course = $user_data['user_course'];
        $user->group_id = $user_data['group_id'];
        $user->dep_id = $user_data['dep_id'];
        $user->email = $user_data['email'];
        $user->password = Hash::make($user_data['password']);
        $user->user_birthday = $user_data['user_birthday'];
        $user->save();

        return $user;
    }
}