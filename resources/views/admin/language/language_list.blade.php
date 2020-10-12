@extends('admin.main')

@section('content')

<body>

<section class="language">
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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>GG Code</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($languages as $language)

                        <?php
                        //xét điều kiện hiển thị
                        $id = $language->status;

                        if ($id == 1){
                            $id = 'Đã kích hoạt';
                        } elseif ($id == 0) {
                            $id = 'Chưa kích hoạt';
                        }

                        ?>


                        <tr>
                            <td>{{ $language->id }}</td>
                            <td>{{ $language->name }}</td>
                            <td>{{ $language->code}}</td>
                            <td>{{ $language->gg_code }}</td>
                            <td>{{ $language->slug }}</td>
                            <td>{{ $id }}</td>

                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">

                            <a href="{{url('/admin/language/edit/'.$language->id)}}">
                            <span class="nav-icon fas fa-edit" title="Edit"></span>
                            </a>

                            <a onclick="return confirm('Delete this language ?')" href="{{url('/admin/language/delete/'.$language->id)}}">
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
