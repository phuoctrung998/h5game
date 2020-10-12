@extends('admin.dashboard')
<title>Cập nhật: {{$content->meta_title}}</title>
@section('content')
<status>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">


        <h2><strong>Cập nhật: {{$content->meta_title}}</strong> </h2><br>
        <div class="field card-primary">
              <div class="card-header">
                <h3 class="card-title">EDIT</h3>
              </div>
            <div class="card-body" style="background-color:white">
            <form role="form" method="POST" action="" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                <div class="row">
                <div class="col-4">

                    <input type="hidden" class="form-control" id="parent_id" name="parent_id" value="{{$content->parent_id}}" required autocomplete="" autofocus >
                    </div>
                    <div class="col-4">

                    <input type="hidden" class="form-control" value="{{$content->type_id}}" id="type_id" name="type_id" required autocomplete="" autofocus >

                    </input>
                    </div>
                    <div class="col-4">

                    <input type="hidden" id="language_code" class="form-control" value="{{$content->language_code}}" name="language_code" required autocomplete="" autofocus>

                    </input>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="form-group">
                    <label for="name">Meta Title</label>
                    <textarea type="text"  cols="10" rows="2" class="form-control" id="meta_title" name="meta_title"
                    required autocomplete="">{{$content->meta_title}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                    <label for="name">Meta Description</label>
                    <textarea type="text"  cols="10" rows="4" class="form-control" id="meta_description" name="meta_description"
                    required autocomplete="">{{$content->meta_description}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                    <label for="name">Quote</label>
                    <textarea type="text"  cols="10" rows="2" class="form-control" id="quote" name="quote"
                    required autocomplete="">{{$content->quote}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                    <label for="name">Body</label>
                    <textarea id="body" cols="30" rows="15" type="textarea" class="form-control @error('body') is-invalid @enderror"
                                    name="body" value="{{ old('body') }}" required autocomplete="" autofocus>{{$content->body}}</textarea>
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
                <button type="submit" class="btn btn-primary">Submit</button>

                </div>

                </div>
            </form><br>
            </div>



            </div>
        </div>
        </div>



@endsection
