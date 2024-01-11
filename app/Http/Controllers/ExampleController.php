<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
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


public function upload(Request $request){
    $file_extension = $request->image->getClientOriginalExtension();
    $file_name = time() . '.' . $file_extension;
    $path = 'assets/images';
    $request->image->move($path, $file_name);
    return 'Uploaded';

}





public function createsession( )

{    
    
    
    session()->put('testsession', 'First Laravel session');

    
    return 'session created'. session('testsession');

}







public function contact()
{

    return  view('contuctus')  ;
}



//receiveContact



public function receiveContact(Request $request)
{

$content=[

'name'=>$request->name,
'email'=>$request->email,
'subject'=>$request->subject,
'phone'=>$request->phone,
 
'message'=>$request->message,


];

Mail::to('kk@gmail.com')->send(new ContactMail($content),);

    return "mail sent";
}











}