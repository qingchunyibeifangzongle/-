<?php
namespace App\Http\Controllers\Admin\Money;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use DB; 
//use Latrell\Alipay\AlipayServiceProvider;                                                  // 引用DB类;  可以进行查询
use App\Model\Replace;
class BuyotherController extends Controller
{
        //发布任务
        public function buyother(Request $request)
        {
            return $this->top().view('frontend.buyother');
        }
        //接收任务
        public function buy(Request $request)
        {
            $model = new \App\Model\Replace(); //实例化model
            $where = ['status'=>0,'school_id'=>1];
            $data = $model->getData($where);
            //var_dump($data); die;
            foreach ($data as $k => $v) {
                $data[$k]['start'] = date('Y-m-d H:i:s', $data[$k]['start']);
                $data[$k]['end'] = date('Y-m-d H:i:s', $data[$k]['end']);

            }
            return $this->top().view('frontend.buy',['data'=>$data]);
        }
        //处理任务
        public function dai(Request $request)
        {
            $data = $request->all();
            unset($data['_token']);
            //开始 结束时间
            $data['start'] = time();
            $data['end'] = $data['start']+15*60*60;
            //var_dump($data['start']);
            //var_dump($data['end']); die;
            $model = new \App\Model\Replace(); //实例化model
            $res = $model->insert($data);
            return Redirect::to('buyother/buy');
        }




  }