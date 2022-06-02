<div class="card mt-4 bg-secondary">
    <div class="card-body">
        <h4 class="card-title">Liste des AC</h4>
        <p class="card-text">
        <table class="table table-warning table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($acs as $ac):?>
                    <tr>
                        <td><?= $ac->nom_complet?></td>
                        <td><button type="button" class="btn" style="background-color: red;">delete</button>
                            <button type="button" class="btn" style="background-color: grey;">Modifier</button>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
        </p>
    </div>
</div>