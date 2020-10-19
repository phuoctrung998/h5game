<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Games\GameModel;
use App\Model\Games\GamecatesModel;
use App\Model\Common\LanguageModel;
use App\Model\Common\ContentsModel;
use App\Model\Games\CatesIndexModel;


class GameController extends Controller
{

                public function add_game()
                {
                    $parents   = GameModel::whereRaw('id = (select max(`id`) from games)')->get();
                    $languages = LanguageModel::where('status', '=', 1)->where('flag_default', '=', 0)->get();
                    $defaults  = LanguageModel::where('flag_default', '=', 1)->get();
                    $type      = '3';
                    $cates     = GamecatesModel::all();
                    return view('admin.game.game',compact('parents','languages','cates','type','defaults'));
                }
                public function up_game(Request $request)
                {
                    //luu game
                    $item = new GameModel();

                    $request->validate([
                        'images' => 'required|',
                    ]);
                    $path="/uploads/games/game/";
                    $fileName       = time().'.'.$request->images->extension();
                    $request->images->move(public_path($path), $fileName);

                    $item->images   = $path.$fileName;
                    $input          = $request->all();

                    $item->name     = $input['name'];
                    $item->cate_id  = $input['cate_id'];
                    $item->status   = $input['status'];
                    $item->platform = $input['platform'];
                    $item->game_url = $input['game_url'];
                    $item->flag_hot = $input['flag_hot'];

                    if($item->save())
                    {
                            //xu ly luu content
                            $parents   = GameModel::whereRaw('id = (select max(`id`) from games)')->get();
                            $languages = LanguageModel::where('status', '=', 1)->get();
                            foreach($parents as $parent)
                            foreach($languages as $language)
                            {

                                $lang = $language->code;
                                if(isset($input['Language'][$lang]))
                                {
                                    $item = new ContentsModel();
                                    $item->parent_id        = $parent->id;
                                    $item->type_id          = $input['Language'][$lang]['type_id'];
                                    $item->language_code    = $input['Language'][$lang]['language_code'];
                                    $item->meta_title       = $input['Language'][$lang]['meta_title'];
                                    $item->meta_description = $input['Language'][$lang]['meta_description'];
                                    $item->quote            = $input['Language'][$lang]['quote'];
                                    $item->body             = $input['Language'][$lang]['body'];

                                    $item->save();

                                }
                            }
                            //end

                            //xy ly luu cates_games

                            $games = GameModel::whereRaw('id = (select max(`id`) from games)')->get();
                            foreach($games as $game)
                            {
                                    $item                = new CatesIndexModel();
                                    $item->game_id       = $game->id;
                                    $item->game_name     = $input['name'];
                                    $item->game_cates_id = $input['cate_id'];
                                    $item->save();
                            }

                    }


                    return redirect()->route('admin.game.listgame');
                }

                //view
                public function game_list()
                {
                    $games = GameModel::all();
                    return view('admin.game.game_list',['games' => $games]);
                }

                //edit
                public function showFormEditgame($id)
                {
                    $cates        = GamecatesModel::all();
                    $item         = GameModel::find($id);
                    $contents     = ContentsModel::where('parent_id', '=', $id)->get();
                    $data['game'] = $item;
                    return view('admin.game.game_edit',$data,compact('cates','contents'));
                }
                public function editgame($id,Request $request)
                {
                    $item = GameModel::find($id);

                    $request->validate([
                        'images' => 'required|',
                    ]);
                    $path="/uploads/games/game/";
                    $fileName       = time().'.'.$request->images->extension();
                    $request->images->move(public_path($path), $fileName);

                    $item->images   = $path.$fileName;
                    $input          = $request->all();

                    $item->name     = $input['name'];
                    $item->slug     = $input['slug'];
                    $item->cate_id  = $input['cate_id'];
                    $item->status   = $input['status'];
                    $item->platform = $input['platform'];
                    $item->game_url = $input['game_url'];
                    $item->flag_hot = $input['flag_hot'];
                    if($item->save())

                    {
                        //xu ly edit content
                        $languages = LanguageModel::where('status', '=', 1)->get();
                        $type = 3;
                        foreach($languages as $language)
                        {
                            $lang = $language->code;
                            if(isset($input['Language'][$lang]))
                            {
                                ContentsModel::where('parent_id', '=', $id)
                                        ->where('language_code', '=', $lang)
                                        ->update
                                        ([
                                            'parent_id'        => $id,
                                            'type_id'          => $type,
                                            'language_code'    => $input['Language'][$lang]['language_code'],
                                            'meta_title'       => $input['Language'][$lang]['meta_title'],
                                            'meta_description' => $input['Language'][$lang]['meta_description'],
                                            'quote'            => $input['Language'][$lang]['quote'],
                                            'body'             => $input['Language'][$lang]['body']
                                        ]);
                            }

                        }

                    }



                    return redirect()->route('admin.game.listgame');
                }

