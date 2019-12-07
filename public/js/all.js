/*
 * jQuery FlexSlider v2.7.1
 * Copyright 2012 WooThemes
 * Contributing Author: Tyler Smith
 */!function($){var e=!0;$.flexslider=function(t,a){var n=$(t);void 0===a.rtl&&"rtl"==$("html").attr("dir")&&(a.rtl=!0),n.vars=$.extend({},$.flexslider.defaults,a);var i=n.vars.namespace,r=window.navigator&&window.navigator.msPointerEnabled&&window.MSGesture,s=("ontouchstart"in window||r||window.DocumentTouch&&document instanceof DocumentTouch)&&n.vars.touch,o="click touchend MSPointerUp keyup",l="",c,d="vertical"===n.vars.direction,u=n.vars.reverse,v=n.vars.itemWidth>0,p="fade"===n.vars.animation,m=""!==n.vars.asNavFor,f={};$.data(t,"flexslider",n),f={init:function(){n.animating=!1,n.currentSlide=parseInt(n.vars.startAt?n.vars.startAt:0,10),isNaN(n.currentSlide)&&(n.currentSlide=0),n.animatingTo=n.currentSlide,n.atEnd=0===n.currentSlide||n.currentSlide===n.last,n.containerSelector=n.vars.selector.substr(0,n.vars.selector.search(" ")),n.slides=$(n.vars.selector,n),n.container=$(n.containerSelector,n),n.count=n.slides.length,n.syncExists=$(n.vars.sync).length>0,"slide"===n.vars.animation&&(n.vars.animation="swing"),n.prop=d?"top":n.vars.rtl?"marginRight":"marginLeft",n.args={},n.manualPause=!1,n.stopped=!1,n.started=!1,n.startTimeout=null,n.transitions=!n.vars.video&&!p&&n.vars.useCSS&&function(){var e=document.createElement("div"),t=["perspectiveProperty","WebkitPerspective","MozPerspective","OPerspective","msPerspective"];for(var a in t)if(void 0!==e.style[t[a]])return n.pfx=t[a].replace("Perspective","").toLowerCase(),n.prop="-"+n.pfx+"-transform",!0;return!1}(),n.isFirefox=navigator.userAgent.toLowerCase().indexOf("firefox")>-1,n.ensureAnimationEnd="",""!==n.vars.controlsContainer&&(n.controlsContainer=$(n.vars.controlsContainer).length>0&&$(n.vars.controlsContainer)),""!==n.vars.manualControls&&(n.manualControls=$(n.vars.manualControls).length>0&&$(n.vars.manualControls)),""!==n.vars.customDirectionNav&&(n.customDirectionNav=2===$(n.vars.customDirectionNav).length&&$(n.vars.customDirectionNav)),n.vars.randomize&&(n.slides.sort(function(){return Math.round(Math.random())-.5}),n.container.empty().append(n.slides)),n.doMath(),n.setup("init"),n.vars.controlNav&&f.controlNav.setup(),n.vars.directionNav&&f.directionNav.setup(),n.vars.keyboard&&(1===$(n.containerSelector).length||n.vars.multipleKeyboard)&&$(document).bind("keyup",function(e){var t=e.keyCode;if(!n.animating&&(39===t||37===t)){var a=n.vars.rtl?37===t?n.getTarget("next"):39===t&&n.getTarget("prev"):39===t?n.getTarget("next"):37===t&&n.getTarget("prev");n.flexAnimate(a,n.vars.pauseOnAction)}}),n.vars.mousewheel&&n.bind("mousewheel",function(e,t,a,i){e.preventDefault();var r=t<0?n.getTarget("next"):n.getTarget("prev");n.flexAnimate(r,n.vars.pauseOnAction)}),n.vars.pausePlay&&f.pausePlay.setup(),n.vars.slideshow&&n.vars.pauseInvisible&&f.pauseInvisible.init(),n.vars.slideshow&&(n.vars.pauseOnHover&&n.hover(function(){n.manualPlay||n.manualPause||n.pause()},function(){n.manualPause||n.manualPlay||n.stopped||n.play()}),n.vars.pauseInvisible&&f.pauseInvisible.isHidden()||(n.vars.initDelay>0?n.startTimeout=setTimeout(n.play,n.vars.initDelay):n.play())),m&&f.asNav.setup(),s&&n.vars.touch&&f.touch(),(!p||p&&n.vars.smoothHeight)&&$(window).bind("resize orientationchange focus",f.resize),n.find("img").attr("draggable","false"),setTimeout(function(){n.vars.start(n)},200)},asNav:{setup:function(){n.asNav=!0,n.animatingTo=Math.floor(n.currentSlide/n.move),n.currentItem=n.currentSlide,n.slides.removeClass(i+"active-slide").eq(n.currentItem).addClass(i+"active-slide"),r?(t._slider=n,n.slides.each(function(){var e=this;e._gesture=new MSGesture,e._gesture.target=e,e.addEventListener("MSPointerDown",function(e){e.preventDefault(),e.currentTarget._gesture&&e.currentTarget._gesture.addPointer(e.pointerId)},!1),e.addEventListener("MSGestureTap",function(e){e.preventDefault();var t=$(this),a=t.index();$(n.vars.asNavFor).data("flexslider").animating||t.hasClass("active")||(n.direction=n.currentItem<a?"next":"prev",n.flexAnimate(a,n.vars.pauseOnAction,!1,!0,!0))})})):n.slides.on(o,function(e){e.preventDefault();var t=$(this),a=t.index(),r;r=n.vars.rtl?-1*(t.offset().right-$(n).scrollLeft()):t.offset().left-$(n).scrollLeft(),r<=0&&t.hasClass(i+"active-slide")?n.flexAnimate(n.getTarget("prev"),!0):$(n.vars.asNavFor).data("flexslider").animating||t.hasClass(i+"active-slide")||(n.direction=n.currentItem<a?"next":"prev",n.flexAnimate(a,n.vars.pauseOnAction,!1,!0,!0))})}},controlNav:{setup:function(){n.manualControls?f.controlNav.setupManual():f.controlNav.setupPaging()},setupPaging:function(){var e="thumbnails"===n.vars.controlNav?"control-thumbs":"control-paging",t=1,a,r;if(n.controlNavScaffold=$('<ol class="'+i+"control-nav "+i+e+'"></ol>'),n.pagingCount>1)for(var s=0;s<n.pagingCount;s++){r=n.slides.eq(s),void 0===r.attr("data-thumb-alt")&&r.attr("data-thumb-alt","");var c=""!==r.attr("data-thumb-alt")?c=' alt="'+r.attr("data-thumb-alt")+'"':"";if(a="thumbnails"===n.vars.controlNav?'<img src="'+r.attr("data-thumb")+'"'+c+"/>":'<a href="#">'+t+"</a>","thumbnails"===n.vars.controlNav&&!0===n.vars.thumbCaptions){var d=r.attr("data-thumbcaption");""!==d&&void 0!==d&&(a+='<span class="'+i+'caption">'+d+"</span>")}n.controlNavScaffold.append("<li>"+a+"</li>"),t++}n.controlsContainer?$(n.controlsContainer).append(n.controlNavScaffold):n.append(n.controlNavScaffold),f.controlNav.set(),f.controlNav.active(),n.controlNavScaffold.delegate("a, img",o,function(e){if(e.preventDefault(),""===l||l===e.type){var t=$(this),a=n.controlNav.index(t);t.hasClass(i+"active")||(n.direction=a>n.currentSlide?"next":"prev",n.flexAnimate(a,n.vars.pauseOnAction))}""===l&&(l=e.type),f.setToClearWatchedEvent()})},setupManual:function(){n.controlNav=n.manualControls,f.controlNav.active(),n.controlNav.bind(o,function(e){if(e.preventDefault(),""===l||l===e.type){var t=$(this),a=n.controlNav.index(t);t.hasClass(i+"active")||(a>n.currentSlide?n.direction="next":n.direction="prev",n.flexAnimate(a,n.vars.pauseOnAction))}""===l&&(l=e.type),f.setToClearWatchedEvent()})},set:function(){var e="thumbnails"===n.vars.controlNav?"img":"a";n.controlNav=$("."+i+"control-nav li "+e,n.controlsContainer?n.controlsContainer:n)},active:function(){n.controlNav.removeClass(i+"active").eq(n.animatingTo).addClass(i+"active")},update:function(e,t){n.pagingCount>1&&"add"===e?n.controlNavScaffold.append($('<li><a href="#">'+n.count+"</a></li>")):1===n.pagingCount?n.controlNavScaffold.find("li").remove():n.controlNav.eq(t).closest("li").remove(),f.controlNav.set(),n.pagingCount>1&&n.pagingCount!==n.controlNav.length?n.update(t,e):f.controlNav.active()}},directionNav:{setup:function(){var e=$('<ul class="'+i+'direction-nav"><li class="'+i+'nav-prev"><a class="'+i+'prev" href="#">'+n.vars.prevText+'</a></li><li class="'+i+'nav-next"><a class="'+i+'next" href="#">'+n.vars.nextText+"</a></li></ul>");n.customDirectionNav?n.directionNav=n.customDirectionNav:n.controlsContainer?($(n.controlsContainer).append(e),n.directionNav=$("."+i+"direction-nav li a",n.controlsContainer)):(n.append(e),n.directionNav=$("."+i+"direction-nav li a",n)),f.directionNav.update(),n.directionNav.bind(o,function(e){e.preventDefault();var t;""!==l&&l!==e.type||(t=$(this).hasClass(i+"next")?n.getTarget("next"):n.getTarget("prev"),n.flexAnimate(t,n.vars.pauseOnAction)),""===l&&(l=e.type),f.setToClearWatchedEvent()})},update:function(){var e=i+"disabled";1===n.pagingCount?n.directionNav.addClass(e).attr("tabindex","-1"):n.vars.animationLoop?n.directionNav.removeClass(e).removeAttr("tabindex"):0===n.animatingTo?n.directionNav.removeClass(e).filter("."+i+"prev").addClass(e).attr("tabindex","-1"):n.animatingTo===n.last?n.directionNav.removeClass(e).filter("."+i+"next").addClass(e).attr("tabindex","-1"):n.directionNav.removeClass(e).removeAttr("tabindex")}},pausePlay:{setup:function(){var e=$('<div class="'+i+'pauseplay"><a href="#"></a></div>');n.controlsContainer?(n.controlsContainer.append(e),n.pausePlay=$("."+i+"pauseplay a",n.controlsContainer)):(n.append(e),n.pausePlay=$("."+i+"pauseplay a",n)),f.pausePlay.update(n.vars.slideshow?i+"pause":i+"play"),n.pausePlay.bind(o,function(e){e.preventDefault(),""!==l&&l!==e.type||($(this).hasClass(i+"pause")?(n.manualPause=!0,n.manualPlay=!1,n.pause()):(n.manualPause=!1,n.manualPlay=!0,n.play())),""===l&&(l=e.type),f.setToClearWatchedEvent()})},update:function(e){"play"===e?n.pausePlay.removeClass(i+"pause").addClass(i+"play").html(n.vars.playText):n.pausePlay.removeClass(i+"play").addClass(i+"pause").html(n.vars.pauseText)}},touch:function(){function e(e){e.stopPropagation(),n.animating?e.preventDefault():(n.pause(),t._gesture.addPointer(e.pointerId),w=0,c=d?n.h:n.w,f=Number(new Date),l=v&&u&&n.animatingTo===n.last?0:v&&u?n.limit-(n.itemW+n.vars.itemMargin)*n.move*n.animatingTo:v&&n.currentSlide===n.last?n.limit:v?(n.itemW+n.vars.itemMargin)*n.move*n.currentSlide:u?(n.last-n.currentSlide+n.cloneOffset)*c:(n.currentSlide+n.cloneOffset)*c)}function a(e){e.stopPropagation();var a=e.target._slider;if(a){var n=-e.translationX,i=-e.translationY;if(w+=d?i:n,m=(a.vars.rtl?-1:1)*w,x=d?Math.abs(w)<Math.abs(-n):Math.abs(w)<Math.abs(-i),e.detail===e.MSGESTURE_FLAG_INERTIA)return void setImmediate(function(){t._gesture.stop()});(!x||Number(new Date)-f>500)&&(e.preventDefault(),!p&&a.transitions&&(a.vars.animationLoop||(m=w/(0===a.currentSlide&&w<0||a.currentSlide===a.last&&w>0?Math.abs(w)/c+2:1)),a.setProps(l+m,"setTouch")))}}function i(e){e.stopPropagation();var t=e.target._slider;if(t){if(t.animatingTo===t.currentSlide&&!x&&null!==m){var a=u?-m:m,n=a>0?t.getTarget("next"):t.getTarget("prev");t.canAdvance(n)&&(Number(new Date)-f<550&&Math.abs(a)>50||Math.abs(a)>c/2)?t.flexAnimate(n,t.vars.pauseOnAction):p||t.flexAnimate(t.currentSlide,t.vars.pauseOnAction,!0)}s=null,o=null,m=null,l=null,w=0}}var s,o,l,c,m,f,g,h,S,x=!1,y=0,b=0,w=0;r?(t.style.msTouchAction="none",t._gesture=new MSGesture,t._gesture.target=t,t.addEventListener("MSPointerDown",e,!1),t._slider=n,t.addEventListener("MSGestureChange",a,!1),t.addEventListener("MSGestureEnd",i,!1)):(g=function(e){n.animating?e.preventDefault():(window.navigator.msPointerEnabled||1===e.touches.length)&&(n.pause(),c=d?n.h:n.w,f=Number(new Date),y=e.touches[0].pageX,b=e.touches[0].pageY,l=v&&u&&n.animatingTo===n.last?0:v&&u?n.limit-(n.itemW+n.vars.itemMargin)*n.move*n.animatingTo:v&&n.currentSlide===n.last?n.limit:v?(n.itemW+n.vars.itemMargin)*n.move*n.currentSlide:u?(n.last-n.currentSlide+n.cloneOffset)*c:(n.currentSlide+n.cloneOffset)*c,s=d?b:y,o=d?y:b,t.addEventListener("touchmove",h,!1),t.addEventListener("touchend",S,!1))},h=function(e){y=e.touches[0].pageX,b=e.touches[0].pageY,m=d?s-b:(n.vars.rtl?-1:1)*(s-y),x=d?Math.abs(m)<Math.abs(y-o):Math.abs(m)<Math.abs(b-o);var t=500;(!x||Number(new Date)-f>500)&&(e.preventDefault(),!p&&n.transitions&&(n.vars.animationLoop||(m/=0===n.currentSlide&&m<0||n.currentSlide===n.last&&m>0?Math.abs(m)/c+2:1),n.setProps(l+m,"setTouch")))},S=function(e){if(t.removeEventListener("touchmove",h,!1),n.animatingTo===n.currentSlide&&!x&&null!==m){var a=u?-m:m,i=a>0?n.getTarget("next"):n.getTarget("prev");n.canAdvance(i)&&(Number(new Date)-f<550&&Math.abs(a)>50||Math.abs(a)>c/2)?n.flexAnimate(i,n.vars.pauseOnAction):p||n.flexAnimate(n.currentSlide,n.vars.pauseOnAction,!0)}t.removeEventListener("touchend",S,!1),s=null,o=null,m=null,l=null},t.addEventListener("touchstart",g,!1))},resize:function(){!n.animating&&n.is(":visible")&&(v||n.doMath(),p?f.smoothHeight():v?(n.slides.width(n.computedW),n.update(n.pagingCount),n.setProps()):d?(n.viewport.height(n.h),n.setProps(n.h,"setTotal")):(n.vars.smoothHeight&&f.smoothHeight(),n.newSlides.width(n.computedW),n.setProps(n.computedW,"setTotal")))},smoothHeight:function(e){if(!d||p){var t=p?n:n.viewport;e?t.animate({height:n.slides.eq(n.animatingTo).innerHeight()},e):t.innerHeight(n.slides.eq(n.animatingTo).innerHeight())}},sync:function(e){var t=$(n.vars.sync).data("flexslider"),a=n.animatingTo;switch(e){case"animate":t.flexAnimate(a,n.vars.pauseOnAction,!1,!0);break;case"play":t.playing||t.asNav||t.play();break;case"pause":t.pause();break}},uniqueID:function(e){return e.filter("[id]").add(e.find("[id]")).each(function(){var e=$(this);e.attr("id",e.attr("id")+"_clone")}),e},pauseInvisible:{visProp:null,init:function(){var e=f.pauseInvisible.getHiddenProp();if(e){var t=e.replace(/[H|h]idden/,"")+"visibilitychange";document.addEventListener(t,function(){f.pauseInvisible.isHidden()?n.startTimeout?clearTimeout(n.startTimeout):n.pause():n.started?n.play():n.vars.initDelay>0?setTimeout(n.play,n.vars.initDelay):n.play()})}},isHidden:function(){var e=f.pauseInvisible.getHiddenProp();return!!e&&document[e]},getHiddenProp:function(){var e=["webkit","moz","ms","o"];if("hidden"in document)return"hidden";for(var t=0;t<e.length;t++)if(e[t]+"Hidden"in document)return e[t]+"Hidden";return null}},setToClearWatchedEvent:function(){clearTimeout(c),c=setTimeout(function(){l=""},3e3)}},n.flexAnimate=function(e,t,a,r,o){if(n.vars.animationLoop||e===n.currentSlide||(n.direction=e>n.currentSlide?"next":"prev"),m&&1===n.pagingCount&&(n.direction=n.currentItem<e?"next":"prev"),!n.animating&&(n.canAdvance(e,o)||a)&&n.is(":visible")){if(m&&r){var l=$(n.vars.asNavFor).data("flexslider");if(n.atEnd=0===e||e===n.count-1,l.flexAnimate(e,!0,!1,!0,o),n.direction=n.currentItem<e?"next":"prev",l.direction=n.direction,Math.ceil((e+1)/n.visible)-1===n.currentSlide||0===e)return n.currentItem=e,n.slides.removeClass(i+"active-slide").eq(e).addClass(i+"active-slide"),!1;n.currentItem=e,n.slides.removeClass(i+"active-slide").eq(e).addClass(i+"active-slide"),e=Math.floor(e/n.visible)}if(n.animating=!0,n.animatingTo=e,t&&n.pause(),n.vars.before(n),n.syncExists&&!o&&f.sync("animate"),n.vars.controlNav&&f.controlNav.active(),v||n.slides.removeClass(i+"active-slide").eq(e).addClass(i+"active-slide"),n.atEnd=0===e||e===n.last,n.vars.directionNav&&f.directionNav.update(),e===n.last&&(n.vars.end(n),n.vars.animationLoop||n.pause()),p)s?(n.slides.eq(n.currentSlide).css({opacity:0,zIndex:1}),n.slides.eq(e).css({opacity:1,zIndex:2}),n.wrapup(c)):(n.slides.eq(n.currentSlide).css({zIndex:1}).animate({opacity:0},n.vars.animationSpeed,n.vars.easing),n.slides.eq(e).css({zIndex:2}).animate({opacity:1},n.vars.animationSpeed,n.vars.easing,n.wrapup));else{var c=d?n.slides.filter(":first").height():n.computedW,g,h,S;v?(g=n.vars.itemMargin,S=(n.itemW+g)*n.move*n.animatingTo,h=S>n.limit&&1!==n.visible?n.limit:S):h=0===n.currentSlide&&e===n.count-1&&n.vars.animationLoop&&"next"!==n.direction?u?(n.count+n.cloneOffset)*c:0:n.currentSlide===n.last&&0===e&&n.vars.animationLoop&&"prev"!==n.direction?u?0:(n.count+1)*c:u?(n.count-1-e+n.cloneOffset)*c:(e+n.cloneOffset)*c,n.setProps(h,"",n.vars.animationSpeed),n.transitions?(n.vars.animationLoop&&n.atEnd||(n.animating=!1,n.currentSlide=n.animatingTo),n.container.unbind("webkitTransitionEnd transitionend"),n.container.bind("webkitTransitionEnd transitionend",function(){clearTimeout(n.ensureAnimationEnd),n.wrapup(c)}),clearTimeout(n.ensureAnimationEnd),n.ensureAnimationEnd=setTimeout(function(){n.wrapup(c)},n.vars.animationSpeed+100)):n.container.animate(n.args,n.vars.animationSpeed,n.vars.easing,function(){n.wrapup(c)})}n.vars.smoothHeight&&f.smoothHeight(n.vars.animationSpeed)}},n.wrapup=function(e){p||v||(0===n.currentSlide&&n.animatingTo===n.last&&n.vars.animationLoop?n.setProps(e,"jumpEnd"):n.currentSlide===n.last&&0===n.animatingTo&&n.vars.animationLoop&&n.setProps(e,"jumpStart")),n.animating=!1,n.currentSlide=n.animatingTo,n.vars.after(n)},n.animateSlides=function(){!n.animating&&e&&n.flexAnimate(n.getTarget("next"))},n.pause=function(){clearInterval(n.animatedSlides),n.animatedSlides=null,n.playing=!1,n.vars.pausePlay&&f.pausePlay.update("play"),n.syncExists&&f.sync("pause")},n.play=function(){n.playing&&clearInterval(n.animatedSlides),n.animatedSlides=n.animatedSlides||setInterval(n.animateSlides,n.vars.slideshowSpeed),n.started=n.playing=!0,n.vars.pausePlay&&f.pausePlay.update("pause"),n.syncExists&&f.sync("play")},n.stop=function(){n.pause(),n.stopped=!0},n.canAdvance=function(e,t){var a=m?n.pagingCount-1:n.last;return!!t||(!(!m||n.currentItem!==n.count-1||0!==e||"prev"!==n.direction)||(!m||0!==n.currentItem||e!==n.pagingCount-1||"next"===n.direction)&&(!(e===n.currentSlide&&!m)&&(!!n.vars.animationLoop||(!n.atEnd||0!==n.currentSlide||e!==a||"next"===n.direction)&&(!n.atEnd||n.currentSlide!==a||0!==e||"next"!==n.direction))))},n.getTarget=function(e){return n.direction=e,"next"===e?n.currentSlide===n.last?0:n.currentSlide+1:0===n.currentSlide?n.last:n.currentSlide-1},n.setProps=function(e,t,a){var i=function(){var a=e||(n.itemW+n.vars.itemMargin)*n.move*n.animatingTo;return function(){if(v)return"setTouch"===t?e:u&&n.animatingTo===n.last?0:u?n.limit-(n.itemW+n.vars.itemMargin)*n.move*n.animatingTo:n.animatingTo===n.last?n.limit:a;switch(t){case"setTotal":return u?(n.count-1-n.currentSlide+n.cloneOffset)*e:(n.currentSlide+n.cloneOffset)*e;case"setTouch":return e;case"jumpEnd":return u?e:n.count*e;case"jumpStart":return u?n.count*e:e;default:return e}}()*(n.vars.rtl?1:-1)+"px"}();n.transitions&&(i=n.isFirefox?d?"translate3d(0,"+i+",0)":"translate3d("+parseInt(i)+"px,0,0)":d?"translate3d(0,"+i+",0)":"translate3d("+(n.vars.rtl?-1:1)*parseInt(i)+"px,0,0)",a=void 0!==a?a/1e3+"s":"0s",n.container.css("-"+n.pfx+"-transition-duration",a),n.container.css("transition-duration",a)),n.args[n.prop]=i,(n.transitions||void 0===a)&&n.container.css(n.args),n.container.css("transform",i)},n.setup=function(e){if(p)n.vars.rtl?n.slides.css({width:"100%",float:"right",marginLeft:"-100%",position:"relative"}):n.slides.css({width:"100%",float:"left",marginRight:"-100%",position:"relative"}),"init"===e&&(s?n.slides.css({opacity:0,display:"block",webkitTransition:"opacity "+n.vars.animationSpeed/1e3+"s ease",zIndex:1}).eq(n.currentSlide).css({opacity:1,zIndex:2}):0==n.vars.fadeFirstSlide?n.slides.css({opacity:0,display:"block",zIndex:1}).eq(n.currentSlide).css({zIndex:2}).css({opacity:1}):n.slides.css({opacity:0,display:"block",zIndex:1}).eq(n.currentSlide).css({zIndex:2}).animate({opacity:1},n.vars.animationSpeed,n.vars.easing)),n.vars.smoothHeight&&f.smoothHeight();else{var t,a;"init"===e&&(n.viewport=$('<div class="'+i+'viewport"></div>').css({overflow:"hidden",position:"relative"}).appendTo(n).append(n.container),n.cloneCount=0,n.cloneOffset=0,u&&(a=$.makeArray(n.slides).reverse(),n.slides=$(a),n.container.empty().append(n.slides))),n.vars.animationLoop&&!v&&(n.cloneCount=2,n.cloneOffset=1,"init"!==e&&n.container.find(".clone").remove(),n.container.append(f.uniqueID(n.slides.first().clone().addClass("clone")).attr("aria-hidden","true")).prepend(f.uniqueID(n.slides.last().clone().addClass("clone")).attr("aria-hidden","true"))),n.newSlides=$(n.vars.selector,n),t=u?n.count-1-n.currentSlide+n.cloneOffset:n.currentSlide+n.cloneOffset,d&&!v?(n.container.height(200*(n.count+n.cloneCount)+"%").css("position","absolute").width("100%"),setTimeout(function(){n.newSlides.css({display:"block"}),n.doMath(),n.viewport.height(n.h),n.setProps(t*n.h,"init")},"init"===e?100:0)):(n.container.width(200*(n.count+n.cloneCount)+"%"),n.setProps(t*n.computedW,"init"),setTimeout(function(){n.doMath(),n.vars.rtl&&n.isFirefox?n.newSlides.css({width:n.computedW,marginRight:n.computedM,float:"right",display:"block"}):n.newSlides.css({width:n.computedW,marginRight:n.computedM,float:"left",display:"block"}),n.vars.smoothHeight&&f.smoothHeight()},"init"===e?100:0))}v||n.slides.removeClass(i+"active-slide").eq(n.currentSlide).addClass(i+"active-slide"),n.vars.init(n)},n.doMath=function(){var e=n.slides.first(),t=n.vars.itemMargin,a=n.vars.minItems,i=n.vars.maxItems;n.w=void 0===n.viewport?n.width():n.viewport.width(),n.isFirefox&&(n.w=n.width()),n.h=e.height(),n.boxPadding=e.outerWidth()-e.width(),v?(n.itemT=n.vars.itemWidth+t,n.itemM=t,n.minW=a?a*n.itemT:n.w,n.maxW=i?i*n.itemT-t:n.w,n.itemW=n.minW>n.w?(n.w-t*(a-1))/a:n.maxW<n.w?(n.w-t*(i-1))/i:n.vars.itemWidth>n.w?n.w:n.vars.itemWidth,n.visible=Math.floor(n.w/n.itemW),n.move=n.vars.move>0&&n.vars.move<n.visible?n.vars.move:n.visible,n.pagingCount=Math.ceil((n.count-n.visible)/n.move+1),n.last=n.pagingCount-1,n.limit=1===n.pagingCount?0:n.vars.itemWidth>n.w?n.itemW*(n.count-1)+t*(n.count-1):(n.itemW+t)*n.count-n.w-t):(n.itemW=n.w,n.itemM=t,n.pagingCount=n.count,n.last=n.count-1),n.computedW=n.itemW-n.boxPadding,n.computedM=n.itemM},n.update=function(e,t){n.doMath(),v||(e<n.currentSlide?n.currentSlide+=1:e<=n.currentSlide&&0!==e&&(n.currentSlide-=1),n.animatingTo=n.currentSlide),n.vars.controlNav&&!n.manualControls&&("add"===t&&!v||n.pagingCount>n.controlNav.length?f.controlNav.update("add"):("remove"===t&&!v||n.pagingCount<n.controlNav.length)&&(v&&n.currentSlide>n.last&&(n.currentSlide-=1,n.animatingTo-=1),f.controlNav.update("remove",n.last))),n.vars.directionNav&&f.directionNav.update()},n.addSlide=function(e,t){var a=$(e);n.count+=1,n.last=n.count-1,d&&u?void 0!==t?n.slides.eq(n.count-t).after(a):n.container.prepend(a):void 0!==t?n.slides.eq(t).before(a):n.container.append(a),n.update(t,"add"),n.slides=$(n.vars.selector+":not(.clone)",n),n.setup(),n.vars.added(n)},n.removeSlide=function(e){var t=isNaN(e)?n.slides.index($(e)):e;n.count-=1,n.last=n.count-1,isNaN(e)?$(e,n.slides).remove():d&&u?n.slides.eq(n.last).remove():n.slides.eq(e).remove(),n.doMath(),n.update(t,"remove"),n.slides=$(n.vars.selector+":not(.clone)",n),n.setup(),n.vars.removed(n)},f.init()},$(window).blur(function(t){e=!1}).focus(function(t){e=!0}),$.flexslider.defaults={namespace:"flex-",selector:".slides > li",animation:"fade",easing:"swing",direction:"horizontal",reverse:!1,animationLoop:!0,smoothHeight:!1,startAt:0,slideshow:!0,slideshowSpeed:7e3,animationSpeed:600,initDelay:0,randomize:!1,fadeFirstSlide:!0,thumbCaptions:!1,pauseOnAction:!0,pauseOnHover:!1,pauseInvisible:!0,useCSS:!0,touch:!0,video:!1,controlNav:!0,directionNav:!0,prevText:"Previous",nextText:"Next",keyboard:!0,multipleKeyboard:!1,mousewheel:!1,pausePlay:!1,pauseText:"Pause",playText:"Play",controlsContainer:"",manualControls:"",customDirectionNav:"",sync:"",asNavFor:"",itemWidth:0,itemMargin:0,minItems:1,maxItems:0,move:0,allowOneSlide:!0,isFirefox:!1,start:function(){},before:function(){},after:function(){},end:function(){},added:function(){},removed:function(){},init:function(){},rtl:!1},$.fn.flexslider=function(e){if(void 0===e&&(e={}),"object"==typeof e)return this.each(function(){var t=$(this),a=e.selector?e.selector:".slides > li",n=t.find(a);1===n.length&&!1===e.allowOneSlide||0===n.length?(n.fadeIn(400),e.start&&e.start(t)):void 0===t.data("flexslider")&&new $.flexslider(this,e)});var t=$(this).data("flexslider");switch(e){case"play":t.play();break;case"pause":t.pause();break;case"stop":t.stop();break;case"next":t.flexAnimate(t.getTarget("next"),!0);break;case"prev":case"previous":t.flexAnimate(t.getTarget("prev"),!0);break;default:"number"==typeof e&&t.flexAnimate(e,!0)}}}(jQuery);
