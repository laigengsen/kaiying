<?php /*a:1:{s:70:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\news\newsedit.html";i:1571281703;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .tb{
            margin: 0 auto;
            text-align: center;
            width: 800px;
        }
        .tbdiv{
            padding: auto 0;
            margin: 0 auto;
        }
        textarea{
            width: 640px;
            padding-top: 15px;
            font-size: 17px;
        }
        .btn1{
            width: 100px;
            height: 30px;
        }
    </style>
</head>
<body>
<div class="tbdiv">
    <form action="<?php echo url('news/newseditsave'); ?>" method="post">
        <table class="tb" border="1px" cellspacing="0"  cellpadding="0">
            <tr style="height: 50px">
                <td width="20%">新闻类别</td>
                <td>
                    <select style="" id="sel" name="cateid">
                    <option value="<?php echo htmlentities($newseditcatename['id']); ?>"><?php echo htmlentities($newseditcatename['cate']); ?></option>
                    <?php if(is_array($newseditcate) || $newseditcate instanceof \think\Collection || $newseditcate instanceof \think\Paginator): $i = 0; $__LIST__ = $newseditcate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($vo2['id']); ?>" id="att"><?php echo htmlentities($vo2['cate']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td width="20%">新闻标题</td>
                <td>
                    <input type="hidden" value="<?php echo htmlentities($newsedit['id']); ?>" name="id">
                    <textarea rows="10" name="title"><?php echo htmlentities($newsedit['producttitle']); ?></textarea>
                </td>
            </tr>
            <tr>
                <td width="20%">新闻关键字</td>
                <td><textarea rows="10" name="keycode"><?php echo htmlentities($newsedit['productkeycode']); ?></textarea></td>
            </tr>
            <tr>
                <td width="20%">新闻描述</td>
                <td><textarea rows="10" name="describ"><?php echo htmlentities($newsedit['productdescrib']); ?></textarea></td>
            </tr>
            <tr>
                <td colspan="2" height="50px"><button type="submit" class="btn1">提交</button></td>
            </tr>
        </table>
    </form>

</div>
</body>
</html>
<script src="/static/admin/assets/js/jquery-1.8.0.js"></script>
<script>
        $(function () {
            $('#sel').change(function () {
                // console.log($('#cate').val());
                // console.log($('#sel option')[document.getElementById('sel').selectedIndex].innerText);

                var cate=$('#cate').val();
                var cateval=$('#sel option')[document.getElementById('sel').selectedIndex].innerText;
                cate=cateval
                console.log(cate);
                console.log(cateval);
            })
        })
    </script>