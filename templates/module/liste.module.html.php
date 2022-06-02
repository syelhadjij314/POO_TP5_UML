<div class="card bg-secondary mt-5">
    <div class="card-body">
        <h4 class="card-title">Liste des Modules</h4>
        <p class="card-text">
        <table class="table table-warning table-striped">
            <thead>
                <tr>
                    <th scope="col">Libelle</th>
                    <th scope="col">Professeur</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($modules as $module):?>
            <tr>
                <td><?= $module->libelleModule?></td>
                <td><?= $module->nom_complet?></td>
                <td>
                    <button type="button" class="btn" style="background-color:grey;">delete</button>
                    <button type="button" class="btn" style="background-color:grey;">modifier</button>
                </td>
            </tr>
            <?php endforeach ?>                
            </tbody>
        </table>
        </p>
    </div>
</div>
