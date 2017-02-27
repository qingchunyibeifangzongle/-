<?php
namespace App\Http\Controllers\Admin\Money;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB; 
//use Latrell\Alipay\AlipayServiceProvider;                                                  // 引用DB类;  可以进行查询
use App\Model\Money;
class MoneyController extends Controller
{

        //Money 展示
        public function erhuoMoney(Request $request)
        {
            //查询出二货资金表
            $model = new \App\Model\Money(); //实例化model
            $where = ['type' => 1,'status'=>0];
            $data = $model->getData($where);
            //var_dump($data); die;
            foreach ($data as $key => $value) {
                    $data[$key]['type'] = '二货资金';
                    $data[$key]['time'] = date("Y-m-d H-i-s",$data[$key]['time']);
                if ($data[$key]['status']==0) {
                    $data[$key]['status'] = '资金待审';
                }else{
                    $data[$key]['status'] = '资金已经转移';
                }
            }
            return view('admin.money.erhuoMoney',['data'=>$data]);
        }
        //otherBuy 展示
        public function otherBuy(Request $request)
        {
            //查询出二货资金表
            $model = new \App\Model\Money(); //实例化model
            $where = ['type' => 1,'status'=>0];
            $data = $model->getData($where);
            //var_dump($data); die;
            foreach ($data as $key => $value) {
                    $data[$key]['type'] = '代购资金';
                    $data[$key]['time'] = date("Y-m-d H-i-s",$data[$key]['time']);
                if ($data[$key]['status']==0) {
                    $data[$key]['status'] = '资金待审';
                }else{
                    $data[$key]['status'] = '资金已经转移';
                }
            }
            return view('admin.money.otherBuy',['data'=>$data]);
        }
        //审核 二货
        public function checkerhuo(Request $request)
        {
            $funds_id = $request->all('funds_id');
            //修改资金状态
            //$where = [];
            //dd($funds_id); die;
            $model = new \App\Model\Money(); //实例化model
            $res = $model->upStatus($funds_id,['status'=>1]);
            if ($res) {
                return 1;
            }
        }
        public function checkother(Request $request)
        {
            $funds_id = $request->all('funds_id');
            //修改资金状态
            //$where = [];
            //dd($funds_id); die;
            $model = new \App\Model\Money(); //实例化model
            $res = $model->upStatus($funds_id,['status'=>1]);
            if ($res) {
                return 1;
            }
        }
        public function otherGo(Request $request)
        {
            //查询出审核通过的
            //查询出二货资金表
            /*$alipay = app('alipay.web');
    $alipay->setOutTradeNo('order_id');
    $alipay->setTotalFee('order_price');
    $alipay->setSubject('goods_name');
    $alipay->setBody('goods_description');

    $alipay->setQrPayMode('4'); //该设置为可选，添加该参数设置，支持二维码支付。

    // 跳转到支付页面。
    return redirect()->to($alipay->getPayLink()); die;*/
            $model = new \App\Model\Money(); //实例化model
            $where = ['status'=>0];
            $data = $model->getData($where);
            $num = [];
            foreach ($data as $key => $value) {
                    $data[$key]['type'] = '代购资金';
                    $data[$key]['time'] = date("Y-m-d H-i-s",$data[$key]['time']);
                    $data[$key]['status'] = '资金已经转移';
                    $num[] = $value['revenue'];
            }
            $sum = array_sum($num);
            return view('admin.money.otherGo',['data'=>$data,'sum'=>$sum]);
        }




  }