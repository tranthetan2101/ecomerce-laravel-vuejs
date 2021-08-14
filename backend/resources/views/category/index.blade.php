@extends('layouts.app')

@section('content')
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
          {{ $message }}
      </div>
      @endif
    <h1>category list</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($category as $cat)
    <tr>
      <th scope="row">{{$cat -> id}}</th>
      <td>{{$cat -> name}}</td>
      <td>{{$cat -> Slug}}</td>
      <td><img src="{{$cat -> image_url}}" alt="#" class="img-fluid" width="35px"></td>
      <td>
        <form action="{{ route('category.destroy',$cat->id) }}" method="POST">
          <a href="{{ route('category.edit',$cat->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="paginate-page">
    {{$category->links()}}  
</div>
@endsection
