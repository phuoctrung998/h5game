<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Common\ContentsModel;
use App\Model\GameH5Model;

class GameH5Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {
        $allgames     = GameH5Model::game();
        $week_ranks   = GameH5Model::week_rank();
        $month_ranks   = GameH5Model::month_rank();
        $hots         = GameH5Model::hot();
        $sliders      = GameH5Model::slider();
        $counts       = count($allgames);
        $cates        = GameH5Model::allcate();
        $gamecates    = GameH5Model::getAllGamesByCateId(1);
        $gamecates2   = GameH5Model::getAllGamesByCateId(2);
        $gamecates3   = GameH5Model::getAllGamesByCateId(3);
        $gamecates4   = GameH5Model::getAllGamesByCateId(4);
        $gamecates5   = GameH5Model::getAllGamesByCateId(5);
        $gamecates6   = GameH5Model::getAllGamesByCateId(6);

        return view('frontend.home',compact('allgames','hots','cates','counts','sliders','week_ranks','month_ranks',
                                            'gamecates','gamecates2','gamecates3','gamecates4','gamecates5','gamecates6'));
    }


}
