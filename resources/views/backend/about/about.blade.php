@extends('backend.master')



@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add content for About</h3>
                    {{-- <div class="card-tools">
                        <a href="{{ route('images.manage') }}" class="btn btn-success">Manage uploaded Images</a>
                </div> --}}
            </div>
        </div>
        {{-- <div class="card card-info">
            <form action="{{ route('upload_about_image') }}" id="validate_form" method="post"
        enctype="multipart/form-data" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="col-sm-10 mt-2">
                <label for="image">Upload an Image</label>
                <input type="file" class='form-control' name="image" required>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Get Image Link</button>
        </div>
        </form>
    </div> --}}
    <div class="card card-info">
        <form id="validate_form" action="{{ route('about_site.update') }}" method="POST" enctype="multipart/form-data"
            class="form-horizontal">
            {{ csrf_field() }}
            <div class="card-body">
                @include('backend.includes.flash_message')
                <textarea id="editor" name="content">{!! $about->content !!}</textarea>

            </div>

            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Content</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>
</div>
</div>

@endsection



@section('scripts')

{{-- <script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script> --}}
<script type="text/javascript" src="{{ asset('backend/js/app/nepalify.production.min.js') }}"></script>
{{-- <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> --}}
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor',{
	        filebrowserBrowseUrl: filemanager.ckBrowseUrl,
	    });
</script>
@endsection
