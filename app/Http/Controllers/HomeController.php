<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use URL;
use Redirect;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

      public function register()
    {
        //echo"ss"; exit;
        return view('register.register');
    }

    public function storereg(Request $data)
    {
        $details1 = DB::select("select * from regdb");
            $data_all = $data->all();
           // print_r($data_all);
             $firstname =$data_all['first_name'];
             $lastname =$data_all['last_name'];
             $email =$data_all['email'];
             $password =$data_all['password'];
             
        $admin = DB::select("insert into regdb (firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')");
        
        return view('register.list')->with("data",$details1);
    }

    public function details()
    {

        $details = DB::select("select * from regdb"); 
        //print_r($details);     
        return view('register.list')->with("data",$details);
    }
    public function edit($id)
    {      
        $details = DB::select("select * from regdb where id=$id");
        return view('register.edit')->with("data",$details);
    }
    public function update(Request $data)
    {     
     $id=$data['id'];
     $firstname =$data['first_name'];
             $lastname =$data['last_name'];
             $email =$data['email'];
             $password =$data['password'];
        $details= DB::select("update regdb set firstname='$firstname',lastname='$lastname',email='$email',password='$password' where id=$id");
        return Redirect::to('/details');
    }

    public function delete($id)
    {     
        //echo"ss"; exit;
    // $id=$data['id'];
     //echo $id; exit;}


        $details= DB::select("delete from regdb where id=$id");
        return view('register.delete');
        
    }

    //////////////////////////////////////////////////////////////////
    public function calculator()
    {    //echo "a"; exit;
         return view('register.calculator');

        
    }
    
   public function operation(Request $data)
    {    

        $dataall=$data->all();
    //print_r($dataall); exit;
    if($dataall['cal'] == "add") {
        $add = $dataall['first_integer'] + $dataall['second_integer'];
        //echo $add; exit;
        return view('register.add')->with("re",$add)->with("data1",$dataall);
    } else if($dataall['cal'] == "sub") 
    {
         return view('register.subtract')->with("data1",$dataall);

    } else if($dataall['cal'] == "multiply") 
    {
      return view('register.multiply')->with("data1",$dataall);

    } else if($dataall['cal'] == "divide")
    {

     return view('register.divide')->with("data1",$dataall);
    }
////////////////////////////////////////////////////////////////////
     
    
}

}


