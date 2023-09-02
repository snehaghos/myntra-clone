@extends('backend.home')
@section('content')
<div class="content-wrapper">
    <div class="container ">
        <div class="d-flex justify-content-between  mb-5">
            <div class="text-4xl mt-5">{{ __('Product') }}</div>
            <a href="{{ route('product.create') }}" class="mt-5">
                <div class="btn btn-info">
                    Add Product
                </div>
            </a>
        </div>

        <table class="table border-dark table-responsive">
            <tr>
                <th>Sl</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Product Category Id</th>
                <th>Price</th>
                <th>MRP</th>
                <th>Item Cost</th>
                <th>Description</th>
                <th>Action</th>

            </tr>
            @foreach ($products as $key => $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td> <img src="{{ asset('upload/product') . '/' . $product->images }}" class="img-fluid rounded-sm" alt=""
                        style="width: 50px;height:50px;"></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->product_category->name }}</td>

                    <td>{{ $product->price }}</td>
                    <td>{{ $product->mrp }}</td>
                    <td>{{ $product->item_cost }}</td>

                    <td style="width: 400px;">{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('product.edit', $product->id) }}">
                            <button class="btn btn-success me-2"><i class="fa fa-edit"></i></button>
                        </a>
                        <a href="{{ route('product.delete', $product->id) }}">
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
