@extends('layouts.app')

@section('content')
    <h1>category delete</h1>
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
        <form action="{{ route('blogs.deleted',$item->id) }}" method="POST">
          <a href="{{ route('blogs.restore',$item->id) }}" class="btn btn-primary"><i class="fas fa-undo"></i></a>
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
