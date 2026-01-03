        <a {{ $attributes }}>{{ $slot }}</a>

        @props(['active' => false, 'type' => 'a'])

        @php
            $classes = $active ? 'text-sm/6 font-semibold text-blue-500' : 'text-sm/6 font-semibold text-white';
            if ($type === 'a') {
                $classes .= ' hover:text-blue-500';
            } elseif ($type === 'button') {
                $classes .= ' hover:text-green-500';
            }
        @endphp

        <a {{ $attributes->merge(['class' => $classes]) }}>
            {{ $slot }}
        </a>
