<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Tâche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="d-flex align-items-center justify-content-center vh-100">
    <?php $content = ob_get_clean(); ?>
    <?php include_once __DIR__.'/../View/header.php'; ?>
    <div class="text-center">
        <h1 class="fw-bold mb-5">Ajouter une Tâche</h1>
        <form action="/add-task" method="post">
            <div class="mb-3">
                <label for="task" class="form-label">Tâche :</label>
                <input type="text" id="task" name="task" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="due_date" class="form-label">Date d'échéance :</label>
                <input type="date" id="due_date" name="due_date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: darkblue;">Ajouter</button>
        </form>
        <a href="taches.php" class="mt-3 btn btn-secondary" style="background-color: darkred;">Retour à la Liste</a>
    </div>
</body>
</html>
