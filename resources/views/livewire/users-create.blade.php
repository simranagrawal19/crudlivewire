<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h1 class="text-2xl font-semibold mb-6 mt-4 ml-4">create</h1> 
    @if (session()->has('message'))
    <div class="text-green-500 ml-4 mb-4 mt-4">{{ session('message') }}</div>
@endif

<form wire:submit.prevent="createUser">
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-4">Name</label>
        <input type="text" wire:model="name" id="name" class="w-60 px-3 py-2 ml-4 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-indigo-300">
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
    </div>

        <div class="form-group">
            <label for="email" class="block text-gray-700 text-sm font-bold ml-4 mb-2">Email</label>
            <input type="email" wire:model="email" class="w-60 px-3 py-2 ml-4 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-indigo-300">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password" class="block text-gray-700 text-sm font-bold mt-2 ml-4">Password</label>
            <input type="password" wire:model="password" class="w-60 px-3 py-2 ml-4 border rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-indigo-300">
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-indigo-600 text-white py-2 ml-4 mt-4 mb-4 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">Create User</button>
    </form>
</div>
