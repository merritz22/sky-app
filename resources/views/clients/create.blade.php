<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creation d\'un client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('store_client') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="nom" :value="__('Nom')" />

                            <x-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus/>
                        </div>
                        
                        <div>
                            <x-label for="telephone" :value="__('Telephone')" />

                            <x-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required />
                        </div>
                        
                        <div>
                            <x-label for="num_abo" :value="__('Numero d\'abonne')" />

                            <x-input id="num_abo" class="block mt-1 w-full" type="number" name="num_abo" :value="old('num_abo')" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Creer') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>