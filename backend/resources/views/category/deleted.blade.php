@extends('layouts.app')

@section('content')
    <h1>category delete</h1>
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
    @foreach ($category as $category)
    <tr>
      <th scope="row">{{$category -> id}}</th>
      <td>{{$category -> name}}</td>
      <td>{{$category -> Slug}}</td>
      <td><img src="{{asset('uploads/' .$category -> image_url)}}" alt="#"class="img-fluid" width="35px"></td>
      <td>
        <form action="{{ route('category.deleted',$category->id) }}" method="POST">
          <a href="{{ route('category.restore',$category->id) }}" class="btn btn-primary"><i class="fas fa-undo"></i></a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger"><i class="fas fa-calendar-times"></i></button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
