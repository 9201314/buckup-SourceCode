var xmlHttp

function DomainPriceQueryJs(str)
{
document.getElementById("priceInfo").removeAttribute("hidden");
document.getElementById("priceInfo").innerText="注册价格查询中...";
xmlHttp=GetXmlHttpObject();
if (xmlHttp==null) {
document.getElementById("priceInfo").innerText="价格信息查询失败，浏览器不支持。";
return;
} 
var url="https://api.tian.hu/whois.php?domain=" + str + "&action=checkPrice";
xmlHttp.onreadystatechange=stateChanged;
xmlHttp.open("GET",url,true);
xmlHttp.send(null);
} 

function stateChanged() 
{ 
if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{ 
var respObj = JSON.parse(xmlHttp.responseText);
var code = respObj.code;
if (code != 200) {
document.getElementById("priceInfo").innerText="注册价格查询失败，错误码：" + code;
} else {
var isPremium = respObj.data.premium;
var regFee = respObj.data.register;
var renewFee = respObj.data.renew;
var coloredPremium = isPremium == "true" ? "<span style='color:red'><b>是</b></span>" : "<b>否</b>";
var priceInfoHtml = "<span id='Premium' style='display: inline-block;width: 33%;'>溢价: " + coloredPremium + "</span><span id='Price' style='display: inline-block;width: 33%;text-align: center;'>注册: <b>" + regFee + "元</b></span><span id='renew' style='display: inline-block;width: 33%;text-align: right;'>续费: <b>" + renewFee + "元</b>";
document.getElementById("priceInfo").innerHTML = priceInfoHtml;
}
}
}

function GetXmlHttpObject()
{
var xmlHttp=null;
try
 {
 // Firefox, Opera 8.0+, Safari
 xmlHttp=new XMLHttpRequest();
 }
catch (e)
 {
 // Internet Explorer
 try
  {
  xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
  }
 catch (e)
  {
  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 }
return xmlHttp;
}