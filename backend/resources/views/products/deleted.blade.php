@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif
    <h1>Product deleted</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">image</th>
      <th scope="col">category</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{$product -> id}}</th>
      <td>{{$product -> name}}</td>
      <td>{{$product -> price}}</td>
      <td><img src="{{asset('uploads/' .$product->images[0] -> image_name)}}" alt="#"class="img-fluid" width="35px"></td>
      <td>{{$product->category -> name}}</td>
      <td>
        <form action="{{ route('product.deleted',$product->id) }}" method="POST">
          <a href="{{route('product.restore',$product->id)}}" class="btn btn-success"><i class="fas fa-undo"></i></a>
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
