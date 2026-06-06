@extends('layouts.app')

@section('title','Services - Invest Market SPA')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/services.css') }}" as="style" preload>
@endpush

@section('content')

<!-- ===== HERO ===== -->
<section class="services-hero" role="banner">
    <video autoplay muted loop playsinline class="hero-video" aria-label="Vidéo de présentation des services">
        <source src="{{ asset('images/invest-bursa.mp4') }}" type="video/mp4">
        Votre navigateur ne supporte pas les vidéos.
    </video>
    <div class="hero-overlay"></div>
    <div class="elite-container">
        <p class="hero-label">NOS DOMAINES D’EXPERTISE</p>
        <h1>Découvrez nos solutions professionnelles</h1>
        <p class="hero-sub">
            Invest Market accompagne ses clients à chaque étape stratégique avec expertise et engagement.
        </p>
    </div>
</section>

<!-- ===== LEVÉE DE FONDS ET FINANCEMENT ===== -->
<section class="service-section section-white" role="region" aria-labelledby="levée-fonds-title">
    <div class="service-wrapper">

        <div class="service-header">
            <h2 id="levée-fonds-title">LEVÉE DE FONDS ET FINANCEMENT</h2>
            <div class="title-line"></div>
        </div>

        <div class="service-grid" role="list">
            <div class="service-card left" role="listitem">Détermination du montant de financement adéquat</div>
            <div class="service-card right" role="listitem">Choix du schéma de financement optimal</div>

            <div class="service-card left" role="listitem">Optimisation des conditions de l’opération</div>
            <div class="service-card right" role="listitem">Réalisation de diligences adaptées aux investisseurs</div>

            <div class="service-card left" role="listitem">Conseil en investissements financiers</div>
            <div class="service-card right" role="listitem">Identification de partenaires appropriés</div>

            <div class="service-card left" role="listitem">Participation active aux négociations</div>
        </div>
    </div>
</section>

<!-- ===== DUAL SERVICE SECTION ===== -->
<section class="service-dual-section" role="region" aria-labelledby="dual-services-title">
    <h2 id="dual-services-title" class="sr-only">Services Stratégiques</h2>
    <div class="dual-wrapper">

        <div class="dual-card">
            <div class="icon-box">
                <i class="fa-solid fa-handshake" aria-hidden="true"></i>
            </div>
            <h3>CONSEIL EN FUSION & ACQUISITION</h3>
            <p>
                Accompagnement stratégique dans les opérations de fusion et acquisition,
                analyse financière, valorisation et négociation.
            </p>
        </div>

        <div class="dual-card">
            <div class="icon-box">
                <i class="fa-solid fa-chart-line" aria-hidden="true"></i>
            </div>
            <h3>INVESTISSEMENT EN BOURSE</h3>
            <p>
                Conseil en placements boursiers, analyse de marché,
                optimisation de portefeuille et gestion des risques.
            </p>
        </div>
    </div>
</section>

<!-- ===== ACCOMPAGNEMENT EN BOURSE ===== -->
<section class="bourse-simple" role="region" aria-labelledby="bourse-title">

   <div class="bourse-header">
        <h2 id="bourse-title">ACCOMPAGNEMENT EN BOURSE</h2>
        <div class="title-line"></div>
    </div>


    <div class="bourse-container">
        <!-- LEFT TEXT -->
        <div class="bourse-text" role="list" aria-label="Liste des services boursiers">
            <ul>
                <li role="listitem">Détermination du montant de financement adéquat</li>
                <li role="listitem">Accompagnement lors de la phase d’évaluation</li>
                <li role="listitem">Structuration de l’offre</li>
                <li role="listitem">Préparation de la Documentation (dossier d’admission et notice d’information) en vue de l’obtention du visa de la COSOB</li>
                <li role="listitem">Constitution et pilotage du syndicat de placement</li>
                <li role="listitem">Roadshow et Marketing</li>
                <li role="listitem">Cotation en Bourse</li>
                <li role="listitem">Suivi post-introduction</li>
            </ul>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="bourse-image">
            <img src="{{ asset('images/L’ACCOMPAGNEMENT-EN-BOURSE.png') }}" alt="Accompagnement en Bourse Invest Market" loading="lazy">
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function(){

    const cards = document.querySelectorAll('.service-card');
    const dualCards = document.querySelectorAll('.dual-card');
    const bourseElements = document.querySelectorAll('.bourse-text');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }
        });
    }, { threshold: 0.2 });

    cards.forEach(card => observer.observe(card));
    dualCards.forEach(card => observer.observe(card));

    const bourseObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
                entry.target.classList.remove('show');
            }
        });
    }, { threshold: 0.3 });
    bourseElements.forEach(el => bourseObserver.observe(el));

});
</script>
@endpush
