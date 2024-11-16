<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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

    public function orderHistory(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('cabinet.order_history');
    }

    public function favorite(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('cabinet.favorite', ['products' => $this->products]);
    }

    public function personalData(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('cabinet.personal_data');
    }

    public function myBonuses(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('cabinet.my_bonuses');
    }
}
