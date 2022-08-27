<template>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
	<img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="50" height="50" />
    <a class="navbar-brand" href="/">Money Value</a>
	
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
			<RouterLink class="nav-link " aria-current="page" to="/">Home</RouterLink>
        </li>
        <li class="nav-item">
			<RouterLink class="nav-link " to="/about">About</RouterLink>
        </li>
        
       
      </ul>
      
    </div>
  </div>
</nav>

</template>


<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>

