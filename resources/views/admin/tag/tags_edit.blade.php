
@extends('admin.dashboard')

@section('content')
<body>

<div class="container-fluid">
        <hr>
        <h3><center> Edit Tags </center></h3>
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
                            <label for="name" class="control-label" style="color:black">Name</label>

                                    <input id="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ $tag->name }}" required autocomplete="" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>



                            <div class="form-group field">

                                <label for="name" class="control-label" style="color:black">Slug</label>

                                <input id="slug" type="text" value="{{ $tag->slug}}" class="form-control @error('slug') is-invalid @enderror" name="slug"  >

                                    @error('slug')
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
