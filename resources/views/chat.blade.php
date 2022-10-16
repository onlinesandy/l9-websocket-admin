<x-app-layout>
    @include('includes.page-title')
    <div class="row">
        <livewire:chat-room :userlist="$userlist" :wire:key="s12q">
    </div>
</x-app-layout>
