<?php
if (isset($_POST['buy'])) {
    $nextOrderNumber = (new GlobIterator('/opt/data/orders/*.json'))->count() + 1;
    file_put_contents(
      '/opt/data/orders/' . $nextOrderNumber . '.json',
      json_encode($_POST)
    );

    header('Location: /?order_success=' . $nextOrderNumber);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product bar</title>
</head>

<body>
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;row-gap:1rem;">
        <h1>bar</h1>
        <img src="data:image/avif;base64,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
    caftMg3or2jwdd88LsSTPoGHq10=">

        <div style="max-width:30vw;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget facilisis nibh. Donec posuere purus quis nibh suscipit, nec tempor arcu vehicula. Vestibulum rutrum auctor nisl in ultricies. Morbi eu imperdiet sapien. Donec sollicitudin turpis vel ultrices imperdiet. Duis eget elementum tortor. Suspendisse pharetra arcu nulla, sed cursus dui vulputate sed.</div>
        <div>Price: $200.00</div>

        <div>
            <form method="post">
                <input name="quantity" type="number" value="1"/>
                <input name="price" type="hidden" value="200.00"/>
                <input name="product_id" type="hidden" value="2"/>
                <button name="buy">Buy</button>
            </form>
        </div>

    </div>
</body>
</html>