<div class="card bg-secondary mt-4">
    <div class="card-body">
        <h4 class="card-title">Liste des Inscriptions</h4>
        <p class="card-text">
        <table class="table table-warning table-striped">
            <thead>
                <tr>
                    <th scope="col">Etudiants</th>
                    <th scope="col">Classes</th>
                    <th scope="col">Filieres</th>
                    <th scope="col">Niveaux</th>
                    <th scope="col">Etat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inscriptions as $inscription):?>
                    <tr>
                        <td><?= $inscription->nom_complet ?></td>
                        <td><?= $inscription->libelleClasse ?></td>
                        <td><?= $inscription->filiere ?></td>
                        <td><?= $inscription->niveau ?></td>
                        <td><?= $inscription->etat ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        </p>
    </div>
</div>