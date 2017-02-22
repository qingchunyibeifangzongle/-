<?php
namespace App\Model;                             //使用命名空间
use Illuminate\Database\Eloquent\Model;          //继承类的路径
use DB;
class Login extends Model
{
        protected  $table='admin';                //表名
        
        // protected $primaryKey='user_id';       //可以自动指定 主键
        // protected $fillable  = ['name','age']; //被填写字段
        // protected $guarded   = ['user_id'];    //受保护的字段
        // protected $hidden    = [];             //'age'   隐藏字段  

        //简单的登录验证查询
        public function GetOne($where,$type=1)
        {
                //双重过滤   
                $admin_name=htmlspecialchars($where['admin_name']); 

                if ($type)
                {
                        return login::where('admin_name', '=',$admin_name)->find(1);
                }
                else
                {
                        $password=htmlspecialchars($where['password']);
                        $password=MD5($password);
                        return login::whereRaw('admin_name = ? and password = ?', array($admin_name,$password))->find(1);
                }
               
                // return $this->all();                                      //model 里自带的类可以$this  查询出所有的数据
                // $users = DB::table('Ceshi')->get();
                // return  $users;                                           //查询出所有的数据
                // return $this->findOrFail(1);                              //model 里自带的类可以$this  查询一条找到是true 没到是报错
        }
                

        //简单的登录更改时间
        public function Upd($where)
        {
                //修改1
                DB::table('admin')->where('id', $where['id'])->update(['last_time' => $where['now_time']]);
                
                //修改2  自带的model 多了一个 update_at字段
                // $res=$this->find($where['id']);
                // $res->create_time=$where['now_time'];
                // $res->save();
         }


}
