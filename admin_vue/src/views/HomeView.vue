<template>
<div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">Currencies added : </h3>

        <div class='mt-4'>
            <div class="d-flex justify-content-between mb-2">
                
                <div><a href="" class="btn btn-primary">Add currency</a></div>
            </div>

            
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">symbol</th>
                        <th scope="col">rate</th>
                        
                    </tr>
                </thead>
                <tbody>
       
                    <tr>
                        <th scope="row">1</th>
                        <td>EURO</td> 
                        <td>EU</td>
                        <td>1</td>
                        <td>
                            <a href="" class="btn btn-info">Edit</a>
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

