<script>
import axios from "axios"
export default {
  data() {
    return {
      currencies: [],
      formData: {
        from: document.getElementById("currency1."),
        to:  document.getElementById("currency2"),
        conversionRate: document.getElementById("conversionRate"),
      }
    }
  },

  mounted() {
        // request for show all currencies the user can use for create a pair 
    axios
      .get('http://127.0.0.1:8000/api/Currency')
      .then((response) => {
        this.currencies = response.data
      })
  //  request for add new currency pair
    axios
      .post('http://127.0.0.1:8000/api/PairPost', this.formData)
      .then((response) => console.log(response))
  console.log(this.formData)
  }

}
</script>
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
           

            <div class="col-md-4">
              <label for="currency1" class="form-label">Currency 1</label>
              <select class="form-select" id="currency1" value=""  required >
                <option value="">Choose...</option>
                <option v-for="currency in currencies" :key="currency.id">{{currency.symbol}}</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid currency.
              </div>
            </div>

            <div class="col-md-4">
              <label for="currency2" class="form-label">Currency 2</label>
              <select class="form-select" id="currency2" required>
                <option value="">Choose...</option>
                <option v-for="currency in currencies" :key="currency.id">{{currency.symbol}}</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid currency.
              </div>
            </div>

            <div class="col-md-4">
              <label for="rate" class="form-label">Rate</label>
              <input type="text" class="form-control" id="conversionRate" placeholder="" required>
              <div class="invalid-feedback">
                rate code required.
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