<?php

if (isset($_POST['buy'])) {
    $nextOrderNumber = (new GlobIterator('/opt/data/orders/*.json'))->count() + 1;
    file_put_contents(
        '/opt/data/orders/' . $nextOrderNumber . '.json',
        json_encode($_POST)
    );
    header('Location: /?order_success=' . $nextOrderNumber);
}