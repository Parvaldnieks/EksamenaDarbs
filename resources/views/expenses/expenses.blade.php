<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overall expenses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="/" class="link2">Back</a>
    <a href="/create-expenses" class="link3">Create an expense</a>
    <a href="/expensesTotal" class="link1">Calculate total expenses</a>

    <h1 class="expenseOverall">Overall expenses!</h1>

    @foreach($expenses as $expense)
            <a href="/show/{{ $expense->id }}" class="smallShow">
                <p class="output">Name - {{ $expense->name }}<br>Price - {{$expense->price}}€</p>
            </a>

            <form action="/expensesDestroy/{{$expense->id}}" method="POST">
                @csrf
                <button type="submit" class="deleteButton">Delete</button>
                </form>

            <br></br>
    @endforeach

</body>
</html>