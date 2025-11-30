<!-- resources/views/frontend/home.blade.php -->
@extends('layouts.app')

@section('title', 'Skincare Guide - Prenez soin de votre peau naturellement')

@section('content')
<!-- Hero Section -->
<div class="bg-gradient-to-r from-rose-pastel via-peche to-vert-mint py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6">
            🌸 Bienvenue sur Skincare Guide
        </h1>
        <p class="text-xl text-gray-700 mb-8 max-w-2xl mx-auto">
            Découvrez des conseils personnalisés, des routines adaptées et tout ce qu'il faut savoir pour une peau éclatante
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('types-peau.index') }}" class="bg-pink-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-pink-700 transition">
                Découvrir mon type de peau
            </a>
            <a href="{{ route('articles.index') }}" class="bg-white text-pink-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-50 transition border-2 border-pink-600">
                Explorer les articles
            </a>
        </div>
    </div>
</div>

<!-- Catégories Section avec Défilement Automatique -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 bg-gradient-to-br from-pink-50 to-purple-50">
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Explorez par catégorie</h2>
    
    <!-- Conteneur de défilement -->
    <div class="relative overflow-hidden">
        <div class="categories-scroll-container flex gap-6 py-4">
            <!-- Première série de cartes -->
            @foreach($categories as $categorie)
            <div class="category-scroll-item flex-shrink-0 w-64">
                <a href="{{ route('articles.categorie', $categorie->slug)}}" 
                   class="category-card bg-white rounded-2xl p-6 text-center hover:shadow-xl transition-all duration-300 group relative overflow-hidden border-t-4 block
                          @if($categorie->nom == 'Nettoyants & Démaquillants') border-blue-400
                          @elseif($categorie->nom == 'Soins Hydratants') border-green-400
                          @elseif($categorie->nom == 'Soins Anti-Âge') border-yellow-400
                          @elseif($categorie->nom == 'Protection Solaire') border-orange-400
                          @elseif($categorie->nom == 'Soins pour les Yeux') border-purple-400
                          @else border-pink-400 @endif">
                    
                    <!-- Effet de brillance au survol -->
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-pink-50 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-600"></div>
                    
                    <div class="text-4xl mb-3 transition-transform duration-300 group-hover:scale-110">
                        @switch($categorie->nom)
                            @case('Nettoyants & Démaquillants') 🧼 @break
                            @case('Soins Hydratants') 💧 @break
                            @case('Soins Anti-Âge') ✨ @break
                            @case('Protection Solaire') ☀️ @break
                            @case('Soins pour les Yeux') 👁️ @break
                            @case('Sérums & Concentrés') 🧪 @break
                            @default 🌟
                        @endswitch
                    </div>
                    
                    <h3 class="font-semibold text-gray-800 group-hover:text-pink-600 transition-colors duration-300 mb-2 relative z-10">
                        {{ $categorie->nom }}
                    </h3>
                    
                    <p class="text-sm text-gray-500 group-hover:text-pink-500 transition-colors duration-300 relative z-10">
                        {{ $categorie->articles_count }} article{{ $categorie->articles_count != 1 ? 's' : '' }}
                    </p>
                </a>
            </div>
            @endforeach
            
            <!-- Duplication pour l'effet infini -->
            @foreach($categories as $categorie)
            <div class="category-scroll-item flex-shrink-0 w-64">
                <a href="{{ route('articles.categorie', $categorie->slug)}}" 
                   class="category-card bg-white rounded-2xl p-6 text-center hover:shadow-xl transition-all duration-300 group relative overflow-hidden border-t-4 block
                          @if($categorie->nom == 'Nettoyants & Démaquillants') border-blue-400
                          @elseif($categorie->nom == 'Soins Hydratants') border-green-400
                          @elseif($categorie->nom == 'Soins Anti-Âge') border-yellow-400
                          @elseif($categorie->nom == 'Protection Solaire') border-orange-400
                          @elseif($categorie->nom == 'Soins pour les Yeux') border-purple-400
                          @else border-pink-400 @endif">
                    
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-pink-50 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-600"></div>
                    
                    <div class="text-4xl mb-3 transition-transform duration-300 group-hover:scale-110">
                        @switch($categorie->nom)
                            @case('Nettoyants & Démaquillants') 🧼 @break
                            @case('Soins Hydratants') 💧 @break
                            @case('Soins Anti-Âge') ✨ @break
                            @case('Protection Solaire') ☀️ @break
                            @case('Soins pour les Yeux') 👁️ @break
                            @case('Sérums & Concentrés') 🧪 @break
                            @default 🌟
                        @endswitch
                    </div>
                    
                    <h3 class="font-semibold text-gray-800 group-hover:text-pink-600 transition-colors duration-300 mb-2 relative z-10">
                        {{ $categorie->nom }}
                    </h3>
                    
                    <p class="text-sm text-gray-500 group-hover:text-pink-500 transition-colors duration-300 relative z-10">
                        {{ $categorie->articles_count }} article{{ $categorie->articles_count != 1 ? 's' : '' }}
                    </p>
                </a>
            </div>
            @endforeach
        </div>
        
        <!-- Overlay de dégradé sur les bords -->
        <div class="absolute left-0 top-0 bottom-0 w-20 bg-gradient-to-r from-pink-50 to-transparent pointer-events-none z-10"></div>
        <div class="absolute right-0 top-0 bottom-0 w-20 bg-gradient-to-l from-purple-50 to-transparent pointer-events-none z-10"></div>
    </div>
