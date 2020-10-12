@extends('admin.main')

@section('content')

<body>

<section class="game">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><strong>List</h1></strong>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead class="thead-success">

                        <tr>
                            <th> ID</th>
                            <th> Member ID</th>
                            <th>Game ID</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($games as $game)

                        <tr>
                            <td>{{ $game->id }}</td>
                            <td>{{ $game->member_id }}</td>
                            <td>{{ $game->game_id}}</td>

                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">

                            <a href="{{url('/admin/game/editfavorite/'.$game->id)}}">
                            <span class="nav-icon fas fa-edit" title="Edit"></span>
                            </a>

                            <a onclick="return confirm('Delete this cates ?')" href="{{url('/admin/game/deletefavorite/'.$game->id)}}">
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
