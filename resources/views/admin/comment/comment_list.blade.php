@extends('admin.main')

@section('content')

<body>

<section class="comment">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><strong>List comment</h1></strong>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead class="thead-success">

                        <tr>
                            <th>ID</th>
                            <th>Member ID</th>
                            <th>Parent ID</th>
                            <th>Type ID</th>
                            <th>Body</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($comments as $comment)

                        <tr>

                            <td>{{ $comment->id }}</td>
                            <td>{{ $comment->member_id }}</td>
                            <td>{{ $comment->parent_id }}</td>
                            <td>{{ $comment->type_id }}</td>
                            <td>{{ $comment->body }}</td>
                            <td>{{ $comment->updated_at }}</td>

                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">

                            <a href="{{url('/admin/comment/edit/'.$comment->id)}}">
                            <span class="nav-icon fas fa-edit" title="Edit"></span>
                            </a>

                            <a onclick="return confirm('Delete this comment ?')" href="{{url('/admin/comment/delete/'.$comment->id)}}">
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
