<div class="wrapper mt-5 mb-12 pb-4 font-serif">
    <style>
        .deal-cards{
            height: 350px;
        }
        .card-image{
            height: 260px !important;
        }
    </style>
    <div class="text-3xl ms-14 font-semibold text-gray-600 tracking-widest mb-5 ">GRAND GLOBAL BRANDS
    </div>
    <div class="row">
    @forelse ($categories as $category )
    <div class="col-md-2">
        <div class="deal-cards card border-gray-500 ">
            <div>
                <img src="{{ asset('upload/product_category') }}/{{ $category->image }}" class="card-img card-image h-100" alt="">
            </div>
            <div class="card-txt m-3">
                <div >{{ $category->name }}</div>
                <div class="font-semibold">
                    Upto {{ $category->discount }} off
                </div>
            </div>
        </div>
    </div>
    @empty
        Nothing Here
    @endforelse


    </div>
</div>
