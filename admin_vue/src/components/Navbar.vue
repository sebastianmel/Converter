<template>
  <div class="header">
    <nav class="navbar navbar-light bg-light navbar-expand-lg">
        <div class="container">
          <img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="50" height="50" />
		  
		  
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		        <RouterLink to="/">Home</RouterLink>
		      </li>
		      <li class="nav-item">
		       <RouterLink to="/about">About</RouterLink>
		      </li>
		      <li class="nav-item">
		        
                  
		      </li>
        
		    </ul>
		  </div>
		</div>
	</nav>
  </div>
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

