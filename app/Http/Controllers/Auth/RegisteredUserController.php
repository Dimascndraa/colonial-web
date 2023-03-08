<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user.register', [
            'title' => "Register New Account",
            'about' => About::all()->first()
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // return $request;

        $validatedData = $request->validate([
            'image' => ['image', 'file', 'max:5120'],
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string'],
            'hp' => ['required', 'max:255'],
            'whatsapp' => ['required', 'boolean'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        if ($request->image) {
            $validatedData['image'] = $request->file('image')->store('profile-picture/' . $request->username);
        }
        $validatedData['hp'] = '62' . $request->hp;

        if (!$request->level) {
            $validatedData['level'] = 'user';
        } else {
            $validatedData['level'] = $request->level;
        }

        $validatedData['status'] = 'aktif';
        $validatedData['password'] = bcrypt($request->password);

        // return $validatedData;

        $user = User::create($validatedData);

        event(new Registered($user));

        Auth::login($user);

        if (auth()->user()->level === "admin") {
            return redirect(RouteServiceProvider::DASHBOARD);
        } else {
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
