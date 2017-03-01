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
            /*****************************商品*******************************/
            //商品展示
            $router->get('admin/goodsList',  'Admin\Goods\GoodsController@goodsList');
            //商品添加列表
            $router->get('admin/goodsAddList',  'Admin\Goods\GoodsController@goodsAddList');
            //商品添加
            $router->post('admin/goodsAdd',  'Admin\Goods\GoodsController@goodsAdd');
            //商品删除
            $router->get('admin/goodsDel',  'Admin\Goods\GoodsController@goodsDel');
            //展示商品修改页
            $router->get('admin/goodsUpList',  'Admin\Goods\GoodsController@goodsUpList');
//            //商品修改
//            $router->get('admin/goodsUp',  'Admin\Goods\GoodsController@goodsUp');

            /**************************商品分类***********************************/
            //商品分类展示
            $router->get('admin/goodsType',  'Admin\Goods\GoodsTypeController@goodsType');
            //展示商品分类添加
            $router->get('admin/goodsTypeAddList',  'Admin\Goods\GoodsTypeController@goodsTypeAddList');
            //商品分类添加
            $router->post('admin/goodsTypeAdd',  'Admin\Goods\GoodsTypeController@goodsTypeAdd');
            //商品分类删除
            $router->get('admin/delType',  'Admin\Goods\GoodsTypeController@delType');
            //商品分类修改列表展示
            $router->get('admin/upTypeList',  'Admin\Goods\GoodsTypeController@upTypeList');
            //商品分类修改
            $router->post('admin/upType',  'Admin\Goods\GoodsTypeController@upType');



        });
    }



}