</div>

<style>
.categories-scroll-container {
    animation: scrollCategories 30s linear infinite;
    width: max-content;
}

.category-scroll-item {
    flex: 0 0 auto;
}

.category-card {
    position: relative;
    overflow: hidden;
}

.category-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    transition: left 0.6s;
}

.category-card:hover::before {
    left: 100%;
}

.category-card:hover {
    transform: translateY(-5px);
}

/* Animation de défilement infini */
@keyframes scrollCategories {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(calc(-100% / 2));
    }
}

/* Pause au survol pour permettre l'interaction */
.categories-scroll-container:hover {
    animation-play-state: paused;
}

/* Animation d'apparition initiale */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.category-scroll-item {
    animation: fadeInUp 0.6s ease-out;
}

/* Délai d'animation pour chaque carte */
.category-scroll-item:nth-child(1) { animation-delay: 0.1s; }
.category-scroll-item:nth-child(2) { animation-delay: 0.2s; }
.category-scroll-item:nth-child(3) { animation-delay: 0.3s; }
.category-scroll-item:nth-child(4) { animation-delay: 0.4s; }
.category-scroll-item:nth-child(5) { animation-delay: 0.5s; }

/* Responsive */
@media (max-width: 768px) {
    .category-scroll-item {
        width: 280px;
    }
    
    .categories-scroll-container {
        animation-duration: 20s;
    }
}
</style>

