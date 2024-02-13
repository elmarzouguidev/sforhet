<section class="blog-details-area how-we-do-details-area">
    <div class="custom-container">
        <div class="blog-details-body">
            <div class="blog-details-inner">

                <div class="blog-details-introduction">
                    {!! $offre->body !!}
                </div>
                <div class="content-box">
                    <ul>
                        <li>
                            <i class="las la-map-marker"></i> {{ $offre->offre_location }}
                        </li>
                        <li>
                            <i class="las la-calendar"></i> {{ $offre->offre_date?->format('d/m/Y') }}
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
