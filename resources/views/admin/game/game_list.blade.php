@extends('admin.main')

@section('content')

<body>

<section class="game">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><strong>List Games</h1></strong>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead class="thead-success">

                        <tr>
                            <th> ID</th>
                            <th> Images</th>
                            <th>Name</th>
                            <th>Cate</th>
                            <th>Status</th>
                            <th>Platform</th>
                            <th>Hot</th>
                            <th>Update_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($games as $game)

                        <?php
                        //xét điều kiện hiển thị
                        $id = $game->status;

                        if ($id == 1){
                            $id = 'Action';
                        } elseif ($id == 0) {
                            $id = 'None';
                        }

                        $hot = $game->flag_hot;

                        if ($hot == 1){
                            $hot = 'Hot';
                        } elseif ($id == 0) {
                            $hot = 'Thường';
                        }

                        ?>

                        <tr>

                            <td>{{ $game->id }}</td>
                            <td> <img src='{{ $game->images }}' style="height:100px; width:150px"></td>
                            <td>{{ $game->name }}</td>
                            <td>{{ $game->cate_id }}</td>
                            <td>{{ $id }}</td>
                            <td>{{ $game->platform }}</td>
                            <td>{{ $hot }}</td>
                            <td>{{ $game->updated_at }}</td>

                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 30px;">

                            <a href="{{url('/admin/game/editgame/'.$game->id)}}">
                            <span class="nav-icon fas fa-edit" title="Edit"></span>
                            </a>

                            <a onclick="return confirm('Delete this games ?')" href="{{url('/admin/game/deletegame/'.$game->id)}}">
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
