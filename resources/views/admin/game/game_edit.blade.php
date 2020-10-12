@extends('admin.dashboard')
<title>Cập nhật: {{ $game->name }}</title>
@section('content')
<body>

        <div class="container-fluid">

                    <div class="row ">

                        <div class="col-md-8" style="margin-left:25px">
                            <h3>Cập nhật: {{ $game->name }}</h3><br>
                            <div class="field card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">EDIT</h3>
                                </div>

                                <form role="form" method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                    <div class="card-body" style="background-color:white">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" value="{{ $game->name }}" id="name" name="name" required autocomplete="" autofocus >
                                    </div>


                                    <div class="form-group">
                                        <label for="id">Slug</label>
                                        <textarea type="text" cols="10" rows="2" class="form-control" id="slug" name="slug">{{ $game->slug}}</textarea>
                                    </div>

                                <div class="form-group field">
                                <label for="name" class="control-label" style="color:black">Game Url</label>

                                        <textarea id="game_url" cols="10" rows="4" type="url" class="form-control @error('game_url') is-invalid @enderror" name="game_url"
                                        value="{{ $game->game_url }}" required autocomplete="" autofocus>{{ $game->game_url }}</textarea>
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
                                    <div class="col-sm-12">
                                        <center><button  name="upload" type="submit" class="btn btn-success btn-lg btn-block">
                                        <h4>ĐĂNG BÀI</h4></button></center><br>
                                    </div>
                                    <div class="help-block"></div>
                                </div>
                                    <br>


                                    <div class="field"  >

                                        <div class="col-sm-12" style="background-color:white"><br>

                                            <div class="form-group field-games-status has-success" >
                                                <label class="control-label" for="status" style="margin-left:5px">Status</label>
                                                <select id="status"   type="text" class="form-control @error('status') is-invalid @enderror" name="status"
                                                    value="{{ old('status') }}" required autocomplete="status" >
                                                    <option value="0">None</option>
                                                    <option value="1">Action</option>
                                                </select>
                                            </div>


                                            <div class="form-group field-games-platform has-success" >
                                                <label class="control-label" for="platform" style="margin-left:5px">Platform</label>

                                                <select id="platform" type="text" class="form-control @error('platform') is-invalid @enderror"
                                                name="platform" value="{{ old('platform') }}" required autocomplete="" autofocus>

                                                    <option value="Flash">Flash</option>
                                                    <option value="H5">H5</option>
                                                    <option value="Web">Web</option>
                                                    <option value="Mobile">Mobile</option>
                                                </select>
                                            </div>


                                            <div class="form-group field-games-flag_hot has-success" >
                                                <label class="control-label" for="flag_hot" style="margin-left:5px">Hot</label>
                                                <select id="flag_hot" class="form-control" name="flag_hot" >
                                                    <option value="0">Thường</option>
                                                    <option value="1">Hot</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                <div class="help-block"></div>
                                <br>
                                    <div class="field" >

                                        <div class="card">
                                            <div class="card-header d-flex p-0">
                                                <ul class="nav nav-pills">
                                                <li class="nav-item"><a class="nav-link" href="#cate" data-toggle="tab"><strong>CATE ID</strong></a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content">

                                                    <div class="tab-pane active" id="cate">
                                                        @foreach($cates as $cate)
                                                            <input style="margin-left:20px" type="checkbox" id="cate_id" name="cate_id" value="{{$cate->id}}" class="form-check-input" >
                                                            <label style="margin-left:50px" for="form-check-label"> {{$cate->name}}</label><br>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <div class="help-block"></div>
                                <br>

                                    <div class="field" >
                                        <div class="m-portlet m-portlet--tab" >
                                            <div class="m-portlet__body">
                                                <div class="col-sm-12" style="background-color:white" ><br>
                                                    <div class="form-group field-posts-images has-success" >

                                                    <img src="http://placehold.it/120"" style="width:200px;height:200px">
                                                    <br><br>

                                                    <input style="margin-left:20px" type="file" id="images"  onchange="readURL(this);" name="images">
                                                    <br><br>
                                                    </div>
                                                </div>
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
