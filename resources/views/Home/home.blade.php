@extends('layouts.base')

@section('stylesheets')
    @parent
    @vite(['resources/css/Home/home.css'])
@endsection

@section('title')
    Bastien Rougé
@endsection

@section('body')
    @include('Home.components.header')
    <section class="max-height under-header content" id="home">
        <img
            src="{{ Vite::asset('resources/image/Home/bastien.rouge.jpg') }}"
            alt="Photo Bastien Rougé"
            id="main-photo"
        >
        <div id="main-description">
            <h1>Bastien Rougé</h1>
            <p>
                Passionné d'informatique depuis mon enfance, j'ai décidé de mettre à profit mes connaissances et
                compétences dans le domaine de la programmation
            </p>
        </div>
    </section>
@endsection
