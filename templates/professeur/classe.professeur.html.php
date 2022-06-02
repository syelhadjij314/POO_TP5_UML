<div class="card  mt-4 bg-secondary" card-align>
    <div class="card-body">
        <h4 class="card-title">Les classes d'un professeur</h4>
        <p class="card-text">
        <table class="table table-warning table-striped" >
            <thead>
                <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Filere</th>
                    <th scope="col">Niveau</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            
            <?php foreach ($classesProf as $classeProf ):?>
            <tbody>
            <tr>
                <td><?= $classeProf->nom_complet?></td>
                <td><?= $classeProf->libelleClasse?></td>
                <td><?= $classeProf->filiere?></td>
                <td><?= $classeProf->niveau?></td>
                <td>
                    <button type="button" class="btn" style="background-color: grey;">Modifier</button>
                </td>
            </tr>
        </tbody>
        <?php endforeach ?>   
            
        </table>
        </p>
    </div>
</div>