/**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
!function(a,b,c,d){function e(b,c){this.settings=null,this.options=a.extend({},e.Defaults,c),this.$element=a(b),this._handlers={},this._plugins={},this._supress={},this._current=null,this._speed=null,this._coordinates=[],this._breakpoint=null,this._width=null,this._items=[],this._clones=[],this._mergers=[],this._widths=[],this._invalidated={},this._pipe=[],this._drag={time:null,target:null,pointer:null,stage:{start:null,current:null},direction:null},this._states={current:{},tags:{initializing:["busy"],animating:["busy"],dragging:["interacting"]}},a.each(["onResize","onThrottledResize"],a.proxy(function(b,c){this._handlers[c]=a.proxy(this[c],this)},this)),a.each(e.Plugins,a.proxy(function(a,b){this._plugins[a.charAt(0).toLowerCase()+a.slice(1)]=new b(this)},this)),a.each(e.Workers,a.proxy(function(b,c){this._pipe.push({filter:c.filter,run:a.proxy(c.run,this)})},this)),this.setup(),this.initialize()}e.Defaults={items:3,loop:!1,center:!1,rewind:!1,checkVisibility:!0,mouseDrag:!0,touchDrag:!0,pullDrag:!0,freeDrag:!1,margin:0,stagePadding:0,merge:!1,mergeFit:!0,autoWidth:!1,startPosition:0,rtl:!1,smartSpeed:250,fluidSpeed:!1,dragEndSpeed:!1,responsive:{},responsiveRefreshRate:200,responsiveBaseElement:b,fallbackEasing:"swing",slideTransition:"",info:!1,nestedItemSelector:!1,itemElement:"div",stageElement:"div",refreshClass:"owl-refresh",loadedClass:"owl-loaded",loadingClass:"owl-loading",rtlClass:"owl-rtl",responsiveClass:"owl-responsive",dragClass:"owl-drag",itemClass:"owl-item",stageClass:"owl-stage",stageOuterClass:"owl-stage-outer",grabClass:"owl-grab"},e.Width={Default:"default",Inner:"inner",Outer:"outer"},e.Type={Event:"event",State:"state"},e.Plugins={},e.Workers=[{filter:["width","settings"],run:function(){this._width=this.$element.width()}},{filter:["width","items","settings"],run:function(a){a.current=this._items&&this._items[this.relative(this._current)]}},{filter:["items","settings"],run:function(){this.$stage.children(".cloned").remove()}},{filter:["width","items","settings"],run:function(a){var b=this.settings.margin||"",c=!this.settings.autoWidth,d=this.settings.rtl,e={width:"auto","margin-left":d?b:"","margin-right":d?"":b};!c&&this.$stage.children().css(e),a.css=e}},{filter:["width","items","settings"],run:function(a){var b=(this.width()/this.settings.items).toFixed(3)-this.settings.margin,c=null,d=this._items.length,e=!this.settings.autoWidth,f=[];for(a.items={merge:!1,width:b};d--;)c=this._mergers[d],c=this.settings.mergeFit&&Math.min(c,this.settings.items)||c,a.items.merge=c>1||a.items.merge,f[d]=e?b*c:this._items[d].width();this._widths=f}},{filter:["items","settings"],run:function(){var b=[],c=this._items,d=this.settings,e=Math.max(2*d.items,4),f=2*Math.ceil(c.length/2),g=d.loop&&c.length?d.rewind?e:Math.max(e,f):0,h="",i="";for(g/=2;g>0;)b.push(this.normalize(b.length/2,!0)),h+=c[b[b.length-1]][0].outerHTML,b.push(this.normalize(c.length-1-(b.length-1)/2,!0)),i=c[b[b.length-1]][0].outerHTML+i,g-=1;this._clones=b,a(h).addClass("cloned").appendTo(this.$stage),a(i).addClass("cloned").prependTo(this.$stage)}},{filter:["width","items","settings"],run:function(){for(var a=this.settings.rtl?1:-1,b=this._clones.length+this._items.length,c=-1,d=0,e=0,f=[];++c<b;)d=f[c-1]||0,e=this._widths[this.relative(c)]+this.settings.margin,f.push(d+e*a);this._coordinates=f}},{filter:["width","items","settings"],run:function(){var a=this.settings.stagePadding,b=this._coordinates,c={width:Math.ceil(Math.abs(b[b.length-1]))+2*a,"padding-left":a||"","padding-right":a||""};this.$stage.css(c)}},{filter:["width","items","settings"],run:function(a){var b=this._coordinates.length,c=!this.settings.autoWidth,d=this.$stage.children();if(c&&a.items.merge)for(;b--;)a.css.width=this._widths[this.relative(b)],d.eq(b).css(a.css);else c&&(a.css.width=a.items.width,d.css(a.css))}},{filter:["items"],run:function(){this._coordinates.length<1&&this.$stage.removeAttr("style")}},{filter:["width","items","settings"],run:function(a){a.current=a.current?this.$stage.children().index(a.current):0,a.current=Math.max(this.minimum(),Math.min(this.maximum(),a.current)),this.reset(a.current)}},{filter:["position"],run:function(){this.animate(this.coordinates(this._current))}},{filter:["width","position","items","settings"],run:function(){var a,b,c,d,e=this.settings.rtl?1:-1,f=2*this.settings.stagePadding,g=this.coordinates(this.current())+f,h=g+this.width()*e,i=[];for(c=0,d=this._coordinates.length;c<d;c++)a=this._coordinates[c-1]||0,b=Math.abs(this._coordinates[c])+f*e,(this.op(a,"<=",g)&&this.op(a,">",h)||this.op(b,"<",g)&&this.op(b,">",h))&&i.push(c);this.$stage.children(".active").removeClass("active"),this.$stage.children(":eq("+i.join("), :eq(")+")").addClass("active"),this.$stage.children(".center").removeClass("center"),this.settings.center&&this.$stage.children().eq(this.current()).addClass("center")}}],e.prototype.initializeStage=function(){this.$stage=this.$element.find("."+this.settings.stageClass),this.$stage.length||(this.$element.addClass(this.options.loadingClass),this.$stage=a("<"+this.settings.stageElement+">",{class:this.settings.stageClass}).wrap(a("<div/>",{class:this.settings.stageOuterClass})),this.$element.append(this.$stage.parent()))},e.prototype.initializeItems=function(){var b=this.$element.find(".owl-item");if(b.length)return this._items=b.get().map(function(b){return a(b)}),this._mergers=this._items.map(function(){return 1}),void this.refresh();this.replace(this.$element.children().not(this.$stage.parent())),this.isVisible()?this.refresh():this.invalidate("width"),this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass)},e.prototype.initialize=function(){if(this.enter("initializing"),this.trigger("initialize"),this.$element.toggleClass(this.settings.rtlClass,this.settings.rtl),this.settings.autoWidth&&!this.is("pre-loading")){var a,b,c;a=this.$element.find("img"),b=this.settings.nestedItemSelector?"."+this.settings.nestedItemSelector:d,c=this.$element.children(b).width(),a.length&&c<=0&&this.preloadAutoWidthImages(a)}this.initializeStage(),this.initializeItems(),this.registerEventHandlers(),this.leave("initializing"),this.trigger("initialized")},e.prototype.isVisible=function(){return!this.settings.checkVisibility||this.$element.is(":visible")},e.prototype.setup=function(){var b=this.viewport(),c=this.options.responsive,d=-1,e=null;c?(a.each(c,function(a){a<=b&&a>d&&(d=Number(a))}),e=a.extend({},this.options,c[d]),"function"==typeof e.stagePadding&&(e.stagePadding=e.stagePadding()),delete e.responsive,e.responsiveClass&&this.$element.attr("class",this.$element.attr("class").replace(new RegExp("("+this.options.responsiveClass+"-)\\S+\\s","g"),"$1"+d))):e=a.extend({},this.options),this.trigger("change",{property:{name:"settings",value:e}}),this._breakpoint=d,this.settings=e,this.invalidate("settings"),this.trigger("changed",{property:{name:"settings",value:this.settings}})},e.prototype.optionsLogic=function(){this.settings.autoWidth&&(this.settings.stagePadding=!1,this.settings.merge=!1)},e.prototype.prepare=function(b){var c=this.trigger("prepare",{content:b});return c.data||(c.data=a("<"+this.settings.itemElement+"/>").addClass(this.options.itemClass).append(b)),this.trigger("prepared",{content:c.data}),c.data},e.prototype.update=function(){for(var b=0,c=this._pipe.length,d=a.proxy(function(a){return this[a]},this._invalidated),e={};b<c;)(this._invalidated.all||a.grep(this._pipe[b].filter,d).length>0)&&this._pipe[b].run(e),b++;this._invalidated={},!this.is("valid")&&this.enter("valid")},e.prototype.width=function(a){switch(a=a||e.Width.Default){case e.Width.Inner:case e.Width.Outer:return this._width;default:return this._width-2*this.settings.stagePadding+this.settings.margin}},e.prototype.refresh=function(){this.enter("refreshing"),this.trigger("refresh"),this.setup(),this.optionsLogic(),this.$element.addClass(this.options.refreshClass),this.update(),this.$element.removeClass(this.options.refreshClass),this.leave("refreshing"),this.trigger("refreshed")},e.prototype.onThrottledResize=function(){b.clearTimeout(this.resizeTimer),this.resizeTimer=b.setTimeout(this._handlers.onResize,this.settings.responsiveRefreshRate)},e.prototype.onResize=function(){return!!this._items.length&&(this._width!==this.$element.width()&&(!!this.isVisible()&&(this.enter("resizing"),this.trigger("resize").isDefaultPrevented()?(this.leave("resizing"),!1):(this.invalidate("width"),this.refresh(),this.leave("resizing"),void this.trigger("resized")))))},e.prototype.registerEventHandlers=function(){a.support.transition&&this.$stage.on(a.support.transition.end+".owl.core",a.proxy(this.onTransitionEnd,this)),!1!==this.settings.responsive&&this.on(b,"resize",this._handlers.onThrottledResize),this.settings.mouseDrag&&(this.$element.addClass(this.options.dragClass),this.$stage.on("mousedown.owl.core",a.proxy(this.onDragStart,this)),this.$stage.on("dragstart.owl.core selectstart.owl.core",function(){return!1})),this.settings.touchDrag&&(this.$stage.on("touchstart.owl.core",a.proxy(this.onDragStart,this)),this.$stage.on("touchcancel.owl.core",a.proxy(this.onDragEnd,this)))},e.prototype.onDragStart=function(b){var d=null;3!==b.which&&(a.support.transform?(d=this.$stage.css("transform").replace(/.*\(|\)| /g,"").split(","),d={x:d[16===d.length?12:4],y:d[16===d.length?13:5]}):(d=this.$stage.position(),d={x:this.settings.rtl?d.left+this.$stage.width()-this.width()+this.settings.margin:d.left,y:d.top}),this.is("animating")&&(a.support.transform?this.animate(d.x):this.$stage.stop(),this.invalidate("position")),this.$element.toggleClass(this.options.grabClass,"mousedown"===b.type),this.speed(0),this._drag.time=(new Date).getTime(),this._drag.target=a(b.target),this._drag.stage.start=d,this._drag.stage.current=d,this._drag.pointer=this.pointer(b),a(c).on("mouseup.owl.core touchend.owl.core",a.proxy(this.onDragEnd,this)),a(c).one("mousemove.owl.core touchmove.owl.core",a.proxy(function(b){var d=this.difference(this._drag.pointer,this.pointer(b));a(c).on("mousemove.owl.core touchmove.owl.core",a.proxy(this.onDragMove,this)),Math.abs(d.x)<Math.abs(d.y)&&this.is("valid")||(b.preventDefault(),this.enter("dragging"),this.trigger("drag"))},this)))},e.prototype.onDragMove=function(a){var b=null,c=null,d=null,e=this.difference(this._drag.pointer,this.pointer(a)),f=this.difference(this._drag.stage.start,e);this.is("dragging")&&(a.preventDefault(),this.settings.loop?(b=this.coordinates(this.minimum()),c=this.coordinates(this.maximum()+1)-b,f.x=((f.x-b)%c+c)%c+b):(b=this.settings.rtl?this.coordinates(this.maximum()):this.coordinates(this.minimum()),c=this.settings.rtl?this.coordinates(this.minimum()):this.coordinates(this.maximum()),d=this.settings.pullDrag?-1*e.x/5:0,f.x=Math.max(Math.min(f.x,b+d),c+d)),this._drag.stage.current=f,this.animate(f.x))},e.prototype.onDragEnd=function(b){var d=this.difference(this._drag.pointer,this.pointer(b)),e=this._drag.stage.current,f=d.x>0^this.settings.rtl?"left":"right";a(c).off(".owl.core"),this.$element.removeClass(this.options.grabClass),(0!==d.x&&this.is("dragging")||!this.is("valid"))&&(this.speed(this.settings.dragEndSpeed||this.settings.smartSpeed),this.current(this.closest(e.x,0!==d.x?f:this._drag.direction)),this.invalidate("position"),this.update(),this._drag.direction=f,(Math.abs(d.x)>3||(new Date).getTime()-this._drag.time>300)&&this._drag.target.one("click.owl.core",function(){return!1})),this.is("dragging")&&(this.leave("dragging"),this.trigger("dragged"))},e.prototype.closest=function(b,c){var e=-1,f=30,g=this.width(),h=this.coordinates();return this.settings.freeDrag||a.each(h,a.proxy(function(a,i){return"left"===c&&b>i-f&&b<i+f?e=a:"right"===c&&b>i-g-f&&b<i-g+f?e=a+1:this.op(b,"<",i)&&this.op(b,">",h[a+1]!==d?h[a+1]:i-g)&&(e="left"===c?a+1:a),-1===e},this)),this.settings.loop||(this.op(b,">",h[this.minimum()])?e=b=this.minimum():this.op(b,"<",h[this.maximum()])&&(e=b=this.maximum())),e},e.prototype.animate=function(b){var c=this.speed()>0;this.is("animating")&&this.onTransitionEnd(),c&&(this.enter("animating"),this.trigger("translate")),a.support.transform3d&&a.support.transition?this.$stage.css({transform:"translate3d("+b+"px,0px,0px)",transition:this.speed()/1e3+"s"+(this.settings.slideTransition?" "+this.settings.slideTransition:"")}):c?this.$stage.animate({left:b+"px"},this.speed(),this.settings.fallbackEasing,a.proxy(this.onTransitionEnd,this)):this.$stage.css({left:b+"px"})},e.prototype.is=function(a){return this._states.current[a]&&this._states.current[a]>0},e.prototype.current=function(a){if(a===d)return this._current;if(0===this._items.length)return d;if(a=this.normalize(a),this._current!==a){var b=this.trigger("change",{property:{name:"position",value:a}});b.data!==d&&(a=this.normalize(b.data)),this._current=a,this.invalidate("position"),this.trigger("changed",{property:{name:"position",value:this._current}})}return this._current},e.prototype.invalidate=function(b){return"string"===a.type(b)&&(this._invalidated[b]=!0,this.is("valid")&&this.leave("valid")),a.map(this._invalidated,function(a,b){return b})},e.prototype.reset=function(a){(a=this.normalize(a))!==d&&(this._speed=0,this._current=a,this.suppress(["translate","translated"]),this.animate(this.coordinates(a)),this.release(["translate","translated"]))},e.prototype.normalize=function(a,b){var c=this._items.length,e=b?0:this._clones.length;return!this.isNumeric(a)||c<1?a=d:(a<0||a>=c+e)&&(a=((a-e/2)%c+c)%c+e/2),a},e.prototype.relative=function(a){return a-=this._clones.length/2,this.normalize(a,!0)},e.prototype.maximum=function(a){var b,c,d,e=this.settings,f=this._coordinates.length;if(e.loop)f=this._clones.length/2+this._items.length-1;else if(e.autoWidth||e.merge){if(b=this._items.length)for(c=this._items[--b].width(),d=this.$element.width();b--&&!((c+=this._items[b].width()+this.settings.margin)>d););f=b+1}else f=e.center?this._items.length-1:this._items.length-e.items;return a&&(f-=this._clones.length/2),Math.max(f,0)},e.prototype.minimum=function(a){return a?0:this._clones.length/2},e.prototype.items=function(a){return a===d?this._items.slice():(a=this.normalize(a,!0),this._items[a])},e.prototype.mergers=function(a){return a===d?this._mergers.slice():(a=this.normalize(a,!0),this._mergers[a])},e.prototype.clones=function(b){var c=this._clones.length/2,e=c+this._items.length,f=function(a){return a%2==0?e+a/2:c-(a+1)/2};return b===d?a.map(this._clones,function(a,b){return f(b)}):a.map(this._clones,function(a,c){return a===b?f(c):null})},e.prototype.speed=function(a){return a!==d&&(this._speed=a),this._speed},e.prototype.coordinates=function(b){var c,e=1,f=b-1;return b===d?a.map(this._coordinates,a.proxy(function(a,b){return this.coordinates(b)},this)):(this.settings.center?(this.settings.rtl&&(e=-1,f=b+1),c=this._coordinates[b],c+=(this.width()-c+(this._coordinates[f]||0))/2*e):c=this._coordinates[f]||0,c=Math.ceil(c))},e.prototype.duration=function(a,b,c){return 0===c?0:Math.min(Math.max(Math.abs(b-a),1),6)*Math.abs(c||this.settings.smartSpeed)},e.prototype.to=function(a,b){var c=this.current(),d=null,e=a-this.relative(c),f=(e>0)-(e<0),g=this._items.length,h=this.minimum(),i=this.maximum();this.settings.loop?(!this.settings.rewind&&Math.abs(e)>g/2&&(e+=-1*f*g),a=c+e,(d=((a-h)%g+g)%g+h)!==a&&d-e<=i&&d-e>0&&(c=d-e,a=d,this.reset(c))):this.settings.rewind?(i+=1,a=(a%i+i)%i):a=Math.max(h,Math.min(i,a)),this.speed(this.duration(c,a,b)),this.current(a),this.isVisible()&&this.update()},e.prototype.next=function(a){a=a||!1,this.to(this.relative(this.current())+1,a)},e.prototype.prev=function(a){a=a||!1,this.to(this.relative(this.current())-1,a)},e.prototype.onTransitionEnd=function(a){if(a!==d&&(a.stopPropagation(),(a.target||a.srcElement||a.originalTarget)!==this.$stage.get(0)))return!1;this.leave("animating"),this.trigger("translated")},e.prototype.viewport=function(){var d;return this.options.responsiveBaseElement!==b?d=a(this.options.responsiveBaseElement).width():b.innerWidth?d=b.innerWidth:c.documentElement&&c.documentElement.clientWidth?d=c.documentElement.clientWidth:console.warn("Can not detect viewport width."),d},e.prototype.replace=function(b){this.$stage.empty(),this._items=[],b&&(b=b instanceof jQuery?b:a(b)),this.settings.nestedItemSelector&&(b=b.find("."+this.settings.nestedItemSelector)),b.filter(function(){return 1===this.nodeType}).each(a.proxy(function(a,b){b=this.prepare(b),this.$stage.append(b),this._items.push(b),this._mergers.push(1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)},this)),this.reset(this.isNumeric(this.settings.startPosition)?this.settings.startPosition:0),this.invalidate("items")},e.prototype.add=function(b,c){var e=this.relative(this._current);c=c===d?this._items.length:this.normalize(c,!0),b=b instanceof jQuery?b:a(b),this.trigger("add",{content:b,position:c}),b=this.prepare(b),0===this._items.length||c===this._items.length?(0===this._items.length&&this.$stage.append(b),0!==this._items.length&&this._items[c-1].after(b),this._items.push(b),this._mergers.push(1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)):(this._items[c].before(b),this._items.splice(c,0,b),this._mergers.splice(c,0,1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)),this._items[e]&&this.reset(this._items[e].index()),this.invalidate("items"),this.trigger("added",{content:b,position:c})},e.prototype.remove=function(a){(a=this.normalize(a,!0))!==d&&(this.trigger("remove",{content:this._items[a],position:a}),this._items[a].remove(),this._items.splice(a,1),this._mergers.splice(a,1),this.invalidate("items"),this.trigger("removed",{content:null,position:a}))},e.prototype.preloadAutoWidthImages=function(b){b.each(a.proxy(function(b,c){this.enter("pre-loading"),c=a(c),a(new Image).one("load",a.proxy(function(a){c.attr("src",a.target.src),c.css("opacity",1),this.leave("pre-loading"),!this.is("pre-loading")&&!this.is("initializing")&&this.refresh()},this)).attr("src",c.attr("src")||c.attr("data-src")||c.attr("data-src-retina"))},this))},e.prototype.destroy=function(){this.$element.off(".owl.core"),this.$stage.off(".owl.core"),a(c).off(".owl.core"),!1!==this.settings.responsive&&(b.clearTimeout(this.resizeTimer),this.off(b,"resize",this._handlers.onThrottledResize));for(var d in this._plugins)this._plugins[d].destroy();this.$stage.children(".cloned").remove(),this.$stage.unwrap(),this.$stage.children().contents().unwrap(),this.$stage.children().unwrap(),this.$stage.remove(),this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class",this.$element.attr("class").replace(new RegExp(this.options.responsiveClass+"-\\S+\\s","g"),"")).removeData("owl.carousel")},e.prototype.op=function(a,b,c){var d=this.settings.rtl;switch(b){case"<":return d?a>c:a<c;case">":return d?a<c:a>c;case">=":return d?a<=c:a>=c;case"<=":return d?a>=c:a<=c}},e.prototype.on=function(a,b,c,d){a.addEventListener?a.addEventListener(b,c,d):a.attachEvent&&a.attachEvent("on"+b,c)},e.prototype.off=function(a,b,c,d){a.removeEventListener?a.removeEventListener(b,c,d):a.detachEvent&&a.detachEvent("on"+b,c)},e.prototype.trigger=function(b,c,d,f,g){var h={item:{count:this._items.length,index:this.current()}},i=a.camelCase(a.grep(["on",b,d],function(a){return a}).join("-").toLowerCase()),j=a.Event([b,"owl",d||"carousel"].join(".").toLowerCase(),a.extend({relatedTarget:this},h,c));return this._supress[b]||(a.each(this._plugins,function(a,b){b.onTrigger&&b.onTrigger(j)}),this.register({type:e.Type.Event,name:b}),this.$element.trigger(j),this.settings&&"function"==typeof this.settings[i]&&this.settings[i].call(this,j)),j},e.prototype.enter=function(b){a.each([b].concat(this._states.tags[b]||[]),a.proxy(function(a,b){this._states.current[b]===d&&(this._states.current[b]=0),this._states.current[b]++},this))},e.prototype.leave=function(b){a.each([b].concat(this._states.tags[b]||[]),a.proxy(function(a,b){this._states.current[b]--},this))},e.prototype.register=function(b){if(b.type===e.Type.Event){if(a.event.special[b.name]||(a.event.special[b.name]={}),!a.event.special[b.name].owl){var c=a.event.special[b.name]._default;a.event.special[b.name]._default=function(a){return!c||!c.apply||a.namespace&&-1!==a.namespace.indexOf("owl")?a.namespace&&a.namespace.indexOf("owl")>-1:c.apply(this,arguments)},a.event.special[b.name].owl=!0}}else b.type===e.Type.State&&(this._states.tags[b.name]?this._states.tags[b.name]=this._states.tags[b.name].concat(b.tags):this._states.tags[b.name]=b.tags,this._states.tags[b.name]=a.grep(this._states.tags[b.name],a.proxy(function(c,d){return a.inArray(c,this._states.tags[b.name])===d},this)))},e.prototype.suppress=function(b){a.each(b,a.proxy(function(a,b){this._supress[b]=!0},this))},e.prototype.release=function(b){a.each(b,a.proxy(function(a,b){delete this._supress[b]},this))},e.prototype.pointer=function(a){var c={x:null,y:null};return a=a.originalEvent||a||b.event,a=a.touches&&a.touches.length?a.touches[0]:a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:a,a.pageX?(c.x=a.pageX,c.y=a.pageY):(c.x=a.clientX,c.y=a.clientY),c},e.prototype.isNumeric=function(a){return!isNaN(parseFloat(a))},e.prototype.difference=function(a,b){return{x:a.x-b.x,y:a.y-b.y}},a.fn.owlCarousel=function(b){var c=Array.prototype.slice.call(arguments,1);return this.each(function(){var d=a(this),f=d.data("owl.carousel");f||(f=new e(this,"object"==typeof b&&b),d.data("owl.carousel",f),a.each(["next","prev","to","destroy","refresh","replace","add","remove"],function(b,c){f.register({type:e.Type.Event,name:c}),f.$element.on(c+".owl.carousel.core",a.proxy(function(a){a.namespace&&a.relatedTarget!==this&&(this.suppress([c]),f[c].apply(this,[].slice.call(arguments,1)),this.release([c]))},f))})),"string"==typeof b&&"_"!==b.charAt(0)&&f[b].apply(f,c)})},a.fn.owlCarousel.Constructor=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._interval=null,this._visible=null,this._handlers={"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoRefresh&&this.watch()},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers)};e.Defaults={autoRefresh:!0,autoRefreshInterval:500},e.prototype.watch=function(){this._interval||(this._visible=this._core.isVisible(),this._interval=b.setInterval(a.proxy(this.refresh,this),this._core.settings.autoRefreshInterval))},e.prototype.refresh=function(){this._core.isVisible()!==this._visible&&(this._visible=!this._visible,this._core.$element.toggleClass("owl-hidden",!this._visible),this._visible&&this._core.invalidate("width")&&this._core.refresh())},e.prototype.destroy=function(){var a,c;b.clearInterval(this._interval);for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},a.fn.owlCarousel.Constructor.Plugins.AutoRefresh=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._loaded=[],this._handlers={"initialized.owl.carousel change.owl.carousel resized.owl.carousel":a.proxy(function(b){if(b.namespace&&this._core.settings&&this._core.settings.lazyLoad&&(b.property&&"position"==b.property.name||"initialized"==b.type)){var c=this._core.settings,e=c.center&&Math.ceil(c.items/2)||c.items,f=c.center&&-1*e||0,g=(b.property&&b.property.value!==d?b.property.value:this._core.current())+f,h=this._core.clones().length,i=a.proxy(function(a,b){this.load(b)},this);for(c.lazyLoadEager>0&&(e+=c.lazyLoadEager,c.loop&&(g-=c.lazyLoadEager,e++));f++<e;)this.load(h/2+this._core.relative(g)),h&&a.each(this._core.clones(this._core.relative(g)),i),g++}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers)};e.Defaults={lazyLoad:!1,lazyLoadEager:0},e.prototype.load=function(c){var d=this._core.$stage.children().eq(c),e=d&&d.find(".owl-lazy");!e||a.inArray(d.get(0),this._loaded)>-1||(e.each(a.proxy(function(c,d){var e,f=a(d),g=b.devicePixelRatio>1&&f.attr("data-src-retina")||f.attr("data-src")||f.attr("data-srcset");this._core.trigger("load",{element:f,url:g},"lazy"),f.is("img")?f.one("load.owl.lazy",a.proxy(function(){f.css("opacity",1),this._core.trigger("loaded",{element:f,url:g},"lazy")},this)).attr("src",g):f.is("source")?f.one("load.owl.lazy",a.proxy(function(){this._core.trigger("loaded",{element:f,url:g},"lazy")},this)).attr("srcset",g):(e=new Image,e.onload=a.proxy(function(){f.css({"background-image":'url("'+g+'")',opacity:"1"}),this._core.trigger("loaded",{element:f,url:g},"lazy")},this),e.src=g)},this)),this._loaded.push(d.get(0)))},e.prototype.destroy=function(){var a,b;for(a in this.handlers)this._core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Lazy=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(c){this._core=c,this._previousHeight=null,this._handlers={"initialized.owl.carousel refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&this.update()},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&"position"===a.property.name&&this.update()},this),"loaded.owl.lazy":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&a.element.closest("."+this._core.settings.itemClass).index()===this._core.current()&&this.update()},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers),this._intervalId=null;var d=this;a(b).on("load",function(){d._core.settings.autoHeight&&d.update()}),a(b).resize(function(){d._core.settings.autoHeight&&(null!=d._intervalId&&clearTimeout(d._intervalId),d._intervalId=setTimeout(function(){d.update()},250))})};e.Defaults={autoHeight:!1,autoHeightClass:"owl-height"},e.prototype.update=function(){var b=this._core._current,c=b+this._core.settings.items,d=this._core.settings.lazyLoad,e=this._core.$stage.children().toArray().slice(b,c),f=[],g=0;a.each(e,function(b,c){f.push(a(c).height())}),g=Math.max.apply(null,f),g<=1&&d&&this._previousHeight&&(g=this._previousHeight),this._previousHeight=g,this._core.$stage.parent().height(g).addClass(this._core.settings.autoHeightClass)},e.prototype.destroy=function(){var a,b;for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.AutoHeight=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._videos={},this._playing=null,this._handlers={"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.register({type:"state",name:"playing",tags:["interacting"]})},this),"resize.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.video&&this.isInFullScreen()&&a.preventDefault()},this),"refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.is("resizing")&&this._core.$stage.find(".cloned .owl-video-frame").remove()},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&"position"===a.property.name&&this._playing&&this.stop()},this),"prepared.owl.carousel":a.proxy(function(b){if(b.namespace){var c=a(b.content).find(".owl-video");c.length&&(c.css("display","none"),this.fetch(c,a(b.content)))}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers),this._core.$element.on("click.owl.video",".owl-video-play-icon",a.proxy(function(a){this.play(a)},this))};e.Defaults={video:!1,videoHeight:!1,videoWidth:!1},e.prototype.fetch=function(a,b){var c=function(){return a.attr("data-vimeo-id")?"vimeo":a.attr("data-vzaar-id")?"vzaar":"youtube"}(),d=a.attr("data-vimeo-id")||a.attr("data-youtube-id")||a.attr("data-vzaar-id"),e=a.attr("data-width")||this._core.settings.videoWidth,f=a.attr("data-height")||this._core.settings.videoHeight,g=a.attr("href");if(!g)throw new Error("Missing video URL.");if(d=g.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com|be\-nocookie\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/),d[3].indexOf("youtu")>-1)c="youtube";else if(d[3].indexOf("vimeo")>-1)c="vimeo";else{if(!(d[3].indexOf("vzaar")>-1))throw new Error("Video URL not supported.");c="vzaar"}d=d[6],this._videos[g]={type:c,id:d,width:e,height:f},b.attr("data-video",g),this.thumbnail(a,this._videos[g])},e.prototype.thumbnail=function(b,c){var d,e,f,g=c.width&&c.height?"width:"+c.width+"px;height:"+c.height+"px;":"",h=b.find("img"),i="src",j="",k=this._core.settings,l=function(c){e='<div class="owl-video-play-icon"></div>',d=k.lazyLoad?a("<div/>",{class:"owl-video-tn "+j,srcType:c}):a("<div/>",{class:"owl-video-tn",style:"opacity:1;background-image:url("+c+")"}),b.after(d),b.after(e)};if(b.wrap(a("<div/>",{class:"owl-video-wrapper",style:g})),this._core.settings.lazyLoad&&(i="data-src",j="owl-lazy"),h.length)return l(h.attr(i)),h.remove(),!1;"youtube"===c.type?(f="//img.youtube.com/vi/"+c.id+"/hqdefault.jpg",l(f)):"vimeo"===c.type?a.ajax({type:"GET",url:"//vimeo.com/api/v2/video/"+c.id+".json",jsonp:"callback",dataType:"jsonp",success:function(a){f=a[0].thumbnail_large,l(f)}}):"vzaar"===c.type&&a.ajax({type:"GET",url:"//vzaar.com/api/videos/"+c.id+".json",jsonp:"callback",dataType:"jsonp",success:function(a){f=a.framegrab_url,l(f)}})},e.prototype.stop=function(){this._core.trigger("stop",null,"video"),this._playing.find(".owl-video-frame").remove(),this._playing.removeClass("owl-video-playing"),this._playing=null,this._core.leave("playing"),this._core.trigger("stopped",null,"video")},e.prototype.play=function(b){var c,d=a(b.target),e=d.closest("."+this._core.settings.itemClass),f=this._videos[e.attr("data-video")],g=f.width||"100%",h=f.height||this._core.$stage.height();this._playing||(this._core.enter("playing"),this._core.trigger("play",null,"video"),e=this._core.items(this._core.relative(e.index())),this._core.reset(e.index()),c=a('<iframe frameborder="0" allowfullscreen mozallowfullscreen webkitAllowFullScreen ></iframe>'),c.attr("height",h),c.attr("width",g),"youtube"===f.type?c.attr("src","//www.youtube.com/embed/"+f.id+"?autoplay=1&rel=0&v="+f.id):"vimeo"===f.type?c.attr("src","//player.vimeo.com/video/"+f.id+"?autoplay=1"):"vzaar"===f.type&&c.attr("src","//view.vzaar.com/"+f.id+"/player?autoplay=true"),a(c).wrap('<div class="owl-video-frame" />').insertAfter(e.find(".owl-video")),this._playing=e.addClass("owl-video-playing"))},e.prototype.isInFullScreen=function(){var b=c.fullscreenElement||c.mozFullScreenElement||c.webkitFullscreenElement;return b&&a(b).parent().hasClass("owl-video-frame")},e.prototype.destroy=function(){var a,b;this._core.$element.off("click.owl.video");for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Video=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this.core=b,this.core.options=a.extend({},e.Defaults,this.core.options),this.swapping=!0,this.previous=d,this.next=d,this.handlers={"change.owl.carousel":a.proxy(function(a){a.namespace&&"position"==a.property.name&&(this.previous=this.core.current(),this.next=a.property.value)},this),"drag.owl.carousel dragged.owl.carousel translated.owl.carousel":a.proxy(function(a){a.namespace&&(this.swapping="translated"==a.type)},this),"translate.owl.carousel":a.proxy(function(a){a.namespace&&this.swapping&&(this.core.options.animateOut||this.core.options.animateIn)&&this.swap()},this)},this.core.$element.on(this.handlers)};e.Defaults={animateOut:!1,
animateIn:!1},e.prototype.swap=function(){if(1===this.core.settings.items&&a.support.animation&&a.support.transition){this.core.speed(0);var b,c=a.proxy(this.clear,this),d=this.core.$stage.children().eq(this.previous),e=this.core.$stage.children().eq(this.next),f=this.core.settings.animateIn,g=this.core.settings.animateOut;this.core.current()!==this.previous&&(g&&(b=this.core.coordinates(this.previous)-this.core.coordinates(this.next),d.one(a.support.animation.end,c).css({left:b+"px"}).addClass("animated owl-animated-out").addClass(g)),f&&e.one(a.support.animation.end,c).addClass("animated owl-animated-in").addClass(f))}},e.prototype.clear=function(b){a(b.target).css({left:""}).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut),this.core.onTransitionEnd()},e.prototype.destroy=function(){var a,b;for(a in this.handlers)this.core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Animate=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._call=null,this._time=0,this._timeout=0,this._paused=!0,this._handlers={"changed.owl.carousel":a.proxy(function(a){a.namespace&&"settings"===a.property.name?this._core.settings.autoplay?this.play():this.stop():a.namespace&&"position"===a.property.name&&this._paused&&(this._time=0)},this),"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoplay&&this.play()},this),"play.owl.autoplay":a.proxy(function(a,b,c){a.namespace&&this.play(b,c)},this),"stop.owl.autoplay":a.proxy(function(a){a.namespace&&this.stop()},this),"mouseover.owl.autoplay":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"mouseleave.owl.autoplay":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.play()},this),"touchstart.owl.core":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"touchend.owl.core":a.proxy(function(){this._core.settings.autoplayHoverPause&&this.play()},this)},this._core.$element.on(this._handlers),this._core.options=a.extend({},e.Defaults,this._core.options)};e.Defaults={autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,autoplaySpeed:!1},e.prototype._next=function(d){this._call=b.setTimeout(a.proxy(this._next,this,d),this._timeout*(Math.round(this.read()/this._timeout)+1)-this.read()),this._core.is("interacting")||c.hidden||this._core.next(d||this._core.settings.autoplaySpeed)},e.prototype.read=function(){return(new Date).getTime()-this._time},e.prototype.play=function(c,d){var e;this._core.is("rotating")||this._core.enter("rotating"),c=c||this._core.settings.autoplayTimeout,e=Math.min(this._time%(this._timeout||c),c),this._paused?(this._time=this.read(),this._paused=!1):b.clearTimeout(this._call),this._time+=this.read()%c-e,this._timeout=c,this._call=b.setTimeout(a.proxy(this._next,this,d),c-e)},e.prototype.stop=function(){this._core.is("rotating")&&(this._time=0,this._paused=!0,b.clearTimeout(this._call),this._core.leave("rotating"))},e.prototype.pause=function(){this._core.is("rotating")&&!this._paused&&(this._time=this.read(),this._paused=!0,b.clearTimeout(this._call))},e.prototype.destroy=function(){var a,b;this.stop();for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.autoplay=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){"use strict";var e=function(b){this._core=b,this._initialized=!1,this._pages=[],this._controls={},this._templates=[],this.$element=this._core.$element,this._overrides={next:this._core.next,prev:this._core.prev,to:this._core.to},this._handlers={"prepared.owl.carousel":a.proxy(function(b){b.namespace&&this._core.settings.dotsData&&this._templates.push('<div class="'+this._core.settings.dotClass+'">'+a(b.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot")+"</div>")},this),"added.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.dotsData&&this._templates.splice(a.position,0,this._templates.pop())},this),"remove.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.dotsData&&this._templates.splice(a.position,1)},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&"position"==a.property.name&&this.draw()},this),"initialized.owl.carousel":a.proxy(function(a){a.namespace&&!this._initialized&&(this._core.trigger("initialize",null,"navigation"),this.initialize(),this.update(),this.draw(),this._initialized=!0,this._core.trigger("initialized",null,"navigation"))},this),"refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._initialized&&(this._core.trigger("refresh",null,"navigation"),this.update(),this.draw(),this._core.trigger("refreshed",null,"navigation"))},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers)};e.Defaults={nav:!1,navText:['<span aria-label="Previous">&#x2039;</span>','<span aria-label="Next">&#x203a;</span>'],navSpeed:!1,navElement:'button type="button" role="presentation"',navContainer:!1,navContainerClass:"owl-nav",navClass:["owl-prev","owl-next"],slideBy:1,dotClass:"owl-dot",dotsClass:"owl-dots",dots:!0,dotsEach:!1,dotsData:!1,dotsSpeed:!1,dotsContainer:!1},e.prototype.initialize=function(){var b,c=this._core.settings;this._controls.$relative=(c.navContainer?a(c.navContainer):a("<div>").addClass(c.navContainerClass).appendTo(this.$element)).addClass("disabled"),this._controls.$previous=a("<"+c.navElement+">").addClass(c.navClass[0]).html(c.navText[0]).prependTo(this._controls.$relative).on("click",a.proxy(function(a){this.prev(c.navSpeed)},this)),this._controls.$next=a("<"+c.navElement+">").addClass(c.navClass[1]).html(c.navText[1]).appendTo(this._controls.$relative).on("click",a.proxy(function(a){this.next(c.navSpeed)},this)),c.dotsData||(this._templates=[a('<button role="button">').addClass(c.dotClass).append(a("<span>")).prop("outerHTML")]),this._controls.$absolute=(c.dotsContainer?a(c.dotsContainer):a("<div>").addClass(c.dotsClass).appendTo(this.$element)).addClass("disabled"),this._controls.$absolute.on("click","button",a.proxy(function(b){var d=a(b.target).parent().is(this._controls.$absolute)?a(b.target).index():a(b.target).parent().index();b.preventDefault(),this.to(d,c.dotsSpeed)},this));for(b in this._overrides)this._core[b]=a.proxy(this[b],this)},e.prototype.destroy=function(){var a,b,c,d,e;e=this._core.settings;for(a in this._handlers)this.$element.off(a,this._handlers[a]);for(b in this._controls)"$relative"===b&&e.navContainer?this._controls[b].html(""):this._controls[b].remove();for(d in this.overides)this._core[d]=this._overrides[d];for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},e.prototype.update=function(){var a,b,c,d=this._core.clones().length/2,e=d+this._core.items().length,f=this._core.maximum(!0),g=this._core.settings,h=g.center||g.autoWidth||g.dotsData?1:g.dotsEach||g.items;if("page"!==g.slideBy&&(g.slideBy=Math.min(g.slideBy,g.items)),g.dots||"page"==g.slideBy)for(this._pages=[],a=d,b=0,c=0;a<e;a++){if(b>=h||0===b){if(this._pages.push({start:Math.min(f,a-d),end:a-d+h-1}),Math.min(f,a-d)===f)break;b=0,++c}b+=this._core.mergers(this._core.relative(a))}},e.prototype.draw=function(){var b,c=this._core.settings,d=this._core.items().length<=c.items,e=this._core.relative(this._core.current()),f=c.loop||c.rewind;this._controls.$relative.toggleClass("disabled",!c.nav||d),c.nav&&(this._controls.$previous.toggleClass("disabled",!f&&e<=this._core.minimum(!0)),this._controls.$next.toggleClass("disabled",!f&&e>=this._core.maximum(!0))),this._controls.$absolute.toggleClass("disabled",!c.dots||d),c.dots&&(b=this._pages.length-this._controls.$absolute.children().length,c.dotsData&&0!==b?this._controls.$absolute.html(this._templates.join("")):b>0?this._controls.$absolute.append(new Array(b+1).join(this._templates[0])):b<0&&this._controls.$absolute.children().slice(b).remove(),this._controls.$absolute.find(".active").removeClass("active"),this._controls.$absolute.children().eq(a.inArray(this.current(),this._pages)).addClass("active"))},e.prototype.onTrigger=function(b){var c=this._core.settings;b.page={index:a.inArray(this.current(),this._pages),count:this._pages.length,size:c&&(c.center||c.autoWidth||c.dotsData?1:c.dotsEach||c.items)}},e.prototype.current=function(){var b=this._core.relative(this._core.current());return a.grep(this._pages,a.proxy(function(a,c){return a.start<=b&&a.end>=b},this)).pop()},e.prototype.getPosition=function(b){var c,d,e=this._core.settings;return"page"==e.slideBy?(c=a.inArray(this.current(),this._pages),d=this._pages.length,b?++c:--c,c=this._pages[(c%d+d)%d].start):(c=this._core.relative(this._core.current()),d=this._core.items().length,b?c+=e.slideBy:c-=e.slideBy),c},e.prototype.next=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!0),b)},e.prototype.prev=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!1),b)},e.prototype.to=function(b,c,d){var e;!d&&this._pages.length?(e=this._pages.length,a.proxy(this._overrides.to,this._core)(this._pages[(b%e+e)%e].start,c)):a.proxy(this._overrides.to,this._core)(b,c)},a.fn.owlCarousel.Constructor.Plugins.Navigation=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){"use strict";var e=function(c){this._core=c,this._hashes={},this.$element=this._core.$element,this._handlers={"initialized.owl.carousel":a.proxy(function(c){c.namespace&&"URLHash"===this._core.settings.startPosition&&a(b).trigger("hashchange.owl.navigation")},this),"prepared.owl.carousel":a.proxy(function(b){if(b.namespace){var c=a(b.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");if(!c)return;this._hashes[c]=b.content}},this),"changed.owl.carousel":a.proxy(function(c){if(c.namespace&&"position"===c.property.name){var d=this._core.items(this._core.relative(this._core.current())),e=a.map(this._hashes,function(a,b){return a===d?b:null}).join();if(!e||b.location.hash.slice(1)===e)return;b.location.hash=e}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers),a(b).on("hashchange.owl.navigation",a.proxy(function(a){var c=b.location.hash.substring(1),e=this._core.$stage.children(),f=this._hashes[c]&&e.index(this._hashes[c]);f!==d&&f!==this._core.current()&&this._core.to(this._core.relative(f),!1,!0)},this))};e.Defaults={URLhashListener:!1},e.prototype.destroy=function(){var c,d;a(b).off("hashchange.owl.navigation");for(c in this._handlers)this._core.$element.off(c,this._handlers[c]);for(d in Object.getOwnPropertyNames(this))"function"!=typeof this[d]&&(this[d]=null)},a.fn.owlCarousel.Constructor.Plugins.Hash=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){function e(b,c){var e=!1,f=b.charAt(0).toUpperCase()+b.slice(1);return a.each((b+" "+h.join(f+" ")+f).split(" "),function(a,b){if(g[b]!==d)return e=!c||b,!1}),e}function f(a){return e(a,!0)}var g=a("<support>").get(0).style,h="Webkit Moz O ms".split(" "),i={transition:{end:{WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",transition:"transitionend"}},animation:{end:{WebkitAnimation:"webkitAnimationEnd",MozAnimation:"animationend",OAnimation:"oAnimationEnd",animation:"animationend"}}},j={csstransforms:function(){return!!e("transform")},csstransforms3d:function(){return!!e("perspective")},csstransitions:function(){return!!e("transition")},cssanimations:function(){return!!e("animation")}};j.csstransitions()&&(a.support.transition=new String(f("transition")),a.support.transition.end=i.transition.end[a.support.transition]),j.cssanimations()&&(a.support.animation=new String(f("animation")),a.support.animation.end=i.animation.end[a.support.animation]),j.csstransforms()&&(a.support.transform=new String(f("transform")),a.support.transform3d=j.csstransforms3d())}(window.Zepto||window.jQuery,window,document);
"use strict";
(function(root, factory) {
    if(typeof exports === 'object') {
        module.exports = factory();
    }
    else if(typeof define === 'function' && define.amd) {
        define(['jquery', 'googlemaps!'], factory);
    }
    else {
        root.GMaps = factory();
    }


}(this, function() {

    /*!
     * GMaps.js v0.4.25
     * http://hpneo.github.com/gmaps/
     *
     * Copyright 2017, Gustavo Leon
     * Released under the MIT License.
     */

    var extend_object = function(obj, new_obj) {
        var name;

        if (obj === new_obj) {
            return obj;
        }

        for (name in new_obj) {
            if (new_obj[name] !== undefined) {
                obj[name] = new_obj[name];
            }
        }

        return obj;
    };

    var replace_object = function(obj, replace) {
        var name;

        if (obj === replace) {
            return obj;
        }

        for (name in replace) {
            if (obj[name] != undefined) {
                obj[name] = replace[name];
            }
        }

        return obj;
    };

    var array_map = function(array, callback) {
        var original_callback_params = Array.prototype.slice.call(arguments, 2),
            array_return = [],
            array_length = array.length,
            i;

        if (Array.prototype.map && array.map === Array.prototype.map) {
            array_return = Array.prototype.map.call(array, function(item) {
                var callback_params = original_callback_params.slice(0);
                callback_params.splice(0, 0, item);

                return callback.apply(this, callback_params);
            });
        }
        else {
            for (i = 0; i < array_length; i++) {
                callback_params = original_callback_params;
                callback_params.splice(0, 0, array[i]);
                array_return.push(callback.apply(this, callback_params));
            }
        }

        return array_return;
    };

    var array_flat = function(array) {
        var new_array = [],
            i;

        for (i = 0; i < array.length; i++) {
            new_array = new_array.concat(array[i]);
        }

        return new_array;
    };

    var coordsToLatLngs = function(coords, useGeoJSON) {
        var first_coord = coords[0],
            second_coord = coords[1];

        if (useGeoJSON) {
            first_coord = coords[1];
            second_coord = coords[0];
        }

        return new google.maps.LatLng(first_coord, second_coord);
    };

    var arrayToLatLng = function(coords, useGeoJSON) {
        var i;

        for (i = 0; i < coords.length; i++) {
            if (!(coords[i] instanceof google.maps.LatLng)) {
                if (coords[i].length > 0 && typeof(coords[i][0]) === "object") {
                    coords[i] = arrayToLatLng(coords[i], useGeoJSON);
                }
                else {
                    coords[i] = coordsToLatLngs(coords[i], useGeoJSON);
                }
            }
        }

        return coords;
    };

    var getElementsByClassName = function (class_name, context) {
        var element,
            _class = class_name.replace('.', '');

        if ('jQuery' in this && context) {
            element = $("." + _class, context)[0];
        } else {
            element = document.getElementsByClassName(_class)[0];
        }
        return element;

    };

    var getElementById = function(id, context) {
        var element,
            id = id.replace('#', '');

        if ('jQuery' in window && context) {
            element = $('#' + id, context)[0];
        } else {
            element = document.getElementById(id);
        };

        return element;
    };

    var findAbsolutePosition = function(obj)  {
        var curleft = 0,
            curtop = 0;

        if (obj.getBoundingClientRect) {
            var rect = obj.getBoundingClientRect();
            var sx = -(window.scrollX ? window.scrollX : window.pageXOffset);
            var sy = -(window.scrollY ? window.scrollY : window.pageYOffset);

            return [(rect.left - sx), (rect.top - sy)];
        }

        if (obj.offsetParent) {
            do {
                curleft += obj.offsetLeft;
                curtop += obj.offsetTop;
            } while (obj = obj.offsetParent);
        }

        return [curleft, curtop];
    };

    var GMaps = (function(global) {
        "use strict";

        var doc = document;
        /**
         * Creates a new GMaps instance, including a Google Maps map.
         * @class GMaps
         * @constructs
         * @param {object} options - `options` accepts all the [MapOptions](https://developers.google.com/maps/documentation/javascript/reference#MapOptions) and [events](https://developers.google.com/maps/documentation/javascript/reference#Map) listed in the Google Maps API. Also accepts:
         * * `lat` (number): Latitude of the map's center
         * * `lng` (number): Longitude of the map's center
         * * `el` (string or HTMLElement): container where the map will be rendered
         * * `markerClusterer` (function): A function to create a marker cluster. You can use MarkerClusterer or MarkerClustererPlus.
         */
        var GMaps = function(options) {

            if (!(typeof window.google === 'object' && window.google.maps)) {
                if (typeof window.console === 'object' && window.console.error) {
                    console.error('Google Maps API is required. Please register the following JavaScript library https://maps.googleapis.com/maps/api/js.');
                }

                return function() {};
            }

            if (!this) return new GMaps(options);

            options.zoom = options.zoom || 15;
            options.mapType = options.mapType || 'roadmap';

            var valueOrDefault = function(value, defaultValue) {
                return value === undefined ? defaultValue : value;
            };

            var self = this,
                i,
                events_that_hide_context_menu = [
                    'bounds_changed', 'center_changed', 'click', 'dblclick', 'drag',
                    'dragend', 'dragstart', 'idle', 'maptypeid_changed', 'projection_changed',
                    'resize', 'tilesloaded', 'zoom_changed'
                ],
                events_that_doesnt_hide_context_menu = ['mousemove', 'mouseout', 'mouseover'],
                options_to_be_deleted = ['el', 'lat', 'lng', 'mapType', 'width', 'height', 'markerClusterer', 'enableNewStyle'],
                identifier = options.el || options.div,
                markerClustererFunction = options.markerClusterer,
                mapType = google.maps.MapTypeId[options.mapType.toUpperCase()],
                map_center = new google.maps.LatLng(options.lat, options.lng),
                zoomControl = valueOrDefault(options.zoomControl, true),
                zoomControlOpt = options.zoomControlOpt || {
                    style: 'DEFAULT',
                    position: 'TOP_LEFT'
                },
                zoomControlStyle = zoomControlOpt.style || 'DEFAULT',
                zoomControlPosition = zoomControlOpt.position || 'TOP_LEFT',
                panControl = valueOrDefault(options.panControl, true),
                mapTypeControl = valueOrDefault(options.mapTypeControl, true),
                scaleControl = valueOrDefault(options.scaleControl, true),
                streetViewControl = valueOrDefault(options.streetViewControl, true),
                overviewMapControl = valueOrDefault(overviewMapControl, true),
                map_options = {},
                map_base_options = {
                    zoom: this.zoom,
                    center: map_center,
                    mapTypeId: mapType
                },
                map_controls_options = {
                    panControl: panControl,
                    zoomControl: zoomControl,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle[zoomControlStyle],
                        position: google.maps.ControlPosition[zoomControlPosition]
                    },
                    mapTypeControl: mapTypeControl,
                    scaleControl: scaleControl,
                    streetViewControl: streetViewControl,
                    overviewMapControl: overviewMapControl
                };

            if (typeof(options.el) === 'string' || typeof(options.div) === 'string') {
                if (identifier.indexOf("#") > -1) {
                    /**
                     * Container element
                     *
                     * @type {HTMLElement}
                     */
                    this.el = getElementById(identifier, options.context);
                } else {
                    this.el = getElementsByClassName.apply(this, [identifier, options.context]);
                }
            } else {
                this.el = identifier;
            }

            if (typeof(this.el) === 'undefined' || this.el === null) {
                throw 'No element defined.';
            }

            window.context_menu = window.context_menu || {};
            window.context_menu[self.el.id] = {};

            /**
             * Collection of custom controls in the map UI
             *
             * @type {array}
             */
            this.controls = [];
            /**
             * Collection of map's overlays
             *
             * @type {array}
             */
            this.overlays = [];
            /**
             * Collection of KML/GeoRSS and FusionTable layers
             *
             * @type {array}
             */
            this.layers = [];
            /**
             * Collection of data layers (See {@link GMaps#addLayer})
             *
             * @type {object}
             */
            this.singleLayers = {};
            /**
             * Collection of map's markers
             *
             * @type {array}
             */
            this.markers = [];
            /**
             * Collection of map's lines
             *
             * @type {array}
             */
            this.polylines = [];
            /**
             * Collection of map's routes requested by {@link GMaps#getRoutes}, {@link GMaps#renderRoute}, {@link GMaps#drawRoute}, {@link GMaps#travelRoute} or {@link GMaps#drawSteppedRoute}
             *
             * @type {array}
             */
            this.routes = [];
            /**
             * Collection of map's polygons
             *
             * @type {array}
             */
            this.polygons = [];
            this.infoWindow = null;
            this.overlay_el = null;
            /**
             * Current map's zoom
             *
             * @type {number}
             */
            this.zoom = options.zoom;
            this.registered_events = {};

            this.el.style.width = options.width || this.el.scrollWidth || this.el.offsetWidth;
            this.el.style.height = options.height || this.el.scrollHeight || this.el.offsetHeight;

            google.maps.visualRefresh = options.enableNewStyle;

            for (i = 0; i < options_to_be_deleted.length; i++) {
                delete options[options_to_be_deleted[i]];
            }

            if(options.disableDefaultUI != true) {
                map_base_options = extend_object(map_base_options, map_controls_options);
            }

            map_options = extend_object(map_base_options, options);

            for (i = 0; i < events_that_hide_context_menu.length; i++) {
                delete map_options[events_that_hide_context_menu[i]];
            }

            for (i = 0; i < events_that_doesnt_hide_context_menu.length; i++) {
                delete map_options[events_that_doesnt_hide_context_menu[i]];
            }

            /**
             * Google Maps map instance
             *
             * @type {google.maps.Map}
             */
            this.map = new google.maps.Map(this.el, map_options);

            if (markerClustererFunction) {
                /**
                 * Marker Clusterer instance
                 *
                 * @type {object}
                 */
                this.markerClusterer = markerClustererFunction.apply(this, [this.map]);
            }

            var buildContextMenuHTML = function(control, e) {
                var html = '',
                    options = window.context_menu[self.el.id][control];

                for (var i in options){
                    if (options.hasOwnProperty(i)) {
                        var option = options[i];

                        html += '<li><a id="' + control + '_' + i + '" href="#">' + option.title + '</a></li>';
                    }
                }

                if (!getElementById('gmaps_context_menu')) return;

                var context_menu_element = getElementById('gmaps_context_menu');

                context_menu_element.innerHTML = html;

                var context_menu_items = context_menu_element.getElementsByTagName('a'),
                    context_menu_items_count = context_menu_items.length,
                    i;

                for (i = 0; i < context_menu_items_count; i++) {
                    var context_menu_item = context_menu_items[i];

                    var assign_menu_item_action = function(ev){
                        ev.preventDefault();

                        options[this.id.replace(control + '_', '')].action.apply(self, [e]);
                        self.hideContextMenu();
                    };

                    google.maps.event.clearListeners(context_menu_item, 'click');
                    google.maps.event.addDomListenerOnce(context_menu_item, 'click', assign_menu_item_action, false);
                }

                var position = findAbsolutePosition.apply(this, [self.el]),
                    left = position[0] + e.pixel.x - 15,
                    top = position[1] + e.pixel.y- 15;

                context_menu_element.style.left = left + "px";
                context_menu_element.style.top = top + "px";

                // context_menu_element.style.display = 'block';
            };

            this.buildContextMenu = function(control, e) {
                if (control === 'marker') {
                    e.pixel = {};

                    var overlay = new google.maps.OverlayView();
                    overlay.setMap(self.map);

                    overlay.draw = function() {
                        var projection = overlay.getProjection(),
                            position = e.marker.getPosition();

                        e.pixel = projection.fromLatLngToContainerPixel(position);

                        buildContextMenuHTML(control, e);
                    };
                }
                else {
                    buildContextMenuHTML(control, e);
                }

                var context_menu_element = getElementById('gmaps_context_menu');

                setTimeout(function() {
                    context_menu_element.style.display = 'block';
                }, 0);
            };

            /**
             * Add a context menu for a map or a marker.
             *
             * @param {object} options - The `options` object should contain:
             * * `control` (string): Kind of control the context menu will be attached. Can be "map" or "marker".
             * * `options` (array): A collection of context menu items:
             *   * `title` (string): Item's title shown in the context menu.
             *   * `name` (string): Item's identifier.
             *   * `action` (function): Function triggered after selecting the context menu item.
             */
            this.setContextMenu = function(options) {
                window.context_menu[self.el.id][options.control] = {};

                var i,
                    ul = doc.createElement('ul');

                for (i in options.options) {
                    if (options.options.hasOwnProperty(i)) {
                        var option = options.options[i];

                        window.context_menu[self.el.id][options.control][option.name] = {
                            title: option.title,
                            action: option.action
                        };
                    }
                }

                ul.id = 'gmaps_context_menu';
                ul.style.display = 'none';
                ul.style.position = 'absolute';
                ul.style.minWidth = '100px';
                ul.style.background = 'white';
                ul.style.listStyle = 'none';
                ul.style.padding = '8px';
                ul.style.boxShadow = '2px 2px 6px #ccc';

                if (!getElementById('gmaps_context_menu')) {
                    doc.body.appendChild(ul);
                }

                var context_menu_element = getElementById('gmaps_context_menu');

                google.maps.event.addDomListener(context_menu_element, 'mouseout', function(ev) {
                    if (!ev.relatedTarget || !this.contains(ev.relatedTarget)) {
                        window.setTimeout(function(){
                            context_menu_element.style.display = 'none';
                        }, 400);
                    }
                }, false);
            };

            /**
             * Hide the current context menu
             */
            this.hideContextMenu = function() {
                var context_menu_element = getElementById('gmaps_context_menu');

                if (context_menu_element) {
                    context_menu_element.style.display = 'none';
                }
            };

            var setupListener = function(object, name) {
                google.maps.event.addListener(object, name, function(e){
                    if (e == undefined) {
                        e = this;
                    }

                    options[name].apply(this, [e]);

                    self.hideContextMenu();
                });
            };

            //google.maps.event.addListener(this.map, 'idle', this.hideContextMenu);
            google.maps.event.addListener(this.map, 'zoom_changed', this.hideContextMenu);

            for (var ev = 0; ev < events_that_hide_context_menu.length; ev++) {
                var name = events_that_hide_context_menu[ev];

                if (name in options) {
                    setupListener(this.map, name);
                }
            }

            for (var ev = 0; ev < events_that_doesnt_hide_context_menu.length; ev++) {
                var name = events_that_doesnt_hide_context_menu[ev];

                if (name in options) {
                    setupListener(this.map, name);
                }
            }

            google.maps.event.addListener(this.map, 'rightclick', function(e) {
                if (options.rightclick) {
                    options.rightclick.apply(this, [e]);
                }

                if(window.context_menu[self.el.id]['map'] != undefined) {
                    self.buildContextMenu('map', e);
                }
            });

            /**
             * Trigger a `resize` event, useful if you need to repaint the current map (for changes in the viewport or display / hide actions).
             */
            this.refresh = function() {
                google.maps.event.trigger(this.map, 'resize');
            };

            /**
             * Adjust the map zoom to include all the markers added in the map.
             */
            this.fitZoom = function() {
                var latLngs = [],
                    markers_length = this.markers.length,
                    i;

                for (i = 0; i < markers_length; i++) {
                    if(typeof(this.markers[i].visible) === 'boolean' && this.markers[i].visible) {
                        latLngs.push(this.markers[i].getPosition());
                    }
                }

                this.fitLatLngBounds(latLngs);
            };

            /**
             * Adjust the map zoom to include all the coordinates in the `latLngs` array.
             *
             * @param {array} latLngs - Collection of `google.maps.LatLng` objects.
             */
            this.fitLatLngBounds = function(latLngs) {
                var total = latLngs.length,
                    bounds = new google.maps.LatLngBounds(),
                    i;

                for(i = 0; i < total; i++) {
                    bounds.extend(latLngs[i]);
                }

                this.map.fitBounds(bounds);
            };

            /**
             * Center the map using the `lat` and `lng` coordinates.
             *
             * @param {number} lat - Latitude of the coordinate.
             * @param {number} lng - Longitude of the coordinate.
             * @param {function} [callback] - Callback that will be executed after the map is centered.
             */
            this.setCenter = function(lat, lng, callback) {
                this.map.panTo(new google.maps.LatLng(lat, lng));

                if (callback) {
                    callback();
                }
            };

            /**
             * Return the HTML element container of the map.
             *
             * @returns {HTMLElement} the element container.
             */
            this.getElement = function() {
                return this.el;
            };

            /**
             * Increase the map's zoom.
             *
             * @param {number} [magnitude] - The number of times the map will be zoomed in.
             */
            this.zoomIn = function(value) {
                value = value || 1;

                this.zoom = this.map.getZoom() + value;
                this.map.setZoom(this.zoom);
            };

            /**
             * Decrease the map's zoom.
             *
             * @param {number} [magnitude] - The number of times the map will be zoomed out.
             */
            this.zoomOut = function(value) {
                value = value || 1;

                this.zoom = this.map.getZoom() - value;
                this.map.setZoom(this.zoom);
            };

            var native_methods = [],
                method;

            for (method in this.map) {
                if (typeof(this.map[method]) == 'function' && !this[method]) {
                    native_methods.push(method);
                }
            }

            for (i = 0; i < native_methods.length; i++) {
                (function(gmaps, scope, method_name) {
                    gmaps[method_name] = function(){
                        return scope[method_name].apply(scope, arguments);
                    };
                })(this, this.map, native_methods[i]);
            }
        };

        return GMaps;
    })(this);

    GMaps.prototype.createControl = function(options) {
        var control = document.createElement('div');

        control.style.cursor = 'pointer';

        if (options.disableDefaultStyles !== true) {
            control.style.fontFamily = 'Roboto, Arial, sans-serif';
            control.style.fontSize = '11px';
            control.style.boxShadow = 'rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px';
        }

        for (var option in options.style) {
            control.style[option] = options.style[option];
        }

        if (options.id) {
            control.id = options.id;
        }

        if (options.title) {
            control.title = options.title;
        }

        if (options.classes) {
            control.className = options.classes;
        }

        if (options.content) {
            if (typeof options.content === 'string') {
                control.innerHTML = options.content;
            }
            else if (options.content instanceof HTMLElement) {
                control.appendChild(options.content);
            }
        }

        if (options.position) {
            control.position = google.maps.ControlPosition[options.position.toUpperCase()];
        }

        for (var ev in options.events) {
            (function(object, name) {
                google.maps.event.addDomListener(object, name, function(){
                    options.events[name].apply(this, [this]);
                });
            })(control, ev);
        }

        control.index = 1;

        return control;
    };

    /**
     * Add a custom control to the map UI.
     *
     * @param {object} options - The `options` object should contain:
     * * `style` (object): The keys and values of this object should be valid CSS properties and values.
     * * `id` (string): The HTML id for the custom control.
     * * `classes` (string): A string containing all the HTML classes for the custom control.
     * * `content` (string or HTML element): The content of the custom control.
     * * `position` (string): Any valid [`google.maps.ControlPosition`](https://developers.google.com/maps/documentation/javascript/controls#ControlPositioning) value, in lower or upper case.
     * * `events` (object): The keys of this object should be valid DOM events. The values should be functions.
     * * `disableDefaultStyles` (boolean): If false, removes the default styles for the controls like font (family and size), and box shadow.
     * @returns {HTMLElement}
     */
    GMaps.prototype.addControl = function(options) {
        var control = this.createControl(options);

        this.controls.push(control);
        this.map.controls[control.position].push(control);

        return control;
    };

    /**
     * Remove a control from the map. `control` should be a control returned by `addControl()`.
     *
     * @param {HTMLElement} control - One of the controls returned by `addControl()`.
     * @returns {HTMLElement} the removed control.
     */
    GMaps.prototype.removeControl = function(control) {
        var position = null,
            i;

        for (i = 0; i < this.controls.length; i++) {
            if (this.controls[i] == control) {
                position = this.controls[i].position;
                this.controls.splice(i, 1);
            }
        }

        if (position) {
            for (i = 0; i < this.map.controls.length; i++) {
                var controlsForPosition = this.map.controls[control.position];

                if (controlsForPosition.getAt(i) == control) {
                    controlsForPosition.removeAt(i);

                    break;
                }
            }
        }

        return control;
    };

    GMaps.prototype.createMarker = function(options) {
        if (options.lat == undefined && options.lng == undefined && options.position == undefined) {
            throw 'No latitude or longitude defined.';
        }

        var self = this,
            details = options.details,
            fences = options.fences,
            outside = options.outside,
            base_options = {
                position: new google.maps.LatLng(options.lat, options.lng),
                map: null
            },
            marker_options = extend_object(base_options, options);

        delete marker_options.lat;
        delete marker_options.lng;
        delete marker_options.fences;
        delete marker_options.outside;

        var marker = new google.maps.Marker(marker_options);

        marker.fences = fences;

        if (options.infoWindow) {
            marker.infoWindow = new google.maps.InfoWindow(options.infoWindow);

            var info_window_events = ['closeclick', 'content_changed', 'domready', 'position_changed', 'zindex_changed'];

            for (var ev = 0; ev < info_window_events.length; ev++) {
                (function(object, name) {
                    if (options.infoWindow[name]) {
                        google.maps.event.addListener(object, name, function(e){
                            options.infoWindow[name].apply(this, [e]);
                        });
                    }
                })(marker.infoWindow, info_window_events[ev]);
            }
        }

        var marker_events = ['animation_changed', 'clickable_changed', 'cursor_changed', 'draggable_changed', 'flat_changed', 'icon_changed', 'position_changed', 'shadow_changed', 'shape_changed', 'title_changed', 'visible_changed', 'zindex_changed'];

        var marker_events_with_mouse = ['dblclick', 'drag', 'dragend', 'dragstart', 'mousedown', 'mouseout', 'mouseover', 'mouseup'];

        for (var ev = 0; ev < marker_events.length; ev++) {
            (function(object, name) {
                if (options[name]) {
                    google.maps.event.addListener(object, name, function(){
                        options[name].apply(this, [this]);
                    });
                }
            })(marker, marker_events[ev]);
        }

        for (var ev = 0; ev < marker_events_with_mouse.length; ev++) {
            (function(map, object, name) {
                if (options[name]) {
                    google.maps.event.addListener(object, name, function(me){
                        if(!me.pixel){
                            me.pixel = map.getProjection().fromLatLngToPoint(me.latLng)
                        }

                        options[name].apply(this, [me]);
                    });
                }
            })(this.map, marker, marker_events_with_mouse[ev]);
        }

        google.maps.event.addListener(marker, 'click', function() {
            this.details = details;

            if (options.click) {
                options.click.apply(this, [this]);
            }

            if (marker.infoWindow) {
                self.hideInfoWindows();
                marker.infoWindow.open(self.map, marker);
            }
        });

        google.maps.event.addListener(marker, 'rightclick', function(e) {
            e.marker = this;

            if (options.rightclick) {
                options.rightclick.apply(this, [e]);
            }

            if (window.context_menu[self.el.id]['marker'] != undefined) {
                self.buildContextMenu('marker', e);
            }
        });

        if (marker.fences) {
            google.maps.event.addListener(marker, 'dragend', function() {
                self.checkMarkerGeofence(marker, function(m, f) {
                    outside(m, f);
                });
            });
        }

        return marker;
    };

    GMaps.prototype.addMarker = function(options) {
        var marker;
        if(options.hasOwnProperty('gm_accessors_')) {
            // Native google.maps.Marker object
            marker = options;
        }
        else {
            if ((options.hasOwnProperty('lat') && options.hasOwnProperty('lng')) || options.position) {
                marker = this.createMarker(options);
            }
            else {
                throw 'No latitude or longitude defined.';
            }
        }

        marker.setMap(this.map);

        if(this.markerClusterer) {
            this.markerClusterer.addMarker(marker);
        }

        this.markers.push(marker);

        GMaps.fire('marker_added', marker, this);

        return marker;
    };

    GMaps.prototype.addMarkers = function(array) {
        for (var i = 0, marker; marker=array[i]; i++) {
            this.addMarker(marker);
        }

        return this.markers;
    };

    GMaps.prototype.hideInfoWindows = function() {
        for (var i = 0, marker; marker = this.markers[i]; i++){
            if (marker.infoWindow) {
                marker.infoWindow.close();
            }
        }
    };

    GMaps.prototype.removeMarker = function(marker) {
        for (var i = 0; i < this.markers.length; i++) {
            if (this.markers[i] === marker) {
                this.markers[i].setMap(null);
                this.markers.splice(i, 1);

                if(this.markerClusterer) {
                    this.markerClusterer.removeMarker(marker);
                }

                GMaps.fire('marker_removed', marker, this);

                break;
            }
        }

        return marker;
    };

    GMaps.prototype.removeMarkers = function (collection) {
        var new_markers = [];

        if (typeof collection == 'undefined') {
            for (var i = 0; i < this.markers.length; i++) {
                var marker = this.markers[i];
                marker.setMap(null);

                GMaps.fire('marker_removed', marker, this);
            }

            if(this.markerClusterer && this.markerClusterer.clearMarkers) {
                this.markerClusterer.clearMarkers();
            }

            this.markers = new_markers;
        }
        else {
            for (var i = 0; i < collection.length; i++) {
                var index = this.markers.indexOf(collection[i]);

                if (index > -1) {
                    var marker = this.markers[index];
                    marker.setMap(null);

                    if(this.markerClusterer) {
                        this.markerClusterer.removeMarker(marker);
                    }

                    GMaps.fire('marker_removed', marker, this);
                }
            }

            for (var i = 0; i < this.markers.length; i++) {
                var marker = this.markers[i];
                if (marker.getMap() != null) {
                    new_markers.push(marker);
                }
            }

            this.markers = new_markers;
        }
    };

    GMaps.prototype.drawOverlay = function(options) {
        var overlay = new google.maps.OverlayView(),
            auto_show = true;

        overlay.setMap(this.map);

        if (options.auto_show != null) {
            auto_show = options.auto_show;
        }

        overlay.onAdd = function() {
            var el = document.createElement('div');

            el.style.borderStyle = "none";
            el.style.borderWidth = "0px";
            el.style.position = "absolute";
            el.style.zIndex = 100;
            el.innerHTML = options.content;

            overlay.el = el;

            if (!options.layer) {
                options.layer = 'overlayLayer';
            }

            var panes = this.getPanes(),
                overlayLayer = panes[options.layer],
                stop_overlay_events = ['contextmenu', 'DOMMouseScroll', 'dblclick', 'mousedown'];

            overlayLayer.appendChild(el);

            for (var ev = 0; ev < stop_overlay_events.length; ev++) {
                (function(object, name) {
                    google.maps.event.addDomListener(object, name, function(e){
                        if (navigator.userAgent.toLowerCase().indexOf('msie') != -1 && document.all) {
                            e.cancelBubble = true;
                            e.returnValue = false;
                        }
                        else {
                            e.stopPropagation();
                        }
                    });
                })(el, stop_overlay_events[ev]);
            }

            if (options.click) {
                panes.overlayMouseTarget.appendChild(overlay.el);
                google.maps.event.addDomListener(overlay.el, 'click', function() {
                    options.click.apply(overlay, [overlay]);
                });
            }

            google.maps.event.trigger(this, 'ready');
        };

        overlay.draw = function() {
            var projection = this.getProjection(),
                pixel = projection.fromLatLngToDivPixel(new google.maps.LatLng(options.lat, options.lng));

            options.horizontalOffset = options.horizontalOffset || 0;
            options.verticalOffset = options.verticalOffset || 0;

            var el = overlay.el,
                content = el.children[0],
                content_height = content.clientHeight,
                content_width = content.clientWidth;

            switch (options.verticalAlign) {
                case 'top':
                    el.style.top = (pixel.y - content_height + options.verticalOffset) + 'px';
                    break;
                default:
                case 'middle':
                    el.style.top = (pixel.y - (content_height / 2) + options.verticalOffset) + 'px';
                    break;
                case 'bottom':
                    el.style.top = (pixel.y + options.verticalOffset) + 'px';
                    break;
            }

            switch (options.horizontalAlign) {
                case 'left':
                    el.style.left = (pixel.x - content_width + options.horizontalOffset) + 'px';
                    break;
                default:
                case 'center':
                    el.style.left = (pixel.x - (content_width / 2) + options.horizontalOffset) + 'px';
                    break;
                case 'right':
                    el.style.left = (pixel.x + options.horizontalOffset) + 'px';
                    break;
            }

            el.style.display = auto_show ? 'block' : 'none';

            if (!auto_show) {
                options.show.apply(this, [el]);
            }
        };

        overlay.onRemove = function() {
            var el = overlay.el;

            if (options.remove) {
                options.remove.apply(this, [el]);
            }
            else {
                overlay.el.parentNode.removeChild(overlay.el);
                overlay.el = null;
            }
        };

        this.overlays.push(overlay);
        return overlay;
    };

    GMaps.prototype.removeOverlay = function(overlay) {
        for (var i = 0; i < this.overlays.length; i++) {
            if (this.overlays[i] === overlay) {
                this.overlays[i].setMap(null);
                this.overlays.splice(i, 1);

                break;
            }
        }
    };

    GMaps.prototype.removeOverlays = function() {
        for (var i = 0, item; item = this.overlays[i]; i++) {
            item.setMap(null);
        }

        this.overlays = [];
    };

    GMaps.prototype.drawPolyline = function(options) {
        var path = [],
            points = options.path;

        if (points.length) {
            if (points[0][0] === undefined) {
                path = points;
            }
            else {
                for (var i = 0, latlng; latlng = points[i]; i++) {
                    path.push(new google.maps.LatLng(latlng[0], latlng[1]));
                }
            }
        }

        var polyline_options = {
            map: this.map,
            path: path,
            strokeColor: options.strokeColor,
            strokeOpacity: options.strokeOpacity,
            strokeWeight: options.strokeWeight,
            geodesic: options.geodesic,
            clickable: true,
            editable: false,
            visible: true
        };

        if (options.hasOwnProperty("clickable")) {
            polyline_options.clickable = options.clickable;
        }

        if (options.hasOwnProperty("editable")) {
            polyline_options.editable = options.editable;
        }

        if (options.hasOwnProperty("icons")) {
            polyline_options.icons = options.icons;
        }

        if (options.hasOwnProperty("zIndex")) {
            polyline_options.zIndex = options.zIndex;
        }

        var polyline = new google.maps.Polyline(polyline_options);

        var polyline_events = ['click', 'dblclick', 'mousedown', 'mousemove', 'mouseout', 'mouseover', 'mouseup', 'rightclick'];

        for (var ev = 0; ev < polyline_events.length; ev++) {
            (function(object, name) {
                if (options[name]) {
                    google.maps.event.addListener(object, name, function(e){
                        options[name].apply(this, [e]);
                    });
                }
            })(polyline, polyline_events[ev]);
        }

        this.polylines.push(polyline);

        GMaps.fire('polyline_added', polyline, this);

        return polyline;
    };

    GMaps.prototype.removePolyline = function(polyline) {
        for (var i = 0; i < this.polylines.length; i++) {
            if (this.polylines[i] === polyline) {
                this.polylines[i].setMap(null);
                this.polylines.splice(i, 1);

                GMaps.fire('polyline_removed', polyline, this);

                break;
            }
        }
    };

    GMaps.prototype.removePolylines = function() {
        for (var i = 0, item; item = this.polylines[i]; i++) {
            item.setMap(null);
        }

        this.polylines = [];
    };

    GMaps.prototype.drawCircle = function(options) {
        options =  extend_object({
            map: this.map,
            center: new google.maps.LatLng(options.lat, options.lng)
        }, options);

        delete options.lat;
        delete options.lng;

        var polygon = new google.maps.Circle(options),
            polygon_events = ['click', 'dblclick', 'mousedown', 'mousemove', 'mouseout', 'mouseover', 'mouseup', 'rightclick'];

        for (var ev = 0; ev < polygon_events.length; ev++) {
            (function(object, name) {
                if (options[name]) {
                    google.maps.event.addListener(object, name, function(e){
                        options[name].apply(this, [e]);
                    });
                }
            })(polygon, polygon_events[ev]);
        }

        this.polygons.push(polygon);

        return polygon;
    };

    GMaps.prototype.drawRectangle = function(options) {
        options = extend_object({
            map: this.map
        }, options);

        var latLngBounds = new google.maps.LatLngBounds(
            new google.maps.LatLng(options.bounds[0][0], options.bounds[0][1]),
            new google.maps.LatLng(options.bounds[1][0], options.bounds[1][1])
        );

        options.bounds = latLngBounds;

        var polygon = new google.maps.Rectangle(options),
            polygon_events = ['click', 'dblclick', 'mousedown', 'mousemove', 'mouseout', 'mouseover', 'mouseup', 'rightclick'];

        for (var ev = 0; ev < polygon_events.length; ev++) {
            (function(object, name) {
                if (options[name]) {
                    google.maps.event.addListener(object, name, function(e){
                        options[name].apply(this, [e]);
                    });
                }
            })(polygon, polygon_events[ev]);
        }

        this.polygons.push(polygon);

        return polygon;
    };

    GMaps.prototype.drawPolygon = function(options) {
        var useGeoJSON = false;

        if(options.hasOwnProperty("useGeoJSON")) {
            useGeoJSON = options.useGeoJSON;
        }

        delete options.useGeoJSON;

        options = extend_object({
            map: this.map
        }, options);

        if (useGeoJSON == false) {
            options.paths = [options.paths.slice(0)];
        }

        if (options.paths.length > 0) {
            if (options.paths[0].length > 0) {
                options.paths = array_flat(array_map(options.paths, arrayToLatLng, useGeoJSON));
            }
        }

        var polygon = new google.maps.Polygon(options),
            polygon_events = ['click', 'dblclick', 'mousedown', 'mousemove', 'mouseout', 'mouseover', 'mouseup', 'rightclick'];

        for (var ev = 0; ev < polygon_events.length; ev++) {
            (function(object, name) {
                if (options[name]) {
                    google.maps.event.addListener(object, name, function(e){
                        options[name].apply(this, [e]);
                    });
                }
            })(polygon, polygon_events[ev]);
        }

        this.polygons.push(polygon);

        GMaps.fire('polygon_added', polygon, this);

        return polygon;
    };

    GMaps.prototype.removePolygon = function(polygon) {
        for (var i = 0; i < this.polygons.length; i++) {
            if (this.polygons[i] === polygon) {
                this.polygons[i].setMap(null);
                this.polygons.splice(i, 1);

                GMaps.fire('polygon_removed', polygon, this);

                break;
            }
        }
    };

    GMaps.prototype.removePolygons = function() {
        for (var i = 0, item; item = this.polygons[i]; i++) {
            item.setMap(null);
        }

        this.polygons = [];
    };

    GMaps.prototype.getFromFusionTables = function(options) {
        var events = options.events;

        delete options.events;

        var fusion_tables_options = options,
            layer = new google.maps.FusionTablesLayer(fusion_tables_options);

        for (var ev in events) {
            (function(object, name) {
                google.maps.event.addListener(object, name, function(e) {
                    events[name].apply(this, [e]);
                });
            })(layer, ev);
        }

        this.layers.push(layer);

        return layer;
    };

    GMaps.prototype.loadFromFusionTables = function(options) {
        var layer = this.getFromFusionTables(options);
        layer.setMap(this.map);

        return layer;
    };

    GMaps.prototype.getFromKML = function(options) {
        var url = options.url,
            events = options.events;

        delete options.url;
        delete options.events;

        var kml_options = options,
            layer = new google.maps.KmlLayer(url, kml_options);

        for (var ev in events) {
            (function(object, name) {
                google.maps.event.addListener(object, name, function(e) {
                    events[name].apply(this, [e]);
                });
            })(layer, ev);
        }

        this.layers.push(layer);

        return layer;
    };

    GMaps.prototype.loadFromKML = function(options) {
        var layer = this.getFromKML(options);
        layer.setMap(this.map);

        return layer;
    };

    GMaps.prototype.addLayer = function(layerName, options) {
        //var default_layers = ['weather', 'clouds', 'traffic', 'transit', 'bicycling', 'panoramio', 'places'];
        options = options || {};
        var layer;

        switch(layerName) {
            case 'weather': this.singleLayers.weather = layer = new google.maps.weather.WeatherLayer();
                break;
            case 'clouds': this.singleLayers.clouds = layer = new google.maps.weather.CloudLayer();
                break;
            case 'traffic': this.singleLayers.traffic = layer = new google.maps.TrafficLayer();
                break;
            case 'transit': this.singleLayers.transit = layer = new google.maps.TransitLayer();
                break;
            case 'bicycling': this.singleLayers.bicycling = layer = new google.maps.BicyclingLayer();
                break;
            case 'panoramio':
                this.singleLayers.panoramio = layer = new google.maps.panoramio.PanoramioLayer();
                layer.setTag(options.filter);
                delete options.filter;

                //click event
                if (options.click) {
                    google.maps.event.addListener(layer, 'click', function(event) {
                        options.click(event);
                        delete options.click;
                    });
                }
                break;
            case 'places':
                this.singleLayers.places = layer = new google.maps.places.PlacesService(this.map);

                //search, nearbySearch, radarSearch callback, Both are the same
                if (options.search || options.nearbySearch || options.radarSearch) {
                    var placeSearchRequest  = {
                        bounds : options.bounds || null,
                        keyword : options.keyword || null,
                        location : options.location || null,
                        name : options.name || null,
                        radius : options.radius || null,
                        rankBy : options.rankBy || null,
                        types : options.types || null
                    };

                    if (options.radarSearch) {
                        layer.radarSearch(placeSearchRequest, options.radarSearch);
                    }

                    if (options.search) {
                        layer.search(placeSearchRequest, options.search);
                    }

                    if (options.nearbySearch) {
                        layer.nearbySearch(placeSearchRequest, options.nearbySearch);
                    }
                }

                //textSearch callback
                if (options.textSearch) {
                    var textSearchRequest  = {
                        bounds : options.bounds || null,
                        location : options.location || null,
                        query : options.query || null,
                        radius : options.radius || null
                    };

                    layer.textSearch(textSearchRequest, options.textSearch);
                }
                break;
        }

        if (layer !== undefined) {
            if (typeof layer.setOptions == 'function') {
                layer.setOptions(options);
            }
            if (typeof layer.setMap == 'function') {
                layer.setMap(this.map);
            }

            return layer;
        }
    };

    GMaps.prototype.removeLayer = function(layer) {
        if (typeof(layer) == "string" && this.singleLayers[layer] !== undefined) {
            this.singleLayers[layer].setMap(null);

            delete this.singleLayers[layer];
        }
        else {
            for (var i = 0; i < this.layers.length; i++) {
                if (this.layers[i] === layer) {
                    this.layers[i].setMap(null);
                    this.layers.splice(i, 1);

                    break;
                }
            }
        }
    };

    var travelMode, unitSystem;

    GMaps.prototype.getRoutes = function(options) {
        switch (options.travelMode) {
            case 'bicycling':
                travelMode = google.maps.TravelMode.BICYCLING;
                break;
            case 'transit':
                travelMode = google.maps.TravelMode.TRANSIT;
                break;
            case 'driving':
                travelMode = google.maps.TravelMode.DRIVING;
                break;
            default:
                travelMode = google.maps.TravelMode.WALKING;
                break;
        }

        if (options.unitSystem === 'imperial') {
            unitSystem = google.maps.UnitSystem.IMPERIAL;
        }
        else {
            unitSystem = google.maps.UnitSystem.METRIC;
        }

        var base_options = {
                avoidHighways: false,
                avoidTolls: false,
                optimizeWaypoints: false,
                waypoints: []
            },
            request_options =  extend_object(base_options, options);

        request_options.origin = /string/.test(typeof options.origin) ? options.origin : new google.maps.LatLng(options.origin[0], options.origin[1]);
        request_options.destination = /string/.test(typeof options.destination) ? options.destination : new google.maps.LatLng(options.destination[0], options.destination[1]);
        request_options.travelMode = travelMode;
        request_options.unitSystem = unitSystem;

        delete request_options.callback;
        delete request_options.error;

        var self = this,
            routes = [],
            service = new google.maps.DirectionsService();

        service.route(request_options, function(result, status) {
            if (status === google.maps.DirectionsStatus.OK) {
                for (var r in result.routes) {
                    if (result.routes.hasOwnProperty(r)) {
                        routes.push(result.routes[r]);
                    }
                }

                if (options.callback) {
                    options.callback(routes, result, status);
                }
            }
            else {
                if (options.error) {
                    options.error(result, status);
                }
            }
        });
    };

    GMaps.prototype.removeRoutes = function() {
        this.routes.length = 0;
    };

    GMaps.prototype.getElevations = function(options) {
        options = extend_object({
            locations: [],
            path : false,
            samples : 256
        }, options);

        if (options.locations.length > 0) {
            if (options.locations[0].length > 0) {
                options.locations = array_flat(array_map([options.locations], arrayToLatLng,  false));
            }
        }

        var callback = options.callback;
        delete options.callback;

        var service = new google.maps.ElevationService();

        //location request
        if (!options.path) {
            delete options.path;
            delete options.samples;

            service.getElevationForLocations(options, function(result, status) {
                if (callback && typeof(callback) === "function") {
                    callback(result, status);
                }
            });
            //path request
        } else {
            var pathRequest = {
                path : options.locations,
                samples : options.samples
            };

            service.getElevationAlongPath(pathRequest, function(result, status) {
                if (callback && typeof(callback) === "function") {
                    callback(result, status);
                }
            });
        }
    };

    GMaps.prototype.cleanRoute = GMaps.prototype.removePolylines;

    GMaps.prototype.renderRoute = function(options, renderOptions) {
        var self = this,
            panel = ((typeof renderOptions.panel === 'string') ? document.getElementById(renderOptions.panel.replace('#', '')) : renderOptions.panel),
            display;

        renderOptions.panel = panel;
        renderOptions = extend_object({
            map: this.map
        }, renderOptions);
        display = new google.maps.DirectionsRenderer(renderOptions);

        this.getRoutes({
            origin: options.origin,
            destination: options.destination,
            travelMode: options.travelMode,
            waypoints: options.waypoints,
            unitSystem: options.unitSystem,
            error: options.error,
            avoidHighways: options.avoidHighways,
            avoidTolls: options.avoidTolls,
            optimizeWaypoints: options.optimizeWaypoints,
            callback: function(routes, response, status) {
                if (status === google.maps.DirectionsStatus.OK) {
                    display.setDirections(response);
                }
            }
        });
    };

    GMaps.prototype.drawRoute = function(options) {
        var self = this;

        this.getRoutes({
            origin: options.origin,
            destination: options.destination,
            travelMode: options.travelMode,
            waypoints: options.waypoints,
            unitSystem: options.unitSystem,
            error: options.error,
            avoidHighways: options.avoidHighways,
            avoidTolls: options.avoidTolls,
            optimizeWaypoints: options.optimizeWaypoints,
            callback: function(routes) {
                if (routes.length > 0) {
                    var polyline_options = {
                        path: routes[routes.length - 1].overview_path,
                        strokeColor: options.strokeColor,
                        strokeOpacity: options.strokeOpacity,
                        strokeWeight: options.strokeWeight
                    };

                    if (options.hasOwnProperty("icons")) {
                        polyline_options.icons = options.icons;
                    }

                    self.drawPolyline(polyline_options);

                    if (options.callback) {
                        options.callback(routes[routes.length - 1]);
                    }
                }
            }
        });
    };

    GMaps.prototype.travelRoute = function(options) {
        if (options.origin && options.destination) {
            this.getRoutes({
                origin: options.origin,
                destination: options.destination,
                travelMode: options.travelMode,
                waypoints : options.waypoints,
                unitSystem: options.unitSystem,
                error: options.error,
                callback: function(e) {
                    //start callback
                    if (e.length > 0 && options.start) {
                        options.start(e[e.length - 1]);
                    }

                    //step callback
                    if (e.length > 0 && options.step) {
                        var route = e[e.length - 1];
                        if (route.legs.length > 0) {
                            var steps = route.legs[0].steps;
                            for (var i = 0, step; step = steps[i]; i++) {
                                step.step_number = i;
                                options.step(step, (route.legs[0].steps.length - 1));
                            }
                        }
                    }

                    //end callback
                    if (e.length > 0 && options.end) {
                        options.end(e[e.length - 1]);
                    }
                }
            });
        }
        else if (options.route) {
            if (options.route.legs.length > 0) {
                var steps = options.route.legs[0].steps;
                for (var i = 0, step; step = steps[i]; i++) {
                    step.step_number = i;
                    options.step(step);
                }
            }
        }
    };

    GMaps.prototype.drawSteppedRoute = function(options) {
        var self = this;

        if (options.origin && options.destination) {
            this.getRoutes({
                origin: options.origin,
                destination: options.destination,
                travelMode: options.travelMode,
                waypoints : options.waypoints,
                error: options.error,
                callback: function(e) {
                    //start callback
                    if (e.length > 0 && options.start) {
                        options.start(e[e.length - 1]);
                    }

                    //step callback
                    if (e.length > 0 && options.step) {
                        var route = e[e.length - 1];
                        if (route.legs.length > 0) {
                            var steps = route.legs[0].steps;
                            for (var i = 0, step; step = steps[i]; i++) {
                                step.step_number = i;
                                var polyline_options = {
                                    path: step.path,
                                    strokeColor: options.strokeColor,
                                    strokeOpacity: options.strokeOpacity,
                                    strokeWeight: options.strokeWeight
                                };

                                if (options.hasOwnProperty("icons")) {
                                    polyline_options.icons = options.icons;
                                }

                                self.drawPolyline(polyline_options);
                                options.step(step, (route.legs[0].steps.length - 1));
                            }
                        }
                    }

                    //end callback
                    if (e.length > 0 && options.end) {
                        options.end(e[e.length - 1]);
                    }
                }
            });
        }
        else if (options.route) {
            if (options.route.legs.length > 0) {
                var steps = options.route.legs[0].steps;
                for (var i = 0, step; step = steps[i]; i++) {
                    step.step_number = i;
                    var polyline_options = {
                        path: step.path,
                        strokeColor: options.strokeColor,
                        strokeOpacity: options.strokeOpacity,
                        strokeWeight: options.strokeWeight
                    };

                    if (options.hasOwnProperty("icons")) {
                        polyline_options.icons = options.icons;
                    }

                    self.drawPolyline(polyline_options);
                    options.step(step);
                }
            }
        }
    };

    GMaps.Route = function(options) {
        this.origin = options.origin;
        this.destination = options.destination;
        this.waypoints = options.waypoints;

        this.map = options.map;
        this.route = options.route;
        this.step_count = 0;
        this.steps = this.route.legs[0].steps;
        this.steps_length = this.steps.length;

        var polyline_options = {
            path: new google.maps.MVCArray(),
            strokeColor: options.strokeColor,
            strokeOpacity: options.strokeOpacity,
            strokeWeight: options.strokeWeight
        };

        if (options.hasOwnProperty("icons")) {
            polyline_options.icons = options.icons;
        }

        this.polyline = this.map.drawPolyline(polyline_options).getPath();
    };

    GMaps.Route.prototype.getRoute = function(options) {
        var self = this;

        this.map.getRoutes({
            origin : this.origin,
            destination : this.destination,
            travelMode : options.travelMode,
            waypoints : this.waypoints || [],
            error: options.error,
            callback : function() {
                self.route = e[0];

                if (options.callback) {
                    options.callback.call(self);
                }
            }
        });
    };

    GMaps.Route.prototype.back = function() {
        if (this.step_count > 0) {
            this.step_count--;
            var path = this.route.legs[0].steps[this.step_count].path;

            for (var p in path){
                if (path.hasOwnProperty(p)){
                    this.polyline.pop();
                }
            }
        }
    };

    GMaps.Route.prototype.forward = function() {
        if (this.step_count < this.steps_length) {
            var path = this.route.legs[0].steps[this.step_count].path;

            for (var p in path){
                if (path.hasOwnProperty(p)){
                    this.polyline.push(path[p]);
                }
            }
            this.step_count++;
        }
    };

    GMaps.prototype.checkGeofence = function(lat, lng, fence) {
        return fence.containsLatLng(new google.maps.LatLng(lat, lng));
    };

    GMaps.prototype.checkMarkerGeofence = function(marker, outside_callback) {
        if (marker.fences) {
            for (var i = 0, fence; fence = marker.fences[i]; i++) {
                var pos = marker.getPosition();
                if (!this.checkGeofence(pos.lat(), pos.lng(), fence)) {
                    outside_callback(marker, fence);
                }
            }
        }
    };

    GMaps.prototype.toImage = function(options) {
        var options = options || {},
            static_map_options = {};

        static_map_options['size'] = options['size'] || [this.el.clientWidth, this.el.clientHeight];
        static_map_options['lat'] = this.getCenter().lat();
        static_map_options['lng'] = this.getCenter().lng();

        if (this.markers.length > 0) {
            static_map_options['markers'] = [];

            for (var i = 0; i < this.markers.length; i++) {
                static_map_options['markers'].push({
                    lat: this.markers[i].getPosition().lat(),
                    lng: this.markers[i].getPosition().lng()
                });
            }
        }

        if (this.polylines.length > 0) {
            var polyline = this.polylines[0];

            static_map_options['polyline'] = {};
            static_map_options['polyline']['path'] = google.maps.geometry.encoding.encodePath(polyline.getPath());
            static_map_options['polyline']['strokeColor'] = polyline.strokeColor
            static_map_options['polyline']['strokeOpacity'] = polyline.strokeOpacity
            static_map_options['polyline']['strokeWeight'] = polyline.strokeWeight
        }

        return GMaps.staticMapURL(static_map_options);
    };

    GMaps.staticMapURL = function(options){
        var parameters = [],
            data,
            static_root = (location.protocol === 'file:' ? 'http:' : location.protocol ) + '//maps.googleapis.com/maps/api/staticmap';

        if (options.url) {
            static_root = options.url;
            delete options.url;
        }

        static_root += '?';

        var markers = options.markers;

        delete options.markers;

        if (!markers && options.marker) {
            markers = [options.marker];
            delete options.marker;
        }

        var styles = options.styles;

        delete options.styles;

        var polyline = options.polyline;
        delete options.polyline;

        /** Map options **/
        if (options.center) {
            parameters.push('center=' + options.center);
            delete options.center;
        }
        else if (options.address) {
            parameters.push('center=' + options.address);
            delete options.address;
        }
        else if (options.lat) {
            parameters.push(['center=', options.lat, ',', options.lng].join(''));
            delete options.lat;
            delete options.lng;
        }
        else if (options.visible) {
            var visible = encodeURI(options.visible.join('|'));
            parameters.push('visible=' + visible);
        }

        var size = options.size;
        if (size) {
            if (size.join) {
                size = size.join('x');
            }
            delete options.size;
        }
        else {
            size = '630x300';
        }
        parameters.push('size=' + size);

        if (!options.zoom && options.zoom !== false) {
            options.zoom = 15;
        }

        var sensor = options.hasOwnProperty('sensor') ? !!options.sensor : true;
        delete options.sensor;
        parameters.push('sensor=' + sensor);

        for (var param in options) {
            if (options.hasOwnProperty(param)) {
                parameters.push(param + '=' + options[param]);
            }
        }

        /** Markers **/
        if (markers) {
            var marker, loc;

            for (var i = 0; data = markers[i]; i++) {
                marker = [];

                if (data.size && data.size !== 'normal') {
                    marker.push('size:' + data.size);
                    delete data.size;
                }
                else if (data.icon) {
                    marker.push('icon:' + encodeURI(data.icon));
                    delete data.icon;
                }

                if (data.color) {
                    marker.push('color:' + data.color.replace('#', '0x'));
                    delete data.color;
                }

                if (data.label) {
                    marker.push('label:' + data.label[0].toUpperCase());
                    delete data.label;
                }

                loc = (data.address ? data.address : data.lat + ',' + data.lng);
                delete data.address;
                delete data.lat;
                delete data.lng;

                for(var param in data){
                    if (data.hasOwnProperty(param)) {
                        marker.push(param + ':' + data[param]);
                    }
                }

                if (marker.length || i === 0) {
                    marker.push(loc);
                    marker = marker.join('|');
                    parameters.push('markers=' + encodeURI(marker));
                }
                // New marker without styles
                else {
                    marker = parameters.pop() + encodeURI('|' + loc);
                    parameters.push(marker);
                }
            }
        }

        /** Map Styles **/
        if (styles) {
            for (var i = 0; i < styles.length; i++) {
                var styleRule = [];
                if (styles[i].featureType){
                    styleRule.push('feature:' + styles[i].featureType.toLowerCase());
                }

                if (styles[i].elementType) {
                    styleRule.push('element:' + styles[i].elementType.toLowerCase());
                }

                for (var j = 0; j < styles[i].stylers.length; j++) {
                    for (var p in styles[i].stylers[j]) {
                        var ruleArg = styles[i].stylers[j][p];
                        if (p == 'hue' || p == 'color') {
                            ruleArg = '0x' + ruleArg.substring(1);
                        }
                        styleRule.push(p + ':' + ruleArg);
                    }
                }

                var rule = styleRule.join('|');
                if (rule != '') {
                    parameters.push('style=' + rule);
                }
            }
        }

        /** Polylines **/
        function parseColor(color, opacity) {
            if (color[0] === '#'){
                color = color.replace('#', '0x');

                if (opacity) {
                    opacity = parseFloat(opacity);
                    opacity = Math.min(1, Math.max(opacity, 0));
                    if (opacity === 0) {
                        return '0x00000000';
                    }
                    opacity = (opacity * 255).toString(16);
                    if (opacity.length === 1) {
                        opacity += opacity;
                    }

                    color = color.slice(0,8) + opacity;
                }
            }
            return color;
        }

        if (polyline) {
            data = polyline;
            polyline = [];

            if (data.strokeWeight) {
                polyline.push('weight:' + parseInt(data.strokeWeight, 10));
            }

            if (data.strokeColor) {
                var color = parseColor(data.strokeColor, data.strokeOpacity);
                polyline.push('color:' + color);
            }

            if (data.fillColor) {
                var fillcolor = parseColor(data.fillColor, data.fillOpacity);
                polyline.push('fillcolor:' + fillcolor);
            }

            var path = data.path;
            if (path.join) {
                for (var j=0, pos; pos=path[j]; j++) {
                    polyline.push(pos.join(','));
                }
            }
            else {
                polyline.push('enc:' + path);
            }

            polyline = polyline.join('|');
            parameters.push('path=' + encodeURI(polyline));
        }

        /** Retina support **/
        var dpi = window.devicePixelRatio || 1;
        parameters.push('scale=' + dpi);

        parameters = parameters.join('&');
        return static_root + parameters;
    };

    GMaps.prototype.addMapType = function(mapTypeId, options) {
        if (options.hasOwnProperty("getTileUrl") && typeof(options["getTileUrl"]) == "function") {
            options.tileSize = options.tileSize || new google.maps.Size(256, 256);

            var mapType = new google.maps.ImageMapType(options);

            this.map.mapTypes.set(mapTypeId, mapType);
        }
        else {
            throw "'getTileUrl' function required.";
        }
    };

    GMaps.prototype.addOverlayMapType = function(options) {
        if (options.hasOwnProperty("getTile") && typeof(options["getTile"]) == "function") {
            var overlayMapTypeIndex = options.index;

            delete options.index;

            this.map.overlayMapTypes.insertAt(overlayMapTypeIndex, options);
        }
        else {
            throw "'getTile' function required.";
        }
    };

    GMaps.prototype.removeOverlayMapType = function(overlayMapTypeIndex) {
        this.map.overlayMapTypes.removeAt(overlayMapTypeIndex);
    };

    GMaps.prototype.addStyle = function(options) {
        var styledMapType = new google.maps.StyledMapType(options.styles, { name: options.styledMapName });

        this.map.mapTypes.set(options.mapTypeId, styledMapType);
    };

    GMaps.prototype.setStyle = function(mapTypeId) {
        this.map.setMapTypeId(mapTypeId);
    };

    GMaps.prototype.createPanorama = function(streetview_options) {
        if (!streetview_options.hasOwnProperty('lat') || !streetview_options.hasOwnProperty('lng')) {
            streetview_options.lat = this.getCenter().lat();
            streetview_options.lng = this.getCenter().lng();
        }

        this.panorama = GMaps.createPanorama(streetview_options);

        this.map.setStreetView(this.panorama);

        return this.panorama;
    };

    GMaps.createPanorama = function(options) {
        var el = getElementById(options.el, options.context);

        options.position = new google.maps.LatLng(options.lat, options.lng);

        delete options.el;
        delete options.context;
        delete options.lat;
        delete options.lng;

        var streetview_events = ['closeclick', 'links_changed', 'pano_changed', 'position_changed', 'pov_changed', 'resize', 'visible_changed'],
            streetview_options = extend_object({visible : true}, options);

        for (var i = 0; i < streetview_events.length; i++) {
            delete streetview_options[streetview_events[i]];
        }

        var panorama = new google.maps.StreetViewPanorama(el, streetview_options);

        for (var i = 0; i < streetview_events.length; i++) {
            (function(object, name) {
                if (options[name]) {
                    google.maps.event.addListener(object, name, function(){
                        options[name].apply(this);
                    });
                }
            })(panorama, streetview_events[i]);
        }

        return panorama;
    };

    GMaps.prototype.on = function(event_name, handler) {
        return GMaps.on(event_name, this, handler);
    };

    GMaps.prototype.off = function(event_name) {
        GMaps.off(event_name, this);
    };

    GMaps.prototype.once = function(event_name, handler) {
        return GMaps.once(event_name, this, handler);
    };

    GMaps.custom_events = ['marker_added', 'marker_removed', 'polyline_added', 'polyline_removed', 'polygon_added', 'polygon_removed', 'geolocated', 'geolocation_failed'];

    GMaps.on = function(event_name, object, handler) {
        if (GMaps.custom_events.indexOf(event_name) == -1) {
            if(object instanceof GMaps) object = object.map;
            return google.maps.event.addListener(object, event_name, handler);
        }
        else {
            var registered_event = {
                handler : handler,
                eventName : event_name
            };

            object.registered_events[event_name] = object.registered_events[event_name] || [];
            object.registered_events[event_name].push(registered_event);

            return registered_event;
        }
    };

    GMaps.off = function(event_name, object) {
        if (GMaps.custom_events.indexOf(event_name) == -1) {
            if(object instanceof GMaps) object = object.map;
            google.maps.event.clearListeners(object, event_name);
        }
        else {
            object.registered_events[event_name] = [];
        }
    };

    GMaps.once = function(event_name, object, handler) {
        if (GMaps.custom_events.indexOf(event_name) == -1) {
            if(object instanceof GMaps) object = object.map;
            return google.maps.event.addListenerOnce(object, event_name, handler);
        }
    };

    GMaps.fire = function(event_name, object, scope) {
        if (GMaps.custom_events.indexOf(event_name) == -1) {
            google.maps.event.trigger(object, event_name, Array.prototype.slice.apply(arguments).slice(2));
        }
        else {
            if(event_name in scope.registered_events) {
                var firing_events = scope.registered_events[event_name];

                for(var i = 0; i < firing_events.length; i++) {
                    (function(handler, scope, object) {
                        handler.apply(scope, [object]);
                    })(firing_events[i]['handler'], scope, object);
                }
            }
        }
    };

    GMaps.geolocate = function(options) {
        var complete_callback = options.always || options.complete;

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                options.success(position);

                if (complete_callback) {
                    complete_callback();
                }
            }, function(error) {
                options.error(error);

                if (complete_callback) {
                    complete_callback();
                }
            }, options.options);
        }
        else {
            options.not_supported();

            if (complete_callback) {
                complete_callback();
            }
        }
    };

    GMaps.geocode = function(options) {
        this.geocoder = new google.maps.Geocoder();
        var callback = options.callback;
        if (options.hasOwnProperty('lat') && options.hasOwnProperty('lng')) {
            options.latLng = new google.maps.LatLng(options.lat, options.lng);
        }

        delete options.lat;
        delete options.lng;
        delete options.callback;

        this.geocoder.geocode(options, function(results, status) {
            callback(results, status);
        });
    };

    if (typeof window.google === 'object' && window.google.maps) {
        //==========================
        // Polygon containsLatLng
        // https://github.com/tparkin/Google-Maps-Point-in-Polygon
        // Poygon getBounds extension - google-maps-extensions
        // http://code.google.com/p/google-maps-extensions/source/browse/google.maps.Polygon.getBounds.js
        if (!google.maps.Polygon.prototype.getBounds) {
            google.maps.Polygon.prototype.getBounds = function(latLng) {
                var bounds = new google.maps.LatLngBounds();
                var paths = this.getPaths();
                var path;

                for (var p = 0; p < paths.getLength(); p++) {
                    path = paths.getAt(p);
                    for (var i = 0; i < path.getLength(); i++) {
                        bounds.extend(path.getAt(i));
                    }
                }

                return bounds;
            };
        }

        if (!google.maps.Polygon.prototype.containsLatLng) {
            // Polygon containsLatLng - method to determine if a latLng is within a polygon
            google.maps.Polygon.prototype.containsLatLng = function(latLng) {
                // Exclude points outside of bounds as there is no way they are in the poly
                var bounds = this.getBounds();

                if (bounds !== null && !bounds.contains(latLng)) {
                    return false;
                }

                // Raycast point in polygon method
                var inPoly = false;

                var numPaths = this.getPaths().getLength();
                for (var p = 0; p < numPaths; p++) {
                    var path = this.getPaths().getAt(p);
                    var numPoints = path.getLength();
                    var j = numPoints - 1;

                    for (var i = 0; i < numPoints; i++) {
                        var vertex1 = path.getAt(i);
                        var vertex2 = path.getAt(j);

                        if (vertex1.lng() < latLng.lng() && vertex2.lng() >= latLng.lng() || vertex2.lng() < latLng.lng() && vertex1.lng() >= latLng.lng()) {
                            if (vertex1.lat() + (latLng.lng() - vertex1.lng()) / (vertex2.lng() - vertex1.lng()) * (vertex2.lat() - vertex1.lat()) < latLng.lat()) {
                                inPoly = !inPoly;
                            }
                        }

                        j = i;
                    }
                }

                return inPoly;
            };
        }

        if (!google.maps.Circle.prototype.containsLatLng) {
            google.maps.Circle.prototype.containsLatLng = function(latLng) {
                if (google.maps.geometry) {
                    return google.maps.geometry.spherical.computeDistanceBetween(this.getCenter(), latLng) <= this.getRadius();
                }
                else {
                    return true;
                }
            };
        }

        google.maps.Rectangle.prototype.containsLatLng = function(latLng) {
            return this.getBounds().contains(latLng);
        };

        google.maps.LatLngBounds.prototype.containsLatLng = function(latLng) {
            return this.contains(latLng);
        };

        google.maps.Marker.prototype.setFences = function(fences) {
            this.fences = fences;
        };

        google.maps.Marker.prototype.addFence = function(fence) {
            this.fences.push(fence);
        };

        google.maps.Marker.prototype.getId = function() {
            return this['__gm_id'];
        };
    }

