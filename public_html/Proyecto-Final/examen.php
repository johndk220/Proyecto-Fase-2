<?php
 
// Configure State IVU and Municipal IVU
$Stax = 0.11;
$Mtax = 0.005;

class Product {
public $Name;
public $price;

   public function __construct($Name= '', $price = '') {
        $this->Name = $Name;
        $this->price = $price;
   }
}
 
function calculatePrice($Name, $price){
 $subtotal=0;
 $taxes = ($price*$Stax) + ($price*$mtax);
 return $price + $taxes;
}
$products = [];
 
$products[] = new Product('iPad Pro', 600);
$products[] = new Product('Samsung Explosive Phone', 800);
$products[] = new Product('The Best Phone: iPhone X', 1000);
 
//calculateAndShow($products);
 
 calculatePrice($name, $price);
 
 
 
?>






?>