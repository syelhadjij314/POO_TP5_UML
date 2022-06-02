<div class="card mt-4 bg-secondary">
    <div class="card-body">
        <h4 class="card-title">Liste des Demandes</h4>
        <a href="<?=$Constantes::WEB_ROOT."add-demande"?>" class="btn" style="float: right; margin-top: -2rem;">Ajouter Demande</a>
        <p class="card-text">
        <table class="table table-warning table-striped">
            <thead>
                <tr>
                    <th scope="col">Motifs</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($demandes as $demande):?>
                    <tr>
                        <td><?= $demande->motif?></td>
                        <td><?= $demande->date?></td>
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