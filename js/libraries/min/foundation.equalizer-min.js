!function($,t,e,i){"use strict";Foundation.libs.equalizer={name:"equalizer",version:"5.5.2",settings:{use_tallest:!0,before_height_change:$.noop,after_height_change:$.noop,equalize_on_stack:!1,act_on_hidden_el:!1},init:function(t,e,i){Foundation.inherit(this,"image_loaded"),this.bindings(e,i),this.reflow()},events:function(){this.S(t).off(".equalizer").on("resize.fndtn.equalizer",function(t){this.reflow()}.bind(this))},equalize:function(t){var e=!1,i=t.data("equalizer"),n=t.data(this.attr_name(!0)+"-init")||this.settings,a,h;if(a=n.act_on_hidden_el?i?t.find("["+this.attr_name()+'-watch="'+i+'"]'):t.find("["+this.attr_name()+"-watch]"):i?t.find("["+this.attr_name()+'-watch="'+i+'"]:visible'):t.find("["+this.attr_name()+"-watch]:visible"),0!==a.length&&(n.before_height_change(),t.trigger("before-height-change.fndth.equalizer"),a.height("inherit"),n.equalize_on_stack!==!1||(h=a.first().offset().top,a.each(function(){return $(this).offset().top!==h?(e=!0,!1):void 0}),!e))){var s=a.map(function(){return $(this).outerHeight(!1)}).get();if(n.use_tallest){var r=Math.max.apply(null,s);a.css("height",r)}else{var o=Math.min.apply(null,s);a.css("height",o)}n.after_height_change(),t.trigger("after-height-change.fndtn.equalizer")}},reflow:function(){var t=this;this.S("["+this.attr_name()+"]",this.scope).each(function(){var e=$(this),i=e.data("equalizer-mq"),n=!0;i&&(i="is_"+i.replace(/-/g,"_"),Foundation.utils.hasOwnProperty(i)&&(n=!1)),t.image_loaded(t.S("img",this),function(){if(n||Foundation.utils[i]())t.equalize(e);else{var a=e.find("["+t.attr_name()+"-watch]:visible");a.css("height","auto")}})})}}}(jQuery,window,window.document);