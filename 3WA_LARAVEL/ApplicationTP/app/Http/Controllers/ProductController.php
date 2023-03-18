<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //



    public function index(Request $re)
    {
        // Tableau de données 
        $products = [
            [
                'nom' => 'Produit 1',
                'description' => 'Description du produit 1',
                'prix' => 10 ,
                'category' => '1'
            ],
            [
                'nom' => 'Produit 2',
                'description' => 'Description du produit 2',
                'prix' => 19,
                'category' => '2'
            ],
            [
                'nom' => 'Produit 3',
                'description' => 'Description du produit 3',
                'prix' => 5,
                'category' => '1'
            ],
            [
                'nom' => 'Produit 4',
                'description' => 'Description du produit 4',
                'prix' => 25,
                'category' => '3'
            ]
        ];
                
        // Filtrer les produits en fonction de la catégorie sélectionnée
    $category = $re->input('cate');
    
    if ($category) {
        $products = array_filter($products, function ($product) use ($category) {
            return $product['category'] == $category;
        });
    }

    // Retourner la vue avec les produits filtrés
    return view('products', [
        'products' => $products,
        'category' => $category,
    ]);

        
    }
    

 
}