//==========================
// Array indexOf
// https://developer.mozilla.org/en-US/docs/JavaScript/Reference/Global_Objects/Array/indexOf
    if (!Array.prototype.indexOf) {
        Array.prototype.indexOf = function (searchElement /*, fromIndex */ ) {
            "use strict";
            if (this == null) {
                throw new TypeError();
            }
            var t = Object(this);
            var len = t.length >>> 0;
            if (len === 0) {
                return -1;
            }
            var n = 0;
            if (arguments.length > 1) {
                n = Number(arguments[1]);
                if (n != n) { // shortcut for verifying if it's NaN
                    n = 0;
                } else if (n != 0 && n != Infinity && n != -Infinity) {
                    n = (n > 0 || -1) * Math.floor(Math.abs(n));
                }
            }
            if (n >= len) {
                return -1;
            }
            var k = n >= 0 ? n : Math.max(len - Math.abs(n), 0);
            for (; k < len; k++) {
                if (k in t && t[k] === searchElement) {
                    return k;
                }
            }
            return -1;
        }
    }

    return GMaps;
}));
!function(t,n,e,i){if(!t)return console.error("jQuery no encontrado, su plugin jQuery no está funcionando."),!1;!function(){for(var t=0,e=["ms","moz","webkit","o"],i=0;i<e.length&&!n.requestAnimationFrame;++i)n.requestAnimationFrame=n[e[i]+"RequestAnimationFrame"],n.cancelAnimationFrame=n[e[i]+"CancelAnimationFrame"]||n[e[i]+"CancelRequestAnimationFrame"];n.requestAnimationFrame||(n.requestAnimationFrame=function(e,i){var a=(new Date).getTime(),o=Math.max(0,16-(a-t)),r=n.setTimeout(function(){e(a+o)},o);return t=a+o,r}),n.cancelAnimationFrame||(n.cancelAnimationFrame=function(t){clearTimeout(t)})}();var a="parallax",o={on:"scroll",listenTo:n,sceneMode:!1},r=t(n),s=0;function l(n,e){this._name=a,this._instance_id=++s,this.el=n,this.$el=t(n),this.settings=t.extend(!1,{},o,e,this.$el.data()),this.$triggerOrigin=t(this.settings.listenTo),this.init()}t.extend(l.prototype,{init:function(){var t=this;this.$triggerOrigin.on(t.settings.on+"."+t._name,function(){t.parallaxTranslate()}),t.parallaxTranslate()},parallaxTranslate:function(){var t=this;t.inScreen()&&n.requestAnimationFrame(function(){var n=r.scrollTop()-t.$el.offset().top;t.$el.css("transform","translateY("+n/2+"px)")}),console.groupEnd()},destroy:function(){this.$el.removeData(),t(this.settings.listenTo).off("."+a)},somePublicMethod:function(t,n){privateMethod.call(this)},inScreen:function(n){var e;"boolean"!=typeof n&&n!==i?(e=t(n),n=arguments[1]||!1):(e=this.$el,n=n||!1);var a=r.scrollTop(),o=a+r.height(),s=e.offset().top,l=s+e.height();return!0===n?a<=s&&o>=l:!(a>l||o<s)}}),t.fn[a]=function(n){var e=arguments;return n===i||"object"==typeof n?this.each(function(){t.data(this,"plugin_"+a)||t.data(this,"plugin_"+a,new l(this,n))}):"string"==typeof n&&"init"!==n?this.each(function(){var i=t.data(this,"plugin_"+a);i instanceof l&&"function"==typeof i[n]&&i[n].apply(i,Array.prototype.slice.call(e,1))}):void 0}}(window.jQuery||!1,window,document);
;(function(){
    "use strict";
    
    $('.hero-slider').flexslider({
        animation: "fade",
        directionNav: false, //remove the default direction-nav - https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties
        controlNav: false, //remove the default control-nav
        slideshowSpeed: 4000,
        start: function(){
             $(this).find('.slide').css("display", "block"); //prevent flash of the images
        },
    });
    
    /*========= overview_slider js =========*/
    
    function overviewSlider(){
        if( $(".overview_slider").length){
            $(".overview_slider").owlCarousel({
                loop:true,
                margin:30,
                items:1,
                autoplay:true,
                smartSpeed:500,
                animateOut: 'fadeOut',
                nav: false,
            })
        }
    }
    overviewSlider();
    
    /* ===== Parallax Effect ===== */
	function parallaxEffect() {
    	$('.parallax-effect').parallax();
	}
    parallaxEffect();
    
     /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/
	
	var nav_offset_top = $('#sticky_height').height(); 
	
	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.middle_menu_nav').length ){ 
            if($(window).width()>768){
                $(window).on('scroll', function() {
                    var scroll = $(window).scrollTop();   
                    if (scroll >= nav_offset_top ) {
                        $(".middle_menu_nav").addClass("navbar_fixed");
                    } else {
                        $(".middle_menu_nav").removeClass("navbar_fixed");
                    }
                });
            }
        };
    };
    navbarFixed();
    
    $(' #page-nav-wrapper .nav li a[href^="#"]:not([href="#"]').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 60
        }, 1500);
        event.preventDefault();
    });
    
    
    /* ======= Toggle between Signup & Login & ResetPass Modals ======= */ 
    $('#signup-link').on('click', function() {
        $('#login-modal').modal('toggle');
        $('#signup-modal').modal();
        
        e.preventDefault();
    });
    
    $('#login-link').on('click', function() {
        $('#signup-modal').modal('toggle');
        $('#login-modal').modal();
        
        e.preventDefault();
    });
    
    $('#back-to-login-link').on('click', function() {
        $('#resetpass-modal').modal('toggle');
        $('#login-modal').modal();
        
        e.preventDefault();
    });
    
    $('#resetpass-link').on('click', function() {
        $('#login-modal').modal('hide');
        e.preventDefault();
    });
    
    /*---------------navbar js ---------------*/
    $('.scrollto').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 60
        }, 1500);
        event.preventDefault();
    });
    
    /* ======= Stop Video Playing When Close the Modal Window ====== */
    $("#modal-video .close").on("click", function() {
        $("#modal-video iframe").attr("src", $("#modal-video iframe").attr("src"));        
    });
    
    /* ======= Play/Stop YouTube/Vimeo Video in Bootstrpa Modal ======= */

    $('.play-trigger').on('click', function() {
        var theModal = $(this).data("target");
        var theVideo = $(theModal + ' iframe').attr('src');
        var theVideoAuto = theVideo + "&amp;autoplay=1";
        
        $(theModal).on('shown.bs.modal', function () {
            $(theModal + ' iframe').attr('src', theVideoAuto);
        });
        
        $(theModal).on('hide.bs.modal', function () {
            $(theModal + ' iframe').attr('src', '');
        });
        
        $(theModal).on('hidden.bs.modal', function () {
            $(theModal + ' iframe').attr('src', theVideo);
        });
 
    });
    
    
    /* ======= MAPS ======= */
    if ( $('#mapBox').length ) {
        var $lat = $('#mapBox').data('lat');
        var $lon = $('#mapBox').data('lon');
        var $zoom = $('#mapBox').data('zoom');
        var $marker = $('#mapBox').data('marker');
        var $info = $('#mapBox').data('info');
        var $markerLat = $('#mapBox').data('mlat');
        var $markerLon = $('#mapBox').data('mlon');
        var map = new GMaps({
            el: '#mapBox',
            lat: $lat,
            lng: $lon,
            scrollwheel: false,
            scaleControl: true,
            streetViewControl: false,
            panControl: true,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            zoom: $zoom,
                styles: [
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#dcdfe6"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "stylers": [
                            {
                                "color": "#808080"
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#dcdfe6"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "weight": 1.8
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#d7d7d7"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ebebeb"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#a7a7a7"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#efefef"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#696969"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#737373"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#d6d6d6"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {},
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#dadada"
                            }
                        ]
                    }
                ]
            });
    }
    
})(jQuery)