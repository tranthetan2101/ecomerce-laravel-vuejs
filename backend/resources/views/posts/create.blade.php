@extends('layouts.app')
@section('content')
<h1>create product</h1>
    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group row">
            <label for="name" class="col-md-1 col-form-label">name</label>
            <div class="col-md-11">
                <input type="text" name="name" class="form-control" placeholder="{{ __('name') }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="images" class="col-md-1 col-form-label">image</label>
            <div class="col-md-11">
                <a href="#" role="button" id="lfm" data-input="image_url" data-preview="holder" class="btn btn-outline-primary">
                    Choose
               </a>
                <input type="hidden" id="image_url" class="form-control" name="image_url">
                <div id="holder" style="margin-top:15px;max-height:150px;"></div>
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-md-1 col-form-label">danh mục</label>
            <div class="col-md-11">
                <select class="form-control" name="category_id" id="category_id">
                    @foreach($blogs as $blog)
                        <option value="{{$blog->id}}">{{$blog->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-md-1 col-form-label">nội dung</label>
            <div class="col-md-11">
                <textarea class="form-control" id="noidung" name="content"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success float-md-right">Tạo bài viết</button>
    </form>
    @endsection
    @push('scripts')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('noidung', options);
        var route_prefix = "/laravel-filemanager";
        $('#lfm').filemanager('image', {prefix: route_prefix});
    </script>
@endpush