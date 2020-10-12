
@extends('admin.dashboard')
<title> Cập nhật: {{$post->name}} </title>

@section('content')

<body>

<div class="container-fluid">
    <h3 style="margin-left:30px">Cập nhật: {{$post->name}}</h3><br>

        <div class="row ">

          <!-- left column -->

          <div class="col-md-8" style="margin-left:25px">

          <form role="form" method="POST" action="" enctype="multipart/form-data">
              @csrf
            <!-- general form elements -->
            <div class="field card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


                <div class="card-body" style="background-color:white">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$post->name}}" required autocomplete="" autofocus >
                  </div>
                  <div class="form-group">
                    <label for="id">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug"value="{{$post->slug}}" >
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

            <div class="card card-light warning card-tabs">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-4"><strong>LANGUAGE CODE</h3></strong>

                    <ul class="nav nav-pills ml-auto p-2">
                    @foreach($contents as $content)
                    <li class="nav-item"><a class="nav-link" href="#{{$content->language_code}}" data-toggle="tab">{{$content->language_code}} </a></li>
                    @endforeach
                    </ul>
                </div><!-- /.card-header -->

                <div class="card-body">
                    <div class="tab-content">


                        @foreach($contents as $content)
                        <div class="tab-pane" id="{{$content->language_code}}">
                            <div class="card card-primary">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                        <input type="hidden" class="form-control" id="language_code"  value="{{$content->language_code}}" name="Language[{{$content->language_code}}][language_code]" required autocomplete="" >
                                        </input>
                                        </div>
                                        </div><br>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="name">Meta Title</label>
                                            <textarea type="text"  cols="10" rows="2" class="form-control" id="meta_title" name="Language[{{$content->language_code}}][meta_title]"
                                                required autocomplete="">{{$content->meta_title}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="name">Meta Description</label>
                                            <textarea type="text"  cols="10" rows="4" class="form-control" id="meta_description" name="Language[{{$content->language_code}}][meta_description]"
                                                required autocomplete="">{{$content->meta_description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="name">Quote</label>
                                            <textarea type="text"  cols="10" rows="2" class="form-control" id="quote" name="Language[{{$content->language_code}}][quote]"
                                                required autocomplete="">{{$content->quote}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="name">Body</label>
                                                <textarea id="body" cols="30" rows="15" type="textarea" class="form-control" name="Language[{{$content->language_code}}][body]"
                                                    required autocomplete="" >{{$content->body}}</textarea>

                                                    <!--
                                                    <script src={{ url('ckeditor/ckeditor.js') }}></script>
                                                    <script>
                                                    CKEDITOR.replace( 'body', {
                                                        filebrowserBrowseUrl: '{{ asset('/ckfinder/ckfinder.html/') }}',
                                                        filebrowserImageBrowseUrl: '{{ asset('/ckfinder/ckfinder.html?type=Images/') }}',
                                                        filebrowserFlashBrowseUrl: '{{ asset('/ckfinder/ckfinder.html?type=Flash/') }}',
                                                        filebrowserUploadUrl: '{{ asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files/') }}',
                                                        filebrowserImageUploadUrl: '{{ asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images/') }}',
                                                        filebrowserFlashUploadUrl: '{{ asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash/') }}'
                                                            } );
                                                    </script>
                                                    -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div><!-- /.card-body -->

                </div>
            </div>
        </div>
    </div>


                    <div class="col-md-3">

                        <div class="field"  style="background-color:white"><br>
                            <center><button  name="upload" type="submit" class="btn btn-success btn-lg btn-block">
                            <h4>ĐĂNG BÀI</h4></button></center><br>

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


                            <div class="field">
                            <div class="card">
                                <div class="card-header d-flex p-0">
                                    <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link" href="#cate" data-toggle="tab"><strong>Cate ID</strong></a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">

                                        <div class="tab-pane active" id="cate">
                                            @foreach($cates as $cate)
                                                <input style="margin-left:20px" type="checkbox" id="post_cat_id" name="post_cat_id" value="{{$cate->id}}" class="form-check-input" >
                                                <label style="margin-left:50px" for="form-check-label"> {{$cate->name}}</label><br>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div><br>

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
