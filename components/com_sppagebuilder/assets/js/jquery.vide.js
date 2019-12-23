!function(e,t){"function"==typeof define&&define.amd?define(["jquery"],t):"object"==typeof exports?t(require("jquery")):t(e.jQuery)}(this,function(g){"use strict";var f="vide",r={volume:1,playbackRate:1,muted:!0,loop:!0,autoplay:!0,position:"50% 50%",posterType:"detect",resizing:!0,bgColor:"transparent",className:""},h="Not implemented";function s(e){var t,o,i,r,s,n,a,p={};for(a=0,n=(s=e.replace(/\s*:\s*/g,":").replace(/\s*,\s*/g,",").split(",")).length;a<n&&(-1===(o=s[a]).search(/^(http|https|ftp):\/\//)&&-1!==o.search(":"));a++)t=o.indexOf(":"),i=o.substring(0,t),(r=o.substring(t+1))||(r=void 0),"string"==typeof r&&(r="true"===r||"false"!==r&&r),"string"==typeof r&&(r=isNaN(r)?r:+r),p[i]=r;return null==i&&null==r?e:p}function i(e,t,o){if(this.$element=g(e),"string"==typeof t&&(t=s(t)),o?"string"==typeof o&&(o=s(o)):o={},"string"==typeof t)t=t.replace(/\.\w*$/,"");else if("object"==typeof t)for(var i in t)t.hasOwnProperty(i)&&(t[i]=t[i].replace(/\.\w*$/,""));this.settings=g.extend({},r,o),this.path=t;try{this.init()}catch(e){if(e.message!==h)throw e}}i.prototype.init=function(){var e,t,o,i,r,s=this,n=s.path,a=n,p="",c=s.$element,d=s.settings,u=function(e){var t,o,i,r=(e=""+e).split(/\s+/),s="50%",n="50%";for(i=0,t=r.length;i<t;i++)"left"===(o=r[i])?s="0%":"right"===o?s="100%":"top"===o?n="0%":"bottom"===o?n="100%":"center"===o?0===i?s="50%":n="50%":0===i?s=o:n=o;return{x:s,y:n}}(d.position),l=d.posterType;t=s.$wrapper=g("<div>").addClass(d.className).css({position:"absolute","z-index":-1,top:0,left:0,bottom:0,right:0,overflow:"hidden","-webkit-background-size":"cover","-moz-background-size":"cover","-o-background-size":"cover","background-size":"cover","background-color":d.bgColor,"background-repeat":"no-repeat","background-position":u.x+" "+u.y}),"object"==typeof n&&(n.poster?a=n.poster:n.mp4?a=n.mp4:n.webm?a=n.webm:n.ogv&&(a=n.ogv)),"detect"===l?(i=function(e){t.css("background-image","url("+e+")")},r=function(){i(this.src)},g('<img src="'+(o=a)+'.gif">').on("load",r),g('<img src="'+o+'.jpg">').on("load",r),g('<img src="'+o+'.jpeg">').on("load",r),g('<img src="'+o+'.png">').on("load",r)):"none"!==l&&t.css("background-image","url("+a+"."+l+")"),"static"===c.css("position")&&c.css("position","relative"),c.prepend(t),e=s.$video="object"==typeof n?(n.mp4&&(p+='<source src="'+n.mp4+'.mp4" type="video/mp4">'),n.webm&&(p+='<source src="'+n.webm+'.webm" type="video/webm">'),n.ogv&&(p+='<source src="'+n.ogv+'.ogv" type="video/ogg">'),g("<video>"+p+"</video>")):g('<video><source src="'+n+'.mp4" type="video/mp4"><source src="'+n+'.webm" type="video/webm"><source src="'+n+'.ogv" type="video/ogg"></video>');try{e.prop({autoplay:d.autoplay,loop:d.loop,volume:d.volume,muted:d.muted,defaultMuted:d.muted,playbackRate:d.playbackRate,defaultPlaybackRate:d.playbackRate})}catch(e){throw new Error(h)}e.css({margin:"auto",position:"absolute","z-index":-1,top:u.y,left:u.x,"-webkit-transform":"translate(-"+u.x+", -"+u.y+")","-ms-transform":"translate(-"+u.x+", -"+u.y+")","-moz-transform":"translate(-"+u.x+", -"+u.y+")",transform:"translate(-"+u.x+", -"+u.y+")",visibility:"hidden",opacity:0}).one("canplaythrough."+f,function(){s.resize()}).one("playing."+f,function(){e.css({visibility:"visible",opacity:1}),t.css("background-image","none")}),c.on("resize."+f,function(){d.resizing&&s.resize()}),t.append(e)},i.prototype.getVideoObject=function(){return this.$video[0]},i.prototype.resize=function(){if(this.$video){var e=this.$wrapper,t=this.$video,o=t[0],i=o.videoHeight,r=o.videoWidth,s=e.height(),n=e.width();s/i<n/r?t.css({width:n+2,height:"auto"}):t.css({width:"auto",height:s+2})}},i.prototype.destroy=function(){delete g[f].lookup[this.index],this.$video&&this.$video.off(f),this.$element.off(f).removeData(f),this.$wrapper.remove()},g[f]={lookup:[]},g.fn[f]=function(e,t){var o;return this.each(function(){(o=g.data(this,f))&&o.destroy(),(o=new i(this,e,t)).index=g[f].lookup.push(o)-1,g.data(this,f,o)}),this},g(document).ready(function(){var e=g(window);e.on("resize."+f,function(){for(var e,t=g[f].lookup.length,o=0;o<t;o++)(e=g[f].lookup[o])&&e.settings.resizing&&e.resize()}),e.on("unload."+f,function(){return!1}),g(document).find("[data-vide-bg]").each(function(e,t){var o=g(t),i=o.data(f+"-options"),r=o.data(f+"-bg");o[f](r,i)})})});