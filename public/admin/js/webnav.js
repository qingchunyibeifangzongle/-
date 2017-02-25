$(function(){
	/**
	 *-----------------------------------------------
	 * 添加导航
	 *-----------------------------------------------
	 * @param
	 * @return
	 */
	$("#commentForm").validate({

	   focusInvalid : true, 
	    // 定义规则
	    rules:{
	        name:{
	         required:true, 
	        },
	        url:{
	            required:true, 
	            url:true,
	        },
	        sort:{
	            required:true,
	            number:true,
	        },

	    },

	    // 定义错误消息
	    messages:{
	        name:{
	            required:"请输入导航名称",
	        },
	        url:{
	            required:"请输入图片的链接地址名称",
	            url:"必须是完整的url 地址",
	        },
	        sort:{
	            required:"不能为空",
	            number:"必须为数字",
	        },
	    } ,   

	    submitHandler : function(form) {  //验证通过后的执行方法
	       //当前的form通过ajax方式提交（用到jQuery.Form文件）
	       $(form).ajaxSubmit({
	       		dataType:"json",
	       		// 成功
	            success:function( msg ){
	               if(msg.status == 1 ){
	               		alert("添加成功");
	               }else{
	               		alert("添加失败");
	               }
	            },
	        }); 
	    }, 

	})//添加结束
    
})