<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::public.home-page')->name('home');

Route::livewire('/login', 'auth::login')->name('login');
Route::livewire('/logout', 'auth::logout')->name('logout');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::livewire('/dashboard', 'pages::admin.dashboard')->name('admin.dashboard');

    //roles
    Route::livewire('/roles', 'pages::admin.role.view-role')->name('admin.roles');
    Route::livewire('/roles/create', 'pages::admin.role.create-role')->name('admin.roles.create');
    Route::livewire('/roles/{role}/edit', 'pages::admin.role.edit-role')->name('admin.roles.edit');

    //users
    Route::livewire('/users', 'pages::admin.user.view-user')->name('admin.users');
    Route::livewire('/users/create', 'pages::admin.user.create-user')->name('admin.users.create');
    Route::livewire('/users/{user}/edit', 'pages::admin.user.edit-user')->name('admin.users.edit');
});

Route::middleware(['auth', 'role:owner'])->prefix('owner')->group(function () {
    Route::livewire('/dashboard', 'pages::owner.dashboard')->name('owner.dashboard');

    //employee
    Route::livewire('/employee', 'pages::owner.employee.view-employee')->name('owner.employee.view');
    Route::livewire('/employee/create', 'pages::owner.employee.create-employee')->name('owner.employee.create');
    Route::livewire('/employee/edit/{employee}', 'pages::owner.employee.edit-employee')->name('owner.employee.edit');
});

Route::middleware(['auth', 'role:employee'])->prefix('employee')->group(function () {
    Route::livewire('/dashboard', 'pages::employee.dashboard')->name('employee.dashboard');
});
