@extends('admin.dashboard')

@section('content')
<status>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">




            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              <form role="form" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                    <label for="name">Member ID</label>
                    <input type="text" class="form-control" id="member_id" name="member_id" value="{{$comment->member_id}}" required autocomplete="" autofocus >
                  </div>
                  <div class="col-6">
                    <label for="name">Parent_id</label>
                    <select id="parent_id" class="form-control" name="parent_id" required autocomplete="" autofocus>
                      <option value="1">1</option>
                      <option value="2">2</option>
                     </select>
                  </div>
                </div><br>
                  <div class="form-group">
                    <div class="form-group">
                      <label for="name">Type id</label>
                      <input type="text"  class="form-control" id="type_id" value="{{$comment->type_id}}" name="type_id" required autocomplete="" autofocus ></input>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="form-group">
                      <label for="name">Body</label>
                      <textarea id="body" cols="30" rows="15" type="textarea" class="form-control @error('body') is-invalid @enderror"
                                     name="body" value="{{ $comment->body }}" required autocomplete="" autofocus>{{ $comment->body }}</textarea>
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
                                @include('ckfinder::setup')
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
