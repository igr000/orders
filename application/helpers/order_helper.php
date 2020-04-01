<?php
/*************************************************************
-- Order_helper will compute the total price of the product --
--------------------------------------------------------------
-- Author: Irene Gayle Roque ---------------------------------
*************************************************************/

function totalPrice($price, $quantity){

	$priceTimesTax = ($price*TAX);
	$priceLessTax = $price-$priceTimesTax;
	$totalPrice = $priceLessTax*$quantity;
    
    //returns total price with 2 decimal places and peso sign
	return 'P'.number_format((float)$totalPrice, 2, '.', '');
}
?>