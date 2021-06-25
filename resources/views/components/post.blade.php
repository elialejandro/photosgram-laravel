<div class="w-full mb-4 bg-white border border-gray-100 rounded-lg shadow-md">
    <div class="flex items-center p-4">
        <img src="https://images.unsplash.com/photo-1608889825205-eebdb9fc5806?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" class="mr-4 rounded-full w-14 h-14 ring-4 ring-purple-400 ring-opacity-50">
        <a href="{{ route('user.profile', 'tailwindcss') }}" class="hover:underline">
            <h4 class="text-lg font-semibold">Usuario</h4>
        </a>
    </div>
    <div class="relative pt-96">
        <img class="absolute inset-0 object-cover w-full h-full" src="https://source.unsplash.com/random">
    </div>
    <div class="p-2">
    
        <div class="inline-flex gap-3 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
        </div>

    </div>
    <div class="p-2">
    
        <div class="mb-2">
            <a href="{{ route('user.profile', 'tailwindcss') }}" class="hover:underline">
                <span class="font-bold">Username</span> 
            </a> 
            ipsum dolor sit amet, consectetur adipisicing elit. Nam soluta vitae quasi excepturi facilis enim doloremque numquam accusantium ratione laborum, repellat, sint quidem at natus. Amet maiores accusantium quos doloribus!
        </div>

        <div class="mb-2">
            <a href="{{ route('user.profile', 'tailwindcss') }}" class="hover:underline">
                <span class="font-bold">Username</span> 
            </a> 
            ipsum dolor sit amet, consectetur adipisicing elit. Nam soluta vitae quasi excepturi facilis enim doloremque numquam accusantium ratione laborum, repellat, sint quidem at natus. Amet maiores accusantium quos doloribus!
        </div>

        <div class="text-gray">Leer más</div>
    </div>
    <div class="p-2">
        <livewire:new-comment />
    </div>
</div>