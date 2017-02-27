<?php
namespace App\Http\Controllers\Admin\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods;

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
        return view('admin.goods.goodsList');
    }

    public function goodsAdd()
    {
        return view('admin.goods.goodsAdd');
    }

    /**
     * 商品分类展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function goodsType()
    {
        return view('admin.goods.goodsType');
    }

    /**
     * 展示商品分类添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function goodsTypeAddList()
    {
        $typeList = $this->model->getTypeTree();
//        var_dump($typeList);die;
        return view('admin.goods.goodsTypeAdd',['typeList' => $typeList]);
    }

    /**
     * 分类添加
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function goodsTypeAdd(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            unset($data['_token']);
            $data['create_time'] = time();
            if($data['p_id'] == 0){
                $data['path'] = 0;
            }else{
                $data['path'] = $data['path'].'-'.$data['p_id'];
            }
            var_dump($data);die;
            $res = $this->model->addType($data);
            if($res){
                echo 1;
            }else{
                echo 2;
            }
        }else{
            return redirect('admin/goodsTypeAddList');
        }

    }


  }