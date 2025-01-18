<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // public function index() {
    //     $users = DB::table('users')
    //     ->get();

    //     dd($users);
    // }

    public function index() {
        $users = User::query()->first()->get();

        return view('users.index',[
            'users' => $users,
        ]);
    }

    public function create() {
        return view('users.form', [
            'user' => new User(),
            'page_meta' => [
                'title' => 'Create new user',
                'method' => 'post',
                'url' => route('users.store'),
                'submit_text' => 'Create'
            ]
        ]);
    }

    public function store(UserRequest $request){
        // $validated = $request->validate([
        //     'name' => ['required', 'min:3', 'max:255', 'string'],
        //     'email' => ['required', 'email'],
        //     'password' => ['required', 'min:8'],
        // ]);

        // User::create($validated);

        User::create($request->validated());

        // return redirect('/users');
        return to_route('users.index');
    }

    public function show(User $user){

        return view('users/show',[
            'user' => $user,
        ]);
    }

    public function edit(User $user){
        return view('users/form', [
            'user' => $user,
            'page_meta' => [
                'title' => 'Edit user: ' . $user->name,
                'method' => 'put',
                'url' => route('users.update', $user),
                'submit_text' => 'Update'
            ]
        ]);
    }

    public function update(UserRequest $request, User $user){
        $user->update($request->validated());

        return redirect('/users');
    }

    public function destroy(User $user){
        $user->delete();

        // return redirect(to:  route('users.index'));
        return to_route('users.index');
    }
}