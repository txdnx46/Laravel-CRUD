<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Add company</h2>
            </div>

            <div>
                <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Comoany Name</strong>
                            <input type="text" name="name" class="form-control" placeholder="Company">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Comoany Email</strong>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group mt-3">
                            <strong>Comoany Address</strong>
                            <input type="text" name="address" class="form-control" placeholder="Address">
                            @error('address')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button  type="submit" class="btn btn-primary mt-3">SAVE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>

</html>
