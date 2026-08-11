@props(['type'  => 'SUCCESS'])

@if ($type == 'ERROR')
    <div class="border border-red-500 border-b-2 bg-red-100 rounded-lg p-4">
        <h1> INFO DOKSLI ERROR </h1>
        <p>{{ $slot }}</p>
    </div>
@elseif ($type == 'WARNING')
    <div class="border border-yellow-500 border-b-2 bg-yellow-100 rounded-lg p-4">
        <h1> INFO DOKSLI WARNING </h1>
        <p>{{ $slot }}</p>
    </div>
@elseif ($type == 'SUCCESS')
    <div class="border border-green-500 border-b-2 bg-green-100 rounded-lg p-4">
        <h1> INFO DOKSLI SUCCESS </h1>
        <p>{{ $slot }}</p>
    </div>
@endif