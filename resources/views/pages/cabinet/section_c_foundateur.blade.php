<section class="hero-empowerment-area">
    <div class="custom-container">
        <div class="custom-row align-items-center">
            <div class="hero-empowerment-left-content">
                <h5 class="section-subtitle">SFORHET</h5>
                <h1 class="section-title fade-in">Mot du fondateur</h1>
                <p>{!! $pageFoundateur->body !!}
                </p>

            </div>

            <div class="hero-empowerment-right-content">
                <div class="top-content">
                    <img class="desktop fade-in" src="{{ Voyager::image($pageFoundateur->image) }}"
                        alt="{{ $pageFoundateur->title }}" />
                    <img class="mobile" src="{{ Voyager::image($pageFoundateur->image) }}"
                        alt="{{ $pageFoundateur->title }}" />
                </div>

            </div>

        </div>
    </div>
</section>
