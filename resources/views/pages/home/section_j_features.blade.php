<section class="feature-area">
    <div class="custom-container">
        <div class="custom-row align-items-center">
            <div class="feature-left d-flex">
                <div class="feature-img-card">
                    <h3>Espace <br> candidats</h3>
                    <img src="{{ asset('assets/imgs/feature-img-1.png') }}" alt="Feature" />
                </div>
                <div class="feature-img-card">
                    <h3>Espace <br> entreprise</h3>
                    <img src="{{ asset('assets/imgs/feature-img-2.png') }}" alt="Feature" />
                </div>
            </div>

            <div class="feature-right">
                <div class="feature-content">
                    <h5 class="section-subtitle">NOS ESPACES</h5>
                    <h1 class="section-title">Seamless productivity with our new app</h1>
                    <p>Download Slack and experience a new era of organization and accomplishment.</p>
                    {{-- <ul>
                        <li>
                            <i class="las la-check"></i> PPD Development
                        </li>
                        <li>
                            <i class="las la-check"></i> Easy to Use
                        </li>
                    </ul> --}}
                    <div class="btns-group">
                        <a href="{{ route('candidats') }}" class="theme-simple-btn">
                            <i class="iconoir-arrow-up-right"></i>
                            Espace candidats
                        </a>
                        <a href="{{ route('entreprise') }}" class="theme-simple-btn">
                            <i class="iconoir-arrow-up-right"></i>
                            Espace entreprise
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
