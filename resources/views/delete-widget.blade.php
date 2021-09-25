{{-- The Single Delete Modal --}}
<div class="text-left">
<x-dashboard::dialog-modal wire:model="modalConfirmDeleteVisible">
    <x-slot name="title">
    {{__('dashboard::lang.delete')}}
    </x-slot>

    <x-slot name="content">
    {{__('dashboard::lang.delete_individual_body')}}
    </x-slot>

    <x-slot name="footer">
        <x-dashboard::secondary-button wire:click="$toggle('modalConfirmDeleteVisible')" wire:loading.attr="disabled">
        {{__('dashboard::lang.nevermind')}}
        </x-dashboard::secondary-button>

        <x-dashboard::danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
        {{__('dashboard::lang.delete')}}
        </x-dashboard::danger-button>
    </x-slot>
</x-dashboard::dialog-modal>
</div>