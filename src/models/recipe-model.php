<?php

function createConnection(): PDO {
    return new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);
}

function getAllRecipes(): array {
    $connection = createConnection();
    $statement = $connection->query('SELECT id, title FROM recipe');
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getRecipeById(int $id): array {
    $connection = createConnection();
    $query = 'SELECT title, description FROM recipe WHERE id=:id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function saveRecipe(array $recipe): void {
    $connection = createConnection();
    $query = 'INSERT INTO recipe (title, description) VALUES (:title, :description)';
    $statement = $connection->prepare($query);
    $statement->execute([
        'title' => $recipe['title'],
        'description' => $recipe['description']
    ]);
}

function deleteRecipe(int $id): void {
    $connection = createConnection();
    $query = 'DELETE FROM recipe WHERE id = :id';
    $statement = $connection->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
}


