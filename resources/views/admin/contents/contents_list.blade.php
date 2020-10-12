@extends('admin.main')

@section('content')

<body>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><strong>List Content</h1></strong>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <thead>

                        <tr>
                            <th> # </th>
                            <th>Parent ID</th>
                            <th>Type ID</th>
                            <th>Language</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Quote</th>
                            <th>Updated_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($contents as $content)

                        <?php
                        //xét điều kiện hiển thị

                        $type = $content->type_id;
                        if ($type == 1){
                            $type = "Post";
                        } elseif ($type == 2){
                            $type = "Post_cates";
                        } elseif ($type == 3){
                            $type = "Game";
                        } elseif ($type == 4){
                            $type = "Game_cates";
                        }

                        ?>


                        <tr>
                            <td style="width: 10px;">{{ $content->id }}</td>
                            <td>{{ $content->parent_id }}</td>
                            <td>{{ $type }}</td>
                            <td>{{ $content->language_code }}</td>
                            <td>{{ $content->meta_title }}</td>
                            <td>{{ $content->meta_description }}</td>
                            <td>{{ $content->quote }}</td>
                            <td>{{ $content->updated_at }}</td>

                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;">

                            <a href="{{url('/admin/contents/edit/'.$content->id)}}">
                            <span class="nav-icon fas fa-edit" title="Edit"></span>
                            </a>

                            <a onclick="return confirm('Delete this contents ?')" href="{{url('/admin/contents/delete/'.$content->id)}}">
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
