@extends('layouts.app')

@section('title','Invest Market SPA - Intermédiaire en Bourse en Algérie')

@section('meta_description','Invest Market SPA accompagne les investisseurs et entreprises vers une performance durable avec des solutions financières optimisées en Algérie.')

@push('styles')
<link rel="preload" href="{{ asset('css/style.css') }}" as="style">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')

<!-- ===== Skip Link ===== -->
<a href="#main-content" class="skip-link">Aller au contenu principal</a>

<!-- ===== HERO ===== -->
<section class="hero">
    <div class="hero-content">
        <span class="hero-eyebrow">Intermédiaire en Opérations de Bourse</span>
        <h1>Votre partenaire sur le marche financier algerien.</h1>
        <p>
            Invest Market accompagne les entreprises et investisseurs avec une expertise
            strategique, une execution rigoureuse et des solutions adaptees a chaque ambition.
        </p>
        <div class="hero-trust">
            <span>Agree COSOB</span>
            <span>Conseil strategique</span>
            <span>Croissance durable</span>
        </div>
        <div class="hero-buttons">
            <a href="{{ route('view.services') }}" class="btn-primary" aria-label="Voir nos services">Decouvrir nos services</a>
            <a href="{{ route('contact.index') }}" class="btn-outline" aria-label="Contacter Invest Market">Prendre rendez-vous</a>
        </div>
    </div>
    <div class="hero-image">
        <div class="hero-panel">
            <div class="hero-panel-badge">Agrement 01/2024</div>
            <h2>Une vision claire pour vos operations financieres.</h2>
            <p>
                Structuration, conseil, accompagnement en bourse et execution dans un cadre
                professionnel oriente performance.
            </p>
            <div class="hero-metrics">
                <div class="metric-card">
                    <strong>IOB</strong>
                    <span>Intermediation boursiere</span>
                </div>
               
                <div class="metric-card">
                    <strong>IPO</strong>
                    <span>Accompagnement marche</span>
                </div>
            </div>
        </div>
        <div class="hero-image-frame">
            <img src="{{ asset('images/invest.png') }}" alt="Invest Market - Intermédiaire en Bourse" loading="lazy">
        </div>
    </div>
</section>

<!-- ===== ABOUT ===== -->
<section class="about-preview" id="main-content">
    <h2 class="section-title reveal-top">Qui sommes-nous ?</h2>

    <div class="about-container">
        <div class="about-image reveal-left">
            <img src="{{ asset('images/logo-invest-market.png') }}" alt="Logo Invest Market SPA" loading="lazy">
        </div>

        <div class="about-text reveal-right">
            <p>
                Invest Market accompagne les investisseurs et entreprises vers une performance durable.
                Nos experts fournissent des conseils stratégiques et financiers de haute qualité pour libérer
                tout le potentiel de croissance de nos clients.
            </p>
            <a href="{{ route('view.apropos') }}" class="btn-primary" aria-label="Lire plus sur Invest Market">Lire Plus</a>
        </div>
    </div>
</section>

<!-- ===== WHY CHOOSE US ===== -->
<section class="why-choose">
    <h2 class="section-title">Pourquoi nous choisir ?</h2>
    <div class="why-text">
        <p>
            Notre priorité est de comprendre votre business model afin de mieux vous accompagner. 
            Nous analysons vos besoins pour offrir la solution la mieux adaptée. Nos experts sont à votre disposition pour assurer la meilleure qualité de service.
        </p>
    </div>
</section>

<!-- ===== SERVICES ===== -->
<section class="services-preview">
    <h2 class="section-title">Nos Services Professionnels</h2>
    <p class="section-subtitle">Accompagnement stratégique et solutions adaptées à chaque étape.</p>

    <div class="services-cards">
        <div class="card">
            <i class="fa-solid fa-handshake" aria-hidden="true"></i>
            <h3>Conseil en Fusion & Acquisition</h3>
            <p>Accompagnement stratégique et analyse financière pour vos opérations.</p>
        </div>
        <div class="card">
            <i class="fa-solid fa-chart-line" aria-hidden="true"></i>
            <h3>Investissement en Bourse</h3>
            <p>Optimisation de portefeuille et gestion des risques.</p>
        </div>
        <div class="card">
            <i class="fa-solid fa-coins" aria-hidden="true"></i>
            <h3>Levée de Fonds</h3>
            <p>Détermination du financement optimal et accompagnement jusqu’à la signature.</p>
        </div>
    </div>

    <div class="services-button">
        <a href="{{ route('view.services') }}" class="btn-primary" aria-label="Lire plus sur nos services">
           Lire Plus <i class="fa-solid fa-arrow-right"></i>
        </a>
    </div>
</section>



<!-- ===== Intersection Observer Animations ===== -->
@push('scripts')
<script defer>
document.addEventListener("DOMContentLoaded", function(){

    const reveals = document.querySelectorAll(".reveal-top, .reveal-left, .reveal-right");

    const observer = new IntersectionObserver((entries)=>{
        entries.forEach(entry=>{
            if(entry.isIntersecting){
                entry.target.classList.add("active");
            } else {
                entry.target.classList.remove("active");
            }
        });
    },{
        threshold:0.25
    });

    reveals.forEach(reveal=>{
        observer.observe(reveal);
    });

    const servicesSection = document.querySelector(".services-preview");
    if(servicesSection){
        const servicesObserver = new IntersectionObserver((entries)=>{
            entries.forEach(entry=>{
                if(entry.isIntersecting){
                    entry.target.classList.add("active");
                } else {
                    entry.target.classList.remove("active");
                }
            });
        },{
            threshold:0.3
        });
        servicesObserver.observe(servicesSection);
    }

});
</script>
@endpush

@endsection
