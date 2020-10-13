ued.Page.config({
	name: 'zqentertainment',
	version: '1.0.2',
	filter: function() {
		return /dnf.+content|wow.+content|tl.+content|lol.+news|xyq.+content|hs.+news|jx3.+content|bns.+content|cf.+content|news.+z\/yys\/content|cr.+content/g.test(location.href);
	}
});

ued.Page.config({
	'name':'daoliangtestlist',
	deps:'zqentertainment',
	'version':'1.0.0',
	'filter': function() {
		return /dnf.+content|wow.+content|tl.+content|lol.+news|xyq.+content|jx3.+content|bns.+content|cf.+content/g.test(location.href);
	}
});

ued.Page.config({
	'name':'wenzilian',
	'version':'1.0.3',
	'filter': function() {
		return /news.+content/g.test(location.href);
	}
});