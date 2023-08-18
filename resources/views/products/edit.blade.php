@extends('layout.app')
@section('content')
    <div class="row py-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h3>Update Product</h3>
                        </div>
                        <div class="col">
                            <a href="{{ route('products.index') }}" class="btn btn-primary float-end">List Product</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('products.update',$product->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" value="{{ $product->name }}" class="form-control" id="name" name="name" placeholder="Product Name">
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Product Price</label>
                            <input type="text" value="{{ $product->price }}" class="form-control" id="price" name="price" placeholder="Product Price">
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
