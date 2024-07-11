

<div class="container">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="mb-0">EDIT USERS HERE!!</h1>
            <a href="<?php echo base_url('employee')?>" class="btn btn-primary">Back</a>
        </div>
    <form action="<?php echo base_url('employee/update/'.$employee->id) ?>" method="post" class="mt-3">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="first_name" value="<?= $employee->first_name ?>">
            <small><?php echo form_error('first_name')?></small>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="last_name" value="<?= $employee->last_name ?>">
            <small><?php echo form_error('last_name')?></small>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $employee->email ?>">
            <small><?php echo form_error('email')?></small>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" name="phone" value="<?= $employee->phone ?>">
            <small><?php echo form_error('phone')?></small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


