@extends('layouts.app')

@section('title', $ingredient->nom)

@section('content')

<div class="min-h-screen bg-gray-50 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Breadcrumb --}}
        <nav class="mb-8">
            <a href="{{ route('ingredients.index') }}" class="text-pink-600 hover:text-pink-700 transition-colors">
                ← Retour aux ingrédients
            </a>
        </nav>

        {{-- Carte principale de l'ingrédient --}}
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-8">
            {{-- En-tête --}}
            <div class="bg-gradient-to-r from-pink-500 to-purple-500 p-6 text-white">
                <div class="flex flex-wrap gap-2 mb-3">
                    @if($ingredient->type)
                        <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm">
                            {{ $ingredient->type }}
                        </span>
                    @endif
                    @if($ingredient->types_peau)
                        @foreach(json_decode($ingredient->types_peau) as $typePeau)
                            <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm">
                                {{ $typePeau }}
                            </span>
                        @endforeach
                    @endif
                </div>
                <h1 class="text-3xl font-bold">{{ $ingredient->nom }}</h1>
                @if($ingredient->nom_scientifique)
                    <p class="text-pink-100 italic mt-2">{{ $ingredient->nom_scientifique }}</p>
                @endif
            </div>

            {{-- Contenu --}}
            <div class="p-6">
                {{-- Bienfaits --}}
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-3">✨ Bienfaits</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $ingredient->bienfaits }}</p>
                </div>

                {{-- Utilisation --}}
                @if($ingredient->utilisation)
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-3">💡 Utilisation</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $ingredient->utilisation }}</p>
                </div>
                @endif

                {{-- Précautions --}}
                @if($ingredient->precautions)
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-lg">
                    <h3 class="font-bold text-gray-900 mb-2">⚠️ Précautions</h3>
                    <p class="text-gray-700 text-sm">{{ $ingredient->precautions }}</p>
                </div>
                @endif
            </div>
        </div>

        {{-- Ingrédients similaires --}}
        @if($similaires->count() > 0)
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Ingrédients similaires</h2>
            <div class="grid md:grid-cols-3 gap-4">
                @foreach($similaires as $similaire)
                <a href="{{ route('ingredients.show', $similaire->slug) }}" 
                   class="bg-gray-50 rounded-lg p-4 hover:bg-pink-50 transition-colors group">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <span class="text-lg">🧪</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 group-hover:text-pink-600 transition-colors">
                                {{ $similaire->nom }}
                            </h3>
                            <p class="text-sm text-gray-600">{{ $similaire->type }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>

@endsection