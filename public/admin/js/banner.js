$(function(){
	/**
	 *-----------------------------------------------
	 * 轮播图添加
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
	    	$("input[name='img']").val(data.file);
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
	});


	/**
	 *-----------------------------------------------
	 *  验证  ajax 登录
	 *-----------------------------------------------
	 * @param
	 * @return
	 */
	//表单验证
	$("#banner").validate({

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
	        img:{
	            required:true, 
	        },

	    },

	    // 定义错误消息
	    messages:{
	        name:{
	            required:"请输入图片名称",
	        },
	        url:{
	            required:"请输入图片的链接地址名称",
	            url:"必须是完整的url 地址",
	        },
	        img:{
	            required:"请上传图片",
	        },
	    } ,   

	    submitHandler : function(form) {  //验证通过后的执行方法
	       //当前的form通过ajax方式提交（用到jQuery.Form文件）
	       var _token = $("input[name='_token']").val(); 
	       $(form).ajaxSubmit({
	       		data:"_token="+_token,
	       		dataType:"json",
	       		// 成功
	            success:function( msg ){
	                if(msg.status==1){
	            		var str = getStr(msg.msg);
	            		//追加字段
	            		$(".col-sm-12").prepend(str);
	            	}
	            },
	        }); 
	    }, 

	})//表单验证结束

	/**
	 *-----------------------------------------------
	 * 拼接成功返回的值
	 *-----------------------------------------------
	 * @param
	 * @return
	 */
	function getStr( obj )
	{
		var str = '';
		    str +='<div class="file-box" id="'+obj.id+'" img='+obj.img+'>';
		   str +='<div class="file">';
		        str +='<a href="file_manager.html#">';
		            str +='<span class="corner"></span>';

		            str +='<div class="image">';
		                str +='<a href="">';
		                    str +='<img alt="image" class="img-responsive" src="bannerimg/'+obj.img+'">';
		                str +='</a>';
		            str +='</div>';
		            str +='<div class="file-name">';
		                str += ''+obj.name+'';
		                str +='<br>';
		                str +='<small>添加时间：'+new Date(parseInt(obj.addtime) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, " ")+'</small>';
		                str += '<br>';
		                str +='<a href="javascript:void(0)" title="点击删除" class="delete">删除</a>';
		            str +='</div>';
		        str +='</a>';

		    str +='</div>';
		str +='</div>';
		return str;
	}

	/**
	 *-----------------------------------------------
	 * 删除图片
	 *-----------------------------------------------
	 * @param
	 * @return
	 */
	$("body").delegate(".delete","click",function(){
		//删除

		var _this = $(this).parents('div').filter(".file-box");
		_this.remove();
		var id = _this.attr("id");
		var img = _this.attr("img");
		//ajax 删除
		$.ajax({
		   type: "get",
		   url: "../admin/bannerDelete",
		   data: "id="+id+"&img="+img,
		   dataType:"json",
		   success: function(msg){
		      if(msg.status==1){
		      	
		      }else{
		      	 alert("删除失败");
		      }
		   }
		});
	})
})