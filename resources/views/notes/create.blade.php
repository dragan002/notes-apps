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
                <x-text-input field="title"
                              type="text"
                              name="title"
                              class="w-full"
                              autocomplete="off"
                              placeholder="Title"
                              :value="@old('title')"
                ></x-text-input>
{{--                @error('title')--}}
{{--                    <div class="text-red-600 text-sm">{{ $message }}<div>--}}
{{--                @enderror--}}

                <x-textarea field="text"
                            class="w-full"
                            name="text"
                            rows="20"
                            placeholder="Start typing here"
                            :value="@old('text')"
                ></x-textarea>
{{--                @error('text')--}}
{{--                            <div class="text-red-600"> {{$message}}</div>--}}
{{--                @enderror--}}
                <x-danger-button class="mt-6">Save Note</x-danger-button>
            </form>
        </div>
    </div>
</x-app-layout>
