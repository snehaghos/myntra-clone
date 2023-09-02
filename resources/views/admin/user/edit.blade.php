@extends('layouts.backend.main')
@section('content')
<div class="content-wrapper">
    <div class="container p-3 border w-50 border-info">
        <div class="mt-3 mb-4 text-4xl">Edit User Info</div>
        <div class="mt-4">
            <nav aria-label="breadcrumb mt-4 pb-4">
                <ol class="breadcrumb bg-slate-50/10">
                    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
                    <li class="breadcrumb-item active" >Edit</li>
                </ol>
            </nav>
        </div>

        <form action="{{ route('user.update',$user->id) }}" method="POST"  >
            @csrf
            <div class="form-group">
                <input type="text" name="role"  class="mb-4 border form-control border-info" value="{{ $user->role }}">

                <input type=""  name="name" value="{{ $user->name }}"

                    class="mb-4 border form-control border-info">

                <input type="email" name="email" value="{{ $user->email }}"  class="mb-4 border form-control border-info">
                <button class="btn btn-info w-100" type="submit">Update</button>
            </div>
        </form>

    </div>

</div>
@endsection
