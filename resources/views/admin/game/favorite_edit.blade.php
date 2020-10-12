
@extends('admin.main')

@section('content')
<body>

            <a class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" href="{{route('admin.game.listfavorite')}}"><span>
                <i class="fa fa-gamepad"></i>
                <span>
               List
                </span>
                </span>
            </a>

            <div class="container-fluid">
        <hr>
        <h3><center> Game Favorite</center></h3>
            <div class="row ">
            <!-- left column -->

            <div class="col-md-12" >


                <!-- general form elements -->
                <div class="field card-primary">
                <div class="card-header">
                    <h3 class="card-title">EDIT</h3>
                </div>
                        <form method="POST"  action="" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                        <div class="card-body" style="background-color:white">

                            <div class="form-group field">
                            <label for="name" class="control-label" style="color:black">Member_id</label>

                                    <input id="member_id"  type="text" class="form-control @error('member_id') is-invalid @enderror" name="member_id"
                                    value="{{ $game->member_id }}" required autocomplete="" autofocus>

                            </div>

                            <div class="form-group field">
                            <label for="name" class="control-label" style="color:black">Game ID</label>

                                    <input id="game_id" type="text" class="form-control @error('game_id') is-invalid @enderror" name="game_id"
                                     value="{{ $game->game_id }}" required autocomplete="" autofocus></input>
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
