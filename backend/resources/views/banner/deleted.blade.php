@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <h1>banner list</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($banner as $item)
            <tr>
                <th scope="row">{{$item -> id}}</th>
                <td>{{$item -> name}}</td>
                <td><img src="{{$item -> banner_url}}" alt="#" class="img-fluid" width="100px"></td>
                <td>
                    <form action="{{ route('banner.deleted',$item->id) }}" method="POST">
                        <a href="{{ route('banner.restore',$item->id) }}" class="btn btn-primary"><i class="fas fa-undo"></i></a>
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
