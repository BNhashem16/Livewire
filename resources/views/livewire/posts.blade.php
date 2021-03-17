
<div>
    @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    @include('livewire.create')

    @include('livewire.update')
    <br />
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        	@foreach($posts as $post)
        	<tr>
        		<td>{{ $post->title }}</td>
        		<td>{{ $post->body }}</td>
        		<td>
                    <button data-toggle="modal" data-target="#updateModal" class="btn btn-primary btn-sm" wire:click="edit({{ $post->id }})">Edit</button>
                    <button wire:click="delete({{ $post->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
        	</tr>
        	@endforeach
        </tbody>

    </table>
</div>
