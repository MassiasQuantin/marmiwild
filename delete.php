<?php
// Inclure les fichiers nécessaires
require_once 'config.php';
require __DIR__ . '/src/models/recipe-model.php';

// Récupérer l'ID de la recette à supprimer
$id = $_GET['id'] ?? null;

// Vérifier si l'ID est fourni
if ($id && $_SERVER["REQUEST_METHOD"] === 'POST') {
    // Appeler la fonction pour supprimer la recette
    deleteRecipe($id);

    // Rediriger vers la page principale après la suppression
    header('Location: /');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/style.css">
    <title>Delete Recipe</title>
</head>
<body>
    <div class="container">
        <h1>Delete Recipe</h1>
        <?php if ($id): ?>
            <p>Are you sure you want to delete this recipe?</p>
            <form action="delete.php?id=<?= htmlspecialchars($id) ?>" method="post">
                <button type="submit">Delete</button>
                <a href="/">Cancel</a>
            </form>
        <?php else: ?>
            <p>Recipe not found.</p>
            <a href="/">Return to Home</a>
        <?php endif; ?>
    </div>
</body>
</html>
