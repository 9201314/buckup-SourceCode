<!--本程序由逐梦科技设计制作，QQ：730360420 如果有任何问题，请与我联系。-->
<%response.Expires=0%>

   <%
   dim conn   
   dim connstr
  	'on error resume next
   connstr="DBQ="+server.mappath("#qq_base.asp")+";DefaultDir=;DRIVER={Microsoft Access Driver (*.mdb)};"
   set conn=server.createobject("ADODB.CONNECTION")
   conn.open connstr 
%>