<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Welcome Card --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-1">
                        Welcome back, {{ Auth::user()->name }}! 👋
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Track your reading progress and manage your personal book collection.
                    </p>
                </div>
            </div>

            {{-- Stats Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-6">
                <div class="bg-blue-50 dark:bg-blue-900 rounded-lg shadow p-6 text-center">
                    <p class="text-4xl font-bold text-blue-600 dark:text-blue-300">📚</p>
                    <p class="mt-2 text-lg font-semibold text-blue-800 dark:text-blue-100">My Books</p>
                    <p class="text-sm text-blue-500 dark:text-blue-300">View your collection</p>
                </div>
                <div class="bg-green-50 dark:bg-green-900 rounded-lg shadow p-6 text-center">
                    <p class="text-4xl font-bold text-green-600 dark:text-green-300">✅</p>
                    <p class="mt-2 text-lg font-semibold text-green-800 dark:text-green-100">Finished</p>
                    <p class="text-sm text-green-500 dark:text-green-300">Books you completed</p>
                </div>
                <div class="bg-yellow-50 dark:bg-yellow-900 rounded-lg shadow p-6 text-center">
                    <p class="text-4xl font-bold text-yellow-600 dark:text-yellow-300">🔖</p>
                    <p class="mt-2 text-lg font-semibold text-yellow-800 dark:text-yellow-100">Reading</p>
                    <p class="text-sm text-yellow-500 dark:text-yellow-300">Currently reading</p>
                </div>
            </div>

            {{-- Quick Actions --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-4">
                        Quick Actions
                    </h4>
                    <div class="flex flex-wrap gap-4">
                        <a href="/books" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition">
                            View All Books
                        </a>
                        <a href="/books/create" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition">
                            + Add New Book
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>