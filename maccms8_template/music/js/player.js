/*
    MK在线音乐播放器 V 1.0
    支持搜索并播放音乐；
    支持一键提取音乐外链；
    支持显示歌曲封面、歌词。
    前端界面修改自 http://sc.chinaz.com/jiaoben/150714514230.htm
    音乐资源来自于 网易云音乐
    
    二次开发请保留以上信息，谢谢！
*/

//改API地址在这里↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓

var APIurl = "http://127.0.0.1/music/api.php";     //api地址

//改API地址在这里↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑







var scrollt=0; var tflag=0;//存放时间和歌词的数组的下标
var lytext=new Array();//放存汉字的歌词 
var lytime=new Array();//存放时间
var delay=10; var line=0; var scrollh=0; 
var songIndex = 1;    //当前播放的ID
var musicID = 405987140;    //当前播放的歌曲网易云ID

lytext[0] = "歌词加载中...";

$(window).load(function(){
    so();   //加载音乐列表
	loadBG();   //加载背景
	
	//fPlay();    //模拟列表songIndex点击播放
});

document.onkeydown = function(event) {  //回车搜索
	if (event.keyCode == 13) {
		so();
		return false;
	}
};


function so(){     //搜索
    $("#pages").val("1");   //页码归一
    $("#musicList").html("");   //清空之前的搜索结果
    search();   //搜索
    return false;
}

function search(){      //音乐搜索
    $.ajax({
        type: "POST", 
        url: APIurl, 
        data: "types=search&count=20&"+$("#search-input-form").serialize(),
        dataType : "jsonp",
        jsonp: "callback",//参数名
        jsonpCallback:"mkPlayerCallBack",//函数名
        success: function(jsonData){  
            //console.log(jsonData);  //控制台输出返回的json（用于调试）
            //jsonData=JSON.parse(jsonData);
            
            switch(jsonData.code)
            {
                case "-1":
                    $("#musicList").append('<li class="songList loadmoreRemove"><div class="songLMain listtipbar">搜索出错：参数错误</div></li>');
                break;
                
                case "200":
                default:
                    if($("#pages").val()!=1)$(".loadmoreRemove").remove();     //删除加载更多
                    //console.log(jsonData.code);
                    if(jsonData.result.songCount == "0")
                    {
                        $("#musicList").append('<li class="songList loadmoreRemove"><div class="songLMain listtipbar">没有找到相关歌曲</div></li>');
                    }
                    else if(typeof jsonData.result.songs === undefined || typeof jsonData.result.songs == "undefined")
                    {
                        $("#musicList").append('<li class="songList loadmoreRemove"><div class="songLMain listtipbar">所有歌曲都已经加载完啦</div></li>');
                    }
                    else
                    {
                        var pagesNow = parseInt($("#pages").val());
                        for (var i = 0; i < jsonData.result.songs.length; i++) {
                            var j = 0;
                            
                            j = i + 1 + 20*(pagesNow-1);
                            musicList='<li class="songList">';
							musicList+='	<div class="songLMain">';
							musicList+='		<div class="check">';
							musicList+='			<input class="checkIn" type="checkbox" select="0">';
							musicList+='		</div>';
							musicList+='		<div class="start" >';
							musicList+='			<em sonN="' + j + '" musicID="' + jsonData.result.songs[i].id + '">' + j + '</em>'; //jsonData.result.songs[i].id
							musicList+='		</div>';
							musicList+='		<div class="songBd">';
							musicList+='			<div class="col colsn">' + jsonData.result.songs[i].name.substring(0, 20) + '</div>';
							musicList+='			<div class="col colcn">' + jsonData.result.songs[i].artists[0].name + '</div>';
							musicList+='			<div class="col">' + jsonData.result.songs[i].album.name.substring(0, 20) + '</div>';
							musicList+='		</div>';
							musicList+='		<div class="control">';
							musicList+='			<a class="cicon love cannotclick"></a>';
							musicList+='			<a class="cicon more" title="点击获取这首歌的外链" style="display:none"></a>';
							musicList+='			<a class="cicon dele cannotclick" style="display:none"></a>';
							musicList+='		</div>';
							musicList+='	</div>';						
							musicList+='</li>';
							$("#musicList").append(musicList);
							
                        }
                        $("#musicList").append('<li class="songList loadmoreRemove"><div id="add-more" class="songLMain listtipbar" onclick="loadmore();">点击加载更多</div></li>');
                        $("#musicList").append('<li class="songList loadmoreRemove"></li>');
                        $("#musicList").append('<script class="loadmoreRemove" type="text/javascript" src="js/ajaxList.js"><\/script>');
                    }
            }
            
        }   
    });
}
function loadmore(){    //加载更多
    $("#pages").val(parseInt($("#pages").val())+1); //页码加一
    $("#add-more").html("疯狂加载中..."); 

    search();
}  


