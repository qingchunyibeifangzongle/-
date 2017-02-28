<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//中间件
Route::group(['middleware' => ['web']], function ()
{

<<<<<<< HEAD
	    Route::get('/', function ()
	    {  
	    	return redirect("frontend/index");
	    });
=======
    Route::get('/', function ()
     {
        return view('welcome');
    });
>>>>>>> 2017.02.28.weblog
	
});
<<<<<<< HEAD
	

		//ceishi 题  模拟app 端7天免登陆问题
		// Route::get('admin/login', 'Admin\LoginController@login');              
		// Route::get('admin/jianlogin', 'Admin\LoginController@jianlogin');       


=======
	  
>>>>>>> 2017.02.28.weblog
