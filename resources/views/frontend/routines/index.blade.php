@extends('layouts.app')

@section('title', 'Quiz Peau - Découvre ta routine')

@section('content')
<div class="bg-gradient-to-r from-rose-pastel via-peche to-vert-mint py-12 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
        🌸 Quiz Peau Pour Découvre ta routine
    </h1>
    <p class="text-lg text-gray-700 mb-8">
        Répondez à quelques questions pour découvrir la routine adaptée à votre type de peau
    </p>
</div>

<!-- Section Informations - Ajoutée dans le div vide -->
<div class="bg-white py-12">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Carte 1 -->
            <div class="text-center p-6 bg-rose-50 rounded-2xl hover:shadow-lg transition-all">
                <div class="text-4xl mb-4">🔍</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Analyse Personnalisée</h3>
                <p class="text-gray-600">Notre quiz analyse vos réponses pour identifier votre type de peau avec précision.</p>
            </div>
            
            <!-- Carte 2 -->
            <div class="text-center p-6 bg-peche/20 rounded-2xl hover:shadow-lg transition-all">
                <div class="text-4xl mb-4">💫</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Recommandations Sur Mesure</h3>
                <p class="text-gray-600">Recevez une routine complète adaptée à vos besoins spécifiques.</p>
            </div>
            
            <!-- Carte 3 -->
            <div class="text-center p-6 bg-vert-mint/20 rounded-2xl hover:shadow-lg transition-all">
                <div class="text-4xl mb-4">⏱️</div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Résultats Immédiats</h3>
                <p class="text-gray-600">Obtenez vos résultats instantanément après avoir répondu aux questions.</p>
            </div>
        </div>
        
        <!-- Section statistiques -->
        <div class="mt-12 text-center bg-gray-50 rounded-2xl p-8">
            <h3 class="text-2xl font-bold text-gray-800 mb-6">🎯 Pourquoi connaître son type de peau ?</h3>
            <div class="grid md:grid-cols-2 gap-6 text-left max-w-4xl mx-auto">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-rose-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-rose-600">✓</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Éviter les erreurs</h4>
                        <p class="text-gray-600 text-sm">Choisir les bons produits évite les irritations et les problèmes cutanés.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-rose-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-rose-600">✓</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Optimiser les résultats</h4>
                        <p class="text-gray-600 text-sm">Des produits adaptés = une peau plus saine et plus belle.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-rose-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-rose-600">✓</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Économiser du temps et de l'argent</h4>
                        <p class="text-gray-600 text-sm">Ne gaspillez plus d'argent dans des produits inefficaces.</p>
                    </div>
                </div>
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-rose-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <span class="text-rose-600">✓</span>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800 mb-2">Routine simplifiée</h4>
                        <p class="text-gray-600 text-sm">Une routine adaptée est plus facile à suivre au quotidien.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-2xl mx-auto px-4 py-12 bg-white rounded-2xl shadow-lg">
    <!-- Le reste de votre code existant... -->
    <form id="skinQuiz">
        <!-- Question 1 -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2">1️⃣ Votre peau brille-t-elle souvent ?</h2>
            <select name="q1" class="w-full border rounded-lg p-2">
                <option value="">-- Choisir --</option>
                <option value="grasse">Oui, surtout la zone T</option>
                <option value="mixte">Parfois, certaines zones seulement</option>
                <option value="seche">Rarement, ma peau est sèche</option>
                <option value="sensible">Ma peau réagit facilement</option>
            </select>
        </div>

        <!-- Question 2 -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2">2️⃣ Votre peau tiraille-t-elle souvent ?</h2>
            <select name="q2" class="w-full border rounded-lg p-2">
                <option value="">-- Choisir --</option>
                <option value="seche">Oui, surtout après la douche</option>
                <option value="mixte">Seulement sur certaines zones</option>
                <option value="grasse">Non, jamais</option>
                <option value="sensible">Parfois, surtout si je change de produit</option>
            </select>
        </div>

        <!-- Question 3 -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2">3️⃣ Votre peau réagit facilement aux produits ?</h2>
            <select name="q3" class="w-full border rounded-lg p-2">
                <option value="">-- Choisir --</option>
                <option value="sensible">Oui, très facilement</option>
                <option value="mixte">Parfois</option>
                <option value="grasse">Rarement</option>
                <option value="seche">Parfois, mais peu</option>
            </select>
        </div>

        <button type="button" onclick="showRoutine()" class="bg-rose-400 text-white px-6 py-3 rounded-lg hover:bg-rose-500 transition">
            Découvrir ma routine
        </button>
    </form>

    <div id="result" class="mt-8 hidden p-6 bg-green-50 rounded-lg">
        <h3 class="text-2xl font-bold mb-4">Votre type de peau est : <span id="skinType"></span></h3>
        <div>
            <h4 class="text-lg font-semibold">🌞 Routine du matin :</h4>
            <ul id="morningRoutine" class="list-disc list-inside text-gray-700 mb-4"></ul>

            <h4 class="text-lg font-semibold">🌙 Routine du soir :</h4>
            <ul id="eveningRoutine" class="list-disc list-inside text-gray-700"></ul>
        </div>
    </div>
</div>

<script>
    const routines = {
        grasse: {
            morning: ['Nettoyer le visage', 'Tonifier la peau', 'Hydrater légèrement', 'Protection solaire SPF30'],
            evening: ['Démaquiller / nettoyer', 'Exfoliation douce', 'Hydrater ou gel léger']
        },
        seche: {
            morning: ['Nettoyer avec crème douce', 'Tonifier légèrement', 'Sérum hydratant', 'Crème riche', 'Protection solaire SPF30+'],
            evening: ['Nettoyer doucement', 'Sérum nourrissant', 'Crème de nuit riche']
        },
        mixte: {
            morning: ['Nettoyer zone T et joues séparément', 'Tonifier', 'Hydrater zones sèches', 'Protection solaire SPF30'],
            evening: ['Nettoyer doucement', 'Sérum ciblé', 'Hydrater équilibré']
        },
        sensible: {
            morning: ['Nettoyer en douceur', 'Tonique apaisant', 'Hydrater léger', 'Protection solaire minérale'],
            evening: ['Nettoyer doucement', 'Sérum apaisant', 'Crème de nuit légère']
        }
    };

    function showRoutine() {
        const q1 = document.querySelector('select[name="q1"]').value;
        const q2 = document.querySelector('select[name="q2"]').value;
        const q3 = document.querySelector('select[name="q3"]').value;

        let type = 'mixte'; // valeur par défaut

        // Logique simple pour déterminer le type
        if(q1 === 'grasse') type = 'grasse';
        else if(q2 === 'seche') type = 'seche';
        else if(q3 === 'sensible') type = 'sensible';

        document.getElementById('skinType').textContent = type.charAt(0).toUpperCase() + type.slice(1);
        const morningList = document.getElementById('morningRoutine');
        const eveningList = document.getElementById('eveningRoutine');

        morningList.innerHTML = routines[type].morning.map(item => `<li>${item}</li>`).join('');
        eveningList.innerHTML = routines[type].evening.map(item => `<li>${item}</li>`).join('');

        document.getElementById('result').classList.remove('hidden');
        window.scrollTo({ top: document.getElementById('result').offsetTop - 20, behavior: 'smooth' });
    }
</script>
@endsection