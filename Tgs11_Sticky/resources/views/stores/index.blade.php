<x-app-layout>

    @slot('title','Stores')

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Stores') }}
        </h2>
    </x-slot>

    <x-container>
        <div class="grid grid-cols-4 gap-6">
            @foreach ($stores as $store)
            <x-card>
                <div class="p-6 pb-0">
                    <img src="{{ Storage::url($store->logo) }}" alt="{{$store->name}}" class="size-16 rounded-lg"
                        width="500">
                </div>

                <x-card.header>
                    <x-card.title>{{ $store->name }}</x-card.title>
                    <x-card.description>
                        {{ $store->description }}
                    </x-card.description>

                    @auth
                    @if ($store->user_id === auth()->user()->id)
                    <a href="{{route('stores.edit', $store)}}" class="underline text-blue-600">
                        Update
                    </a>
                    @endif
                    @endauth
                </x-card.header>
            </x-card>
            @endforeach
        </div>

    </x-container>

</x-app-layout>