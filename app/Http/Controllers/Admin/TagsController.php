<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Backend\TagsModel;
use App\Model\Backend\TagsIndexModel;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{

    //post

    //create
    public function add_tags()
    {
        $tags = TagsModel::all();
        return view('admin.tag.tags',['tags' => $tags]);
    }
    public function up_tags (Request $request)
    {
        $input      = $request->all();

        $item       = new TagsModel();
        $item->name = $input['name'];
        $item->slug = $input['slug'];

        $item->save();

        return redirect()->route('admin.tags.listTags');
    }

    //view
    public function tags_list()
    {

        $tags = TagsModel::all();
        return view('admin.tag.tags_list',['tags' => $tags]);
    }

    //edit
    public function showFormEditTags($id)
    {
        $tags        = TagsModel::all();
        $item        = TagsModel::find($id);
        $data['tag'] = $item;
        return view('admin.tag.tags_edit',$data,['tags' => $tags]);
    }
    public function edittags($id,Request $request)
    {
        $input = $request->all();

        $item       = TagsModel::find($id);
        $item->name = $input['name'];
        $item->slug = $input['slug'];


        $item->save();

        return redirect()->route('admin.tags.listTags');
    }

    public function deletetags($id)
    {
        $item = TagsModel::find($id);
        $item->delete();
        return redirect()->route('admin.tags.listTags');
    }

    //tagsIndex

     //create
    public function add_tagsIndex()
    {
        return view('admin.tag.tagsIndex');
    }
    public function up_tagsIndex(Request $request)
    {

        $input         = $request->all();
        $item          = new TagsIndexModel();
        $item->tag_id  = $input['tag_id'];
        $item->game_id = $input['game_id'];
        $item->save();
        return redirect()->route('admin.tags.listTagsIndex');
    }

    //view
    public function tagsIndex_list()
    {
        $tags = TagsIndexModel::all();
        return view('admin.tag.tagsIndex_list',['tags' => $tags]);
    }

    //edit

    public function showFormEditTagsIndex($id)
    {
        $item        = TagsIndexModel::find($id);
        $data['tag'] = $item;
        return view('admin.tag.tagsIndex_edit',$data);
    }
    public function edittagsIndex($id,Request $request)
    {
        $input         = $request->all();
        $item          = TagsIndexModel::find($id);
        $item->tag_id  = $input['tag_id'];
        $item->game_id = $input['game_id'];
        $item->save();

        return redirect()->route('admin.tags.listTagsIndex');
    }

    public function deletetagsIndex($id)
    {
        $item = TagsIndexModel::find($id);
        $item->delete();
        return redirect()->route('admin.tags.listTagsIndex');
    }

}


