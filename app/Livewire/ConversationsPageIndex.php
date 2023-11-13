<?php

namespace App\Livewire;

use App\Models\Conversation;
use Illuminate\Contracts\View\View;
use Livewire\{Component, WithPagination};

class ConversationsPageIndex extends Component
{
    use WithPagination;

    public ?string $search = '';
    public function render(): View
    {
        $conversations = Conversation::where(function ($query) {
            $query->where('number', 'like', '%' . $this->search . '%')
                ->orWhere('name', 'like', '%' . $this->search . '%');
        })
            ->paginate(10);

        return view('livewire.conversations-page-index', compact('conversations'));
    }
}