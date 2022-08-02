<form>
    <div class="form-group">
        <label for="FormControlInput1">Title:</label>
        <input type="text" class="form-control" id="FormControlInput1" placeholder="Enter Title" wire:model="title">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="FormControlInput2">Body:</label>
        <textarea type="text" class="form-control" id="FormControlInput2" placeholder="Enter Body" wire:model="body"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button wire:click.prevent="store()" class="btn btn-success">Save</button>
</form>