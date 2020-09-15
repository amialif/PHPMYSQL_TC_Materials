<?php

$total = 300;

function findTaxDis($total){
	print "Total Amount is : " . $total . "<br>";

	if($total > 200){
		$discountedPrice = ($total * 20) / 100;
		print "Discount price : " . $discountedPrice . "<br>";
	}else{
		print "Your discount price is 0" . "<br>";
	}

	$total = $total - $discountedPrice;
	print "After Discount : " . $total ."<br>" ;
	$tax = ($total * 7)/100;
	print "Tax is : " . $tax . "<br>";

	print "Actual Amount to our shop : " . ($total - $tax);
	

}

findTaxDis($total);

?>