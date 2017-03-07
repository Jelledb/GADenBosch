<?php

namespace App;

// this class represents the model for the SESSION cart, NOT the the database cart.

class Cart
{
    public $items = null;
    public $totalqty = 0;
    public $totalprice = 0;

    public function __construct($oldCart)
    {
        if (isset($oldCart)) {

            $this->items = $oldCart->items;
            $this->totalqty = $oldCart->totalqty;
            $this->totalprice = $oldCart->totalprice;
        }

    }
    public function add($item,$id){
        $storedItem =['qty' => 0,'price' => $item->price,'item'=>$item];
        if ($this->items){
            if (array_key_exists($id,$this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalqty++;
        $this->totalprice += $item->price;
    }
}
