<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ChatUsersList extends Component
{
    public $users;
    public function mount() {
        $this->users = User::role('user')->where('id','!=',auth()->id())->get();
    }

    public function render()
    {
        return view('livewire.chat-users-list');
    }
}
