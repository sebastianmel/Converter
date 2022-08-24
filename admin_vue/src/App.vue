<script setup>
import { RouterLink, RouterView } from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<div id='app' class='ar-container'>
        
        <section>
            <h1><i class="fas fa-balance-scale"></i> Currency Converter</h1>
            <h3 id='output-conversion'>{{ output }}</h3>
        </section>

        
        <section class='toggle-this'>
            <legend class="ar-legend">Amount:</legend>
            <input type="number" placeholder="Amount to convert" v-model='currencyAmount'>
        </section>
        
        
        <section class='toggle-this'>
            <legend class="ar-legend">From:</legend>
            <select v-model='currencyFrom'>
                <option v-for='item in datalist' :value='item.c'>{{ item.c }} {{ item.co }} {{ item.sy }}</option>
            </select>
        </section>

        
        <section class='toggle-this'>
            <legend class="ar-legend">to:</legend>
            <select v-model='currencyTo'>
                <option v-for='item in datalist' :value='item.c'>{{ item.c }} {{ item.co }} {{ item.sy }}</option>
            </select>
        </section>
        
		
        <section>
            <p>Built by <a href='http://arilaverty.com'>Ari Laverty</a></p>
        </section>
        
    </div>
  


</template>


<style>
@import url('https://fonts.googleapis.com/css?family=Barlow:300');

body {
	font-family: 'Barlow', sans-serif;
	background: #ff9966;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ff5e62, #ff9966);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ff5e62, #ff9966); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	height: 100vh;
	color: #595959;
  
}

*:focus {
	outline: none;
  
}

h3 {
	color: salmon;
	text-align: center;
}

#output-conversion {
  height: 30px;
  
}

.ar-container {
	margin: auto;
	position: relative;
  left: 50%;
	top: 10%;
	padding: 10px;
  border:3px blue solid;
	background-color: white;
	width: 500px;
	border-radius: 4px;
	-webkit-box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.75);
	-moz-box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.75);
	box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.75);
}

.ar-container h1 {
	text-align: center;
}

.ar-button {
	width: 100%;
	background-color: salmon;
	padding: 15px;
	border: none;
	border-radius: 4px;
	color: white;
}

.ar-button:hover {
	animation-name: btn-hover;
	animation-duration: 1s;
}

@keyframes btn-hover {
	10% {
		background-color: lightsalmon;
	}
}

.output-defined {
	color: salmon;
}

p {
	text-align: center;
	color: #898989;
	font-size: 10px;
}

a {
	color: salmon;
	text-decoration: none;
}

a:hover {
	color: lightsalmon;
	text-decoration: none;
}

section {
	margin: 10px;
  
}

input,
select {
	width: 100%;
	padding: 10px;
	height: 40px;
	background-color: white;
	border: 1px solid lightgray;
	border-radius: 4px;
	text-align: center;
	text-align-last: center;
}
</style>


