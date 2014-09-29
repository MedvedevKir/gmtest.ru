(function($) {
	
	var Scroll = function(content, options) {
		this.html = {};
		this.init(content, options);
	};
	
	Scroll.prototype = {
		
		// options
		increment : 1,
		scrolltype : 'incremental', // [incremental,position]
		
		// systems
		interval : null,
		percent : [5,5,5], 
		
		init : function(content, options) {

			if (content == document || content == window || content == document.getElementsByTagName("body")[0])
				content = $("body")./*css({overflow:'hidden'}).*/wrapInner("<div/>").children(":eq(0)")
			
			var self = $.extend(this, options),
			html = self.html;
			
			html.conteiner = $('<div/>')
				.addClass('wrapperEl')
				.insertBefore(content);
			
			html.content = $('<div/>')
				.addClass('contentEl')
				.append(content)
				.appendTo(html.conteiner)
				.mousewheel(function(e,delta){
					self.doScroll(delta, 1);
					setTimeout(function(){
						clearInterval(self.interval);
					},250);
					return false;
				});
				
			html.scroll = $('<div/>')
				.addClass('scrollEl')
				.appendTo(html.conteiner)
				.mouseup(function(e){
					clearInterval(self.interval);
				});
			
			html.upBtn = $('<div/>')
				.addClass('upBtn')
				.appendTo(html.scroll)
				.mousedown(function(e){
					e.preventDefault(); // dragging
					self.doScroll(1, 1);
					html.upBtn.addClass("upBtn-Active");
				}).mouseup(function(e){
					html.upBtn.removeClass("upBtn-Active");
				}).mouseenter(function(e){
					html.upBtn.addClass("upBtn-Highlighted");
				}).mouseleave(function(e){
					html.upBtn.removeClass("upBtn-Highlighted upBtn-Active");
					clearInterval(self.interval);
				});
			
			html.downBtn = $('<div/>')
				.addClass('downBtn')
				.appendTo(html.scroll)
				.mousedown(function(e){
					e.preventDefault(); // dragging
					self.doScroll(-1, 1);
					html.downBtn.addClass("downBtn-Active");
				}).mouseup(function(e){
					html.downBtn.removeClass("downBtn-Active");
				}).mouseenter(function(e){
					html.downBtn.addClass("downBtn-Highlighted");
				}).mouseleave(function(e){
					html.downBtn.removeClass("downBtn-Highlighted downBtn-Active");
					clearInterval(self.interval);
				});
				
			html.scrollBar = $('<div/>')
				.addClass('scrollBar')
				.appendTo(html.scroll)
				.mousedown(function(e){
					if (self.scrolltype == 'incremental'){
						var sign = e.pageY - html.scrollHandle.offset().top < 0 ? 1 : -1;
						self.doScroll(sign, self.percent[2]);
					}else{ // position
						var point = e.pageY - html.scrollBar.offset().top;
						self.setContentToPoint(point);
						self.doJump(point);
					}
				});
				
			html.grey = $("<div/>")
				.addClass("greyEl")
				.appendTo(html.scroll);
			
			html.scrollHandle = $('<div/>')
				.addClass('scrollHandle')
				.appendTo(html.scrollBar)
				.mousedown(function(e){
					e.stopPropagation(); // scrollBar::mousedown
					html.scrollBar.addClass("scrollBar-Active");
				}).mouseup(function(e){
					html.scrollBar.removeClass("scrollBar-Active");
				}).mouseover(function(e){
					clearInterval(self.interval);
				}).bind("mouseleave mouseenter",function(e){
					html.scrollBar.toggleClass("scrollBar-Highlighted");
				}).draggable({
					axis: 'y', 
					containment: 'parent',
					drag: function(e, ui) { 
						self.setContentToPoint(ui.position.top);
						
					},
					stop : function(){
						html.scrollBar.removeClass("scrollBar-Active");
					}
				});
				/*.bind('drag',function(e){
					var max = Math.max(e.offsetY - html.scrollBar.offset().top, 0),
					min = Math.min(max, html.scrollBar.height() - html.scrollHandle.height())
					$(this).css({top: min});
					self.setContentToPoint(min);
				}).bind('dragend',function(){
					html.scrollBar.removeClass("scrollBar-Active");
				})*/
			
			html.scrollHandleTop = $('<div/>')
				.addClass('scrollHandleTop')
				.appendTo(html.scrollHandle);
			html.scrollHandleBG = $('<div/>')
				.addClass('scrollHandleBG')
				.appendTo(html.scrollHandle);
			html.scrollHandleMiddle = $('<div/>')
				.addClass('scrollHandleMiddle')
				.appendTo(html.scrollHandle);
			html.scrollHandleBottom = $('<div/>')
				.addClass('scrollHandleBottom')
				.appendTo(html.scrollHandle);
			
			$(window).bind('load resize', function(e) {
				// I 'love' IE 8 it fires resize before load
				self.loaded = self.loaded ? true : e.type == 'load';
				if (!self.loaded) return;
				
				// get all variables
				var barH = html.scrollBar.height(),
				topH = html.scrollHandleTop.height(),
				midH = html.scrollHandleMiddle.height(),
				botH = html.scrollHandleBottom.height(),
				content = html.content.get(0),
				realHeight = Math.round(barH * content.clientHeight / content.scrollHeight),
				height = Math.max(realHeight, topH + midH + botH);
							
				// set real heights
				html.scrollHandleBG.height(height - topH - botH)
				html.scrollHandle.height(height);
				html.scrollBar.height(html.content.height()-html.downBtn.height()-html.downBtn.height())
				html.scrollHandle.toggle(height<barH);
				html.grey.toggle(height>=barH);				
				
				// store values
				self.percent = [
					(content.scrollHeight - content.clientHeight) / (barH - height),
					(barH - height) / (content.scrollHeight - content.clientHeight),
					Math.round(content.scrollHeight * height / barH / self.increment)
				];
			});		
		},
		
		setContentToPoint : function(point){
			this.html.content.get(0).scrollTop = Math.round(point * this.percent[0]);
		},
		
		setScrollerToPoint : function(point){
			this.html.scrollHandle.css({top:Math.round(point * this.percent[1])});
		},
		
		doJump : function(point){
			var html = this.html,
			c = html.scrollHandle.height() / 2,
			top = Math.min(Math.max(point - c, 0), html.scrollBar.height() - 2 * c);
			html.scrollHandle.css({top:top});
		},
		
	        doScroll : function(sign, multiplier){
			var self = this;
			clearInterval(self.interval); 
			self.interval = setInterval(function(){
				var elt = self.html.content.get(0);
				elt.scrollTop -= self.increment * multiplier * sign;
				self.setScrollerToPoint(elt.scrollTop);
			},50);
			
	        }
	}

	$.fn.jscroll = function(options) {
		this.each(function() {
			new Scroll(this, options);
		});
		return this;
	};

})(jQuery);

