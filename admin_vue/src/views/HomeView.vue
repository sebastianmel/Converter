<script>
import axios from "axios"
export default {
  data() {
    return {
      currencies: [],
      pairs:[]
    }
  },
  mounted() {
    // request for get and show all existing currencies and currencies pair on home page
    axios
      .get('http://127.0.0.1:8000/api/Currency')
      .then((response) => {
        this.currencies = response.data
      })
    axios
      .get('http://127.0.0.1:8000/api/Pair')
      .then((response) => {
        this.pairs = response.data
      })

    delete{
      mounted() {
        axios
          .delete('http://127.0.0.1:8000/api/CurrencyDelete/{id}')
          .then((response) => console.log(response))
      }
    }
    }

}
</script>

<template>
<div class="my-3 p-3 bg-body rounded shadow-sm">

    <!-- currencies -->
        <h3 class="border-bottom pb-2 mb-4">Currencies added : </h3>

        <div class='mt-4 '>
            <div class="d-flex justify-content-between mb-2">
                
                <div><a href="/addCurrency" class="btn btn-primary">Add currency +</a></div>
                <div><a href="/addPair" class="btn btn-primary">Add currency-paire +</a></div>
            </div>

            
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">symbol</th>                       
                       
                        
                    </tr>
                </thead>
                <tbody>
       
                    <tr v-for="currency in currencies" :key="currency.id">
                        <th scope="row">{{currency.id}}</th>
                        <td>{{currency.name}}</td> 
                        <td>{{currency.symbol}}</td>
                        
                        <td>
                            <a href="/editCurrency" class="btn btn-info">Edit</a>
                            <a href="#" class="btn btn-danger" onclick="">Delete</a>

                            <form id="" action="" method="post">
                                
                                <input type="hidden" name="_method" value="delete">
                            </form>

                        </td>
                    </tr> 

                    
                    

                </tbody>


            </table>
                </div>

<!-- currencies pair -->
        <div>

            <h3 class="border-bottom pb-2 mb-4">Currencies PAIR : </h3>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">FROM</th>
                        <th scope="col">to</th>
                        <th scope="col">rate</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    
                    <tr v-for="pair in pairs" :key="pair.id">
                        <th scope="row">{{pair.id}}</th>
                        <td>{{pair.from}}</td> 
                        <td>{{pair.to}}</td>
                        <td>{{pair.conversionRate}}</td>
                       
                        <td>
                           
                            <a href="#" class="btn btn-danger" onclick="">Delete</a>

                            <form id="" action="" method="post">
                                
                                <input type="hidden" name="_method" value="delete">
                            </form>

                        </td>
                    </tr>
                    

                </tbody>

            </table>
        </div>
     <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 Money Value</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>

    </div>



</template>

<style>
main{

  margin: 0 20px;
}
</style>

