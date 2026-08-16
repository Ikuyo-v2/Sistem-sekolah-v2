@props(['type' => 'SUCCESS'])

@if ($type === 'ERROR')
    <div class="mb-6 border border-red-300 bg-red-50 px-4 py-3 text-sm text-red-700">
        {{ $slot }}
    </div>
@elseif ($type === 'WARNING')
    <div class="mb-6 border border-yellow-300 bg-yellow-50 px-4 py-3 text-sm text-yellow-700">
        {{ $slot }}
    </div>
@elseif ($type === 'SUCCESS')
    <div class="mb-6 border border-green-300 bg-green-50 px-4 py-3 text-sm text-green-700">
        {{ $slot }}
    </div>
@endif