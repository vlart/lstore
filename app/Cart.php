<?php

namespace App;


class Cart
{
    public $items = null; //добавляем группу товаров
    public $totalQty = 0; //кол-во товаров
    public $totalPrice = 0; // общая цена

    public function __construct($oldCart)
    {
        if ($oldCart){
            $this->items = $oldCart->items;  // товар передается корзине
            $this->totalQty = $oldCart->totalQty;   // количество передается корзине
            $this->totalPrice = $oldCart->totalPrice;    // общая цена передается корзине
        }
    }

    public function add($item, $id){
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item ]; // массив продукта
        if($this->items) {
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item ->price * $storedItem['qty'];

        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice+= $item->price;
    }
}
