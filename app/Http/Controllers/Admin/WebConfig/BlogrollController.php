<?php
    namespace App\Http\Controllers\Admin\WebConfig;           //使用命名空间申明是本类
    use Illuminate\Http\Request;
    use App\Http\Requests;                                    // 引用请求插件类
    use App\Http\Controllers\Controller;                      // 引用控制器类
    use DB;   
    use App\Model\Admin\WebConfig\Blogroll;

     class BlogrollController extends Controller
     {

        /**
         *-----------------------------------------------
         *  友情链接添加页面
         *-----------------------------------------------
         * @param
         * @return
         */
        public function index(Request $request)
        {   
            if($request->isMethod('get')){
                return view('admin.webconfig.blogroll');
            }else{
                $msg = ["status"=>1,"msg"=>""]; 

                $data = $request -> input();
                // 请求数据验证
                $this->validate($request, [
                    'name' => 'required',
                    'url' => 'required|url',
                    'sort' => 'required|numeric',
                ]);

                //数据入库

                $data = $request->input();
                unset($data['_token']);
                $obj = new Blogroll;
                if ( $id = $obj ->insertGetId($data) ){
                    $msg["msg"] = $data;
                }
                echo json_encode($msg);
            }
        }//添加友情链接结束

        /**
         *-----------------------------------------------
         * 展示友情链接
         *-----------------------------------------------
         * @param
         * @return
         */
        public function show()
        {   
            $obj = new Blogroll;
            $data = $obj -> orderBy('sort','desc') -> get();
            $data = $data -> toArray();

            return view('admin.webconfig.blogrollshow',compact("data"));
        }

        /**
         *-----------------------------------------------
         *  几点即改修改
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
            $res = Blogroll::where('id',$id)->update($data);
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
            if(Blogroll::destroy($id)){
                echo 1;
            }else{
                echo 0 ; 
            }
        }


     }//类结束符

