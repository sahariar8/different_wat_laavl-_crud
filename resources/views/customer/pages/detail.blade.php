<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center">Customer Detail</h2>
    <div class="card">
        <h5 class="card-header">Detail</h5>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">{{ $customer->name }}</p>
          <p class="card-text">{{ $customer->email }}</p>
          <p class="card-text">{{ $customer->phone }}</p>
          <p class="card-text">{{ $customer->address }}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</body>
</html>