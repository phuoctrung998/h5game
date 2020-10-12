<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Common\LanguageModel;


class LanguageController extends Controller
{
    public function add()
    {
        return view('admin.language.language');
    }
    public function up(Request $request)
    {
        $input              = $request->all();
        $item               = new LanguageModel();
        $item->name         = $input['name'];
        $item->code         = $input['code'];
        $item->gg_code      = $input['gg_code'];
        $item->status       = $input['status'];
        $item->flag_default = $input['flag_default'];

        $item->save();
        return redirect()->route('admin.language.list');
    }

    //view
    public function list()
    {
        $languages = LanguageModel::all();
        return view('admin.language.language_list',['languages' => $languages]);
    }

    //edit

    public function showFormEditlanguage($id)
    {
        $item             = LanguageModel::find($id);
        $data['language'] = $item;
        return view('admin.language.language_edit',$data);
    }

    public function edit($id,Request $request)
    {
        $input              = $request->all();
        $item               = LanguageModel::find($id);
        $item->name         = $input['name'];
        $item->slug         = $input['slug'];
        $item->code         = $input['code'];
        $item->gg_code      = $input['gg_code'];
        $item->status       = $input['status'];
        $item->flag_default = $input['flag_default'];

        $item->save();

        return redirect()->route('admin.language.list');
    }

    public function delete($id)
    {
        $item = LanguageModel::find($id);
        $item->delete();
        return redirect()->route('admin.language.list');
    }



}

