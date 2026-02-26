{{-- resources/views/components/character-card.blade.php --}}
@props(['character'])

<div class="overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm transition hover:shadow-md">
    <img src="{{ $character['imagen'] }}" alt="{{ $character['nombre'] }}" class="h-48 w-full object-cover">

    <div class="p-4">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-bold text-gray-900">{{ $character['nombre'] }}</h3>
            <span @class([
                'rounded-full px-2 py-0.5 text-xs font-medium',
                'bg-green-100 text-green-800' => $character['estado'] === 'Alive',
                'bg-red-100 text-red-800' => $character['estado'] === 'Dead',
                'bg-gray-100 text-gray-800' => $character['estado'] === 'unknown',
            ])>
                {{ $character['estado'] }}
            </span>
        </div>

        <p class="mt-2 text-sm text-gray-600">
            <span class="font-semibold">ID:</span> #{{ $character['id'] }}
        </p>
    </div>
</div>
