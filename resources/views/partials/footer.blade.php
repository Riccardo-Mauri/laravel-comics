@php
// Dati per DC COMICS
$dcComicsLinks = [
    ['title' => 'Characters', 'url' => '#'],
    ['title' => 'Comics', 'url' => '#'],
    ['title' => 'Movies', 'url' => '#'],
    ['title' => 'TV', 'url' => '#'],
    ['title' => 'Games', 'url' => '#'],
    ['title' => 'Videos', 'url' => '#'],
    ['title' => 'News', 'url' => '#'],
];

// Dati per il negozio (SHOP)
$shopLinks = [
    ['title' => 'Shop DC', 'url' => '#'],
    ['title' => 'Shop DC Collectibles', 'url' => '#'],
];

// Dati per DC
$dcLinks = [
    ['title' => 'Terms Of Use', 'url' => '#'],
    ['title' => 'Privacy Policy (New)', 'url' => '#'],
    ['title' => 'Ad Choices', 'url' => '#'],
    ['title' => 'Advertising', 'url' => '#'],
    ['title' => 'Jobs', 'url' => '#'],
    ['title' => 'Subscriptions', 'url' => '#'],
    ['title' => 'Talent Workshops', 'url' => '#'],
    ['title' => 'CPSC Certificates', 'url' => '#'],
    ['title' => 'Ratings', 'url' => '#'],
    ['title' => 'Shop Help', 'url' => '#'],
    ['title' => 'Contact Us', 'url' => '#'],
];

// Dati per Sites
$sitelinks = [
    ['title' => 'DC', 'url' => '#'],
    ['title' => 'Mad Magazine', 'url' => '#'],
    ['title' => 'Dc Kids', 'url' => '#'],
    ['title' => 'Dc Universe', 'url' => '#'],
    ['title' => 'DC Power visa', 'url' => '#'],
];


$socialLinks = [
    [
        'url' => '#',
        'imgSrc' => '/img/footer-facebook.png',
        'altText' => 'Facebook'
    ],
    [
        'url' => '#',
        'imgSrc' => '/img/footer-periscope.png',
        'altText' => 'Periscope'
    ],
    [
        'url' => '#',
        'imgSrc' => '/img/footer-pinterest.png',
        'altText' => 'Pinterest'
    ],
    [
        'url' => '#',
        'imgSrc' => '/img/footer-youtube.png',
        'altText' => 'YouTube'
    ],
    [
        'url' => '#',
        'imgSrc' => '/img/footer-twitter.png',
        'altText' => 'Twitter'
    ]
];

@endphp

<div class="footer-container">
    <div class="container">
        <div class=>
            <div class="footer-link-container d-flex">
                <div>
                    <h3 class="text-white">DC Comics Links</h3>
                    <ul>
                        @foreach($dcComicsLinks as $link)
                            <li><a href="{{ $link['url'] }}" class="link-style text-secondary">{{ $link['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="text-white">Shop Links</h3>
                    <ul>
                        @foreach($shopLinks as $link)
                            <li><a href="{{ $link['url'] }}" class="link-style text-secondary">{{ $link['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="text-white">DC Links</h3>
                    <ul>
                        @foreach($dcLinks as $link)
                            <li><a href="{{ $link['url'] }}" class="link-style text-secondary">{{ $link['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h3 class="text-white">Site Links</h3>
                    <ul>
                        @foreach($sitelinks as $link)
                            <li><a href="{{ $link['url'] }}" class="link-style text-secondary">{{ $link['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptas saepe aspernatur voluptatum provident eaque. Unde numquam velit voluptates quam.
            </div>
        </div>
    </div>

    <div class="lower-footer d-flex align-items-center">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div><button class="btn-sign-up">SIGN-UP NOW!</button></div>
                <div>
                    @foreach($socialLinks as $link)
                        <a href="{{ $link['url'] }}" class="link-style">
                            <img src="{{ $link['imgSrc'] }}" alt="{{ $link['altText'] }}">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
