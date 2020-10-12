@extends('admin.dashboard')

@section('content')

<body>
<h1><center> Danh sách các tài khoản hiện có</h1></center>
<div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="table" class="table table-responsive-fix footable-loaded footable" data-toggle-column="last">
                                    <thead class="thead-success">
                                        <tr>
                                            <th data-breakpoints="xs">ID</th>
                                            <th> Name</th>
                                            <th>Email</th>
                                            <th>Updated_at</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $user)
                                        <tr>
                                            <td><span class="footable-toggle"></span>{{ $user-> id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td>

                                                 <a href="{{url('/admin/user/edit/'.$user->id)}}" class="btn btn-success">Edit</a>
                                                 <a  onclick="return confirm('Delete this user ?')"href="{{url('/admin/user/delete/'.$user->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                     @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
    </body>
</html>
@endsection
