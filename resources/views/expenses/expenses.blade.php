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

    <h1>Overall expenses!</h1>

    @foreach($expenses as $expense)
        <div>
            <p>Name - {{ $expense->name }}<br>Price - {{$expense->price}}€</p>
            <br></br>
        </div>
    @endforeach

</body>
</html>