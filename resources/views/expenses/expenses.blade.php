<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overall expenses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="/">Back</a>
    <a href="/create-expenses">Create an expense</a>
    <a href="/totalAmount">Calculate total amount</a>

    <h1>Overall expenses!</h1>

    @foreach($expenses as $expense)
        <div>
            <a href="/show/{{ $expense->id }}">
                <p>Name - {{ $expense->name }}<br>Price - {{$expense->price}}€</p>
            </a>
            <br></br>
        </div>
    @endforeach

</body>
</html>