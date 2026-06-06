@extends('layouts.app')

@section('title','FAQ - Invest Market SPA')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/faq.css') }}" as="style" preload>
@endpush

@section('content')
<section class="faq-section" role="region" aria-labelledby="faq-title">
    <div class="faq-container">
        <h1 id="faq-title">FAQ — Questions fréquentes</h1>

        <div class="accordion" role="list">
            <!-- ===== CATEGORY: Levée de fonds ===== -->
            <div class="faq-category" role="region" aria-labelledby="funding-title">
                <h2 id="funding-title">Levée de fonds et financement</h2>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq1">Quels types de financement?</button>
                <div class="panel" id="faq1" role="region" aria-hidden="true">
                    <p>Invest Market SPA propose différents types de financement adaptés aux besoins des entreprises, en fase d'émergence</p>
                </div>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq2">Comment déterminer le montant optimal de financement pour mon projet ?</button>
                <div class="panel" id="faq2" role="region" aria-hidden="true">
                    <p>Le montant optimal est déterminé après analyse détaillée du projet, évaluation des besoins en capital, estimation des flux de trésorerie et identification des sources de financement les plus appropriées.</p>
                </div>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq3">Offrez-vous un accompagnement jusqu’à la souscription des investisseurs ?</button>
                <div class="panel" id="faq3" role="region" aria-hidden="true">
                    <p>Oui, nous accompagnons nos clients tout au long du processus, depuis l’évaluation initiale jusqu’à la finalisation et la signature des contrats avec les investisseurs.</p>
                </div>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq4">Proposez-vous un suivi post-introduction en bourse ?</button>
                <div class="panel" id="faq3" role="region" aria-hidden="true">
                    <p>Oui, nous assurons un suivi complet après l’introduction en bourse, incluant le reporting financier, la communication avec les investisseurs et l’optimisation de la performance boursière.</p>
                </div>
            </div>

            <!-- ===== CATEGORY: Conseil en fusion ===== -->
            <div class="faq-category" role="region" aria-labelledby="fusion-title">
                <h2 id="fusion-title">Conseil en fusion et acquisition</h2>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq5">Quels types d’entreprises pouvez-vous aider dans les fusions et acquisitions ?</button>
                <div class="panel" id="faq5" role="region" aria-hidden="true">
                    <p>Nous assistons des entreprises de toutes tailles, allant des PME aux grandes sociétés , dans des opérations de fusion, acquisition et restructuration stratégique.</p>
                </div>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq6">Quels sont les critères d’évaluation des entreprises ?</button>
                <div class="panel" id="faq6" role="region" aria-hidden="true">
                    <p>L’évaluation repose sur l’analyse financière, les perspectives de croissance, la valeur des actifs, la position sur le marché et les risques associés à l’entreprise.</p>
                </div>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq7">Est-ce que vous participez aux négociations ?</button>
                <div class="panel" id="faq7" role="region" aria-hidden="true">
                    <p>Oui, nos experts accompagnent les clients lors des négociations pour assurer une transaction équitable et optimiser les résultats.</p>
                </div>
            </div>

            <!-- ===== CATEGORY: Investissement en bourse ===== -->
            <div class="faq-category" role="region" aria-labelledby="bourse-title">
                <h2 id="bourse-title">Investissement en bourse</h2>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq8">Comment fonctionne l’accompagnement en bourse ?</button>
                <div class="panel" id="faq8" role="region" aria-hidden="true">
                    <p>Nous fournissons des conseils stratégiques sur les placements, analysons les marchés financiers et proposons un suivi personnalisé pour optimiser vos investissements en bourse.</p>
                </div>

                <!--<button class="accordion-btn" aria-expanded="false" aria-controls="faq8">Quels sont les risques liés aux investissements boursiers ?</button>
                <div class="panel" id="faq8" role="region" aria-hidden="true">
                    <p>Les risques incluent la volatilité des marchés, les fluctuations des prix des actions, le risque économique et le risque spécifique à chaque entreprise. Nous aidons à les identifier et les gérer efficacement.</p>
                </div>-->

                
            </div>

            <!-- ===== CATEGORY: Gestion et Conseil ===== -->
            <div class="faq-category" role="region" aria-labelledby="gestion-title">
                <h2 id="gestion-title">Gestion et Conseil</h2>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq9">Comment Invest Market SPA aide-t-il les entreprises à optimiser leur portefeuille ?</button>
                <div class="panel" id="faq9" role="region" aria-hidden="true">
                    <p>Nous analysons la structure actuelle du portefeuille, identifions les opportunités de diversification et proposons des stratégies pour maximiser le rendement tout en limitant les risques.</p>
                </div>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq10">Offrez-vous des conseils personnalisés pour les particuliers et les entreprises ?</button>
                <div class="panel" id="faq10" role="region" aria-hidden="true">
                    <p>Oui, chaque client bénéficie de recommandations adaptées à son profil, ses objectifs et sa tolérance au risque.</p>
                </div>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq11">Quels types de rapports ou analyses fournissez-vous aux clients ?</button>
                <div class="panel" id="faq11" role="region" aria-hidden="true">
                    <p>Nous fournissons publication des états finaiciens semasterials, des analyses de marché, des prévisions et des recommandations personnalisées pour chaque client .</p>
                </div>
            </div>

            <!-- ===== CATEGORY: Sécurité et Confidentialité ===== -->
            <div class="faq-category" role="region" aria-labelledby="security-title">
                <h2 id="security-title">Sécurité et Confidentialité</h2>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq12">Mes informations personnelles et financières sont-elles protégées ?</button>
                <div class="panel" id="faq12" role="region" aria-hidden="true">
                    <p>Oui, nous utilisons des Procedures de sécurité avancés et nous nous conformons aux normes de confidentialité les plus strictes pour protéger toutes les données des clients.</p>
                </div>

                <button class="accordion-btn" aria-expanded="false" aria-controls="faq13">Quels Procedures de sécurité sont utilisés pour les transactions ?</button>
                <div class="panel" id="faq13" role="region" aria-hidden="true">
                    <p>Toutes les transactions sont sécurisées grâce à des systèmes de chiffrement, l’authentification multi-facteurs et une surveillance continue des activités suspectes.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const accordions = document.querySelectorAll('.accordion-btn');

    accordions.forEach(btn => {
        btn.addEventListener('click', () => {
            const panel = btn.nextElementSibling;
            const expanded = btn.getAttribute('aria-expanded') === 'true';

            btn.setAttribute('aria-expanded', !expanded);
            panel.setAttribute('aria-hidden', expanded);

            if(panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    });
});
</script>
@endpush
