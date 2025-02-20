<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Gadgets</h1>
        <div class="product-list">
            @foreach($products as $product)
                <div class="product-card">
                    <h2>{{ $product['name'] }}</h2>
                    <p>{{ $product['description'] }}</p>
                    <span>${{ $product['price'] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
