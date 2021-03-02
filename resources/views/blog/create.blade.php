<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create form</title>
</head>
<body>
    <form method="POST" action="{{ route('add-post') }}">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title"><br><br>
        <label for="body">Body:</label>
        <input type="text" name="body"><br><br>
        <button type="submit">Create</button>
    </form>
</body>
</html>