@props(['disabled' => false, 'field'=>''])

<label>
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm']) !!}>
</label>

@error($field)
<div class="text-red-600 text-3xl ">{{ $message }}<div>
@enderror
