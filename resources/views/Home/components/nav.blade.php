@section('stylesheets')
    @parent
    @vite(['resources/css/Home/components/nav.css'])
@endsection

<nav id="main-nav">
    <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Experiences</a></li>
        <li><a href="#">Formation</a></li>
        <li><a href="#">Langues</a></li>
        <li><a href="#">Compétences</a></li>
        <li><a href="#">Coordonnées</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>
