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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($blog as $item)
    <tr>
      <th scope="row">{{$item -> id}}</th>
      <td>{{$item -> name}}</td>
      <td>
        <form action="{{ route('blogs.destroy',$item->id) }}" method="POST">
          <a href="{{ route('blogs.edit',$item->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
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
    {{$blog->links()}}  
</div>
@endsection
