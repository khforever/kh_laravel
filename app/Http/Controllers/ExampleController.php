<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function show()
    {

        return 'welcome the first controller';
    }


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


}
