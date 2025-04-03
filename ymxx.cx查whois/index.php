<?php include("./do.php") ?>
<html>
  
  <head>
        <title><?php if(!empty($domain)){echo $dedomain. " - ";} ?>域名信息查询</title>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<meta itemprop="image" content="https://ymxx.cx/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="https://ymxx.cx/favicon.ico">
<meta property="og:image" content="https://ymxx.cx/favicon.ico">
<meta property="og:description" content="域名信息查询,DOMAIN,NAME,IP,域名工具,ip查询,域名注册查询" />
<link rel="shortcut icon" href="https://ymxx.cx/favicon.ico" />
<link rel="icon" sizes="32x32" href="https://ymxx.cx/favicon.ico">
<link rel="Bookmark" href="https://ymxx.cx/favicon.ico" />

    
    <link rel="shortcut icon" href="https://ymxx.cx/favicon.ico" />
    <link rel="icon" sizes="32x32" href="https://ymxx.cx/favicon.ico">
    <link rel="Bookmark" href="https://ymxx.cx/favicon.ico" />
    
    
    
    
    <meta name="keywords" content="YMXX.CX,DOMAIN,NAME,IP,域名信息查询,域名工具,ip查询,域名注册查询">
    <meta name="description" content="域名信息查询,DOMAIN,NAME,IP,域名工具,ip查询,域名注册查询">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" type="text/css" href="https://<?php $url = $_SERVER['SERVER_NAME']; $murl = str_replace('www.','',$url);echo $murl;?>/style.css">
    <script src="https://libs.baidu.com/jquery/2.0.3/jquery.min.js"></script>
    
    <script type="text/javascript">function whois() {
        var domain = document.getElementById('domain').value;
        if (!domain) {
          alert('注意：请输入需要查询的内容。（FAILED: Input cannot be EMPTY.）');
          document.getElementById("domain").focus();
        } else if (domain.substr(0, 1) == "." || domain.substr( - 1) == ".") {
          alert('注意：格式错误，请检查。（FAILED: Input format ERROR.）');
          document.getElementById("domain").focus();
        } else {
          domain = domain.replace(/^http:\/\//i, "");
          domain = domain.replace(/^https:\/\//i, "");
          domain = domain.replace(/\/.*/, "");
          window.location = './' + domain;
        }
      }

    </script>
    
    <script type="text/javascript">
            window.onload = function() {
                var oTab = document.getElementById("try");
                var aH3 = oTab.getElementsByTagName("h3");
                var aDiv = oTab.getElementsByTagName("div");
                for (var i = 0; i < aH3.length; i++) {
                    aH3[i].index = i;
                    aH3[i].onclick = function() {
                        for (var i = 0; i < aH3.length; i++) {
                            aH3[i].className = "";
                            aDiv[i].style.display = "none";
                            aDiv[this.index].className = "";
                            aDiv[this.index].className = "content";
                        }
                        this.className = "active";
                        aDiv[this.index].style.display = "block";
                    };
                }
            };
        </script>
                <script src="https://<?php $url = $_SERVER['SERVER_NAME']; $murl = str_replace('www.','',$url);echo $murl;?>/domainPriceQuery.js"></script> 
  </head>
  <body>
      <!--<button onclick="change()"><div id="cornertool"><ul><li id="DarkModeButton" class="">◐</li></ul></div></button>-->
  <div class="preload" id="preload" style="display:none">
      <div class="waitdiv">
        <p>
          <img src="/wait.gif">
        </p>
      </div>
    </div>
    <div class="main">
      <!--<p class="css-o37oi5"><a class="css-qa8l2m" href="./">whois.sl</a></p>-->
      
      
      
        
     
      <p class="css-o37oi5"><a href="https://YMXX.CX/" target="_self"><img src="/logo.png" width="200px" height=""="auto"> </a></p>
      <form action="<?php $_SERVER['PHP_SELF'];?>" id="form" class="form">
        <div id="bg">
          <div id="in">
            <div class="search">
              <input type="text" name="domain" id="domain" autocomplete="on" placeholder="搜索从这里开始［Enter Domain/ASN/IP To Lookup］" value="<?php if(!empty($domain)) {echo $dedomain;} ?>">
              <button id="submit" onclick="whois(); return false;" value="whois"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
            </div>
          </div>
        </div>
      </form>
   <div id="try" style="display:none;" class="try">
            <h3 class="active">中文说明</h3>
            <h3>English</h3>
            <h3>状态含义</h3>

            <div class="content">&#128526; 本站支持下列格式查询 :
            <br /><br />&#128075; 域名 ( 示例：<a href="./liuliu.ge">liuliu.ge</a> )
            <br /><br />&#128064; IDN 域名  ( 示例：<a href="./你好.世界">你好.世界</a> )
            <br /><br />&#127793; ASN 16bit ( 示例：<a href="./AS15169">AS15169</a> )
            <br /><br />&#128158; ASN 32bit ( 示例：<a href="./AS401308">AS401308</a> )
            <br /><br />&#128235; IPv4 ( 示例：<a href="./223.5.5.5">223.5.5.5</a> )
            <br /><br />&#127812; IPv6 ( 示例：<a href="./2400:3200::1">2400:3200::1</a> )
            <br /><br /><hr /><br />&#9889; 
           搜索 ASN/IPv4/IPv6 可能需要花费更长时间，如果超时，请重试。
           <br /><br />&#9889; YMXX.CX(Whois) 是一个免费获取whois信息的网站，支持全球1000+种域名后缀及上述格式查询，直接从官方whois数据库返回结果，准确、快速、方便，本站的作用是为了方便了解域名的一些相关信息，仅此而已，无缓存、记录、统计，放心使用。<br />
           </div>
            <div>&#128526; Type Supported ( Try e.g. ) : 
            <br /><br />&#128075; Domain ( e.g. <a href="./whoisw.com">whoisw.com</a> )
            <br /><br />&#128064; IDN Domain ( e.g. <a href="./你好.世界">你好.世界</a> )
            <br /><br />&#127793; ASN 16bit ( e.g. <a href="./AS15169">AS15169</a> )
            <br /><br />&#128158; ASN 32bit ( e.g. <a href="./AS401308">AS401308</a> )
            <br /><br />&#128235; IPv4 ( e.g. <a href="./223.5.5.5">223.5.5.5</a> )
            <br /><br />&#127812; IPv6 ( e.g. <a href="./2400:3200::1">2400:3200::1</a> )
            <br /><br />
            <hr /><br />&#9889; Searching for ASN/IPv4/IPv6 may take longer, if your search TIMES OUT , please try again.
            <br /><br />&#9889; YMXX.CX is a free and perfect tool for whois lookup information tools. Whois lets you perform a domain whois search, whois IP lookup and search the whois database for relevant information on domain registration and availability. This can help provide insight into a domain's history and additional information. Use WhoIs lookup anytime you want to perform a search to see who owns a domain name.<br />
            </div>
            <div><table style="border-collapse: collapse; width: 100%;font-size: 14px;">
                您可以通过WHOIS查询并结合本文查看域名状态的含义，帮助您了解域名安全情况和域名无法正常使用等原因，以便您及时采取相应措施。
<tbody>
<tr>
<td style="width: 30%;">域名状态</td>
<td style="width: 70%;">含义</td>
</tr>
<tr>
<td style="width: 30%;">addPeriod</td>
<td style="width: 70%;text-align: left;" >注册局设置的域名新注册期。域名新注册5天内会出现此状态，但不影响域名的正常使用，5天后自动解除该状态。</td>
</tr>
<tr>
<td style="width: 30%;">ok</td>
<td style="width: 70%;text-align: left;" >正常状态。表示域名可正常使用，没有需要立即进行的操作，也没有设置任何保护措施。<br><b>说明：</b>域名存在其他状态时，ok状态不显示，但并不代表域名不正常。</br></td>
</tr>
<tr>
<td style="width: 30%;">clientDeleteProhibited</td>
<td style="width: 70%;text-align: left;">注册商设置禁止删除。表示保护域名的一种状态，域名不能被删除。</td>
<tr>
<td style="width: 30%;">serverDeleteProhibited</td>
<td style="width: 70%;text-align: left;">注册局设置禁止删除。表示保护域名的一种状态，域名不能被删除。</td>
</tr>
<tr>
<td style="width: 30%;">clientUpdateProhibited</td>
<td style="width: 70%;text-align: left;">注册商设置禁止更新。包含注册人/管理联系人/技术联系人/付费联系人/DNS等域名信息不能被修改，但可以设置或修改解析记录。</td>
</tr>
<tr>
<td style="width: 30%;">serverUpdateProhibited</td>
<td style="width: 70%;text-align: left;">注册局设置禁止更新。包含注册人/管理联系人/技术联系人/付费联系人/DNS等域名信息不能被修改，但可以设置或修改解析记录。</td>
</tr>
<tr>
<td style="width: 30%;">clientTransferProhibited</td>
<td style="width: 70%;text-align: left;">注册商设置禁止转移。表示保护域名的一种状态，域名不能转移注册商。
</td>
</tr>
<tr>
<td style="width: 30%;">serverTransferProhibited</td>
<td style="width: 70%;text-align: left;">注册局设置禁止转移。表示保护域名的一种状态，域名不能转移注册商。部分新注册的域名或域名转移注册商60天内会被注册局设置禁止转移，60天后会自动解除该状态；部分域名涉及仲裁或诉讼案被注册局设置禁止转移，仲裁或诉讼案结束会解除该状态。
</td>
</tr>
<tr>
<td style="width: 30%;">pendingVerification</td>
<td style="width: 70%;text-align: left;">注册信息审核期。域名注册后未进行实名审核，您需在域名注册成功后5天内提交实名资料进行审核，如果5天后仍未提交资料进行实名审核，域名会被serverHold（暂停解析）。
</td>
</tr>
<tr>
<td style="width: 30%;">clientHold</td>
<td style="width: 70%;text-align: left;">注册商设置暂停解析。处于clientHold状态的域名会被暂停解析，您需联系注册商解除该状态。
</td>
</tr>
<tr>
<td style="width: 30%;">serverHold</td>
<td style="width: 70%;text-align: left;">注册局设置暂停解析。处于serverHold状态的域名会被解析暂停，“.cn”中英文域名注册成功后，如果未通过实名审核多会出现该状态，您需在域名有效期内完成实名审核，审核通过后会解除该状态。
</td>
</tr>
<tr>
<td style="width: 30%;">inactive</td>
<td style="width: 70%;text-align: left;">非激活状态。注册域名时未填写域名DNS，导致域名注册成功后无法进行解析，您需在注册商处设置域名DNS。
</td>
</tr>
<tr>
<td style="width: 30%;">clientRenewProhibited/serverRenewProhibited	</td>
<td style="width: 70%;text-align: left;">注册商或注册局设置禁止续费。处于该状态的域名无法进行域名续费，通常是域名处于仲裁或法院争议期，您需联系注册商确认原因</td>
</tr>
<tr>
<td style="width: 30%;">pendingTransfer</td>
<td style="width: 70%;text-align: left;">注册局设置转移过程中。表示域名正处于转移注册商的过程中。
</td>
</tr>
<tr>
<td style="width: 30%;">redemptionPeriod</td>
<td style="width: 70%;text-align: left;">注册局设置赎回期。表示域名处于赎回期，您可联系注册商高价赎回域名。
</td>
</tr>
<tr>
<td style="width: 30%;">pendingDelete</td>
<td style="width: 70%;text-align: left;">注册局设置待删除/赎回期。国内和国际域名处于该状态时，有不同的含义：
<li>国际域名：该状态表示域名已过赎回期等待被删除，删除后可对外重新开放注册。</li>
<li>国内域名：该状态表示域名处于赎回期，您可联系注册商高价赎回域名。</li></td>
</tr>
</tbody>
</table>
</div>
        </div>
        <div class="slider"><div class="indicator"></div></div>
      <?php include( "./result.php") ?>
    </div>
    <div class="footer">
      	<center><a href="https://YMXX.CX/" target="_self">
        <img src="https://img.shields.io/badge/Copyright-%C2%A9%202024-blue?style=flat&amp;labelColor=4285f4&amp;color=ea4335">
      </a>
      <a href="https://cnmp.net/" target="_self">
          <img src="https://img.shields.io/badge/Domain-菜鸟米铺-blue?style=flat&amp;labelColor=fbbc05&amp;color=4285f4">
      </a>
      <a href="https://liuliu.ge/" target="_self">
          <img src="https://img.shields.io/badge/Author-六六哥-blue?style=flat&amp;labelColor=34a853&amp;color=ea4335">
      </a></p></center></div>
      
    </div>
    <div style="display:none">

    </div>
    <script>document.getElementById("domain").focus();
      if ($('pre').length > 0) {
        //document.getElementById("form").style.marginTop = "0";
      } else {
        document.getElementById("try").style.display = "";
        //document.getElementById("form").style.marginTop = "25%";
      }
    </script>
    <br />
  </body>
</html>