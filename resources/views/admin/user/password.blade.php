@extends('layouts.backend.main')
@section('content')
    <div class="content-wrapper ">

        <form action="{{ route('user.password.update',$user->id) }}" method="POST" class="w-50 mx-auto pt-5"  >
            @csrf
            <div class="text-3xl font-semibold mb-4">Change Password</div>
            <div class="form-group">
                <input type="text" name="password" placeholder="Change Password"  class="mb-4 border form-control " >
                <button class="btn bg-pink-800 w-100" type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
