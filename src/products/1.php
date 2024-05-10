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
    <title>Product Foo</title>
</head>
<body>
    <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;row-gap:1rem;">
        <h1>Foo</h1>
        <img src="data:image/avif;base64,AAAAHGZ0eXBhdmlmAAAAAGF2aWZtaWYxbWlhZgAAAOptZXRhAAAAAAAAACFoZGxyAAAAAAAAAABw
    aWN0AAAAAAAAAAAAAAAAAAAAAA5waXRtAAAAAAABAAAAImlsb2MAAAAAREAAAQABAAAAAAEOAAEA
    AAAAAAADMAAAACNpaW5mAAAAAAABAAAAFWluZmUCAAAAAAEAAGF2MDEAAAAAamlwcnAAAABLaXBj
    bwAAABNjb2xybmNseAACAAIABoAAAAAMYXYxQ4EADAAAAAAUaXNwZQAAAAAAAADwAAAA2wAAABBw
    aXhpAAAAAAMICAgAAAAXaXBtYQAAAAAAAAABAAEEgYIDhAAAAzhtZGF0EgAKBxgd+/aaEIAyogYR
    /AMMMGEoXBREcePk9kZHSuMBGLX2pkB1oSSLleY/5ItUnbpznVPHBM2o/uP11h4fsEgkdI3EcKGr
    +zE5OkmP2uGfc4fdinXp3D59cQ2ySKQZT+T8P44uwNC9H7UhOlLCSZY+rqhCqqA77aVCmXAKiPp9
    iI7q2otIeHK+eFfTrZGwJXtkzMsCGiAa96+atZwisGpFmACE1WiYtbzF5oCXlIUzVCJzTC1W2ChM
    ojke2inkpKpDBgTUPVpbK3ZInd+IG8Vc4PPAeKZ0Hl5t6oYEJpfYgQYZ0Iy7ruifSBu82+DHM7eE
    tRCog963UAEZp5+b39ouujCMtkYTA0szlNcNDvkmj3lURdaBL/FvX2u2QvA/IelnWjzxq5BwDekf
    9LtcwORuvOGQHTcSi0twwsLWqVImNn3ygrGPNw9EGQEZCO9rh+9E1cXGl7E6zUyL8uORTpZ2Rh/6
    PiiCG0CrFhC2fwc8ECFfOWLZPCZSAbIoCzxMGgJHVK0L4DF36zF0HkxR9ePIqOOvyTD/eoemrOAJ
    /zYLRDQTllcOKC6UBQbYJm85TIjmsWQ7luhA9Mt4FjhJpDFI4MFex0dA5EWwqAr+/yin9PgTsNik
    FGfJhL+r7JWDbWC6fFBtGU64sCft/KH6gyaCVOiBanE4zQYfN9Wu6IvLr9aQRa8C4R8h2+dCObUE
    HrCKmwpbBWIdZNohZKFutPoW+EfJBGpywJZHN+QAheioesNIdyNMXE0Tm5M3n73vvE3PeYHWvciU
    vq1jUZ5RSS7wxjQjAi65oZTIXrnUCJA3Fp/UYcKh8eMLikPf4KvRAPD2NxdIwgtC64CyftvAr4ZZ
    WHJVd5B4EfpM6a5riL/cTUe+3OvZexCwAvb5IC4xZxbu75U6IgWSy1vHN7BRouETj/db5E+qiGGK
    Fv5hqLhK0BM2V/kZ796WiTAQmimx2DLwJEK65MMDlDLpzROxZjjvNKQ3oDLA4LW9XLIy0J/HRIBg
    VYZVIILezdTlM7HkGG0M3d0IbJ7lsr6rCh29kO67rYnon96v4T9P9gRTEIHFvkhVYhjiAE9HSPA5
    9kTk">
        <div style="max-width:30vw;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget facilisis nibh. Donec posuere purus quis nibh suscipit, nec tempor arcu vehicula. Vestibulum rutrum auctor nisl in ultricies. Morbi eu imperdiet sapien. Donec sollicitudin turpis vel ultrices imperdiet. Duis eget elementum tortor. Suspendisse pharetra arcu nulla, sed cursus dui vulputate sed.</div>
        <div>Price: $100.00</div>

        <div>
            <form method="post">
                <input name="quantity" type="number" value="1"/>
                <input name="price" type="hidden" value="100.00"/>
                <input name="product_id" type="hidden" value="1"/>
                <button name="buy">Buy</button>
            </form>
        </div>

    </div>
</body>
</html>