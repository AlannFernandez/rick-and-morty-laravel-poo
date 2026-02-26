<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty Characters</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-7xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Personajes de Rick and Morty</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse($characters as $character)
            {{-- Aquí llamamos a tu componente de card --}}
            <x-character-card :character="$character" />
        @empty
            <p class="text-center col-span-full">No hay personajes disponibles.</p>
        @endforelse
    </div>
</div>

</body>
</html>
