<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>信息提示</title>
<link href="<?=$public_r[newsurl]?>e/data/images/qcss.css" rel="stylesheet" type="text/css">
<?php
if(!$noautourl)
{
?>
<SCRIPT language=javascript>
var secs=3;//3秒
for(i=1;i<=secs;i++) 
{ window.setTimeout("update(" + i + ")", i * 1000);} 
function update(num) 
{ 
if(num == secs) 
{ <?=$gotourl_js?>; } 
else 
{ } 
}
</SCRIPT>
<?
}
?>
<style>
	.succeed-box{
		max-width:750px;
		width:100%;
		margin:0 auto;
		text-align:center;
	}
	.succeed-box>img{
		width:90%;
	}

</style>
</head>

<body>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="succeed-box">
	<img src="../img/succeed.png">
	<a href="<?=$gotourl?>"><img src="../img/sucbtn.png"></a>
</div>
<!--<table width="500" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <tr class="header"> 
    <td height="25"><div align="center">信息提示</div></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="80"> 
      <div align="center">
	  <br>
        <b><?=$error?></b>
        <br>
        <br><a href="<?=$gotourl?>">恭喜您，稍后客服会和您取得联系，请点击这里返回主页</a>
<br><br>
	  </div></td>
  </tr>
</table>-->
</body>
</html>