$(function(){
    
	$("#searchBtn").click(function(){so()});    //点击搜索
	
	$(".checkAll").click(function(){    //全选
		var s=$(this).attr("select");
		if (s=="0") {
			$(this).css("background-position","-37px -710px");
			$(".checkIn[select='0']").css("background-position","-37px -710px");
			$(".checkIn[select='0']").attr("select","1");
			$(this).attr("select","1");
		}
		if (s=="1") {
			$(this).css("background-position","");
			$(".checkIn[select='1']").css("background-position","");
			$(".checkIn[select='1']").attr("select","0");
			$(this).attr("select","0");
		}
	});
	
	/*底部进度条控制*/
	$( ".dian" ).draggable({ 
		containment:".pro2",
		drag: function() {
			var l=$(".dian").css("left");
			var le = parseInt(l);
			audio.currentTime = audio.duration*(le/678);
      	}
	});
	
	/*音量控制*/
	$( ".dian2" ).draggable({ 
        containment:".volControl",
        drag: function() {
            var l=$(".dian2").css("left");
            var le = parseInt(l);
            audio.volume=(le/80);
        }
	});
	
	/*底部播放按钮*/
	$(".playBtn").click(function(){	
		var p = $(this).attr("isplay");		
		if (p=="0") {
			$(this).css("background-position","0 -30px");
			$(this).attr("isplay","1");
		}
		if (p=="1") {
			$(this).css("background-position","");
			$(this).attr("isplay","0");
		}
		if(audio.paused)    //这里要加如果直接点击播放就播放第一首歌
			audio.play();
		else
			audio.pause();
		
	});
	$(".mode").click(function(){    //播放模式
		// var t = calcTime(Math.floor(audio.currentTime))+'/'+calcTime(Math.floor(audio.duration));
		// //alert(t);
		// var p =Math.floor(audio.currentTime)/Math.floor(audio.duration);
		// alert(p);
		//alert(lytext[1]);
	});
	/*切歌*/
	$(".prevBtn").click(function(){
		var sid = parseInt(songIndex)-1;
		$(".start em[sonN="+sid+"]").click();
	});
	$(".nextBtn").click(function(){
		var sid = parseInt(songIndex)+1;
		$(".start em[sonN="+sid+"]").click();
	});
	
	$(".uiItem").click(function(){
	    showTips("Sorry,该功能暂未上线!");
    });
    
    if(APIurl == "http://api.mkblog.cn/163music/api.php")   //如果您已经更换了api，可以将这里三行删掉
    {
        showTips("温馨提示：<br>您当前使用的api为临时api，为保障正常使用，请按照说明文档更换api！");
    }
});

/*首尾模糊效果*/
function loadBG(){
	//alert();
	// stackBlurImage('canvas1', 'canvas', 60, false);
	var c=document.getElementById("canvas");
	var ctx=c.getContext("2d");
	var img=document.getElementById("canvas1");
	ctx.drawImage(img,45,45,139,115,0,0,1366,700);
	stackBlurCanvasRGBA('canvas',0,0,1366,700,60);
}

function calcTime(time){
	var hour;         	var minute;    	var second;
	hour = String ( parseInt ( time / 3600 , 10 ));
	if (hour.length ==1 )   hour='0'+hour;
	minute=String(parseInt((time%3600)/60,10));
	if(minute.length==1) minute='0'+minute;
	second=String(parseInt(time%60,10));
	if(second.length==1)second='0'+second;
	return minute+":"+second;
}

function updateProgress(ev){    //歌曲时间变动
	/*显示歌曲总长度*/
	var songTime = calcTime(Math.floor(audio.duration));
	$(".duration").html(songTime);
	
	/*显示歌曲当前时间*/
	var curTime = calcTime(Math.floor(audio.currentTime));
	$(".position").html(curTime);
	
	/*进度条*/
	var lef = 678*(Math.floor(audio.currentTime)/Math.floor(audio.duration));
	var llef = Math.floor(lef).toString()+"px";
	$(".dian").css("left",llef);
}

