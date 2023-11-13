<?php

namespace App\Livewire;

use App\Models\Conversation as ModelsConversation;
use Livewire\Component;

class Conversation extends Component
{
    public function render(): \Illuminate\Contracts\View\View
    {
        $conversations               = ModelsConversation::all();
        $count                       = ModelsConversation::count();
        $countConversationsNotRead   = ModelsConversation::where('status', 'Aguardando')->count();
        $countConversationsFinalized = ModelsConversation::where('status', 'Finalizadas')->count();

        return view('livewire.conversation', compact('conversations', 'count', 'countConversationsNotRead', 'countConversationsFinalized'));
    }
}
