<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'nome' => ['required', 'string', 'max:100'],
        'cognome' => ['required', 'string', 'max:100'],
        'ruolo' => ['required', 'in:admin,user,staff'],
        'username' => ['required', 'string', 'max:50', 'unique:users'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'indirizzo' => ['nullable', 'string', 'max:255'],
        'citta' => ['nullable', 'string', 'max:100'],
        'data_di_nascita' => ['nullable', 'date'],
    ]);

    $user = User::create([
        'nome' => $request->nome,
        'cognome' => $request->cognome,
        'ruolo' => $request->ruolo,
        'username' => $request->username,
        'password' => Hash::make($request->password),
        'indirizzo' => $request->indirizzo,
        'citta' => $request->citta,
        'data_di_nascita' => $request->data_di_nascita,
    ]);

    event(new Registered($user));

    Auth::login($user);

    // redirect dove vuoi, ad esempio alla route 'user'
    return redirect()->route('user');
}

}
