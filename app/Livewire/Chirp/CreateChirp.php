<?php

namespace App\Livewire\Chirp;

use App\Livewire\Forms\ChirpForm;
use Livewire\Component;
use App\Models\Chirp;

class CreateChirp extends Component
{
    public ChirpForm $form; 

    public function save()
    {
        $this->form->store;
    }

    public function render()
    {
        return view('livewire.chirp.create-chirp');
    }
}
