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
            //获得所有商品信息
            $router->get('frontend/getAllGoodsList',  'Frontend\Goods\GoodsController@getAllGoodsList');

            $router->get('frontend/goodsIndex',  'Frontend\Goods\GoodsController@index');
            //商品添加列表
            $router->get('frontend/goodsAddList',  'Frontend\Goods\GoodsController@goodsAddList');
            //三级联动
            $router->get('frontend/getTypeInfo',  'Frontend\Goods\GoodsController@getTypeInfo');
            //商品添加
            $router->post('frontend/goodsAdd',  'Frontend\Goods\GoodsController@goodsAdd');
            //商品详情
            $router->get('frontend/goodsList/{user_id}/{goods_id}',  'Frontend\Goods\GoodsController@goodsList');
        });
    }

}