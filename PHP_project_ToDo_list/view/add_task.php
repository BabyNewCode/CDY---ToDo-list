<body class="d-flex align-items-center justify-content-center vh-100">
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
            <button class="btn btn-primary" style="background-color: darkblue;">Ajouter</button>
        </form>
        <a href="taches.php" class="mt-3 btn btn-secondary" style="background-color: darkred;">Retour à la Liste</a>
    </div>
</body>
</html>

