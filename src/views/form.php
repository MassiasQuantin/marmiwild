<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe</title>
</head>
<body>
    <form action="add.php" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required maxlength="255"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
