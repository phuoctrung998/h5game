@extends('admin.main')

@section('content')

<body>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><strong>List Post</h1></strong>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                                    <thead >

                                        <tr>

                                            <th data-breakpoints="xs">ID</th>


                                            <th><strong>Name</span></strong></th>
                                            <th><strong>Slug</span></strong></th>
                                            <th><strong>Cat ID</span></strong></th>
                                            <th><strong>Status</span></strong></th>
                                            <th><strong>Timer</span></strong></th>
                                            <th><strong>Updated_at</span></strong></th>
                                            <th><strong>Action</span></strong></th>

                                        </tr>
                                    </thead>
                                    <tbody>



                                    @foreach($posts as $post)
                                    <?php

                                        $stt = $post->status;

                                        if  ($stt == 0){
                                            $stt = 'None';
                                        } elseif ($stt == 1){
                                            $stt = 'Active';
                                        }

                                    ?>

                                        <tr>
                                            <td><span  class="footable-toggle"></span><center>{{ $post-> id }}</center></td>
                                            <td>{{ $post->name }}</td>
                                            <td>{{ $post->slug }}</td>
                                            <td>{{ $post->post_cat_id }}</td>
                                            <td>{{ $stt }}</td>
                                            <td>{{ $post->timer }}</td>
                                            <td>{{ $post->updated_at }}</td>

                                            <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 100px;">
                                            <a href="{{url('/admin/post/editpost/'.$post->id)}}">
                                             <span class="nav-icon fas fa-edit" title="Edit"></span>
                                            </a>
                                            <a href="{{url('/'.$post->slug)}}" target="blank">
                                             <span class="nav-icon fas fa-eye" title="View"></span>
                                            </a>
                                            <a onclick="return confirm('Delete this post ?')" href="{{url('/admin/post/deletepost/'.$post->id)}}" >
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
