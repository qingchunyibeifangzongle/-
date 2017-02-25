<?php
	namespace App\Http\Controllers\Admin\WebConfig;           //使用命名空间申明是本类
	use Illuminate\Http\Request;
	use App\Http\Requests;                                    // 引用请求插件类
	use App\Http\Controllers\Controller;                      // 引用控制器类
    use App\Model\Admin\WebConfig\Nav;

	class WebNavController extends Controller
	{

		/**
		 *-----------------------------------------------
		 *   展示页面
		 *-----------------------------------------------
		 * @param
		 * @return
		 */
		public function index(Request $request)
		{   
			if($request->isMethod('post')){
                
                $msg = ["status"=>1,"msg"=>""]; 
				// 请求数据验证
				$this->validate($request, [
					'name' => 'required',
					'url' => 'required|url',
					'sort' => 'required|numeric',
				]);

				//数据入库

			    $data = $request->input();
			    unset($data['_token']);
				$obj = new Nav;
				if ( $id = $obj ->insertGetId($data) ){
					$msg["msg"] = $data;
				}
				echo json_encode($msg);

			}else{
				return view("admin.webconfig.navadd");
			}
		}

		/**
		 *-----------------------------------------------
		 * 展示导航
		 *-----------------------------------------------
		 * @param
		 * @return
		 */
		public function show()
		{  

			//查询所有导航信息
			$obj = new Nav;
			$data = $obj -> orderBy('sort','desc') -> get();
			$data = $data -> toArray();

			return view("admin.webconfig.nav",compact("data"));
		}

		/**
		 *-----------------------------------------------
		 * 几点即改修改
		 *-----------------------------------------------
		 * @param
		 * @return
		 */
		public function update(Request $request)
		{
			$data = $request->input();
			$id = $data['id'];
			unset($data['id']);

			//修改表数据
			$res = Nav::where('id',$id)->update($data);
			if($res){
				$msg['status'] = 1; 
			}else{
				$msg['status'] = 0;
			}
			echo json_encode($msg);
		}

		/**
		 *-----------------------------------------------
		 * 删除
		 *-----------------------------------------------
		 * @param
		 * @return
		 */
		public function delete(Request $request)
		{
			$id = $request->input('id');
			if(Nav::destroy($id)){
				echo 1;
			}else{
				echo 0 ; 
			}
		}

	}//类结束符