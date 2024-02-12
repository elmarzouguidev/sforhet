<header class="header-area ">

    <div class="custom-container">
        <div class="custom-row align-items-center justify-content-between">
            <div class="header-left d-flex align-items-center">
                <a href="{{ route('home') }}" class="logo">
                    {{-- <img src="{{ asset('assets/imgs/logo.svg') }}" alt="SFORHET logo" /> --}}
                    <x-application-logo alt="SFORHET logo" />
                </a>

                <div class="header-left-right">
                    <a href="{{ route('contact.us') }}" class="theme-btn">Contact</a>
                    <span class="menu-bar">
                        <i class="las la-bars"></i>
                    </span>
                </div>
                <nav class="navbar-wrapper">
                    <span class="close-menu-bar">
                        <i class="las la-times"></i>
                    </span>
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Acceuil</a>
                        </li>
                        <li>
                            <a href="{{ route('cabinet') }}">Notre cabinet</a>
                        </li>
                        <li>
                            <a href="{{ route('candidats') }}">Espace candidats</a>
                        </li>
                        <li>
                            <a href="{{ route('entreprise') }}">Espace entreprise</a>
                        </li>
                        <li>
                            <a href="{{ route('offres') }}">Nos offres</a>
                        </li>

                        <li class="mega-menu-item">
                            <a href="{{ route('company') }}">Nos metiers</a>
                            <span class="dropdown-menu-item-icon">
                                <i class="las la-angle-down"></i>
                            </span>
                            <div class="mega-menu mega-menu-company">
                                <div class="mega-menu-inner">
                                    <div class="custom-container">
                                        <div class="left">
                                            <div class="mega-menu-link-wrap">
                                                <div class="mega-menu-link">
                                                    <ul>
                                                        <li><a href="{{ route('pages.single', 'conseil') }}">Conseil</a>
                                                        </li>
                                                        <li><a
                                                                href="{{ route('pages.single', 'formation') }}">Formation</a>
                                                        </li>
                                                        <li><a
                                                                href="{{ route('pages.single', 'recrutement') }}">Recrutement</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <div class="header-contact-info d-flex align-items-center">
                    <div class="phone-number">
                        <a href="tel:+212522236574">
                            Appelez-nous
                            <i class="iconoir-arrow-up-right"></i>
                        </a>
                        +212522236574
                    </div>
                    <a href="{{ route('contact.us') }}" class="theme-btn">Contact</a>
                </div>
            </div>
        </div>
    </div>

</header>
