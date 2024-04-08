<?php

use function Livewire\Volt\{state, rules};

state(['message' => '']); 
rules(['message' => 'required|string|max:255']);

/*
$validated = $this->validate();
Esta línea llama al método validate en el componente Livewire.
Le pasa las reglas de validación definidas (rules) al método validate.
El método validate valida el campo message contra las reglas definidas.
Si la validación es correcta, devuelve una matriz saneada de los datos del formulario ($validated).
Si la validación falla, lanza una ValidationException que Livewire maneja mostrando mensajes de error.
*/

$store = function () {
    $validated = $this->validate();
    
    //Acá creamos un nuevo chirp para el user autenticado!!!!!!
    auth()->user()->chirps()->create($validated);
    
    //$this->message = '';
    $this->reset();
};
?>

<div>
    <form wire:submit="store"> 
        <textarea
            wire:model="message"
            placeholder="{{ __('What\'s on your mind?') }}"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        ></textarea>
 
        <x-input-error :messages="$errors->get('message')" class="mt-2" />

        <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
    </form>
</div>
