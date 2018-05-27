<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use URL;
use Redirect;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function registration()
    {
    	//echo "asdf"; exit;
        
        return view('chat.register');
    }
    public function store(Request $data)
    {
        $details1 = DB::select("select * from reg");
            $data_all = $data->all();
           // print_r($data_all);
             $name =$data_all['name'];
            
             $email =$data_all['email'];
             $mobile =$data_all['mobile'];
             $password =$data_all['password'];
             
        $admin = DB::select("insert into reg (name,email,mobile,password,message) values('$name','$email','$mobile','$password','')");
        
        return view('chat.login')->with("data",$details1);
    }

     public function emplogin(Request $data)
    {
        //$data_all = $data->all();
       // print_r($data_all);
        //echo "asdf"; exit;

    
       return view('chat.login');
    }

    public function checklog(Request $data)
    {
       $data_all = $data->all();
       //print_r($data_all); exit;
       // echo "asdf"; exit;
        $email=$data_all['email'];
        $password=$data_all['password'];
        //$message=$data_all['message'];
        //echo ($email);
        //echo($password);
        $admin = DB::select("select  * from reg where email='$email' and password='$password'");
        //print_r($admin); exit;

 $text = DB::select("select id,email from reg ");

 if(count($admin)>0)
 {
    return view('chat.text')->with("data",$admin)->with("msg",$text);



 }
 else 
 {
    echo "login failed try again...!!";
 }
    
    }

   public function text(Request $data)
   {    
     $data_all=$data->all();
    $mail_id=$data_all['mail_id'];
        $message=$data_all['message'];
        $from=$data_all['text'];
//print_r($data_all);
        foreach($mail_id as $mid){
    $admin = DB::select(" update reg set message='$message'  where id=$mid");
     }
      return view('chat.msg');
   }



}