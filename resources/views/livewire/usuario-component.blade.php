
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold mb-4">Gerenciar Usuários</h2>

    <form wire:submit.prevent="{{ $isEditing ? 'update' : 'create' }}" class="mb-4">
        <div class="mb-4">
            <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
            <input type="text" wire:model="nome" id="nome" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            @error('nome') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
            <input type="text" wire:model="username" id="username" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            @error('username') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" wire:model="password" id="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">{{ $isEditing ? 'Update' : 'Create' }}</button>
        @if($isEditing)
            <button type="button" wire:click="resetInput" class="px-4 py-2 bg-gray-600 text-white rounded-md">Cancel</button>
        @endif
    </form>

    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($usuarios as $usuario)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->nome }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $usuario->username }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <button wire:click="edit({{ $usuario->id }})" class="px-4 py-2 bg-yellow-600 text-white rounded-md">Edit</button>
                        <button wire:click="delete({{ $usuario->id }})" class="px-4 py-2 bg-red-600 text-white rounded-md">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
