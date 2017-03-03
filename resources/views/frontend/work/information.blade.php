<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>校园二货招聘发布</title>
   <link href="Content/pub_job.cmb.__1472658423__.css" rel="stylesheet" type="text/css" />
    <link href="Content/pub_resume.cmb.__1472658507__.css" rel="stylesheet" type="text/css" />
    <link href="Content/upload-img.__1488362400__.css" rel="stylesheet" type="text/css" />
    <script src="Scripts/ganji.__1472653905__.js" type="text/javascript"></script>
    </head>
<body >


<form method="post"  action="{{URL('frontend/postInformation')}}" onsubmit="return checksubmit()" enctype="multipart/form-data" >
    <div class="create-resume">
        <div class="info-con  pt0" id="base_area">
            <div class="basic"> <div class="tit mb30">基本信息</div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>用户名
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="user_nickname"placeholder="张三" id="user_nickname" class="text w130 w360" size="40"/>
                    <span style='color:red' id="user_nicknames"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>职位
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="job_name" id="job_name" placeholder="送餐" class="text w130 w360" size="40"/>
                    <span style='color:red' id="job_names"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>薪水
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="job_salary" id="job_salary" placeholder="10" class="text w130 w360" size="40"/>
                    <span style='color:red' id="job_salarys"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>招聘人数
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="number" id="number" placeholder='10' class="text w130 w360" size="40"/>
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <span style='color:red' id="numbers"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>地点
                </span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>图片
                </span>
                    <input type="file" name="myfile" id='file'/>
                    <span style='color:red' id="files"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>描述
                </span>
                    <textarea  cols="65" rows="10"   name="job_describe" id="job_describe" placeholder="例如：管吃"></textarea>
                    <span style='color:red' id="job_describes"></span>
                </div>
            </div>

        <div class="resume-submit pt20">
            <input type="submit" value="立即发布" id="pub_btn" class="pub-resume-btn" />
        </div>
    </div>
</div>
</form>



</body>
</html>
<script src="js/jquery.js"></script>
<script>
$(function(){

})
function checksubmit()
{
    var user_nickname = $("#user_nickname").val();
    var job_name = $("#job_name").val();
    var job_salary = $("#job_salary").val();
    var number = $("#number").val();
    var job_describe = $("#job_describe").val();
    var file = $("#file").val();
    if(user_nickname == "" || job_name == "" || job_salary == "" || number == "" || job_describe == "" || file == ''){
        alert("啥都不写，还想提交？想啥呢？");
        return false;
    }else{
        if(!/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(user_nickname)){
            $("#user_nicknames").html("用户名为中文");
            return false;
        }else{
            $("#user_nicknames").html("");
        }
        if(!/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(job_name)){
            $("#job_names").html("职位为中文");
            return false;
        }else{
            $("#job_names").html("");
        }
        if(!/^[0-9]{2,}$/.test(job_salary)){
            $("#job_salarys").html("薪水为数字");
            return false;
        }else{
            $("#job_salarys").html("");
        }
        if(!/^[0-9]{2,}$/.test(number)){
            $("#numbers").html("人数为数字");
            return false;
        }else{
            $("#numbers").html("");
        }
        if(!/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(job_describe)){
            $("#job_describes").html("描述是中文");
            return false;
        }else{
            $("#job_describes").html("");
        }
        if(!file){
            $("#files").html('图片不能为空');
            return false;
        }else{
            $("#files").html("");
        }
        return true;
    }

}
</script>

