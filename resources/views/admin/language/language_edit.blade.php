@extends('admin.dashboard')

@section('content')
<status>

<h4><center>Create New Contents</h4></center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              <form role="form" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $language->name}}" required autocomplete="" autofocus >
                  </div>
                  <div class="col-6">
                    <label for="name">Code</label>
                    <select id="code" class="form-control" name="code" required autocomplete="" autofocus>
                      <option value="vn">Vietnamese</option>
                      <option value="en">English</option>
                      <option value="cn">Chinese</option>
                      <option value="jp">Japanese</option>
                     </select>
                  </div>
                </div><br>

                <div class="form-group">
                    <div class="form-group">
                      <label for="name">Slug</label>
                      <input type="text"   class="form-control" id="slug" name="slug" value="{{ $language->slug}}" required autocomplete="" autofocus ></input>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="form-group">
                      <label for="name">GG Code</label>
                      <input type="text"   class="form-control" id="gg_code" name="gg_code" value="{{ $language->name}}" required autocomplete="" autofocus ></input>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label for="name">Status</label>
                      <select type="text"  cols="10" rows="4" class="form-control" id="status" name="status" required autocomplete="" autofocus>
                          <option value="1">Kích hoạt</option>
                          <option value="0">None</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                      <label for="name">Flag_default</label>
                      <select type="text"  cols="10" rows="4" class="form-control" id="flag_default" name="flag_default" required autocomplete="" autofocus>
                          <option value="1">Việt Nam</option>
                          <option value="0">Khác</option>
                      </select>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
                    </div>
                </div>
            </div>

    </div>


@endsection
