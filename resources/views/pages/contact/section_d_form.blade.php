<section class="contact-area">
    <div class="custom-container">
        <div class="custom-row">
            <div class="contact-form-wrap">
                <div class="contact-form-body">
                    <h5 class="section-subtitle">Contact</h5>
                    <p><a href="email:{{ setting('contact.email') }}">{{ setting('contact.email') }}</a></p>
                    @if (session('success'))
                        <div class="col-lg-12">
                            <div class="alert alert-success" role="alert" style="font-size: 20px;">

                                <i class="mdi mdi-check-all me-2"></i>
                                {{ session('success') }}

                            </div>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="col-lg-12">

                            <div class="alert alert-danger" role="alert" style="font-size: 20px;">

                                <i class="mdi mdi-check-all me-2"></i>
                                {{ session('error') }}

                            </div>

                        </div>
                    @endif
                    <form id="contactForm" action="{{ route('contact.us.post') }}" method="post" class="contact-form">
                        @csrf
                        @honeypot
                        <div class="input-row">
                            <div class="input-group">
                                <label for="full_name">Nom complet</label>
                                <input type="text" id="full_name" name="full_name" placeholder="First Name"
                                    class="@error('full_name') is-invalid @enderror" maxlength="100" required />
                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" placeholder="Email"
                                    class="@error('email') is-invalid @enderror" required />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group phone-number">
                                <select class="number-prefix">
                                    <option value="uk">MA</option>
                                </select>
                                <label for="phone_number">Téléphone</label>
                                <input type="text" id="phone_number" name="phone" placeholder="Téléphone"
                                    class="@error('phone') is-invalid @enderror" required />
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" placeholder="Leave us a message...."
                                    class="@error('message') is-invalid @enderror" required></textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group input-checkbox">
                                <input type="checkbox" id="privacy_policy_accept" name="privacy_policy_accept"
                                    @error('privacy_policy_accept') is-invalid @enderror">
                                <label for="privacy_policy_accept">You agree to our <a href="#">terms and
                                        conditions.</a></label>
                                @error('privacy_policy_accept')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <button type="submit" id="submit" class="theme-btn">

                                    Envoyer
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="input-row">
                            <div class="input-group alert-notification">
                                <div id="alert-message" class="alert-msg"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="contact-experience">
                <ul>
                    <li>
                        <h1>22+ <span>Years</span></h1>
                        <p>Field Experience </p>
                    </li>
                    <li>
                        <h1>950+ <span>Projects</span></h1>
                        <p>Done Around World </p>
                    </li>
                    <li>
                        <h1>99%</h1>
                        <p>Client Satisfaction</p>
                    </li>
                    <li>
                        <h1>1995+ <span>Year</span></h1>
                        <p>Established On</p>
                    </li>
                    <li>
                        <h1>2 <span>Mins</span></h1>
                        <p>Response Time</p>
                    </li>
                </ul>
            </div>

            <div class="contact-infos">
                <div class="contact-infos-inner">
                    <div class="contact-info">
                        <img src="{{ asset('assets/imgs/support-icon.svg') }}" alt="Support" />
                        <h3>Contact Info</h3>
                        <p>
                            {{ setting('contact.telephone') }} <br>
                            {{ setting('contact.email') }}
                        </p>
                    </div>
                    <div class="contact-office-info contact-info">
                        <img src="{{ asset('assets/imgs/map-icon.svg') }}" alt="Map" />
                        <p>{{ setting('contact.address') }}</p>
                    </div>

                    <ul class="contact-social-links">
                        <li>
                            <a href="{{ setting('social-media.facebook') ?? '#' }}" target="__blank">
                                <i class="iconoir-facebook"></i> Facebook
                            </a>
                        </li>
                        <li>
                            <a href="{{ setting('social-media.twitter') ?? '#' }}" target="__blank">
                                <i class="iconoir-twitter"></i> Twitter
                            </a>
                        </li>
                        <li>
                            <a href="{{ setting('social-media.instagram') ?? '#' }}" target="__blank">
                                <i class="iconoir-instagram"></i> Instagram
                            </a>
                        </li>
                        <li>
                            <a href="{{ setting('social-media.linkedin') ?? '#' }}" target="__blank">
                                <i class="iconoir-linkedin"></i> linkedin
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
