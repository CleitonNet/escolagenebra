<?php

namespace App\Livewire\Guest;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Newsletter extends Component
{
    public $name, $whatsapp, $email, $segmento;

    protected $rules = [
        'name' => 'required|string|max:255',
        'whatsapp' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'segmento' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        // Http::post('https://api.sheetmonkey.io/form/cSCAwDwZL67W25QLf25MP9', [
        //     'name' => $this->name,
        //     'whatsapp' => $this->whatsapp,
        //     'email' => $this->email,
        //     'segmento' => $this->segmento
        // ]);

        // Resetar os campos após submissão
        $this->reset(['name', 'whatsapp', 'email', 'segmento']);

        // session()->flash('message', 'Cadastro realizado com sucesso!');
        $this->dispatch('registered');

    }

    public function render()
    {
        return view('livewire.guest.newsletter');
    }
}
