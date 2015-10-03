<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
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
    public function subscribe($userId)
    {
//        $subscribe = Auth::user()->subscribe()->paginate(10);
//        return view('users.subscribe', compact('subscribe'));
        $user = User::findOrFail($userId);
        $user->load(['subscribe_user_id','subscribe']);
        return view('users.subscribe', compact('subscribe'));
    }

}
