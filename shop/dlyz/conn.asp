<!--�����������οƼ����������QQ��730360420 ������κ����⣬��������ϵ��-->
<%response.Expires=0%>

   <%
   dim conn   
   dim connstr
  	'on error resume next
   connstr="DBQ="+server.mappath("#qq_base.asp")+";DefaultDir=;DRIVER={Microsoft Access Driver (*.mdb)};"
   set conn=server.createobject("ADODB.CONNECTION")
   conn.open connstr 
%>