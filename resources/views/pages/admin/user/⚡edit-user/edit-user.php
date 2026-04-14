<?php

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::navbar')] class extends Component
{
    public $user;
    public $name;
    public $email;
    public $selectedRole;
    public $password;
    public $password_confirmation;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->selectedRole = $user->roles->pluck('name')->first(); // single role
    }

    protected function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'password' => 'nullable|string|min:6|confirmed',
            'selectedRole' => 'required|string',
        ];
    }

    public function save()
    {
        $this->validate();

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password ? bcrypt($this->password) : $this->user->password,
        ]);

        // Sync with a single role
        $this->user->syncRoles([$this->selectedRole]);

        session()->flash('success', 'User updated successfully!');
    }
};
