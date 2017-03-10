<?php
	namespace App\Http\Controllers\Frontend;                  //使用命名空间申明是本类
	use App\Model\Frontend\Index\Index;
	use Illuminate\Http\Request;
	use App\Http\Requests;                                    // 引用请求插件类
	use App\Http\Controllers\Controller;                      // 引用控制器类
	use App\Http\Models\Login;
	use DB;
	class IndexController extends Controller
	{
	
		   /**
			*-----------------------------------------------
			* 接受QQ登录信息
			*-----------------------------------------------
			* @param
			* @return
			*/ 
			public function xinxi()
			{
				 require_once app_path().'/class/Connect2.1/API/qqConnectAPI.php';
				 $oauth = new \oauth();   
					 //回调,获取token
					 $accesstoken = $oauth->qq_callback();
					 //获取openid  
				 $openid = $oauth->get_openid();
					 $oauth = new \QC($accesstoken,$openid); 
					 //获取QQ用户信息;
				 $user = $oauth->get_user_info();
				 $qq = new Login();
				 $user['code'] = $qq->qqLogin($openid);
				 $user['openid']=$openid;
				 //把用户信息存session里
				 session(['qq'=>$user]);
				 return redirect("frontend/binding");
			}

	  /**
		*-----------------------------------------------
		*判断跳转页面，绑定账号
		*-----------------------------------------------
		* @param
		* @return
		*/
		public function binding()
		{
			$user = session("qq"); 
				if ($user['code']==1) {
					//跳绑定账号页面
					return view('frontend.login.qqregister',['user'=>$user]);
				}else{
					//跳主页面
					return redirect("frontend/index");
							
				}
		}

		

		/**
		 *-----------------------------------------------
		 * 前台首页
		 *-----------------------------------------------
		 * @param
		 * @return
		 */
		public function index(Request $request)
		{  
        	$type = DB::table("type")->where("p_id","=",0)->get();
        	foreach ($type as $key => $value) {
        	$son = DB::table("type")->where("p_id","=",$value['type_id'])->get();
        		if($son){
        			$type[$key]['son']=$son;
        		}
        	}
			
			$model = new Index();
			$goodsList = $model->getGoodsList();

			foreach($goodsList as $k => $v){
				$goodsList[$k]['goods_img'] =explode(',',$v['goods_img']);
			}

        	return $this->top().view('frontend.index',['goodsList' => $goodsList,'type'=>$type]);

		}//首页结束

	}//类结束


?>