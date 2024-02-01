<section class="service-area">
    <div class="custom-container">
        <div class="service-section-header section-header d-flex align-items-end justify-content-between">
            <div class="left">
                <h5 class="section-subtitle">Nos metiers</h5>
                <h1 class="section-title">{{ $pageMetier->title }}</h1>
            </div>
            <p>{{ $pageMetier->excerpt }}</p>
        </div>

        <div class="services-list d-flex">
            @foreach ($metiers as $metier)
                <div class="service-card simple-shadow">
                    <img src="{{ asset('assets/imgs/service-icon-1.svg') }}" alt="Service Icon" class="service-icon" />
                    <h3><a href="./service-details.html">{{$metier->title}}</a></h3>
                    <p>{{$metier->content}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
