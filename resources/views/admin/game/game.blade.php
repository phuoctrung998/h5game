@extends('admin.dashboard')
@section('content')
<body>

<a style="margin-left:10px" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" href="{{route('admin.game.listgame')}}"><span>
                    <i class="fa fa-gamepad"></i>
                    <span>
                    List Game
                    </span>
                    </span>
                </a>

        <div class="container-fluid"><hr>

                    <div class="row ">

                        <div class="col-md-8" >

                            <div class="field card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">CREATE</h3>
                                </div>

                                <form role="form" method="POST" action="{{ route('admin.game.addgame') }}" enctype="multipart/form-data">
                                @csrf
                                    <div class="card-body" style="background-color:white">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" required autocomplete="" autofocus >
                                    </div>


                                    <div class="form-group">
                                        <label for="id">Slug</label>
                                        <textarea type="text" cols="10" rows="2" class="form-control" id="slug" name="slug"></textarea>
                                    </div>

                                <div class="form-group field">
                                <label for="name" class="control-label" style="color:black">Game Url</label>

                                        <textarea id="game_url" cols="10" rows="4" type="url" class="form-control @error('game_url') is-invalid @enderror" name="game_url"
                                        value="{{ old('game_url') }}" required autocomplete="" autofocus></textarea>
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
                                                </select><br>
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
                                                            <input style="margin-left:20px" type="radio" id="cate_id" name="cate_id" value="{{$cate->id}}" class="form-check-input" >
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

                                                    <img id="blah" style="margin-left:20px" src="http://placehold.it/120" alt="your image">
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

            </form><br>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div>
</div>



@endsection
