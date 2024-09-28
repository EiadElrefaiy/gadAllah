(function($){'use strict';$('.animsition').animsition({loadingClass:'preloader',loadingInner:'<div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>'});new WOW({mobile:false}).init();$('.a-nav-toggle').on('click',function(){if($('html').hasClass('body-menu-opened')){$('html').removeClass('body-menu-opened').addClass('body-menu-close');}else{$('html').addClass('body-menu-opened').removeClass('body-menu-close');}});$('.navbar-nav .dropdown').on({mouseenter:function(){$(this).find('.dropdown-menu').show();},mouseleave:function(){$(this).find('.dropdown-menu').hide();}});var offset=$(window).height();if($('.a-affix').length){$(window).scroll(function(){var scroll=$(window).scrollTop();if(scroll>=offset){$('.header').addClass('header-affix');}else{$('.header').removeClass('header-affix');}});};$(window).on('load',function(){if($('.a-grid').length){$('.a-grid').isotope({itemSelector:'.grid-item'});$('.a-grid-filter a').on('click',function(){$(this).parents('.a-grid-filter').find('.active').removeClass('active');$(this).parent().addClass('active');var filterValue=$(this).attr('data-filter');$('.a-grid').isotope({filter:filterValue});});}
if($('.a-grid-line').length){$('.a-grid-line').isotope({itemSelector:'.grid-item',layoutMode:'fitRows'});$('.a-grid-filter a').on('click',function(){$(this).parents('.a-grid-filter').find('.active').removeClass('active');$(this).parent().addClass('active');var filterValue=$(this).attr('data-filter');$('.a-grid-line').isotope({filter:filterValue});});}});if($('.a-progressbar').length){function progressbar(){$('.a-progressbar .progress-bar:in-viewport').each(function(){if(!$(this).hasClass('animated')){$(this).addClass('animated');$(this).width($(this).attr('aria-valuenow')+'%');}});}
progressbar();$(window).on('scroll',function(){progressbar();});}
if($('.a-counter').length){function counter(){$('.a-counter:in-viewport').each(function(){if(!$(this).hasClass('animated')){$(this).addClass('animated');var thisElement=$(this);$({count:0}).animate({count:thisElement.attr('data-value')},{duration:2000,easing:'swing',step:function step(){var mathCount=Math.ceil(this.count);thisElement.text(mathCount.toLocaleString('en-IN',{maximumSignificantDigits:3}));}});}});};counter();$(window).on('scroll',function(){counter();});}
if($('.a-timer').length){$('.a-timer').countdown('2020/10/10',function(event){$(this).html(event.strftime('<div class="timer-item"><span>%D</span> Days</div><div class="divider"></div><div class="timer-item"><span>%H</span> Hours</div><div class="divider"></div><div class="timer-item"><span>%M</span> Minutes</div><div class="divider"></div><div class="timer-item"><span>%S</span> Seconds</div>'));});}
$('.a-change-bg').on('mouseover',function(){var index=$('.a-change-bg').index(this);$('.slide-bg-list .slide-bg').removeClass('active').eq(index).addClass('active');});$('.a-minimal a').on({mouseenter:function(){$('body').addClass('dark-horizontal');var index=$(this).index();$('.promo-minimal-hover .minimal-item').eq(index).addClass('visible');$('.promo-minimal .minimal-item').addClass('over');},mouseleave:function(){$('body').removeClass('dark-horizontal');var index=$(this).index();$('.promo-minimal-hover .minimal-item').eq(index).removeClass('visible');$('.promo-minimal .minimal-item').removeClass('over');}});$('.flash-item-nav a, .a-scroll').bind('click',function(event){var $anchor=$(this);$('html, body').stop().animate({scrollTop:$($anchor.attr('href')).offset().top-100},1000);event.preventDefault();});$('.a-video-play').on('click',function(){if($(this).hasClass('active')){$('.video-container').fadeOut();$(this).removeClass('active').html('<i class="icon ion-ios-play"></i>');}else{$('.video-container').fadeIn();$(this).addClass('active').html('<i class="icon ion-ios-pause"></i>');}});function resizeVideo(){var width=$(window).width();var height=$(window).height();$('.a-video').each(function(){var iWidth=$(this).data('vimeo-width');var iHeight=$(this).data('vimeo-height');if(height/width>iHeight/iWidth){$(this).find('iframe').css({'width':'500%','height':'100%'});}else{$(this).find('iframe').css({'width':'100%','height':'500%'});}});}
resizeVideo();$(window).resize(function(){resizeVideo();});if($('.a-project-carousel').length){var owl=$('.a-project-carousel');owl.owlCarousel({smartSpeed:750,dots:false,nav:true,autoplay:true,loop:true,margin:5,autoplayHoverPause:true,navText:['<div class="arrow"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>','<div class="arrow"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>'],items:1});owl.trigger('stop.owl.autoplay')
$(window).bind('scroll',function(event){if($('.a-play').hasClass('animated')){owl.trigger('play.owl.autoplay',[7000]);}});$('.project-carousel-3d .owl-next').on({mouseenter:function(){$('.project-carousel-3d').addClass('move-left');},mouseleave:function(){$('.project-carousel-3d').removeClass('move-left');}});$('.project-carousel-3d .owl-prev').on({mouseenter:function(){$('.project-carousel-3d').addClass('move-right');},mouseleave:function(){$('.project-carousel-3d').removeClass('move-right');}});}
if($('.a-article-promo-carousel').length){$('.a-article-promo-carousel').owlCarousel({smartSpeed:750,dots:true,nav:true,autoplay:true,loop:true,autoplayHoverPause:true,navText:['<div class="arrow"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>','<div class="arrow"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>'],items:1});}
if($('.a-reviews-carousel').length){$('.a-reviews-carousel').owlCarousel({smartSpeed:750,dots:true,margin:30,nav:false,items:1});}
if($('.a-photo-carousel').length){$('.a-photo-carousel').owlCarousel({items:3,smartSpeed:750,margin:8,autoplayHoverPause:true,dots:true,nav:true,navText:['<div class="arrow"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>','<div class="arrow"><div class="arrow-top"></div><div class="arrow-bottom"></div></div>'],dotData:false,responsive:{0:{nav:false,items:1},900:{nav:true,items:3}}});}
function resizeIframe(){var width=$(window).width();var height=$(window).height();if(width<768){$('.video-text-container').addClass('owl-carousel owl-theme');$('.video-text-container').owlCarousel({smartSpeed:750,dots:true,nav:false,items:1});$('.video-text-container').on('translated.owl.carousel',function(e){$(this).find('.video-text-item.is-active').removeClass('is-active');$(this).find('.owl-item.active .video-text-item').addClass('is-active');});}else{$('.owl-carousel .video-text-item.is-active').removeClass('is-active');$('.video-text-container').removeClass('owl-carousel owl-theme').trigger('destroy.owl.carousel');}
$('.video-item').each(function(){var iWidth=$(this).data('vimeo-width');var iHeight=$(this).data('vimeo-height');var index=$(this).data('portrait-index');if(height/width>iHeight/iWidth){$('.video-item[data-portrait-index='+index+'] .iframe-css').html('<style>.video-item[data-portrait-index="'+index+'"] iframe {width: 500%; height:100%;}</style>')}else{$('.video-item[data-portrait-index='+index+'] .iframe-css').html('<style>.video-item[data-portrait-index="'+index+'"] iframe {width: 102%; height:500%;}</style>')}});}
resizeIframe();$(window).resize(function(){resizeIframe();});$('.circular-name, .circle-dot').on({mouseenter:function(){var index=$(this).data('portrait-index');$('.circular-name').removeClass('is-init');$('.circular-name[data-portrait-index='+index+']').addClass('is-init');},mouseleave:function(){$('.circular-name').removeClass('is-init');if(!$('.circular-name').hasClass('is-active')){$('.circular-name').addClass('is-init');}}});var dStart=2644;var magicAngles=[9999,2108,1580,1050,530,0];var findDotIndex=function(a,direction){if(direction=='forward'){for(var i=0;i<=magicAngles.length-1;i++){if(a>=magicAngles[i]){return i;}}}else{for(var i=magicAngles.length-1;i>0;i--){if(a<=magicAngles[i]){return i;}}}};var drawing=function drawing(dStart,dStop,selector){var direction=dStart<=dStop?'backward':'forward';$({n:dStart}).animate({n:dStop},{easing:'linear',duration:1000,step:function(a){$('.'+selector).css({'stroke-dashoffset':a|0});var index=findDotIndex(a,direction);if(selector=='st1'){setTimeout(function(){$('.circle-dot[data-portrait-index='+index+'] .circle-outside').css({opacity:direction=='forward'?1:0.2},{duration:500});},300)}}});};var videoItemAimateCallback=function(){$(this).removeClass('is-active').css({'opacity':'1','z-index':'100'}).find('iframe').remove();};$('.circular-name, .circle-dot').on('click',function(){if($(this).hasClass('is-active')){return;}
var index=$(this).data('portrait-index');var videoItem=$('.video-item[data-portrait-index='+index+']');var url=videoItem.attr('data-vimeo');var iStart=videoItem.attr('data-vimeo-start');$('.circular-name').removeClass('is-active');$('.video-item.is-active').css('z-index','500').animate({opacity:0},4000,videoItemAimateCallback);videoItem.addClass('is-active').append('<iframe src="https://player.vimeo.com/video/'+url+'?title=0&byline=0&portrait=0&autoplay=1&autopause=0&muted=1&background=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');resizeIframe();$('.circle-dot.is-active, .circular-name.is-active, .video-text-item.is-active').removeClass('is-active');$('.circle-dot[data-portrait-index='+index+'], .circular-name[data-portrait-index='+index+'], .video-text-item[data-portrait-index='+index+']').addClass('is-active');$('.circle-dot[data-portrait-index='+index+'] .circle-outside').delay(1000).animate({opacity:1});drawing(dStart,magicAngles[index],'st1');dStart=magicAngles[index];});$(window).on('load',function(){$('.video-item:first-child').addClass('is-active');setTimeout(function(){$('.video-text-item[data-portrait-index="0"]').addClass('is-active');drawing(2644,0,'st0');},300);});}($));

