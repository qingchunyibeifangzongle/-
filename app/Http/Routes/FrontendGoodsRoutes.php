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
class FrontendGoodsRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router)
        {
            //显示添加学校页面
            $router->get('frontend/getAllGoodsList',  'Frontend\Goods\GoodsController@getAllGoodsList');

            $router->get('frontend/goodsIndex',  'Frontend\Goods\GoodsController@index');

            $router->get('frontend/goodsList',  'Frontend\Goods\GoodsController@goodsList');
        });
    }

}