<?php

namespace App\Livewire;

use App\Models\Conversation as ModelsConversation;
use Livewire\Component;
use TallStackUi\Traits\Interactions;

class Conversation extends Component
{
    use Interactions;

    public ?string $status;
    public function updateStatus(ModelsConversation $conversation): void
    {
        $updateResult = $conversation->update([
            'status' => $this->status,
        ]);

        if ($updateResult) {
            $this->toast()->success('Sucesso', 'Status atualizado com sucesso');
        } else {
            $this->toast()->error('Error!', 'Erro ao atualizar status');
        }
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
