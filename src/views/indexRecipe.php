<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/style.css">
    <title>List of Recipes</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>My Recipe Book</h1>
        </div>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="/add.php">Add Recipe</a>
    </nav>

    <div class="container">
        <h2>List of Recipes</h2>
        <ul class="recipe-list">
            <?php foreach ($recipes as $recipe) : ?>
            <li>
                <a href="show.php?id=<?= htmlspecialchars($recipe['id']) ?>">
                    <?= htmlspecialchars($recipe['title']) ?>
                </a>
                - <a href="delete.php?id=<?= htmlspecialchars($recipe['id']) ?>" class="delete-link">Delete</a>
            </li>
            <?php endforeach ?>
        </ul>
    </div>

    <footer>
        <p>&copy; 2023 My Recipe Book</p>
    </footer>
</body>
</html>