function audioPlay(ev){         //播放器开始播放
	$(".iplay").css("background",'url("images/nowplaying.gif") 50% 50%');   //左侧图标动
	
	$(".start em[sonN="+songIndex+"]").css({            //播放的歌曲前加载播放图形
		"background":'url("images/wave.gif") no-repeat',    //加载波形图片
		"color":"transparent"
	});
	
	$(".playBtn").css("background-position","0 -30px");
	$(".playBtn").attr("isplay","1");
}

function audioPause(ev){        //播放器暂停
	$(".iplay").css("background","");
    $(".start em[sonN=" + songIndex + "]").css({
        "background":'url("images/pause.png") no-repeat 0 0',
        "color":"transparent"
    });
}

function audioEnded(ev){    //一首歌曲播放完毕
	var sid = parseInt(songIndex)+1;
	$(".start em[sonN="+sid+"]").click();
}


function mPlay()//显示歌词
{ 
	// var ms=parseInt(getSeconds()); 
	// if(isNaN(ms)) show(0); 
	// else show(ms);
    var ms =audio.currentTime;
    show(ms);       //显示指定时间的歌词
    window.setTimeout("mPlay()",100)
}
function show(t)//显示歌词 
{ 
	var div1=document.getElementById("lyr");//取得层
	div1.innerHTML=" ";//每次调用清空以前的一次 
	if(t<lytime[lytime.length-1])//先舍弃数组的最后一个
	{ 	
        for(var k=0;k<lytext.length;k++)
        { 
            if(lytime[k]<=t&&t<lytime[k+1])     //当前显示的这一行
            { 
                scrollh=k*25;//让当前的滚动条的顶部改变一行的高度 
                div1.innerHTML+="<font color=#f60 style=font-weight:bold>"+lytext[k]+"</font><br>"; 
            } 
            else if(t<lytime[lytime.length-1])// 当前不是这一行
            {
                div1.innerHTML+=lytext[k]+"<br>"; 
            }
        } 
    }
    else//加上数组的最后一个
    { 
        for(var j=0;j<lytext.length-1;j++) 
        {
            div1.innerHTML+=lytext[j]+"<br>"; 
        }
        div1.innerHTML+="<font color=#f60 style=font-weight:bold>"+lytext[lytext.length-1]+"</font><br>"; 
    } 
} 


function getReady(s)//在显示歌词前做好准备工作 
{ 	
	$.ajax({                                //调用jquery的ajax方法
        type: "POST",                       //设置ajax方法提交数据的形式   
        url: APIurl,                      //把数据提交到ok.php   
        data: "types=lyric&id=" + musicID, //输入框writer中的值作为提交的数据 
        dataType : "jsonp",
        jsonp: "callback",//参数名
        jsonpCallback:"mkPlayerCallBack",//函数名
        success: function(jsonData){             //提交成功后的回调，msg变量是ok.php输出的内容。   
            //console.log("请求歌词返回的json数据-" + jsonData);  //控制台输出返回的json（用于调试）
            //jsonData = JSON.parse(jsonData);
            
            switch(jsonData.code)
            {
                case "-1":
                    console.log("歌曲ID为空");
                break;
                
                case "200":
                default:
                    //console.log(jsonData);
                    if (jsonData.nolyric === true)  //没有歌词
                    {
                        readyLyric("");
                    }
                    else
                    {
                        var ly = jsonData.lrc.lyric;
                        //console.log("请求歌词返回的歌词数据-" + ly);  //控制台输出返回的json（用于调试）
                        readyLyric(ly);    
                    }

            } 
        }   
    });//ajax
}

function readyLyric(ly)    //准备好歌词
{
	// lytext.length=0;
	// lytime.length=0;
	// lytext = new Array();
	// lytime = new Array();
	
	if (ly === "") {
	    ly = "[00:00]暂无歌词\n";
	}
	
	var arrly=ly.split("\n");//转化成数组

  	tflag=0;
  	for( var i=0;i<lytext.length;i++)   //清空之前存入数组的歌词
	{
		lytext[i]="";
	}
	for(i=0;i<lytime.length;i++)
	{
		lytime[i]="";
	}
	
  	$("#lry").html(" ");    //清空歌词显示区域
  	
  	document.getElementById("lyr").scrollTop=0;
  	
	for(i=0;i<arrly.length;i++) 
	{
  	    sToArray(arrly[i]); //解析如“[02:02][00:24]没想到是你”的字符串前放入数组
	}

	sortAr();   //按时间重新排序时间和歌词的数组 

	scrollBar();    //滚动
}

