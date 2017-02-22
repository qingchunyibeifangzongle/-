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
                    $router->get('admin/index',            'Admin\AdminController@index');  
                    $router->any('admin/indexV1','Admin\AdminController@indexV1');              




                      //登录页  
            });

         
    }



}