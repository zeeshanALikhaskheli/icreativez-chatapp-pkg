<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-xl p-6 overflow-y-auto h-[32rem]">
                <h2 class="text-xl font-semibold text-gray-700 dark:text-gray-300 mb-4 border-b pb-2">
                    All Chats
                </h2>

                <ul class="space-y-3">
                    @forelse ($users as $user)
                        <li>
                            <a href="{{ route('chat', $user->id) }}"
                               class="flex items-center space-x-4 bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 transition rounded-lg p-4 shadow-sm border border-gray-200 dark:border-gray-600">

                                <img class="w-12 h-12 rounded-full object-cover border-2 border-gray-300 dark:border-gray-500"
                                     src="{{ $user->avatar_url ?? 'https://cdn.pixabay.com/photo/2015/03/04/22/35/avatar-659652_1280.png' }}"
                                     alt="{{ $user->name }}">

                                <div class="flex-1 min-w-0">
                                    <div class="flex justify-between items-center">
                                        <p class="text-lg font-semibold text-gray-800 dark:text-gray-100 truncate">
                                            {{ $user->name }}
                                        </p>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">
                                            <!-- Optional timestamp or status -->
                                        </span>
                                    </div>
                                    <p class="text-sm text-gray-600 dark:text-gray-300 truncate">
                                        {{ $user->last_message }}
                                    </p>
                                </div>
                            </a>
                        </li>
                    @empty
                        <p class="text-red-500 dark:text-red-400 text-sm">No Users Found.</p>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
