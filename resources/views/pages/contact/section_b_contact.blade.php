<section class="contact-area2">
    <div class="custom-container">
        <div class="contact-inner">
            <div class="contact-map-wrap">
                <h4>Connect Us</h4>

                <div id="map">
                    <div class="map-location-item">
                        <div class="map-location-item-inner">
                            <img src="{{ asset('assets/imgs/flag.png') }}" alt="Flag" />
                            <div class="content">
                                <p>{{ setting('contact.address') }}</p>
                            </div>
                        </div>
                        <span class="circle"></span>
                    </div>
                    {{-- <img src="{{ asset('assets/imgs/map.svg') }}" alt="Map" /> --}}

                    {!! setting('contact.map') !!}

                </div>
            </div>
            <div class="contact-inner-info-box d-flex align-items-center">
                <div class="contact-info-box simple-shadow">
                    <div class="icon"><i class="las la-headset"></i></div>
                    <h4>Support</h4>
                    <p>Contact our fast support team</p>
                    <h6>{{ setting('contact.email') }}</h6>
                </div>
                <div class="contact-info-box simple-shadow">
                    <div class="icon"><i class="las la-phone"></i></div>
                    <h4>Phone</h4>
                    <p>Mon-Fri from 9am to 6pm.</p>
                    <h6>{{ setting('contact.telephone') }}</h6>
                </div>
            </div>
        </div>
    </div>
</section>
