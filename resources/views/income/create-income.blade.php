<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>

    <a href="/income">Back</a>

    <h1>Create income</h1>
   
    <form method="POST" action="store">
        @csrf
        
        <label>
            Salary:
            <input name="salary"/>
    </label>

        <button>Create</button>
    </form>

</body>
</html>