<x-app-layout title="{{ $page_meta['title'] }}">
    <x-slot name="heading">{{ $page_meta['title'] }}</x-slot>
    <form action="{{ $page_meta['url'] }}" class="space-y-6" method="post" novalidate>
        @method($page_meta['method'])
        @csrf
        <div>
            <label for="name">Name</label>
            <input class="block border px-4 py-2 rounded-lg border block mt-1" type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
            @error('name')
            <p class="text-red-500 text-sm mt-1">
                {{$message}}
            </p>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input class="block border px-4 py-2 rounded-lg border block mt-1" type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
            @error('email')
            <p class="text-red-500 text-sm mt-1">
                {{$message}}
            </p>
            @enderror
        </div>
        <div>
            <label for="password">password</label>
            <input class="block border px-4 py-2 rounded-lg border block mt-1" type="password" name="password" id="password" value="">
            @error('password')
            <p class="text-red-500 text-sm mt-1">
                {{$message}}
            </p>
            @enderror
        </div>

        <x-button>
            {{ $page_meta['submit_text'] }}
        </x-button>
    </form>
</x-app-layout>
