@props(['value'])

<label
    {{ $attributes->merge(['class' => 'absolute font-inter top-3 left-0 text-gray-400 pointer-events-none transition duration-200 ease-in-out bg-transparent px-4 text-grey-darker focus:text-black ']) }}>
    {{ $value ?? $slot }}
</label>