                public function deletegame($id)
                {
                    $item = GameModel::find($id);
                    $item->delete();
                    return redirect()->route('admin.game.listgame');
                }

                //cates
                public function add_gamecates()
                {
                    $parents   = GamecatesModel::whereRaw('id = (select max(`id`) from game_cates)')->get();
                    $languages = LanguageModel::where('status', '=', 1)->where('flag_default', '=', 0)->get();
                    $defaults  = LanguageModel::where('flag_default', '=', 1)->get();
                    $type ='4';
                    return view('admin.game.gamecates',compact('parents','languages','type','defaults'));
                }
                public function up_gamecates(Request $request)
                {
                    $item = new GamecatesModel();
                    $request->validate([
                        'images' => 'required|',
                    ]);
                    $path     ="/uploads/games/gamecates/";
                    $fileName = time().'.'.$request->images->extension();
                    $request->images->move(public_path($path), $fileName);

                    $item->images = $path.$fileName;

                    $input        = $request->all();
                    $item->name   = $input['name'];
                    $item->status = $input['status'];


                    if($item->save())
                    {
                        //xu ly luu content
                        $parents   = GamecatesModel::whereRaw('id = (select max(`id`) from game_cates)')->get();
                        $languages = LanguageModel::where('status', '=', 1)->get();
                        foreach($parents as $parent)

                        foreach($languages as $language)
                        {
                            $lang = $language->code;
                            if(isset($input['Language'][$lang]))
                            {
                                $item = new ContentsModel();
                                $item->parent_id        = $parent->id;
                                $item->type_id          = $input['Language'][$lang]['type_id'];
                                $item->language_code    = $input['Language'][$lang]['language_code'];
                                $item->meta_title       = $input['Language'][$lang]['meta_title'];
                                $item->meta_description = $input['Language'][$lang]['meta_description'];
                                $item->quote            = $input['Language'][$lang]['quote'];
                                $item->body             = $input['Language'][$lang]['body'];

                                $item->save();

                            }
                        } //end
                    }


                    return redirect()->route('admin.game.listgamecates');
                }

                //view
                public function gamecates_list()
                {
                    $cates = GamecatesModel::all();
                    return view('admin.game.gamecates_list',['cates' => $cates]);
                }

                //edit

                public function showFormEditgamecates($id)
                {
                    $item               = GamecatesModel::find($id);
                    $contents           = ContentsModel::where('parent_id', '=', $id)->get();
                    $data['game_cates'] = $item;
                    return view('admin.game.gamecates_edit',$data,compact('contents'));
                }

                public function editgamecates($id,Request $request)
                {
                    $item = GamecatesModel::find($id);

                    $request->validate([
                        'images' => 'required|',
                    ]);
                    $path="/uploads/games/gamecates/";
                    $fileName = time().'.'.$request->images->extension();
                    $request->images->move(public_path($path), $fileName);

                    $item->images = $path.$fileName;

                    $input        = $request->all();
                    $item->name   = $input['name'];
                    $item->status = $input['status'];
                    $item->slug   = $input['slug'];


                    if($item->save())
                    {
                        //xu ly edit content
                        $languages = LanguageModel::where('status', '=', 1)->get();
                        $type = 4;
                        foreach($languages as $language)
                        {
                            $lang = $language->code;
                            if(isset($input['Language'][$lang]))
                            {
                                ContentsModel::where('parent_id', '=', $id)
                                        ->where('language_code', '=', $lang)
                                        ->update
                                        ([
                                            'parent_id'        => $id,
                                            'type_id'          => $type,
                                            'language_code'    => $input['Language'][$lang]['language_code'],
                                            'meta_title'       => $input['Language'][$lang]['meta_title'],
                                            'meta_description' => $input['Language'][$lang]['meta_description'],
                                            'quote'            => $input['Language'][$lang]['quote'],
                                            'body'             => $input['Language'][$lang]['body']
                                        ]);
                            }

                        }

                    }
                    return redirect()->route('admin.game.listgamecates');
                }

                public function deletegamecates($id)
                {
                    $item = GamecatesModel::find($id);
                    $item->delete();
                    return redirect()->route('admin.game.listgamecates');
                }





}

