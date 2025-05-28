<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Livewire\Volt\Component;

new class extends Component
{
    public string $latitude = '';
    public string $longitude = '';

    /**
     * Update the password for the currently authenticated user.
     */
    public function updateCoordinates(): void
    {
        $user = Auth::user();
        $validated = $this->validate([
            'latitude' => ['required', 'string', 'max:255'],
            'longitude' => ['required', 'string', 'max:255'],
        ]);
        
        $user->fill($validated);

        $user->save();
        $this->dispatch('coordinates-updated', name: $user->latitude);
    }
}; ?>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Change Coordinates') }}
        </h2>
    </header>

   <form wire:submit="updateCoordinates">
        <div class="form-group">
            <x-input-label for="latitude" :value="__('Latitude')" />
            <x-text-input wire:model="latitude" id="latitude" name="latitude" type="text" class="mt-1 block w-full" required autocomplete="latitude" />
            <x-input-error class="mt-2" :messages="$errors->get('latitude')" />
        </div>
        <div class="form-group">
           <x-input-label for="longitude" :value="__('Longitude')" />
            <x-text-input wire:model="longitude" id="longitude" name="longitude" type="text" class="mt-1 block w-full" required autocomplete="longitude" />
            <x-input-error class="mt-2" :messages="$errors->get('longitude')" />
        </div>
        <div class="flex items-center mt-3">
            <x-form-button>{{ __('Save') }}</x-form-button>

            <x-action-message class="me-3" on="coordinates-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section>
