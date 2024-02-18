<?php


use Illuminate\Support\Facades\Route;


Route::get('testWeb', function () 

{
    return 'about';
});




// Route::group(["prefix"=>"Admin","as"=>"Admin."],function(){  
//     Route::group(["prefix"=>"Testmonial","as"=>"Testmonial."],function()
//     {
//     Route:: get ('Science',function ()
//     {
//         return view('science');
//     }
//     );
//     Route:: get ('Sports',function ()
//     {
//         return view('sports');
//     }
//     );     
//     Route:: get ('Math',function ()
//     {
//         return view('math');
//     }
//     );
        
//     Route:: get ('Medical',function ()
//     {
//         return view('medical');
   

// });

// });

// });