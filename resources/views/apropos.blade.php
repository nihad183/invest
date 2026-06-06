@extends('layouts.app')

@section('title','À Propos - Invest Market SPA')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/apropos.css') }}" as="style" preload>
@endpush

@section('content')

<!-- ===== HERO SECTION ===== -->
<section class="elite-hero" role="banner">
    <div class="elite-container">
        <p class="hero-label">À PROPOS</p>
        <h1>Construire la performance durable.</h1>
        <p class="hero-sub">
            Invest Market accompagne les investisseurs institutionnels
            et entreprises stratégiques vers une croissance maîtrisée.
        </p>
    </div>
</section>

<!-- ===== NEXT SECTION ===== -->
<section id="apropos" class="next-section" role="region" aria-labelledby="apropos-title">
    <div class="text-container">

        <div class="left-text">
            <h2 id="apropos-title" class="main-title">
               INVEST IN <span id="typing-text" class="typing-word" data-text="GROWTH..."></span>
            </h2>
            <h3 class="subtitle">QUI SOMMES NOUS ?</h3>
            <p class="description">
                Invest Market, filiale de RMGC Spa Holding, est un Intermédiaire en Opérations de Bourse (IOB)
                agréé par la Commission d’Organisation et de Surveillance des Opérations de Bourse (COSOB)
            </p>
        </div>
        <div class="right-block">
        <ul class="right-list" aria-label="Liste de nos services">
            <li>Négociation pour compte propre</li>
            <li>Négociation pour compte de tiers</li>
            <li>Conseil en placement de valeurs mobilières</li>
            <li>Placement de valeurs mobilières et produits financiers</li>
            <li>Gestion individuelle de portefeuille sous mandat</li>
            <li>Conseil aux entreprises en matière de structure de capital, fusion et rachat d’entreprises</li>
        </ul>
        <p class="agreement-ref">
            Agrément N° 01/2024
        </p>
        </div>

    </div>
</section>

<!-- ===== ABOUT SECTION ===== -->
<section class="about-section" role="region" aria-labelledby="about-title">
    <div class="about-container">

        <div class="about-text">
            <h2 id="about-title">Libérez votre potentiel de croissance</h2>
            <p>
                Nos experts aident les entreprises dynamiques à libérer tout leur potentiel 
                de croissance en offrant des conseils de qualité et à forte valeur ajoutée.
            </p>
            <p>
                Les équipes proactives de Invest Market, soutenues par des associés professionnels 
                et engagés, font appel à leurs idées, leur expérience et leur adaptabilité 
                pour appréhender les problématiques complexes des clients du secteur privé et public, 
                ainsi que des sociétés cotées en bourse et des institutions financières.
            </p>
        </div>

        <div class="about-image">
            <img src="{{ asset('images/bursa-alger.png') }}" alt="Expertise Invest Market" loading="lazy">
        </div>
    </div>

    <div class="features" role="list">
        <div class="feature-card" role="listitem">
            <div class="icon">
                <i class="fas fa-chart-line" aria-hidden="true"></i>
            </div>
            <h3>Expertise Professionnelle</h3>
            <p>Notre équipe est composée d'experts chevronnés.</p>
        </div>

        <div class="feature-card" role="listitem">
            <div class="icon">
                <i class="fas fa-handshake" aria-hidden="true"></i>
            </div>
            <h3>Transparence Totale</h3>
            <p>Communication claire à chaque étape de notre collaboration.</p>
        </div>

        <div class="feature-card" role="listitem">
            <div class="icon">
                <i class="fas fa-shield-halved" aria-hidden="true"></i>
            </div>
            <h3>Sécurité et Confidentialité</h3>
            <p>Les informations sont traitées avec la plus grande confidentialité.</p>
        </div>
    </div>
</section>

<!-- ===== ENGAGEMENT SECTION ===== -->
<section class="engagement-section" role="region" aria-labelledby="engagement-title">
    <div class="section-header">
        <h2 id="engagement-title">Nos Engagements</h2>
        <p>Des valeurs fortes au cœur de notre stratégie pour accompagner nos clients vers la réussite.</p>
    </div>
    <div class="engagement-grid" role="list">
        <div class="engagement-card" role="listitem">
            <h3>Intégrité & Transparence</h3>
            <p>Agir de manière éthique et transparente dans toutes nos interactions.
               Respect strict des normes de gouvernance et pratiques professionnelles.
            </p>
        </div>
        <div class="engagement-card" role="listitem">
            <h3>Partenariat Stratégique</h3>
            <p>Nous accompagnons nos clients à chaque étape de leur croissance.
               Solutions personnalisées adaptées à leurs besoins spécifiques.
            </p>
        </div>
        <div class="engagement-card" role="listitem">
            <h3>Innovation & Adaptabilité</h3>
            <p>Suivre les tendances du marché financier et proposer des solutions innovantes.
               Capacité d’adaptation rapide aux changements économiques.
            </p>
        </div>
        <div class="engagement-card" role="listitem">
            <h3>Employés Qualifiés</h3>
            <p>Des profils spécialisés et formés pour garantir un accompagnement professionnel et performant.</p>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="{{ asset('js/apropos.js') }}" defer></script>
@endpush
