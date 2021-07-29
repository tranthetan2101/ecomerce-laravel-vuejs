@extends('layouts.app')

@section('content')
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
          {{ $message }}
      </div>
      @endif
    <h1>Product list</h1>
    <table class="table">
  <thead class="thead-dark">
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
      <td><img src="{{$product->images[0] -> image_name}}" alt="#"class="img-fluid" width="35px"></td>
      <td>{{$product->category -> name}}</td>
      <td>
        <form action="{{ route('product.destroy',$product->id) }}" method="POST">
          <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">edit</a>
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
    {{$products->links()}}  
</div>
@endsection
