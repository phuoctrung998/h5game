            <!-- / ĐA NGÔN NGỮ -->

            <div class="card card-light warning card-tabs">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-4"><strong>LANGUAGE</h3></strong>

                    <ul class="nav nav-pills ml-auto p-2">

                        @foreach($defaults as $default)
                            <li class="nav-item">
                                <a class="nav-link active" href="#default" data-toggle="tab">{{$default->name}}</a>
                            </li>
                        @endforeach
                        @foreach($languages as $language)
                            <li class="nav-item">
                                <a class="nav-link" href="#{{$language->name}}" data-toggle="tab">{{$language->name}} </a>
                            </li>
                        @endforeach
                    </ul>
                </div><!-- /.card-header -->

                <div class="card-body">
                    <div class="tab-content">

                        @foreach($defaults as $default)
                        <div class="tab-pane active" id="default">
                            <div class="card card-primary">

                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-4">
                                        <input type="hidden" class="form-control" value="{{$type}}"  id="type_id" name="Language[{{$default->code}}][type_id]" required autocomplete="" >
                                        </input>
                                        </div>

                                        <div class="col-4">
                                        <input type="hidden" class="form-control" id="language_code"  value="{{$default->code}}" name="Language[{{$default->code}}][language_code]" required autocomplete="" >
                                        </input>
                                        </div>
                                        </div><br>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="name">Meta Title</label>
                                            <textarea type="text"  cols="10" rows="2" class="form-control" id="meta_title" name="Language[{{$default->code}}][meta_title]" required autocomplete=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="name">Meta Description</label>
                                            <textarea type="text"  cols="10" rows="4" class="form-control" id="meta_description" name="Language[{{$default->code}}][meta_description]" required autocomplete=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="name">Quote</label>
                                            <textarea type="text"  cols="10" rows="2" class="form-control" id="quote" name="Language[{{$default->code}}][quote]" required autocomplete=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="name">Body</label>
                                            <textarea id="body" cols="30" rows="15" type="textarea" class="form-control" name="Language[{{$default->code}}][body]" value="{{ old('body') }}" required autocomplete="" ></textarea>

                                                <!--
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
                                                -->
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        @endforeach



                        @foreach($languages as $language)
                        <div class="tab-pane" id="{{$language->name}}">
                            <div class="card card-primary">

                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-4">
                                        <input type="hidden" class="form-control" value="{{$type}}"  id="type_id" name="Language[{{$language->code}}][type_id]" required autocomplete="" >
                                        </input>
                                        </div>

                                        <div class="col-4">
                                        <input type="hidden" class="form-control" id="language_code"  value="{{$language->code}}" name="Language[{{$language->code}}][language_code]" required autocomplete="" >
                                        </input>
                                        </div>
                                        </div><br>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="name">Meta Title</label>
                                            <textarea type="text"  cols="10" rows="2" class="form-control" id="meta_title" name="Language[{{$language->code}}][meta_title]" required autocomplete=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="name">Meta Description</label>
                                            <textarea type="text"  cols="10" rows="4" class="form-control" id="meta_description" name="Language[{{$language->code}}][meta_description]" required autocomplete=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="name">Quote</label>
                                            <textarea type="text"  cols="10" rows="2" class="form-control" id="quote" name="Language[{{$language->code}}][quote]" required autocomplete=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="name">Body</label>
                                            <textarea id="body" cols="30" rows="15" type="textarea" class="form-control" name="Language[{{$language->code}}][body]" value="{{ old('body') }}" required autocomplete="" ></textarea>

                                                <!--
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
                                                -->
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                            @endforeach
                    </div>

                </div>

            </div><!-- /.card-body -->




