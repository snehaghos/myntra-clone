@extends('layouts.frontend.main')
@section('content')
    @include('layouts.frontend.side_add')
    @include('layouts.frontend.carousal')
    @include('layouts.frontend.content')
    {{-- @dd($products) --}}
    @include('layouts.frontend.deals')
    @include('layouts.frontend.brand-deal')
    @include('layouts.frontend.categoryshop')
    @include('layouts.frontend.footer')
@endsection
