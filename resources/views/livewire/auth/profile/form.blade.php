<div>
    @if ($this->notification)
        <x-notification :type="$notification['type']" :message="$notification['message']" />
    @endif
    {{ $this->form }}
    <button class="btn btn-primary w-100 mt-3" wire:click="submit">Sauvegarder</button>
</div>
