<?php

namespace App\Livewire;

use App\Models\Conversation as ModelsConversation;
use Livewire\Component;

class Conversation extends Component
{
    public ?string $status;

    public function updateStatus(ModelsConversation $conversation): void
    {
        $conversation->update([
            'status' => $this->status,
        ]);
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        $conversations               = ModelsConversation::all();
        $count                       = ModelsConversation::count();
        $countConversationsNotRead   = ModelsConversation::where('status', 'Aguardando')->count();
        $countConversationsFinalized = ModelsConversation::where('status', 'Finalizadas')->count();

        return view('livewire.conversation', compact('conversations', 'count', 'countConversationsNotRead', 'countConversationsFinalized'));
    }
}
