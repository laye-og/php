Previewdialog=function(a){var b=this;b.dom,b.drawningboard=a,b.previewspace,b.savedialog,b.start=function(){b.drawningboard.api.loadTemplate("previewdialog",function(a){if(b.dom=$(a),$("#logobody").append(b.dom),b.dom.hide(),b.registerEvents(),b.drawningboard.selector.unselect(),b.drawningboard.selector.endexplodedmode(),b.drawningboard.ownermode)b.dom.find(".download-highres-box").remove(),b.dom.find(".download-vector-box").remove(),b.dom.find(".download-box-title span").html("Save"),b.dom.find(".download-message-price span").html(""),b.dom.find(".download-message-phrase").empty(),b.dom.find(".download-message-phrase").append("<span>Click Save to</span>"),b.dom.find(".download-message-phrase").append("<span>store at database.</span>"),b.dom.find(".free-buttom").html("Save"),b.dom.find(".example-box").remove(),b.dom.find(".bottom").remove(),b.dom.find(".content .wrapper").css("width","700px"),b.dom.find(".content .wrapper .download-box").css("width","auto"),b.populatePreviewImages(),b.dom.slideDown("slow");else{b.drawningboard.startloading(),b.savedialog=new SaveDialog(b.drawningboard);var a=b.savedialog.geticondata();b.drawningboard.plan&&(a.guid=b.drawningboard.icon);var c={logo:a},d=getthumb(a).svg;d.wrap("<div></div>"),d.attr("width","200px"),d.attr("height","200px"),c.svg=d.parent().html().replace(/NS\d+:href/gi,"xlink:href");var e=b.prepareCompanyName();$.ajax({type:"post",url:b.drawningboard.api.logo+"userstore",data:JSON.stringify(c),contentType:"application/json; charset=utf-8",dataType:"json"}).done(function(a){console.log(a);var c={guid:a.obj.logo.guid};window.history.pushState(c,"Free Logo Design",b.drawningboard.api.editorPage+"?lang="+b.drawningboard.api.language+"&logo="+a.obj.logo.guid);var d=b.drawningboard.api.previewPage+"?lang="+b.drawningboard.api.language+"&name="+encodeURI(e)+"&logo="+a.obj.logo.guid;window.location=d})}})},b.prepareCompanyName=function(){var a="";return $.each(b.drawningboard.cliplist,function(b,c){if(c instanceof Text&&c.enabled()){if(a.length+c.format.text.length>25)return""==a?c.format.text:a;""==a?a=c.format.text:a+=" "+c.format.text}}),a},b.populatePreviewImages=function(){var a=[];if($.each(b.drawningboard.cliplist,function(b,c){c.enabled()&&a.push(c)}),0!=a.length){var c=b.drawningboard.selector.getclipdata(a),d=b.drawningboard.recentcolors[0];if(d.r>200&&d.g>200&&d.b>200||d.a<.5){var e=!1;$.each(b.drawningboard.recentcolors,function(a,b){e||(b.r<200||b.g<200||b.b<200)&&b.a>.5&&(e=!0,d=b)}),e||(d.r=35,d.g=143,d.b=180,d.a=1)}var f="rgba("+d.r+", "+d.g+", "+d.b+", "+d.a+")",g="rgba("+d.r+", "+d.g+", "+d.b+", 0.3)";b.dom.find(".customcolor").css("color",f),b.dom.find(".custombg").css("background-color",f),b.dom.find(".preview-monitor-layout").css("border-right","1px solid "+g),b.dom.find(".preview-monitor-layout").css("border-left","1px solid "+g);var h=Snap(b.drawningboard.workspace.node.cloneNode(!0));h.attr({viewBox:c.x1+","+c.y1+","+c.width+","+(c.height+20)}),b.previewspace=Snap("svg.edit-image"),b.previewspace.add(h),b.dom.find("img.edit-image").hide(),$("#edit-image").find(".selector-part, .background-part").remove(),b.dom.find('[style*="cursor: move"]').css("cursor","default")}},b.return=function(){b.savedialog&&b.savedialog.hide(),b.dom.slideUp("fast",function(){b.dom.remove()}),$.each(b.drawningboard.cliplist,function(a,b){b.update()})},b.registerEvents=function(){b.dom.find(".edit-buttom").on("click",function(){b.return()}),b.dom.find(".download-free-box").on("click",function(){b.drawningboard.ownermode&&(b.savedialog=new SaveDialog(b.drawningboard),b.savedialog.callback=b.return,b.savedialog.show())})}};