<script>
// Redémarrage automatique de l'animation pour éviter les pauses
document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('.categories-scroll-container');
    
    // Réinitialiser l'animation périodiquement pour éviter les pauses
    setInterval(() => {
        scrollContainer.style.animation = 'none';
        void scrollContainer.offsetWidth; // Trigger reflow
        scrollContainer.style.animation = 'scrollCategories 30s linear infinite';
    }, 30000); // Toutes les 30 secondes
    
    // Reprise automatique après le survol
    scrollContainer.addEventListener('mouseleave', function() {
        this.style.animationPlayState = 'running';
    });
});
</script>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types de Peau - Carrousel Automatique</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
        
        .carousel-container {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }
        
        .carousel-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        
        .carousel-slide.active {
            opacity: 1;
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }
        
        .content {
            position: relative;
            z-index: 10;
        }
        
        .skin-card {
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .skin-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .skin-icon {
            transition: all 0.3s ease;
        }
        
        .skin-card:hover .skin-icon {
            transform: scale(1.1);
        }
        
        .carousel-indicators {
            position: absolute;
            bottom: 30px;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            z-index: 20;
        }
        
        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            margin: 0 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .indicator.active {
            background: white;
            transform: scale(1.2);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Section Carrousel avec types de peau -->
    <div class="carousel-container">
        <!-- Slide 1 - Peau grasse -->
        <div class="carousel-slide active" style="background-image: url('https://i.pinimg.com/1200x/79/ac/60/79ac609535391109cac1ef6174b97f1f.jpg')">
            <div class="overlay"></div>
        </div>
        
        <!-- Slide 2 - Peau sèche -->
        <div class="carousel-slide" style="background-image: url('https://i.pinimg.com/1200x/2f/d0/53/2fd05348790be4af7424ec5d456f9040.jpg')">
            <div class="overlay"></div>
        </div>
        
        <!-- Slide 3 - Peau mixte -->
        <div class="carousel-slide" style="background-image: url('https://i.pinimg.com/1200x/75/05/cc/7505ccda7030096d4b44b39a24e57a1d.jpg')">
            <div class="overlay"></div>
        </div>
        
        <!-- Slide 4 - Peau sensible -->
        <div class="carousel-slide" style="background-image: url('https://i.pinimg.com/1200x/84/44/92/844492b41e89f5469b6336954e35f5b7.jpg')">
            <div class="overlay"></div>
        </div>
        
        <!-- Contenu principal -->
        <div class="content h-full flex flex-col justify-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Quel est votre type de peau ?</h1>
                <p class="text-xl text-white mb-12 max-w-2xl mx-auto">Découvrez des conseils adaptés à vos besoins spécifiques</p>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                    <!-- Peau grasse -->
                    <a href="#" class="skin-card rounded-xl p-6 text-center transition group">
                        <div class="skin-icon text-5xl mb-3 text-purple-600">💧</div>
                        <h3 class="font-semibold text-gray-800 group-hover:text-purple-600">Peau grasse</h3>
                        <p class="text-sm text-gray-600 mt-2 hidden md:block">Excès de sébum, brillance</p>
                    </a>
                    
                    <!-- Peau sèche -->
                    <a href="#" class="skin-card rounded-xl p-6 text-center transition group">
                        <div class="skin-icon text-5xl mb-3 text-amber-600">🏜️</div>
                        <h3 class="font-semibold text-gray-800 group-hover:text-amber-600">Peau sèche</h3>
                        <p class="text-sm text-gray-600 mt-2 hidden md:block">Tiraillements, desquamation</p>
                    </a>
                    
                    <!-- Peau mixte -->
                    <a href="#" class="skin-card rounded-xl p-6 text-center transition group">
                        <div class="skin-icon text-5xl mb-3 text-blue-600">⚖️</div>
                        <h3 class="font-semibold text-gray-800 group-hover:text-blue-600">Peau mixte</h3>
                        <p class="text-sm text-gray-600 mt-2 hidden md:block">Zone T grasse, joues sèches</p>
                    </a>
                    
                    <!-- Peau sensible -->
                    <a href="#" class="skin-card rounded-xl p-6 text-center transition group">
                        <div class="skin-icon text-5xl mb-3 text-pink-600">🌺</div>
                        <h3 class="font-semibold text-gray-800 group-hover:text-pink-600">Peau sensible</h3>
                        <p class="text-sm text-gray-600 mt-2 hidden md:block">Rougeurs, réactivité</p>
                    </a>
                </div>
                
                <div class="mt-12">
                    <button class="bg-white text-purple-600 font-semibold py-3 px-8 rounded-full hover:bg-gray-100 transition transform hover:scale-105">
                        Faire le diagnostic de peau
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Indicateurs du carrousel -->
        <div class="carousel-indicators">
            <div class="indicator active" data-slide="0"></div>
            <div class="indicator" data-slide="1"></div>
            <div class="indicator" data-slide="2"></div>
            <div class="indicator" data-slide="3"></div>
        </div>
    </div>
    
    <!-- Section informations supplémentaires -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Comprendre votre type de peau</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Identifier correctement votre type de peau est la première étape vers une routine de soins adaptée et efficace.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6 rounded-lg bg-purple-50">
                    <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                        <i class="fas fa-tint text-purple-500 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Peau grasse</h3>
                    <p class="text-gray-600 text-sm">Caractérisée par une production excessive de sébum, brillance et pores dilatés. Nécessite des soins matifiants et régulateurs.</p>
                </div>
                
                <div class="text-center p-6 rounded-lg bg-amber-50">
                    <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                        <i class="fas fa-sun text-amber-500 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Peau sèche</h3>
                    <p class="text-gray-600 text-sm">Manque d'hydratation, tiraillements, desquamations et aspect terne. Bénéficie de produits nourrissants et protecteurs.</p>
                </div>
                
                <div class="text-center p-6 rounded-lg bg-blue-50">
                    <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                        <i class="fas fa-balance-scale text-blue-500 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Peau mixte</h3>
                    <p class="text-gray-600 text-sm">Zone T grasse (front, nez, menton) et joues normales à sèches. Requiert des soins équilibrants et adaptés à chaque zone.</p>
                </div>
                
                <div class="text-center p-6 rounded-lg bg-pink-50">
                    <div class="bg-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 shadow-md">
                        <i class="fas fa-heart text-pink-500 text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Peau sensible</h3>
                    <p class="text-gray-600 text-sm">Réactive, facilement irritée, avec rougeurs et sensations d'inconfort. Demande des produits doux et apaisants.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.carousel-slide');
            const indicators = document.querySelectorAll('.indicator');
            let currentSlide = 0;
            const slideInterval = 2000; // 2 secondes
            
            // Fonction pour changer de slide
            function goToSlide(n) {
                slides[currentSlide].classList.remove('active');
                indicators[currentSlide].classList.remove('active');
                
                currentSlide = (n + slides.length) % slides.length;
                
                slides[currentSlide].classList.add('active');
                indicators[currentSlide].classList.add('active');
            }
            
            // Défilement automatique
            let slideTimer = setInterval(() => {
                goToSlide(currentSlide + 1);
            }, slideInterval);
            
            // Gestion des clics sur les indicateurs
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    clearInterval(slideTimer);
                    goToSlide(index);
                    
                    // Redémarrage du défilement automatique
                    slideTimer = setInterval(() => {
                        goToSlide(currentSlide + 1);
                    }, slideInterval);
                });
            });
            
            // Pause au survol
            const carousel = document.querySelector('.carousel-container');
            carousel.addEventListener('mouseenter', () => {
                clearInterval(slideTimer);
            });
            
            carousel.addEventListener('mouseleave', () => {
                slideTimer = setInterval(() => {
                    goToSlide(currentSlide + 1);
                }, slideInterval);
            });
        });
    </script>
