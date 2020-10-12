
@extends('admin.dashboard')
<title> Thêm bài viết mới</title>

@section('content')

<body>

<div class="container-fluid">
    <h4>Thêm bài viết mới</h4><br>

        <div class="row ">

          <!-- left column -->

          <div class="col-md-8">

          <form role="form" method="POST" action="{{ route('admin.post.addPost') }}" enctype="multipart/form-data">
              @csrf
            <!-- general form elements -->
            <div class="field card-primary">
              <div class="card-header">
                <h3 class="card-title">CREATE</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


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
                    <label for="status">Status</label>
                    <div class="input-group">
                    <select id="status" class="form-control" name="status" required autocomplete="" autofocus>
                    <option value="1">Active</option>
                    <option value="0">None</option>
                    </select>
                    </div>
                  </div>
                  <br><hr>
                    <!-- / ĐA NGÔN NGỮ -->
                    <h4>ĐA NGÔN NGỮ</h4><br>
                    @include('admin.contents.contents')
                </div>

            </div>
          </div>

                    <div class="col-md-4" >
                                <div class="field"  style="background-color:white"><br>
                                    <div class="col-sm-12">
                                        <button  name="upload" type="submit" class="btn btn-success btn-lg btn-block">
                                        <h4>ĐĂNG BÀI</h4></button><br>
                                    </div>
                                    <div class="help-block"></div>
                                </div>
                                    <br>
                            <div class="field">

                                <div class="col-sm-12" style="background-color:white"><br>

                                        <div class="form-group field-posts-is_timer has-success" >
                                            <label class="control-label" for="is_timer">Hẹn giờ</label>
                                            <select id="is_timer" class="form-control" name="is_timer">
                                                <option value="0">Không hẹn giờ</option>
                                                <option value="1">Hẹn giờ</option>
                                            </select>
                                        </div>
                                        <div class="field">
                                            <div class="form-group field-posts-timer has-success" >
                                                <label class="control-label" for="timer">Thời gian hẹn giờ</label>
                                                <input type="datetime-local" id="timer" class="form-control" name="timer">
                                                <br>
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="help-block"></div>
                                <br>
                                <div class="field" >

                                    <div   div class="card">
                                        <div class="card-header d-flex p-0">
                                            <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link" href="#cate" data-toggle="tab"><strong>Cate ID</strong></a></li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">

                                                <div class="tab-pane active" id="cate">
                                                        @foreach($cates as $cate)
                                                            <input style="margin-left:10px" type="radio" id="post_cat_id" name="post_cat_id" value="{{$cate->id}}" class="form-check-input" >
                                                            <label style="margin-left:40px;font-style:" for="form-check-label"> {{$cate->name}}</label><br>
                                                        @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


            </form>
          </div>

          <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div>
</div>



@endsection
