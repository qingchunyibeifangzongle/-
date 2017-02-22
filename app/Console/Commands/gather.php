<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
class gather extends Command
{

//     //表名
//     static  $table = 'news1';
//     //表标记
//     static  $num = 1; 

//     /**
//      * The name and signature of the console command.
//      *
//      * @var string
//      */
//     protected $signature = 'gather';

//     /**
//      * The console command description.
//      *
//      * @var string
//      */
//     protected $description = 'gather';

//     /**
//      * Create a new command instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         parent::__construct();
//     }

//     /**
//      * Execute the console command.
//      *
//      * @return mixed
//      */
//     public function handle()
//     {

//         //查询新闻分类
//         $data = DB::table('category')->select('cat_name','cat_id')->get();
//         $num=0;
//         foreach ($data as $key => $value) {
//             $url = 'http://roll.news.sina.com.cn/s/channel.php?ch=01#col='.$value->cat_id.'&spec=&type=&ch=01&k=&offset_page=0&offset_num=0&num=60&asc=&page=1';
//             $str = file_get_contents($url);
//             $str = mb_convert_encoding($str,'utf8','gbk'); 
//             $preg = '/<li>\s+'.
//                     '<span class=".*"><a href="(.*)" target=".*">(.*)<\/a><\/span>\s+'.
//                     '<span class=".*">(.*)<\/span>\s+'.
//                     '<\/li>/';  
//             //匹配正则
//             preg_match_all($preg , $str, $arr); 
//             //处理数组
//             $arr = array_slice($arr,1);
//             //采集内容
//             foreach ($arr[0] as $k => $v) {
//                 $str_con = file_get_contents($v);
//                 $preg_con = '/<div class="article article_16" id="artibody">(.*)\s+'.
//                             '<\/div>/isU';  
//                 //匹配正则
//                 preg_match_all($preg_con , $str_con, $arr_con); 
//                 $content = trim(array_slice($arr_con,1)[0][0]);
//                 $arr['content'][] = $content;
//             }
//             $row = ['n_url','n_title','n_time','n_content'];
//             for ($i=0;$i<count($arr[0]);$i++) {
//                  $va = array_combine($row,array_column($arr,$i));
//                  $va['cat_id'] = $value->cat_id;
//                  $n_id = DB::table(self::$table)->insertGetId($va);
//                  if($n_id%5==0)
//                  {
//                     self::$num++;
//                     self::$table = 'news'.self::$num;
//                     //创建表
//                     $sql = 
//                    "CREATE TABLE `navacate_".self::$table."` (
//                     n_id int(11) unsigned NOT NULL AUTO_INCREMENT,
//                     n_url varchar(255) DEFAULT NULL COMMENT '新闻标题url',
//                     n_title varchar(255) DEFAULT NULL COMMENT '新闻标题',
//                     n_content text,
//                     n_time text COMMENT '新闻发布时间',
//                     cat_id int(11) DEFAULT NULL,
//                     PRIMARY KEY (n_id)
//                     ) ENGINE=MyISAM AUTO_INCREMENT=".($n_id+1)." DEFAULT CHARSET=gbk;";
//                     DB::select($sql);
//                  }
//             }
//         } 


//     }


// /**
//      *采集 分表
//      *
//      * @author  JINLONG
//      * @param 
//      * @return 
//     */     
//         //表名
//         static  $table = 'news';
//         //表标记
//         static  $num = 1;  
//         //分类采集
//         static  $col = 89; 

//         public function __construct() 
//         {

//             $res = file_get_contents("./log.txt");
//             if($res)
//             {
//                 $res =  json_decode($res,true);
//                 self::$table = $res['last_table_name'];
//                 self::$num = $res['last_table_num'];
//             }
//         }
//          public function NewsCurl(Request $request)
//         {
//             //curl新闻分类
//             $url = 'http://roll.news.sina.com.cn/s/channel.php?ch=01#col='.self::$col.'&spec=&type=&ch=01&k=&offset_page=0&offset_num=0&num=60&asc=&page=1';
            
//             //规定正则     
//             $preg = '/<li>\s+'.
//                     '<span class=".*"><a href="(.*)" target=".*">(.*)<\/a><\/span>\s+'.
//                     '<span class=".*">(.*)<\/span>\s+'.
//                     '<\/li>/'; 
            
//             $arr = $this->Ncurl($url,$preg,1);
            
//             //curl新闻详情
//             $preginfo = '/<div class="article article_16" id="artibody">(.*)\s+'.
//                         '<\/div>/isU'; 
            
//             $arr = array_slice($arr,1);
//             foreach ($arr[0] as $k => $v)
//             {
//                 $arrinfo = $this->Ncurl($v,$preginfo);
//                 $content = trim(array_slice($arrinfo,1)[0][0]);
//                 $arr['content'][] = $content;
//             }
            
//             //入库操作
//             $data = DB::table('news_category')->select('nc_id')->get();
        
//             foreach ($data as $key => $value)
//             {
//                 $nc_id[$key]=$value->nc_id;
//             }
//             $nc_key    = array_rand($nc_id); 
//             self::$col = $nc_id[$nc_key];
//             $row = ['n_contenlink','n_title','n_time','n_content'];
//             for ($i=0;$i<count($arr[0]);$i++)
//             { 
//                  $insertarr = array_combine($row,array_column($arr,$i));
//                  $insertarr['newscate_id'] =self::$col;
//                  $nc_id = DB::table(self::$table)->insertGetId($insertarr);
                  
//                  if($nc_id%5==0)
//                  {
//                     self::$num++;
//                     self::$table = 'news'.self::$num;
//                     //创建表
//                     $sql =  "CREATE TABLE `navacate_".self::$table."` (
//                             `n_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
//                             `n_title` varchar(80) DEFAULT NULL COMMENT '新闻标题',
//                             `n_contenlink` varchar(255) NOT NULL COMMENT '详情页链接',
//                             `n_content` varchar(255) NOT NULL COMMENT '新闻内容',
//                             `n_time` varchar(255) NOT NULL COMMENT '新闻时间',
//                             `newscate_id` int(11) DEFAULT NULL COMMENT '分类id',
//                             PRIMARY KEY (`n_id`)
//                             ) ENGINE=MyISAM AUTO_INCREMENT=".($nc_id+1)." DEFAULT CHARSET=utf8";
//                     DB::select($sql);
//                  }
//              }
//             //存入文件一遍下次调用
//             $log = json_encode(['last_table_name'=>self::$table,'last_table_num'=>self::$num]);
//             file_put_contents('./log.txt',$log);
//         }   
//         /**
//          *采集
//          *
//          * @author  JINLONG
//          * @param 
//          * @return 
//         */
//          private  function Ncurl($url,$preg,$charset=0)
//         {
//             header('content-type:text/html;charset=utf8');
//             //curl的使用 get请求实例化
//             $ch=curl_init();
//             curl_setopt($ch, CURLOPT_URL, $url);

//             //设置请求的页面是否直接输出，1代表不输出保存在变量中，0是默认，代表直接输出
//             curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           
//             curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);  //绕过https请求的验证
//             curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
//             curl_setopt($ch, CURLOPT_HEADER, 0);
           
//             //输出内容
//             $out=curl_exec($ch);
//             // $out=iconv('GBK','utf-8//ignore',$out);       //同下
//             if ($charset) {$out=mb_convert_encoding($out,'utf-8','gbk'); } //第一个是目标
                
           

//             //释放资源
//             curl_close($ch);
//             //匹配正则
//             preg_match_all($preg,$out,$ar);
//             return $ar;   
//         }
// }
