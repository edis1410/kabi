<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    private $products = [
        1 => [
            'id' => 1,
            'name' => 'Izdelek 1',
            'subtitle' => 'Podnaslov izdelka 1',
            'description' => 'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.<br><br>Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ],
        2 => [
            'id' => 2,
            'name' => 'Izdelek 2',
            'subtitle' => 'Podnaslov izdelka 2',
            'description' => 'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.<br><br>Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.<br><br>Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ],
        3 => [
            'id' => 3,
            'name' => 'Izdelek 3',
            'subtitle' => 'Podnaslov izdelka 3',
            'description' => 'Odstavek 1. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.<br><br>Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.<br><br>Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.<br><br>Odstavek 2. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
        ],
        4 => [
            'id' => 4,
            'name' => 'Izdelek 4',
            'subtitle' => 'Podnaslov izdelka 4',
            'description' => 'Opis izdelka 4'
        ],
        5 => [
            'id' => 5,
            'name' => 'Izdelek 5',
            'subtitle' => 'Podnaslov izdelka 5',
            'description' => 'Opis izdelka 5'
        ],
    ];

    public function index()
    {
        return view('products.index', ['products' => $this->products]);
    }

    public function show($id)
    {
        $product = $this->products[$id] ?? null;
        abort_if(!$product, 404);
        return view('products.show', ['product' => $product]);
    }
}

