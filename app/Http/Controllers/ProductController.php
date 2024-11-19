<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected array $products = [
        [
            'id' => 1,
            'image' => 'storage/images/models/sports_top.png',
            'oldPrice' => 1750,
            'newPrice' => 1550,
            'title' => 'Майка Nike W NSW ESSNTL RIB CRP TANK',
            'label' => 'New',
            'category' => 'women',
            'subcategory' => 'jackets',
            'last_category' => null,
        ],
        [
            'id' => 2,
            'image' => 'storage/images/models/futbolka-zhenskaya-s.png',
            'oldPrice' => 1250,
            'title' => 'Вітровка New Balance Jacket NB Athletics',
            'label' => 'Top',
            'category' => 'women',
            'subcategory' => 'jackets',
            'last_category' => null,
        ],
        [
            'id' => 3,
            'image' => 'storage/images/models/shorts.png',
            'oldPrice' => 1750,
            'newPrice' => 1550,
            'title' => 'Шорти New Balance Short NB Small Logo',
            'label' => 'Sale',
            'category' => 'women',
            'subcategory' => 'jackets',
            'last_category' => null,
        ],
        [
            'id' => 4,
            'image' => 'storage/images/models/gym_suit.png',
            'oldPrice' => 1750,
            'newPrice' => 1550,
            'title' => 'Вітровка New Balance Jacket NB Athletics',
            'label' => 'Sale',
            'category' => 'women',
            'subcategory' => 'jackets',
            'last_category' => null,
        ]
    ];

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $products = $this->products;
        return view('welcome', compact('products'));
    }

    public function catalog($locale, $category, $subcategory = null, $last_category = null)
    {
        $products = [];

        foreach ($this->products as $product) {
            if ($product['category'] === $category) {
                if ($subcategory && $product['subcategory'] === $subcategory) {
                    if ($last_category && $product['last_category'] === $last_category) {
                        $products[] = $product;
                    } elseif (!$last_category) {
                        $products[] = $product;
                    }
                } elseif (!$subcategory) {
                    $products[] = $product;
                }
            }
        }

        $breadcrumbs = [
            'category' => $category,
            'subcategory' => $subcategory,
            'last_category' => $last_category,
        ];

        return view('catalog', compact('products', 'breadcrumbs'));
    }

    public function product($locale, $id)
    {
        $product = null;

        foreach ($this->products as $item) {
            if ($item['id'] == $id) {
                $product = $item;
                break;
            }
        }

        $products = $this->products;

        return view('product', compact('product', 'products'));
    }


    public function shoppingCart()
    {
        return view('shopping-cart');
    }

    public function compare()
    {
        return view('product-comparison');
    }
}