</body>
</html>

<!-- Articles récents -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800">Derniers articles</h2>
        <a href="{{ route('articles.index') }}" class="text-pink-600 hover:text-pink-700 font-semibold">
            Voir tous →
        </a>
    </div>
    
    <div class="articles-container">
        <div class="articles-scroll" id="articlesScroll">
            @foreach($articlesRecents as $article)
            <article class="article-card">
                @if($article->image)
                <img src="{{ Storage::url($article->image) }}" 
                     alt="{{ $article->titre }}" 
                     class="w-full h-48 object-cover">
                @else
                <div class="w-full h-48 bg-gradient-to-br from-rose-pastel to-peche flex items-center justify-center">
                    <span class="text-6xl">🌸</span>
                </div>
                @endif
                <div class="p-6">
                    <span class="inline-block px-3 py-1 bg-pink-100 text-pink-600 text-sm rounded-full mb-3">
                        {{ $article->categorie->nom }}
                    </span>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">
                        <a href="{{ route('articles.show', $article->slug) }}" class="hover:text-pink-600 transition">
                            {{ $article->titre }}
                        </a>
                    </h3>
                    <p class="text-gray-600 text-sm mb-4">{{ $article->extrait }}</p>
                    <div class="flex items-center text-sm text-gray-500">
                        <span>📅 {{ $article->created_at->format('d/m/Y') }}</span>
                        <span class="mx-2">•</span>
                        <span>👁️ {{ $article->vues }} vues</span>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
        
        <!-- Indicateurs de défilement -->
        <div class="scroll-indicator" id="scrollIndicator">
            <!-- Les points seront générés dynamiquement par JavaScript -->
        </div>
    </div>
</div>

<style>
.articles-container {
    overflow-x: hidden;
    position: relative;
}

.articles-scroll {
    display: flex;
    gap: 2rem;
    transition: transform 0.5s ease-in-out;
    padding-bottom: 1rem;
}

.article-card {
    flex: 0 0 auto;
    width: 350px;
    background: white;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.article-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1);
}

.scroll-indicator {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 8px;
}

.scroll-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #e5e7eb;
    transition: all 0.3s ease;
}

.scroll-dot.active {
    background-color: #ec4899;
    width: 24px;
    border-radius: 4px;
}

