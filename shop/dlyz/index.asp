<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!--#include file="conn.asp"-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
  <title>��Q����վ-��ٴ�����֤ϵͳ-WWW.KQLHZ.COM</title>
    <meta name="author" content="��Q����վ-��������-QQ85908087"/>
    <meta name="Copyright" content="��Q����վ-��������-QQ85908087"/>
    <meta name="Description" content="��Q����վ-7x24Сʱ�Զ������˷���-WWW.KQLHZ.COM,רҵ����6-7-8-9-10λQQ����,����Ϊ������������,ʵ��������������ŵ�QQ��������ƽ̨��"/>
    <meta name="Keywords" content="��Q����վ,7x24Сʱ�Զ������˷���,����5λQQ,6λQQ,7λQQ,8λQQ,9λQQ,10λQQ,QQ����ר��"/>
<link href="STYLE.CSS" rel="stylesheet" type="text/css">

</head>
<script language="JavaScript">
function checkform()
{
if(document.form1.qq.value.length==0)
{
alert("������QQ����!");
document.form1.qq.focus();
return false;
}
if(isNaN(document.form1.qq.value))
{
alert("������QQ��ȷ����!");
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
	<input type="text" name=qq class="si" value="������QQ�Ž��в�ѯ"  onblur="if (this.value==''){this.value='������QQ�Ž��в�ѯ';}" onfocus="if (this.value=='������QQ�Ž��в�ѯ'){this.value='';}"/>
	<input type="submit" name="Submit" value="" class="sb">
	</div>
	</FORM>
	

<!-- ����Ƿǹٷ���Ա��ʾ-->
<% if request("add")="add" then
set rs=server.CreateObject("adodb.recordset")
rs.open " select * from qqbase where qq="&request("qq"),conn,1,1
if rs.eof then
response.write "<div class=""tip""><span>NO����QQ�ǿ�Q����վ����</span></div>"
else

%>

<!-- ����ǹٷ���Ա��ʾ-->
<div class="tip1"><span>OK����QQ�ǿ�Q����վ����</span></div>

<%rs.close
set rs=nothing
end if
end if
%>	
	
</div>
<div class="process">
	<br/>
    <p><font  size="4"  color="000000">1.������ǿ�Q��֤����������һ����Ϊƭ�Ӹ�л����֧��</font></p>
	<br/>
	<br/>
	<br/>
    <p><font  size="4"  color="000000">2.��α��ѯֻ��ȷ���Ƿ����������Q��������κε���</font></p>
	<br/>
	<br/>
	<br/>
    <p><font  size="4"  color="000000">3.���ս���Ȩ������Q����վ����л����֧��������</font></p>
	<br/>
	<br/>
	<br/>
    <p><font  size="4"  color="000000">4.��Q����վͶ�߽������䣺kqlhz@qq.com</font></p>
	<br/>
	<br/>

</div>
<div class="foot">Copyright @ 2015 - 2016 Cool Q. All Rights Reserved</div>
</body>

