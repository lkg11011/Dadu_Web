// JavaScript Document

$(function(){
	//------------------設定TOP圖片紐移動方式------------------------
	$(window).load(function(){
		var $win = $(window),
			$ad = $('#abgne_float_ad').css('opacity', 0).show(),	// 讓廣告區塊變透明且顯示出來
			_width = $ad.width(),
			_height = $ad.height(),
			_diffY = 150, _diffX = 20,	// 距離右及下方邊距
			_moveSpeed = 800;	// 移動的速度
		
		// 先把 #abgne_float_ad 移動到定點
		$ad.css({
			top: $(document).height(),
			left: $win.width() - _width - _diffX,
			opacity: 1
		});
	
		// 幫網頁加上 scroll 及 resize 事件
		$win.bind('scroll resize', function(){
			var $this = $(this);
			
			// 控制 #abgne_float_ad 的移動
			$ad.stop().animate({
				top: $this.scrollTop() + $this.height() - _height - _diffY,
				left: $this.scrollLeft() + $this.width() - _width - _diffX
			}, _moveSpeed, 'easeInOutBack');
		}).scroll();	// 觸發一次 scroll()
	});
	
	//----------設定錨點移動快慢-----------------------
	
	$("#goTop").click(function(){

		//$("html,body").animate({scrollTop:0},900);

		$("html,body").animate({scrollTop:0},900,"easeInOutCubic");

		return false;

	});

});