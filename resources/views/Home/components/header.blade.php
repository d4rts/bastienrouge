@section('stylesheets')
    @parent
    @vite(['resources/css/Home/components/header.css'])
@endsection
<header id="main-header">
    @include('Home.components.nav')
</header>
