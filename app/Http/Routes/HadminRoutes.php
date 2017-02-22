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
                    //登录及首页/*********************************************/
                    $router->any('admin/hlogin',            'Admin\HloginController@Login');                //登录页  
            });

         
    }



}