$(function() {
  $('a[href="#search"]').on("click", function(event) {
    event.preventDefault();
    $("#search").addClass("open");
    $('#search > form > input[type="search"]').focus();
  });

  $("#search, #search button.close").on("click keyup", function(event) {
    if (
      event.target == this ||
      event.target.className == "close" ||
      event.keyCode == 27
    ) {
      $(this).removeClass("open");
    }
  });

  $("form").submit(function(event) {
    event.preventDefault();
    return false;
  });
});

(function(){
    //Login/Signup modal window - by CodyHouse.co
	function ModalSignin( element ) {
		this.element = element;
		this.blocks = this.element.getElementsByClassName('js-signin-modal-block');
		this.switchers = this.element.getElementsByClassName('js-signin-modal-switcher')[0].getElementsByTagName('a');
		this.triggers = document.getElementsByClassName('js-signin-modal-trigger');
		this.hidePassword = this.element.getElementsByClassName('js-hide-password');
		this.init();
	};

	ModalSignin.prototype.init = function() {
		var self = this;
		//open modal/switch form
		for(var i =0; i < this.triggers.length; i++) {
			(function(i){
				self.triggers[i].addEventListener('click', function(event){
					if( event.target.hasAttribute('data-signin') ) {
						event.preventDefault();
						self.showSigninForm(event.target.getAttribute('data-signin'));
					}
				});
			})(i);
		}

		//close modal
		this.element.addEventListener('click', function(event){
			if( hasClass(event.target, 'js-signin-modal') || hasClass(event.target, 'js-close') ) {
				event.preventDefault();
				removeClass(self.element, 'cd-signin-modal--is-visible');
			}
		});
		//close modal when clicking the esc keyboard button
		document.addEventListener('keydown', function(event){
			(event.which=='27') && removeClass(self.element, 'cd-signin-modal--is-visible');
		});

		//hide/show password
		for(var i =0; i < this.hidePassword.length; i++) {
			(function(i){
				self.hidePassword[i].addEventListener('click', function(event){
					self.togglePassword(self.hidePassword[i]);
				});
			})(i);
		}

		//IMPORTANT - REMOVE THIS - it's just to show/hide error messages in the demo
		this.blocks[0].getElementsByTagName('form')[0].addEventListener('submit', function(event){
			event.preventDefault();
			self.toggleError(document.getElementById('signin-email'), true);
		});
		this.blocks[1].getElementsByTagName('form')[0].addEventListener('submit', function(event){
			event.preventDefault();
			self.toggleError(document.getElementById('signup-username'), true);
		});
	};

	ModalSignin.prototype.togglePassword = function(target) {
		var password = target.previousElementSibling;
		( 'password' == password.getAttribute('type') ) ? password.setAttribute('type', 'text') : password.setAttribute('type', 'password');
		target.textContent = ( 'Hide' == target.textContent ) ? 'Show' : 'Hide';
		putCursorAtEnd(password);
	}

	ModalSignin.prototype.showSigninForm = function(type) {
		// show modal if not visible
		!hasClass(this.element, 'cd-signin-modal--is-visible') && addClass(this.element, 'cd-signin-modal--is-visible');
		// show selected form
		for( var i=0; i < this.blocks.length; i++ ) {
			this.blocks[i].getAttribute('data-type') == type ? addClass(this.blocks[i], 'cd-signin-modal__block--is-selected') : removeClass(this.blocks[i], 'cd-signin-modal__block--is-selected');
		}
		//update switcher appearance
		var switcherType = (type == 'signup') ? 'signup' : 'login';
		for( var i=0; i < this.switchers.length; i++ ) {
			this.switchers[i].getAttribute('data-type') == switcherType ? addClass(this.switchers[i], 'cd-selected') : removeClass(this.switchers[i], 'cd-selected');
		}
	};

	ModalSignin.prototype.toggleError = function(input, bool) {
		// used to show error messages in the form
		toggleClass(input, 'cd-signin-modal__input--has-error', bool);
		toggleClass(input.nextElementSibling, 'cd-signin-modal__error--is-visible', bool);
	}

	var signinModal = document.getElementsByClassName("js-signin-modal")[0];
	if( signinModal ) {
		new ModalSignin(signinModal);
	}

	// toggle main navigation on mobile
	var mainNav = document.getElementsByClassName('js-main-nav')[0];
	if(mainNav) {
		mainNav.addEventListener('click', function(event){
			if( hasClass(event.target, 'js-main-nav') ){
				var navList = mainNav.getElementsByTagName('ul')[0];
				toggleClass(navList, 'cd-main-nav__list--is-visible', !hasClass(navList, 'cd-main-nav__list--is-visible'));
			}
		});
	}

	//class manipulations - needed if classList is not supported
	function hasClass(el, className) {
	  	if (el.classList) return el.classList.contains(className);
	  	else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
	}
	function addClass(el, className) {
		var classList = className.split(' ');
	 	if (el.classList) el.classList.add(classList[0]);
	 	else if (!hasClass(el, classList[0])) el.className += " " + classList[0];
	 	if (classList.length > 1) addClass(el, classList.slice(1).join(' '));
	}
	function removeClass(el, className) {
		var classList = className.split(' ');
	  	if (el.classList) el.classList.remove(classList[0]);
	  	else if(hasClass(el, classList[0])) {
	  		var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
	  		el.className=el.className.replace(reg, ' ');
	  	}
	  	if (classList.length > 1) removeClass(el, classList.slice(1).join(' '));
	}
	function toggleClass(el, className, bool) {
		if(bool) addClass(el, className);
		else removeClass(el, className);
	}

	//credits http://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
	function putCursorAtEnd(el) {
    	if (el.setSelectionRange) {
      		var len = el.value.length * 2;
      		el.focus();
      		el.setSelectionRange(len, len);
    	} else {
      		el.value = el.value;
    	}
	};
})();
