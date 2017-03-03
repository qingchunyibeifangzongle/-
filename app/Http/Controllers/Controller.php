<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Model\Admin\WebConfig\Region;

class Controller extends BaseController
{
    // use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        DB::enableQueryLog();
    }

    /**
     *-----------------------------------------------
     * 将用户操作写入表中
     *-----------------------------------------------
     * @param
     * @return
     */
    public function __destruct()
    {      
        $this->getLog();
    }

    /**
     *-----------------------------------------------
     * 获取用户操作信息并且添加
     *-----------------------------------------------
     * @param
     * @return
     */
    public function getLog()
    {
        $data = DB::getQueryLog();
        if(empty($data)){
           return ;
        }
        $sql = $data[0]['query'];
        $params =  $data[0]['bindings'];

        $sql = str_replace("?", "'%s'", $sql);
        array_unshift($params, $sql);

        $sql = call_user_func_array('sprintf', $params);  //获取当前的sql 语句
        $log['sql'] = $sql ;
        $log['time'] = time() ;
        $log['uid'] = 1 ;
        $log['ip'] = $_SERVER['REMOTE_ADDR'];

        DB::table('log')->insert($log);
    }




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
            var_dump( Region::get());die;
            $city = Region::where('region_name', $city)->first();
            // $city = $city ->toArray();
            var_dump($city);die;

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


}
