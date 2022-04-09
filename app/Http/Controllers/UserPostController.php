<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        if ($user->username == auth()->user()->username) {
            return redirect()->route('dashboard');
        }

        $posts = $user->posts()->latest()->with(['user', 'likes'])->paginate(10);
        return view('userpost.index', ['user' => $user, 'posts' => $posts]);
    }
}
