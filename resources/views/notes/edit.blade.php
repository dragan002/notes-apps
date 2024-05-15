<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('notes.update', $note) }}" method="post">
                @method('put')
                @csrf
                <x-text-input field="title"
                              type="text"
                              name="title"
                              class="w-full"
                              autocomplete="off"
                              placeholder="Title"
                              :value="@old('title', $note->title)"
                ></x-text-input>


                <x-textarea field="text"
                            class="w-full"
                            name="text"
                            rows="20"
                            placeholder="Start typing here"
                            :value="@old('text', $note->text)"
                ></x-textarea>

                <x-danger-button class="mt-6">Save Note</x-danger-button>
            </form>
        </div>
    </div>
</x-app-layout>
