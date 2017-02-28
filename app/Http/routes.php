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

	    Route::get('/', function ()
	    {  
	    	return redirect("frontend/index");
	    });
	

		//navacate项目  在路由分割里
		// Route::get('admin/Hlogin', 'Admin\HloginController@login');  
	    
	    //mysqlcurl项目 在路由分割里
});
	

		//ceishi 题  模拟app 端7天免登陆问题
		// Route::get('admin/login', 'Admin\LoginController@login');              
		// Route::get('admin/jianlogin', 'Admin\LoginController@jianlogin');       


