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
                <x-text-input type="text" class="w-full" autocomplete="off" name="title" placeholder="Title"></x-text-input>
                <x-text-input name="text" rows="20" placeholder="Start typing here" class="w-full"></x-text-input>
                <x-danger-button class="mt-6">Save Note</x-danger-button>
            </form>
        </div>
    </div>
</x-app-layout>
