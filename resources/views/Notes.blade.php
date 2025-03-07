<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
            <a class="btn btn-success" href="{{ route('dashboard') }}">Back to Dashboard<a>
            <h1>Notes on {{ $user->name }} from {{ $user->address }}</h1>
                        <form action="{{ route('addNotes', $user->id) }}" method="post">
                            <div class="mb-3">
                                @csrf

                                <input class="container mt-5" type="text" name="notes" id="notes" placeholder="What do you want to say?">

                                </input>
                            </div>
                            <button type="submit">Submit</button>
                        </form>
                        <h1>Submitted:</h1>
                        @foreach ($tbl_user_notes as $note)
                            @if ($note->user_id == $user->id)
                                <p>{{ $note->notes }}</p>
                            @endif
                        @endforeach

        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>