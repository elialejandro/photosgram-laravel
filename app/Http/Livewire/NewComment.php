<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewComment extends Component
{
    public $comentario;

    public function render()
    {
        return view('livewire.new-comment');
    }

    public function enviarComentario()
    {
        dump($this->comentario);
    }
}
