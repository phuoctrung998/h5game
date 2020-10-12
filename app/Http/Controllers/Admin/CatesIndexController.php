<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Games\GameModel;
use App\Model\Games\GamecatesModel;
use App\Model\Games\CatesIndexModel;
use App\Model\Games\FavoriteModel;



class CatesIndexController extends Controller
{


//catesIndex


    public function catesIndex_list()
    {
        $games = CatesIndexModel::all();
        return view('admin.game.catesIndex_list',['games' => $games]);
    }

    public function showFormEditcatesIndex($id)
    {
        $games = CatesIndexModel::all();
        $item  = CatesIndexModel::find($id);
        $data['game'] = $item;
        return view('admin.game.catesIndex_edit',$data,['games' => $games]);
    }
    public function editcatesIndex($id,Request $request)
    {

        $input               = $request->all();
        $item                = CatesIndexModel::find($id);
        $item->game_cates_id = $input['game_cates_id'];
        $item->game_id       = $input['game_id'];
        $item->game_name     = $input['game_name'];

        $item->save();
        return redirect()->route('admin.game.listcatesIndex');
    }

    public function deletecatesIndex($id)
    {
        $item = CatesIndexModel::find($id);
        $item->delete();
        return redirect()->route('admin.game.listcatesIndex');
    }

    //favorite

    public function add_favorite()
    {
        return view('admin.game.favorite');
    }

    public function up_favorite(Request $request)
    {
        $input           = $request->all();
        $item            = new FavoriteModel();
        $item->member_id = $input['member_id'];
        $item->game_id   = $input['game_id'];

        $item->save();
        return redirect()->route('admin.game.listfavorite');
    }
    public function favorite_list()
    {
        $games = FavoriteModel::all();
        return view('admin.game.favorite_list',['games' => $games]);
    }

    public function showFormEditfavorite($id)
    {
        $games        = FavoriteModel::all();
        $item         = FavoriteModel::find($id);
        $data['game'] = $item;
        return view('admin.game.favorite_edit',$data,['games' => $games]);
    }
    public function editfavorite($id,Request $request)
    {

        $input           = $request->all();
        $item            = FavoriteModel::find($id);
        $item->member_id = $input['member_id'];
        $item->game_id   = $input['game_id'];

        $item->save();
        return redirect()->route('admin.game.listfavorite');
    }

    public function deletefavorite($id)
    {
        $item = FavoriteModel::find($id);
        $item->delete();
        return redirect()->route('admin.game.listfavorite');
    }
}
