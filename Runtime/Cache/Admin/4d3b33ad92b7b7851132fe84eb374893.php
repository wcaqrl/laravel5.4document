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
				  <li class="active">新闻发布</li>
				</ol>
				<div id="web">
				<span><span class="glyphicon glyphicon-edit" aria-hidden="true"><strong> 新闻发布</strong></span>
				<hr>
				    <div class="row">
				    	<div class="col-sm-1"></div>
				    	<div class="col-sm-10">
							<form id="artadd" action="" class="form-horizontal" role="form">
							    <div class="form-group">
							        <label for="art_title" class="col-sm-2 control-label">文章标题</label>
							        <div class="col-sm-8">
							        <input type="text" class="form-control" id="web_title" placeholder="请输入文章标题">
							        </div>
							        <div class="col-sm-2"></div>
							    </div>
							    <div class="form-group">
							      <label for="cat_id" class="col-sm-2 control-label">所属栏目</label>
							      <div class="col-sm-3">
								  <select id="cat_id" class="form-control">
								    <option>1</option>
								    <option>2</option>
								    <option>3</option>
								    <option>4</option>
								    <option>5</option>
								  </select>
								  </div>
								  <div class="col-sm-7"></div>
								</div>
							    <div class="form-group">
							        <label for="art_tag" class="col-sm-2 control-label">文章标签</label>
							        <div class="col-sm-8">
							        <input type="text" class="form-control" id="web_title" placeholder="多个文章标签请用英文逗号隔开">
							        </div>
							        <div class="col-sm-2"></div>
							    </div>
							    <div class="form-group">
							    	<label for="art_image" class="col-sm-2 control-label">文章插图</label>
							    	<div class="col-sm-8">
							    		<input type="file" name="art_image" multiple class="form-control file" id="art_image">
							    	</div>
							    	<div class="col-sm-2"></div>
							  	</div>
							  	<div class="form-group">
							    	<label for="art_content" class="col-sm-2 control-label" style="margin-bottom:15px;">文章内容</label>
									<div class="col-sm-12" style="clear:both;">
    									<script id="container" style="width:100%;min-height:300px;" name="art_content" type="text/plain"></script>
							    	</div>
							  	</div>
								<div class="form-group">
							    	<div class="col-sm-10"></div>
							    	<div class="col-sm-2">
							    		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 添加</button>
									</div>
								</div>
							</form>
					    </div>
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