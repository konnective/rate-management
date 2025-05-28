<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component
{
    public string $current_password = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Update the password for the currently authenticated user.
     */
      public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'latitude' => ['required', 'string', 'max:255'],
            'longitude' => ['required', 'string', 'max:255'],
        ]);

        $user->fill($validated);

        // if ($user->isDirty('email')) {
        //     $user->email_verified_at = null;
        // }

        $user->save();

        $this->dispatch('coordinates-updated', name: $user->name);
    }
}; ?>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Change Coordinates') }}
        </h2>
    </header>

   <form>
        <div class="form-group">
            <x-input-label for="update_latitude" :value="__('Latitude')" />
            <x-text-input wire:model="latitude" id="update_latitude" name="latitude" type="text" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->get('latitude')" class="mt-2" />
        </div>
        <div class="form-group">
            <x-input-label for="update_logitude" :value="__('Longitude')" />
            <x-text-input wire:model="longitude" id="update_logitude" name="longitude" type="text" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->get('longitude')" class="mt-2" />
        </div>
        <div class="flex items-center mt-3">
            <x-form-button>{{ __('Save') }}</x-form-button>

            <x-action-message class="me-3" on="coordinates-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
