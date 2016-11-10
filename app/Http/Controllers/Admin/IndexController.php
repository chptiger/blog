<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Validator;

class IndexController extends CommonController
{
    public function index(){
        return view('admin.index');
    }

    public function info(){
        return view('admin.info');
    }

    /**
     * route:any /admin/pass
     * update admin password
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pass(){
        if($input = Input::all()){
//            dd($input);
            $rules = [
                'password'=>'required|between:6,20|confirmed',
            ];
            $message = [
                'password.required'=>'new password can not blank!',
                'password.between'=>'new password should between 6 and 20 characters!',
                'password.confirmed'=>'The password confirmation does not match!',
            ];
            $validator = Validator::make($input, $rules,$message);
            if($validator->passes()){
                $user = User::first();
                $_passowrd = Crypt::decrypt($user->user_pass);
                if( $input['password_o'] == $_passowrd){
                    $user->user_pass = Crypt::encrypt( $input['password']);
                    $user->update();
                    return redirect('admin/info');
                }else{
                    return back()->with('error','Original Wrong Password!');
                }
            }else{
//                dd($validator->errors()->all());
                return back()->withErrors($validator);
            }
        }else {
            return view('admin.pass');
        }
    }
}
