<form class="flex" wire:submit.prevent="enviarComentario">
    <input type="text" class="flex-1 block w-full border-gray-300 rounded-none rounded-l-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Agrega un comentario"
        wire:model="comentario">
    <button class="relative flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-none rounded-r-md group hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Enviar
    </button>
</form>
