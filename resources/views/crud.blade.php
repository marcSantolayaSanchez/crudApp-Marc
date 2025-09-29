<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crud') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Este es el crud!") }}
                </div>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td class="flex space-x-2">
                                    {{-- Botón Editar --}}
                                    <a href="{{ route('crud.edit', $user->id) }}" 
                                    class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                    Editar
                                    </a>

                                    {{-- Botón Eliminar --}}
                                    <form action="{{ route('crud.destroy', $user->id) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar este usuario?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
