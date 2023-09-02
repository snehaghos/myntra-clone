<div class="wrapper mt-5 mb-12 pb-4 font-serif">
    <style>
        .deal-cards{
            height: 320px;
        }
    </style>
    <div class="text-3xl ms-14 font-semibold text-gray-600 tracking-widest mb-5 ">MEDAL WORTHY BRANDS TO BAG
    </div>
    <div class="row">
        @forelse ($products as $product)
        <div class="col-md-2" style="width: 100px;height:380px;">
            <div class=" card border-gray-500 h-100">
                <div>
                    <img src="{{ asset('upload/product') }}/{{ $product->images }}" class="card-img rounded-md" style="height:250px;" alt="">
                </div>
                <div class="card-txt m-3">
                    <div >{{ $product->name }}</div>
                    <div class="font-semibold">
                        {{ $product->price }} Onwards
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div>Nothing Found</div>

        @endforelse


    </div>
</div>
