$(function(){
    /**
     *-----------------------------------------------
     * 添加导航
     *-----------------------------------------------
     * @param
     * @return
     */
    jQuery.validator.addMethod("isMobile", function(value, element) {
        var length = value.length;
        var mobile = /^(13[0-9]{9})|(18[0-9]{9})|(14[0-9]{9})|(17[0-9]{9})|(15[0-9]{9})$/;
        return this.optional(element) || (length == 11 && mobile.test(value));
    }, "请正确填写您的手机号码");
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
            price:{
                required:true,
                number:true,
            },
            daigo_price:{
                required:true,
                number:true,
            },

            phone : {
                required : true,
                minlength : 11,
                // 自定义方法：校验手机号在数据库中是否存在
                // checkPhoneExist : true,
                isMobile : true
            },

        },

        // 定义错误消息
        messages:{
            title:{
                required:"请输入任务名称",
            },
            details:{
                required:"请输入商品详情",
                details:"请输入商品详情",
            },
            address:{
                required:"请输入交易地点",
                address:"请输入交易地点",
            },
            price:{
                required:"请输入交商品总价 : 数字",
                price:"请输入交商品总价 : 数字",
            },
            daigo_price:{
                required:"请输入交代购 : 数字",
                daigo_price:"请输入代购费用 : 数字",
            },
            phone : {
                required : "请输入手机号",
                minlength : "确认手机不能小于11个字符",
                isMobile : "请正确填写您的手机号码"
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