<?php
		namespace App\Http\Controllers\Frontend;                  //使用命名空间申明是本类
		use Illuminate\Http\Request;
		use App\Http\Requests;                                    // 引用请求插件类
		use App\Http\Controllers\Controller;                      // 引用控制器类
		use DB;                                                   // 引用DB类;  可以进行查询
		use App\Http\Models\Login;  
		use App\Model\Admin\WebConfig\Nav; 
		use App\Model\Admin\WebConfig\Region;

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
						return view('frontend.login.qqregister');
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
				    $redis =  new \Redis();
					// var_dump($redis);die;
					$redis->connect('127.0.0.1', 6379);
					$redis -> set("user","zhangsan");
					echo $redis->get("user");
					// return $this->top().view('frontend.index');

				}//首页结束


				/**
				 *-----------------------------------------------
				 * 获取头部公共信息
				 *-----------------------------------------------
				 * @param
				 * @return
				 */
				public function top()
				{   
						//获取登录地址的详细信息
						$ipInfo = $this->getIpLookup();
						// var_dump($ipInfo);die;
						//获取当前城市的名称
						$city = $ipInfo['address_detail']['city'];
						//查询当前城市的地址id
						$city = Region::where('region_name', $city)->first();
						$city = $city ->toArray();
						// var_dump($city);die;

						//查询导航栏信息
						$nav = Nav::get();
						$nav = $nav->toArray();

						return view("frontend.comman.head",compact("nav","city"));
				}

				/**
				 *-----------------------------------------------
				 * 获取当前用户登录的地址信息
				 *-----------------------------------------------
				 * @param
				 * @return
				 */
				public function  getIpLookup($ip='106.121.78.111')
				{
						if(empty($ip)){  
								$ip = $this->GetIp();  
						}  
						$content = file_get_contents("http://api.map.baidu.com/location/ip?ak=w4V9zG9uOiM94nY4TbA2nG25G754IqLf&ip=106.121.78.111&coor=bd09ll"); 
						$json = json_decode($content);

						//对象转数组
						$address = $json->content;
						$arr=[];
						foreach ($address  as $key => $value) {
								if(is_object($value)){
										$arr[$key] = get_object_vars($value);
								}else{
										$arr[$key] = $value;
								}
						}
						return $arr;
				}

				/**
				 *-----------------------------------------------
				 * 获取用户的ip 定位到当前用户的中心城市位置
				 *-----------------------------------------------
				 * @param
				 * @return
				 */
				public function getIp()
				{
						$realip = '';  
						$unknown = 'unknown';  
						if (isset($_SERVER)){  
								if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)){  
										$arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);  
										foreach($arr as $ip){  
												$ip = trim($ip);  
												if ($ip != 'unknown'){  
														$realip = $ip;  
														break;  
												}  
										}  
								}else if(isset($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_CLIENT_IP']) && strcasecmp($_SERVER['HTTP_CLIENT_IP'], $unknown)){  
										$realip = $_SERVER['HTTP_CLIENT_IP'];  
								}else if(isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)){  
										$realip = $_SERVER['REMOTE_ADDR'];  
								}else{  
										$realip = $unknown;  
								}  
						}else{  
								if(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), $unknown)){  
										$realip = getenv("HTTP_X_FORWARDED_FOR");  
								}else if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), $unknown)){  
										$realip = getenv("HTTP_CLIENT_IP");  
								}else if(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), $unknown)){  
										$realip = getenv("REMOTE_ADDR");  
								}else{  
										$realip = $unknown;  
								}  
						}  
						$realip = preg_match("/[\d\.]{7,15}/", $realip, $matches) ? $matches[0] : $unknown;  
						return $realip;  
				}







		}//类结束


?>