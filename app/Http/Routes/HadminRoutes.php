<?php
/**
 *admin 路由
 *
 * @author  JINLONG
 * @param 
 * @return 
*/
namespace App\Http\Routes;
use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Http\Request; 
class HadminRoutes
{
    public function map(Registrar $router)
    {  
       
        $router->get('admin/login',  'Admin\LoginController@login');     
        //开放路由
        $router->group(['middleware' => 'web'], function ($router)
        {
            //后台路由/*********************************************/
            $router->get('admin/index',  'Admin\AdminController@index');  
            $router->any('admin/indexV1','Admin\AdminController@indexV1');       
        });
        
        //资金管理路由
        $router->group(['middleware' => 'web'], function ($router)
        {
            //二货资金管理路由
            $router->get('admin/erhuoMoney',  'Admin\Money\MoneyController@erhuoMoney');
            $router->get('admin/otherBuy',  'Admin\Money\MoneyController@otherBuy');
            //审核 资金
            $router->post('admin/checkerhuo',  'Admin\Money\MoneyController@checkerhuo'); 
            $router->post('admin/checkother',  'Admin\Money\MoneyController@checkother');  
            //资金流动
            $router->get('admin/otherGo',  'Admin\Money\MoneyController@otherGo');  
        
        });

        /**
         *-----------------------------------------------
         * 后台轮播图管理路由
         *-----------------------------------------------
         * @param
         * @return
         */
        $router->group(['middleware' => 'web','namespace' => 'Admin\WebConfig','prefix' => 'admin'], function ($router)
        {   
            // 轮播图管理
            //添加展示页面
            $router->get('bannerAdd',  'BannerController@add');  
            //添加
            $router->post('bannerAdd',  'BannerController@add');  
            //上传文件
            $router->post('uploade',  'BannerController@uploade');  
            //删除轮播图
            $router->get('bannerDelete',  'BannerController@delete');  
            // 导航管理
            $router->get('navAdd', 'WebNavController@index');  
            $router->post('navAdd', 'WebNavController@index');  
            //展示
            $router->get('navShow', 'WebNavController@show'); 
            //导航修改 
            $router->get('update', 'WebNavController@update');  
            //删除
            $router->get('delete', 'WebNavController@delete');  
            //网站配置  添加配置文件
            $router->get('webAdd', 'WebConfigController@index');  
            //删除log 地址图片
            $router->get('deleteLog', 'WebConfigController@deleteLog');  
            //添加网站配置文件
            $router->post('webAdd', 'WebConfigController@webAdd');  

            //友情链接
            $router->get('blogrollAdd', 'BlogrollController@index'); 
            //添加 
            $router->post('blogrollAdd', 'BlogrollController@index');
            //查看修改友情链接  
            $router->get('blogrollShow', 'BlogrollController@show');  
            //修改
            $router->get('blogrollUpdate', 'BlogrollController@update');  
            //删除
            $router->get('blogrollDelete', 'BlogrollController@delete');  

        }); 

        $router->group(['middleware' => ['web','admin.login']], function ($router) {


            $router->get('admin/index',  'Admin\AdminController@index');

            $router->get('admin/indexV1',  'Admin\AdminController@indexV1');
            //用户路由
            $router->get('admin/userSelect',  'Admin\UserController@userSelect');
            //用户添加
            $router->get('admin/userAdd',  'Admin\UserController@userAdd');
            $router->post('admin/userAddPost',  'Admin\UserController@userAddPost');
            $router->get('admin/userDel',  'Admin\UserController@userDel');
            $router->get('admin/userRoleSelect/{admin_id}',  'Admin\UserController@userRoleSelect');
            $router->get('admin/addUserRoleSelect',  'Admin\UserController@addUserRoleSelect');
            $router->get('admin/userUpdate/{admin_id}',  'Admin\UserController@userUpdate');
            $router->post('admin/userUpdatePost',  'Admin\UserController@userUpdatePost');

            //角色路由
            $router->get('admin/roleSelect',  'Admin\RoleController@roleSelect');
            $router->get('admin/roleAdd',  'Admin\RoleController@roleAdd');
            $router->post('admin/roleAddPost',  'Admin\RoleController@roleAddPost');
            $router->get('admin/roleDel',  'Admin\RoleController@roleDel');
            $router->get('admin/rolePowerSelect/{rule_id}',  'Admin\RoleController@rolePowerSelect');
            $router->get('admin/addRolePowerSelect',  'Admin\RoleController@addRolePowerSelect');

            //权限路由
            $router->get('admin/powerSelect',  'Admin\PowerController@powerSelect');
            $router->get('admin/powerAdd',  'Admin\PowerController@powerAdd');
            $router->post('admin/powerAddPost',  'Admin\PowerController@powerAddPost');
            $router->get('admin/powerDel',  'Admin\PowerController@powerDel');
            //退出    
            $router->get('admin/loginout',  'Admin\LoginController@loginout');


        });

    }// map 方法结束

}//类结束符