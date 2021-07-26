<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;

class usercontoller extends Controller
{
    public function createUser(Request $request){
        
        
        $user = $request->input("username");
        $pswd = $request->input("password");
       //creating object of model Api
        $Api = new Api();
        //calling function of model
        $result=$Api->createLogin($user,$pswd);
        if($result==TRUE){
            return "TRUE";
        }
        else{
            return "FALSE";
        }
        

    }
    //function for login 
    public function checklogin(Request $request){
        $user = $request->input('username');
        $pass = $request->input("password");
        $api = new Api();
        //calling the function in model 
        $result = $api->login($user,$pass);
      
        if(count($result)>0){
            return "login successfull";
        }
        else{
            return "login unsuccessfull";
        }
    }
    public function updateLogin(Request $request){
        $user = $request->input('username');
        $pass = $request->input("password");
        $updated_pass = $request->input("update_password");

        $api = new Api();
        //calling the function in model 
        $result = $api->updateData($user,$pass,$updated_pass);

        if($result == true){
            return "Updated successfully";
        }
        else{
            return "Update not successfull";
        }


    }
}
