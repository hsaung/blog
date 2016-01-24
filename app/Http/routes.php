<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
   // throw new Exception ("Tracy work!");
});

Route::get('About', function () {
    return view('About');
   // throw new Exception ("Tracy work!");
});

Route::get('services', function () {
    return view('services');
   // throw new Exception ("Tracy work!");
});

Route::get('portfolio', function () {
    return view('portfolio');
   // throw new Exception ("Tracy work!");
});

Route::get('contact', function () {
    return view('contact');
   // throw new Exception ("Tracy work!");
});
/*
Route::get('hello', function () {
    return view('hello.hello');
   // throw new Exception ("Tracy work!");
});


Route::get('dashboard',function(){
	return 'user dashboard';
});

Route::group(['prefix'=>'admin'],function(){
	Route::get('dashboard',function(){
		return 'admin dashboard';
	});

	Route::get('account',function(){
		return 'admin account';
	});

});


Route::get('hello', function () {
    return 'hello!';
});

Route::get('hello/{name?}', function ($name) {
    return 'hello!,'.$name;
});
Route::get('hello/{id?}', function ($id) {
    return 'hello!,'.$id;
})
->where ('id','[0-9]+');

Route::get('post/{id}',['as'=>post.show',function($id){
	 return view('welcome');
}]);
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
