$(function(){
	/**
	 *-----------------------------------------------
	 *  网站管理配置文件
	 *-----------------------------------------------
	 * @param
	 * @return
	 */
	/*init webuploader*/  
	var $list=$("#thelist");    //这几个初始化全局的百度文档上没说明  
	var $btn =$("#ctlBtn");     //开始上传  
	var thumbnailWidth = 100;   //缩略图高度和宽度 （单位是像素），当宽高度是0~1的时候，是按照百分比计算，具体可以看api文档  
	var thumbnailHeight = 100;  

	// 初始化Web Uploader
	var uploader = WebUploader.create({

	    // 选完文件后，是否自动上传。
	    auto: true,

	    // swf文件路径
	    swf: 'webuploader/dist/Uploader.swf',

	    // 文件接收服务端。
	    server: '../admin/uploade',

	    // 选择文件的按钮。可选。
	    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
	    pick: '#filePicker',

	    // 只允许选择图片文件。
	    accept: {
	        title: 'Images',
	        extensions: 'gif,jpg,jpeg,bmp,png',
	        mimeTypes: 'image/*'
	    }
	});

	// 当有文件添加进来的时候
	uploader.on( 'fileQueued', function( file ) {
	    var $li = $(
	            '<div id="' + file.id + '" class="file-item thumbnail">' +
	                '<img>' +
	                '<div class="info">' + file.name + '</div>' +
	            '</div>'
	            ),
	        $img = $li.find('img');


	    // $list为容器jQuery实例
	    $list.append( $li );

	    // 创建缩略图
	    // 如果为非图片文件，可以不用调用此方法。
	    // thumbnailWidth x thumbnailHeight 为 100 x 100
	    uploader.makeThumb( file, function( error, src ) {
	        if ( error ) {
	            $img.replaceWith('<span>不能预览</span>');
	            return;
	        }

	        $img.attr( 'src', src );
	    }, thumbnailWidth, thumbnailHeight );
	});

    // 上传成功
	uploader.on( 'uploadSuccess', function( file ) {
	    $( '#'+file.id ).find('.info').html('<span style="color:green;">上传成功</span>');
	});
    // 上传失败
	uploader.on( 'uploadError', function( file ) {
	    $( '#'+file.id ).find('.info').html('<span style="color:red; ">上传出错</span>');
	});

	// 完成上传完了，成功或者失败，先删除进度条。
	uploader.on( 'uploadComplete', function( file ) {
	    $( '#'+file.id ).find('.progress').remove();
	});
   
    // 修改data 默认带的数据
	uploader.on( 'uploadBeforeSend', function( block, data ) 
	{  
	    // 修改data可以控制发送哪些携带数据。  
	    data._token= $("input[name='_token']").val();  
	}); 
	

    // 询问上传成功或者是失败
	uploader.on("uploadAccept", function( file, data){  
	    if ( data.success=="0") {  
	        // 通过return false来告诉组件，此文件上传有错。  
	        return false;  
	    }  else {
	    	$('#filePicker').hide();
	    	$("#log").show();
	    	$("input[name='log']").val(data.file);
	    }
	}); 

	// 文件上传过程中创建进度条实时显示。
	uploader.on( 'uploadProgress', function( file, percentage ) {
	    var $li = $( '#'+file.id ),
	        $percent = $li.find('.progress .progress-bar');

	    // 避免重复创建
	    if ( !$percent.length ) {
	        $percent = $('<div class="progress progress-striped active">' +
	          '<div class="progress-bar" role="progressbar" style="width: 0%">' +
	          '</div>' +
	        '</div>').appendTo( $li ).find('.progress-bar');
	    }

	    $li.find('.info').text('上传中');

	    $percent.css( 'width', percentage * 100 + '%' );

	}); //ajax 文件上传完成

	/**
	 *-----------------------------------------------
	 * 重新上传  后台删除log 图片
	 *-----------------------------------------------
	 * @param
	 * @return
	 */
	$("#deletelog").click(function(){
		var imgpath = $("input[name='log']").val();
		// 删除后台log 图片
		$.ajax({
		   type: "get",
		   url: "../admin/deleteLog",
		   data: "img="+imgpath,
		   success: function(msg){
		   		if(msg==1){
		   			$('#filePicker').show();
		   			$("#log").hide();
		   			$("input[name='log']").val('');
		   		}
		   }
		});
	})//重新上传文件

	/**
	 *-----------------------------------------------
	 *  点击提交配置文件
	 *-----------------------------------------------
	 * @param
	 * @return
	 */

	//自定义手机格
	jQuery.validator.addMethod("mobile", function (value, element) {
	    var mobile = /^1[3|4|5|7|8]\d{9}$/;
		return this.optional(element) || (mobile.test(value));
	}, "手机格式不对");
	jQuery.validator.addMethod("tm", function (value, element) {
	    var tm = /^[1-9]\d{6,9}$/;
		return this.optional(element) || (tm.test(value));
	}, "手机格式不对");
	jQuery.validator.addMethod("img", function (value, element) {
		 var img = /\.(gif|jpg|jpeg|png|GIF|JPG|PNG)$/;
		return this.optional(element) || (img.test(value));
	}, "图片格式不获赠却");

	$("#webconfig").validate({


	   focusInvalid : true, 
	    // 定义规则
	    rules:{
	        webname:{
	         required:true, 
	        },
	        log:{
	         required:true, 
	         img:true,
	        },
	        tel:{
	         required:true, 
	         mobile:true,
	        },
	        qq:{
	         required:true, 
	         tm:true,
	        },

	    },

	    // 定义错误消息
	    messages:{
	        webname:{
	            required:"不能为空",
	        },
	        log:{
	        	required:"不能为空",
	        	img:"图片格式不正确必须(gif|jpg|jpeg|png|GIF|JPG|PNG)",
	        },
	        tel:{
	        	required:"不能为空",
	        	mobile:'手机格式不对',
	        },
	        qq:{
	         	required:"不能为空",
	         	tm:"必须是7-10位的数字",
	        },

	    } ,   

	    submitHandler : function(form) {  //验证通过后的执行方法
	       //当前的form通过ajax方式提交（用到jQuery.Form文件）
	       $(form).ajaxSubmit({
	       		// 成功
	            success:function( msg ){
	               alert("修改成功");
	            },
	        }); 
	    }, 

	})//添加结束


})