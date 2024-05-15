<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <p class="opacity-70 text-white">
                    <strong>Created At: {{ $note->created_at->diffForHumans() }}</strong>
                </p>

                <p class="opacity-70 ml-8 text-white">
                    <strong>Updated At: {{ $note->updated_at->diffForHumans() }}</strong>
                </p>
            </div>

                <div class="my-6 p-6 mb-4 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-4xl">
                        {{ $note->title }}
                    </h2>

                    <p class="mt-2 text-red-600 whitespace-pre-wrap">{{$note->text}}</p>
                    <span class="block mt-4 text-sm opacity-70">{{ $note->updated_at->diffForHumans() }}</span>
                </div>
        </div>
    </div>
</x-app-layout>
