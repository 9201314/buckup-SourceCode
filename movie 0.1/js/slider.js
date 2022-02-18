/**
 * 使用方式：
 * 	$(function(){
 *		$('#sliderDemo').mokoSlider(); 
 *	});
 *
 *
 */

(function($){

	$.fn.Slider = function(options){
		//定义常量
		var settings = $.extend({
            speed: 800,		//速度
			width: 690,		//移动步长
			interval:5000,	//切换时间
			controller:true	//是否显示控制器
        },options);
		
		//控制器
		var Ctrl2 = function($this,callback){
			var count = $this.find('li').size();
			if(count <= 1)
				return ;
			var html = '<div class="point-ctrl">\
						<a class="left-point" href="javascript:void(0)" hidefocus="true"></a>\
						<a class="right-point" href="javascript:void(0)" hidefocus="true"></a>\
						</div>';
			var $pointCtrl = $(html);
			$pointCtrl.find('.left-point').click(function(){
				callback.call(this,'left');
			});
			$pointCtrl.find('.right-point').click(function(){
				callback.call(this,'right');
			});
			$pointCtrl.appendTo($this);
			
		};
		//控制器
		var Ctrl= function($this,callback){
			var count = $this.find('ul li').size();
			var $controller = $('<p>',{'class':'controller'});
			if(count <= 1)
				return ;
			//创建对应个数的span标签
			for(var a=0;a < count; a++){
				$('<a/>',{ 'hidefocus':'true','href':'javascript:void(0);','text':'●'}).click(callback).appendTo($controller);
			}
			//设置默认第一个选中
			$controller.children(':first').addClass('moko-slider-on');
			//添加到slider中
			$controller.appendTo($this);
			//对外调用的更新选中
			this.update = function(index){
				$controller.find(':eq('+index+')').addClass('moko-slider-on').siblings().removeClass('moko-slider-on');
			}
			return this;
		};
		
		this.each(function() {
			var $this = $(this),$ul = $this.find('ul');
			var $list = $ul.find('li'), count = $list.size(),index=0,timer,hoverTimer;

			$this.width(settings.width);
			//设置ul的宽度，使li排成一行
			$ul.width(settings.width * count);
			
			$ul.hover(function(){
				//当鼠标移上超过 1000毫秒时清除滚动计时器
				hoverTimer = setTimeout(function(){
					//清除定时器
					clearInterval(timer);
					timer = null;
				},1000);
			},function(){
				//清除鼠标以上的计时
				clearTimeout(hoverTimer);
				//如果滚动计时器被清楚则重新启动
				if(!timer){
					next();				
					interval();
				}
			});

			var ctrl2 = new Ctrl2($this,function(direction){
				//停止动画效果
				$ul.stop();
				if('left' == direction){
					pre();
				}
				else{
					next();
				}
				//清除定时器
				clearInterval(timer);
				//从当前的index继续定时切换
				interval();
			});

			var ctrl = new Ctrl($this,function(){
				//获得被点击的span 索引
				index = $(this).index();
				//停止动画效果
				$ul.stop();
				//切换到指定的索引
				rolling(index);
				//清除定时器
				clearInterval(timer);
				//从当前的index继续定时切换
				interval();
			});
			
			var interval = function(){
				if(count <= 1)
					return ;
				timer = setInterval(function(){
					next();
				},settings.interval);
			};
			//
			interval();
			//滚动第 i 个
			var rolling = function(i){
				if(ctrl.update)
					ctrl.update(i);
				$ul.animate({'margin-left': -i * settings.width}, settings.speed);
			},
			//下一个
			next = function(){
				index++;
				if(index >= count)
					index=0;
				rolling(index);
			},
			//上一个
			pre = function(){
				index--;
				if(index < 0)
					index = count-1;
				rolling(index); //执行继续滚动
			}
		});
		
	};
})(jQuery);
//图片切换
jQuery(function(){
	jQuery('.box_163css').Slider();
});