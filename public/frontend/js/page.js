!function(t,e){if(!t.ued||!t.ued.Page){var n=function(){this.store={}};n.prototype={config:function(t){if("string"==typeof t.name){var n=e.extend(!0,{dir:"a",deps:null,version:"001",filter:null,_path:null,_state:"unload"},t);if("function"==typeof n.filter&&!n.filter())return!1;n._path=n.debug || this.parse(n,"//ue.17173cdn.com/a/site/${dir}/${name}/production.js?${version}"),this.store[t.name]=n,n.deps&&"loaded"!=this._getState(n.deps)||this._send(n)}},parse:function(t,e){return e.replace(/\${(\w+)}/g,function(e,n){return t[n]})},_setState:function(t,e){this.store[t]._state=e},_getState:function(t){return this.store[t]?this.store[t]._state:!1},_send:function(t){"unload"==this._getState(t.name)&&(this._setState(t.name,"loading"),e.ajax({url:t._path,type:"GET",cache:!0,dataType:"script"}))},_depsLoad:function(t){var e;for(var n in this.store)e=this.store[n],e.deps==t&&this._send(e)},add:function(t,n,i){this.config(e.extend(!0,{name:t,version:i},n))},append:function(t){t&&(t+="?"+(new Date).getHours(),e("body").append('<script type="text/javascript" src="'+t+'"></script>'))},emit:function(t){this._setState(t.name,"loaded"),this._depsLoad(t.name)},exec:function(t,e){var n=this.store[t];e.entry(n,this)}};var i=new n;i.append("//ue.17173cdn.com/a/site/pageconfig.js?"+new Date().getDate()),t.Page=i;$(function(){$('.sitepage-macro').each(function(){i.config({name:$(this).data('type'),version:$(this).data('version'),debug:$(this).data('debug')})})});}}((window.ued=window.ued||{},window.ued),jQuery);