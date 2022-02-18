<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp"-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
  <title>酷Q靓号站-真假代理验证系统-WWW.KQLHZ.COM</title>
    <meta name="author" content="酷Q靓号站-缔梦网络-QQ85908087"/>
    <meta name="Copyright" content="酷Q靓号站-缔梦网络-QQ85908087"/>
    <meta name="Description" content="酷Q靓号站-7x24小时自动机器人发货-WWW.KQLHZ.COM,专业出售6-7-8-9-10位QQ号码,诚信为本、信誉至上,实力打造网络最诚信的QQ号码销售平台。"/>
    <meta name="Keywords" content="酷Q靓号站,7x24小时自动机器人发货,出售5位QQ,6位QQ,7位QQ,8位QQ,9位QQ,10位QQ,QQ号码专卖"/>
<link href="STYLE.CSS" rel="stylesheet" type="text/css">

</head>
<script language="JavaScript">
function checkform()
{
if(document.form1.qq.value.length==0)
{
alert("请输入QQ号码!");
document.form1.qq.focus();
return false;
}
if(isNaN(document.form1.qq.value))
{
alert("请输入QQ正确号码!");
document.form1.qq.focus();
return false;
}
}
 </script>

<body class="bg">
<div class="main">

	<FORM name=form1  onSubmit="return checkform()">
	<input type="hidden" value="add" name="add">
	<div class="search">
	<input type="text" name=qq class="si" value="请输入QQ号进行查询"  onblur="if (this.value==''){this.value='请输入QQ号进行查询';}" onfocus="if (this.value=='请输入QQ号进行查询'){this.value='';}"/>
	<input type="submit" name="Submit" value="" class="sb">
	</div>
	</FORM>
	

<!-- 这个是非官方人员提示-->
<% if request("add")="add" then
set rs=server.CreateObject("adodb.recordset")
rs.open " select * from qqbase where qq="&request("qq"),conn,1,1
if rs.eof then
response.write "<div class=""tip""><span>NO！此QQ非酷Q靓号站代理！</span></div>"
else

%>

<!-- 这个是官方人员提示-->
<div class="tip1"><span>OK！此QQ是酷Q靓号站代理！</span></div>

<%rs.close
set rs=nothing
end if
end if
%>	
	
</div>
<div class="process">
	<br/>
    <p><font  size="4"  color="000000">1.如果不是酷Q认证代理请勿购买，一律视为骗子感谢您的支持</font></p>
	<br/>
	<br/>
	<br/>
    <p><font  size="4"  color="000000">2.真伪查询只是确认是否正规代理，酷Q不会进行任何担保</font></p>
	<br/>
	<br/>
	<br/>
    <p><font  size="4"  color="000000">3.最终解释权归属酷Q靓号站，感谢您的支持与信任</font></p>
	<br/>
	<br/>
	<br/>
    <p><font  size="4"  color="000000">4.酷Q靓号站投诉建议邮箱：kqlhz@qq.com</font></p>
	<br/>
	<br/>

</div>
<div class="foot">Copyright @ 2015 - 2016 Cool Q. All Rights Reserved</div>
</body>

