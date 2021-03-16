<form wire:submit.prevent="submit">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <input type="text" wire:model="title">
    @error('title') <span class="error">{{ $message }}</span> @enderror

    <br>
    <input type="text" wire:model="body">
    @error('body') <span class="error">{{ $message }}</span> @enderror
    <br>
    <input type="file" wire:model="image">

    @error('image') <span class="error">{{ $message }}</span> @enderror
    <br>

    <button type="submit">Save Contact</button>
</form>
