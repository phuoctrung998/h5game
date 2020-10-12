@extends('admin.dashboard')
<title>Cập nhật: {{ $game_cates->name }} </title>
@section('content')

<body>


<div class="container-fluid">

    <h3>Cập nhật: {{ $game_cates->name }}</h3><br>
        <div class="row ">
          <!-- left column -->

          <div class="col-md-12" >


            <!-- general form elements -->
            <div class="field card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                       <!-- form start -->
                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body" style="background-color:white">
                            <div class="form-group">
                            <label for="name" style="margin-left:5px" >Name</label>
                                <div class="col-md-12">
                                    <input id="name"  type="text" class="form-control" name="name"
                                     value="{{ $game_cates->name }}" required autocomplete="" autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                            <label for="name"style="margin-left:5px" >Slug</label>
                                <div class="col-md-12">
                                    <input id="slug"   type="text" class="form-control" name="slug"
                                    value="{{ $game_cates->slug }}" required autocomplete="status" >

                                </div>
                            </div>

                            <div class="form-group">
                            <label for="name" style="margin-left:5px" >Status</label>
                                <div class="col-md-12">
                                    <select id="status"   type="text" class="form-control"
                                    name="status" value="{{ $game_cates->status }}" required autocomplete="status" >
                                    <option value="0">None</option>
                                    <option value="1">Active</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">

                            <label for="name" style="margin-left:5px">Images</label>
                                <div class="col-md-12">
                                     <img src="http://placehold.it/120"" style="width:200px;height:200px"><br><br>
                                    <input id="images"   type="file"  name="images" value="{{ old('images') }}" required autocomplete="images" >

                                </div>
                            </div>


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
                                    <button type="submit" class="btn btn-success">
                                       SAVE
                                    </button>

                                </div>
                            </div>
                            </div>
                            </div>
                        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
