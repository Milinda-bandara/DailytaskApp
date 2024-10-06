<?php

use App\Http\Controllers\Taskcontroller;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Models\task;


Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/task', function () {
    $data=App\task::all();

    return view('task')->with('task',$data);
});*/
Route::get('/task', function () {
    $data = task::all(); // Use the correct class name here

    return view('task')->with('task', $data);
});
//Route::post('/savetask','Taskcontroller@store');
Route::post('/savetask', [Taskcontroller::class, 'store']);
Route::get('/markascompleted/{id}', [Taskcontroller::class, 'completetask']);
Route::get('/markasnotcompleted/{id}',[Taskcontroller::class,'notcompletetask']);
Route::get('/deletetask/{id}',[Taskcontroller::class,'delete']);
Route::get('/updatetask/{id}',[Taskcontroller::class,'updatetask']);
Route::post('/updatetasks',[Taskcontroller::class,'updatetasks']);