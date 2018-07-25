!function(){'use strict';function supportsTransitions(){var b=document.body||document.documentElement,s=b.style,p='transition';if(typeof s[p]=='string'){return true;}
var v=['Moz','webkit','Webkit','Khtml','O','ms'];p=p.charAt(0).toUpperCase()+ p.substr(1);for(var i=0;i<v.length;i++){if(typeof s[v[i]+ p]=='string'){return true;}}
return false;}
videojs.plugin('OpenloadAnim',function(options){if(!supportsTransitions())
return;var el=this.addChild('OpenloadAnim',{componentClass:'Component'}).el();el.id='anim-container';el.className='anim';var el2=document.createElement('span');el.appendChild(el2);function playpause(){el.className="";if(this.paused()){el2.className='vjs-icon-pause';}else{el2.className='vjs-icon-play';}
setTimeout(function(){el.className="anim";},25);}
this.on('play',playpause).on('pause',playpause);});videojs.Openload=videojs.extend(videojs.getComponent('Button'),{constructor:function(player,options){videojs.getComponent('Button').call(this,player,options);this.addClass('vjs-ol-button');}});videojs.Openload.prototype.handleClick=function(){};videojs.registerComponent('Openload',videojs.Openload);var lastTime=0;var nativeTracks=false;if(!!navigator.platform&&/iPad|iPhone|iPod/.test(navigator.platform))nativeTracks=true;videojs("olvideo",{playbackRates:[0.25,0.5,1,1.12,1.25,1.5,2],persistTextTrackSettings:true,html5:{nativeTextTracks:nativeTracks,},plugins:{OpenloadAnim:{}},controlBar:{children:["playToggle","volumeMenuButton","currentTimeDisplay","timeDivider","durationDisplay","progressControl","liveDisplay","playbackRateMenuButton","captionsButton","remainingTimeDisplay","Openload","fullscreenToggle",]},},function(){var player=this;var subIndex=1;player.on('vast.contentStart',function(){$('.vjs-playback-rate').show();$('.vjs-captions-button .vjs-menu-item').eq(subIndex).trigger('click');});player.on('vast.firstPlay',function(){subIndex=$('.vjs-captions-button .vjs-menu-item.vjs-selected').index();});player.on('vast.adStart',function(){$('.vjs-playback-rate').hide();$.post("https://tt2.openload.co/r3/f",{"popurl":"video","poppool":"video","position":13});});player.on('vast.adsCancel',function(){$.post("https://tt2.openload.co/r3/f",{"popurl":"videofail","poppool":"video","position":14});});player.hotkeys({});if(supports_html5_storage()){var vol=localStorage.getItem('volume');if(vol!==null&&isFinite(vol)){player.volume(vol);}
if(!localStorage.getItem('vjs-text-track-settings'))
player.textTrackSettings.setValues({backgroundOpacity:'0',edgeStyle:'uniform'});}
var kSel='.vjs-captions-button .vjs-menu-item';var kBtn=['PC','URL','SzP','SzM'];var lastsub;function reattachEvents(last){setTimeout(function(){var fnd=0;var v,i;for(i=kBtn.length;i-->0;){v=$(kSel+":contains('~"+kBtn[i]+"~')");if(v[0]){++fnd;v.addClass('olsrt srt'+kBtn[i]).html(v.html().replace('~'+kBtn[i]+'~',''));}}
if(!fnd)
return;$(kSel).click(function(){if($(this).hasClass('olsrt')||$(this).hasClass('vjs-texttrack-settings'))
return;lastsub=$(kSel).index(this);});$(kSel+".srtPC").click(function(){$("#srtSelector").trigger('click');});$(kSel+".srtURL").click(function(){loadSrtFromUrl();});$(kSel+".srtSzP").click(function(){changeSize(25);$(kSel).eq(lastsub).trigger('click');});$(kSel+".srtSzM").click(function(){changeSize(-25);$(kSel).eq(lastsub).trigger('click');});if(last)
$(kSel+":last").trigger('click');else
$(kSel+'.vjs-selected').trigger('click');},50);}
reattachEvents();function loadSrtFromUrl(){var url=prompt("Please enter the Url of the .srt file you want to use");if(url!=null&&url!=""){$.get(suburl+ window.btoa(url),function(srcContent){var track=player.addTextTrack("captions","Subs from your url","su");var parser=new window['WebVTT']['Parser'](window,window['vttjs'],window['WebVTT']['StringDecoder']());parser['oncue']=function(cue){track.addCue(cue);};parser['onparsingerror']=function(error){};parser['parse'](srcContent);parser['flush']();reattachEvents(1);});}};$("#srtSelector").on("change",function(){var collection=new FileReader;collection.onload=function(dataAndEvents){if(collection.result.indexOf("-->")!==-1){var track=player.addTextTrack("captions",$("#srtSelector").prop("files")[0].name,"su");parseSrt(collection.result,function(cue){track.addCue(cue);});reattachEvents(1);}else{alert("Invaid subtitle file");}};collection.readAsText($("#srtSelector").prop("files")[0],"ISO-8859-1");});if(typeof logourl!="undefined"){var img=document.createElement("img");img.src=logourl;img.className="videologo";player.el().appendChild(img);}}).one('firstplay',function(){$("#videooverlay, .title, .logocontainer").hide();this.addClass('vjs-waiting');}).one('loadedmetadata',function(){if(typeof window.shouldreport!=="undefined"){if((window.filesize*8/(1024*1024))/this.duration() > 2.5){
$.get("/reportDuration/"+window.shouldreport+"/"+this.duration());}}
var vid=$("video:first")[0];if(vid)
$(".media-player .video-js").css({"padding-top":(vid.videoHeight/vid.videoWidth*100)+"%",});}).on('volumechange',function(){if(supports_html5_storage()){localStorage.setItem("volume",this.volume());}}).on('error',function(e){var err=this.player().error();if(err.code==err.MEDIA_ERR_SRC_NOT_SUPPORTED){var src=this.src();var tag=this.tech({IWillNotUseThisInPlugins:1}).el();if(src.indexOf('#IE')==-1){tag.removeAttribute('crossorigin');this.src(src+'#IE');}else{tag.setAttribute('crossorigin','anonymous');if(!((typeof navigator.plugins=='undefined'||!navigator.plugins.length)?!!(new ActiveXObject('ShockwaveFlash.ShockwaveFlash')):navigator.plugins['Shockwave Flash']))
$('.vjs-modal-dialog-content')[0].innerHTML+='<p>You might be able to fix this error by installing Adobe Flash, <a href="https://get.adobe.com/flashplayer/">install latest version</a>.</p>';}}}).on('progress',function(){var currentTime=this.currentTime();if(lastTime!==currentTime){lastTime=currentTime;this.removeClass('vjs-waiting');}else if(this.paused()===false){this.addClass('vjs-waiting');}}).on('ended',function(){this.removeClass('vjs-waiting');});}();$(function(){$(".lights-button").click(function(e){if(e.isTrigger)return;if($(".light-container").hasClass("night")){$(".lights-text").text('off');}else{$(".lights-text").text('on');}
$(".light-container").toggleClass("night");});});