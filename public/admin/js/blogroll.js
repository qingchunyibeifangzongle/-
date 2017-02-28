/* 
* @Author: Marte
* @Date:   2017-02-28 09:52:18
* @Last Modified by:   Marte
* @Last Modified time: 2017-02-28 10:08:43
* 友情链接 js 文件
*/

$(document).ready(function(){
    /**
     *-----------------------------------------------
     * 添加友情链接
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
                required:"请输入友情链接的名称",
            },
            url:{
                required:"请输入友情链接的地址",
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
                        $('#commentForm')[0].reset()
                   }else{
                        alert("添加失败");
                   }
                },
            }); 
        }, 

    })//添加结束
});