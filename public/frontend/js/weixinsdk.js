/* 2018-4-3 16:10:41 version:0.0.1 */
!function(){function e(){for(var e,n,t=Array.prototype.slice.call(arguments,0),o=t.shift();e=t.shift();)for(n in e)o[n]=e[n];return o}function n(e,n){var o=u.createElement("script");o.charset="utf-8",t(o,n),o.async=!0,o.src=e,h?d.insertBefore(o,h):d.appendChild(o)}function t(e,n){function t(){e.onload=e.onerror=e.onreadystatechange=null,d.removeChild(e),e=null,n&&n()}"onload"in e?e.onload=t:e.onreadystatechange=function(){/loaded|complete/.test(e.readyState)&&t()}}function o(e){return e.replace(/(^\w)/gi,function(e,n){return n.toUpperCase()})}function i(n){var t=c||this,o=t.options||{debug:!1,title:p,link:g,imgUrl:m,desc:this.getDescription()||g};return n=t.options=e(o,n),t.setShareObject({title:n.title,link:n.link,imgUrl:n.imgUrl,desc:n.desc}),c=t}var r,a,c,s=window,u=s.document,l=void 0!==s.ued?s.ued:s.ued={},d=u.head||u.getElementsByTagName("head")[0]||u.documentElement,h=d.getElementsByTagName("base")[0],f="//res.wx.qq.com/open/js/jweixin-1.2.0.js",p=u.title,g=s.location.href,m="https://ue.17173cdn.com/a/module/m/gb/2017/img/logo.png",M={},y=s.wx;/MicroMessenger/i.test(navigator.userAgent)?(i.prototype={getShareObject:function(){return this.shareObject},setShareObject:function(n){var t=this;t.shareObject=t.shareObject||{},e(t.shareObject,n),t.initEvents||(this.registerEvents(this.shareObject),t.initEvents=!0),t.ready(function(){y.onMenuShareTimeline(t.shareObject),y.onMenuShareAppMessage(t.shareObject),y.onMenuShareQQ(t.shareObject),y.onMenuShareQZone(t.shareObject),y.onMenuShareWeibo(t.shareObject)})},registerEvents:function(e){for(var n,t=this,i=["success","fail","complete","cancel","trigger"];n=i.shift();)e[n]=function(e){return function(n){var i=n.errMsg?n.errMsg.split(":")[0]:"";i+=i?o(e):e,t.fire(i,{eventType:e,shareType:i,original:arguments})}}(n)},getSdk:function(e){var t,o=this;y?t(y):(t=function(n){y=n,e&&e.apply(o,y)},s.seajs?s.seajs.use(f,function(e){t(e)}):n(f,function(){t(s.wx)}))},ready:function(e){var n=this;n.getSdk(function(){n.getBaseConfig(function(t){n.weiXinReady(t,e)})})},weiXinReady:function(e,n){a?n&&n(y):(e.debug=this.options.debug,e.jsApiList=["checkJsApi","onMenuShareTimeline","onMenuShareAppMessage","onMenuShareQQ","onMenuShareWeibo","onMenuShareQZone","hideMenuItems","showMenuItems","hideAllNonBaseMenuItem","showAllNonBaseMenuItem","translateVoice","startRecord","stopRecord","onVoiceRecordEnd","playVoice","onVoicePlayEnd","pauseVoice","stopVoice","uploadVoice","downloadVoice","chooseImage","previewImage","uploadImage","downloadImage","getNetworkType","openLocation","getLocation","hideOptionMenu","showOptionMenu","closeWindow","scanQRCode","chooseWXPay","openProductSpecificView","addCard","chooseCard","openCard"],r=e,y.config(e),y.ready(function(){a=!0,n&&n(y)}))},getBaseConfig:function(e){r?e&&e(r):this.getSignature(null,function(n){e&&e(n)})},createAppUrl:function(e,n){return"//act.17173.com/weixin/index.php?callback="+e+"&do=weixin&url="+encodeURIComponent(n||location.href.split("#")[0])},getSignature:function(e,t){var o="weixin"+Math.random().toString(36).substr(2);s[o]=function(e){t&&t(e),setTimeout(function(){s[o]=void 0},0)},n(this.createAppUrl(o,e))},getDescription:function(){for(var e,n=d.getElementsByTagName("meta"),t=0;t<n.length;t++)if("description"==n[t].name)return(e=n[t].getAttribute("content"))?e.replace(/^,/,""):null;return null},on:function(e,n){M[e]||(M[e]=[]),"function"==typeof n&&M[e].push(n)},off:function(e,n){var t;if(M[e])if(n){t=M[e];for(var o=0;o<t.length;o++)n===t[o]&&t.splice(o,1)}else delete M[e]},fire:function(e){var n=M[e],t=Array.prototype.slice.call(arguments,1),o=!0;if(!n)return!1;for(var i=0;i<n.length;i++)!1===n[i].apply(null,t)&&(o=!1);return o}},l.MicroMessengerSdk=i,s.wx||l.weixinSdkInit||new i(s.mesConfig)):l.MicroMessengerSdk=function(){}}();
//# sourceMappingURL=maps/weixinsdk.js.map
