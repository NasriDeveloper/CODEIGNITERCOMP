<div class="container mt-4">
    <?php  if($this->session->flashdata('status'))  :  ?>
    <div class="alert alert-success text-center">
      <?=  $this->session->flashdata('status');    ?>
    </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h1 class="mb-0">Add employee here</h1>
            <a href="<?php echo base_url('employee/add')?>" class="btn btn-primary">Add Employee</a>
        </div>
        <div class="card-body">
    <table id="datatable1" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone No</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($employee as $row) : ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?= $row->first_name; ?></td>
                <td><?= $row->last_name; ?></td>
                <td><?= $row->phone; ?></td>
                <td><?= $row->email; ?></td>
                <td>
                    <a href="<?php echo base_url('employee/edit/'.$row->id) ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?php echo base_url('employee/delete/'.$row->id) ?>" class="btn btn-danger btn-sm">Delete</a>
                    <button type="button" class="btn btn-danger confirm_delete" value="<?= $row->id; ?>">Confirm Delete</button>
                </td>
            </tr>
        <?php endforeach; ?> 
        </tbody>
    </table>
</div>
