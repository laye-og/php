Background=function(a){var b=this;b.dom,b.drawningboard=a,b.width=b.drawningboard.width,b.height=b.drawningboard.height,b.statelist=[],b.currentstate=-1,b.alpha=1,b.group=b.drawningboard.workspace.g(),b.group.addClass("background-part"),b.svg,b.color;var c=new Gradient;c.colorlist.push(new Color("rgba(255,255,255,0.25)")),b.color=c,b.start=function(){b.svg=b.drawningboard.workspace.rect(0,0,b.drawningboard.width,b.drawningboard.height),b.svg.attr({fill:b.color.colorlist[0].color}),b.group.add(b.svg)},b.finish=function(){b.setcolor("rgba(255, 255, 255, 0.25)")},b.setcolor=function(a){b.drawningboard.selector.closecontext(),b.color.colorlist[0].color=a,$(".background-picker").colpickSetOriginal($.colpick.stringToRgba(b.color.colorlist[0].color)),$(".background-picker").colpickSetColor($.colpick.stringToRgba(b.color.colorlist[0].color)),b.update()},b.applychanges=function(){b.svg.attr({fill:b.color.colorlist[0].color})},b.update=function(a){b.drawningboard.selector.closecontext(),void 0==a?b.applychanges():$(".background-picker").colpickSetOriginal($.colpick.stringToRgba(b.color.colorlist[0].color))},b.start()};