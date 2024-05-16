<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert-success>
                {{session('success')}}
            </x-alert-success>
            <div class="flex">
                <p class="opacity-70 text-white">
                    <strong>Created At: {{ $note->created_at->diffForHumans() }}</strong>
                </p>

                <p class="opacity-70 ml-8 text-white">
                    <strong>Updated At: {{ $note->updated_at->diffForHumans() }}</strong>
                </p>

                <a href="{{ route('notes.edit', $note) }}" class="btn-link ml-auto">Edit Note</a>

                <form action="{{ route('notes.destroy', $note) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete this note?')">Move to trash</button>
                </form>
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
