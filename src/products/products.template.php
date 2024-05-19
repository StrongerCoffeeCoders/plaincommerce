<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product <?= $productTitle ?></title>
    <link rel="stylesheet" type="text/css" href="../styles.css"/>
</head>
<body>
    <div class="center-content">
        <h1><?= $productTitle ?></h1>
        <img src="<?= $productImgSrc ?>">

        <div class="max-30vw"><?= $productDescription ?></div>
        <div>Price: $<?= $productPrice ?></div>

        <div>
            <form method="post">
                <input name="quantity" type="number" value="1"/>
                <input name="price" type="hidden" value="<?= $productPrice ?>"/>
                <input name="product_id" type="hidden" value="<?= $productId ?>"/>
                <button name="buy">Buy</button>
            </form>
        </div>

    </div>
</body>
</html>