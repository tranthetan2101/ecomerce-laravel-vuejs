@extends('layouts.app')

@section('content')
<form action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group row">
            <label for="slug" class="col-md-1 col-form-label">Name</label>
            <div class="col-md-11">
                <input type="text" data-slug="name" name="name" class="form-control" value="{{ old('name') ?? $category->name}}" placeholder="{{ __('name') }}"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="slug" class="col-md-1 col-form-label">Slug</label>
            <div class="col-md-11">
                <input type="text" data-slug="alias" name="Slug" class="form-control" value="{{ old('Slug') ?? $category->Slug}}" placeholder="{{ __('slug') }}"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="images" class="col-md-1 col-form-label">image</label>
            <div class="col-md-11">
                <a href="#" role="button" id="lfm" data-input="image_url" data-preview="holder" class="btn btn-outline-primary">
                    Choose
                </a>
                <input id="image_url" class="form-control" type="hidden" name="image_url">
                <div id="holder" style="margin-top:15px;max-height:150px;">
                    <img src="{{ old('image_url') ?? $category->image_url}}" alt="image" style="height: 7rem">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-1 col-form-label">description</label>
            <div class="col-md-11">
                <textarea class="form-control" name="description"> {{ old('description') ?? $category->description}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success float-md-right">Tạo danh mục</button>
    </form>
@endsection
@push('scripts')
    <script>
        var route_prefix = "/laravel-filemanager";
        $('#lfm').filemanager('image', {prefix: route_prefix});
        function slugify(text)
        {
            return text.toString().toLowerCase()
                // Support Vietnamese.
                .replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a') // To 'a'.
                .replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e') // To 'e'.
                .replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i') // To 'i'.
                .replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o') // To 'o'.
                .replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u') // To 'u'
                .replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y') // To 'y'.
                .replace(/đ/gi, 'd') // To 'd'.
                // https://gist.github.com/mathewbyrne/1280286
                .replace(/\s+/g, '-')           // Replace spaces with -
                .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                .replace(/^-+/, '')             // Trim - from start of text
                .replace(/-+$/, '');            // Trim - from end of text
        }
        $('input[data-slug="name"]').keyup(function(){
            $('input[data-slug="alias"]').val(slugify($(this).val()));
        });
    </script>
@endpush