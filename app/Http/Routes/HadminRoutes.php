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

         
    }



}