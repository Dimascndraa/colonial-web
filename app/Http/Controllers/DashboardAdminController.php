<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index', [
            'title' => 'Admin',
            'about' => About::all()->first(),
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create', [
            'title' => 'Tambah Admin',
            'about' => About::all()->first(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => ['image', 'file', 'max:5120'],
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'hp' => ['required', 'max:255'],
            'whatsapp' => ['required', 'boolean'],
            'username' => 'required|unique:users|string|max:255',
            'email' => 'required|unique:users|string|email|max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $validatedData['hp'] = '62' . $request->hp;

        if (!$request->level) {
            $validatedData['level'] = 'user';
        } else {
            $validatedData['level'] = $request->level;
        }

        if ($request->image) {
            $validatedData['image'] = $request->file('image')->store('profile-picture/' . $request->username);
        }

        User::create($validatedData);
        return redirect('/dashboard/users')->with('success', 'Admin berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', [
            'title' => 'Ubah Admin',
            'about' => About::all()->first(),
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // return dump($request->file());

        $validatedData = $request->validate([
            'image' => ['image', 'file', 'max:5120'],
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'hp' => ['required', 'max:255'],
            'whatsapp' => ['required', 'boolean'],
        ]);

        $validatedData['hp'] = '62' . $request->hp;

        if ($request->username != $user->username) {
            $validatedData['username'] = 'required|unique:users|string|max:255';
        }

        if ($request->email != $user->email) {
            $validatedData['email'] = 'required|unique:users|string|email|max:255';
        }


        if (!$request->level) {
            $validatedData['level'] = 'user';
        } else {
            $validatedData['level'] = $request->level;
        }

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-image');
        }

        // return $request;

        User::where('id', $user->id)->update($validatedData);
        return redirect('/dashboard/users')->with('success', 'User berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->image) {
            Storage::delete($user->image);
        }

        User::destroy($user->id);
        return redirect('/dashboard/users')->with('success', 'User berhasil dihapus!');
    }

    // public function change(Request $request)
    // {
    //     return $request;
    // }


}
