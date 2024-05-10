<?php
if ($orderId = $_GET['order_success'] ?? null) {
?>
     <div class="center-content">
         <pre>
            Thank you for your order!
            Please contact us never to get the invoice.

            Your order number is #<?php echo $orderId; ?>
        </pre>
        <a href="/">Home</a>
     </div>
<?php
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plain Commerce</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
</head>
<body>
    <div class="center-content">
        <h1>Plain Commerce</h1>
        Buy our products:
        <br>
        <a href="./products/1.php">Foo</a>
        <br>
        <a href="./products/2.php">Bar</a>
    </div>
</body>
</html>