<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/style.css">
    <title><?= htmlspecialchars($recipe['title']) ?></title>
</head>
<body>
    <header>
        <div class="container">
            <h1>My Recipe Book</h1>
        </div>
    </header>

    <nav>
        <a href="/">Home</a>
    </nav>

    <div class="container">
        <h2><?= htmlspecialchars($recipe['title']) ?></h2>
        <p><?= htmlspecialchars($recipe['description']) ?></p>
    </div>

    <footer>
        <p>&copy; 2023 My Recipe Book</p>
    </footer>
</body>
</html>
