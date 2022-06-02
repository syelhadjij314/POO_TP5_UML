<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <form  method="POST" action="<?=$action?>">
                                        <div class="section text-start">
                                            <h4 class="mb-4 pb-3">Ajouter une Classe</h4>
                                            <div class="form-group">
                                                <label for="validationCustom03" class="form-label">Libelle Classe</label>
                                                <input type="text" value="<?= isset($classe->libelleClasse)? $classe->libelleClasse: "" ?>" class="form-style" placeholder="" id="" name="libelleClasse">
                                                <i class="input-icon uil uil-at"></i>

                                            </div>
                                            <div class="form-group">
                                                <label for="validationCustom04" class="form-label">Filiere</label>
                                                
                                                <select class="form-select" id="validationCustom04" name="filiere" required>
                                                    <?php foreach ($classes as $maClasse):?>
                                                        <option value="<?= isset($classe->filiere)? $classe->filiere:""?>"> <?= $maClasse->filiere ?> </option>
                                                    <?php endforeach ?>

                                                </select>
                                                <i class="input-icon uil uil-at"></i>

                                            </div>

                                            <div class="form-group">
                                                <label for="validationCustom04" class="form-label">Niveau</label>
                                                <select class="form-select" id="validationCustom04" name="niveau" required>
                                                    <option value="<?= isset($classe->niveau)? $classe->niveau: "" ?>">L1</option>
                                                    <option value="<?= isset($classe->niveau)? $classe->niveau: "" ?>">L2</option>
                                                    <option value="<?= isset($classe->niveau)? $classe->niveau: "" ?>">L3</option>
                                                    <option value="<?= isset($classe->niveau)? $classe->niveau: "" ?>">M1</option>
                                                    <option value="<?= isset($classe->niveau)? $classe->niveau: "" ?>">M2</option>

                                                </select>
                                                <i class="input-icon uil uil-at"></i>

                                            </div>

                                            <button type="submit" value="<?= isset($classe->id)? "Modifier": "Ajouter" ?>"class="btn mt-4">Ajouter</button>
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