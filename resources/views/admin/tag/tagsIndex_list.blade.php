@extends('admin.dashboard')

@section('content')

<body>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><strong>List </h1></strong>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                        <tr>
                                            <th data-breakpoints="xs">ID</th>

                                            <th> Tag ID</th>
                                            <th>Game ID</th>

                                            <th>Updated_at</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($tags as $tag)
                                        <tr>
                                            <td><span class="footable-toggle"></span>{{$tag-> id }}</td>

                                            <td>{{ $tag->tag_id }}</td>
                                            <td>{{ $tag->game_id }}</td>

                                            <td>{{ $tag->updated_at }}</td>


                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">
                                            <a href="{{url('/admin/tag/edittagsIndex/'.$tag->id)}}">
                                            <span class="nav-icon fas fa-edit" title="Edit"></span>
                                            </a>

                                            <a onclick="return confirm('Delete this tags ?')"  href="{{url('/admin/tag/deletetagsIndex/'.$tag->id)}}">
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
