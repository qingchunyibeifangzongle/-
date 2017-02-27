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
class AdminGoodsRoutes
{
    public function map(Registrar $router)
    {
        $router->group(['middleware' => 'web'], function ($router)
        {
            //商品展示
            $router->get('admin/goodsList',  'Admin\Goods\GoodsController@goodsList');
            //商品添加
            $router->get('admin/goodsAdd',  'Admin\Goods\GoodsController@goodsAdd');
            //商品分类展示
            $router->get('admin/goodsType',  'Admin\Goods\GoodsController@goodsType');
            //展示商品分类添加
            $router->get('admin/goodsTypeAddList',  'Admin\Goods\GoodsController@goodsTypeAddList');
            //商品分类添加
            $router->post('admin/goodsTypeAdd',  'Admin\Goods\GoodsController@goodsTypeAdd');
        });
    }



}