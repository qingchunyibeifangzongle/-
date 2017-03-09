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
class FrontendSearchRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router)
        {
            //搜索页面
            $router->get('frontend/searchshow',  'Frontend\Search\SearchController@searchShow');

          
        });
    }

}