@media (max-width: 768px) {
    .article-card {
        width: 300px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.getElementById('articlesScroll');
    const indicatorContainer = document.getElementById('scrollIndicator');
    const articles = scrollContainer.children;
    const cardWidth = 350;
    const gap = 32;
    const totalWidth = cardWidth + gap;
    let currentPosition = 0;
    let autoScrollInterval;
    
    // Créer les indicateurs basés sur le nombre d'articles
    function createIndicators() {
        indicatorContainer.innerHTML = '';
        const visibleCount = getVisibleArticlesCount();
        const totalGroups = Math.ceil(articles.length / visibleCount);
        
        for (let i = 0; i < totalGroups; i++) {
            const dot = document.createElement('div');
            dot.className = 'scroll-dot' + (i === 0 ? ' active' : '');
            dot.setAttribute('data-index', i);
            dot.addEventListener('click', () => {
                scrollToPosition(-(i * totalWidth * visibleCount));
                clearInterval(autoScrollInterval);
                startAutoScroll();
            });
            indicatorContainer.appendChild(dot);
        }
    }
    
    function getVisibleArticlesCount() {
        const containerWidth = scrollContainer.parentElement.offsetWidth;
        return Math.floor(containerWidth / totalWidth);
    }
    
    function updateDots() {
        const visibleCount = getVisibleArticlesCount();
        const currentGroup = Math.abs(currentPosition) / (totalWidth * visibleCount);
        const dots = indicatorContainer.children;
        
        for (let i = 0; i < dots.length; i++) {
            dots[i].classList.toggle('active', i === Math.floor(currentGroup));
        }
    }
    
    function scrollToPosition(position) {
        scrollContainer.style.transform = `translateX(${position}px)`;
        currentPosition = position;
        updateDots();
    }
    
    function startAutoScroll() {
        autoScrollInterval = setInterval(() => {
            const visibleCount = getVisibleArticlesCount();
            const maxScroll = -(totalWidth * (articles.length - visibleCount));
            
            if (currentPosition <= maxScroll) {
                scrollToPosition(0);
            } else {
                scrollToPosition(currentPosition - (totalWidth * visibleCount));
            }
        }, 3000);
    }
    
    scrollContainer.addEventListener('mouseenter', () => {
        clearInterval(autoScrollInterval);
    });
    
    scrollContainer.addEventListener('mouseleave', () => {
        startAutoScroll();
    });
    
    function handleResize() {
        createIndicators();
        updateDots();
    }
    
    window.addEventListener('resize', handleResize);
    createIndicators();
    startAutoScroll();
});
</script>
<!-- CTA Section -->
<div class="bg-pink-600 text-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Prêt à prendre soin de votre peau ?</h2>
        <p class="text-xl mb-8 opacity-90">
            Découvrez nos routines personnalisées et commencez votre voyage vers une peau éclatante
        </p>
        <a href="{{ route('routines.index') }}" 
           class="inline-block bg-white text-pink-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
            Voir les routines skincare
        </a>
    </div>
