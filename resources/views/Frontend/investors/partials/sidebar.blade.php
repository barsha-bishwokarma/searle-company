@php
    $links = [
        ['route' => 'investors.profile', 'label' => 'Profile of Company'],
        ['route' => 'investors.governance', 'label' => 'Governance'],
        ['route' => 'investors.relations', 'label' => 'Investor Relations'],
        ['route' => 'investors.media', 'label' => 'Media'],
        ['route' => 'investors.information', 'label' => 'Investor Information'],
    ];
@endphp

<div class="w-72 flex-shrink-0">
    <ul class="border border-gray-100">
        @foreach ($links as $link)
            <li>
                <a href="{{ route($link['route']) }}"
                    class="flex items-center gap-3 px-4 py-3 border-t border-gray-100 transition
                {{ request()->routeIs($link['route'])
                    ? 'bg-blue-900 text-white font-semibold'
                    : 'text-gray-500 hover:bg-blue-50 hover:text-blue-900' }}">
                    {{ $link['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
