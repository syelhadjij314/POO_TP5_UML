
<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <div class="card-3d-wrap1 mx-auto im-bg">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <form  method="POST" action="<?=$action?>">
                                        <div class="section text-start">
                                            <h4 class="mb-4 pb-3">Formulaire d'inscription des etudiants</h4>
                                            <div class="col-md-6 form-group">
                                                <label for="validationCustom03" class="form-label">Nom Complet</label>
                                                <input type="text" class="form-style" placeholder="" id="" name="nomComplet">
                                                <i class="input-icon uil uil-at"></i>

                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="validationCustom03" class="form-label">Login</label>
                                                <input type="text" class="form-style" placeholder="" id="" name="login">
                                                <i class="input-icon uil uil-at"></i>

                                            </div>
                                            <div class="form-group">
                                                <label for="validationCustom03" class="form-label">Password</label>
                                                <input type="password" class="form-style" placeholder="" id="" name="password">
                                                <i class="input-icon uil uil-at"></i>

                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="validationCustom04" class="form-label">Sexe</label>
                                                
                                                <select class="form-select" id="validationCustom04" name="sexe" required>
                                                    <?php foreach ($classes as $maClasse):?>
                                                        <option> <?= $maClasse->filiere ?> </option>
                                                    <?php endforeach ?>

                                                </select>
                                                <i class="input-icon uil uil-at"></i>

                                            </div>
                                            <div class="form-group">
                                                <label for="validationCustom04" class="form-label">Choisir une Classe</label>
                                                
                                                <select class="form-select" id="validationCustom04" name="classe" required>
                                                    <?php foreach ($classes as $classe):?>
                                                        <option> <?= $classe->libelleClasse ?> </option>
                                                    <?php endforeach ?>

                                                </select>
                                                <i class="input-icon uil uil-at"></i>

                                            </div>                                               

                                            <button type="submit" class="btn mt-4">Ajouter</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>