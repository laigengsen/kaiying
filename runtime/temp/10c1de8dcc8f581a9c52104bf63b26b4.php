<?php /*a:2:{s:66:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\sys\repwd.html";i:1571472506;s:70:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\public\header.html";i:1567693987;}*/ ?>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Dashboard - Ace Admin</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/static/admin/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/static/admin/assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="/static/admin/assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="/static/admin/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="/static/admin/assets/css/ace-skins.min.css" />
    <link rel="stylesheet" href="/static/admin/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/static/admin/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="/static/admin/assets/js/ace-extra.min.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="/static/admin/assets/js/html5shiv.min.js"></script>
    <script src="/static/admin/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<div class="main-content">
<div class="main-content-inner">


<div class="page-content">


<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form name="formadd" action="<?php echo url('sys/adminpasswordsave'); ?>" method="post" class="form-horizontal" role="form" onsubmit="return validateForm()">
			<div class="form-group" style="background-color: lightgrey">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
				<div class="col-sm-9" style="font-size: 35px;padding-left: 100px">
					修改密码
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 账号： </label>

				<div class="col-sm-9">
					
		            <label class="control-label no-padding-right" for="form-field-1"> <?php echo htmlentities($admins['name']); ?> </label>
	                
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 新密码 ：</label>

				<div class="col-sm-9">
					<input name="newpassword" type="password" id="form-field-1" placeholder="请输入密码" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 确认新密码 ：</label>

				<div class="col-sm-9">
					<input name="cnewpassword" type="password" id="form-field-1" placeholder="请输入密码" class="col-xs-10 col-sm-5" />
				</div>
			</div>
		    <input name="id" value="<?php echo htmlentities($admins['id']); ?>" type="hidden"/>
		    <input name="code" value="<?php echo htmlentities($admins['code']); ?>" type="hidden"/>
			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit">
						提交
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						重置
					</button>
				</div>
			</div>
		</form>
	</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
<script>
function validateForm(){
  var x=document.forms["formadd"]["newpassword"].value;
  var y=document.forms["formadd"]["cnewpassword"].value;
  if (x==null || x==""){
  alert("新密码不能为空");
  return false;
  }
  if(x!=y){
  	alert("新密码输入不一致");
    return false;
  }
}
</script>