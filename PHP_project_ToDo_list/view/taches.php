<h1>Liste des Tâches</h1>

<?php if (!empty($taches)): ?>
    <ul>
        <?php foreach ($taches as $tache): ?>
            <li><?= htmlspecialchars($tache['nom']); ?>
            <a href="?action=supprimer&id=<?= $tache['id']; ?>">Supprimer</a>
        </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucune tâche enregistrée pour le moment.</p>
<?php endif; ?>

<?php include_once 'footer.php'; ?>
