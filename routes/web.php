<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\PostController;
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






//////// another solution for task3


Route::get('login1', [ExampleController::class,'login1'])  ;




Route::post('logged1',[ExampleController::class,'logged1'] 


)->name('logged1');







//////// the end  another solution for task3

////////task 3



Route::get('login', [ExampleController::class,'login'])  ;




Route::post('logged',[ExampleController::class,'logged'] 


)->name('logged');



//////////the end of task3







//////////// Day 3




// Route::get('login', function () {
//     return view('login');
// });


// Route::post('logged', function () {
//     return ('You are login');
// })->name('logged');



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



//Route::get('store1',[CarController::class,'store1']);





///// Day4 && Day 5 && Day6


Route::get('addCar',[CarController::class,'create'])->name('addCar');

Route::post('storeCar',[CarController::class,'store'])->name('storecar') ;


Route::get('cars',[CarController::class,'index'])->name('cars');


Route::get('updateCar/{id}',[CarController::class,'edit']);



Route::put('update/{id}',[CarController::class,'update'])->name('update');


Route::get('showCar/{id}',[CarController::class,'show']);


Route::get('deleteCar/{id}',[CarController::class,'destroy']);




Route::get('trashed',[CarController::class,'trashed'])->name('trashed');

Route::get('forceDelete/{id}',[CarController::class,'forceDelete'])->name('forceDelete');



Route::get('restoreCar/{id}',[CarController::class,'restore'])->name('restoreCar');










 
// Day 7

Route:: get ('tests',function ()
{
    return  view('tests')  ;
}
);


Route:: get ('image',function ()
{
    return  view('image')  ;
}
);

Route::post('imageUpload', [ExampleController::class,'upload'])->name('imageUpload')  ;


















// Task 4
 

Route::get('addPost',[PostController::class,'create'])->name('addPost');


Route::post('storePost',[PostController::class,'store'])->name('storePost');


// Task 5


Route::get('posts',[PostController::class,'index'])->name('posts');


Route::get('updatePost/{id}',[PostController::class,'edit']);



Route::put('updatePost/{id}',[PostController::class,'update'])->name('updatePost');



Route::get('showPost/{id}',[PostController::class,'show']);


// Task 6


Route::get('deletePost/{id}',[PostController::class,'destroy']);

Route::get('posttrashed',[PostController::class,'trashed'])->name('posttrashed');
Route::get('postforceDelete/{id}',[PostController::class,'forceDelete'])->name('postforceDelete');



Route::get('postsrestorepost/{id}',[PostController::class,'restore'])->name('postsrestorepost');

