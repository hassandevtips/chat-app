
    <!-- Users List -->
    <div class="w-1/4 bg-white p-4 border-r border-gray-200">
        <h2 class="text-xl font-semibold mb-4">{{ __('Users') }}</h2>
        <ul>
            @forelse ($users as $key => $user )
                <li class="py-2 border-b border-gray-200"
                wire:click="$dispatch('openChat', { id: {{ $user->id }} })"
                >
                    <div class="flex items-center">
                        <img class="h-10 w-10 rounded-full object-cover" src="https://via.placeholder.com/150" alt="User 1">
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-700">{{ $user->name }}</p>
                            <div class="flex items-center">
                                <span class="h-2 w-2 bg-green-500 rounded-full mr-1"></span>
                                <p class="text-xs text-gray-500">Online</p>
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <div > No User Found</div>
            @endforelse

            <li class="py-2 border-b border-gray-200">
                <div class="flex items-center">
                    <img class="h-10 w-10 rounded-full object-cover" src="https://via.placeholder.com/150" alt="User 2">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-700">User 2</p>
                        <div class="flex items-center">
                            <span class="h-2 w-2 bg-red-500 rounded-full mr-1"></span>
                            <p class="text-xs text-gray-500">Offline</p> <!-- Red dot for offline -->
                        </div>
                    </div>
                </div>
            </li>
            <!-- Add more users as needed -->
        </ul>
    </div>
