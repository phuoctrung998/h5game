advConfigs.loadConfigFile([
  {
    filter: function () {
      return /^http:\/\/news\.17173\.com\/content\/[a-zA-Z\d\-]+\/[a-zA-Z\d\_]+\.shtml/.test(
        location.href
      )
    },
    configs: ['//s.17173cdn.com/news/final-all.js']
  },
  {
    filter: function () {
      return (
        /^http:\/\/bbs\.17173\.com\/forum/.test(location.href) ||
        /^http:\/\/bbs\.17173\.com\/thread-/.test(location.href)
      )
    },
    configs: ['//s.17173cdn.com/bbs/list-final.js']
  },
  {
    filter: function () {
      return location.hostname == 'v.17173.com'
    },
    configs: ['https://s.17173cdn.com/vlog/media-global.js']
  },
  {
    filter: function () {
      return location.hostname == 'v.17173.com' && location.pathname == '/'
    },
    configs: ['https://s.17173cdn.com/vlog/media-index.js']
  },
  {
    filter: function () {
      return (
        location.hostname == 'v.17173.com' && /^\/v_/.test(location.pathname)
      )
    },
    configs: ['https://s.17173cdn.com/vlog/media-final.js']
  },
  {
    filter: function () {
      var isZqModuleList =
        location.hostname == 'news.17173.com' && /morelist/gi.test(location.href) && !!ued.pageInfo,
        isZqModuleFinal =
          location.hostname == 'news.17173.com' && /content\/[a-zA-Z\d\-]+\/[a-zA-Z\d\_]+\.shtml/.test(
            location.href
          ) && !!ued.pageInfo,
        isNewgameFinal = /^https?:\/\/newgame\.17173\.com\/game-info-\d+\.html/.test(
          location.href
        ),
        isHaoFinal = /^https?:\/\/hao\.17173\.com\/game-info-\d+\.html/.test(
          location.href
        )
      return isZqModuleList || isZqModuleFinal || isNewgameFinal || isHaoFinal
    },
    configs: ['https://s.17173cdn.com/global/newgame-zq.js']
  }
])
