$(".slider").each(function(){function t(t){var n,l;e(),s.is(":animated")||c===t||(a[c].removeClass("active"),a[t].addClass("active"),t>c?(l="100%",n="-100%"):(l="-100%",n="100%"),i.eq(t).css({left:l,display:"block"}),s.animate({left:n},function(){i.eq(c).css({display:"none"}),i.eq(t).css({left:0}),s.css({left:0}),c=t}))}function e(){clearTimeout(l),l=setTimeout(function(){t(c<i.length-1?c+1:0)},4e3)}var n=$(this),s=n.find(".slide-group"),i=n.find(".slide"),a=[],c=0,l;$.each(i,function(e){var n=$('<button type="button" class="slide-btn">&bull;</button>');e===c&&n.addClass("active"),n.on("click",function(){t(e)}).appendTo(".slide-buttons"),a.push(n)}),e()});