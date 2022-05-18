<?php
    use App\Model\Classe;
    $classes=Classe::findAll();

?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Liste des Classes</h4>
        <p class="card-text">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Libelle</th>
                    <th scope="col">Filiere</th>
                    <th scope="col">Niveau</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classes as $classe) : ?>
                    <tr>
                        <td><?= $classe->libelle ?></td>
                        <td><?= $classe->filiere ?></td>
                        <td><?= $classe->niveau ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
        </p>
    </div>
</div>