<section class="event-details-area">
    <div class="custom-container">
        <div class="img-box align-items-center">
            <img src="{{ Voyager::image($offre->image) }}" alt="{{ $offre->title }}" />
        </div>
        <div class="custom-row ">

            <div class="content-box">

                <p>{!! $offre->body !!}</p>

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
    </div>
</section>
