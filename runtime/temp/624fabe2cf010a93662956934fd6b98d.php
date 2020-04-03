<?php /*a:1:{s:76:"D:\phpstudy_pro\WWW\qiyezhan\application\admin\view\webinfo\aboutyouhua.html";i:1571471016;}*/ ?>
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
    <form action="<?php echo url('webinfo/aboutyouhuasave'); ?>" method="post">
        <table class="tb" border="1px" cellspacing="0"  cellpadding="0">
            <tr style="height: 50px;background-color: lightgrey">
                <td width="20%" colspan="2">关于我们优化</td>
            </tr>
            <tr>
                <td width="20%">首页关于我们标题</td>
                <td><textarea rows="10" name="title"><?php echo htmlentities($aboutyouhua['title']); ?></textarea></td>
            </tr>
            <tr>
                <td width="20%">首页关于我们关键字</td>
                <td><textarea rows="10" name="keycode"><?php echo htmlentities($aboutyouhua['keycode']); ?></textarea></td>
            </tr>
            <tr>
                <td width="20%">首页关于我们描述</td>
                <td><textarea rows="10" name="describ"><?php echo htmlentities($aboutyouhua['describ']); ?></textarea></td>
            </tr>
            <tr>
                <td colspan="2" height="50px"><button type="submit" class="btn1">提交</button></td>
            </tr>
        </table>
    </form>

</div>
</body>
</html>