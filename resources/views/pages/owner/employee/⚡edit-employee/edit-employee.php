<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::navbar')] class extends Component
{
    public User $employee;
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function mount(User $employee)
    {
        $this->employee = $employee;
        $this->name = $employee->name;
        $this->email = $employee->email;
    }

    protected function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . $this->employee->id,
            'password' => 'nullable|string|min:6|confirmed',
        ];
    }

    public function update()
    {
        $this->validate();

        $this->employee->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
                ? Hash::make($this->password)
                : $this->employee->password,
        ]);

        session()->flash('success', 'Employee updated successfully!');
    }
};
