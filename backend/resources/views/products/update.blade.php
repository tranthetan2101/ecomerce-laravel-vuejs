@extends('layouts.app')

@section('content')
    <h1>edit product</h1>
    <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group row">
            <label for="Name" class="col-md-1 col-form-label">Name</label>
            <div class="col-md-11">
                <input type="text" data-slug="name" name="name" class="form-control" value="{{ old('name') ?? $product->name}}" placeholder="{{ __('name') }}"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="Name_vi" class="col-md-1 col-form-label">Name_vi</label>
            <div class="col-md-11">
                <input type="text" name="name_vi" class="form-control" value="{{ old('name_vi') ?? $product->name_vi}}" placeholder="{{ __('name_en') }}"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-md-1 col-form-label">price</label>
            <div class="col-md-11">
                <input type="text" name="price" class="form-control" placeholder="{{ __('price') }}" value="{{ old('price') ?? $product->price}}"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="SKU" class="col-md-1 col-form-label">SKU</label>
            <div class="col-md-11">
                <input type="text" name="SKU" class="form-control" value="{{ old('SKU') ?? $product->SKU}}" placeholder="{{ __('SKU') }}"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="slug" class="col-md-1 col-form-label">Slug</label>
            <div class="col-md-11">
                <input type="text" data-slug="alias" name="Slug" class="form-control" value="{{ old('Slug') ?? $product->Slug}}" placeholder="{{ __('slug') }}"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="category" class="col-md-1 col-form-label">danh mục</label>
            <div class="col-md-11">
                <select class="form-control" name="category_id" id="category_id">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="images" class="col-md-1 col-form-label">image</label>
            <div class="col-md-11">
                <a href="#" role="button" data-input="image" id="lfm" data-preview="holder" class="btn btn-outline-primary">
                    Choose
               </a>
                <input type="hidden" id="image" class="form-control" name="image">
                <div id="holder" style="margin-top:15px;max-height:150px;">
                    <img src="{{ old('image') ?? $product->images[0]->image_name}}" alt="image" style="height: 7rem">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-1 col-form-label">description 1</label>
            <div class="col-md-11">
                <textarea name="description1">{{ old('description1') ?? $product->description1}}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-1 col-form-label">description 2</label>
            <div class="col-md-11">
                <textarea name="description2">{{ old('description2') ?? $product->description2}}</textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-1 col-form-label">description 3</label>
            <div class="col-md-11">
                <textarea name="description3">{{ old('description3') ?? $product->description3}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success float-md-right">sua san pham</button>
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
        CKEDITOR.replace('description1', options);
        CKEDITOR.replace('description2', options);
        CKEDITOR.replace('description3', options);
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