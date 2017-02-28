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
            
        //开放路由
        $router->group(['middleware' => 'web'], function ($router)
        {
            //后台路由/*********************************************/
            $router->get('admin/index',  'Admin\AdminController@index');  
            $router->any('admin/indexV1','Admin\AdminController@indexV1');       
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

            //网站日志文件
            $router->get('WebLog', 'WebLogController@index');  

        }); 


    }// map 方法结束

}//类结束符