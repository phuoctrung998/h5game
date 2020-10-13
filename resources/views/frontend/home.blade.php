@include('frontend.partials.head')
@include('frontend.partials.header')



        <!-- /header -->
        <!-- content -->
        <div class="content container"><br>
            <!-- pn-top -->
            <div class="pn-top">
                <div class="pn-col1">
                    <!-- pn-recommend -->
                    <div class="pn-recommend">
                        <div class="pn-c1">
                        @foreach($hots as $hot)
                            <a href="{{$hot->game_url}}" target="_blank" class="hot">
                                <img src="{{$hot->images}}" alt="" width="264" height="131">
                                <span class="detail">
		                        <span class="tit">{{$hot->name}}</span>
                                <b class="mask"></b>
                                </span>

                            </a>
                        @endforeach

                        </div>
                        <div class="pn-c2">
                            <div class="slide-box">
                                <!-- container for the slides -->
                                <div class="slide-con">
                                    <!-- first slide -->
                                    @foreach($sliders as $game)
                                    <div class="item">
                                        <a href="{{$game->game_url}}" target="_blank" class="con">
                                            <span class="c1"><img src="{{$game->images}}" alt="" width="471" height="271"></span>
                                            <span class="c2">
				                            <span class="tit">{{$game->name}}</span>
                                            <b class="mask"></b>
                                            </span>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- the tabs -->
                                <div class="slidetabs">
                                @foreach($sliders as $game)
                                    <a href="javascript:;" class="current"></a>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /pn-recommend -->
                    <!-- pn-game -->
                    <div class="pn-game js-tab">

                        <div class="tab-hd">
                            <ul class="gb-tab">
                                <li class="gb-tab-item gb-tab-item1"><a href="javascript:;" class="gb-tab-c current">Tất cả</a></li>
                                @foreach($cates as $cate)
                                <li class="gb-tab-item"><i class="line"></i><a href="javascript:;" class="gb-tab-c">{{$cate->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="tab-bd gb-tab-pn">
                            <div class="gb-tab-con" style="display: block;">
                                <!-- list-game -->
                                <ul class="list-game js-code clearfix" id="demo1" data-widget="commentinfo" data-widget-pv=".pv" data-widget-cv="false">
                                    @foreach($allgames as $game)
                                    <li data-topicId="10052378_1_92064">

                                        <div class="pic-box">
                                            <a href="{{$game->game_url}}" target="_blank"><img src="{{$game->images}}" alt="" width="75" height="75"></a>
                                        </div>

                                        <div class="detail-box">
                                            <div class="tit"><a href="{{$game->game_url}}" target="_blank">{{$game->name}}</a></div>
                                            <div class="info"><span class="sep">|</span><span class="num pv"></span> Người đã chơi</div>
                                            <div class="link-box">
                                                <a href="{{$game->game_url}}" target="_blank">Chơi ngay</a>
                                                <a href="javascript:;" class="mobile" >Chơi trên di động</a>
                                            </div>
                                        </div>

                                    </li>
                                    @endforeach
                                </ul>
                            </div>


                            <div class="gb-tab-con" style="display: none;">
                                <ul class="list-game js-code clearfix" id="demo1" data-widget="commentinfo" data-widget-pv=".pv" data-widget-cv="false">
                                    @foreach($gamecates as $game)
                                    <li data-topicId="10054043_1_92064">
                                        <div class="pic-box">
                                            <a href="{{$game->game_url}}" target="_blank">
                                                <img src="{{$game->images}}" alt="" width="75" height="75">
                                            </a>
                                        </div>
                                        <div class="detail-box">
                                            <div class="tit"><a href="{{$game->game_url}}" target="_blank">{{$game->name}}</a></div>
                                            <div class="info"><span class="sep">|</span><span class="num pv"></span> Người đã chơi</div>
                                            <div class="link-box">
                                                <a href="{{$game->game_url}}" target="_blank">Chơi ngay</a><br>
                                                <a href="javascript:;" class="mobile" >{{$game->name}}</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="gb-tab-con" style="display: none;">
                                <ul class="list-game js-code clearfix" id="demo1" data-widget="commentinfo" data-widget-pv=".pv" data-widget-cv="false">
                                    @foreach($gamecates2 as $game)
                                    <li data-topicId="10054043_1_92064">
                                        <div class="pic-box">
                                            <a href="{{$game->game_url}}" target="_blank">
                                                <img src="{{$game->images}}" alt="" width="75" height="75">
                                            </a>
                                        </div>
                                        <div class="detail-box">
                                            <div class="tit"><a href="{{$game->game_url}}" target="_blank">{{$game->name}}</a></div>
                                            <div class="info"><span class="sep">|</span><span class="num pv"></span> Người đã chơi</div>
                                            <div class="link-box">
                                                <a href="{{$game->game_url}}" target="_blank">Chơi ngay</a><br>
                                                <a href="javascript:;" class="mobile" >{{$game->name}}</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="gb-tab-con" style="display: none;">
                                <ul class="list-game js-code clearfix" id="demo1" data-widget="commentinfo" data-widget-pv=".pv" data-widget-cv="false">

                                    @foreach($gamecates3 as $game)
                                    <li data-topicId="10054043_1_92064">
                                        <div class="pic-box">
                                            <a href="{{$game->game_url}}" target="_blank">
                                                <img src="{{$game->images}}" alt="" width="75" height="75">
                                            </a>
                                        </div>
                                        <div class="detail-box">
                                            <div class="tit"><a href="{{$game->game_url}}" target="_blank">{{$game->name}}</a></div>
                                            <div class="info"><span class="sep">|</span><span class="num pv"></span> Người đã chơi</div>
                                            <div class="link-box">
                                                <a href="{{$game->game_url}}" target="_blank">Chơi ngay</a><br>
                                                <a href="javascript:;" class="mobile" >{{$game->name}}</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="gb-tab-con" style="display: none;">
                                <ul class="list-game js-code clearfix" id="demo1" data-widget="commentinfo" data-widget-pv=".pv" data-widget-cv="false">

                                    @foreach($gamecates4 as $game)
                                    <li data-topicId="10054043_1_92064">
                                        <div class="pic-box">
                                            <a href="{{$game->game_url}}" target="_blank">
                                                <img src="{{$game->images}}" alt="" width="75" height="75">
                                            </a>
                                        </div>
                                        <div class="detail-box">
                                            <div class="tit"><a href="{{$game->game_url}}" target="_blank">{{$game->name}}</a></div>
                                            <div class="info"><span class="sep">|</span><span class="num pv"></span> Người đã chơi</div>
                                            <div class="link-box">
                                                <a href="{{$game->game_url}}" target="_blank">Chơi ngay</a><br>
                                                <a href="javascript:;" class="mobile" >{{$game->name}}</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>

                            <div class="gb-tab-con" style="display: none;">
                                <ul class="list-game js-code clearfix" id="demo1" data-widget="commentinfo" data-widget-pv=".pv" data-widget-cv="false">
                                    @foreach($gamecates5 as $game)
                                    <li data-topicId="10054043_1_92064">
                                        <div class="pic-box">
                                            <a href="{{$game->game_url}}" target="_blank">
                                                <img src="{{$game->images}}" alt="" width="75" height="75">
                                            </a>
                                        </div>
                                        <div class="detail-box">
                                            <div class="tit"><a href="{{$game->game_url}}" target="_blank">{{$game->name}}</a></div>
                                            <div class="info"><span class="sep">|</span><span class="num pv"></span> Người đã chơi</div>
                                            <div class="link-box">
                                                <a href="{{$game->game_url}}" target="_blank">Chơi ngay</a><br>
                                                <a href="javascript:;" class="mobile" >{{$game->name}}</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="gb-tab-con" style="display: none;">
                                <ul class="list-game js-code clearfix" id="demo1" data-widget="commentinfo" data-widget-pv=".pv" data-widget-cv="false">

                                    @foreach($gamecates6 as $game)
                                    <li data-topicId="10054043_1_92064">
                                        <div class="pic-box">
                                            <a href="{{$game->game_url}}" target="_blank">
                                                <img src="{{$game->images}}" alt="" width="75" height="75">
                                            </a>
                                        </div>
                                        <div class="detail-box">
                                            <div class="tit"><a href="{{$game->game_url}}" target="_blank">{{$game->name}}</a></div>
                                            <div class="info"><span class="sep">|</span><span class="num pv"></span> Người đã chơi</div>
                                            <div class="link-box">
                                                <a href="{{$game->game_url}}" target="_blank">Chơi ngay</a><br>
                                                <a href="javascript:;" class="mobile" >{{$game->name}}</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- /pn-game -->
                </div>
                <div class="pn-col2">

                    <div class="comm-mod mod-rank-week">
                        <div class="mod-hd"><br>
                            <h2 class="tit">Xếp hạng hàng tuần</h2>
                        </div>
                        <div class="mod-bd">
                            <ul class="list-rank js-rank">
                            @foreach($ranks as $game)
                                <li>
                                    <a href="{{$game->game_url}}" target="_blank" class="con">
                                        <span class="num">1</span>
                                            <span class="detail">
                                                <span class="pic">
                                                    <img src="{{$game->images}}" alt="" width="52" height="52">
                                                </span>
                                                <span class="txt">
                                                    <span class="t1">{{$game->name}}</span>
                                                <span class="t2"><span class="c-tx" data-pv>936</span> người chơi</span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            @endforeach


                            </ul>
                        </div>
                    </div>

                    <div class="comm-mod mod-rank-month">
                        <div class="mod-hd">
                            <h2 class="tit">Xếp hạng hàng tháng</h2>
                        </div>
                        <div class="mod-bd">
                            <ul class="list-rank js-rank">
                                @foreach($ranks as $game)
                                <li>
                                    <a href="{{$game->game_url}}" target="_blank" class="con">
                                        <span class="num">1</span>
                                        <span class="detail">
                                            <span class="pic">
                                                <img src="{{$game->images}}" alt="" width="52" height="52">
                                            </span>
                                            <span class="txt">
                                            <span class="t1">{{$game->name}}</span>
                                        <span class="t2"><span class="c-tx" data-pv>1955</span> người chơi</span>
                                        </span>
                                        </span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- /pn-top -->
            <!-- pn-friendly -->

            <div class="pn-friendly">
                <div class="pn-hd">
                    <h2 class="tit">Liên kết</h2>
                    <i class="line"></i>
                </div>
                <div class="pn-bd">
                    <div class="link-box">
                            <a href="http://mangaplay.vn/" target="_blank">Trang chủ MangaPlay</a>
                            <a href="http://narutotocchien.com/" target="_blank">Naruto Tốc chiến</a>
                            <a href="http://sieuxayda.com/" target="_blank">Siêu Xayda</a>
                            <a href="https://bleachvn.com/" target="_blank">Bleach Online</a>
                            <a href="https://narutolucdao.com/" target="_blank">Naruto Lục đạo</a>
                    </div>
                </div>
            </div>

            <!-- /pn-friendly -->
        </div>
        <!-- /content-->
    </div>
    <!-- pop-code -->
    <div class="pop-code pop-code-game">
        <a href="javascript:;" class="close">×</a>
        <div class="code-img codeImg"></div>
        <div class="txt">
           MangaPlay
        </div>
    </div>
    <!-- /pop-code -->
    <!-- pop-code -->
    <div class="pop-code pop-code-float">
        <a href="javascript:;" class="close">×</a>
        <div class="code-img">
            <img src="https://www.upsieutoc.com/images/2020/10/09/121198781_1234453810252362_7466733644118743663_n.png" />
        </div>
        <div class="txt">
            MangaPlay
        </div>
    </div>
    @include('frontend.partials.footer')

    <!--[if IE 8]>
<script type="text/javascript" src="http://ue.17173cdn.com/a/module/ie67/2016/js/browser_update_bar.min.js"></script>
<![endif]-->
</body>

</html>
