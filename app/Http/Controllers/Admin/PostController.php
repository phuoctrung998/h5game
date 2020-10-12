<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Common\PostModel;
use App\Model\Common\LanguageModel;
use App\Model\Common\PostcatesModel;
use App\Model\Common\ContentsModel;
use Mockery\Generator\DefinedTargetClass;

            class PostController extends Controller
            {

                //post

                //create
                public function add_post()
                {
                    $languages = LanguageModel::where('status', '=', 1)->where('flag_default', '=', 0)->get();
                    $defaults  = LanguageModel::where('flag_default', '=', 1)->get();
                    $cates = PostcatesModel::all();
                    $type = '1';
                    return view('admin.post.post',compact('languages','type','cates','defaults'));
                }
                public function up_post(Request $request)
                {
                    $input = $request->all();

                    $item              = new PostModel();
                    $item->name        = $input['name'];
                    $item->post_cat_id = $input['post_cat_id'];
                    $item->status      = $input['status'];
                    $item->slug        = $input['slug'];
                    $item->is_timer    = $input['is_timer'];
                    $item->timer       = $input['timer'];

                    if($item->save())
                    {
                        //xu ly luu content
                        $parents   = PostModel::whereRaw('id = (select max(`id`) from posts)')->get();
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
                    }
                    return  redirect()->route('admin.post.listPost');
                }

                //view
                public function post_list()
                {
                    $posts = PostModel::all();
                    return view('admin.post.post_list',['posts' => $posts]);
                }

                //edit
                public function showFormEditPost($id)
                {

                    $posts        = PostModel::all();
                    $cates        = PostcatesModel::all();
                    $item         = PostModel::find($id);
                    $contents     = ContentsModel::where('parent_id', '=', $id)->get();
                    $data['post'] = $item;
                    return view('admin.post.post_edit',$data,compact('posts', 'cates','contents'));
                }
                public function editpost($id,Request $request)
                {
                    $input             = $request->all();

                    $item              = PostModel::find($id);
                    $item->name        = $input['name'];
                    $item->slug        = $input['slug'];
                    $item->post_cat_id = $input['post_cat_id'];
                    $item->status      = $input['status'];
                    $item->is_timer    = $input['is_timer'];
                    $item->timer       = $input['timer'];

                    if($item->save())
                    {
                        //xu ly edit content

                        $languages = LanguageModel::where('status', '=', 1)->get();
                        $type = 1;
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
                    return  redirect()->route('admin.post.listPost');
                }

                public function deletepost($id)
                {
                    $item = PostModel::find($id);
                    $item->delete();
                    return redirect()->route('admin.post.listPost');
                }


                //postcates

                //create
                public function add_postcates()
                {
                    $parents = PostcatesModel::whereRaw('id = (select max(`id`) from post_cates)')->get();
                    $languages = LanguageModel::where('status', '=', 1)->where('flag_default', '=', 0)->get();
                    $defaults  = LanguageModel::where('flag_default', '=', 1)->get();
                    $type = '2';
                    return view('admin.post.post_cates',compact('parents','languages','type','defaults'));
                }
                public function up_postcates(Request $request)
                {

                    $input           = $request->all();
                    $item            = new PostcatesModel();
                    $item->name      = $input['name'];
                    $item->slug      = $input['slug'];
                    $item->parent_id = $input['parent_id'];
                    $item->status    = $input['status'];
                    if($item->save()){
                        //xu ly luu content
                        $parents   = PostcatesModel::whereRaw('id = (select max(`id`) from post_cates)')->get();
                        $languages = LanguageModel::where('status', '=', 1)->get();
                        foreach($parents as $parent)
                        foreach($languages as $language){


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

                                print_r($lang);
                                print_r($input['Language'][$lang]);
                            }

                        }


                    }
                    return redirect()->route('admin.post.listPostcates');
                }

                //view
                public function postcates_list()
                {
                    $posts = PostcatesModel::all();
                    return view('admin.post.postcates_list',['posts' => $posts]);
                }

                //edit

                public function showFormEditPostcates($id)
                {
                    $item         = PostcatesModel::find($id);
                    $contents     = ContentsModel::where('parent_id', '=', $id)->get();
                    $data['post'] = $item;
                    return view('admin.post.postcates_edit',$data,compact('contents'));
                }
                public function editpostcates($id,Request $request)
                {
                    $input           = $request->all();
                    $item            = PostcatesModel::find($id);
                    $item->name      = $input['name'];
                    $item->slug      = $input['slug'];
                    $item->parent_id = $input['parent_id'];
                    $item->status    = $input['status'];
                    if($item->save())
                    {
                        //xu ly edit content

                        $languages = LanguageModel::where('status', '=', 1)->get();
                        $type = 2;
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

                    return redirect()->route('admin.post.listPostcates');
                }

                public function deletepostcates($id)
                {
                    $item = PostcatesModel::find($id);
                    $item->delete();
                    return redirect()->route('admin.post.listPostcates');
                }


            }

