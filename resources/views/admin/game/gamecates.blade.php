@extends('admin.dashboard')

@section('content')
<body>
            <a style="margin-left:35px" class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" href="{{route('admin.game.listgamecates')}}"><span>
                <i class="fa fa-gamepad"></i>
                <span>
                List Game Cates
                </span>
                </span>
            </a>
<div class="container-fluid">
    <hr>
    <h3><center>Create Game cates</center></h3>
        <div class="row ">
          <!-- left column -->

          <div class="col-md-12" >


            <!-- general form elements -->
            <div class="field card-primary">
              <div class="card-header" style="margin-left:30px">
                <h3 class="card-title" >CREATE</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                       <!-- form start -->
                        <form method="POST" action="{{ route('admin.game.up') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body" style="background-color:white;margin-left:30px">
                            <div class="form-group row">
                            <label style="margin-left:10px" for="name" >Name</label>
                                <div class="col-md-12">
                                    <input id="name"  type="text" class="form-control" name="name"  required autocomplete="" autofocus>

                                </div>
                            </div>


                            <div class="form-group row">
                            <label style="margin-left:10px" for="name" >Status</label>
                                <div class="col-md-12">
                                    <select id="status"   type="text" class="form-control " name="status"  required autocomplete="status" >
                                    <option value="0">None</option>
                                    <option value="1">Active</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">

                            <label style="margin-left:10px" for="name">Images</label>
                                <div class="col-md-12">
                                <img id="blah" style="margin-left:20px" src="http://placehold.it/120" alt="your image"> <br><br>
                                    <input style="margin-left:20px" id="images" type="file" name="images" required autocomplete="images" >

                                </div>
                            </div><br>

                            <hr>
                                <!-- / ĐA NGÔN NGỮ -->
                                <h4>ĐA NGÔN NGỮ</h4><br>
                                @include('admin.contents.contents')

                                <div class="field"><br>
                                    <button  name="upload" type="submit" class="btn btn-success ">
                                    <h4>ĐĂNG BÀI</h4></button>
                                    </div>
                                    <br>
                                </div>
                            </div>
                            </div>

                        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div><br>


@endsection
