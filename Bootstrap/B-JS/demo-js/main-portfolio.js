!function(a){"use strict";jQuery(document).on("ready",function(){function b(){a("button#menu-tile-btn").on("click",function(){var b="#tile-menu";a(b).hasClass("hidden")?a(b).removeClass("fadeOut hidden"):(a(b).addClass("fadeOut"),setTimeout(function(){a(b).addClass("hidden")},900))}),a("#tile-menu").find(".slide-flex").css({display:"flex","justify-content":"center","align-items":"center","flex-direction":"column",height:"100%"}),a("#big-tile-slider").pogoSlider({autoplayTimeout:4e3,autoplay:!0,displayProgress:!1,preserveTargetSize:!1,targetWidth:1e3,generateNav:!1,generateButtons:!1,targetHeight:300,responsive:!1,pauseOnHover:!0}).data("plugin_pogoSlider")}function c(){a("button#menu-launcher-btn").on("click",function(){var c="#launcher-menu";a(c).hasClass("hidden")?a(c).removeClass("fadeOut hidden"):(a(c).addClass("fadeOut"),setTimeout(function(){a(c).addClass("hidden")},900)),b.update(!0)});var b=new Swiper("#launcher-slider",{speed:600,observer:!0,observeParents:!0,a11y:!0,slidesPerView:1,paginationClickable:!0,onInit:function(){a("#launcher-slider").find(".swiper-slide-next").find(".overlay-btn").fadeOut()},onSlideChangeStart:function(){a("#launcher-slider .swiper-slide-next,#launcher-slider .swiper-slide-prev").find(".overlay-btn").fadeOut()},onSlideChangeEnd:function(){a("#launcher-slider").find(".swiper-slide-active").find(".overlay-btn").fadeIn()},pagination:".swiper-pagination-launcher",keyboardControl:!0});a('[data-toggle="tooltip"]').tooltip({trigger:"focus hover"})}function e(){a("#animated-text-me").typed({stringsElement:a("#typed-strings-me"),typeSpeed:90,startDelay:0,backSpeed:0,shuffle:!0,backDelay:500,loop:!0,loopCount:!1,showCursor:!0,attr:null,contentType:"html"})}function g(){a("#animated-text-gallery").typed({stringsElement:a("#typed-strings-gallery"),typeSpeed:90,startDelay:0,backSpeed:0,shuffle:!0,backDelay:500,loop:!0,loopCount:!1,showCursor:!0,attr:null,contentType:"html"})}function k(){a("button#side-tile,button.social-centre-launcher").on("click",function(){var b=".side-panel";a(b).hasClass("hidden")?a(b).removeClass("fadeOutRightBig hidden"):(a(b).addClass("fadeOutRightBig"),setTimeout(function(){a(b).addClass("hidden")},400))})}function l(){a(".timeline-image,.interest-image,.project-preview,.gear-preview,.whats-hot-preview,.screenshot-preview,.product-preview,.services-image,.details-image,.desktop,.swiper-slide,.about-image,.feature-image,.place-preview-image,.coming-preview,.error-preview,.clients-block,.gallery-preview,.bg-data-call").each(function(){a(this).attr("data-image-bg")&&a(this).attr("data-image-overlay")&&a(this).css({background:"linear-gradient("+a(this).data("image-overlay")+","+a(this).data("image-overlay")+"), url("+a(this).data("image-bg")+") center center / cover no-repeat"}),a(this).attr("data-solid-bg")&&a(this).css({background:a(this).data("solid-bg")}),a(this).attr("data-gradient-color-one")&&a(this).attr("data-gradient-color-two")&&a(this).attr("data-gradient-color-three")&&a(this).css({background:"linear-gradient(220deg,"+a(this).data("gradient-color-one")+","+a(this).data("gradient-color-two")+","+a(this).data("gradient-color-three")+")","background-size":"600% 600%","-webkit-animation":"gradientWave 38s ease infinite",animation:"gradientWave 38s ease infinite"})})}function m(){a("#home-slider").find(".content").height(a(window)[0].innerHeight)}function n(a){a=a||document.documentElement,document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement||document.msFullscreenElement?document.exitFullscreen?document.exitFullscreen():document.msExitFullscreen?document.msExitFullscreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitExitFullscreen&&document.webkitExitFullscreen():a.requestFullscreen?a.requestFullscreen():a.msRequestFullscreen?a.msRequestFullscreen():a.mozRequestFullScreen?a.mozRequestFullScreen():a.webkitRequestFullscreen&&a.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)}function p(b){a(b).hasClass("hidden")&&a(".counter-numbers").countTo("restart")}function r(b){new Audio(q).play(),a('<div id="quick-notification" class="notification-wrapper animated fadeOutRight delay8s"><div class="notification animated fadeInRight"><div class="icon animated rollIn"><i class="ion-android-notifications"></i></div><div class="message animated fadeInLeft delay0-4s">+html(text)+</div></div></div>').appendTo("body").find(".message").html(b).delay(8200).fadeOut(600,function(){a("#quick-notification").remove()})}function w(){function d(){if(b!==!1){var c=a(".clients-logos").find("img:first-child");c.animate({"margin-left":"-150px"},2e3,function(){c.remove().css({"margin-left":"0px"}),a(".clients-logos").find("img:last").after(c)})}}var b=!0,c=1800;setInterval(d,c),a(document).on({mouseenter:function(){b=!1},mouseleave:function(){b=!0}},".clients-logos")}function x(){a(".popup-image").magnificPopup({type:"image",tLoading:"",image:{titleSrc:function(a){return a.el.attr("title")+"<small>"+a.el.attr("data-subtitle")+"</small>"}},removalDelay:500,callbacks:{beforeOpen:function(){this.st.image.markup=this.st.image.markup.replace("mfp-figure","mfp-figure mfp-with-anim"),this.st.mainClass=this.st.el.attr("data-effect")},open:function(){a(".mfp-title").addClass("animated fadeInLeft delay0-5s")}},closeOnContentClick:!0,midClick:!0})}function y(){a(".popup-modal").magnificPopup({type:"inline",preloader:!1,removalDelay:500,callbacks:{beforeOpen:function(){this.st.mainClass=this.st.el.attr("data-effect")}},midClick:!0})}function z(){a("a.gallery-link").on("click",function(){a(this).next().magnificPopup("open")}),a(".gallery").each(function(){a(this).magnificPopup({delegate:"a",type:"image",tLoading:"",gallery:{enabled:!0,navigateByImgClick:!0},image:{titleSrc:function(a){return a.el.attr("title")+"<small>"+a.el.attr("data-subtitle")+"</small>"}},fixedContentPos:!1,mainClass:"mfp-zoom-in",removalDelay:160,callbacks:{open:function(){a(".mfp-title").addClass("animated fadeInLeft delay0-5s"),a.magnificPopup.instance.next=function(){var b=this;b.wrap.removeClass("mfp-image-loaded"),setTimeout(function(){a.magnificPopup.proto.next.call(b)},120)},a.magnificPopup.instance.prev=function(){var b=this;b.wrap.removeClass("mfp-image-loaded"),setTimeout(function(){a.magnificPopup.proto.prev.call(b)},120)}},imageLoadComplete:function(){var a=this;setTimeout(function(){a.wrap.addClass("mfp-image-loaded")},16)}},closeOnContentClick:!0,midClick:!0})})}function A(){a(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({disableOn:700,type:"iframe",mainClass:"mfp-zoom-in",removalDelay:160,preloader:!1,fixedContentPos:!1})}function B(){var b="form#mail-form",c="#send-button";a(b).on("submit",function(d){d.preventDefault();var e=a(this);a(c).addClass("btn-progress"),a(c).attr("disabled","disabled");var f=e.serialize(),g=a("#g-recaptcha-response").val();""===g?(event.preventDefault(),r("Please Submit Re-captcha"),a(c).removeClass("btn-progress"),a(c).removeAttr("disabled","disabled")):a.ajax({type:"POST",url:"php/mail_handler.php",data:f}).done(function(){a(c).removeClass("btn-progress"),r("Message Sent. Thanks for your Message, I will contact you soon."),a(b)[0].reset(),grecaptcha.reset(),a(c).removeAttr("disabled","disabled")}).fail(function(){a(c).removeClass("btn-progress").fadeIn(500),r("Sending Failed. Please Try Again"),a(c).removeAttr("disabled","disabled")})})}function G(){s.update(!0),u.update(!0),t.update(!0),v.update(!0)}function H(b,c){var d="#btm-tile",e="#btm-launcher",f="#tile-menu",g="#launcher-menu",h="div#intro",i="section.section",j="div.section-intro",k="#btm-launcher",l="#btm-tile",m="div.side-panel";a(d).find("button").prop("disabled",!0),a(e).find("button").prop("disabled",!0),a('[data-toggle="tooltip"]').tooltip("hide"),a(f).addClass("fadeOut"),a(g).addClass("fadeOut"),setTimeout(function(){a(f).addClass("hidden"),a(g).addClass("hidden")},900),a(b).hasClass("hidden")?(a("#"+c).clone().insertAfter(".loader-content").delay(3e3).queue(function(){a(this).remove(),a(this).dequeue()}),a(m).addClass("fadeOutRightBig"),setTimeout(function(){a(m).addClass("hidden").removeClass("fadeOutRightBig")},400),a(h).fadeIn().removeClass("fadeOut"),setTimeout(function(){a(h).addClass("fadeOut").delay(500).fadeOut()},1800),a(j).addClass("slideOutUp"),a(k).addClass("slideOutDown"),a(l).addClass("slideOutDown"),setTimeout(function(){a(i).addClass("animated fadeOut")},700),setTimeout(function(){a(i).addClass("hidden").removeClass("animated fadeOut"),a(j).addClass("hidden").removeClass("slideOutUp"),a(k).addClass("hidden").removeClass("slideOutDown"),a(l).addClass("hidden").removeClass("slideOutDown")},1200),setTimeout(function(){a(b).removeClass("hidden"),a(b).find(j).removeClass("hidden"),a(k).removeClass("hidden"),a(l).removeClass("hidden"),G(),a(b).find("#map").length&&I(),a(d).find("button").prop("disabled",!1),a(e).find("button").prop("disabled",!1)},1500)):(a(d).find("button").prop("disabled",!1),a(e).find("button").prop("disabled",!1))}function I(){var a={lat:-25.363,lng:131.044},b=new google.maps.Map(document.getElementById("map"),{zoom:4,center:a});new google.maps.Marker({position:a,map:b,icon:"img/svg/map-marker.svg",title:"Location!"})}a("#tile-menu,#launcher-menu").backgroundBlur({imageURL:"img/polygon/3.jpg",blurAmount:10,imageClass:"bg-blur"}),m(),a("button.full-screen").on("click",function(){n()});var q="https://notificationsounds.com/message-tones/your-turn-491/download/mp3",s=new Swiper(".swiper-container-gallery",{pagination:".swiper-pagination-gallery",a11y:!0,observer:!0,speed:1e3,freeMode:!0,observeParents:!0,keyboardControl:!0,paginationClickable:!0}),t=new Swiper("#project-slider",{pagination:".swiper-pagination-project",observer:!0,speed:1e3,freeMode:!0,observeParents:!0,paginationClickable:!0}),u=new Swiper("#clients-slider",{pagination:".swiper-pagination-clients",a11y:!0,observer:!0,speed:1e3,observeParents:!0,keyboardControl:!0,autoHeight:!0,paginationClickable:!0}),v=new Swiper("#achievement-slider",{a11y:!0,observer:!0,observeParents:!0,speed:1e3,keyboardControl:!0,autoHeight:!0,paginationClickable:!0});a("#ah-one").on("click",function(){v.slideTo(0,900)}),a("#ah-two").on("click",function(){v.slideTo(1,900)}),a("#ah-three").on("click",function(){v.slideTo(2,900)}),a("#ah-four").on("click",function(){v.slideTo(3,900)}),a("#ah-five").on("click",function(){v.slideTo(4,900)}),a("#ah-six").on("click",function(){v.slideTo(5,900)});a(window).on("resize",function(){m(),G()}),a("div#intro").hide(),a("nav.nav-launcher,nav.nav-tile,#launcher-menu,#tile-menu").addClass("hidden"),a('div[class*="-home-holder"]').addClass("hidden"),b(),c(),e(),g(),k(),l(),w(),x(),y(),z(),A(),B(),a("body").on("click","button",function(){var b=this.id;if("tile-port-home"==b||"launcher-port-home"==b||"port-btm-nav-home"==b||a(this).hasClass("port-close")){var c="#port-home";H(c,b)}else if("tile-port-about"==b||"launcher-port-about"==b||"port-btm-nav-me"==b){var d="#port-about";H(d,b)}else if("tile-port-recent"==b||"launcher-port-recent"==b||"port-btm-nav-recent"==b||"port-btm-tile-recent"==b){var e="#port-recent-works";H(e,b)}else if("tile-port-projects"==b||"launcher-port-project"==b||"port-btm-nav-project"==b||"port-btm-tile-project"==b){var f="#port-project";H(f,b)}else if("tile-port-portfolios"==b||"launcher-port-portfolios"==b||"port-btm-nav-port"==b||"port-btm-tile-port"==b){var g="#port-portfolios";H(g,b)}else if("tile-port-git"==b||"launcher-port-git"==b){var h="#port-git-repository";H(h,b)}else if("tile-port-achievements"==b||"launcher-port-achievements"==b||"port-btm-nav-ach"==b){var i="#port-achievements";H(i,b)}else if("tile-port-testimonials"==b||"launcher-port-testimonials"==b||"port-btm-nav-tes"==b){var j="#port-testimonials";H(j,b),p(j)}else if("tile-port-blog"==b||"launcher-port-blog"==b){var k="#port-blog";H(k,b)}else if("tile-port-map"==b||"launcher-port-map"==b){var l="#port-map";H(l,b)}else if("tile-port-contact"==b||"launcher-port-contact"==b||"port-btm-nav-cont"==b||"port-btm-tile-contact"==b){var m="#port-contact";H(m,b)}}),jQuery(window).on("load",function(){a("section.section").addClass("hidden"),a("div#pre-loader").addClass("animated fadeOut").delay(200).fadeOut(),a('section[id$="-home"],nav[class*="nav-"]').removeClass("hidden"),a('div[class*="-home-holder"]').removeClass("hidden"),setTimeout(function(){r("Hi, Welcome to My Portfolio. Explore my works and achievements. Don't forget contact if want to know anything. Happy Exploring :)")},6e3)})})}(jQuery);
