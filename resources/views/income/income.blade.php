<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overall income</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="/" class="link1">Back</a>
    <a href="/create-income" class="incomeLink3">Create income</a>
    <a href="/incomeTotal" class="link2">Calculate total income</a>

    <h1 class="incomeOverall">Overall income!</h1>

    @foreach($income as $income)
        <div>
            <p class="output">{{ $income->salary }}€</p>

                <form action="/incomeDestroy/{{$income->id}}" method="POST">
                    @csrf
                    <button type="submit" class="deleteButton">Delete</button>
                </form>
        </div>
    @endforeach

</body>
</html>