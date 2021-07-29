@extends('layouts.app')

@section('content')
<form action="{{route('blogs.update',$blog->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group row">
            <label for="slug" class="col-md-1 col-form-label">Name</label>
            <div class="col-md-11">
                <input type="text" name="name" class="form-control" value="{{ old('name') ?? $blog->name}}" placeholder="{{ __('name') }}"/>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success float-md-right">Sửa chuyên mục</button>
    </form>
@endsection