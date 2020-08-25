<!DOCTYPE html>
<!-- saved from url=(0021)http://feei.top/zxdx/ -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=750,target-densitydpi=340,user-scalable=no">
<title>个人资料</title>
<link rel="stylesheet" href="<?php base_url();?>css/public.css">
<style>
body{ background:#F7F7F7 !important}
.nav_data{ height:100px;line-height:100px; color:#fff; font-size:35px; position:fixed; width:95%; padding-right:5%; left:0px; top:0px;}
.nav_data{ background:#FD4C5B url(../img/70%20Basic%20Icons-all-24.svg) 26px 30px no-repeat}
.nav_data .left{ float:left; padding-left:85px; cursor:pointer}
.nav_data .right{ float:right; cursor:pointer}

.data_box{ padding-top:100px}
.data_box ul{ background:#fff;}
.data_box li{ height:100px; border-bottom:1px #dfdfdf solid; line-height:100px; padding:0px 5%; font-size:35px}
.data_box h1{ line-height:100px; padding-left:5%; font-size:35px;}
.container input{
width: 55%;height: 80%;padding-top: 0;margin: auto;
}
</style>
</head>
<body id="body_bg">
    <div class="nav_data">
        <div class="left" onclick="window.history.go(-1)">个人资料</div>
        <div class="right">保存</div>
    </div>
    <div class="data_box">
    	<h1>基本信息</h1>
        <form>
    	<ul>
            <li>昵称：&nbsp&nbsp&nbsp<input style="height: 5%;width: 80%;line-height:40px!important;overflow: auto;padding: 20px 20px"></li>
            <li>性别：&nbsp&nbsp&nbsp<input style="height: 5%;width: 80%;line-height:40px!important;overflow: auto;padding: 20px 20px"></li>
            <li>电话：&nbsp&nbsp&nbsp<input style="height: 5%;width: 80%;line-height:40px!important;overflow: auto;padding: 20px 20px"></li>
            <li>用户名：<input style="height: 5%;width: 80%;line-height:40px!important;overflow: auto;padding: 20px 20px"></li>
            <li>密码：&nbsp&nbsp&nbsp<input style="height: 5%;width: 80%;line-height:40px!important;overflow: auto;padding: 20px 20px"></li>
        </ul>

        <h1>个性签名</h1>
        <ul>
        	<!--<li contentEditable="true" style="height: 250px; line-height: 40px !important; overflow: auto; padding: 20px 20px">
            	是不是我不懂温柔。
            </li>-->
            <li><input placeholder="是不是我不懂温柔。" style="height: 5%;width: 80%;line-height:40px!important;overflow: auto;padding: 20px 20px"></li>
        </ul>
            <button type="submit" style="height: 10%;width: 10%;margin-top: 4%;">提交修改</button>
        </form>
    </div>
</body>
</html>