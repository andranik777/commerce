<?php

namespace App\Service;

use App\Classe\Cart;


class  ShoppingCartService {

    private $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function getCart() {
        $number_articles =0;
        foreach ($this->cart->getFull() as $qty) {
            $number_articles += $qty["quantity"];
        }
        return $number_articles;
    }

}