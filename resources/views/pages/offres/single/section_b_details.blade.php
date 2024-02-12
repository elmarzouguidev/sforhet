<section class="about-service3-area about-service5-area">
    <div class="custom-container">
        <div class="custom-row align-items-center">
            <div class="img-box">
                <img src="{{ Voyager::image($offre->image) }}" alt="{{ $offre->title }}" />
            </div>

            <div class="content-box">
                {{-- <h1>Why our services are <br>
                    better than others?</h1> --}}
                <p>{!! $offre->body !!}</p>

            </div>
            <ul>
                <li>
                    <i class="las la-map-marker"></i> {{ $offre->offre_location }}
                </li>
                <li>
                    <i class="las la-calendar"></i> {{ $offre->offre_date?->format('d/m/Y') }}
                </li>
            </ul>
            <a href="#applyform" class="theme-btn">Postuler</a>
        </div>
    </div>
</section>
