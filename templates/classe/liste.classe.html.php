<div class="card mt-4 bg-secondary">
    <div class="card-body">
        <h4 class="card-title">Liste des Classes</h4>
        <button type="button" class="btn" style="float: right; margin-top: -2rem;">Ajouter Classe</button
        <p class="card-text">
        <table class="table table-warning table-striped">
            <thead>
                <tr>
                    <th scope="col">Libelle classe</th>
                    <th scope="col">Filiere</th>
                    <th scope="col">Niveau</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $classe):?>
                    <tr>
                        <td><?= $classe->libelleClasse?></td>
                        <td><?= $classe->filiere ?></td>
                        <td><?= $classe->niveau ?></td>
                        <td><button type="button" class="btn" style="background-color: red;">delete</button></td>
                        <td><button type="button" class="btn" style="background-color: grey;">Modifier</button></td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
        </p>
    </div>
</div>