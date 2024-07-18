

<div class="container">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="mb-0">ADD ROUTES HERE!!</h1>
            <a href="<?php echo base_url('employee')?>" class="btn btn-primary">Back</a>
        </div>
    <form action="<?php echo base_url('rout/store') ?>" method="post" class="mt-3">
        <div class="form-group">
            <label for="Slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
            
        </div>
        <div class="form-group">
            <label for="Controller">Controller</label>
            <input type="text" class="form-control" id="controller" name="controller">
           
        </div>
        <div class="form-group">
            <label for="Method">Method</label>
            <input type="text" class="form-control" id="method" name="method">
            
        </div>
        <div class="form-group">
            <label for="Category">Category</label>
            <input type="text" class="form-control" id="category" name="category">
            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


