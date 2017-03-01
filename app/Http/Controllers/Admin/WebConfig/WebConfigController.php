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
			$config =  file_exists( base_path('config/webconfig.php') ) ? config('webconfig') :  []; 
			return view('admin.webconfig.webconfig',compact("config"));
		}


		/**
		 *-----------------------------------------------
		 * 添加网站配置文件
		 *-----------------------------------------------
		 * @param
		 * @return
		 */
		public function webAdd(Request $request)
		{   
			$data = $request->input();
            unset($data['_token'],$data['file']);

            $file = base_path('config/webconfig.php');
            
            file_put_contents($file, "<?php".PHP_EOL."return [ ".PHP_EOL);

            foreach ($data as $key => $value) {
            	file_put_contents($file, "'".$key."' => '".$value."'," .PHP_EOL, FILE_APPEND);
            }
            file_put_contents($file, "] ; ".PHP_EOL,FILE_APPEND);

            echo 1;

		}



		/**
		 *-----------------------------------------------
		 * 删除 log 图片地址
		 *-----------------------------------------------
		 * @param
		 * @return
		 */
		public function deleteLog(Request $request)
		{
			$imgpath = $request->input('img');
			$file = dirname( $_SERVER['SCRIPT_FILENAME'])."/admin/bannerimg/".$imgpath;

			if(file_exists($file)){
				unlink($file);
			}
			
			echo 1;
		}

	}
