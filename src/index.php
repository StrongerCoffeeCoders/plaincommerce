<?php
if ($orderId = $_GET['order_success'] ?? null) {
?>
     <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;row-gap:1rem;">
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
</head>
<body>
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;row-gap:1rem;">
        <h1>Plain Commerce</h1>
        Buy our products:
        <br>
        <a href="./products/1.php">Foo</a>
        <br>
        <a href="./products/2.php">Bar</a>
    </div>
</body>
</html>