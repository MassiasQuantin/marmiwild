<?php

require_once 'config.php';
require __DIR__.'/src/models/recipe-model.php';

$id = $_GET['id'];
if (empty($id)) {
    die("Wrong input parameter");
}

$recipe = getRecipeById($id);

if (!isset($recipe['title']) || !isset($recipe['description'])) {
    header("HTTP/1.1 404 Not Found");
    die("Recipe not found");
}

require __DIR__.'/src/views/showRecipe.php';
