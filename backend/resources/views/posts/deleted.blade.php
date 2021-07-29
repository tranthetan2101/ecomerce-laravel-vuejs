@extends('layouts.app')

@section('content')
    <h1>post delete</h1>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">category</th>
      <th scope="col">image</th>
      <th scope="col">auth</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <th scope="row">{{$post -> id}}</th>
      <td>{{$post -> name}}</td>
      <td>{{$post->categoryBlog -> name}}</td>
      <td><img src="{{$post->image_url}}" alt="#"class="img-fluid" width="35px"></td>
      <td>{{$post->auth -> username}}</td>
      <td>
        <form action="{{route('post.deleted',$post->id)}}" method="POST">
          <a href="{{route('post.restore',$post->id)}}" class="btn btn-primary">restore</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
