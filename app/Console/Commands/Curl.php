<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Requests;  
use DB;   

class Curl extends Command
{
        /**
         * The name and signature of the console command.
         *
         * @var string
         */
        protected $signature = 'timecurl';

        /**
         * The console command description.
         *
         * @var string
         */
        protected $description = 'timecurl';

        /**
         * Create a new command instance.
         *
         * @return void
         */

        //表名
        static  $table = 'news';
        //表标记
        static  $num   = 1;  
        //分类采集
        static  $col   = 89; 

        public function __construct()
        {
            parent::__construct();
            // 注意服务器上的路径和权限
            $res = file_get_contents(public_path()."/log.txt");
            if($res)
            { 
                $res =  json_decode($res,true);
                self::$table = $res['last_table_name'];
                self::$num   = $res['last_table_num'];
            }
        }

        /**
         * Execute the console command.
         *
         * @return mixed
         */
        public function handle()
        {
                //curl新闻分类
                $url  = 'http://roll.news.sina.com.cn/s/channel.php?ch=01#col='.self::$col.'&spec=&type=&ch=01&k=&offset_page=0&offset_num=0&num=60&asc=&page=1';
                
                //规定正则     
                $preg = '/<li>\s+'.
                        '<span class=".*"><a href="(.*)" target=".*">(.*)<\/a><\/span>\s+'.
                        '<span class=".*">(.*)<\/span>\s+'.
                        '<\/li>/'; 
                
                $arr  = $this->Ncurl($url,$preg,1);
                
                //curl新闻详情
                $preginfo = '/<div class="article article_16" id="artibody">(.*)\s+'.
                            '<\/div>/isU'; 
                
                $arr = array_slice($arr,1); 
                foreach ($arr[0] as $k => $v)
                {
                    $arrinfo = $this->Ncurl($v,$preginfo);
                    $content = trim(array_slice($arrinfo,1)[0][0]);
                    $arr['content'][] = $content;
                }
                
                //入库操作
                $data = DB::table('news_category')->select('nc_id')->get();
            
                foreach ($data as $key => $value)
                {
                    $nc_id[$key] = $value->nc_id;
                }
                $nc_key    = array_rand($nc_id);
                self::$col = $nc_id[$nc_key];
                $row = ['n_contenlink','n_title','n_time','n_content'];
                for ($i=0;$i<count($arr[0]);$i++)
                { 
                     $insertarr = array_combine($row,array_column($arr,$i));
                     $insertarr['newscate_id'] = self::$col;
                     $insertarr['n_author']    ='wjl';
                     $nc_id = DB::table(self::$table)->insertGetId($insertarr);
                    
                     if($nc_id%100==0)
                     {
                        self::$num++;
                        self::$table = 'news'.self::$num;
                        //创建表
                        $sql =  "CREATE TABLE `navacate_".self::$table."` (
                                `n_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                                `n_title` varchar(80) DEFAULT NULL COMMENT '新闻标题',
                                `n_contenlink` varchar(255) NOT NULL COMMENT '详情页链接',
                                `n_content` varchar(255) NOT NULL COMMENT '新闻内容',
                                `n_time` varchar(255) NOT NULL COMMENT '新闻时间',
                                `n_author` varchar(10) NOT NULL COMMENT '作者',
                                `newscate_id` int(11) DEFAULT NULL COMMENT '分类id',
                                PRIMARY KEY (`n_id`)
                                ) ENGINE=MyISAM AUTO_INCREMENT=".($nc_id+1)." DEFAULT CHARSET=utf8";
                        DB::select($sql);
                     }
                 }
                //存入文件
                $log = json_encode(['last_table_name'=>self::$table,'last_table_num'=>self::$num]);
                file_put_contents(public_path().'/log.txt',$log);
        }
        /**
         *采集
         *
         * @author  JINLONG
         * @param 
         * @return 
        */
         private  function Ncurl($url,$preg,$charset=0)
        {
            header('content-type:text/html;charset=utf8');
            
            //curl的使用 get请求实例化
            $ch=curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);

            //设置请求的页面是否直接输出，1代表不输出保存在变量中，0是默认，代表直接输出
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           
            //绕过https请求的验证
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
           
            //输出内容
            $out=curl_exec($ch);
            // $out=iconv('GBK','utf-8//ignore',$out);                       //同下
            if ($charset) {$out=mb_convert_encoding($out,'utf-8','gbk'); }   //第一个是目标
            //释放资源
            curl_close($ch);
            //匹配正则
            preg_match_all($preg,$out,$ar);
            return $ar;   
        }
}
