<?php

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.gu')] class extends Component
{
    public string $email = '';

    /**
     * Send a password reset link to the provided email address.
     */
    public function sendPasswordResetLink(): void
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $this->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
}; ?>
       <div class="login-form">
            <div class="form-box">
                        <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
                <!-- Login Form -->
                <div id="loginForm" class="form-toggle active">
                    <form wire:submit="sendPasswordResetLink">
                         <div class="mb-3">
                            <label>Enter your email</label>
                            <input type="email" wire:model="email"  class="form-control" name="email" placeholder="Email address" required />
                             <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <x-primary-button class="">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>

