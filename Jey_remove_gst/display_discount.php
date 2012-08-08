<?php
    // get the data from the form
    $product_description = $_POST['product_description'];
    $nPriceWithTax = $_POST['price_with_tax'];
    $nTax = $_POST['tax_percent'];
    
    // calculate the tax to be removed
	$nOriginal = $nPriceWithTax / (1 + $nTax * .01);
	
    // apply currency formatting to the dollar and percent amounts
	$sPriceWithTax = "$" . number_format($nPriceWithTax, 2);
	$sOriginal = "$" . number_format($nOriginal, 2);
	$sTaxAmount = "$" . number_format($nPriceWithTax - $nOriginal, 2);
	$sTax = number_format($nTax . "%");
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Tax Removal Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
    <div id="content">
        <h1>Tax Removal Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>Price with Tax:</label>
        <span><?php echo $sPriceWithTax; ?></span><br />

        <label>Remove Tax:</label>
        <span><?php echo $sTax . "%"; ?></span><br />

        <label>Amount Removed:</label>
        <span><?php echo $sTaxAmount; ?></span><br />

        <label>Original Price:</label>
        <span><?php echo $sOriginal; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>