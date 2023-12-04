<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function show()
    {

        return 'welcome the first controller';
    }


    //the first solution   of task3

    public function login()
    {

        return view('login');
    }

    public function logged(Request $request)
    {

        

        $email= $request['email'];

        $password=$request['pwd'];

        return $email .' <br>'. $password;

        
        
    }





////////////////////////



//the second solution   of task3


public function login1()
{

    return view('login1');
}


public function logged1(Request $request)
{

    
 
   return $request->all();

    
    
}


 

}