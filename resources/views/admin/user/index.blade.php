@extends('layouts.backend.main')
@section('content')
    <style>
        .content-wrapper {
            padding-left: 50px !important;
            padding-right: 50px !important;
        }
    </style>
    <div class="pt-2 content-wrapper" id="contentWrapper">
        <div>
            <div class="justify-between mt-6 d-flex">
                <div class="text-5xl">{{ __('Users') }}</div>

                <a href="{{ route('user.create') }}">
                    <div class="btn btn-info" style="float: right;">
                        {{ __('Create user') }}
                    </div>
                </a>
            </div>
            <div class="mt-4">
                <nav aria-label="breadcrumb mt-4 pb-4">
                    <ol class="breadcrumb bg-slate-50/10">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" >Users</li>
                    </ol>
                </nav>
            </div>

        </div>


        {{-- <div class="btn btn-info" onclick="createUser()" >
            Create user
        </div> --}}
        <table
            class="table mt-12 table-fixed table-responsive border-dark hover:table-fixed md:table-fixed border-spacing-x-px ">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>User Name </th>
                    <th>Email Id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('user.password', $user->id) }}">
                                <button class="btn btn-info">
                                    <i class="fa fa-key"></i>
                                </button>
                            </a>
                            <a href="{{ route('user.edit', $user->id) }}">
                                <button class="btn btn-success">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </a>

                            <a href="{{ route('user.delete', $user->id) }}">
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>



        </table>
    </div>
@endsection
{{-- @section('script')
    <script>
        function createUser(){
            var url="{{ route('user.create') }}";
            console.log(url);
            history.pushState({}, "user create", url);
            $.ajax({
                url:url,
                type:'GET',
                success:function(response){
                    $('#contentWrapper').html(response.html);
                }
            })
        }
    </script>
@endsection --}}
