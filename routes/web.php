<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Gate;
use App\User;
use Stichoza\GoogleTranslate\TranslateClient;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('javascript',function (){
    return view('demo');
});
Route::get('demos',[DataController::class,'index']);

Route::get('view',function (){
    $d = new TranslateClient();
    return $d->staticTranslate('en','hi','Hello World');
    return view('demo');
});

Route::post('submit', [UserController::class,'submit'])->name('submit');
Route::post('send-type-event', [UserController::class,'sendTypeEvent'])->name('send-type-event');

Route::get('/', function(){
    return view('welcome');
    $d = App\User::first();

    return $d->load(['users:users_id,id']);

//	return Auth::user();
	// auth()->logout();
	// $user = User::where('id',1)->first();
	// auth()->loginUsingId(1);
	// return Gate::allows('demo',$user);
	// return view('welcome');
	if(Gate::allows('demo',auth()->user()))
	{
		return 'hello';
	}
	else
	{
		return 'ddd';
	}
});

Route::get('second', 'UserController@index2');

Route::post('data',[UserController::class,'data']);
// Route::get('demo',[DataController::class,'index']);
//Route::get('demo',[DataController::class,'index'])->middleware('role:super-admin|admin');
//Route::get('demo',[DataController::class,'index'])->middleware('permission:create');
Route::get('demo',[DataController::class,'index'])->middleware('role_or_permission:admin|create');
// Route::get('demo/{id}',[DataController::class,'index'])->middleware('throttle:uploads');
