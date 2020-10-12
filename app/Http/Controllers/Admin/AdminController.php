<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Common\AdminModel;

class AdminController extends Controller
{

            public function show_dashboard()
            {
                return view('admin/dashboard');
            }

            //admin
            public function list()
            {
                $users = AdminModel::all();
                return view('admin.manager.list',['users' => $users]);
            }
            public function showFormEditAdmin($id)
            {
                $item= AdminModel::find($id);
                $data['user'] = $item;
                return view('admin.manager.edit',$data);
            }

            public function edit($id,Request $request)
            {
                $input       = $request->all();
                $item        = AdminModel::find($id);
                $item->name  = $input['name'];
                $item->email = $input['email'];
                $item->save();
                return redirect()->route('admin.manager.list');
            }


            public function delete($id)
            {
                $item = AdminModel::find($id);
                $item->delete();
                return redirect()->route('admin.manager.list');
            }
            public function add()
            {
                return view('admin.manager.add');
            }
            public function up(Request $request)
            {
                $input          = $request->all();
                $item           = new AdminModel();
                $item->name     = $input['name'];
                $item->email    = $input['email'];
                $item->password = bcrypt($input['password']);

                $item->save();
                return redirect()->route('admin.manager.list');
            }


}
