@extends('admin.dashboard')

@section('content')
<body>

<div class="container-fluid">
    <hr>
    <h3><center>Thêm Admin</center></h3>
        <div class="row ">
          <!-- left column -->

          <div class="col-md-12" >


            <!-- general form elements -->
            <div class="field card-primary">
              <div class="card-header">
                <h3 class="card-title">CREATE</h3>
              </div><br>
                        <form method="POST" action="{{route('admin.manager.add')}}" >
                            @csrf
                            <div class="card-body" style="background-color:white">
                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="" autofocus>

                                </div>
                            </div>

                            <div class="form-group row">


                                <div class="col-md-12">
                                    <input id="email"  placeholder="Email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                </div>
                            </div>

                            <div class="form-group row">


                                <div class="col-md-12">
                                    <input id="password"  placeholder="Password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" >

                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6"></div>
                                <div class="col-md-6 offset-md-5">
                                    <button type="passwordmit" style="width:75px;height:40px" class="btn btn-success">
                                        CREATE
                                    </button>

                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
