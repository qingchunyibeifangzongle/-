<?php
namespace App\Http\Controllers\Admin\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods\Goods;
use Storage;
class GoodsController extends Controller
{
    public function __construct()
    {
        $this->model = new Goods();
    }

    /**
     * 商品展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function goodsList()
    {
        $goodsList = $this->model->getGoodsList();
        foreach($goodsList as $k => $v){
            $goodsList[$k]['goods_img'] = explode(',',$v['goods_img']);
            $goodsList[$k]['create_time'] = date('Y-m-d',$v['create_time']);
        }
        return view('admin.goods.goodsList',['goodsList' => $goodsList]);
    }

    /**
     * 商品添加列表展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function goodsAddList()
    {
        $typeTree = $this->model->getTypeTree();
        return view('admin.goods.goodsAddList',['typeTree' => $typeTree]);
    }

    /**
     * 商品添加
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function goodsAdd(Request $request)
    {
        if($request->isMethod('post')){
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

                Storage::put($savePath, file_get_contents($v->getRealPath()));

                if(!Storage::exists($savePath)){
                    exit('保存文件失败！');
                }
                $pathInfo[]= $savePath;
                $path = implode(',',$pathInfo);
            }
            $data = $request->all();
            unset($data['_token']);
            $data['goods_img'] = $path;
            $data['create_time'] = time();
            $re=$this->model->goodsAdd($data);
            if($re){
                echo '成功';
            }else{
                echo '失败';
            }
        }else{
            return redirect('admin/index');
        }
    }

    /**
     * 商品删除
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function goodsDel(Request $request)
    {
        if($request->isMethod('get')){
            $goodsId = $request->input('goods_id');
            $del = $this->model->goodsDel($goodsId);
            if($del){
                return  1;
            }else{
                return  2;
            }
        }else{
            return redirect('admin/index');
        }
    }

//    /**
//     * 展示商品修改页
//     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
//     */
//    public function goodsUpList(Request $request)
//    {
//        $typeTree = $this->model->getTypeTree();
//        $goodsId = $request->input('goods_id');
//        $goodsList = $this->model->getOneList($goodsId);
//        return view('admin.goods.goodsUpList',['typeTree' => $typeTree,'goodsList' => $goodsList]);
//    }
//
//    public function goodsUp(Request $request)
//    {
//        if($request->isMethod('get')){
//            var_dump($request->all());
//        }else{
//            return redirect('admin/index');
//        }
//    }



  }