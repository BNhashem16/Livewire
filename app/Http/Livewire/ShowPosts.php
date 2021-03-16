<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public Post $post;

    public $message = 'Hello World!';

    protected $rules = [
        'post.title' => 'required|string|min:6',
        'post.body' => 'required|string|max:500',
    ];

    public function render()
    {
        return view('livewire.show-posts', ['categories' => Category::all()])->layout('layouts.base');
    }

    public function save()
    {
        $this->validate();

        $this->post->save();
    }

}