</div>
<!-- Section Ingrédients Populaires -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-12">
            <!-- Colonne de gauche - Image -->
            <div class="relative">
                <div class="bg-gradient-to-br from-pink-100 to-purple-100 rounded-2xl p-8">
                    <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                         alt="Ingrédients skincare"
                         class="w-full h-80 object-cover rounded-xl shadow-lg">
                </div>
                <!-- Éléments décoratifs -->
                <div class="absolute -top-4 -left-4 w-24 h-24 bg-yellow-100 rounded-full opacity-50"></div>
                <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-pink-100 rounded-full opacity-50"></div>
            </div>

            <!-- Colonne de droite - Description -->
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Découvrez nos<br>
                    <span class="bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent">
                        ingrédients phares
                    </span>
                </h2>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Explorez notre collection d'ingrédients soigneusement sélectionnés pour leurs bienfaits 
                    exceptionnels sur la peau. Chaque composant est choisi pour son efficacité et sa compatibilité 
                    avec différents types de peau.
                </p>
                
                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                            <span class="text-2xl">🌿</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Naturels</h4>
                            <p class="text-sm text-gray-600">Ingrédients purs</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                            <span class="text-2xl">⚡</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-900">Efficaces</h4>
                            <p class="text-sm text-gray-600">Résultats prouvés</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('ingredients.index') }}" 
                   class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 to-purple-500 text-white font-semibold px-8 py-4 rounded-xl hover:from-pink-600 hover:to-purple-600 transition-all transform hover:scale-105">
                    Explorer tous les ingrédients
                    <span class="text-lg">→</span>
                </a>
            </div>
        </div>

        <!-- Section Scroll Horizontal -->
        <div class="mt-16">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-2xl font-bold text-gray-900">Ingrédients populaires</h3>
                <div class="flex gap-3">
                    <button class="scroll-prev bg-gray-100 w-12 h-12 rounded-xl flex items-center justify-center hover:bg-gray-200 transition-colors">
                        ←
                    </button>
                    <button class="scroll-next bg-gray-100 w-12 h-12 rounded-xl flex items-center justify-center hover:bg-gray-200 transition-colors">
                        →
                    </button>
                </div>
            </div>

            <!-- Conteneur de scroll -->
            <div class="relative">
                <div class="ingredients-scroll-container overflow-x-auto pb-8 scrollbar-hide">
                    <div class="flex gap-6 min-w-max">
                        <!-- Carte ingrédient 1 -->
                        <div class="ingredient-card bg-white rounded-2xl shadow-lg p-6 w-80 flex-shrink-0 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="w-16 h-16 bg-pink-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">💧</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 text-lg">Acide Hyaluronique</h4>
                                    <span class="inline-block px-2 py-1 bg-pink-100 text-pink-700 text-xs rounded-full mt-1">
                                        Hydratant
                                    </span>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                                Hydrate intensément la peau en retenant jusqu'à 1000 fois son poids en eau.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Pour peaux sèches et déshydratées</span>
                                
                            </div>
                        </div>

                        <!-- Carte ingrédient 2 -->
                        <div class="ingredient-card bg-white rounded-2xl shadow-lg p-6 w-80 flex-shrink-0 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">✨</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 text-lg">Niacinamide</h4>
                                    <span class="inline-block px-2 py-1 bg-purple-100 text-purple-700 text-xs rounded-full mt-1">
                                        Multi-bénéfices
                                    </span>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                                Régule la production de sébum, réduit les pores et uniformise le teint.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Pour peaux grasses et mixtes</span>
                               
                            </div>
                        </div>

                        <!-- Carte ingrédient 3 -->
                        <div class="ingredient-card bg-white rounded-2xl shadow-lg p-6 w-80 flex-shrink-0 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">🛡️</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 text-lg">Vitamine C</h4>
                                    <span class="inline-block px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full mt-1">
                                        Antioxydant
                                    </span>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                                Protège contre les radicaux libres et illumine le teint.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Pour tous types de peau</span>
                                
                            </div>
                        </div>

                        <!-- Carte ingrédient 4 -->
                        <div class="ingredient-card bg-white rounded-2xl shadow-lg p-6 w-80 flex-shrink-0 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">🌿</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 text-lg">Rétinol</h4>
                                    <span class="inline-block px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full mt-1">
                                        Anti-âge
                                    </span>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                        Stimule le renouvellement cellulaire et réduit rides et ridules.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Pour peaux matures</span>
                                
                            </div>
                        </div>

                        <!-- Carte ingrédient 5 -->
                        <div class="ingredient-card bg-white rounded-2xl shadow-lg p-6 w-80 flex-shrink-0 hover:shadow-xl transition-all">
                            <div class="flex items-start gap-4 mb-4">
                                <div class="w-16 h-16 bg-yellow-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">☀️</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 text-lg">Acide Salicylique</h4>
                                    <span class="inline-block px-2 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full mt-1">
                                        Exfoliant
                                    </span>
                                </div>
                            </div>
                            <p class="text-gray-600 text-sm mb-4">
                                Pénètre les pores pour éliminer les impuretés et prévenir l'acné.
                            </p>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500">Pour peaux acnéiques</span>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Barre de progression -->
                <div class="scroll-progress-bar bg-gray-200 rounded-full h-1 mt-4 overflow-hidden">
                    <div class="scroll-progress bg-pink-500 h-full rounded-full transition-all duration-300" style="width: 20%"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.ingredients-scroll-container {
    scrollbar-width: none;
    -ms-overflow-style: none;
}

.ingredients-scroll-container::-webkit-scrollbar {
    display: none;
}

.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}

.scrollbar-hide::-webkit-scrollbar {
    display: none;
}

.ingredient-card {
    transition: all 0.3s ease;
}

.ingredient-card:hover {
    transform: translateY(-5px);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const scrollContainer = document.querySelector('.ingredients-scroll-container');
    const scrollContent = scrollContainer.querySelector('div');
    const prevButton = document.querySelector('.scroll-prev');
    const nextButton = document.querySelector('.scroll-next');
    const progressBar = document.querySelector('.scroll-progress');

    const cardWidth = 336; // 80 (w-80) + 24 (gap-6)
    const scrollAmount = cardWidth * 2; // Défiler 2 cartes à la fois

    function updateProgress() {
        const scrollWidth = scrollContent.scrollWidth - scrollContainer.clientWidth;
        const scrollPosition = scrollContainer.scrollLeft;
        const progress = (scrollPosition / scrollWidth) * 100;
        progressBar.style.width = `${progress}%`;
    }

    nextButton.addEventListener('click', () => {
        scrollContainer.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });

    prevButton.addEventListener('click', () => {
        scrollContainer.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });

    scrollContainer.addEventListener('scroll', updateProgress);
    updateProgress();

    // Navigation au clavier
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            scrollContainer.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        } else if (e.key === 'ArrowRight') {
            scrollContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        }
    });
});
</script>
@endsection