<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'image' => 'storage/images/models/sports_top.png',
                'oldPrice' => 1750,
                'newPrice' => 1550,
                'title' => 'Майка Nike W NSW ESSNTL RIB CRP TANK',
                'label' => 'New',
            ],
            [
                'id' => 2,
                'image' => 'storage/images/models/futbolka-zhenskaya-s.png',
                'oldPrice' => 1250,
                'title' => 'Вітровка New Balance Jacket NB Athletics',
                'label' => 'Top',
            ],
            [
                'id' => 3,
                'image' => 'storage/images/models/shorts.png',
                'oldPrice' => 1750,
                'newPrice' => 1550,
                'title' => 'Шорти New Balance Short NB Small Logo',
                'label' => 'Sale',
            ],
            [
                'id' => 4,
                'image' => 'storage/images/models/gym_suit.png',
                'oldPrice' => 1750,
                'newPrice' => 1550,
                'title' => 'Вітровка New Balance Jacket NB Athletics',
                'label' => 'Sale',
            ]
            // Додайте більше продуктів за потреби
        ];

        return view('welcome', compact('products'));
    }
}
