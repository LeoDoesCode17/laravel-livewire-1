<form wire:submit="save"> 
    <div>
        <label for="title">Title</label>
        <input
            id="title"
            type="text"
            wire:model="title"
            placeholder="Enter the title"
        >
    </div>
    <div>
        <label for="body">Body</label>
        <input 
            id="body"
            type="text"
            wire:model="body"
            placeholder="Enter the body">
    </div>
    <button type="submit">Save</button>
</form>
