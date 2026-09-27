<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product Creation</title>
</head>
<body>
    <h1>New Product Creation</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea>
        </div>

        <button type="submit">Create Product</button>
    </form>
</body>
</html>