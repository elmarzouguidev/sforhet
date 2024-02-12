<section class="hero-empowerment-area">
    <div class="custom-container">
        <div class="custom-row align-items-center">
            <div class="hero-empowerment-left-content">
                <h5 class="section-subtitle">SFORHET</h5>
                <h1 class="section-title fade-in">{{ $page?->title }}</h1>
                <p>{!! $page?->body !!}
                </p>

            </div>

            <div class="hero-empowerment-right-content">
                <div class="top-content">
                    <img class="desktop fade-in" src="{{ Voyager::image($page?->image) }}" alt="{{ $page?->title }}" />
                    <img class="mobile" src="{{ Voyager::image($page?->image) }}" alt="{{ $page?->title }}" />
                </div>
                <div class="btns-group d-flex">
                    <a href="{{ route('contact.us') }}" class="theme-btn2">Contactez-nous
                        <i class="iconoir-arrow-up-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
