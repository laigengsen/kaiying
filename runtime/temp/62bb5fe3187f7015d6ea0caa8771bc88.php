<?php /*a:1:{s:74:"D:\phpstudy_pro\WWW\qiyezhan\application\user\view\index\aboutkaiying.html";i:1571497159;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Hyperion</title>

    <!-- ////////////////////////////////// -->
    <!-- //      Stylesheets Files       // -->
    <!-- ////////////////////////////////// -->
    <link rel="stylesheet" href="/static/user/websiteDemo/css/base.css" id="camera-css" />
    <link rel="stylesheet" href="/static/user/websiteDemo/css/framework.css" />
    <link rel="stylesheet" href="/static/user/websiteDemo/css/style.css" />
    <link rel="stylesheet" href="/static/user/websiteDemo/css/noscript.css" media="screen,all" id="noscript" />

    <!-- ////////////////////////////////// -->
    <!-- //     Google Webfont Files     // -->
    <!-- ////////////////////////////////// -->


    <!-- ////////////////////////////////// -->
    <!-- //        Favicon Files         // -->
    <!-- ////////////////////////////////// -->
    <link rel="shortcut icon" href="/static/user/websiteDemo//static/user/websiteDemo/images/favicon.ico" />

    <!-- ////////////////////////////////// -->
    <!-- //      Javascript Files        // -->
    <!-- ////////////////////////////////// -->
    <script src="/static/user/websiteDemo/js/jquery.min.js"></script>
    <script src="/static/user/websiteDemo/js/jquery.easing-1.3.min.js"></script>
    <script src="/static/user/websiteDemo/js/tooltip.js"></script>
    <script src="/static/user/websiteDemo/js/dropdown.js"></script>
    <script src="/static/user/websiteDemo/js/tinynav.min.js"></script>
    <script src="/static/user/websiteDemo/js/camera.min.js"></script>
    <script src="/static/user/websiteDemo/js/jquery.fancybox.js?v=2.0.6"></script>
    <script src="/static/user/websiteDemo/js/jquery.fancybox-media.js?v=1.0.3"></script>
    <script src="/static/user/websiteDemo/js/jquery.ui.totop.min.js"></script>
    <script src="/static/user/websiteDemo/js/ddaccordion.js"></script>
    <script src="/static/user/websiteDemo/js/jquery.twitter.js"></script>
    <script src="/static/user/websiteDemo/js/jflickrfeed.min.js"></script>
    <script src="/static/user/websiteDemo/js/faq-functions.js"></script>
    <script src="/static/user/websiteDemo/js/theme-functions.js"></script>
    <script>
        $(document).ready(function() {
            //Camera Jquery
            $('#camera-slide').camera({
                thumbnails: false,
                hover: false,
                pagination: false,
            });
        });
    </script>

    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style>
        #logo {
            width: 400px;
            margin-top: 2px;
            float: left;
        }
        #logo a{
            font-size: 25px;
            color:white;
            text-align: center;
        }
        #navmainmenu{
            width: auto;
            margin: 3px 15px 29px 0;
            height: 38px;
            float: right;
            display: block;
        }
        #mainmenu{
            color: white;
            margin-top: 30px;
            width: 500px;
        }
        #mainmenu ul li{
            width: 100px;
            height: 48px;
            font-size: 18px;
            line-height: 28px;
            color: white;
        }
        #mainmenu ul li:hover{
            background-color: pink;
        }
        #mainmenu ul li a{
            color: white;
        }




        .product{
            padding-top: 150px;
            width: 100%;
            height: 700px;
        }
        .productcate{
            overflow: scroll;
            width: 27%;
            height: 698px;
            float: left;
        }
        .products{
            width: 70%;
            height: 698px;
            float: right;
        }
        .products>div>div{
            text-align: center;
            margin-right: 10px;
            margin-left: 10px;
            float: left;
        }





        .about{
            margin-top: 30px;
            height: 500px;
            width: 100%;
            padding-left: 100px;
            padding-right:100px;
        }
        .about2>div{
            float: left;
            padding-left: 20px;
            padding-right:20px;
        }





        .dongtai{
            width: 100%;
            height: 450px;
        }
        .dongtai>div{
            float: left;
            width: 33%;
            padding-left: 70px
        }
        .dongtainews{
            padding-top: 20px;
            padding-left: 100px;
            font-size: 30px;
        }
        .dongtainews>li{
            padding-top: 20px;
        }




        .footer{
            margin-top: 50px;
            width: 100%;
            height: 300px;
        }
        .footerdiv{
            margin: 10px auto;
            font-size: 30px;
        }
        .footerdiv2{
            margin-left: 200px;
            margin-right: 200px;
            font-size: 30px;
        }
        .footerdiv2>div{
            color: black;
            padding-left: 40px;
            padding-top: 30px;
            float: left;
        }
        .footerdiv>a{
            margin-left: 20px;
            margin-right: 20px;
        }

    </style>


</head>
<body>
<!-- header start here -->
<header style="background-color: #01409d">
    <div id="main-wrapper">



        <!-- logo start here -->
        <div id="logo">
            <a href="#" style="text-decoration: none"><span style="font-size: 80px;margin-right: 40px">强聘</span>
                凯盈汽车零部件
            </a>
        </div>
        <!-- logo end here -->

        <!-- mainmenu start here -->
        <nav id="mainmenu">
            <ul id="menu">
                <li><a style="color: white" href="<?php echo url('index/kaiying'); ?>">首页</a></li>
                <li><a style="color: white" href="<?php echo url('index/aboutkaiying'); ?>">关于我们</a></li>
                <li><a style="color: white" href="<?php echo url('index/product'); ?>">产品展示</a></li>
                <li><a style="color: white" href="<?php echo url('index/newskaiying'); ?>">新闻资讯</a></li>
                <li><a style="color: white" href="<?php echo url('index/contactkaiying'); ?>">联系我们</a></li>
            </ul>
        </nav>
        <!-- mainmenu end here -->

    </div>
</header>
<!-- header end here -->



<div class="product">
    <div class="productcate" style="padding-left: 50px;padding-top: 50px;background-color:pink;color: white">
        <ul>
            <li style="font-size: 35px;margin-bottom: 40px;border-bottom: 1px solid black;color: black"><a>产品分类</a></li>
            <?php if(is_array($productcategory) || $productcategory instanceof \think\Collection || $productcategory instanceof \think\Paginator): $i = 0; $__LIST__ = $productcategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
            <li style="font-size: 25px;margin-bottom: 30px;border-bottom: 1px solid white"><a><?php echo htmlentities($vo1['name']); ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="products">
        <center>
            <p style="font-size: 40px;padding-top: 30px;color: black">关于凯盈</p>
        </center>
        <div style="padding: 30px;font-size: 20px;color: black"><?php echo htmlentities($aboutyouhua['title']); ?></div>
        <div style="color: black"><?php echo htmlentities($aboutyouhua['describ']); ?></div>
        </div>
</div>








<hr style="border: 4px solid grey">

<div class="footer">
    <center>
        <div class="footerdiv">
            <a href="<?php echo url('index/kaiying'); ?>">首页</a>
            <a href="<?php echo url('index/aboutkaiying'); ?>">关于凯盈</a>
            <a href="<?php echo url('index/product'); ?>">产品展示</a>
            <a href="<?php echo url('index/newskaiying'); ?>">新闻资讯</a>
            <a href="<?php echo url('index/contactkaiying'); ?>">联系我们</a>
        </div>
    </center>
    <center>
        <div class="footerdiv2">
            <div><label>公司名称 : </label><label><?php echo htmlentities($youhua['companyname']); ?></label></div>
            <div><label>公司地址 : </label><label><?php echo htmlentities($youhua['address']); ?></label></div>
            <div><label>邮箱 : </label><label><?php echo htmlentities($youhua['email']); ?></label></div>
            <div><label>联系人 : </label><label><?php echo htmlentities($youhua['person']); ?></label></div>
            <div><label>联系方式 : </label><label><?php echo htmlentities($youhua['phone']); ?></label></div>
        </div>
    </center>

</div>
<!-- footer start here -->

<!-- footer end here -->
       	
<script>$('#noscript').remove();</script>

</body>
</html>