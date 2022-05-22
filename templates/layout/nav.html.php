<div class="d-flex justify-content-end mt-4">
        <div class="btn-group p-1">
            <button class="btn btn-success dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                Classe
            </button>
            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                <li><a class="dropdown-item" href="<?= $url_base ?>liste-classe">Lister classe</a></li>
                <li><a class="dropdown-item" href="<?= $url_base ?>add-classe">Ajouter classe</a></li>
            </ul>
        </div>

        <div class="btn-group p-1">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false">
                Demande
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
                <li><a class="dropdown-item" href="#">liste demande</a></li>
                <li><a class="dropdown-item" href="#">Faire une demande</a></li>
                <li><a class="dropdown-item" href="#">Annuler demande</a></li>
                <li><a class="dropdown-item" href="#">Suspendre de demande</a></li>
            </ul>
        </div>

        <div class="btn-group p-1">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                Module
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                <li><a class="dropdown-item" href="<?= $url_base ?>liste-module"">Liste Module</a></li>
                <li><a class=" dropdown-item" href="<?= $url_base ?>add-module"">Ajouter module</a></li>
            </ul>
        </div>
        <div class="btn-group p-1">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                Inscription
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                <li><a class="dropdown-item" href="<?= $url_base ?>liste-inscription">liste inscription</a></li>
                <li><a class="dropdown-item" href="<?= $url_base ?>liste-etudiant">Liste des etudiants</a></li>
                <li><a class="dropdown-item" href="<?= $url_base ?>inscription">Inscription</a></li>
                <li><a class="dropdown-item" href="<?= $url_base ?>reinscription">Reinscription</a></li>
                <li><a class="dropdown-item" href="#">Annuler inscription</a></li>
                <li><a class="dropdown-item" href="#">Suspendre inscription</a></li>                
            </ul>
        </div>
        
        <div class="btn-group p-1">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuClickable" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                Professeur
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                <li><a class="dropdown-item" href="<?= $url_base ?>add-professeur">Ajouter professeur</a></li>
                <li><a class="dropdown-item" href="<?= $url_base ?>liste-professeur">Liste professeur</a></li>
            </ul>
        </div>
    </div>