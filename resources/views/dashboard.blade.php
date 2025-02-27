<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body>
    <h1>This is the dashboard</h1>
    <div class="container mt-5">
        <div class="border">
            <div class="d-flex justify-betweem">
                <h1>Users</h1>
                <a class="ms-auto btn btn-primary" href="{{ route('form') }}"> Add User </a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Action</th>
                        <th>Edit</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                        @foreach ($tbl_user as $user)
                        <tr>
                            <th>
                                {{ $user->id }}
                            </th>
                            <th>
                                {{ $user->name }}
                            </th>
                            <th>
                                {{ $user->address }}
                            </th>
                            <th>
                                <form action="{{ route('deleteFromID', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-warning" >Delete</button>
                                </form>
                            </th>
                            <th>
                             <a class="ms-auto btn btn-primary" href="{{ route('editForm', $user->id) }}"> Edit User </a>
                            </th>

                        </tr>
                        @endforeach
                </tbody>
            </table>
            
        </div>
        
    </div>

</body>
</html>