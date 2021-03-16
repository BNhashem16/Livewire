<?php

namespace App\Http\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.posts.index', [
            'posts' => Post::paginate(2),
        ])->layout('layouts.base');
    }
}
