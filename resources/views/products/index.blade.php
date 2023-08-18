@extends('layout.app')
@section('content')
    <div class="row py-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h3>List Product</h3>
                        </div>
                        <div class="col">
                            <a href="{{ route('products.create') }}" class="btn btn-primary float-end">Add Product</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $key=>$value)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->price }}</td>
                                <td>
                                    <a href="{{ route('products.edit',$value->id) }}" class="btn btn-success">Edit</a>
                                    <form action="{{ route('products.destroy',$value->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('are you sure?')" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
