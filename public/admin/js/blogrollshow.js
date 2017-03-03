/* 
* @Author: Marte
* @Date:   2017-02-28 10:16:50
* @Last Modified by:   Marte
* @Last Modified time: 2017-03-01 13:46:47
*/

$(document).ready(function(){
        /**
         *-----------------------------------------------
         *  即点即改
         *-----------------------------------------------
         * @param
         * @return
         */
        $('.update').bind("click", function(){
            $(this).next().show();
        })//修改结束

        //失去焦点事件 确认修改
        $('.confirmsave').bind("blur", function(){
        // $('.confirmsave').blur(function(){
            var _this = $(this);
            _this.off("blur"); 
            var id = $(this).parents('tr').attr("id");
            var name = $(this).attr('navname');
            var value = $(this).val();
            //调取验证
            if(verfy(name,value,_this)==false){
                _this.parent().hide();
                _this.val('');
                return ;
            }
            //修改
            $.ajax({
               type: "get",
               url: "../admin/blogrollUpdate",
               data: name+"="+value+"&id="+id,
               async:false, 
               dataType:'json',
               success: function(msg){
                  if(msg.status==1){
                        _this.parent().prev().html(value);
                        _this.parent().hide();
                        _this.val(''); 
                        _this.parent().hide();
                  }     
               }
            });
         })

        /**
         *-----------------------------------------------
         * 验证信息
         *-----------------------------------------------
         * @param
         * @return
         */
        function verfy(name,value,obj)
        {    

            //判断为不为空
            if(value==''){
                alert("不能为空");
                return false;
            }

            //判断 排序
            if(name=='sort'){
                var reg = new RegExp("^[0-9]*$");
                if(!reg.test(value)){
                    alert("请输入数字!");
                    return false;;
                }
            }
            if(name=='url'){
                var reg = new RegExp("^[A-Za-z]+://[A-Za-z0-9-_]+\\.[A-Za-z0-9-_%&\?\/.=]+$");
                if(!reg.test(value)){
                    alert("请输入正确的url地址!");
                    return false;;
                }
            }
        }//验证结束

        /**
         *-----------------------------------------------
         * 删除
         *-----------------------------------------------
         * @param
         * @return
         */
        $('.delete').click(function(){
            var _this = $(this).parents('tr')
            var id = _this.attr("id");
            //修改
            $.ajax({
               type: "get",
               url: "../admin/blogrollDelete",
               data: "id="+id,
               async:false, 
               success: function(msg){
                   if(msg==1){
                        _this.remove();
                   }else{
                        alert("删除失败");
                   }
               }
            });
        })//删除结束


        
});