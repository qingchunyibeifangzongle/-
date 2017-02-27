<?php
	namespace App\Http\Controllers\Admin\WebConfig;                     //使用命名空间申明是本类
	use Illuminate\Http\Request;
	use App\Http\Requests;                                    // 引用请求插件类
	use App\Http\Controllers\Controller;                      // 引用控制器类
	use DB;   
	use App\Model\Admin\WebConfig\Branner; 


	class WebConfigController extends Controller
	{

		/**
		 *-----------------------------------------------
		 * 显示添加网站配置文件页面
		 *-----------------------------------------------
		 * @param
		 * @return
		 */
		public function index()
		{
			return view('admin.webconfig.webconfig');
		}
	}
