<section class="hero-section-wrap hero-home2">
    <div class="custom-container">

        <div class="hero-contact-form-wrap">
            <div class="hero-contact-form-inner-wrap">
                <div class="mac-btns-wrap d-flex align-items-center justify-content-between">
                    <div class="mac-buttons d-flex align-items-center">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="action-btn d-flex align-items-center">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="hero-contact-form">
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
                    <form id="contactForm" action="{{ route('entreprise.store') }}" method="post" class="contact-form">
                        @csrf
                        @honeypot
                        <div class="row">
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" id="nom" name="nom" placeholder="Entrer votre nom"
                                        class="@error('nom') is-invalid @enderror" maxlength="100"
                                        value="{{ old('nom') }}" required />
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" id="prenom" name="prenom"
                                        placeholder="Entrer votre prénom" value="{{ old('prenom') }}" maxlength="100"
                                        class="@error('prenom') is-invalid @enderror" required />
                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="fonction">Fonction</label>
                                    <input type="text" id="fonction" name="fonction" value="{{ old('fonction') }}"
                                        placeholder="Fonction" class="@error('fonction') is-invalid @enderror"
                                        required />
                                    @error('fonction')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="raison_sociale">Raison sociale</label>
                                    <input type="text" id="raison_sociale" name="raison_sociale"
                                        value="{{ old('raison_sociale') }}" placeholder="Raison sociale"
                                        class="@error('raison_sociale') is-invalid @enderror" required />
                                    @error('raison_sociale')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="ville">Ville</label>
                                    <input type="text" id="ville" name="ville" value="{{ old('ville') }}"
                                        class="@error('ville') is-invalid @enderror" placeholder="Ville" required />
                                    @error('ville')
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
                                    <label for="phone">Téléphone</label>
                                    <input type="text" id="phone" name="phone" placeholder="Téléphone"
                                        required />
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="email">Adresse mail</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        class="@error('email') is-invalid @enderror" placeholder="Adresse mail"
                                        required />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="demande">Détail de la demande</label>
                                    <textarea name="demande" id="demande" rows="2" placeholder=""
                                        class="@error('demande') is-invalid @enderror" required>{{ old('demande') }}</textarea>
                                    @error('demande')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="input-row">
                                <div class="input-group input-checkbox">
                                    <input type="checkbox" id="privacy_policy_accept" name="privacy_policy_accept">
                                    <label for="privacy_policy_accept">You agree to our <a href="#">terms and
                                            conditions.</a></label>
                                </div>
                            </div> --}}

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
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
