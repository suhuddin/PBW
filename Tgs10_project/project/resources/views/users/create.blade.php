<x-app-layout title="Create User">
    <x-slot name="heading">Create New User</x-slot>
    <form action="/users" class="space-y-6" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input class="block border px-4 py-2 rounded" type="text" name="name" id="name">
            @error('name')
            <p class="text-red-500 text-sm mt-1">
                {{$message}}
            </p>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input class="block border px-4 py-2 rounded" type="email" name="email" id="email">
            @error('email')
            <p class="text-red-500 text-sm mt-1">
                {{$message}}
            </p>
            @enderror
        </div>
        <div>
            <label for="password">password</label>
            <input class="block border px-4 py-2 rounded" type="password" name="password" id="password">
            @error('password')
            <p class="text-red-500 text-sm mt-1">
                {{$message}}
            </p>
            @enderror
        </div>

        <x-button>Save</x-button>
    </form>
</x-app-layout>
