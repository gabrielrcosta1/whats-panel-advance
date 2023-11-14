<?php

namespace App\Livewire;

use App\Models\Conversation as ModelsConversation;
use Livewire\{Component, WithPagination};
use TallStackUi\Traits\Interactions;

class Conversation extends Component
{
    use Interactions;
    use WithPagination;

    public ?string $status;

    public ?string $orderBy = 'created_at';

    public ?string $orderDirection = 'desc';

    public function toggleOrder(): void
    {
        $this->orderDirection = $this->orderDirection === 'asc' ? 'desc' : 'asc';
        $this->orderBy        = 'created_at';

    }

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
        $conversations               = ModelsConversation::whereIn('status', $statuses)->orderBy($this->orderBy, $this->orderDirection)->paginate(10);
        $count                       = ModelsConversation::count();
        $countConversationsNotRead   = ModelsConversation::where('status', 'Aguardando')->count();
        $nowValue                    = ModelsConversation::where('status', 'Aguardando')->count();
        $countConversationsFinalized = ModelsConversation::where('status', 'Finalizado')->count();

        return view('livewire.conversation', compact('conversations', 'count', 'countConversationsNotRead', 'countConversationsFinalized'));

    }
}
