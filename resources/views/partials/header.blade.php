@php
    $headerlinks = [
        [
            'label' => 'CHARACTERS',
            'url' => '#',
            'active' => false
        ],
        [
            'label' => 'COMICS',
            'url' => '#',
            'active' => true
        ],
        [
            'label' => 'MOVIES',
            'url' => '#',
            'active' => false
        ],
        [
            'label' => 'TV',
            'url' => '#',
            'active' => false
        ],
        [
            'label' => 'GAMES',
            'url' => '#',
            'active' => false
        ],
        [
            'label' => 'COLLECTIBLES',
            'url' => '#',
            'active' => false
        ],
        [
            'label' => 'VIDEOS',
            'url' => '#',
            'active' => false
        ],
        [
            'label' => 'FANS',
            'url' => '#',
            'active' => false
        ],
        [
            'label' => 'NEWS',
            'url' => '#',
            'active' => false
        ],
        [
            'label' => 'SHOP',
            'url' => '#',
            'active' => false
        ],
    ];
@endphp
<header>
    <div class=" d-flex justify-content-end container">
        <div>
            <a href="#">DC POWER VISA</a>
        </div>
       <div>
        <a href="#">ADDITIONAL DC SITES</a>
        </div>
    </div>
    <div class="container d-flex  align-items-center">
        <div>
            <img src="{{ asset('img/dc-logo.png') }}" alt="DC Logo" class="logo">
        </div>
        <nav class="flex-grow-1">
            <ul class="d-flex justify-content-around align-items-center list-unstyled">
                @foreach ($headerlinks as $link)
                    <li>
                        <a href="{{ $link['url'] }}" class="nav-link {{ $link['active'] ? 'active' : '' }}">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
