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
                    <form id="applyform" action="{{ route('offres.single.post', $offre->slug) }}" method="post"
                        class="contact-form">
                        @csrf
                        @honeypot
                        <input type="hidden" name="offre" value="{{ $offre->uuid }}">
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
                                    <label for="phone">Téléphone</label>
                                    <input type="text" id="phone" name="phone" placeholder="Téléphone"
                                        value="{{ old('phone') }}" class="@error('phone') is-invalid @enderror"
                                        required />
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="date_nissance">Date de naissance (d/m/Y)</label>
                                    <input type="text" id="date_nissance" name="date_nissance"
                                        placeholder="Date de naissance" value="{{ old('date_nissance') }}"
                                        class="@error('date_nissance') is-invalid @enderror" required />
                                    @error('date_nissance')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="input-row">
                                <div class="input-group">
                                    <label for="adresse">Adresse</label>
                                    <textarea name="adresse" id="adresse" rows="2" placeholder="" class="@error('adresse') is-invalid @enderror"
                                        required>{{ old('adresse') }}</textarea>
                                    @error('adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="quartier">Quartier</label>
                                    <input type="text" id="quartier" name="quartier" value="{{ old('quartier') }}"
                                        placeholder="Quartier" class="@error('quartier') is-invalid @enderror"
                                        required />
                                    @error('quartier')
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
                                <div class="input-group">
                                    <label for="diplome">Diplôme</label>
                                    <input type="text" id="diplome" name="diplome" value="{{ old('diplome') }}"
                                        class="@error('diplome') is-invalid @enderror" placeholder="Diplôme"
                                        required />
                                    @error('diplome')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="input-group">
                                    <label for="filiere">Filière</label>
                                    <input type="text" id="filiere" name="filiere"
                                        value="{{ old('filiere') }}" class="@error('filiere') is-invalid @enderror"
                                        placeholder="Filière" required />
                                    @error('filiere')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="input-row">
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
            <div class="input-group input-checkbox">
                <input type="checkbox" id="privacy_policy_accept" name="privacy_policy_accept">
                <label for="privacy_policy_accept">You agree to our <a href="#">terms and
                        conditions.</a></label>
            </div>
        </div> --}}

                            <div class="input-row">
                                <div class="input-group">
                                    <button type="submit" id="submit" class="theme-btn">

                                        Postuler
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
