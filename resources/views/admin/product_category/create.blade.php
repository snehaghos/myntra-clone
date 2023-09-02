
    <div class="border rounded-lg p-4 ">
        <div class="mt-3 text-3xl font-semibold mb-4">Add Product Category</div>
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="product">Category Name</label>
                <input type="" name="name" class="form-control border  border-pink-500 ">
                <label for="image">Add image</label>
                <input type="file" name="image" class="form-control border  border-pink-500 " >

                <label for="discount">Discount</label>
                <input type="" name="discount" class="form-control border  border-pink-500 ">

               <label for="product">Parent id</label>
                <select name="parent_id" id="parent_id" class="form-control">
                    <option value="">--parent</option>
                    @foreach ($categories as $key => $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>


                <button class="btn bg-pink-900 text-white w-100 mt-4" type="submit">Save</button>
            </div>
        </form>

    </div>