function scrollBar()//设置滚动条的滚动到歌词指定点
{ 
    if(document.getElementById("lyr").scrollTop<=scrollh) 
    {
        document.getElementById("lyr").scrollTop+=1; 
    }
    if(document.getElementById("lyr").scrollTop>=scrollh+50) 
    {
        document.getElementById("lyr").scrollTop-=1;
    }
    window.setTimeout("scrollBar()",delay); 
} 

function sToArray(str)//解析如“[02:02][00:24]没想到是你”的字符串前放入数组
{  
	
    var left=0;//"["的个数
    var leftAr=new Array(); 
    for(var k=0;k<str.length;k++) 
    { 
        if(str.charAt(k)=="[") { leftAr[left]=k; left++; } 
    } 
    if(left !== 0) 
    {
        for(var i=0;i<leftAr.length;i++) 
        {  
            lytext[tflag]=str.substring(str.lastIndexOf("]")+1);//放歌词 
            lytime[tflag]=conSeconds(str.substring(leftAr[i]+1,leftAr[i]+6));//放时间
            tflag++; 
        } 
    } 
     //alert(str.substring(leftAr[0]+1,leftAr[0]+6)); 
} 
function sortAr()//按时间重新排序时间和歌词的数组 
{ 
    var temp=null; 
    var temp1=null; 
    for(var k=0;k<lytime.length;k++) 
    { 
        for(var j=0;j<lytime.length-k;j++) 
        { 
            if(lytime[j]>lytime[j+1]) 
            { 
                temp=lytime[j]; 
                temp1=lytext[j]; 
                lytime[j]=lytime[j+1]; 
                lytext[j]=lytext[j+1]; 
                lytime[j+1]=temp; 
                lytext[j+1]=temp1; 
            }
        } 
    } 
} 

function conSeconds(t)//把形如：01：25的时间转化成秒；
{	
    var m=t.substring(0,t.indexOf(":")); 
    var s=t.substring(t.indexOf(":")+1); 
    m=parseInt(m.replace(/0/,""));
    //if(isNaN(s)) s=0; 
    var totalt=parseInt(m)*60+parseInt(s); 
    //alert
    // (parseInt(s.replace(//b(0+)/gi,""))); 
    //if(isNaN(totalt))  return 0; 
    
    return totalt; 
} 
// function getSeconds()//得到当前播放器播放位置的时间 
// { var t=getPosition(); t=t.toString();//数字转换成字符串
//  var s=t.substring(0,t.lastIndexOf("."));//得到当前的秒 
//  //alert(s); 
//  return s; 
//  } 
//  function getPosition()//返回当前播放的时间位置
//   { var mm=document.getElementById("MediaPlayer1"); 
//    //var mmt=;
//    //alert(mmt); 
//    return mm.CurrentPosition; 
// } 

function showMusicUrl(name,url) //显示外链地址
{
    var html='<div class="tips" id="msgtips">' + name + ' 的外链地址为</div>';
    html += '<div id="msgbody"><textarea rows="3">' + url + '</textarea></div>';
    showMsg(html)  //弹出消息
}

function showTips(msg)  //弹出提示
{
    var html='<div class="tips" id="msgtips">' + msg + '</div>';
    showMsg(html)  //弹出消息
}

function showMsg(html)  //弹出消息
{
    var windowWidth = document.body.clientWidth;       
    var windowHeight = document.body.clientHeight;  
    
    html += '<div class="readit" onclick="hideMsg();">我知道了</div>';
    
    $("#msgbox").html(html);
    
    var popupHeight = $("#msgbox").height();       
    var popupWidth = $("#msgbox").width(); 
        //添加并显示遮罩层   
    $("#mask").width(windowWidth + document.body.scrollWidth)   
              .height(windowHeight + document.body.scrollHeight)   
              .click(function() {hideMsg(); })
              .fadeIn(200); 
    $("#msgbox").css({"position": "absolute","left":windowWidth/2-popupWidth/2,"top":windowHeight/2-popupHeight/2})  
                .fadeIn(200); 
}
function hideMsg()
{
    $("#mask").fadeOut(200);    
    //$("#msgbox").animate({left: 0, top: 0, opacity: "hide" }, "slow"); 
    $("#msgbox").fadeOut(200); 
}


function fPlay(){
	$(".start em[sonN="+songIndex+"]").click();
} 
