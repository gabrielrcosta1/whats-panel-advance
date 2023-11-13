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
            $this->dispatch('update-status');
            $this->status = null;
        } else {
            $this->toast()->error('Error!', 'Erro ao atualizar status');
        }
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        $statuses                    = ['Em andamento', 'Aguardando'];
        $conversations               = ModelsConversation::whereIn('status', $statuses)->get();
        $count                       = ModelsConversation::count();
        $countConversationsNotRead   = date('H:i:s', time());
        $countConversationsFinalized = ModelsConversation::where('status', 'Finalizado')->count();

        return view('livewire.conversation', compact('conversations', 'count', 'countConversationsNotRead', 'countConversationsFinalized'));

    }
}
