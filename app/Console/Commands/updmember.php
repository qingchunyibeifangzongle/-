<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
class updmember extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'updmember';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'updmember';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Request $request)
    {
         // $fuser_id  =  $request->session()->get('user_id');

         //    $is_member = DB::table('frontend_member')->select('register_member_time','register_member_betweentime')->where('fuser_id','=',$fuser_id)->first();
           
         //    if ($is_member)
         //    {
         //            $now_time = time();
         //            $register_member_time = $is_member->register_member_time;
         //            if ($now_time-$register_member_time>20)
         //            {
         //                    $line =  DB::table('frontend_user')->where('user_id','=',$fuser_id)->update(['is_member' =>0]);
         //                    $line =  DB::table('frontend_member')->where('fuser_id','=',$fuser_id)->update(['status' =>3]);
         //            }elseif($now_time-$register_member_time>10 && $now_time-$register_member_time<20)
         //            {
         //                    $line =  DB::table('frontend_member')->where('fuser_id','=',$fuser_id)->update(['status' =>2]);
         //            }
                
         //    }   
    }
}
