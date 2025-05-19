<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.gu')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>


       



<div class="login-form">
    <div class="form-box">
        <!-- Login Form -->
        <div id="loginForm" class="form-toggle active">
            <div class="login-title">Register</div>
            <form wire:submit="register">
                <div class="mb-3">
                    <label>{{__('Name')}}</label>
                    <input type="text" wire:model="name" class="form-control" name="name" placeholder="Enter name" required />
                    <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <label>{{__('Email')}}</label>
                    <input type="email" class="form-control" wire:model="email" name="email" placeholder="Enter email" required />
                    <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <label>{{__('Password')}}</label>
                    <input type="password" class="form-control" wire:model="password" name="password" placeholder="Password" required />
                    <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                </div>
                <div class="mb-3">
                    <label>{{__('Confirm Password')}}</label>
                    <input type="password" class="form-control" wire:model="password_confirmation" name="password_confirmation"  placeholder="Password" required />
                    <x-input-error :messages="$errors->get('form.password_confirmation')" class="mt-2" />
                </div>
                <div class="mb-3 text-end">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                        {{ __('Already registered?') }}
                    </a>
                </div>
                
                <x-primary-button class="ms-3">
                    {{ __('Register') }}
                </x-primary-button>
            </form>
        </div>
        
    </div>
</div>
        
{{-- 
<div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div> --}}
