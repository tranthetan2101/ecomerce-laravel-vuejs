@extends('layouts.app')

@section('content')
    <form action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
            <label for="slug" class="col-md-1 col-form-label">Name</label>
            <div class="col-md-11">
                <input type="text" name="name" class="form-control" placeholder="{{ __('name') }}"/>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success float-md-right">Tạo chuyên mục</button>
    </form>
@endsection