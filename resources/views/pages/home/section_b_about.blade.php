<section class="about-service3-area about-service6-area">
    <div class="custom-container">
        <div class="custom-row align-items-center">
            <div class="content-box">
                <div class="section-header">
                    <h5 class="section-subtitle">A propos de nous !</h5>
                    <h1 class="section-title">SFORHET</h1>
                    <p>At Slack, we are more than just a company, we are a catalyst for growth.</p>
                </div>
                <div class="content-body">
                    <p>
                        {{ $pageAbout->excerpt }}
                    </p>
                    {{-- <ul>
                        <li>
                            <i class="las la-check"></i> Collaboration Tools
                        </li>
                        <li>
                            <i class="las la-check"></i> Smart Reminders
                        </li>
                        <li>
                            <i class="las la-check"></i> Requirement
                        </li>
                        <li>
                            <i class="las la-check"></i> Task Management
                        </li>
                    </ul> --}}
                </div>
            </div>

            <div class="img-box">
                <img src="{{ Voyager::image($pageAbout->image) }}" alt=" {{ $pageAbout->title }}" />
            </div>
        </div>
    </div>
</section>
