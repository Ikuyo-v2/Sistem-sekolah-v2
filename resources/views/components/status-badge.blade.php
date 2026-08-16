@props(['status'])

@if ($status === 'Aktif')
    <span class="inline-block rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-700">
        Aktif
    </span>
@else
    <span class="inline-block rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-700">
        Tidak Aktif
    </span>
@endif