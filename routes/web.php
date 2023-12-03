<?php

 
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//////////// Day 3

Route::get('login', function () {
    return view('login');
});


Route::post('logged', function () {
    return ('You are login');
})->name('logged');



Route::get('control', [ExampleController::class,'show'])  ;

////////////     The end of  Day 3








//////////// The second task

Route::get('About', function () {
    return view('about');
});

Route::get('Contact', function () {
    return view('contactus');
});




Route:: prefix('Blog')->group(function()


{
    Route:: get ('Science',function ()
    {
        return view('science');
    }
    );
    Route:: get ('Sports',function ()
    {
        return view('sports');
    }
    );
        
    
    Route:: get ('Math',function ()
    {
        return view('math');
    }
    );
        
    Route:: get ('Medical',function ()
    {
        return view('medical');
    }
    );
        
    
        

}
);




///////////////The  end  second task
Route:: get ('test',function ()
{
    return  'welcome to my first laravel website'  ;
}
);


Route:: get ('test1/{id}',function ($id)
{
    return 'the ID for user'.$id;
}
);


Route:: get ('test2/{id?}',function ($id=0)
{
    return 'the ID for user'.$id;
}
)-> where (['id'=>'[0-9]+']) ;


Route:: get ('test3/{id?}',function ($id=0)
{
    return 'the ID for user'.$id;
}
)-> whereNumber ('id') ;


Route:: get ('test4/{name?}',function ($name=null)
{
    return 'the name for user'.$name;
}
)-> whereAlpha ('name') ;


Route:: get ('test5/{id}/{name}' ,function($id,$name)
{

return 'the page is '.$id .'and the name '.$name;

})->where (['id'=>'[0-9]+','name'=>'[a-z]+']);

Route :: get ('product/{category}',function($cat){
return 'the category is '.$cat;


})->whereIn('category',['laptop','pc','mobile']);


Route:: get('test6',function()

{

return view('test');
});

Route:: get('food',function()

{

return view('food');
});



Route:: prefix('lar')->group(function()


{
    Route:: get ('test11',function ()
    {
        return  'welcome to my second laravel website'  ;
    }
    );
    Route:: get ('test22',function ()
    {
        return  'welcome to my third laravel website'  ;
    }
    );
        

}
);