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
                        <th scope="col">rate</th>
                        <th scope="col">start id</th>
                        <th scope="col">end Id</th>
                        
                    </tr>
                </thead>
                <tbody>
       
                    <tr>
                        <th scope="row">1</th>
                        <td>EURO</td> 
                        <td>EU</td>
                        <td>1</td>
                        <td>2</td>
                        <td>6</td>
                        <td>
                            <a href="/editCurrency" class="btn btn-info">Edit</a>
                            <a href="#" class="btn btn-danger" onclick="">Delete</a>

                            <form id="" action="" method="post">
                                
                                <input type="hidden" name="_method" value="delete">
                            </form>

                        </td>
                    </tr> 

                    <tr>
                        <th scope="row">2</th>
                        <td>DOLLAR</td> 
                        <td>USD</td>
                        <td>1</td>
                        <td>2</td>
                        <td>6</td>
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
                        <th scope="col">start id</th>
                        <th scope="col">end Id</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <th scope="row">1</th>
                        <td>EU</td> 
                        <td>USD</td>
                        <td>1</td>
                        <td>1</td>
                        <td>2</td>
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


    </div>



</template>

<style>
main{

  margin: 0 20px;
}
</style>

