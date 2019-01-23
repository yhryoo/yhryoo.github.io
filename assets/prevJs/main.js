
//window.addEventListener('load',gridInit,false);
$(window).load(init());

	
function footerInit(){

	console.log("-------------------------------------");
	console.log("init footer");
	// $('.footerBlock').css("top",$('.footer').offset().top - $(window).scrollTop()+"px");
	// $('.footerBlock').css('height',$('.footer').outerHeight());

	var n = $('main').attr('class').split(' ')[0];
	if(n == "bookpage")
		n = "home";
	else if(n=="textPage")
		n = "texts";
	var f = false;
	var left = 15;

	$(this).removeClass('active');
	$('.menu').each(function(e){
		if($(this).attr('id') == n)
		{
			f = !f;
			$(this).addClass('active');
		}
		else if(!f){
			$(this).addClass('left');
			var id = $(this).attr('id');
			if(id != 'close')
			{
				$(".navWrapper#"+id+" .label").css("margin-left",left+"px");
				left += $(this).outerWidth(true);
			}
		}

		else if(f)
			$(this).addClass('right');
	});

	var l = 0;
	$($('.right').get().reverse()).each(function(){
		$(this).css("right",l+"px");
		l+=$(this).outerWidth(true);
	});
	$(".navWrapper").removeClass('active');
	$(".navWrapper#"+n).addClass('active');
	console.log(n);
	console.log("done init footer");

}


function textsInit(){
	console.log("-------------------------------------");
	console.log("init texts");
	//$('.blockerWrapper .blocker .content .viewMore').css("display","none");
	$('.texts .blocker').each(function(){
		var c=0;
		var f = false;
		$(this).find('a').each(function(){
			console.log(c);
			if(c>=3){
				$(this).addClass('hidden');
				f = true;
			}
			c++;
		});

		if(f)
		 	$(this).find('.content').addClass('hasMore');
	});
}



function gridInit(){
	$('.gridWrapper').each(function(){
		var p = $(this).parent();
		$(this).css("height",p.outerHeight()+"px");
	});
}






function titlePosition(){
	var h = $('.home .slideshow').outerHeight() + $('.divider').outerHeight() + ($('.divider.container').outerHeight() / 8) - $(window).scrollTop();

		if(h <= -31)
			h = -31;

		$('.header').css("top",h+"px");
}




