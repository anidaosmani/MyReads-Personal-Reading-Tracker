<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                My Reading List
            </h2>
            <a href="{{ route('books.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                + Add Book
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if($books->isEmpty())
                <div class="bg-white shadow sm:rounded-lg p-6 text-center text-gray-500">
                    No books yet! Add your first book above.
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($books as $book)
                    <div class="bg-white shadow sm:rounded-lg p-6">
                        <h3 class="text-lg font-bold text-gray-900">{{ $book->title }}</h3>
                        <p class="text-gray-600">by {{ $book->author }}</p>
                        <p class="text-sm text-gray-500 mt-1">{{ $book->genre }}</p>
                        <span class="inline-block mt-2 px-2 py-1 text-xs rounded-full bg-indigo-100 text-indigo-800">
                            {{ $book->status }}
                        </span>
                        @if($book->rating)
                            <p class="text-sm mt-2 text-yellow-500">Rating: {{ $book->rating }}/10</p>
                        @endif
                        <div class="flex gap-3 mt-4">
                            <a href="{{ route('books.edit', $book) }}" class="text-indigo-600 hover:underline text-sm">Edit</a>
                            <form method="POST" action="{{ route('books.destroy', $book) }}">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline text-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>