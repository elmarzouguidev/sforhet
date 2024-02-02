<section class="event-area">
    <div class="custom-container">
        <div class="news-items align-items-start">

            @foreach ($offres as $offre)
                <div class="news-item event-card card-h">
                    <div class="news-img-box">
                        <img src="{{ Voyager::image($offre->image) }}" alt="{{ $offre->title }}" />
                    </div>
                    <div class="news-item-body">
                        <h5 class="section-subtitle">FRI, APRIL 17</h5>
                        <h1 class="section-title">
                            <a href="{{ route('offres.single', $offre->slug) }}">{{ $offre->title }}</a>
                        </h1>
                        <p>{{ $offre->content }}</p>
                        <ul>
                            <li>
                                <i class="las la-map-marker"></i> {{ $offre->offre_location }}
                            </li>
                            <li>
                                <i class="las la-calendar"></i> {{ $offre->offre_date?->format('d/m/Y') }}
                            </li>
                        </ul>
                        <a href="{{ route('offres.single', $offre->slug) }}" class="theme-btn">
                            <i class=" iconoir-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
