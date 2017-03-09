<?php
namespace App\Http\Controllers\Frontend\Search;                     //使用命名空间申明是本类


use Illuminate\Http\Request;
use App\Http\Requests;                                    // 引用请求插件类
use App\Http\Controllers\Controller;                      // 引用控制器类
use Illuminate\Support\Facades\DB;                       // 引用DB类;  可以进行查询
use App\Http\Models\Login;								//引入MODEL

class SearchController extends Controller
{

		/**
		*前台搜索页面
		*/    
        public function searchShow(Request $request)
        {
        		$searchWhere =  $request->input('search');
        		$searchgoods = DB::table('goods')->where('goods_id', '>', 9)->paginate(1)->toArray();
        	   print_r($searchgoods['data']);die();
             return $this->top().view('frontend.search.searchshow',compact("searchgoods"));   
        }



}
?>