function init(){

	var totalHeight = 0;
	var currentHeight = 0;

	function fullscreenGridInit(){

		console.log("-------------------------------------");
		console.log("init fullscreen Grid");

		for(var i=0; i<59; i++)
			$('.fullscreenPanel .vertical').append('<div class="vgrid"></div>');
		
		var c=0;
		while(currentHeight <= $(window).height())
		{
			c++;
			$('.fullscreenPanel .horizontal').append('<div class="hgrid"></div>');
			currentHeight += $('.hgrid').outerHeight();
		}
		console.log(currentHeight);
	}

	console.log("init........");

	fullscreenGridInit()

	/*console.log("-------------------------------------");
	console.log("start making grids");
	while(totalHeight < $(window).height()){
		$('.gridWrapper.horizontal').append('<div class="hgrid"></div>');
		totalHeight += $('.hgrid').height();
	}
	

	//$('.gridWrapper').append('<div class="footerBlock"></div>')


	for(var i=0; i<60; i++){
		$('.gridWrapper.vertical').append('<div class="vgrid"></div>');
	//	console.log("this is happening");
	}

	console.log("done grids");*/

	//gridInit();
	footerInit();
	textsInit();

	console.log("-------------------------------------");
	console.log("init slideshow");
	$('.bookpage .slideshow').slick();
	$('.textPage .slideshow').slick({
		adaptiveHeight: true
	});

	$('.home .slideshow').slick({
		autoplay: true,
		autoplaySpeed: 2500,
		pauseOnHover: false,
		pauseOnFocus: false,
		speed: 2000
	});
	console.log("done init slideshow");


	// $('.toolbar .menu').hover(function(){
	// 	console.log("-------------------------------------");
	// 	console.log("click event fired");
	// 	if(!$('main').hasClass('clicked')){
	// 		$('main').addClass('clicked');
			
	// 	//	footerOpen();
	// 	//	$('html, body').animate({scrollTop: ($('.footer').outerHeight()-45)},800);
	// 	//	console.log("opened footer");
	// 	}
	// 	/*else{
	// 		$('main').removeClass('clicked');
			
	// 		$('html, body').animate({scrollTop: 0},1000);
	// 		setTimeout(function(){
	// 			$('.hgrid').css("opacity","1");
	// 		}, 1000);
	// 		console.log("closed footer");
			
	// 	}*/
	// },function(){});

	$('.blockerWrapper').hover(function(){
		if($('main').hasClass('clicked')){
			$('main').removeClass('clicked');
				
			//	$('html, body').animate({scrollTop: 0},800);
				/*setTimeout(function(){
					$('.hgrid').css("opacity","1");
				}, 1000);*/
				console.log("closed footer");
				footerInit();
		}
	},function(){});

	$('.slick-prev, .slick-next, .fullScreen').hover(function(){
		var name = $(this).attr('class');
		console.log("hovered!");
		$('.mouseLabel').empty();

		if(name == 'slick-prev slick-arrow')
			$('.mouseLabel').append('Prev');
		else if(name == 'slick-next slick-arrow')
			$('.mouseLabel').append('Next');
		else
			$('.mouseLabel').append('Fullscreen');

	},function(){
		$('.mouseLabel').empty();
	});

	$('.slideshowWrapper, .slideshow').mousemove(function(e){
		var x = e.pageX+10;
		var y = e.pageY+10-$(window).scrollTop();
		$('.mouseLabel').css({"top":y+"px","left":x+"px"});
	});

	$('.home .slideshow').click(function(){
		h = $(window).height();
		$('html, body').animate({scrollTop: h},800);
	});

	$('.fullScreen').click(function(){
		$('.bookpage').addClass('fullscreenOpen');
	});

	$('#close').click(function(){
		$('main').removeClass('fullscreenOpen');
	});

	var isFlagShowing = false;

	titlePosition();

	$(window).scroll(function(){
		//console.log($('.blockerWrapper').prop('scrollHeight')-$('.blockerWrapper').height()+" "+$('.blockerWrapper').scrollTop());
		console.log("-------------------------------------");
		console.log("inside scroll fired");
		/*if(!$('main').hasClass('clicked') && $('.blockerWrapper').scrollTop() >= $('.blockerWrapper').prop('scrollHeight')-$('.blockerWrapper').height()){
			//footerOpen();
			console.log("end reached");
			$('main').addClass('clicked');
	//		console.log("open!!!");
		}*/

		var l = $(window).scrollTop();
		//console.log(l+" , "+$('.header').offset().top);

		//titlePosition();

		console.log($('body').hasClass('home'));

		if($('main').hasClass('home')&&l >= $('.home .slideshow').outerHeight()+$('.divider').outerHeight()+($('.divider.container').outerHeight() / 2)){
			$('.home .header').removeClass('notScrolled');
			$('.home .header').css('top',"0px");
			$('.toolbar').css("top",$(window).height() - 42 + "px"); 
			console.log("reveal toolbar");
		}
		else if($('main').hasClass('home')){
			$('.home .header').addClass('notScrolled');
			//$('.home .header').css('top',"-31px");
			titlePosition();
			$('.toolbar').css("top",$(window).height()); 
			console.log("hide toolbar");
		}

		var fl = $('.footer').offset().top - l;

		var newFlag=false;
		if(fl <= $(window).height()-42)
			newFlag = true;
	

		if(isFlagShowing && !newFlag)
			footerInit();

		isFlagShowing = newFlag;
		//console.log(fl+" "+$(window).height());
	//	console.log($('.blockerWrapper').scrollTop()+" , "+($('.blockerWrapper').prop('scrollHeight')-$('.blockerWrapper').height()));
	//		$('.main').addClass('clicked');
	});

	/*$(window).scroll(function(){
		console.log("-------------------------------------");
		console.log("outside scroll fired: "+$(this).scrollTop());

		if($(window).scrollTop() == 0){
			$('main').removeClass('clicked');
		//	console.log("this happend!");
			$('.hgrid').css("opacity","1");
			console.log("footer is closed");
			//$('.blockerWrapper').css("border-bottom","0pt");
		}
	//	console.log($('.footer').offset().top - $(window).scrollTop());
		$('.footerBlock').css("top",$('.footer').offset().top - $(window).scrollTop()+"px");
		console.log("footerblock is following footer");
	});*/

	$('.toolbar .menu').hover(function(){
		console.log("-------------------------------------");
		console.log("toolbar menu hovered");

		var t = $(this).text().toLowerCase();
		if(t != 'close')
			$('.footer .navWrapper').removeClass('active');
		console.log(t);
		if(t=="books")
			t = "home";
		else if(t=="textPage")
			t = "texts";
		$('.footer #'+t).addClass('active');
		//footerOpen();
	//	$('html, body').animate({scrollTop: ($('.footer').outerHeight()-45)},500);
		console.log(isFlagShowing);
		if(!$('main').hasClass('clicked') && !isFlagShowing && t!='close'){
			$('main').addClass('clicked');
		}
		else if(!$('main').hasClass('clicked') && isFlagShowing && t!='close'){
			$('html, body').animate({scrollTop: $('main').outerHeight()},800);
			console.log($('main').outerHeight());
		}
		else if($('main').hasClass('clicked') && t=='close'){
			$('main').removeClass('clicked');
		}
		console.log("footer content changed");
		


		
	},function(){});

	$(window).resize(function(){
		fullscreenGridInit();
	});

	$('.viewMore').click(function(){
		$(this).parent().addClass('revealed');
	});

	$('.hide').click(function(){
		$(this).parent().removeClass('revealed');
	});

	console.log("-------------------------------------");
	$(window).scrollTop(0);
	console.log("scroll to top: "+$(window).scrollTop());
}


