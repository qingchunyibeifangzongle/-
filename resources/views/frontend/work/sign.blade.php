<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>校园二货招聘发布</title>
    <link href="{{URL::asset('frontend/Content/pub_job.cmb.__1472658423__.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{URL::asset('frontend/Content/pub_resume.cmb.__1472658507__.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('frontend/Content/upload-img.__1488362400__.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{URL::asset('frontend/Scripts/ganji.__1472653905__.js')}}" type="text/javascript"></script>
</head>
<body >


<form method="post"  action="{{URL('frontend/postSign')}}" onsubmit="return checksubmit()" enctype="multipart/form-data" >
    <div class="create-resume">
        <div class="info-con  pt0" id="base_area">
            <div class="basic"> <div class="tit mb30">基本信息</div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>用户名
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="sign_name"placeholder="张三" id="sign_name" class="text w130 w360" size="40"/>
                    <input type='hidden' name='_token' value="{{csrf_token()}}">
                    <input type='hidden' name='job_id' value="{{$job_id}}">
                    <span style='color:red' id="sign_names"></span>
                </div>
                <div class="resume-item zindex8">
                <span class="label">
                    <b>*</b>手机号
                </span>
                    <input type="text" data-role="input" maxlength="30" value="" name="sign_tel" id="sign_tel" placeholder="12345678900" class="text w130 w360" size="40"/>
                    <span style='color:red' id="sign_tels"></span>
                </div>
            </div>
            <div class="resume-submit pt20">
                <input type="submit" value="立即报名" id="pub_btn" class="pub-resume-btn" />
            </div>
        </div>
    </div>
</form>



</body>
</html>
<script src="{{ URL::asset('frontend/js/jquery.js')}}"></script>
<script>
    function checksubmit()
    {
        var sign_name = $("#sign_name").val();
        var sign_tel = $("#sign_tel").val();
        if(sign_name == "" || sign_tel == "" ){
            alert("啥都不写，还想提交？想啥呢？");
            return false;
        }else{
            if(!/[\u4E00-\u9FA5\uF900-\uFA2D]/.test(sign_name)){
                $("#sign_names").html("用户名为中文");
                return false;
            }else{
                $("#sign_names").html("");
            }
            if(!/^1[34578]\d{9}$/.test(sign_tel)){
                $("#sign_tels").html("手机号不符合");
                return false;
            }else{
                $("#sign_tels").html("");
            }

            return true;
        }

    }
</script>

