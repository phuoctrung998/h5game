<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Common\CommentModel;



class CommentController extends Controller
{
    //create
    public function add()
    {
        return view('admin.comment.comment');
    }

    public function up(Request $request)
    {

        $input           = $request->all();
        $item            = new CommentModel();
        $item->member_id = $input['member_id'];
        $item->parent_id = $input['parent_id'];
        $item->type_id   = $input['type_id'];
        $item->body      = $input['body'];


        $item->save();
        return redirect()->route('admin.comment.list');
    }

    //view
    public function list()
    {
        $comments = CommentModel::all();
        return view('admin.comment.comment_list',['comments' => $comments]);
    }

    //edit
    public function showFormEditcomment($id)
    {
        $comments        = CommentModel::all();
        $item            = CommentModel::find($id);
        $data['comment'] = $item;
        return view('admin.comment.comment_edit',$data,['comments' => $comments]);
    }
    public function edit($id,Request $request)
    {

        $input           = $request->all();
        $item            = CommentModel::find($id);
        $item->member_id = $input['member_id'];
        $item->parent_id = $input['parent_id'];
        $item->type_id   = $input['type_id'];
        $item->body      = $input['body'];


        $item->save();
        return redirect()->route('admin.comment.list');
    }

    public function delete($id)
    {
        $item = CommentModel::find($id);
        $item->delete();
        return redirect()->route('admin.comment.list');
    }



}
