@extends('layouts.app')
@section('contents')
    Page d'accueil

   <!--Grille de Produit mobile : 1 produit par rangée, tablette : 2 produits par rangée, ordinateur : 4 par rangée-->
   <div class="grid grid-cols-1 md:grid-cols-2 mg:grid-cols-4 gap-8">
        @forelse ($products as $product)
           <x-card-product :product="$product" />  
        @empty
            Il n'y a pas de produits en base
        @endforelse
   
    </div> 
  
    
  Produits


@endsection