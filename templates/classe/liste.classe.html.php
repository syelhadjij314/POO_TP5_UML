<div class="card mt-4 bg-secondary">
    <div class="card-body">
        <h4 class="card-title">Liste des Classes</h4>
        <a class="btn" href="<?= $url_base ?>add-classe" style="float: right; margin-top: -3rem;">
            <i class="fa-solid fa-plus"></i>
        </a>
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
                
                <?php foreach ($classes as $classe) : ?>
                    <tr>
                        <td><?= $classe->libelleClasse ?></td>
                        <td><?= $classe->filiere ?></td>
                        <td><?= $classe->niveau ?></td>
                        <td id="actions">
                            <form action="<?= $url_base ?>delete-classe" method="POST">
                                <input type="hidden" name="id" value="<?= $classe->id ?>">
                                <button type="submit" id="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                            <a href="<?= $Constantes::WEB_ROOT."edit-classe/".$classe->id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        </p>
    </div>
</div>