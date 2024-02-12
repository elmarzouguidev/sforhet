<p>Nom Complet : {{ $data['prenom'] . ' ' . $data['nom'] }}</p>
<br>
<p>Téléphone : {{ $data['phone'] }}</p>
<br>
<p>Date nissance : {{ $data['date_nissance'] }}</p>
<hr>

<p>Adresse : {{ $data['adresse'] }}</p>
<br>
<p>Ville : {{ $data['ville'] }}</p>
<br>
<p>Diplome : {{ $data['diplome'] }}</p>
<br>
<p>Filiere : {{ $data['filiere'] }}</p>
<hr>

<p>Offre : <b>{{ $data['offre']['title'] }}</b></p>
<br>
<p>Lien d'offre : <a href="{{ route('offres.single', $data['offre']['slug']) }}">{{ $data['offre']['title'] }}</a> </p>

<br>
