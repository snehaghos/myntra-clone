<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::get();
        return view('admin.user.index', $data);
    }
    public function create()
    {
        // return response()->json(
        //     [
        //     'html'=>view('user.create')->render()
        // ]
        // );
        return view('admin.user.create');

    }
    public function store(Request $request)
    {   //dd($request->all());
        $user = new User;
        $user->role = $request->role;
        $user->name = $request->name;
        $user->password=$request->password;
        $user->email = $request->email;

        $user->save();
         return response()->json(
            [
            'status'=>true,
            'message'=>"User successfully created"
        ]
        );
        // return redirect()->route('user.index');

    }
    public function edit($id)
    {
        $user = User::find($id);
        // dd($question);
        return view('admin.user.edit', compact('user'));
    }
    public function password($id)
    {
        $user = User::find($id);
        // dd($question);
        return view('admin.user.password', compact('user'));
    }
    public function password_update(Request $request, $id)
    {
        $user = User::find($id);
        $user->password = $request->password;
        //dd($user->password);
        $user->save();
        return redirect()->route('user.index');

    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->role = $request->role;
        $user->name = $request->name;

        $user->email = $request->email;

        $user->save();
        return redirect()->route('user.index');

    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
