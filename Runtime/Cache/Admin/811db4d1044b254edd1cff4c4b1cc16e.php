<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理中心</title>
	<link rel="stylesheet" href="/Public/admins/css/bootstrap.css">
	<link rel="stylesheet" href="/Public/admins/css/blog.css">
	<script src="/Public/admins/js/jquery.js"></script>
	<script src="/Public/admins/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text-left">
					<!-- <img src="" alt="" style="width:60px;height:60px;border-radius:30px;"> -->
					<h1><strong>后台管理中心</strong></h1>
				</div>
				<div id="you" class="col-sm-8 text-left">
					<a href="" class="btn btn-success"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 前台首页</a>
					&nbsp;
					<a href="change.html" class="btn btn-info"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 密码修改</a>&nbsp;
					<a href="" class="btn btn-danger"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> 退出登录</a>
				</div>
			</div>
		</div>
	</header>
	<p></p>
	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-primary">
    						<div class="panel-heading">模块管理</div>
					        <div class="list-group">
					            <a class="list-group-item" href="admin.html">管理员模块</a>
					            <a class="list-group-item" href="user.html">用户模块</a>
					        </div>
						</div>
							<div class="panel panel-primary">
    						<div class="panel-heading">账户管理</div>
					        <div class="list-group">
					            <a class="list-group-item" href="recharge.html">充值记录</a>
					            <a class="list-group-item" href="bid.html">投标记录</a>
					             <a class="list-group-item" href="loan.html">借款记录</a>
					             
					        </div>
						</div>
						
						<div class="panel panel-primary">
    						<div class="panel-heading">新闻管理</div>
					        <div class="list-group">
					            <a class="list-group-item" href="newslist.html">新闻列表</a>
					            <a class="list-group-item" href="newsadd.html">新闻发布</a>
					            <a class="list-group-item" href="commlist.html">评论列表</a>
					        </div>
						</div>
					</div>
					<div class="col-sm-0"></div>
				</div>
			</div>
			<div class="col-sm-10">
				<ol class="breadcrumb">
				  <li><a href="index.html">首页</a></li>
				  <li><a href="#">新闻管理</a></li>
				  <li class="active">评论列表</li>
				</ol>
				<div id="web">
				<span><span class="glyphicon glyphicon-edit" aria-hidden="true"><strong> 评论列表</strong></span>
				<hr>
				    <div class="row">
				    	<div class="col-sm-1"></div>
				    	<div class="col-sm-10"></div>
				    		<table class="table table-hover table-striped text-center">
				    			<tr>
				    				<th>评论ID</th>
				    				<th>发表时间</th>
				    				<th>评论人</th>
				    				<th>文章标题</th>
				    				<th>评论IP</th>
				    				<th>操作</th>
				    			</tr>
				    			<tr>
				    				<td>13</td>
				    				<td>2017年8月19日</td>
				    				<td>张三</td>
				    				<td>清平乐村居</td>
				    				<td>192.168.7.131</td>
				    				<td>
				    					<a href="" class="btn btn-primary btn-xs" type="button"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  编辑</a>
											<a href="" class="btn btn-warning btn-xs" type="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 删除</a>
				    				</td>
				    			</tr>
				    		</table>
						<div class="col-sm-1"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var ue = UE.getEditor('container',{toolbars: [[
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment', 'map', 'gmap', 'insertframe', 'insertcode', 'webapp', 'pagebreak', 'template', 'background', '|',
            'horizontal', 'date', 'time', 'spechars', 'snapscreen', 'wordimage', '|',
            'inserttable', 'deletetable', 'insertparagraphbeforetable', 'insertrow', 'deleterow', 'insertcol', 'deletecol', 'mergecells', 'mergeright', 'mergedown', 'splittocells', 'splittorows', 'splittocols', 'charts', '|',
            'print', 'preview', 'searchreplace', 'drafts', 'help'
        ]],elementPathEnabled:false,wordCount:false});
</script>
<script>
$("#art_image").fileinput();
$("#art_image").fileinput({
                language: 'zh', //设置语言
                uploadUrl:"http://127.0.0.1/testDemo/fileupload/upload.do", //上传的地址
               allowedFileExtensions: ['jpg', 'gif', 'png'],//接收的文件后缀
               //uploadExtraData:{"id": 1, "fileName":'123.mp3'},
                uploadAsync: true, //默认异步上传
                showUpload:true, //是否显示上传按钮
                showRemove :true, //显示移除按钮
                showPreview :true, //是否显示预览
                showCaption:false,//是否显示标题
                browseClass:"btn btn-primary", //按钮样式    
               dropZoneEnabled: false,//是否显示拖拽区域
               //minImageWidth: 50, //图片的最小宽度
               //minImageHeight: 50,//图片的最小高度
               //maxImageWidth: 1000,//图片的最大宽度
               //maxImageHeight: 1000,//图片的最大高度
                //maxFileSize:0,//单位为kb，如果为0表示不限制文件大小
               //minFileCount: 0,
                maxFileCount:10, //表示允许同时上传的最大文件个数
                enctype:'multipart/form-data',
               validateInitialCount:true,
                previewFileIcon: "<iclass='glyphicon glyphicon-king'></i>",
               msgFilesTooMany: "选择上传的文件数量({n}) 超过允许的最大数值{m}！",
           }).on("fileuploaded", function (event, data, previewId, index){
                 
});
</script>
</html>