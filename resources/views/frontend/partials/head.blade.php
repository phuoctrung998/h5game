<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" type="image/png" href="{{asset('admin_assets/dist/img/logomgp.png')}}"/>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge7,chrome=1" />
    <meta name="keywords" content="HTML5" />
    <meta name="description" content="HTML5" />
    <title>H5 - MangaPlay</title>
    <!--globalHeadBegin-->




    <link href="{{ asset('frontend/css/reset-and-utils-1.0.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.11.1.min.js')}}" data-config=""></script>
    <script type="text/javascript" src="{{ asset('frontend/js/tabs.all.min.js')}}" data-config=""></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.qrcode.min.js')}}" data-config=""></script>

    <link href="{{ asset('frontend/css/global-topbar.css?20120615')}}" rel="stylesheet" type="text/css" id="css-gtp" />

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css?v=1')}}">
	<link rel="stylesheet" href="{{ asset('frontend/css/topbar_style.css?10087')}}">



    <link href="{{ asset('frontend/css/global-topbar.css?20120615')}}" rel="stylesheet" type="text/css" id="css-gtp" />

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css?v=1')}}">

    <script type="text/javascript" src="{{ asset('frontend/js/seed.js')}}"></script>

    <script type="text/javascript" src="{{ asset('frontend/js/page.js?1.1.0')}}"></script>

    <style>


         nav ul{
            display: flex;
         }
         nav> ul li{
            list-style: none; /* bỏ dấu chấm mặc định của li */
            /* kẻ đường bên trái và bên phải của li */

         }
         nav> ul li a{
            display: block;
            padding: 0 25px;
            line-height: 40px;
            color: black;
            text-decoration: none;
            font-family: aria;


         }
         nav ul li:first-child {
            border-left: none; /* bỏ đường kè trái của phần tử đầu tiên */
         }
         nav> ul li:first-child a{
            border-bottom-left-radius: 5px;
            border-top-left-radius: 5px;
            border-bottom-right-radius: 5px;
            border-top-right-radius: 5px;
         }
         /* Khi hover đến li, tô màu cho thẻ a */
         nav ul li:hover>a{
            background: #ccd9ff;
            opacity: 1;
            color: red;
         }
         /*menu con*/
         /*Ẩn các menu con cấp 1,2,3*/
         nav li ul{
            display: none;
            min-width: 200px;
            position: absolute;
         }
         nav li>ul li{
            width: 100%;
            border: 2px;
            border-bottom: 2px;
            background: #ffc299;
            text-align: left;
         }


         /*khi hover thì hiện menu con*/
         nav  li:hover > ul{
            display:  block;
         }

    </style>
</head>


<script src="http://ue.17173cdn.com/a/lib/spm_modules/pandora/1.0.0/pandora.js"></script>
    <script type="text/javascript" src="http://hits.17173.com/static.php?channel=&web_id=102283&kind="></script>
    <script type="text/javascript">
        $(function() {
            //pop-code
            $('.pop-code').find('.close').click(function(event) {
                $(this).parents('.pop-code').hide();
            });
        });
    </script>
    <!--[if IE 6]>
	<script type="text/javascript">
		var floatt;
		floatt = parseInt($('.pop-code-float').offset().top);
		$(window).scroll(function() {
		    if ($(window).scrollTop() > floatt) {
		    var scrollt= $(window).scrollTop();
		    $('.pop-code-float').css('top',scrollt+floatt);
		    } else {
		       $('.pop-code-float').css('top',floatt);
		    }
		});
