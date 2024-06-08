<!-- Chat Area -->
<div class="w-3/4 p-4">
    <div class="h-full flex flex-col">
        <!-- Chat Header -->
        <div class="bg-white p-4 shadow-md flex justify-between items-center">
            <h2 class="text-xl font-semibold">Chat with User 1</h2>
            <button class="bg-blue-500 text-white px-4 py-2 rounded">End Chat</button>
        </div>

        <!-- Messages -->
        <div class="flex-1 overflow-y-auto p-4 space-y-4">
            <div class="flex">
                <div class="bg-gray-200 p-4 rounded-lg max-w-xs">
                    <p class="text-sm">Hello, how can I help you?</p>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="bg-blue-500 text-white p-4 rounded-lg max-w-xs">
                    <p class="text-sm">I need help with my order.</p>
                </div>
            </div>
            <!-- Add more messages as needed -->
        </div>

        <!-- Message Input -->
        <div class="bg-white p-4 shadow-md">
            <div class="flex">
                <input type="text" class="flex-1 border border-gray-300 p-2 rounded-l-lg"
                    placeholder="Type a message...">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-r-lg">Send</button>
            </div>
        </div>
    </div>
</div>
