
@extends('admin.main')

@section('content')
<body>

            <a class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" href="{{route('admin.game.listcatesIndex')}}"><span>
                <i class="fa fa-gamepad"></i>
                <span>
               List
                </span>
                </span>
            </a>
    <div class="container-fluid"><hr>
        <div class="row ">
          <!-- left column -->

          <div class="col-md-12" >


            <!-- general form elements -->
            <div class="field card-primary">
              <div class="card-header">
                <h3 class="card-title">CREATE</h3>
              </div>
                    <div class="card-body">
                        <form method="POST"  action="" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                        <div class="card-body" style="background-color:white">

                            <div class="form-group field">
                            <label for="name" class="control-label" style="color:black">Game_cates_id</label>

                                    <input id="game_cates_id"  type="text" class="form-control @error('game_cates_id') is-invalid @enderror" name="game_cates_id"
                                    value="{{ $game->game_cates_id }}" required autocomplete="" autofocus>

                            </div>

                            <div class="form-group field">
                            <label for="name" class="control-label" style="color:black">Game ID</label>

                                    <input id="game_id" type="text" class="form-control @error('game_id') is-invalid @enderror" name="game_id"
                                     value="{{ $game->game_id }}" required autocomplete="" autofocus></input>

                            </div>

                            <div class="form-group field">
                            <label for="name" class="control-label" style="color:black">Name</label>

                                    <input id="game_name" type="text" class="form-control @error('game_name') is-invalid @enderror" name="game_name"
                                     value="{{ $game->game_name }}" required autocomplete="" autofocus></input>

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
    </div>

@endsection
