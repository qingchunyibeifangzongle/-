<?php
namespace App\Model;                             //使用命名空间
use Illuminate\Database\Eloquent\Model;          //继承类的路径
use DB;
class Money extends Model
{
        protected  $table='funds_manage';                //表名
        
        // protected $primaryKey='user_id';       //可以自动指定 主键
        // protected $fillable  = ['name','age']; //被填写字段
        // protected $guarded   = ['user_id'];    //受保护的字段
        // protected $hidden    = [];             //'age'   隐藏字段  

        //查询资金
        public function getData($where)
        {
            //dd($where); die;
            $data =  DB::table($this->table)->where($where)->get();
            return $data;
        }
        //修改审核状态
        public function upStatus($where,$data)
        {
            //dd($where); dd($data);die;
            $arr = [];
            foreach ($where as $key => $value) {
                $filed = $key;
                $arr = explode(',', $value);
            }
            //var_dump($arr); die;
            $res =  DB::table($this->table)
                        ->whereIn($filed,$arr)
                        ->update($data);
            return $res;
        }
                


}
