<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>

    <a href="/expenses">Back</a>

    <h1>Create an expense</h1>
   
    <form method="POST" action="store">
        @csrf
        
        <label>
            Name:
            <input name="name"/>
        </label>

        <label>
            Price:
            <input name="price" type="number"/>
        </label>

        <button>Create</button>
    </form>

</body>
</html>