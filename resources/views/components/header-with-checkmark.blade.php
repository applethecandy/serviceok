<h2 {{ $attributes->class(['h2' => true, 'section_h2' => !$nogap]) }}>

    <svg width="32" height="20" viewBox="0 0 32 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M10.9429 12.4219L24.3357 0H32L10.819 20L0 9.31794H7.5L10.9429 12.4219Z"
            fill="url(#paint0_linear_3849_2670)" />
        <defs>
            <linearGradient id="paint0_linear_3849_2670" x1="45.9566" y1="12.0726" x2="27.2959" y2="38.9507"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#E43C3C" />
            </linearGradient>
        </defs>
    </svg>
    {{ $slot }}
</h2>
