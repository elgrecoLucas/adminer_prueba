<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Chirp;

class ChirpForm extends Form
{
    // con el ? indico que el objeto chirp podría ser nulo
    // sirve para luego manejar el mensaje de error! 
    public ?Chirp $chirp;

    #[Validate('required|string|max:255|min:5')]
    public $message = '';

    public function setChirp(Chirp $chirp)
    {
        $this->chirp = $chirp;
 
        $this->message = $chirp->message;
    }

    public function store()
    {
        $validated = $this->validate();
    
        //Acá creamos un nuevo chirp para el user autenticado!!!!!!
        auth()->user()->chirps()->create($validated);

        session()->flash('status', 'Chirp successfully updated.');
    
        //$this->message = '';
        $this->reset('message');
    }

    public function update()
    {
        $this->chirp->update(
            $this->all()
        );
    }
}
