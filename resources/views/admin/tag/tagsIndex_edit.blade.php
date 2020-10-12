
@extends('admin.dashboard')

@section('content')
<body>

<div class="container-fluid">
        <hr>
        <h3><center> Tags Index </center></h3>
            <div class="row ">
            <!-- left column -->

            <div class="col-md-12" >


                <!-- general form elements -->
                <div class="field card-primary">
                <div class="card-header">
                    <h3 class="card-title">EDIT</h3>
                </div>


                    <div class="card-body">
                        <form method="POST"  action="" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                        <div class="card-body" style="background-color:white">


                            <div class="form-group field">
                            <label for="name" class="control-label" style="color:black">Tag_id</label>

                                    <input id="tag_id"  type="text" class="form-control @error('tag_id') is-invalid @enderror" name="tag_id"
                                    value="{{ $tag->tag_id }}" required autocomplete="" autofocus>

                                    @error('tag_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>



                            <div class="form-group field">

                                <label for="name" class="control-label" style="color:black">Game_id</label>

                                <input id="game_id" type="text" value="{{ $tag->game_id }}" class="form-control @error('game_id') is-invalid @enderror" name="game_id">

                                    @error('game_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
