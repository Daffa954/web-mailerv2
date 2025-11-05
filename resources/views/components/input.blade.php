@props([
    'name',
    'label',
    'type' => 'text',
    'value' => null,
])

@php
    // Menetapkan kelas dasar untuk input
    $baseClasses = 'w-full px-3 py-2 border rounded-md bg-white  text-gray-800  placeholder-gray-400  focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-150';

    // Menambahkan kelas error jika ada validasi yang gagal
    $errorClasses = $errors->has($name)
        ? ' border-red-500 0'
        : ' border-gray-300  focus:border-blue-500 ';

    // Menggabungkan semua kelas
    $finalClasses = $baseClasses . $errorClasses;
@endphp

<div>
    <label for="{{ $name }}" class="block text-sm font-semibold text-gray-700 -300 mb-2">
        {{ $label }}
        {{-- Menambahkan tanda bintang jika properti 'required' ada --}}
        @if ($attributes->has('required'))
            <span class="text-red-500">*</span>
        @endif
    </label>

    <input 
        type="{{ $type }}" 
        id="{{ $name }}" 
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        {{ $attributes->merge(['class' => $finalClasses]) }}>

    @error($name)
        <p class="mt-1 text-sm text-red-600 ">{{ $message }}</p>
    @enderror
</div>