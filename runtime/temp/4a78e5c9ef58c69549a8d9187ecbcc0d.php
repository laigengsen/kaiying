<?php /*a:2:{s:74:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\webinfo\mainabout.html";i:1571491271;s:70:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\public\header.html";i:1567693987;}*/ ?>
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



	<form name="formadd" action="<?php echo url('webinfo/mainaboutsave'); ?>" method="post">
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="row">
			<div class="col-xs-12">
				<table id="simple-table" class="table  table-bordered table-hover">
					<thead>
						<tr>
							<td colspan="2">首页关于我们</td>
						</tr>
					</thead>


					<tbody>

						<tr>
							<td class="center" style="width: 200px;font-size: 20px;height:200px;line-height: 200px" >
								<div class="action-buttons">
									首页关于我们
									<input type="hidden" value="1" name="id">
								</div>
							</td>
							<td style="text-align: center" width="200px" height="500px">
								<script id="container" name="content" type="text/plain">
							    <?php echo htmlentities($mainabout['content']); ?>
								</script>
							</td>
						</tr>

					<tr>
						<td colspan="2" style="text-align: center"><button type="submit">保存</button><button>返回</button></td>
					</tr>
					</tbody>
				</table>
			</div><!-- /.span -->
		</div><!-- /.row -->
		<div class="hr hr-18 dotted hr-double"></div>
		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->
	</form>
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->
  <script type="text/javascript" src="/static/common/ueditor/ueditor.config.js"></script>
  <script type="text/javascript" src="/static/common/ueditor/ueditor.all.js"></script>
  <script>
	  var ue=UE.getEditor('container',{
	      autoHeightEnabled:false,
	      initialFrameWidth:1000,
          initialFrameHeight:500,
	  });
  </script>