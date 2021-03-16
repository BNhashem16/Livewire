<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;

class PostCreate extends Component
{
    use WithFileUploads;
    public $title;
    public $body;
    public $image;


    protected $rules = [
        'title' => 'required|min:6',
        'body' => 'required',
        'image' => 'mimes:png,jpg|max:1024',
    ];


    public function render()
    {
        return view('livewire.posts.post-create')->layout('layouts.base');
    }

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
        Post::create([
            'title'         => $this->title,
            'body'          => $this->body,
            'user_id'       => 2,
            'category_id'   => 2,
            'image' =>  $this->image->store('image'),
        ]);
        session()->flash('message', 'Post successfully updated.');
    }
}
