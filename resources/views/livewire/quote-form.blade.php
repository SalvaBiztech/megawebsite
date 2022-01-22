<form wire:submit.prevent="quote">
    <div class="md:flex items-center mt-12">
        <div class="w-full md:w-1/2 flex flex-col">
            <label class="font-semibold leading-none">Name</label>
            <input type="text" wire:model="name" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
        </div>
        <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
            <label class="font-semibold leading-none">Email</label>
            <input type="email" wire:model="email" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
        </div>
    </div>
    <div class="md:flex items-center mt-8">
        <div class="w-full flex flex-col">
            <label class="font-semibold leading-none">Subject</label>
            <input type="text" wire:model="title" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" />
        </div>

    </div>
    <div>
        <div class="w-full flex flex-col mt-8">
            <label class="font-semibold leading-none">Message</label>
            <textarea type="text" wire:model="message" class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"></textarea>
        </div>
    </div>
    <div class="flex items-center justify-center w-full">
        <button class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-orange-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
            Send message
        </button>
    </div>
</form>