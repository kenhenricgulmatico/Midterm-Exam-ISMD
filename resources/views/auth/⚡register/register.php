<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

new class extends Component
{

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';


    protected array $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
    ];


    public function register()
{
    $this->validate();

    $user = User::create([
        'name'     => $this->name,
        'email'    => $this->email,
        'password' => Hash::make($this->password),
    ]);

    // Assign default role
    $user->assignRole('customer'); // or 'guest'

    // Permission is automatically inherited from the role
    Auth::login($user);
    session()->regenerate();

    // Redirect only to landing page
    return redirect()->route('home');
}
};
