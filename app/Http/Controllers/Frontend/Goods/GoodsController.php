<?php
namespace App\Http\Controllers\Frontend\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Front\Goods\Goods;
use Storage;
class GoodsController extends Controller
{
    public function __construct()
    {
        $this->model = new Goods();
    }


    /**
     *查询所有商品信息借口
     * @return mixed
     */
    public function getAllGoodsList(Request $request)
    {
        $name = $request->input('name');
        if($name == md5('zhangsan')){
            $goodsList = $this->model->getAllGoodsList();
            return   json_encode($goodsList);
        }else{
            return '错误';
        }
    }

    public function goodsList()
    {
        return view('frontend.goods.goodsList');
    }

//    public function index()
//    {
//        $url = "http://www.xiaoer.com/frontend/getAllGoodsList?name=01d7f40760960e7bd9443513f22ab9af";
//        $str = file_get_contents($url);
//        var_dump($str);
//    }
}