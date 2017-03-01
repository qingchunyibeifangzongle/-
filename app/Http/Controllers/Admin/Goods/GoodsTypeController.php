<?php
namespace App\Http\Controllers\Admin\Goods;

use App\Model\Admin\Goods\GoodsType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsTypeController extends Controller
{
    public function __construct()
    {
        $this->model = new GoodsType();
    }

    /**
     * 商品分类展示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function goodsType()
    {
        $res = $this->model->getTypeList();
        foreach($res as $k => $v){
            $res[$k]['create_time'] = date('Y-m-d',$v['create_time']);
        }
        return view('admin.goodsType.goodsType',['res' => $res]);
    }

    /**
     * 展示商品分类添加
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function goodsTypeAddList()
    {
//        $typeId = $request->input('type_id');
//        if($typeId != ''){
//            $typeList = $this->model->getUpList($typeId);
//            return view('admin.goods.goodsTypeAdd',['typeList' => $typeList]);
//        }else{
        $typeList = $this->model->getTypeTree();
        return view('admin.goodsType.goodsTypeAdd',['typeList' => $typeList]);
//        }

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

    /**
     * 分类删除
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|int
     */
    public function delType(Request $request)
    {
        if($request->isMethod('get')){
            $typeId = $request->input('typeId');
            $res = $this->model->delType($typeId);
            if($res){
                return 1;
            }else{
                return 2;
            }
        }else{
            return redirect('admin/goodsType');
        }
    }


    /**
     * 商品分类修改展示
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function upTypeList(Request $request)
    {
        if($request->isMethod('get')){
            $typeId = $request->input('type_id');
            $typeList = $this->model->getUpList($typeId);
            $typeTree = $this->model->getTypeTree();
            return view('admin.goodsType.goodsTypeUp',['typeList' => $typeList , 'typeTree' => $typeTree,'type_id' => $typeId]);
        }else{
            return redirect('admin/goodsType');
        }
    }

    /**
     * 修改分类
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string
     */
    public function upType(Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->all();
            $typrId = $data['type_id'];
            unset($data['_token']);
            unset($data['type_id']);
            $data['update_time'] = time();
            $res = $this->model->upType($typrId,$data);
            if($res){
                return 'ok';
            }else{
                return 'no';
            }
        }else{
            return redirect('admin/index');
        }
    }






}