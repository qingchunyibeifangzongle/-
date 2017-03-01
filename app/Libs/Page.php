<?php 
   namespace App\Libs;
   class Page
   {    
   	    /**
   	    * 1 $count    总共有多少条记录
   	    * 2 $pagesize 每页显示多少条记录
   	    * 3 $now_page 当前页 now 现在意思
        * 4 $url      点击分页的连接地址 如果没有将是ajax 传值
   	    */
   	    protected $count     =null;    //总共有多少条数据
   	    protected $page_size =null;    //每页显示多少条  
        protected $now_page  =null;    //当前页
        protected $num       = 4;      //数字列表前后显示多少页
   	    protected $url       =null;    //链接地址
   	    protected $page_sum  =null;    //总共有多少页  计算得来 不需要传参数

   	    public function __construct($config=array())
   	    {   
            $this->count    = $config['count'];

            $this->page_size= $config['page_size'];

            $this->now_page = $config['now_page'];

            if(isset($config['num']))
            {
                $this->num = $config['num'];
            } 

            if(isset($config['url']))
            {
                $this->url = $config['url'];
            }

   	        $this->page_sum = ceil($config['count']/$config['page_size']);   
   	    }
        
        /**
        *  当前页 和总共有多少页
        */
        public function now()
        {
        	$page =$this->now_page.'/'.$this->page_sum.'页&nbsp;&nbsp;&nbsp;';
		    $page.="共".$this->count."条数据&nbsp;&nbsp;";
			return $page;
        }

        /**
        * 首页 上一页
        */
   	    public function first()
   	    {   
   	    	if($this->now_page>1)
   	    	{ 
            if($this->url)
            {
                $page ='<a href="'.$this->url.'page=1" class="page" >首页</a>';
                $page.='<a href="'.$this->url.'page='.(($this->now_page)-1).' "  class="page" ">上一页</a>';
            }else
            {
                $page ='<a href="javascript:void(0)" page="1" class="page" ">首页</a>';
                $page.='<a href="javascript:void(0)" page="'.(($this->now_page)-1).'"  class="page" ">上一页</a>';
            }
   	    	}else
   	    	{
   	    		$page ='';
   	    	}
   	    	return $page;
   	    }

   	    /**
   	    * /数字页
   	    */
   	    public function num()
   	    {   
   	    	$page = '';

   	    	//列表前页面
   	    	if($this->now_page > 1)
   	    	{ 
                for ($i=$this->num; $i >0 ; $i--) 
                { 
                    if($this->url)
                    {
                        $page.='<a  href="'.$this->url.'page= '.(($this->now_page)-$i).'"  class="page" ">'.(($this->now_page)-$i).'</a>';
                    }else
                    {
                    	$page.='<a  href="javascript:void(0)" page="'.(($this->now_page)-$i).'" class="page" ">'.(($this->now_page)-$i).'</a>';
                    }
                }
   	    	}
   	    	//当前页
   	    	$page .=  '<a href="javascript:void(0)"  class="page current" >'.$this->now_page.'</a>';

   	    	//列表后页面
   	    	if($this->now_page<$this->page_sum)
   	    	{
	   	    	for ($i=1; $i <=$this->num ; $i++)
	   	        { 
                    if($this->url)
                    {
                        $page.='<a  href="'.$this->url.'page= '.(($this->now_page)+$i).' "  class="page" >'.(($this->now_page)+$i).'</a>';
                    } 
                    else
                    {
                    	$page.='<a  href="javascript:void(0)" page="'.(($this->now_page)+$i).'" class="page" ">'.(($this->now_page)+$i).'</a>';
                    } 
	   	    	}
   	    	}
   	    	
   	    	return $page;
   	    }

   	    /**
   	    * 尾页 后一页
   	    */
   	    public function last()
   	    {  
   	    	if($this->now_page < $this->page_sum )
   	    	{ 
            if($this->url)
            {
                $page ='<a href="'.$this->url.'page='.(($this->now_page)+1).'" class="page" >下一页</a>';
                $page.='<a href="'.$this->url.'page='.$this->page_sum.'"  class="page" >最后一页</a>';
            }
            else
            {
                $page ='<a href="javascript:void(0)" page="'.(($this->now_page)+1).'" class="page" >下一页</a>';
                $page.='<a href="javascript:void(0)" page="'.$this->page_sum.'" class="page" >最后一页</a>';
            } 
   	    		
   	    	}else
   	    	{
   	    		$page='';
   	    	}
   	    	return $page;
   	    }
        
        //调用函数 返回分页信息
   	    public function create_page()
   	    {   
   	    	if($this->page_sum<=1)
   	    	{
   	    		return "当前总共一页";
   	    	}else
   	    	{
				return $this->now().$this->first().$this->num().$this->last();
   	    	}
   	    }
   }

 ?>