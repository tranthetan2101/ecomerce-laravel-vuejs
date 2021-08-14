@extends('layouts.app')

@section('content')
    <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="slug" class="col-md-1 col-form-label">Name</label>
            <div class="col-md-11">
                <input type="text" name="name" class="form-control" placeholder="{{ __('name') }}"/>
            </div>
        </div>

        <div class="form-group row">
            <label for="images" class="col-md-1 col-form-label">image</label>
            <div class="col-md-11">
                <a href="#" role="button" id="lfm" data-input="banner_url" data-preview="holder" class="btn btn-outline-primary">
                    Choose
                </a>
                <input id="banner_url" class="form-control" type="hidden" name="banner_url">
                <div id="holder" style="margin-top:15px;max-height:170px;"></div>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-success float-md-right">Tạo banner</button>
    </form>
@endsection
@push('scripts')
    <script>
        var route_prefix = "/laravel-filemanager";
        $('#lfm').filemanager('image', {prefix: route_prefix});
    </script>
@endpush