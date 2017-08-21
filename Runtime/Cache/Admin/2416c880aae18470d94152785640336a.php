<?php if (!defined('THINK_PATH')) exit();?><include file="./common/toubu">
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
				  <li><a href="#">栏目管理</a></li>
				  <li class="active">栏目列表</li>
				</ol>
				<div id="web">
				<span><span class="glyphicon glyphicon-edit" aria-hidden="true"><strong> 网站信息</strong></span>
				<hr>
				    <div class="row">
				    	<div class="col-sm-1"></div>
				    	<div class="col-sm-8">
							<form id="" action="" class="form-horizontal" role="form">
							    <div class="form-group">
							        <label for="web_title" class="col-sm-3 control-label">网站标题</label>
							        <div class="col-sm-9">
							        <input type="text" class="form-control" id="web_title" placeholder="请输入您的网站标题">
							        </div>
							    </div>
							    <div class="form-group">
							        <label for="web_desc" class="col-sm-3 control-label">简要描述</label>
							        <div class="col-sm-9">
							        <textarea id="web_desc" class="form-control" rows="3" placeholder="请输入网站的简要描述"></textarea>
							        </div>
							    </div>
							    <div class="form-group">
							        <label for="contact_person" class="col-sm-3 control-label">联系人</label>
							        <div class="col-sm-9">
							        <input type="text" class="form-control" id="contact_person" placeholder="请输入联系人姓名">
							        </div>
							    </div>
							    <div class="form-group">
							        <label for="mobile" class="col-sm-3 control-label">手  机</label>
							        <div class="col-sm-9">
							        <input type="text" class="form-control" id="mobile" placeholder="请输入手机号码 ">
							        </div>
							    </div>
							    <div class="form-group">
							        <label for="telephone" class="col-sm-3 control-label">座  机</label>
							        <div class="col-sm-9">
							        <input type="text" class="form-control" id="telephone" placeholder="请输入座机号码 ">
							        </div>
							    </div>
							    <div class="form-group">
							        <label for="email" class="col-sm-3 control-label">邮 箱</label>
							        <div class="col-sm-9">
							        <input type="text" class="form-control" id="email" placeholder="请输入邮箱">
							        </div>
							    </div>
							    <div class="form-group">
							        <label for="address" class="col-sm-3 control-label">详细地址</label>
							        <div class="col-sm-9">
							        <input type="text" class="form-control" id="address" placeholder="请输入详细地址">
							        </div>
							    </div>
							    <div class="col-sm-10"></div>
							    <div class="col-sm-2">
							    	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 修改</button>
								</div>
							</form>
					    </div>
						<div class="col-sm-3"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>