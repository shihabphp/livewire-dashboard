{{-- The Single Delete Modal --}}
<div class="text-left">
<x-dialog-modal wire:model="modalConfirmDeleteVisible">
    <x-slot name="title">
    {{__('dashboard::lang.delete')}}
    </x-slot>

    <x-slot name="content">
    {{__('dashboard::lang.delete_individual_body')}}
    </x-slot>

    <x-slot name="footer">
        <x-secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
        {{__('dashboard::lang.nevermind')}}
        </x-secondary-button>

        <x-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
        {{__('dashboard::lang.delete')}}
        </x-danger-button>
    </x-slot>
</x-dialog-modal>
</div>