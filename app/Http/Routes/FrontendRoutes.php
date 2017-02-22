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
		             	$router->any('frontend/index', 					'Frontend\IndexController@Show');						 	//前台首页
		        });
	    }
}