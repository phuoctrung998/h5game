/* Fri Jul 07 2017 11:14:45 GMT+0800  */
define("pandora-commentinfo/1.1.2/index",["jquery","pandora-widget/1.1.0/widget","pandora-base/1.1.0/base","pandora-class/1.1.0/class","pandora-events/1.1.0/events"],function(t,n,e){"use strict";e.exports=t("pandora-commentinfo/1.1.2/src/commentinfo")}),define("pandora-commentinfo/1.1.2/src/commentinfo",["jquery","pandora-widget/1.1.0/widget","pandora-base/1.1.0/base","pandora-class/1.1.0/class","pandora-events/1.1.0/events"],function(t,n,e){"use strict";var o=t("jquery"),a=t("pandora-widget/1.1.0/widget"),i="http://hits.17173.com/api?jsonp=?",r="http://comment2.17173.com/front/comment/sums.do?callback=?",c="http://changyan.sohu.com/api/open/topic/comment/sums?callback=?",s="cyqvqDTV5",d=a.extend({defaults:{element:null,container:null,commentType:"auto",contentKey:"data-topicid",cv:"[data-topicid]",pv:null,cvHide:null,pvHide:null,cvHideValue:0,pvHideValue:0,pvRatio:1},setup:function(){this.contentKey=this.option("contentKey"),this.cv=this.option("cv"),this.pv=this.option("pv"),this.load()},load:function(){var t=this;t.cv&&this.getCommentInfo(),t.pv&&this.getPvInfo()},get17173CommentInfo:function(t){return o.ajax({url:r,dataType:"jsonp",data:{sids:t.join(",")}})},getChangyanCommentInfo:function(t){var n=o.Deferred();return o.ajax({url:c,dataType:"jsonp",data:{client_id:s,topic_source_id:t.join(",")}}).done(function(t){var e={};for(var o in t.result)e[o]={totalCount:t.result[o].sum};n.resolve({data:e})}),n},getCommentInfo:function(){var t=this,n=t.option("commentType"),e=t.getContentKey("cv");o.Deferred().resolve().then(function(){return"17173"==n?{data:[]}:t.getChangyanCommentInfo(e)}).then(function(o){var a=o.data;"changyan"==n?t.render.call(t,a,"cv","totalCount"):t.get17173CommentInfo(e).then(function(n){var e=n.data;for(var o in e)e[o].totalCount=Math.max(e[o].totalCount,a[o]?a[o].totalCount:0);t.render.call(t,e,"cv","totalCount")})})},getPvInfo:function(){var t=this,n=t.getContentKey("pv"),e=t.convertListKey(n);o.getJSON(i,{mo:"pv","do":"read",keylist:e.join(",")}).done(function(n){var e=n.data;for(var o in e)e[t.convertKey(o)]=e[o];t.render.call(t,e,"pv","pv")})},getContentKey:function(t){var n=this,e=[];return n.iterate(t,function(){var t=n.getKey(o(this));t.length&&e.push(t)}),e},iterate:function(t,n){var e=this.contentKey;this.$("["+e+"]:not(["+t+"_loaded])").each(function(){n.apply(this,arguments)})},render:function(t,n,e){var a,i=this;t&&(a=i[n],i.iterate(n,function(){var r,c,s,d,p,u=o(this),v=u.find(a),l=i.getKey(u),f=t[l],m=i.option("pvRatio");f&&(r=Math.max(f[e],0),"pv"===n&&m?(m=parseFloat(m),r=isNaN(m)?r:r*m,c=i.option("pvHide"),s=parseInt(i.option("pvHideValue"),10),r>s||c&&u.find(c).hide()):(d=i.option("cvHide"),p=parseInt(i.option("cvHideValue"),10),r>p||d&&u.find(d).hide()),v=v.length?v:u,v.text(r),u.attr(n+"_loaded",""))}),i.fire(n+"Render",t))},convertListKey:function(t){for(var n=0;n<t.length;n++)t[n]=this.convertKey(t[n]);return t},convertKey:function(t){var n,e;return t?(n=/_/.test(t),e=t.split(/_|-/),n?[e[2],e[0],e[1]].join("-"):[e[1],e[2],e[0]].join("_")):void 0},getKey:function(t){return o.trim(t.attr(this.contentKey))}});e.exports=d});