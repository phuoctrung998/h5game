@extends('admin.main')

@section('content')

<body>

<section class="game">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><strong>List Game Cates</h1></strong>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead class="thead-success">

                        <tr>
                            <th style="width: 20px;"> ID</th>
                            <th style="width: 100px;"> Images</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cates as $cate)

                        <?php
                        //xét điều kiện hiển thị
                        $id = $cate->status;

                        if ($id == 1){
                            $id = 'Action';
                        } elseif ($id == 0) {
                            $id = 'None';
                        }

                        ?>


                        <tr>

                            <td>{{ $cate->id }}</td>
                            <td> <img src='{{ $cate->images }}' style="height:150px; width:150px"></td>
                            <td>{{ $cate->name }}</td>
                            <td>{{ $cate->slug }}</td>
                            <td>{{ $id }}</td>


                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">

                            <a href="{{url('/admin/game/editgamecates/'.$cate->id)}}">
                            <span class="nav-icon fas fa-edit" title="Edit"></span>
                            </a>

                            <a onclick="return confirm('Delete this games ?')" href="{{url('/admin/game/deletegamecates/'.$cate->id)}}">
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
