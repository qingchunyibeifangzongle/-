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
         	$router->get('frontend/index', 	'Frontend\IndexController@show');						 	//前台首页
         	$router->get('frontend/login', 	'Frontend\Login\LoginController@index');						 	//前台首页
    		// QQ登录
    		$router->get('frontend/qq', 	'Frontend\Login\LoginController@qqLogin');
		    //获取QQ信息
		    $router->get('xinxi', 	'Frontend\IndexController@xinxi');
		    //前台登录
		    $router->post('frontend/loginDo', 	'Frontend\Login\LoginController@loginDo');
    		//绑定网站账号
    		$router->get('frontend/binding', 	'Frontend\IndexController@binding');
        });
    }
}