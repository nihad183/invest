@extends('layouts.app')

@section('title','Contact - Invest Market SPA')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}" as="style" preload>
@endpush

@section('content')

<!-- ===== HERO ===== -->
<section class="contact-hero">
    <div class="hero-container">
        <h1>Contactez-nous</h1>
        <p>Nous sommes là pour répondre à toutes vos questions.</p>
    </div>
</section>

<!-- ===== MAIN CONTACT ===== -->
<section class="contact-main" role="region" aria-labelledby="contact-title">
    <div class="contact-wrapper">

        <!-- ===== CONTACT MESSAGE ===== -->
        <div class="contact-form contact-direct-card">
            <div class="direct-card-badge">Contact direct</div>
            <h2 id="contact-title">Vous souhaitez demarrer avec nous ?</h2>
            <p class="direct-card-text">
                Cette adresse est reservee aux clients qui souhaitent lancer un accompagnement
                directement avec notre equipe. Cliquez sur le bouton ci-dessous pour ouvrir votre
                messagerie avec le bon destinataire.
            </p>
            <a class="direct-email-link" href="mailto:sdm@invest-market.dz">
                <span class="direct-email-label">Ecrire a</span>
                <span class="direct-email-address">sdm@invest-market.dz</span>
            </a>
        </div>

        <!-- ===== INFO ===== -->
        <div class="contact-info" aria-label="Informations de contact">
            <div class="contact-info-heading">
                <span>Restons connectes</span>
                <h2>N'hésitez pas à nous contacter</h2>
                <p>Choisissez le canal qui vous convient pour joindre notre equipe.</p>
            </div>
            <div class="info-cards">
                <div class="card">
                    <i class="fas fa-briefcase"></i>
                    <h4>Office</h4>
                    <p>Tour ABC , 11ème étage . Pins Maritimes . Mohammadia - Alger . </p>
                </div>
                <div class="card">
                    <i class="fas fa-phone"></i>
                    <h4>Téléphone</h4>
                    <p>+213 770 54 10 80 </p>
                </div>
                <div class="card">
                    <i class="fas fa-clock"></i>
                    <h4>Horaires</h4>
                    <p>Dimanche - Jeudi: 8:30h - 16:30h</p>
                </div>
                <div class="card social-contact-card">
                    <h4>Réseaux sociaux</h4>
                    <div class="social-grid" aria-label="Reseaux sociaux">
                        
                        <a class="social-card linkedin" href="https://www.linkedin.com/company/spa-invest-market/" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="social-card instagram" href="https://www.instagram.com/investmarket_spa?igsh=MXdqejJiMW56Mm9wMQ==" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <!-- ===== RECLAMATIONS & DONNÉES PERSONNELLES ===== -->
<div class="contact-info contact-claims" aria-label="Réclamations et données personnelles">

    <h2>Réclamations & Données personnelles</h2>

    <div class="info-cards">

        <!-- Réclamations -->
        <div class="card">
            <i class="fas fa-exclamation-circle"></i>
            <h4>Réclamations & Doléances</h4>
            <p>
                Pour toute réclamation ou suggestion concernant nos services :
                <br>
                <a class="contact-email-pill" href="mailto:reclamations@invest-market.dz">
                    <i class="fas fa-envelope"></i>
                    reclamations@invest-market.dz
                </a>
            </p>
        </div>

        <!-- Données personnelles -->
        <div class="card">
            <i class="fas fa-shield-alt"></i>
            <h4>Données personnelles</h4>
            <p>
                Pour toute demande relative à vos données personnelles (accès, rectification, suppression) :
                <br>
                <a class="contact-email-pill" href="mailto:dpo@invest-market.dz">
                    <i class="fas fa-envelope"></i>
                    dpo@invest-market.dz
                </a>
            </p>
        </div>

    </div>

</div>

    </div>
</section>

@endsection
