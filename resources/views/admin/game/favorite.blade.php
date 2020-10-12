
@extends('admin.dashboard')

@section('content')
<body>
<div class="container-fluid">
            <a class="btn btn-warning m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" href="{{route('admin.game.listfavorite')}}"><span>
                <i class="fa fa-gamepad"></i>
                <span>
                List
                </span>
                </span>
            </a>


        <hr>
        <h3><center> Game Favorite</center></h3>
            <div class="row ">
            <!-- left column -->

            <div class="col-md-12" >


                <!-- general form elements -->
                <div class="field card-primary">
                <div class="card-header">
                    <h3 class="card-title">CREATE</h3>
                </div>
                        <form method="POST"  action="{{ route('admin.game.addfavorite') }}" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                        <div class="card-body" style="background-color:white">

                            <div class="form-group field">
                            <label for="name" class="control-label" style="color:black">Member ID</label>

                                    <input id="member_id"  type="text" class="form-control" name="member_id"
                                    value="{{ old('member_id') }}" required autocomplete="" autofocus>

                            </div>

                            <div class="form-group field">
                            <label for="name" class="control-label" style="color:black">Game ID</label>

                                    <input id="game_id" type="text" class="form-control" name="game_id"
                                     value="{{ old('game_id') }}" required autocomplete="" autofocus></input>

                            </div>



                            <div class="form-group row mb-0">

                            <div class="col-md-6 offset-md-5">
                                <button type="submit" style="width:75px;height:50px" class="btn btn-success">
                                SAVE
                                </button>

                            </div>
                            </div>
                            </div>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
