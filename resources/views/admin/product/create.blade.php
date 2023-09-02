@extends('layouts.backend.main')
@section('content')
    <div class="container w-50 border rounded-lg p-4 ">
        <div class="mt-3 text-3xl font-semibold mb-4">Create Product</div>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="product">Product Name</label>
                <input type="" name="name" class="form-control border  border-pink-500 ">
                <label for="product">Product Category id</label>
                <input type="" name="product_category_id" class="form-control border  border-pink-500 ">

                <div class="d-flex mt-3 mb-3 align-items-center justify-between w-100 gap-2">
                    <div  class="w-50">
                        <label for="">Add Image</label>
                        <input type="file" name="images" class="form-control border  border-pink-500">


                    </div>
                    <div class="w-50">
                        <label for=" Price">Add Price</label>
                        <input type="number" name="price" class="form-control border  border-pink-500">
                    </div>

                </div>
                <div class="d-flex mt-3 mb-3 align-items-center justify-between w-100 gap-2">
                    <div  class="w-50">
                        <label for="">Item cost</label>
                        <input type="number" name="item_cost" class="form-control border  border-pink-500">


                    </div>
                    <div class="w-50">
                        <label for=" Price">MRP</label>
                        <input type="number" name="mrp" class="form-control border  border-pink-500">
                    </div>

                </div>


                <label for="description">Description</label>
                <textarea name="description" id="" cols="30" rows="3"
                    class="form-control border   border-pink-500 mb-4"></textarea>


                <button class="btn bg-pink-900 text-white w-100" type="submit">Save</button>
            </div>
        </form>

    </div>
@endsection
