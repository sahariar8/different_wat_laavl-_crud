<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <h1 class="text-center">Customer Add Form</h1>
    
                    <form action="{{ isset($customer) ? route('customer.update',$customer->id) : route('customer.store') }}" method="POST"
                          style="background-color: rgba(212, 243, 180, 0.705);padding:20px;">
                          @csrf
                            @if(isset($customer))
                                @method('PUT')
                            @endif
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="{{ old('name', isset($customer) ? $customer->name : '' ) }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email"  value="{{ old('email', isset($customer) ? $customer->email : '') }}">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-check-label" for="exampleCheck1">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone"  value="{{ old('phone', isset($customer) ? $customer->phone : '') }}">
                        </div>
                        <div class="mb-3 ">
                            <label class="form-check-label" for="exampleCheck1">Address</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter Your Address"  value="{{ old('address', isset($customer) ? $customer->address : '') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>
