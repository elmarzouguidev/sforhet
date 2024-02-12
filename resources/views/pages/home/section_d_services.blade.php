<section class="project-area">
    <div class="custom-container">
        <div class="custom-row justify-content-between">
            <div class="project-left-details">
                <h5 class="section-subtitle" style="color:#F6950C !important">Nos services</h5>
                <h1 class="section-title" style="color:#0B6DB1 !important">Nos services</h1>

                <p>{{ $pageService->excerpt }}</p>
                {{-- <ul>
                    <li>
                        <i class="las la-check"></i> Managed Services and Products
                    </li>
                    <li>
                        <i class="las la-check"></i> Flexibility and Adaptability
                    </li>
                    <li>
                        <i class="las la-check"></i> Competitive Advantage
                    </li>
                </ul> --}}
            </div>

            <div class="project-right-slider">
                <div class="project-right-slider-inner">

                    <div class="swiper project-slider">
                        <div class="swiper-wrapper">
                            @foreach ($services as $service)
                                <div class="swiper-slide project-item">
                                    <div class="project-item-inner">
                                        <h2><a href="{{ route('services.single', $service->slug) }}"
                                                style="color:#0B6DB1 !important">{{ $service->name }}</a></h2>
                                        <img src="{{ Voyager::image($service->image) }}" alt="{{ $service->name }}" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
