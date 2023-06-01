<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des Reabonnements de Sky Vision') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="text-left">
                <x-button>
                    <a href="{{route('create_client')}}">Reabonner</a>
                </x-button>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @livewire('reabos-table-view')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>