<section class="hero-empowerment-area">
    <div class="custom-container">
        <div class="custom-row align-items-center">
 

            <div class="hero-empowerment-right-content">
                <div class="top-content">
                    <img class="desktop fade-in" src="{{ Voyager::image($pageHistoir->image) }}"
                        alt="{{ $pageHistoir->title }}" />
                    <img class="mobile" src="{{ Voyager::image($pageHistoir->image) }}" alt="{{ $pageHistoir->title }}" />
                </div>

            </div>

            <div class="hero-empowerment-left-content">
                <h5 class="section-subtitle">SFORHET</h5>
                <h1 class="section-title fade-in">Notre histoire</h1>
                <p>{!! $pageHistoir->body !!}
                </p>

            </div>

        </div>
    </div>
</section>
