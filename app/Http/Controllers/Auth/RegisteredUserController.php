<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\NewUserNotification;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'username' => 'nullable|unique:users',
            'gender' => 'nullable',
            'provinsi_id' => 'nullable',
            'kotakab_id' => 'nullable',
            'kecamatan_id' => 'nullable',
            'kelurahan_id' => 'nullable',
            'kodepos' => 'nullable',
            'address' => 'nullable'
        ]);

        $attr['password'] = Hash::make($attr['password']);
        $user = User::create($attr);

        event(new Registered($user));

        $user->notify(new NewUserNotification());

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
