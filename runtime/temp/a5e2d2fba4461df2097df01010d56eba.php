<?php /*a:2:{s:81:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\friendship\friendshipadd.html";i:1571472525;s:70:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\public\header.html";i:1567693987;}*/ ?>
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
					<form action="<?php echo url('friendship/friendshipaddsave'); ?>" method="post" class="form-horizontal" role="form">
						<div class="form-group" style="background-color: lightgrey">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"></label>
							<div class="col-sm-9" style="font-size: 35px;padding-left: 100px">
								添加友情链接
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 友情链接名称： </label>

							<div class="col-sm-9">
								<input name="name" type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 链接地址： </label>

							<div class="col-sm-9">
								<input name="link" type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 排序： </label>

							<div class="col-sm-9">
								<input name="order" type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5" />
							</div>
						</div>

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
						<!-- </form> -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"></script>
<script type="text/javascript">
    $('#sub').click(function () {
        // alert("测试");
        ajaxPost();
    })
    function ajaxPost(){
        var formData=new FormData();
        if($('#file')[0].files.length<=0){
            alert("请选择文件");
            return;
        }
        formData.append('image',$('#file')[0].files[0]);
        $.ajax({
            type:'post',
            url:"<?php echo url('Menage/picture'); ?>",
            data:formData,
            cache:false,
            processData:false,
            contentType:false,
            success:function(data){
                if(data){
                    var html='<img src="'+data.src+'" width="480" height="135">';
                    $('#content').html(html);
                    $('[name=picture]').val(data.src)
                }else{
                    alert("上传失败");
                }

            }
        })
    }
</script>
