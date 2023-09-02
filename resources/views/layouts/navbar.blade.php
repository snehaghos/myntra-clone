<!-- navbar -->
<div class="navbar ">

    @if (auth()->user()->role == 'admin')
        @include('layouts.backend.navbar')
    @elseif(auth()->user()->role == 'user')
        @include('layouts.frontend.navbar')
    @endif



</div>
