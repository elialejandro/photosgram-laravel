<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

            <div class="grid grid-cols-8 gap-4">
    
                <!-- POST -->
                <div class="col-span-4 col-start-2">
                    <x-post></x-post>
                    <x-post></x-post>
                    <x-post></x-post>
                    <x-post></x-post>
                    <x-post></x-post>
                    <x-post></x-post>
                </div>

                <!-- DERECHA -->
                <div class="col-span-2 pt-4 pl-4">
                    <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1608889825205-eebdb9fc5806?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" class="w-10 h-10 mr-4 rounded-full ring-2 ring-purple-400 ring-opacity-50">
                        <a href="{{ route('user.profile', 'tailwindcss') }}" class="hover:underline">
                            <h4 class="text-lg font-semibold">Usuario</h4>
                        </a>
                    </div>

                    <hr class="mt-8 mb-4">

                    <h5 class="mb-4 text-gray-600">Sugerencias</h5>

                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1608889825205-eebdb9fc5806?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" class="w-10 h-10 mr-4 rounded-full ring-2 ring-purple-400 ring-opacity-50">
                        <a href="{{ route('user.profile', 'tailwindcss') }}" class="hover:underline">
                            <h4 class="text-lg font-semibold">Usuario</h4>
                        </a>
                    </div>

                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1608889825205-eebdb9fc5806?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" class="w-10 h-10 mr-4 rounded-full ring-2 ring-purple-400 ring-opacity-50">
                        <a href="{{ route('user.profile', 'tailwindcss') }}" class="hover:underline">
                            <h4 class="text-lg font-semibold">Usuario</h4>
                        </a>
                    </div>

                    <div class="flex items-center mb-4">
                        <img src="https://images.unsplash.com/photo-1608889825205-eebdb9fc5806?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" class="w-10 h-10 mr-4 rounded-full ring-2 ring-purple-400 ring-opacity-50">
                        <a href="{{ route('user.profile', 'tailwindcss') }}" class="hover:underline">
                            <h4 class="text-lg font-semibold">Usuario</h4>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
