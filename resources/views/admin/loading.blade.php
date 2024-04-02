<button class="btn btn-primary d-grid w-100" type="submit" wire:loading.attr='disabled'>
    <span wire:loading.remove>{{ $name }}</span>
    <div class="text-center" wire:loading wire:target='submit'>
        <span class="spinner-border spinner-border-sm text-white " role="status">
            <span class="visually-hidden text-center">Loading...</span>
        </span>
    </div>
</button>
