<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class BoutiqueController extends Controller
{
    // Page d'accueil : affiche les catégories et les produits
    public function index()
    {
        //  $categories = Category::all();
        //     $products = Product::all();

        // Récupérer 6 produits de la base à l'aide du model product
            $products = Product::Limit(6)->get();
        return view('index', compact('products'));
    }

     // Page d'accueil : affiche les catégories et les produits
    public function show(string $id)
    {
      // Sélectionner un produit à partir de son identifiant
            $product=Product::find($id);
            return view('detail', compact('product'));
    }

}