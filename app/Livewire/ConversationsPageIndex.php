<?php

namespace App\Livewire;

use App\Models\Conversation;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ConversationsPageIndex extends Component
{
    public ?string $search = '';
    public function render(): View
    {
        $conversations = Conversation::where(function ($query) {
            $query->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($this->search) . '%'])
                ->orWhereRaw('LOWER(number) LIKE ?', ['%' . strtolower($this->search) . '%']);
        })->paginate(10);

        return view('livewire.conversations-page-index', compact('conversations'));
    }
}
