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
class FrontendSchoolRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router)
        {
            //显示添加学校页面
            $router->get('frontend/addSchoolList',  'Frontend\School\SchoolController@index');
            //三级联动
            $router->get('frontend/linkage',  'Frontend\School\SchoolController@linkage');
            //学校添加
            $router->post('frontend/addSchool',  'Frontend\School\SchoolController@addSchool');
            //成功提示
            $router->get('frontend/prompt',  'Frontend\School\SchoolController@prompt');
        });
    }

}