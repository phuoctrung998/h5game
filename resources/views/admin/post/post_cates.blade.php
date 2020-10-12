@extends('admin.dashboard')
<title>Thêm mới</title>
@section('content')
<body>

<div class="container-fluid">
    <h4>Thêm mới</h4><br>
        <div class="row ">

          <!-- left column -->

          <div class="col-md-12" style="margin-right:25px">


            <!-- general form elements -->
            <div class="field card-primary">
              <div class="card-header">
                <h3 class="card-title">CREATE</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('admin.post.add') }}" enctype="multipart/form-data">
              @csrf
                <div class="card-body" style="background-color:white">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required autocomplete="" autofocus >
                  </div>

                  <div class="form-group">
                    <label for="id">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug">
                  </div>
                  <div class="form-group">
                    <label for="id">Parent_id</label>
                    <input type="text" class="form-control" id="parent_id" name="parent_id" required autocomplete="" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <div class="input-group">
                    <select id="status" class="form-control" name="status" required autocomplete="" autofocus>
                    <option value="1">Active</option>
                    <option value="0">None</option>
                    </select>
                    </div>
                  </div><br>

                  <div class="container-fluid">
                        <hr>
                        <h4>ĐA NGÔN NGỮ</h4><br>

                    <div class="row">
                        <div class="col-md-12">
                    @include('admin.contents.contents')

                    <div class="field"><br>
                        <button  name="upload" type="submit" class="btn btn-success ">
                        <h4>ĐĂNG BÀI</h4></button>
                        </div>
                        <br>
                    </div>
                </div>



            </div>

        </div>
                    <!-- / ĐA NGÔN NGỮ -->

            </form>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div>

</div>


@endsection
