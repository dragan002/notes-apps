<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('notes.store') }}" method="post">
                @csrf
                <x-text-input field="title" type="text" class="w-full" autocomplete="off" placeholder="Title"></x-text-input>
                <x-input-error :messages="$errors->get('title')" />

                <x-text-input field="text" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" rows="20" placeholder="Start typing here"></x-text-input>
                <x-input-error :messages="$errors->get('text')" />

                <x-danger-button class="mt-6">Save Note</x-danger-button>
            </form>
        </div>
    </div>
</x-app-layout>
