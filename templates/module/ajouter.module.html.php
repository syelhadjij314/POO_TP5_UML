<div class="card bg-secondary mt-4 justify-content-center align-items-center">
    <div class="card-body">
        <h4 class="card-title">Ajouter un module</h4>
        <p class="card-text">
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label">Libelle Module</label>
                <input type="text" class="form-control" id="validationCustom01" required>
                <div class="invalid-feedback">
                    Please provide a valid nom.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom04" class="form-label">Choisir un Professeur</label>
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