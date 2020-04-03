<?php /*a:2:{s:71:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\menage\product.html";i:1571533746;s:70:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\public\header.html";i:1567693987;}*/ ?>
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
							<form action="<?php echo url('menage/product'); ?>" method="post">
							<table id="simple-table" class="table  table-bordered table-hover" style="text-align: center">
								<thead>
								<tr style="text-align: center;font-size: 30px; height: 50px;background-color: lightgrey">
									<td colspan="6">产品列表管理</td>
								</tr>
								<tr style="text-align: center">
									<td>多选</td>
									<td></td>
									<td>产品分类
										<select style="" id="sel" name="id">
											<option>请选择产品类别</option>
											<?php if(is_array($productcategory) || $productcategory instanceof \think\Collection || $productcategory instanceof \think\Paginator): $i = 0; $__LIST__ = $productcategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
											<option value="<?php echo htmlentities($vo2['id']); ?>" id="att"><?php echo htmlentities($vo2['name']); ?></option>
											<?php endforeach; endif; else: echo "" ;endif; ?>
										</select>

									</td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<th class="center">
										<label class="pos-rel">
											<input type="checkbox" class="ace" />
											<span class="lbl"></span>
										</label>
									</th>
									<th style="text-align: center">ID</th>
									<th class="detail-col">分类名称</th>
									<th>产品名称</th>
									<th>缩略图</th>
									<th>操作</th>
								</tr>
								</thead>

								<tbody id="tbody">
								<?php if(is_array($product) || $product instanceof \think\Collection || $product instanceof \think\Paginator): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
								<tr>
									<td class="center">
										<label class="pos-rel">
											<input type="checkbox" class="ace" />
											<span class="lbl"></span>
										</label>
									</td>

									<td class="center">
										<div class="action-buttons" id="catename">
											请选择类别
										</div>
									</td>
									<td>请选择类别</td>
									<td>
										请选择类别
									</td>
									<td>
										<a href="#"><img src="<?php echo htmlentities($vo['productpicture']); ?>" width="100" height="50"></a>
									</td>

									<td>
										<div class="hidden-sm hidden-xs btn-group">

											<a href="<?php echo url('Ad/edit',['id'=>$vo['id']]); ?>" target="content">
												<button class="btn btn-success">
													编辑
												</button>
											</a>
											<a href="<?php echo url('Ad/delete',['id'=>$vo['id']]); ?>" target="content">
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
							</form>
						</div><!-- /.span -->
					</div><!-- /.row -->
					<div class="hr hr-18 dotted hr-double"></div>
					<!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->
<script src="/static/admin/assets/js/jquery-1.8.0.js"></script>
<script>

    // function getcategoryid() {
    //     var cateid=document.getElementById("cateid");
    //     var title=document.getElementById("title");
    //     var keycode=document.getElementById("keycode");
    //     var describ=document.getElementById("describ");
    // 	console.log(cateid.value);
    // }
    $(function () {
        $('#sel').change(function () {
            $("#tbody").html('');
            var cateid=$('#sel').val();
            // var cateid=document.getElementById("cateid");
            var producttitle=document.getElementById("producttitle");
            var keycode=document.getElementById("keycode");
            var describ=document.getElementById("describ");
            console.log(cateid);

            $.ajax({
                type:'post',
                url:"<?php echo url('admin/menage/productjson'); ?>",
                data:'sel='+cateid,
                success:function (res) {
					// console.log(res);
					var tbody=document.getElementById("tbody");

					// console.log(tbody);
					for (i=0;i<res.length;i++){
                        // console.log(res[i].producttitle);
                        // console.log(document.getElementById('sel').selectedIndex);
                        // console.log($('#sel option')[document.getElementById('sel').selectedIndex].innerText);

                        // [$('#sel').selectedIndex]
						// $('#tbody').appendChild('<tr><td>'+res[i].producttitle+'</td></tr>');
						var tr=tbody.insertRow(0);

						var tr0= tr.insertCell(0);
                        var tr1= tr.insertCell(1);
                        var tr2= tr.insertCell(2);
                        var tr3= tr.insertCell(3);
                        var tr4= tr.insertCell(4);
                        var tr5= tr.insertCell(5);

                        tr5.innerHTML='<td>\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="hidden-sm hidden-xs btn-group">\n' +
                            '\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t<a href="<?php echo url('Ad/edit',['id'=>$vo['id']]); ?>" target="content" value="1">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t<button class="btn btn-xs btn-info">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t编辑\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t</button>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t</a>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t<a href="<?php echo url('Menage/productdelete',['id'=>$vo['id']]); ?>" target="content">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t<button class="btn btn-xs btn-danger">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t删除\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t</button>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t</a>\n' +
                            '\t\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\n' +
                            '\t\t\t\t\t\t\t\t\t\t<div class="hidden-md hidden-lg">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t<div class="inline pos-rel">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t<i class="ace-icon fa fa-cog icon-only bigger-110"></i>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t</button>\n' +
                            '\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href="#" class="tooltip-info" data-rel="tooltip" title="View">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t<span class="blue">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class="ace-icon fa fa-search-plus bigger-120"></i>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n' +
                            '\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t<span class="green">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n' +
                            '\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t<li>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t<span class="red">\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class="ace-icon fa fa-trash-o bigger-120"></i>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t</span>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t\t</li>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t\t</ul>\n' +
                            '\t\t\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t\t\t</div>\n' +
                            '\t\t\t\t\t\t\t\t\t</td>';
                        console.log(res[i].id);
                        // 传送的id被加密
                        console.log(tr5.children[0].children[1].href="<?php echo url('Menage/productdelete',['id'=>"+res[i].id+"]); ?>");

                        // tr5.children[0].children[0].value=res[i].id;
                        // console.log(tr5.children[0].children[0]);
                        // console.log(tr5.children[0].children[0].value);

                        tr4.innerHTML='<td>' + '<a href="#"><img src="'+res[i].productpicture+'" width="100" height="50"></a>' + '</td>';

                        tr3.innerHTML="<td>"+ res[i].producttitle+"</td>";
                        tr2.innerHTML="<td>"+ $('#sel option')[document.getElementById('sel').selectedIndex].innerText+"</td>";
                        tr1.innerHTML='<td>'+ res[i].id+"</td>";
                        tr0.innerHTML='<td class="center">' + '<label class="pos-rel">' + '<input type="checkbox" class="ace" />' + '<span class="lbl"></span>' + '</label>' + '</td>';
					}

                    // producttitle=res[0].producttitle;
                    // keycode.value=res.productkeycode;
                    // describ.value=res.productdescrib;

                    // var html='<td><td>赋值成功</td></tr>';
                    // $('#tbody').html(html);
                }
            })
        });
    });
</script>