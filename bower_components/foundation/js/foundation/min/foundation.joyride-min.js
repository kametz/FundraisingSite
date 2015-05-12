!function($,t,s,i){"use strict";var e=e||!1;Foundation.libs.joyride={name:"joyride",version:"5.5.2",defaults:{expose:!1,modal:!0,keyboard:!0,tip_location:"bottom",nub_position:"auto",scroll_speed:1500,scroll_animation:"linear",timer:0,start_timer_on_click:!0,start_offset:0,next_button:!0,prev_button:!0,tip_animation:"fade",pause_after:[],exposed:[],tip_animation_fade_speed:300,cookie_monster:!1,cookie_name:"joyride",cookie_domain:!1,cookie_expires:365,tip_container:"body",abort_on_close:!0,tip_location_patterns:{top:["bottom"],bottom:[],left:["right","top","bottom"],right:["left","top","bottom"]},post_ride_callback:function(){},post_step_callback:function(){},pre_step_callback:function(){},pre_ride_callback:function(){},post_expose_callback:function(){},template:{link:'<a href="#close" class="joyride-close-tip">&times;</a>',timer:'<div class="joyride-timer-indicator-wrap"><span class="joyride-timer-indicator"></span></div>',tip:'<div class="joyride-tip-guide"><span class="joyride-nub"></span></div>',wrapper:'<div class="joyride-content-wrapper"></div>',button:'<a href="#" class="small button joyride-next-tip"></a>',prev_button:'<a href="#" class="small button joyride-prev-tip"></a>',modal:'<div class="joyride-modal-bg"></div>',expose:'<div class="joyride-expose-wrapper"></div>',expose_cover:'<div class="joyride-expose-cover"></div>'},expose_add_class:""},init:function(t,s,i){Foundation.inherit(this,"throttle random_str"),this.settings=this.settings||$.extend({},this.defaults,i||s),this.bindings(s,i)},go_next:function(){this.settings.$li.next().length<1?this.end():this.settings.timer>0?(clearTimeout(this.settings.automate),this.hide(),this.show(),this.startTimer()):(this.hide(),this.show())},go_prev:function(){this.settings.$li.prev().length<1||(this.settings.timer>0?(clearTimeout(this.settings.automate),this.hide(),this.show(null,!0),this.startTimer()):(this.hide(),this.show(null,!0)))},events:function(){var s=this;$(this.scope).off(".joyride").on("click.fndtn.joyride",".joyride-next-tip, .joyride-modal-bg",function(t){t.preventDefault(),this.go_next()}.bind(this)).on("click.fndtn.joyride",".joyride-prev-tip",function(t){t.preventDefault(),this.go_prev()}.bind(this)).on("click.fndtn.joyride",".joyride-close-tip",function(t){t.preventDefault(),this.end(this.settings.abort_on_close)}.bind(this)).on("keyup.fndtn.joyride",function(t){if(this.settings.keyboard&&this.settings.riding)switch(t.which){case 39:t.preventDefault(),this.go_next();break;case 37:t.preventDefault(),this.go_prev();break;case 27:t.preventDefault(),this.end(this.settings.abort_on_close)}}.bind(this)),$(t).off(".joyride").on("resize.fndtn.joyride",s.throttle(function(){if($("["+s.attr_name()+"]").length>0&&s.settings.$next_tip&&s.settings.riding){if(s.settings.exposed.length>0){var t=$(s.settings.exposed);t.each(function(){var t=$(this);s.un_expose(t),s.expose(t)})}s.is_phone()?s.pos_phone():s.pos_default(!1)}},100))},start:function(){var t=this,s=$("["+this.attr_name()+"]",this.scope),i=["timer","scrollSpeed","startOffset","tipAnimationFadeSpeed","cookieExpires"],e=i.length;!s.length>0||(this.settings.init||this.events(),this.settings=s.data(this.attr_name(!0)+"-init"),this.settings.$content_el=s,this.settings.$body=$(this.settings.tip_container),this.settings.body_offset=$(this.settings.tip_container).position(),this.settings.$tip_content=this.settings.$content_el.find("> li"),this.settings.paused=!1,this.settings.attempts=0,this.settings.riding=!0,"function"!=typeof $.cookie&&(this.settings.cookie_monster=!1),(!this.settings.cookie_monster||this.settings.cookie_monster&&!$.cookie(this.settings.cookie_name))&&(this.settings.$tip_content.each(function(s){var n=$(this);this.settings=$.extend({},t.defaults,t.data_options(n));for(var o=e;o--;)t.settings[i[o]]=parseInt(t.settings[i[o]],10);t.create({$li:n,index:s})}),!this.settings.start_timer_on_click&&this.settings.timer>0?(this.show("init"),this.startTimer()):this.show("init")))},resume:function(){this.set_li(),this.show()},tip_template:function(t){var s,i;return t.tip_class=t.tip_class||"",s=$(this.settings.template.tip).addClass(t.tip_class),i=$.trim($(t.li).html())+this.prev_button_text(t.prev_button_text,t.index)+this.button_text(t.button_text)+this.settings.template.link+this.timer_instance(t.index),s.append($(this.settings.template.wrapper)),s.first().attr(this.add_namespace("data-index"),t.index),$(".joyride-content-wrapper",s).append(i),s[0]},timer_instance:function(t){var s;return s=0===t&&this.settings.start_timer_on_click&&this.settings.timer>0||0===this.settings.timer?"":$(this.settings.template.timer)[0].outerHTML},button_text:function(t){return this.settings.tip_settings.next_button?(t=$.trim(t)||"Next",t=$(this.settings.template.button).append(t)[0].outerHTML):t="",t},prev_button_text:function(t,s){return this.settings.tip_settings.prev_button?(t=$.trim(t)||"Previous",t=0==s?$(this.settings.template.prev_button).append(t).addClass("disabled")[0].outerHTML:$(this.settings.template.prev_button).append(t)[0].outerHTML):t="",t},create:function(t){this.settings.tip_settings=$.extend({},this.settings,this.data_options(t.$li));var s=t.$li.attr(this.add_namespace("data-button"))||t.$li.attr(this.add_namespace("data-text")),i=t.$li.attr(this.add_namespace("data-button-prev"))||t.$li.attr(this.add_namespace("data-prev-text")),e=t.$li.attr("class"),n=$(this.tip_template({tip_class:e,index:t.index,button_text:s,prev_button_text:i,li:t.$li}));$(this.settings.tip_container).append(n)},show:function(t,s){var e=null;if(this.settings.$li===i||-1===$.inArray(this.settings.$li.index(),this.settings.pause_after))if(this.settings.paused?this.settings.paused=!1:this.set_li(t,s),this.settings.attempts=0,this.settings.$li.length&&this.settings.$target.length>0){if(t&&(this.settings.pre_ride_callback(this.settings.$li.index(),this.settings.$next_tip),this.settings.modal&&this.show_modal()),this.settings.pre_step_callback(this.settings.$li.index(),this.settings.$next_tip),this.settings.modal&&this.settings.expose&&this.expose(),this.settings.tip_settings=$.extend({},this.settings,this.data_options(this.settings.$li)),this.settings.timer=parseInt(this.settings.timer,10),this.settings.tip_settings.tip_location_pattern=this.settings.tip_location_patterns[this.settings.tip_settings.tip_location],!/body/i.test(this.settings.$target.selector)){var n=$(".joyride-modal-bg");/pop/i.test(this.settings.tipAnimation)?n.hide():n.fadeOut(this.settings.tipAnimationFadeSpeed),this.scroll_to()}this.is_phone()?this.pos_phone(!0):this.pos_default(!0),e=this.settings.$next_tip.find(".joyride-timer-indicator"),/pop/i.test(this.settings.tip_animation)?(e.width(0),this.settings.timer>0?(this.settings.$next_tip.show(),setTimeout(function(){e.animate({width:e.parent().width()},this.settings.timer,"linear")}.bind(this),this.settings.tip_animation_fade_speed)):this.settings.$next_tip.show()):/fade/i.test(this.settings.tip_animation)&&(e.width(0),this.settings.timer>0?(this.settings.$next_tip.fadeIn(this.settings.tip_animation_fade_speed).show(),setTimeout(function(){e.animate({width:e.parent().width()},this.settings.timer,"linear")}.bind(this),this.settings.tip_animation_fade_speed)):this.settings.$next_tip.fadeIn(this.settings.tip_animation_fade_speed)),this.settings.$current_tip=this.settings.$next_tip}else this.settings.$li&&this.settings.$target.length<1?this.show(t,s):this.end();else this.settings.paused=!0},is_phone:function(){return matchMedia(Foundation.media_queries.small).matches&&!matchMedia(Foundation.media_queries.medium).matches},hide:function(){this.settings.modal&&this.settings.expose&&this.un_expose(),this.settings.modal||$(".joyride-modal-bg").hide(),this.settings.$current_tip.css("visibility","hidden"),setTimeout($.proxy(function(){this.hide(),this.css("visibility","visible")},this.settings.$current_tip),0),this.settings.post_step_callback(this.settings.$li.index(),this.settings.$current_tip)},set_li:function(t,s){t?(this.settings.$li=this.settings.$tip_content.eq(this.settings.start_offset),this.set_next_tip(),this.settings.$current_tip=this.settings.$next_tip):(s?this.settings.$li=this.settings.$li.prev():this.settings.$li=this.settings.$li.next(),this.set_next_tip()),this.set_target()},set_next_tip:function(){this.settings.$next_tip=$(".joyride-tip-guide").eq(this.settings.$li.index()),this.settings.$next_tip.data("closed","")},set_target:function(){var t=this.settings.$li.attr(this.add_namespace("data-class")),i=this.settings.$li.attr(this.add_namespace("data-id")),e=function(){return i?$(s.getElementById(i)):t?$("."+t).first():$("body")};this.settings.$target=e()},scroll_to:function(){var s,i;s=$(t).height()/2,i=Math.ceil(this.settings.$target.offset().top-s+this.settings.$next_tip.outerHeight()),0!=i&&$("html, body").stop().animate({scrollTop:i},this.settings.scroll_speed,"swing")},paused:function(){return-1===$.inArray(this.settings.$li.index()+1,this.settings.pause_after)},restart:function(){this.hide(),this.settings.$li=i,this.show("init")},pos_default:function(t){var s=this.settings.$next_tip.find(".joyride-nub"),i=Math.ceil(s.outerWidth()/2),e=Math.ceil(s.outerHeight()/2),n=t||!1;if(n&&(this.settings.$next_tip.css("visibility","hidden"),this.settings.$next_tip.show()),/body/i.test(this.settings.$target.selector))this.settings.$li.length&&this.pos_modal(s);else{var o=this.settings.tip_settings.tipAdjustmentY?parseInt(this.settings.tip_settings.tipAdjustmentY):0,h=this.settings.tip_settings.tipAdjustmentX?parseInt(this.settings.tip_settings.tipAdjustmentX):0;this.bottom()?(this.settings.$next_tip.css(this.rtl?{top:this.settings.$target.offset().top+e+this.settings.$target.outerHeight()+o,left:this.settings.$target.offset().left+this.settings.$target.outerWidth()-this.settings.$next_tip.outerWidth()+h}:{top:this.settings.$target.offset().top+e+this.settings.$target.outerHeight()+o,left:this.settings.$target.offset().left+h}),this.nub_position(s,this.settings.tip_settings.nub_position,"top")):this.top()?(this.settings.$next_tip.css(this.rtl?{top:this.settings.$target.offset().top-this.settings.$next_tip.outerHeight()-e+o,left:this.settings.$target.offset().left+this.settings.$target.outerWidth()-this.settings.$next_tip.outerWidth()}:{top:this.settings.$target.offset().top-this.settings.$next_tip.outerHeight()-e+o,left:this.settings.$target.offset().left+h}),this.nub_position(s,this.settings.tip_settings.nub_position,"bottom")):this.right()?(this.settings.$next_tip.css({top:this.settings.$target.offset().top+o,left:this.settings.$target.outerWidth()+this.settings.$target.offset().left+i+h}),this.nub_position(s,this.settings.tip_settings.nub_position,"left")):this.left()&&(this.settings.$next_tip.css({top:this.settings.$target.offset().top+o,left:this.settings.$target.offset().left-this.settings.$next_tip.outerWidth()-i+h}),this.nub_position(s,this.settings.tip_settings.nub_position,"right")),!this.visible(this.corners(this.settings.$next_tip))&&this.settings.attempts<this.settings.tip_settings.tip_location_pattern.length&&(s.removeClass("bottom").removeClass("top").removeClass("right").removeClass("left"),this.settings.tip_settings.tip_location=this.settings.tip_settings.tip_location_pattern[this.settings.attempts],this.settings.attempts++,this.pos_default())}n&&(this.settings.$next_tip.hide(),this.settings.$next_tip.css("visibility","visible"))},pos_phone:function(t){var s=this.settings.$next_tip.outerHeight(),i=this.settings.$next_tip.offset(),e=this.settings.$target.outerHeight(),n=$(".joyride-nub",this.settings.$next_tip),o=Math.ceil(n.outerHeight()/2),h=t||!1;n.removeClass("bottom").removeClass("top").removeClass("right").removeClass("left"),h&&(this.settings.$next_tip.css("visibility","hidden"),this.settings.$next_tip.show()),/body/i.test(this.settings.$target.selector)?this.settings.$li.length&&this.pos_modal(n):this.top()?(this.settings.$next_tip.offset({top:this.settings.$target.offset().top-s-o}),n.addClass("bottom")):(this.settings.$next_tip.offset({top:this.settings.$target.offset().top+e+o}),n.addClass("top")),h&&(this.settings.$next_tip.hide(),this.settings.$next_tip.css("visibility","visible"))},pos_modal:function(t){this.center(),t.hide(),this.show_modal()},show_modal:function(){if(!this.settings.$next_tip.data("closed")){var t=$(".joyride-modal-bg");if(t.length<1){var t=$(this.settings.template.modal);t.appendTo("body")}/pop/i.test(this.settings.tip_animation)?t.show():t.fadeIn(this.settings.tip_animation_fade_speed)}},expose:function(){var s,i,e,n,o,h="expose-"+this.random_str(6);if(arguments.length>0&&arguments[0]instanceof $)e=arguments[0];else{if(!this.settings.$target||/body/i.test(this.settings.$target.selector))return!1;e=this.settings.$target}return e.length<1?(t.console&&console.error("element not valid",e),!1):(s=$(this.settings.template.expose),this.settings.$body.append(s),s.css({top:e.offset().top,left:e.offset().left,width:e.outerWidth(!0),height:e.outerHeight(!0)}),i=$(this.settings.template.expose_cover),n={zIndex:e.css("z-index"),position:e.css("position")},o=null==e.attr("class")?"":e.attr("class"),e.css("z-index",parseInt(s.css("z-index"))+1),"static"==n.position&&e.css("position","relative"),e.data("expose-css",n),e.data("orig-class",o),e.attr("class",o+" "+this.settings.expose_add_class),i.css({top:e.offset().top,left:e.offset().left,width:e.outerWidth(!0),height:e.outerHeight(!0)}),this.settings.modal&&this.show_modal(),this.settings.$body.append(i),s.addClass(h),i.addClass(h),e.data("expose",h),this.settings.post_expose_callback(this.settings.$li.index(),this.settings.$next_tip,e),void this.add_exposed(e))},un_expose:function(){var s,i,e,n,o,h=!1;if(arguments.length>0&&arguments[0]instanceof $)i=arguments[0];else{if(!this.settings.$target||/body/i.test(this.settings.$target.selector))return!1;i=this.settings.$target}return i.length<1?(t.console&&console.error("element not valid",i),!1):(s=i.data("expose"),e=$("."+s),arguments.length>1&&(h=arguments[1]),h===!0?$(".joyride-expose-wrapper,.joyride-expose-cover").remove():e.remove(),n=i.data("expose-css"),"auto"==n.zIndex?i.css("z-index",""):i.css("z-index",n.zIndex),n.position!=i.css("position")&&("static"==n.position?i.css("position",""):i.css("position",n.position)),o=i.data("orig-class"),i.attr("class",o),i.removeData("orig-classes"),i.removeData("expose"),i.removeData("expose-z-index"),void this.remove_exposed(i))},add_exposed:function(t){this.settings.exposed=this.settings.exposed||[],t instanceof $||"object"==typeof t?this.settings.exposed.push(t[0]):"string"==typeof t&&this.settings.exposed.push(t)},remove_exposed:function(t){var s,i;for(t instanceof $?s=t[0]:"string"==typeof t&&(s=t),this.settings.exposed=this.settings.exposed||[],i=this.settings.exposed.length;i--;)if(this.settings.exposed[i]==s)return void this.settings.exposed.splice(i,1)},center:function(){var s=$(t);return this.settings.$next_tip.css({top:(s.height()-this.settings.$next_tip.outerHeight())/2+s.scrollTop(),left:(s.width()-this.settings.$next_tip.outerWidth())/2+s.scrollLeft()}),!0},bottom:function(){return/bottom/i.test(this.settings.tip_settings.tip_location)},top:function(){return/top/i.test(this.settings.tip_settings.tip_location)},right:function(){return/right/i.test(this.settings.tip_settings.tip_location)},left:function(){return/left/i.test(this.settings.tip_settings.tip_location)},corners:function(s){var i=$(t),e=i.height()/2,n=Math.ceil(this.settings.$target.offset().top-e+this.settings.$next_tip.outerHeight()),o=i.width()+i.scrollLeft(),h=i.height()+n,a=i.height()+i.scrollTop(),r=i.scrollTop();return r>n&&(r=0>n?0:n),h>a&&(a=h),[s.offset().top<r,o<s.offset().left+s.outerWidth(),a<s.offset().top+s.outerHeight(),i.scrollLeft()>s.offset().left]},visible:function(t){for(var s=t.length;s--;)if(t[s])return!1;return!0},nub_position:function(t,s,i){t.addClass("auto"===s?i:s)},startTimer:function(){this.settings.$li.length?this.settings.automate=setTimeout(function(){this.hide(),this.show(),this.startTimer()}.bind(this),this.settings.timer):clearTimeout(this.settings.automate)},end:function(t){this.settings.cookie_monster&&$.cookie(this.settings.cookie_name,"ridden",{expires:this.settings.cookie_expires,domain:this.settings.cookie_domain}),this.settings.timer>0&&clearTimeout(this.settings.automate),this.settings.modal&&this.settings.expose&&this.un_expose(),$(this.scope).off("keyup.joyride"),this.settings.$next_tip.data("closed",!0),this.settings.riding=!1,$(".joyride-modal-bg").hide(),this.settings.$current_tip.hide(),("undefined"==typeof t||t===!1)&&(this.settings.post_step_callback(this.settings.$li.index(),this.settings.$current_tip),this.settings.post_ride_callback(this.settings.$li.index(),this.settings.$current_tip)),$(".joyride-tip-guide").remove()},off:function(){$(this.scope).off(".joyride"),$(t).off(".joyride"),$(".joyride-close-tip, .joyride-next-tip, .joyride-modal-bg").off(".joyride"),$(".joyride-tip-guide, .joyride-modal-bg").remove(),clearTimeout(this.settings.automate),this.settings={}},reflow:function(){}}}(jQuery,window,window.document);