<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Request\CreateUserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    //
    public function index() {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create() {
        return view('user.create');
    }

    public function store (Request $request) {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        return redirect()->route('user.index');
    }

}
