<?php
//get the data from the form
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];

//calculate the discount and discunted price
$discount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount;

//apply currency formatting to the dollar and percent amounts
$list_price_formatted = "$" . number_format($list_price, 2);
$discount_percent_formatted = $discount_percent . "%";
$discount_formatted = "$" . number_format($discount, 2);
$discount_price_formatted = "$" . number_format($discount_price, 2);
?>

<!DOCTYPE html>
<!--
@autor Ivan Peev
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="content">
            <h1>Product Description</h1>

            <label>Product Description:</label>
            <span><?php echo $product_description; ?></span><br>

            <label>List Price:</label>
            <span><?php echo $list_price_formatted; ?></span><br>

            <label>Standart Discount:</label>
            <span><?php echo $discount_percent_formatted; ?></span><br>

            <label>Discount Amount:</label>
            <span><?php echo $discount_formatted; ?></span><br>

            <label>Discount Price:</label>
            <span><?php echo $discount_price_formatted; ?></span><br>
        </div>
    </body>
</html>



