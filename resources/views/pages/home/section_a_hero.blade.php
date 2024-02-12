<section class="hero-empowerment-area">
    <div class="custom-container">
        <div class="custom-row align-items-center">
            <div class="hero-empowerment-left-content">
                {{-- <h5 class="section-subtitle">EMPOWERMENT</h5> --}}
                <h1 class="section-title fade-in">
                    {{ setting('home.hero_title') }}
                </h1>
                <p>{{ setting('home.hero_description') }}</p>
                <div class="btns-group d-flex">
                    <a href="{{ route('company.about') }}" class="theme-btn">Voir plus</a>
                    <a href="{{ route('contact.us') }}" class="theme-btn2">Contactez-nous
                        <i class="iconoir-arrow-up-right"></i>
                    </a>
                </div>
            </div>

            <div class="hero-empowerment-right-content">
                <div class="top-content">
                    <img class="desktop fade-in" src="{{ Voyager::image(setting('home.hero_image')) }}"
                        alt="SFORHET" />
                    <img class="mobile" src="{{ Voyager::image(setting('home.hero_image')) }}" alt="SFORHET" />

                </div>

            </div>

        </div>
    </div>
</section>
