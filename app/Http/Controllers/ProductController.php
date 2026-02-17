<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $products = [
        [
            'name' => 'Pumpkin',
            'img' => 'assets/vegetablePics/pumpkin.jpg',
            'price' => 120,
            'page' => 1
        ],
        [
            'name' => 'Kohila',
            'img' => 'assets/vegetablePics/kohila.jpg',
            'price' => 80,
            'page' => 1
        ],
        [
            'name' => 'Banana Blossom',
            'img' => 'assets/vegetablePics/kesel_muwa.jpg',
            'price' => 95,
            'page' => 1
        ],
        [
            'name' => 'Manioc',
            'img' => 'assets/vegetablePics/ma_ala.jpg',
            'price' => 110,
            'page' => 1
        ],
        [
            'name' => 'Bathala',
            'img' => 'assets/vegetablePics/bathala.jpg',
            'price' => 130,
            'page' => 1
        ],
        [
            'name' => 'Onions',
            'img' => 'assets/vegetablePics/luunu.jpg',
            'price' => 250,
            'page' => 1
        ],
        [
            'name' => 'Lime',
            'img' => 'assets/vegetablePics/dehi.jpg',
            'price' => 200,
            'page' => 1
        ],
        [
            'name' => 'Batana',
            'img' => 'assets/vegetablePics/batana.jpg',
            'price' => 85,
            'page' => 1
        ],
        [
            'name' => 'Beans',
            'img' => 'assets/vegetablePics/maaKaral.jpg',
            'price' => 180,
            'page' => 1
        ],
        // Page 2
        [
            'name' => 'Leaks',
            'img' => 'assets/vegetablePics/leaks.jpg',
            'price' => 160,
            'page' => 2
        ],
        [
            'name' => 'Long Beans',
            'img' => 'assets/vegetablePics/longbeans.jpg',
            'price' => 140,
            'page' => 2
        ],
        [
            'name' => 'Niwithiya',
            'img' => 'assets/vegetablePics/kola1.jpg',
            'price' => 60,
            'page' => 2
        ],
        [
            'name' => 'Drumstick',
            'img' => 'assets/vegetablePics/new/drumstick.jpg',
            'price' => 280,
            'page' => 2
        ],
        [
            'name' => 'Garlic',
            'img' => 'assets/vegetablePics/sudu luunu.jpg',
            'price' => 450,
            'page' => 2
        ],
        [
            'name' => 'Ginger',
            'img' => 'assets/vegetablePics/ginger.jpg',
            'price' => 600,
            'page' => 2
        ],
        [
            'name' => 'Cucumber',
            'img' => 'assets/vegetablePics/cucumber.jpg',
            'price' => 90,
            'page' => 2
        ],
        [
            'name' => 'Cauliflower',
            'img' => 'assets/vegetablePics/govamala.jpg',
            'price' => 320,
            'page' => 2
        ],
        [
            'name' => 'Banana Peppers',
            'img' => 'assets/vegetablePics/malumiris.jpg',
            'price' => 240,
            'page' => 2
        ],
        // Page 3
        [
            'name' => 'Lankan Potatos',
            'img' => 'assets/vegetablePics/ala1.jpg',
            'price' => 350,
            'page' => 3
        ],
        [
            'name' => 'Indian Potatos',
            'img' => 'assets/vegetablePics/ala2.jpg',
            'price' => 220,
            'page' => 3
        ],
        [
            'name' => 'Cabbage',
            'img' => 'assets/vegetablePics/gova.jpg',
            'price' => 150,
            'page' => 3
        ],
        [
            'name' => 'Spring Onions',
            'img' => 'assets/vegetablePics/springOnion.jpg',
            'price' => 120,
            'page' => 3
        ],
        [
            'name' => 'Ladies Fingers',
            'img' => 'assets/vegetablePics/ladies fingers.jpg',
            'price' => 110,
            'page' => 3
        ],
        [
            'name' => 'Beetroot',
            'img' => 'assets/vegetablePics/beet.jpg',
            'price' => 190,
            'page' => 3
        ],
        [
            'name' => 'Round Radish',
            'img' => 'assets/vegetablePics/roundRadish.jpg',
            'price' => 130,
            'page' => 3
        ],
        [
            'name' => 'Bottlegourd',
            'img' => 'assets/vegetablePics/Bottlegourd.jpg',
            'price' => 100,
            'page' => 3
        ],
        [
            'name' => 'Nai Kochchi',
            'img' => 'assets/vegetablePics/new/naiKochci.jpg',
            'price' => 900,
            'page' => 3
        ],
    ];

    public function index(Request $request, $page = 1)
    {
        $page = (int) $page;
        $itemsPerPage = 9;
        
        $currentPageProducts = array_filter($this->products, function($product) use ($page) {
            return $product['page'] == $page;
        });

        // Fallback for missing pages or if filtered results are empty
        if (empty($currentPageProducts) && $page > 1) {
             return redirect()->route('products', ['page' => 1]);
        }

        $totalResults = 12 * 6; // Mocking total results from the 6 original pages
        $showingStart = ($page - 1) * $itemsPerPage + 1;
        $showingEnd = $showingStart + count($currentPageProducts) - 1;

        return view('products', [
            'products' => $currentPageProducts,
            'currentPage' => $page,
            'totalPages' => 6, // Total pages from original
            'showingStart' => $showingStart,
            'showingEnd' => $showingEnd,
            'totalResults' => $totalResults
        ]);
    }
}
