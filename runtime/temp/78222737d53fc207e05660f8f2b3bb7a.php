<?php /*a:2:{s:76:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\tuwenlist\tuwenlist.html";i:1571493992;s:70:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\public\header.html";i:1567693987;}*/ ?>
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
		<div class="row">
			<div class="col-xs-12">
				<table id="simple-table" class="table  table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">
								<label class="pos-rel">
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</th>
							<th class="detail-col">序号</th>
							<th style="text-align: center">公司信息频道名称</th>
							<th style="text-align: center">操作</th>
						</tr>
					</thead>

					<tbody>
					<?php if(is_array($tuwenlist) || $tuwenlist instanceof \think\Collection || $tuwenlist instanceof \think\Paginator): $i = 0; $__LIST__ = $tuwenlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<tr>
							<td class="center">
								<label class="pos-rel">
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</td>

							<td class="center" style="width: 200px">
								<div class="action-buttons">
									<a href="#">
										<?php echo htmlentities($vo['id']); ?>
									</a>
								</div>
							</td>

							<td style="text-align: center"><?php echo htmlentities($vo['channelname']); ?></td>




							<td style="text-align: center">
								<div class="hidden-sm hidden-xs btn-group">

									<a href="<?php echo url('Tuwenlist/tuwenedit',['id'=>$vo['id']]); ?>" target="content">
									<button class="btn btn-success">
										编辑
									</button>
									</a>
									<a href="" target="content">
									<button class="btn btn-success">
										删除
									</button>
                                    </a>


								</div>
								<div class="hidden-md hidden-lg">
									<div class="inline pos-rel">
										<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
											<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
										</button>

										<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
											<li>
												<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
													<span class="blue">
														<i class="ace-icon fa fa-search-plus bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
													<span class="green">
														<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
													</span>
												</a>
											</li>

											<li>
												<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
													<span class="red">
														<i class="ace-icon fa fa-trash-o bigger-120"></i>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</td>
						</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
			</div><!-- /.span -->
		</div><!-- /.row -->
		<div class="hr hr-18 dotted hr-double"></div>
		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->