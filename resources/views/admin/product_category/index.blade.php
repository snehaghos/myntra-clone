@extends('layouts.backend.main')
@section('content')
    <div class="content-wrapper p-5">
        <div class="text-4xl mb-3">{{ __('Category') }}</div>
        <div class="row">
            <div class="col-md-4" id="AddEditPanel">

                @include('admin.product_category.create')
            </div>



            <div class="col-md-8">
                <table class="table border-dark table-responsive">
                    <thead>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Category Name</th>
                        <th>Parent ID</th>
                        <td>Discount</td>
                        <th>Action</th>

                    </thead>
                    @foreach ($categories as $key => $category)
                        {{-- @dd('parent_') --}}
                        <tbody>
                            <td >{{ $key+1 }}</td>
                            <td> <img src="{{ asset('upload/product_category') . '/' . $category->image }}" class="img-fluid rounded-sm" alt=""
                                style="width: 50px;height:50px;"></td>

                            <td>{{ $category->name }}</td>
                            <td>{{ $category->parent_category->name }}</td>
                            <td>{{ $category->discount }}</td>
                            <td>


                                    <a href="javascript:" class="btn btn-success me-2 categoryEdit"  data-id="{{$category->id}}"><i class="fa fa-edit" data-id="{{$category->id}}"></i></a>

                                <a href="{{ route('category.delete', $category->id) }}">
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </a>
                            </td>



                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $('.categoryEdit').on('click', (e) => {

           var category_id=e.target.getAttribute('data-id');

            var url= "{{ route('category.edit',':id') }}";
            url=url.replace(':id',category_id);
            console.log(url);

            $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                if (response.status == 200) {
                    $('#AddEditPanel').html(response.htmlData);
                } else {
                    $('#AddEditPanel').html('No Data Found');
                }
                // console.log(response.htmlData);
            }

        });
        })
    </script>
@endpush
