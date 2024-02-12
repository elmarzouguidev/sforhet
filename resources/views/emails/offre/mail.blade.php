<p>Nom Complet : {{ $data['prenom'] . ' ' . $data['nom'] }}</p>
<br>
<p>Date nissance : {{ $data['date_nissance'] }}</p>
<hr>

<p>adresse : {{ $data['adresse'] }}</p>
<br>
<p>ville : {{ $data['ville'] }}</p>
<br>
<p>diplome : {{ $data['diplome'] }}</p>
<br>
<p>filiere : {{ $data['filiere'] }}</p>
<hr>

<p>Offre : <b>{{ $data['offre']['title'] }}</b></p>
<br>
<p>Lien d'offre : <a href="{{ route('offres.single', $data['offre']['slug']) }}">{{ $data['offre']['title'] }}</a> </p>

<br>
