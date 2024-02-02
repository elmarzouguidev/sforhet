<section class="service-area">
    <div class="custom-container">
        <div class="service-section-header section-header d-flex align-items-end justify-content-between">
            <div class="left">

                <h1 class="section-title">Nos paternaires</h1>
            </div>
            <p>{!! $pagePartner->body !!}</p>
        </div>

        <div class="services-list">

            @foreach ($partners as $partner)
                <div class="service-card simple-shadow">
                    <img src="{{ Voyager::image($partner->logo) }}" alt="{{ $partner->name }}" class="service-icon" />
                    <h3><a href="service-details.html">{{ $partner->name }}</a></h3>
                    <p>{{ $partner->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
