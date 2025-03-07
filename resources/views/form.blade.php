<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('insertUser') }}" method="post">
            @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address">
                </div> 
                <button type="submit">Submit</button>    
        </form>
        <a class="btn btn-success" href="{{ route('dashboard') }}">Back to Dashboard<a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>