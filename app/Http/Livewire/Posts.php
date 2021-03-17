<?php

namespace App\Http\Livewire;

use App\Http\Requests\StoreRequest;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;
    public $user_id;
    public $category_id ;
    public $title;
    public $body;
    public $image;
    // public $data_id;
    public $table_id;

    public function render()
    {
        return view('livewire.posts', ['posts' => Post::all()]);
    }

    public function resetInputFields()
    {
    	$this->title = '';
    	$this->body = '';
    }

    public function StoreRequest()
    {
        $this->validate([
    		'title'		=> 'required',
    		'body'	    => 'required',
    	]);
    }

    public function store()
    {
        $this->StoreRequest();
        Post::create([
            'title'         => $this->title,
            'body'          => $this->body,
            'user_id'       => 2,
            'category_id'   => 2,
            'image' =>  4, //$this->image->store('image'),
        ]);

    	session()->flash('message', 'Data Created Successfully.');
    	$this->resetInputFields();
    }

    public function edit($post)
    {
        $data = Post::findOrFail($post);
        $this->table_id = $post;
        $this->user_id = $data->user_id;
        $this->category_id = $data->category_id;
        $this->title = $data->title;
        $this->body = $data->body;
    }

    public function update()
    {
        // dd($this->post);
        $validate = $this->validate([
            'title'    =>  'required',
            'body'     =>  'required',
        ]);

        $post = Post::find($this->table_id);

        $post->update([
            'title'       =>   $this->title,
            'body'         =>  $this->body,
        ]);

        session()->flash('message', 'Data Updated Successfully.');

        $this->resetInputFields();

        $this->emit('userStore');
    }

    public function delete($post)
    {
        Post::find($post)->delete();
        session()->flash('message', 'Data Deleted Successfully.');
    }

}
