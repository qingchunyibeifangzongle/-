<?php
    namespace App\Http\Controllers\Pub;                     //使用命名空间申明是本类
    use Illuminate\Http\Request;
    use App\Http\Requests;                                    // 引用请求插件类
    use App\Http\Controllers\Controller;                      // 引用控制器类
    use DB;   
    
    /**
     *-----------------------------------------------
     * 获取地区接口数据
     *-----------------------------------------------
     * @url 请求地址  http://www.liyutao.com/xiangmu/school/public/admin/getReion?id=43
     * @return  json;
     */
    class GetRegionController extends Controller
    {
        /**
         *-----------------------------------------------
         * 获取地区信息写入文件
         *-----------------------------------------------
         * @param
         * @return
         */
        public function index(Request $request)
        {    
             $id = $request->input("id"); 
             if(empty($id)){
                $msg["status"] =0 ;
                $msg["msg"] ="请求参数不能为空" ;
             }else{
                 $data = $this->getdate($id);
                 $data = json_encode($data);
                 $msg["status"] =1 ;
                 $msg["msg"] = $data;;
             }
             return json_encode($msg); //返回信息
        }

        /**
         *-----------------------------------------------
         * 递归获取数据
         *-----------------------------------------------
         * @param
         * @return
         */
        public function  getdate($pid)
        {  
            $file = public_path("getregion/".$pid.".php");

            if(file_exists($file)){
                $data = $this -> get($file);
            }else{
                //将子数据写入文件
                $data = $this->getOne($pid);
                $this->write($file,$data);
            }

            return $data; 

        }//获取地区数据


        /**
         *-----------------------------------------------
         * 获取子数据
         *-----------------------------------------------
         * @param
         * @return
         */
        public function getOne($pid='')
        {  
            //先获取所有数据
            $all = $this->getALL();

            $data =[]; 
            foreach ($all as $key => $value) {
               if($value["parent_id"] == $pid){
                  $data[$key] = $value;
               }
            }
            return $data; 
        }

        /**
         *-----------------------------------------------
         * 
         *-----------------------------------------------
         * @param
         * @return
         */
        public  function get($file)
        {
            //直接从文件中获取所有的地区数据
            $data = require_once $file;
            foreach ($data as $key => $value) {
                $data[$key] = get_object_vars(json_decode($value));
            }
            return $data;
        }

        /**
         *-----------------------------------------------
         * 获取全部数据
         *-----------------------------------------------
         * @param
         * @return
         */
        public function getAll()
        {   
            $file = public_path("getregion/getregionAll.php");
            if(!file_exists($file)){
                $this->write();
            }
            return $this->get($file);

        }//后去所有数据

        /**
         *-----------------------------------------------
         * 将数据写入文件
         *-----------------------------------------------
         * @param $file 文件路径
         * @return$data 要写入的数据
         */
        public function write($file='',$data=[])
        {   
            if($file=='' || empty($data)){
                $file = public_path("getregion/getregionAll.php");
                $data = DB::table('region')->get(); //查询所有的地区数据写入表中
            }
            //如果为空直接返回不写入文件
            if(empty($data)){
                return ; 
            }

            set_time_limit(100); //设置脚本执行时间
            file_put_contents($file, "<?php".PHP_EOL."return [ ".PHP_EOL);

            foreach ($data as $key => $value) {
                file_put_contents($file, "'".$key."' => '".json_encode($value)."'," .PHP_EOL, FILE_APPEND);
            }

            file_put_contents($file, "] ; ".PHP_EOL,FILE_APPEND);

        }//写入文件结束

    }