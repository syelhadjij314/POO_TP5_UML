<?php
    use App\Model\Professeur;
    $professeurs=Professeur::findAll();

?>

<div class="card" card-align>
    <div class="card-body">
        <h4 class="card-title">Liste des Professeurs</h4>
        <p class="card-text">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Grade</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($professeurs as $professeur):?>
            <tr>
                <td><?= $professeur->nom_complet?></td>
                <td><?= $professeur->grade?></td>
            </tr>
            <?php endforeach ?>
                
            </tbody>
        </table>
        </p>
    </div>
</div>
