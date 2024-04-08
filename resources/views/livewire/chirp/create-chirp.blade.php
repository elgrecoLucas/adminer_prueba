<div>
    <form wire:submit="save">
        <input type="text" wire:model.blur="form.message">
        <div>
            @error('form.message') <span class="error">{{ $message }}</span> @enderror 
        </div>
     
        <button type="submit">Guardar</button>
    </form>
</div>
