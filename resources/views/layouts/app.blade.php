<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title','Invest Market SPA - Intermédiaire en Bourse en Algérie')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="@yield('meta_description','Invest Market SPA - Intermédiaire en Bourse agréé par la COSOB en Algérie.')">
    <meta name="keywords" content="Invest Market, Bourse Algérie, COSOB, IOB, investissement Algérie, marché financier">
    <meta name="author" content="Invest Market SPA">
    <meta name="robots" content="index, follow">

    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:title" content="@yield('title','Invest Market SPA')">
    <meta property="og:description" content="@yield('meta_description','Invest Market SPA - Intermédiaire en Bourse en Algérie.')"> 
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/preview.jpg') }}">

    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="preload" href="{{ asset('css/app.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <link rel="icon" href="{{ asset('images/logo-invest-market.png') }}" type="image/png">
    <link rel="icon" type="image/x-icon" sizes="192x192" href="/favicon.ico">
    <link rel="icon" type="image/x-icon" sizes="96x96" href="/favicon.ico">
    <link rel="icon" type="image/x-icon" sizes="48x48" href="/favicon.ico">



    @stack('styles')


</head>

<body>

<header class="navbar" role="banner">
  <div class="nav-container">
    <div class="logo">
      <a href="/">
        <span class="logo-main">INVEST</span>
        <span class="logo-accent">MARKET</span>
      </a>
    </div>
    <nav class="nav-menu" role="navigation" aria-label="Main Navigation">
      <a href="/"
         class="{{ request()->is('/') ? 'active' : '' }}"
         aria-current="{{ request()->is('/') ? 'page' : '' }}">
         Accueil
      </a>
      <a href="/apropos"
         class="{{ request()->is('apropos*') ? 'active' : '' }}"
         aria-current="{{ request()->is('apropos*') ? 'page' : '' }}">
         À propos
      </a>
      <a href="/services" 
         class="{{ request()->is('services*') ? 'active' : '' }}"
         aria-current="{{ request()->is('services*') ? 'page' : '' }}">
          Services
      </a>
      <a href="/contact"
         class="{{ request()->is('contact*') ? 'active' : '' }}"
         aria-current="{{ request()->is('contact*') ? 'page' : '' }}">
         Contact
      </a>
    </nav>
    <button class="menu-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
      &#9776;
    </button>

  </div>
</header>

<main>
  @yield('content')
</main>


<footer class="footer"role="contentinfo">
    <div class="footer-container">
        <div class="footer-col">
            <h3>INVEST MARKET</h3>
            <p>
                Intermédiaire en Opérations de Bourse (IOB) agréé par la COSOB.
                Nous accompagnons nos clients dans leurs stratégies d'investissement
                et de croissance financière.
            </p>
        </div>
        <div class="footer-col">
            <h4>Navigation</h4>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/apropos">À propos</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Nos Services</h4>
            <ul>
                <li>Négociation</li>
                <li>Gestion de Portefeuille</li>
                <li>Conseil Financier</li>
                <li>Placement de Valeurs</li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Support</h4>
            <ul>
                <li><a href="/faqs">FAQ</a></li>
                <li><a href="#">Ressources</a></li>
                <li><a href="#">Team</a></li>
            </ul>
        </div>
    </div>
    <div class="social-icons">
      <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer">
       <i class="fab fa-linkedin-in"aria-hidden="true"></i>
      </a>
      <a href="#" aria-label="facebook" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-facebook-f"aria-hidden="true"></i>
      </a>
      <a href="#" aria-label="Twitter"target="_blank" rel="noopener noreferrer">
        <i class="fab fa-twitter"aria-hidden="true"></i>
      </a>
      <a href="#" aria-label="Instagram"target="_blank" rel="noopener noreferrer">
        <i class="fab fa-instagram"aria-hidden="true"></i>
      </a>
    </div>
    <div class="footer-bottom">
         <p class="footer-credit">Développé par <span>Zair Nihad</span></p>
         <p class="footer-copyright">&copy; 2026 INVEST MARKET SPA — Agrée par la Commission d’organisation et de surveillance des opérations de Bourse</p>
    </div>

</footer>

<script src="{{ asset('js/app.js') }}" defer></script>
@stack('scripts')

</body>

</html>
