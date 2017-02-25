<?php
	namespace App\Http\Controllers\Admin\WebConfig;                     //使用命名空间申明是本类
	use Illuminate\Http\Request;
	use App\Http\Requests;                                    // 引用请求插件类
	use App\Http\Controllers\Controller;                      // 引用控制器类
	use DB;   
	use App\Model\Admin\WebConfig\Branner; 


	class BannerController extends Controller
	{

		/**
		 *-----------------------------------------------
		 *  添加轮播图
		 *-----------------------------------------------
		 * @param
		 * @return
		 */
		public function  add(Request $request)
		{    

			//判断文件存在不存在
			if (view()->exists('admin.webconfig.banner')) {

				if($request->isMethod('post')){ 

					$msg = ["status"=>1,"msg"=>'']; 
					// 请求数据验证
					$this->validate($request, [
						'name' => 'required',
						'url' => 'required|url',
						'img' => 'required',
					]);

				    //添加轮播图数据
					$data['name'] = $request->input("name");
					$data['url'] = $request->input("url");
					$data['img'] = $request->input("img");
					$data['addtime'] = time();
					//添加数据到表中
					$obj  = new Branner;
					$id = $obj ->insertGetId($data);
					//判断有没有添加成功
					if($id){
						//添加成功
						$data["id"] = $id;
						$msg['msg'] = $data;
					}else{
						//添加失败
						$msg['status'] = 0 ;
						$msg['msg'] = "添加失败";
					}
					//返回前台用户数据
				    echo json_encode($msg);

				}else{
					//展示轮播图视图文件
					//查询所有的数据
					$obj  = new Branner;
					$data = $obj -> orderBy('addtime','desc')->get();
					$data = $data->toArray();

					return view('admin.webconfig.banner',compact("data"));
				}	
				
			}else{
				return view('404');
			}

					
		}// 轮播图路由结束

		/**
		 *-----------------------------------------------
		 *  删除
		 *-----------------------------------------------
		 * @param
		 * @return
		 */
		public function delete(Request $request)
		{
			$id = $request->input('id');
			$img = $request->input('img');

			$msg['status'] = 1;
			//先删除数据库数据
			$obj = Branner::find($id);
			if($res = $obj ->delete()){
				$file = dirname( $_SERVER['SCRIPT_FILENAME'])."/admin/bannerimg/".$img;
				unlink($file);
                $msg["status"] = 1;
			}
			echo json_encode($msg);
			
		}

		
		/**
		 *-----------------------------------------------
		 * 文件上传
		 *-----------------------------------------------
		 * @param
		 * @return
		 */
		public function uploade(Request $request)
		{   
			// 定义消息数组
			$msg = ['success'=>0,"file"=>'']; 

	        $file = $request->file('file'); //获取文件的信息
	        // 文件是否上传成功
	        if ($file->isValid())
            {
	            // 获取文件相关信息
	            $originalName = $file->getClientOriginalName(); // 文件原名
	            $ext = $file->getClientOriginalExtension();     // 扩展名
	            $realPath = $file->getRealPath();   //临时文件的绝对路径
	            $type = $file->getClientMimeType();     // image/jpeg

	            // 上传文件
	            $filename = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;

	            // 使用我们新建的uploads本地存储空间（目录）
	            $bool = move_uploaded_file($realPath,"../public/admin/bannerimg/".$filename);
	            if($bool){
	            	$msg["success"] = 1;
	            	$msg["file"] = $filename;
	            }
            }
            //返回json 信息
            echo json_encode($msg);
		}
	}

	