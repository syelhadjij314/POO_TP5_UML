<?php
use App\Model\Inscription;

$acs = Inscription::findAll();
?>
<div class="card bg-secondary mt-4">
    <div class="card-body">
        <h4 class="card-title">Liste des Inscriptions</h4>
        <p class="card-text">
        <table class="table table-warning table-striped">
            <thead>
                <tr>
                    <th scope="col">Etat</th>
                    <th scope="col">Etudiant_id</th>
                    <th scope="col">AC_id</th>
                    <th scope="col">annee_scolaire_id</th>
                    <th scope="col">classe_id</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($acs as $ac):?>
                    <tr>
                        <td><?= $ac->etat ?></td>
                        <td><?= $ac->etudiant_id ?></td>
                        <td><?= $ac->ac_id ?></td>
                        <td><?= $ac->annee_scolaire_id ?></td>
                        <td><?= $ac->classe_id ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        </p>
    </div>
</div>