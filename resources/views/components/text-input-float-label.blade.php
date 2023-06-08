@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} placeholder=" " {!! $attributes->merge([
    'class' =>
        'block font-inter w-full bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-xl py-3 px-3 appearance-none leading-normal focus:border-primaryColor',
]) !!} />
