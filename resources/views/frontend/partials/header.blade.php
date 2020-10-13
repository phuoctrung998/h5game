
@include('frontend.partials.head')

<body class="page-index" cms-node="made">


<!-- top nav -->

<div class="g-topbar topbar-ex" id="ue-topbar" >
   <div class="g-topbar-in">
        <div class="topbar-c1">
            <!--
            <span class="topbar-go-index">
                <a href="#" onclick="Topbar.sendLog.call(this,'0141a8aedb1b53970fac7c81dac79fbe')" style="width:100px" class="topbar-link" id="topbar-backhome-link">
                    <img alt="MGP" width="135" height="45" src="{{asset('admin_assets/dist/img/logo_mpg.png')}}">
                </a>
            </span>
            -->
            <div class="topbar-nav" id="topbar-nav">

                <nav>
                    <ul>
                        <li><strong><h3>
                            <a href="#" style="width:100px;color:blue;font-size:11pt"><i class="topbar-ico-set"></i> DANH MỤC</a></strong></h3>
                            <ul>
                                <li><a class="ripple active"   style="font-size:10pt" aria-current="page" target="blank " href="http://mangaplay.vn/">Trang chủ</a></li>
                                <li><a class="ripple" href="#" style="font-size:10pt" rel="noopener noreferrer"> Nạp thẻ</a></li>
                                <li><a class="ripple" href="#" style="font-size:10pt" rel="noopener noreferrer"> Khách hàng thân thiết</a></li>
                                <li><a class="ripple" href="#" style="font-size:10pt" rel="noopener noreferrer"> Nhận &amp; đổi giftcode</a></li>
                                <li><a class="ripple" href="#" style="font-size:10pt" rel="noopener noreferrer"> Hỗ trợ</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>

        <div class="topbar-c2" style="visibility:hidden;">
            <a href="" target="_blank" class="topbar-tg" title="">
                <img src="" width="164" height="44">
            </a>
        </div>

        <div class="topbar-c3">

        </div>

        <div class="topbar-user" id="topbar-pprt">
            <div class="topbar-user-loginout">
                <div class="topbar-bt-login" id="topbar-inner-logout-container">

                    @if(Auth::check())
                    <a  id="topbar-pprt-login" style="font-size:12pt" class="topbar-link">{{ Auth::user()->name }}</a>
                    <span class="topbar-bt-sign">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="topbar-link">Thoát</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </span>

                    @else
                    <a href="/login" id="topbar-pprt-login" class="topbar-link">Đăng nhập</a>
                    <span class="topbar-bt-sign">
                        <a href="/register" class="topbar-link">Đăng ký</a>
                    </span>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>


	<!-- end top nav -->
<div id="js-global-topnav" style="height:0"></div>

    <!--[if lte IE 7]>
<script src="//ue.17173cdn.com/a/module/ie67/2016/js/browser_update.min.js"></script>
<![endif]-->
    <div class="wrap"><br>
        <!-- header -->
        <div class="header container animate-enter">
            <a href="#" target="" class="logo animated animated1 bounceInLeft delay0d5s">
                <img src="{{asset('admin_assets/dist/img/logo_mpg.png')}}" alt="" width="220" height="60" id="logo_img" />
            </a>
            <!-- [if IE 6]>
            <script type="text/javascript" src="http://ue.17173cdn.com/a/lib/logo/js/ie6logo.js"></script>
            <script type="text/javascript">ie6Img(document.getElementById('logo_img'));</script>
            <![endif]-->
            <div class="animated animated2 bounceInDown delay1s">
                <h1 class="tit" style="color:ghostwhite"><center>H5 GAME</center></h1>
                <div class="link-box"><a onclick="myFunction()"><i class="ico ico-favorites"></i>Lưu URL</a>
                <script>
                function myFunction() {
                alert("Dùng Ctrl + D để lưu URL");
                }
                </script>
                <a href="#"><i class="ico ico-xyx"></i>{{$counts}} game hot</a></div>
            </div>
            <div class="animated animated3 bounceInRight delay0d5s"><br>
                <div class="txt">Người dùng máy tính<br> vui lòng sử dụng<br> những trình duyệt này<i class="line line1"></i><i class="line line2"></i></div>
                <div class="browser-box"><img src="http://ue1.17173cdn.com/a/h5/index/2015/img/browser.png" alt="" class="png" />
                    <a href="javascript:;" class="browser browser1"><img src="http://ue1.17173cdn.com/a/h5/index/2015/img/browser1.png" width="31" height="30" /></a>
                    <a href="javascript:;" class="browser browser2"><img src="http://ue1.17173cdn.com/a/h5/index/2015/img/browser2.png" width="34" height="34" /></a>
                    <a href="javascript:;" class="browser browser3"><img src="http://ue1.17173cdn.com/a/h5/index/2015/img/browser3.png" width="42" height="42" /></a>
                    <a href="javascript:;" class="browser browser4"><img src="http://ue1.17173cdn.com/a/h5/index/2015/img/browser4.png" width="33" height="33" /></a>
                    <a href="javascript:;" class="browser browser5"><img src="http://ue1.17173cdn.com/a/h5/index/2015/img/browser5.png" width="28" height="28" /></a>
                </div>
            </div>
        </div>
