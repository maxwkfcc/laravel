<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <p>{{ $title }}</p>
    <a href="{{ $route }}">Products</a>
    <div>
        @foreach ($products as $product)
            
            <p>{{ $product }}</p>

        @endforeach
        @foreach ($drinks as $drink)
            
            <p>{{ $drink }}</p>

        @endforeach
    </div>
</body>
</html>