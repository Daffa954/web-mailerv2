@props([
    'name',
    'label',
    'rows' => 4,
])

@php
    $baseClasses = 'w-full px-3 py-2 border rounded-md bg-white dark:bg-gray-950 text-gray-800 dark:text-gray-200 placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-150 resize-vertical';
    
    $errorClasses = $errors->has($name)
        ? ' border-red-500 dark:border-red-400'
        : ' border-gray-300 dark:border-gray-700 focus:border-blue-500 dark:focus:border-blue-500';

    $finalClasses = $baseClasses . $errorClasses;
@endphp

<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
        {{ $label }}
        @if ($attributes->has('required'))
            <span class="text-red-500">*</span>
        @endif
    </label>

    <textarea 
        id="{{ $name }}" 
        name="{{ $name }}" 
        rows="{{ $rows }}"
        {{ $attributes->merge(['class' => $finalClasses]) }}>{{ old($name) }}</textarea>

    @error($name)
        <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
    @enderror
</div>