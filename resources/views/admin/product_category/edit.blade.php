<div class="  border rounded-lg p-4 ">
    <div class="mt-3 text-3xl font-semibold mb-4">Edit Product Category</div>
    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="product">Category Name</label>
            <input type="" name="name" class="form-control border  border-pink-500 "
                value="{{ $category->name }}">
        </div>
        <div class="form-group">
            <input type="file" name="image" class="form-control border  border-pink-500 ">

        </div>


        <div class="form-group">
            <label for="discount">Discount</label>
            <input type="" name="discount" class="form-control border  border-pink-500 " value="{{ $category->discount }}">


        </div>
        <label for="product">Parent id</label>
        <div class="form-group">
            <select name="parent_id" id="parent_id" class="form-control border  border-pink-500 mb-3">

                <option value="">--parent</option>
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}" {{ $category->id == $item->id ? 'selected' : '' }}>
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn bg-pink-900 text-white w-100" type="submit">{{ __('Update') }}</button>

    </form>

</div>
