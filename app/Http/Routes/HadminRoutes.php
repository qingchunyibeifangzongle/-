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
             //    #############################################################
             $router->get('admin/login',  'Admin\LoginController@login');
             $router->post('admin/postLogin',  'Admin\LoginController@postLogin');

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

    }



}