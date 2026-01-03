        <a {{ $attributes }}>{{ $slot }}</a>

        @props(['active' => false])

        @php
            $classes = $active ? 'text-sm/6 font-semibold text-blue-500' : 'text-sm/6 font-semibold text-white';
        @endphp

        <a {{ $attributes->merge(['class' => $classes]) }}>
            {{ $slot }}
        </a>
