<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Common\ContentsModel;
use App\Model\Common\LanguageModel;



class ContentsController extends Controller
{
    /*
    //create
    public function add_contents()
    {
        $languages = LanguageModel::where('status', '=', 1)->get();

        return view('admin.contents.contents',['languages' => $languages]);
    }

    public function up_contents(Request $request)
    {
        $input                  = $request->all();
        $item                   = new ContentsModel();
        $item->parent_id        = $input['parent_id'];
        $item->type_id          = $input['type_id'];
        $item->language_code    = $input['language_code'];
        $item->meta_title       = $input['meta_title'];
        $item->meta_description = $input['meta_description'];
        $item->quote            = $input['quote'];
        $item->body             = $input['body'];

        $item->save();
        return redirect()->route('admin.contents.list');
    }
    */
    //view
    public function list()
    {
        $contents = ContentsModel::all();
        return view('admin.contents.contents_list',['contents' => $contents]);
    }

    //edit
    public function showFormEditcontents($id)
    {
        $languages       = LanguageModel::where('status', '=', 1)->get();;
        $item            = ContentsModel::find($id);
        $data['content'] = $item;
        return view('admin.contents.contents_edit',$data,['languages' => $languages]);
    }
    public function edit($id,Request $request)
    {

        $input                  = $request->all();

        $item                   = ContentsModel::find($id);
        $item->parent_id        = $input['parent_id'];
        $item->type_id          = $input['type_id'];
        $item->language_code    = $input['language_code'];
        $item->meta_title       = $input['meta_title'];
        $item->meta_description = $input['meta_description'];
        $item->quote            = $input['quote'];
        $item->body             = $input['body'];

        $item->save();
        return redirect()->route('admin.contents.list');
    }

    public function delete($id)
    {
        $item = ContentsModel::find($id);
        $item->delete();
        return redirect()->route('admin.contents.list');
    }



}
