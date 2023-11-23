<?php
require_once 'config.php';
require __DIR__.'/src/models/recipe-model.php';

$recipes = getAllRecipes();

require __DIR__.'/src/views/indexRecipe.php';
?>
