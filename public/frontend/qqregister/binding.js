
 $(function(){

 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

/**
*邮箱验证
*/
$("#email").keyup(function(){
	   //邮箱
        var email=$('input[name="email"]').val();
        var reg=/^\w+@\w+(\.)(com|net|cn)$/;
        if (reg.test(email)) 
        {
        	//验证邮箱是否唯一
        	$.ajax({
			   type: "POST",
			   url: "onlyEmail",
			   data: {email:email},
			   success: function(msg){
			     if (msg==1) 
			     {
			     	$("#s_email").html("<font color='red'>该邮箱已存在</font>");
			     	$("#perfect").attr("disabled",true);
			     }
			     else
			     {
			     	$("#s_email").html("<font color='green'>√</font>");
			     	$("#perfect").attr("disabled",false);
			     }
			   }
			});        	
        }
        else
        {
        	$("#s_email").html("<font color='red'>邮箱格式不正确</font>");
        	$("#perfect").attr("disabled",true);
        }
})

/**
*用户名验证
*/
	$("#username").keyup(function(){
		var name=$(this).val();
		var reg=/^[A-Za-z0-9\u4e00-\u9fa5]+$/
		if (reg.test(name)) {
			$("#s_name").html("<font color='green'>√</font>");
			$("#perfect").attr("disabled",false);
		}else{
			$("#s_name").html("<font color='red'>昵称只能输入字母数字或汉字</font>");
			$("#perfect").attr("disabled",true);
		}
	})




 /**
 *注册验证
 */

 	$("#perfect").click(function(){

 		//昵称
        var uname=$('input[name="uname"]').val();
        if (uname=="") {
        	$("#s_name").html("<font color='red'>昵称是必填项</font>");
        	return false;
        }else{
        	$("#s_name").html("<font color='green'>√</font>");
        }
     	//邮箱
     	var email=$('input[name="email"]').val();
     	if (email=="") {
     		$("#s_email").html("<font color='red'>请填写邮箱</font>");
        	return false;
     	};
        //密码
        var password=$('input[name="password"]').val();
        var reg=/^(.|\w){6,}$/;
        if (reg.test(password)) {
        	$("#s_password").html("<font color='green'>√</font>");
        }else{
        	$("#s_password").html("<font color='red'>请输入6位数以上的密码</font>");
        	return false;
        }
        //密码2
        var repassword=$('input[name="repassword"]').val();
        if (password!=repassword) {
        	$("#s_repassword").html("<font color='red'>两次输入密码不一致</font>");
        	return false;
        }else{
        	$("#s_repassword").html("<font color='green'>√</font>");
        }
        //URL地址
        var status=$('input[name="uname"]').attr("status");
        var all=new Object();
        all['user_nickname']=uname;
        all['password']=password;
        all['user_email']=email;
        for (var i = 0; i < $(".s-radio").length; i++) {
        	if ($(".s-radio")[i].checked==true) {
        		var user_sex=$(".s-radio").eq(i).val();
        	};
        	
        };
        all['user_sex']=user_sex;
        
    	//QQ绑定注册url        	
    	var url="qqAdd";
    	if (status==1) 
    	{
    	   all['qq']=$("#openid").val();
    	};
    	
        
	    $.ajax({
	  	 	type: "POST",
		    url: url,
		    data: {
		    		all:all
		    		},
		    success: function(msg){
		     if (msg==1) {
		     	window.location="index";
		     };
		   }
		});
        
    }) 
 })
 	