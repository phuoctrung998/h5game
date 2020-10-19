<?php

namespace App\Model;

use App\Model\Games\GamecatesModel;
use App\Model\Games\GameModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GameH5Model extends Model

{

    public static function allcate()
    {
        $cates = GamecatesModel::all()->sortBy('id');
        return $cates;
    }

    public static function game()
    {
        $games = GameModel::all();
        return $games;
    }

    public static function week_rank()
    {
        $ranks = GameModel::where('views', '>', '2000')->orderByDesc('views')->paginate(7);
        return $ranks;
    }

    public static function month_rank()
    {
        $ranks = GameModel::where('views', '>', '3000')->orderByDesc('views')->paginate(5);
        return $ranks;
    }

    public static function slider()
    {
        $sliders = GameModel::where('flag_hot', '=', 1)->paginate(4);
        return $sliders;
    }

    public static function hot()
    {
        $hots = GameModel::where('flag_hot', '=', 1)->paginate(2);
        return $hots;
    }

    public static function getAllGamesByCateId($id)
    {
        $models = GameModel::where('cate_id', '=', $id)->get();
        return $models;
    }

}
