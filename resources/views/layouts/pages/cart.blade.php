@extends('layouts.frontend.main')
@section('content')
    <div class="container">
        <div class="p-7 text-center text-sm text-gray-500 font-semibold">

            BAG--------ADDRESS--------PAYMENT

        </div>
        <div class="row justify-center  ">
            <div class="col-md-6 p-0">
                <div class="p-3  border border-gray-500 d-flex gap-3 justify-between align-items-center text-sm">
                    <div class="font-semibold"> Check delivery time and services</div>
                    <div class="btn p-2 border-2 border-pink-500">Enter Pin Code</div>

                </div>
                <div class="p-3 mt-3 mb-3 border border-gray-500  text-sm">
                    <div class="d-flex  align-items-start text-start">
                        <div><iconify-icon icon="iconamoon:discount-bold" style=""></iconify-icon></div>

                        <div class="font-semibold ms-2">Available offers</div>

                    </div>
                    <div class="mt-2 mb-2">
                        15% Instant Discount on OneCard Credit Cards on a min speed of $3,000 TCA
                    </div>
                    <div class="text-pink-600 font-bold ">
                        Show More
                    </div>
                </div>
                <div class="d-flex justify-between align-bottom p-3 mt-3 mb-3 border border-gray-500">
                    <div class="d-flex justify-between align-bottom">
                        <div class="bulkActionStrip-selectionIcon me-2"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 16 16" class="bulkActionStrip-activeIcon">
                                <path fill-rule="evenodd"
                                    d="M11.83 6.11l-4.751 4.583a.604.604 0 0 1-.425.164h-.003a.608.608 0 0 1-.424-.16L4.176 8.74a.55.55 0 0 1 0-.805.62.62 0 0 1 .846 0l1.57 1.506c.03.028.078.027.107-.001l4.274-4.124a.62.62 0 0 1 .847-.01c.236.22.24.58.01.805M14.285 0H1.714C.77 0 0 .77 0 1.714v12.572C0 15.23.77 16 1.714 16h12.572C15.23 16 16 15.23 16 14.286V1.714C16 .77 15.23 0 14.286 0">
                                </path>
                            </svg></div>
                        <div class="font-semibold  text-sm">1/1 ITEMS SELECTED</div>

                    </div>
                    <div class="text-xs text-gray-400">
                        REMOVE
                    </div>

                </div>
                <div class="d-flex gap-3 text-md p-3 mt-3 mb-3 border border-gray-500">


                    <img src="/images/bag1.JPG" alt=""style=" width:120px;height:150px;">
                    <div>
                        <div class=" font-semibold">
                            Lavie
                        </div>
                        <div class=" text-gray-500 ">
                            Dazz Black Shimmer Foldover Clutch
                        </div>
                        <div class=" text-gray-500 ">
                            Sold by:Freshtech Retail
                        </div>
                        <div class="d-flex font-semibold gap-3 text-sm mb-1 mt-1">
                            <div>
                                Size:L
                            </div>
                            <div>
                                QTY:1
                            </div>
                        </div>
                        <div class="d-flex text-md mb-1 mt-1">
                            <div class="font-semibold text-gray-800 me-3 ">₹699</div>
                            <div class="d-flex me-3">MRP <div class="line-through">₹1999</div>
                            </div>
                            <div class="text-orange-400">
                                (65% off)
                            </div>
                        </div>
                        <div class="d-flex text-xs">
                            14 days return policy
                        </div>


                    </div>





                </div>


            </div>
            <div class="col-md-4 p-3 border border-gray-500">
                <div class=" text-sm text-gray-900 font-semibold">
                    Coupons
                </div>
                <div class="d-flex justify-between align-items-center mt-2 mb-2  text-sm">
                    <div class="d-flex justify-center align-items-center">
                        <iconify-icon icon="mdi:tag" class="ms-2"></iconify-icon>
                        <div class=" text-gray-900 font-semibold">
                            Apply Coupon
                        </div>
                    </div>

                    <div class="btn border-2 border-pink-500 p-2 w-24">
                        Apply
                    </div>
                </div>
                <hr class="mb-3 mt-3">
                <div class="text-xs  font-bold text-gray-500">GIFING AND PERSONALIZATION</div>
                <div class="p-3">
                    <img src="/images/gift-cart.JPG" alt="">
                </div>
                <div class="text-sm">
                    <div class="text-xs  font-bold text-gray-500 mb-2">PRICE DETAILS</div>
                    <div class="d-flex justify-between align-items-center mb-2">
                        <div>Total MRP</div>
                        <div>
                            1999
                        </div>
                    </div>
                    <div class="d-flex justify-between align-items-center mb-2">
                        <div>Discount on MRP </div>
                        <div class="text-success">
                            -1300
                        </div>
                    </div>
                    <div class="d-flex justify-between align-items-center mb-2">
                        <div>Coupon Discount</div>
                        <div class="text-pink-500">
                            Apply Coupon
                        </div>
                    </div>
                    <div class="d-flex justify-between align-items-center mb-2">
                        <div>Convinience Fee</div>
                        <div>
                            15
                        </div>
                    </div>
                </div>
                <hr class="mb-2 mt-2 ps-2 pe-2">
                <div class="d-flex justify-between align-items-center mb-2">
                    <div class="font-semibold text-sm ">
                        TOTAL AMOUNT
                    </div>
                    <div>
                        752
                    </div>
                </div>
                <div class="btn bg-pink-500 p-2 w-100">PLACE ORDER</div>

            </div>
        </div>
    </div>
@endsection
