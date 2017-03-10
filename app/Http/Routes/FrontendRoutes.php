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
         	//前台首页
            $router->get('frontend/index', 	'Frontend\IndexController@index');						 
         	
            //前台登录
            $router->get('frontend/login',  'Frontend\Login\LoginController@index');  

            //前台注册
            $router->get('frontend/regist', 'Frontend\Login\LoginController@regist');						 
    		
            // QQ登录
    		$router->get('frontend/qq', 	'Frontend\Login\LoginController@qqLogin');
		    
            //获取QQ信息
		    $router->get('xinxi', 	'Frontend\IndexController@xinxi');
		    
            //前台登录
		    $router->post('frontend/loginDo', 	'Frontend\Login\LoginController@loginDo');
    		
            //绑定网站账号页面
    		$router->get('frontend/binding', 	'Frontend\IndexController@binding');


    		//绑定网站账号
    		$router->post('frontend/qqAdd', 	'Frontend\Login\LoginController@qqAdd');

    		//验证邮箱是否唯一
    		$router->post('frontend/onlyEmail', 'Frontend\Login\LoginController@onlyEmail');
        
    		//绑定已有账号
    		$router->post('frontend/bindAccount', 'Frontend\Login\LoginController@bindAccount');
    		//招聘
    		$router->get('frontend/work', 	'Frontend\Work\WorkController@work');
    		$router->get('frontend/information', 	'Frontend\Work\WorkController@information');
    		$router->post('frontend/postInformation', 'Frontend\Work\WorkController@postInformation');
    		//报名
    		$router->get('frontend/sign/{job_id}', 'Frontend\Work\WorkController@sign');
    		$router->post('frontend/postSign', 'Frontend\Work\WorkController@postSign');
    		$router->get('frontend/guanli', 'Frontend\Work\WorkController@guanli');
    		$router->get('frontend/delGuanli', 'Frontend\Work\WorkController@delGuanli');
    		//回复
            $router->get('frontend/selectInformation', 'Frontend\Work\WorkController@selectInformation');
            //点击学校查询
    		$router->get('frontend/selectWork', 'Frontend\Work\WorkController@selectWork');

        });
    }
}