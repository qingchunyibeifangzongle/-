<?php
namespace App\Http\Controllers\Frontend\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Frontend\Goods\Goods;
use Storage;
class GoodsController extends Controller
{
    public function __construct()
    {
        $this->model = new Goods();
    }


//    /**
//     *查询所有商品信息借口
//     * @return mixed
//     */
//    public function getAllGoodsList(Request $request)
//    {
//        $name = $request->input('name');
//        if($name == md5('zhangsan')){
//            $goodsList = $this->model->getAllGoodsList();
//            return   json_encode($goodsList);
//        }else{
//            return '错误';
//        }
//    }

    public function goodsAddList()
    {
        $parentType = $this->model->getParentType();
        $schoolName = $this->model->getSchool();
        return view('frontend.goods.goodsAddList',['parentType' => $parentType,'schoolName' => $schoolName]);
    }

    /**
     * 分类三级联动
     * @param Request $request
     * @return bool|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function getTypeInfo(Request $request)
    {
        if($request->isMethod('get')){
            $typeId = $request->input('type_id');
            if($typeId != ''){
                $res = $this->model->getType($typeId);
                return json_encode($res);
            }else{
                return false;
            }
        }else{
            return view('frontend/goodsList');
        }
    }

    /**
     * 商品添加
     * @param Request $request
     */
    public function goodsAdd(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            if(!$request->hasFile('goods_img')){
                exit('上传文件为空！');
            }
            $file = $request->file('goods_img');
            //var_dump($file);die;
            //判断文件上传过程中是否出错

            foreach($file as $v){
                if(!$v->isValid()){
                    exit('文件上传出错！');
                }
                $newFileName = md5(time().rand(0,10000)).'.'.$v->getClientOriginalExtension();
                $savePath = $newFileName;
//                print_r($savePath);
                Storage::put($savePath, '.frontend/GoodsUploads');
//                $destinationPath = "./frontend/GoodsUploads";
//                $request->file('goods_img')->move($destinationPath,$newFileName);
                if(!Storage::exists($savePath)){
                    exit('保存文件失败！');
                }
                $pathInfo[]= $savePath;
                $path = implode(',',$pathInfo);
            }
            $data['goods_img'] = $path;
            unset($data['_token']);
            $data['create_time']=time();
            if($data['p_id'] == ''){
                unset($data['p_id']);
            }else{
                $data['type_id'] = $data['p_id'];
                unset($data['p_id']);
            }
            $res = $this->model->goodsAdd($data);
            if($res){
                echo 'ok';
            }else{
                echo 'no';
            }
        }
    }


    public function goodsList($user_id,$goods_id)
    {
        $model = new Goods();
        $goodsList = $model->getAllGoodsList($user_id,$goods_id);
        $goodsInfo = $model->getGoodsInfo();
        return $this->top().view('frontend.goods.details',['goodsList' => $goodsList,'goodsInfo' => $goodsInfo]);
    }
}