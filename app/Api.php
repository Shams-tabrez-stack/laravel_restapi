<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Api extends Model
{
    protected $table ="login";
    public function createLogin($user,$pswd)
    {
     $data=DB::table("login")->insert([
         'username'=>$user,
         'password'=>$pswd
     ]);
     return $data;


    }
    public function login($user,$pass){
        $data = DB::table('login')->where([
            "username"=> $user,
            "password" => $pass
        ])->get();
        return $data;
    }
    public function updateData($user,$pass,$updated_pass){

        $updated = DB::table('login')
            ->where(['username'=>$user,
                "password" => $pass
            ])
            ->update(["password"=>$updated_pass]);

        return $updated;

    }

    //
}
