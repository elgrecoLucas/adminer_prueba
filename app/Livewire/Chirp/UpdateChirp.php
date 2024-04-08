<?php

namespace App\Livewire\Chirp;

use Livewire\Component;
use App\Livewire\Forms\ChirpForm;
use App\Models\Chirp;

class UpdateChirp extends Component
{
    public  ChirpForm $form;
 
    public function mount(Chirp $chirp)
    {
        $this->form->setChirp($chirp);
    }
 
    public function save()
    {
        $this->form->update();
 
        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.chirp.update-chirp');
    }
}
