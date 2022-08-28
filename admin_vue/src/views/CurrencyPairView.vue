<template>
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img src="https://emojiguide.com/wp-content/uploads/platform/windows/43392.png" title="Title of image" alt="translate currency image"/>

      <h2>form</h2>
      <p class="lead">To add a new pair, the currencies must already be added to the database</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">

        
      </div>
      <div class="py-5 text-center">
        <h4 class="mb-3">Create your new Currency Pair :</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
           

            <div class="col-md-5">
              <label for="country" class="form-label">Currency 1</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Currency 2</label>
              <select class="form-select" id="state" required>
                <option value="">Choose...</option>
                <option>California</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Rate</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          

          


          <button class="w-100 btn btn-primary btn-lg" type="submit">Add currency pair</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 Money Value</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

</template>