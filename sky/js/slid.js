$(function(){

	var slenderWidth = $('.slender').width();
	var nowLi = 3;
	var li_count = $('.slender li').length;

	$('.slender ul').css({width:li_count * slenderWidth});
	$('.slender li').css({width:slenderWidth});

	for(var i=0; i<li_count;i++){
		$('.slenderControl').append('<a></a>');
	}


	$('.slenderControl a, .slender li').click(function(){
		nowLi = $(this).index();
		slenderChange();
		$('.slenderControl a').eq(nowLi).css({'background-color':'#F6C555'});
		$('.slenderControl a').eq(nowLi).siblings().css({'background-color':'#333'});
		$('.slender li').eq(nowLi).css({'transform':'rotateY(0)'});
		$('.slender li').eq(nowLi).prevAll().css({'transform':'rotateY(60deg)'});
		$('.slender li').eq(nowLi).nextAll().css({'transform':'rotateY(-60deg)'});
		$('.slender li').eq(0).css({'left':'-60px'});
	})


	function slenderChange(){
		$('.slender ul').stop(true, false).animate({left: slenderWidth * nowLi * -1}, 500);
	}

	var times = setInterval(perpic, 5000);

	function perpic(){		
		console.log( 'nowLi = ' + nowLi)
		nowLi++;
		if(nowLi>=li_count){
			nowLi=0;
		};
		slenderChange();
		$('.slenderControl a').eq(nowLi).css({'background-color':'#F6C555'});
		$('.slenderControl a').eq(nowLi).siblings().css({'background-color':'#333'});
		$('.slender li').eq(nowLi).css({'transform':'rotateY(0)'});
		$('.slender li').eq(nowLi).prevAll().css({'transform':'rotateY(60deg)'});
		$('.slender li').eq(nowLi).nextAll().css({'transform':'rotateY(-60deg)'});
	}

	$('.slender').hover(function(){
		clearInterval(times);
		$('.times .percentags').removeClass('gogo');
	},function(){
		times = setInterval(perpic, 5000);
		$('.times .percentags').addClass('gogo');
	})

})