<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulaire de reabonnement.') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('store_reabo') }}">
                        @csrf
                        <div>
                            <x-label for="client_id" :value="__('Client')" />

                            <x-input id="client_id" class="block mt-1 w-full" type="text" name="client_id" :value="__($id)" required />
                        </div>
                        <div>
                            <x-label for="formule" :value="__('Formule')" />
                            <select name="formule" id="formule" class="mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="ACCESS" selected>ACCESS</option>
                                <option value="EVASION">EVASION</option>
                                <option value="EVASION+">EVASION +</option>
                                <option value="TOUT CANAL+">TOUT CANAL +</option>
                                <option value="ESSENTIEL+">ESSENTIEL +</option>
                            </select>
                        </div>
                        
                        <div>
                            <x-label for="date_deb" :value="__('Date de debut')" />

                            <x-input id="date_deb" class="block mt-1 w-full" type="date" name="date_deb" :value="old('num_abo')" required />
                        </div>
                        <div>
                            <x-label for="date_fin" :value="__('Date de fin')" />

                            <x-input id="date_fin" class="block mt-1 w-full" type="date" name="date_fin" :value="old('num_abo')" required />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Reabonner') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>