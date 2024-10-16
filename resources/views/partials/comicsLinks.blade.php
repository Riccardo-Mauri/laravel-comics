  <!-- Definizione dell'array di immagini -->
  @php
    $imagesArr = [
        [
            'src' => 'img/buy-comics-digital-comics.png',
            'alt' => 'Digital Comics',
            'title' => 'Digital Comics'
        ],
        [
            'src' => 'img/buy-comics-merchandise.png',
            'alt' => 'DC Merchandise',
            'title' => 'DC Merchandise'
        ],
        [
            'src' => 'img/buy-comics-subscriptions.png',
            'alt' => 'Subscription',
            'title' => 'Subscription'
        ],
        [
            'src' => 'img/buy-comics-shop-locator.png',
            'alt' => 'Comic Shop Locator',
            'title' => 'Comic Shop Locator'
        ],
        [
            'src' => 'img/buy-dc-power-visa.svg',
            'alt' => 'DC Power Visa',
            'title' => 'DC Power Visa'
        ],
    ];
    @endphp

    <div class="container container-comics d-flex align-content-center justify-content-between">
    <div class="row d-flex align-items-center justify-content-between flex-grow-1">
        @foreach($imagesArr as $image)
            <div class="col-2 d-flex align-items-center justify-content-between"> 
                <div class="image-container"> 
                    <img src="{{ asset($image['src']) }}" alt="{{ $image['alt'] }}" class="" style="" />
                </div>
                <div class="title-container text-center">
                    <a href="#" class="text-center link-comics">
                        <p>{{ $image['title'] }}</p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
