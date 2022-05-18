<?php
use App\Model\AC;
$acs=AC::findAll();

?>
<div class="card" card-align>
    <div class="card-body">
        <h4 class="card-title">Liste des AC</h4>
        <p class="card-text">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Role</th>
                    <th scope="col">Login</th>
                    <th scope="col">Password</th>

                </tr>
            </thead>
            <tbody>
            <?php foreach ($acs as $ac):?>
            <tr>
                <td><?= $ac->nom_complet?></td>
                <td><?= $ac->role?></td>
                <td><?= $ac->login?></td>
                <td><?= $ac->password?></td>
            </tr>
            <?php endforeach ?>
                
            </tbody>
        </table>
        </p>
    </div>
</div>
