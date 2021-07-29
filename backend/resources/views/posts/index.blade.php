@extends('layouts.app')

@section('content')
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
          {{ $message }}
      </div>
      @endif
    <h1>post list</h1>
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
        <form action="{{route('post.destroy',$post->id)}}" method="POST">
          <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">edit</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="paginate-page">
    {{$posts->links()}}  
</div>
@endsection