</script>
<![endif]-->
    <!-- /pop-code -->
    <script type="text/javascript" data-config="">
        var NUM;
        $(function() {
            var Request = {};
            Request = GetRequest();
            NUM = Request['num'];
            //favorites
            $('#favorites').click(function() {
                if (window.ActiveXObject) {
                    var n = window.location.href,
                        t = window.title;
                    window.external.addFavorite(n, t)
                } else {
                    alert("\u8bf7\u6309Ctrl+D\u5c06\u672c\u9875\u6dfb\u52a0\u5230\u6536\u85cf\u5939")
                }
            });

            //js-rank
            $('.js-rank').each(function(index, el) {
                $(this).find('li:lt(3)').addClass('top');
                $(this).find('li:eq(0)').addClass('top1');
                $(this).find('li:eq(1)').addClass('top2');
                $(this).find('li:eq(2)').addClass('top3');

                $(this).find('li').each(function(index, el) {
                    $(this).find('.num').html(index + 1);
                });
            });

            //slide-box
            $(".slide-box .slidetabs").tabs(".slide-box .slide-con > .item", {
                effect: 'fade',
                autoplay: 'true',
                rotate: 'true'
            }).slideshow();
            $(".slide-box .slidetabs").data("slideshow").play();

            //js-tab
            $(".js-tab").each(function() {
                if (NUM == null) {
                    NUM == 0;
                }
                $(".gb-tab:eq(0)", $(this)).tabs($(".gb-tab-pn:eq(0) > div", $(this)), {
                    event: 'click',
                    initialIndex: NUM
                });
            });

            //pop-code
            $('.pop-code').find('.close').click(function(event) {
                $(this).parents('.pop-code').hide();
            });

            //js-code
            var codeimg, codeleft, codetop, codehtml;
            var mobileh = $('.js-code .mobile').height();
            $('.js-code').find('.mobile').click(function(event) {
                $('.pop-code-game').find('.code-img').html('');
                codeimg = $(this).data('code');
                codeleft = $(this).offset().left;
                codetop = $(this).offset().top;
                //	  	codehtml = '<img src="'+codeimg+'" alt="" width="120" height="120"  />'
                //	  	jQuery('.codeImg').;
                $('.pop-code-game').css({
                    'left': codeleft,
                    'top': codetop + mobileh
                });
                $('.pop-code-game').find('.code-img').qrcode({
                    width: 120,
                    height: 120,
                    correctLevel: 0,
                    text: codeimg
                })
                $('.pop-code-game').show();
            });
        });

        function GetRequest() {
            var url = location.search; //获取url中"?"符后的字串
            var theRequest = new Object();
            if (url.indexOf("?") != -1) {
                var str = url.substr(1);
                strs = str.split("&");
                for (var i = 0; i < strs.length; i++) {
                    theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
                }
            }
            return theRequest;
        }
    </script>


    <script type="text/javascript">
        (function() {
            if (/Android|iPhone|SymbianOS|Windows Phone|iPod/gi.test(navigator.userAgent) && window.$) {
                $('.global-footer a:last').after(' | <a href="javascript:;" onclick="var date = new Date();date.setTime(date.getTime() - 10086);document.cookie = \'__stay_on_pc=1;domain=.17173.com;path=/; expires=\' + date.toUTCString() + \';\';location.hash=\'\';location.reload(true);">\u79fb\u52a8\u7248</a>');
            }
        })()
    </script>

    <script>
        window.topbarConfig = {
            autoToggleStyle: false,
            style: 2
        }
    </script>

    <script type="text/javascript" src="js/topbar.js?201703231650"></script>
    <script type="text/javascript">
        advConfigs.loadConfigFile('https://s.17173cdn.com/global/topbar.js');
    </script>

    <script type="text/javascript">
        advConfigs.loadConfigFile('js/global.js');
    </script>

    <script src="js/topBanner.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/specialfloatad.min.js"></script>
    <div class="adsystem-mark" data-ad-type="AdZhuanquFloat"></div>
    <script type="text/javascript">
        advConfigs.loadConfigFile('js/site.js');
    </script>
    <script src="js/main.bundle.js?v2" charset="utf-8" type="text/javascript"></script>

    <script type="text/javascript" src="js/site.zhuanqu.js"></script>

    <script type="text/javascript" src="js/jinrituijian.js" charset="gbk"></script>


    <script type="text/javascript">
        advConfigs.loadConfigFile('js/global.js');
    </script>
    <script type="text/javascript" src="js/lp.min.js"></script>

    <script type="text/javascript">
        location.protocol === 'http:' && advConfigs.loadConfigFile('sj/fufeituiguang.js');
    </script>

