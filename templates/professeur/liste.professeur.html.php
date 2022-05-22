<div class="card  mt-4 bg-secondary" card-align>
    <div class="card-body">
        <h4 class="card-title">Liste des Professeurs</h4>
        <p class="card-text">
        <table class="table table-warning table-striped" >
            <thead>
                <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $professeur):?>
            <tr>
                <td><?= $professeur->nom_complet?></td>
                <td><?= $professeur->grade?></td>
                <td><button type="button" class="btn" style="background-color: grey;">Affecter Classe</button></td>
                <td><button type="button" class="btn" style="background-color: grey;">Modifier</button></td>

            </tr>
            <?php endforeach ?>                
            </tbody>
        </table>
        </p>
    </div>
</div>
