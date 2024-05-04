<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="/income" class="incomeBack">Back</a>

    <h1 class="incomeCreate">Create income</h1>
   
    <form method="POST" action="incomeStore">
        @csrf
        
        <label>Salary:
            <input name="salary" type="number" id="textInput" placeholder="Salary" />
        </label>

        <button class="createButton">Create</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var inputField = document.getElementById('textInput');
        var placeholderText = inputField.getAttribute('placeholder');

        inputField.addEventListener('focus', function() {
        if (this.value === placeholderText) {
            this.value = '';
        }
        });

        inputField.addEventListener('blur', function() {
        if (this.value === '') {
            this.value = placeholderText;
        }
        });
        inputField.value = placeholderText;
        });
    </script>

</body>
</html>