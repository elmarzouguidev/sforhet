<section class="contact-area">
    <div class="custom-container">
        <div class="custom-row">
            <div class="contact-form-wrap">
                <div class="contact-form-body">
                    <h5 class="section-subtitle">Contact</h5>
                    <h1 class="section-title">Lets get in touch</h1>
                    <p>You can reach us anytime via <a href="email:contact@wedoapp.ma">contact@wedoapp.ma</a></p>
                    {{ $errors }}
                    <form id="contactForm" action="{{ route('contact.us.post') }}" method="post" class="contact-form">
                        @csrf
                        @honeypot
                        <div class="input-row">
                            <div class="input-group">
                                <label for="full_name">Full name</label>
                                <input type="text" id="full_name" name="full_name" placeholder="First Name"
                                    maxlength="100" required />
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="Your Email" required />
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group phone-number">
                                <select class="number-prefix">
                                    <option value="uk">MA</option>
                                </select>
                                <label for="phone_number">Phone Number</label>
                                <input type="text" id="phone_number" name="phone" placeholder="Your Number"
                                    required />
                            </div>
                            <div class="input-group">
                                <label for="country">Country</label>
                                <input type="text" id="homeland" name="country" placeholder="Your Country" />
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" placeholder="Leave us a message...." required></textarea>
                            </div>
                        </div>
                        <div class="input-row">
                            <div class="input-group input-checkbox">
                                <input type="checkbox" id="privacy_policy_accept" name="privacy_policy_accept">
                                <label for="privacy_policy_accept">You agree to our <a href="#">terms and
                                        conditions.</a></label>
                            </div>
                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <button type="submit" id="submit" class="theme-btn">

                                    Get Started
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
                            +212520513358 <br>
                            contact@wedoapp.ma
                        </p>
                    </div>
                    <div class="contact-office-info contact-info">
                        <img src="{{ asset('assets/imgs/map-icon.svg') }}" alt="Map" />
                        <h3>Visit our office</h3>
                        <p>16/9, Down Street
                            Edinburgh, Scotland
                            United Kingdom</p>
                    </div>

                    <ul class="contact-social-links">
                        <li>
                            <a href="#">
                                <i class="iconoir-dribbble"></i> Dribbble
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/wedoappma" target="__blank">
                                <i class="iconoir-twitter"></i> Twitter
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/wedoapp.ma/" target="__blank">
                                <i class="iconoir-instagram"></i> Instagram
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/wedoapp-ma" target="__blank">
                                <i class="iconoir-linkedin"></i> linkedin
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
