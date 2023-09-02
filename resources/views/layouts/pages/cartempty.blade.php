@extends('layouts.frontend.main')
@section('content')
    <div class="container">
        <a href="{{ route('cart') }}" class="btn bg-sky-400"></a>
        <div class="cart-img w-100 d-flex justify-center align-items-center pt-14">
            <img src="/images/cart.JPG" alt="" style="width: 250px;height:200px;">
        </div>
        <div class="text-xl d-flex justify-center align-items-center font-semibold mt-6">
            Hey,it feels so light!!
        </div>
        <div class="text-sm d-flex justify-center align-items-center mt-3">
            There is nothing in your bag.Let's add some itemms.
        </div>
        <div class="d-flex justify-center align-items-center mt-3">
            <button class=" border-pink-500 border-2 p-3 text-pink-500">ADD ITEMS FROM WISHLIST</button>
        </div>
    </div>
@endsection
