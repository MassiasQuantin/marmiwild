<?php
// add.php

require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';

$errors = [];
$recipe = ['title' => '', 'description' => ''];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $recipe['title'] = $_POST['title'] ?? '';
    $recipe['description'] = $_POST['description'] ?? '';

    if (empty($recipe['title'])) {
        $errors[] = 'Title is required.';
    }

    if (empty($recipe['description'])) {
        $errors[] = 'Description is required.';
    }

    if (empty($errors)) {
        saveRecipe($recipe);
        header('Location: /');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/style.css">
    <title>Add Recipe</title>
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
        <h2>Add a New Recipe</h2>

        <?php if (!empty($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="add.php" method="post">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($recipe['title']) ?>" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required><?= htmlspecialchars($recipe['description']) ?></textarea>

            <input type="submit" value="Add Recipe">
        </form>
    </div>

    <footer>
        <p>&copy; 2023 My Recipe Book</p>
    </footer>
</body>
</html>
