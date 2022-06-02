<div class="card mt-4 bg-secondary">
    <div class="card-body">
        <h4 class="card-title">Liste des Etudiants</h4>
        <p class="card-text">
        <table class="table table-warning table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Sexe</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($etudiants as $etudiant):?>
                    <tr>
                        <td><?= $etudiant->nom_complet?></td>
                        <td><?= $etudiant->adresse?></td>
                        <td><?= $etudiant->sexe?></td>
                        <td><button type="button" class="btn" style="background-color: red;">ARCHIVER</button>
                            <button type="button" class="btn" style="background-color: grey;">Modifier</button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
        </p>
    </div>
</div>