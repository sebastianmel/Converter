<template>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-4">Add currency : </h3>

        <div class='mt-4'>

            <form method="post" action="" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="put">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="nom" value="" required>

                </div>
              
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">symbol</label>
                    <input type="text" class="form-control" name="alphanum" value="" required>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">rate </label>
                    <input type="number" class="form-control" name="price" value=""   required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">pair (start/end)</label>
                    <input type="number" class="form-control" name="price" value="" placeholder="1"   required>
                    
                    <input type="number" class="form-control" name="price" value="" placeholder="2"  required>
                </div>


                <button type="submit" class="btn btn-primary">Add</button>
                <a href="/" class="btn btn-danger">Cancel</a>
            </form>

        </div>

    </div>



</template>