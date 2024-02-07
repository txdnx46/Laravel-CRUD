<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Laravel CRUD</h2>
            </div>

            <div>
                <a href="{{ route('companies.create') }}" class="btn btn-success">create companies</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success mt-3">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered mt-3">
                <tr>
                    <th>No</th>
                    <th>Company name</th>
                    <th>Company Email</th>
                    <th>Company Address</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->address }}</td>
                        <td>
                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                                <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">X</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
          
                {!! $companies->links('pagination::bootstrap-5') !!}
       
        </div>
    </div>

</body>

</html>
