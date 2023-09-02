@extends('layouts.backend.main')
@section('content')
    <div class="content-wrapper">

        <div class="container p-3 w-50 border-info">
            <div class="d-flex justify-content-between">
                <div class="mt-3 mb-4 text-5xl">{{ __('Create User') }}</div>
                <a href="{{ route('user.index') }}" class="mt-3">
                    <div class="m-3 btn btn-info breadcrumb-item" style="float: right;">
                        {{ __('Back') }}
                    </div>
                </a>
            </div>

            <div class="mt-2">
                <nav aria-label="breadcrumb pb-4">
                    <ol class="breadcrumb bg-slate-50/10">
                        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </nav>
            </div>

            <form id="createUser">
                @csrf
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" name="role" class="mb-4 border form-control">
                    <label for="role">Password</label>
                    <input type="text" name="password"
                        class="mb-4 border form-control border-info">
                        <label for="role">Add Name</label>
                    <input type="" name="name"
                        class="mb-4 border form-control border-info">
                        <label for="role">Email Address</label>
                    <input type="email" name="email"
                        class="mb-4 border form-control border-info">
                    <button class="btn bg-pink-800 w-100" type="submit">Save</button>
                </div>
            </form>

        </div>
    </div>
@endsection
@push('script')
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('#createUser').on('submit', function(e) {
                e.preventDefault();
                console.log(e);
                var url = "{{ route('user.store') }}";
                var formData = new FormData(document.getElementById('createUser'));
                console.log("Created FormData, " + [...formData.keys()].length + " keys in data");

                console.log(formData);
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false
                }).done(function(response) {

                    if (response.status) {
                        alert(response.message);
                        setTimeout(() => {
                            window.location.replace('{{ route('user.index') }}');
                        }, 1000);
                    }

                });
            });
        });
    </script>
@endpush
