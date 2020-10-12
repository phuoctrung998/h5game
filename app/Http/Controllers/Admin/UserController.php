<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Common\UserModel;

class UserController extends Controller
{

    //user
    public function user_list()
    {
        $users = UserModel::all();
        return view('admin.users.list',['users' => $users]);
    }

    public function showFormEditUser($id)
    {
        $item= UserModel::find($id);
        $data['user'] = $item;
        return view('admin.users.edit',$data);
    }
    public function edit($id,Request $request)
    {
        $input       = $request->all();
        $item        = UserModel::find($id);
        $item->name  = $input['name'];
        $item->email = $input['email'];
        $item->save();
        return redirect()->route('admin.user.list');
    }
    public function delete($id)
    {
        $item = UserModel::find($id);
        $item->delete();
        return redirect()->route('admin.user.list');
    }
}
