<?php

namespace App\Http\Controllers;

use App\Article;
use App\Follower;
use App\User;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.users',compact('users'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $userId
     * @return Response
     */
    public function show($userId)
    {
        $user = User::findOrFail($userId);
        $user->load(['followers', 'followed']);
        return view('users.show', compact('user'));
    }

    public function stream()
    {
        $stream = Auth::user()->stream()->paginate(10);
        return view('users.stream', compact('stream'));
    }

    public function follow($id)
    {
        Auth::user()->following()->attach($id);
        return route('followers');
    }

    public function showFollowers()
    {
        $users = Auth::user()->followed()->get();
        return view('users.users', compact('users'));
    }

}
