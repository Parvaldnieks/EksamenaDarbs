<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overall income</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="/">Main</a>
    <a href="create-income">Create income</a>

    <h1>Overall income</h1>

    @foreach($income as $income)
        <ul>
            <li>{{ $income->salary }}</li>
                
            <br></br>
        </ul>
    @endforeach

</body>
</html>