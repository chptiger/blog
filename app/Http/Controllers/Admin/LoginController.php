<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use App\Http\Model\User;

require_once 'resources\org\code\Code.class.php';
class LoginController extends CommonController
{
    public function login(){
        if($input = Input::all()){
//           dd($input);
            $code = new \Code;
            $_code = $code->get();
            if(strtoupper($input['code']) != $_code){
                return back()->with('msg','Wrong Verification Code');
            }
            $user = User::first();
            if($user->user_name != $input['user_name'] || Crypt::decrypt($user->user_pass)!= $input['user_pass']){
                return back()->with('msg','Wrong User name or Password');
            }
            session(['user'=>$user]);
            dd(session('user'));
            echo "OK";
        }else{
            return view('admin.login');
        }
    }

    public function code(){
        $code = new \Code;
        $code->make();
    }

    public function getcode(){
        $code = new \Code;
        echo $code->get();
    }

    public function crypt(){
        $str = '123456';
        $s= Crypt::encrypt($str);
        echo $s;
        echo "<br/ >";
        echo Crypt::decrypt($s);
    }
}
