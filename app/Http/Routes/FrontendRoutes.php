<?php
/**
 *Mysqlcurl 路由
 *
 * @author  JINLONG
 * @param 
 * @return 
*/
namespace App\Http\Routes;
use Illuminate\Contracts\Routing\Registrar;
 
class FrontendRoutes
{
	    public function map(Registrar $router)
	    {
		        $router->group(['middleware' => 'web'], function ($router)
		        {
		             	$router->get('frontend/index', 	'Frontend\IndexController@index');						 	//前台首页
		             	$router->get('frontend/login', 	'Frontend\Login\LoginController@index');						 	//前台首页
		        });
	    }
}