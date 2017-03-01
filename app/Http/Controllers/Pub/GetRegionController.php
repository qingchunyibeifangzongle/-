<?php
    namespace App\Http\Controllers\Pub;                     //使用命名空间申明是本类
    use Illuminate\Http\Request;
    use App\Http\Requests;                                    // 引用请求插件类
    use App\Http\Controllers\Controller;                      // 引用控制器类
    use DB;   



    class GetRegionController extends Controller
    {
        /**
         *-----------------------------------------------
         * 获取地区信息写入文件
         *-----------------------------------------------
         * @param
         * @return
         */
        public function index()
        {
             $data = DB::table('region')->get();

             $this->getdate($data);
        }

        /**
         *-----------------------------------------------
         * 递归获取数据
         *-----------------------------------------------
         * @param
         * @return
         */
        public function  getdate($data,$pid=1)
        {  
            header("content-type:text/html; charset=utf-8");
            $arr = []; 
            foreach ($data as $key => $value)
            {
                
                if($value['parent_id']==$pid){
                    $arr[$key] = $value;
                }
                $this->getdate($data,$value["region_id"]);
            }
            var_dump($arr);die;
        }
    }