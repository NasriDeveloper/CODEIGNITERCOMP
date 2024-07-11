<div class="container">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h1 class="mb-0"> WELCOME TO LOGIN PAGE </h1>
        <a href="<?php echo base_url('employee')?>" class="btn btn-primary">Back</a>
    </div>
    <form action="<?php echo base_url('login') ?>" method="post" class="mt-3">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
            <small><?php echo form_error('email_id')?></small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <small><?php echo form_error('password')?></small>
        </div>
        <button type="submit" class="btn btn-primary">Login Now</button>
    </form>
</div>
