<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDY - Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: lavender;
        }
        h1 {
            text-align: center;
            font-size: 60pt;
            font-weight: bold;
            color: darkblue;
            height: 150px;
        }
    </style>
</head>

<?php $content = ob_get_clean(); ?>
<?php include_once __DIR__.'/../View/header.php'; ?>

<body>
    <header>
        <?php include_once 'header.php'; ?>
    </header>
    
    <div class="container mt-5">
        <h1>ToClue ToDo ToYou</h1>
         <h2>Todo List</h2>
    <ul>
        <?php foreach ($todo as $todos): ?>
            <li><?= $todos['task'] ?></li>
        <?php endforeach; ?>
    </ul>
    </div>
    
</body>
</html>
