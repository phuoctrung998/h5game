@extends('admin.main')

@section('content')

<body>

<section class="content">
      <div class="container-fluid"><br>
      <h1> Danh sách Admin</h1><br>
        <a href="{{url('/admin/add')}}" class="btn btn-success">Thêm Admin</a>
        <div class="row">
          <div class="col-12"><hr>
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><strong>List Admin</h1></strong>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                                <thead >
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
                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                            <a href="{{url('/admin/edit/'.$user->id)}}">
                                            <span class="nav-icon fas fa-edit" title="Edit"></span>
                                            </a>
                                                 <a onclick="return confirm('Delete this admin ?')" href="{{url('/admin/delete/'.$user->id)}}">
                                                 <span class="nav-icon fas fa-trash-alt" title="Delete"></span>
                                                     </a>
                                            </td>
                                        </tr>
                                     @endforeach
                                    </tbody>
                                    </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    </body>
</html>
@endsection
