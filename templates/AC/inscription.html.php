<div class="card bg-secondary mt-4">
    <div class="card-body">
        <h4 class="card-title">Formulaire d'inscription des etudiants</h4>
        <p class="card-text">
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Nom comple</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                <div class="invalid-feedback">
                    Please provide a valid nom.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Login</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="invalid-feedback">
                    Please provide a valid login.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Password</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="invalid-feedback">
                    Please provide a valid password.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Matricule</label>
                <input type="text" class="form-control" id="validationCustom02" required>
                <div class="invalid-feedback">
                    Please provide a valid matricule.
                </div>
            </div>

            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please provide a valid adresse.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Sexe</label>
                <input type="text" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Please provide a valid sexe.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">State</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-success" type="submit">Submit form</button>
            </div>
        </form>
        </p>
    </div>
</div>