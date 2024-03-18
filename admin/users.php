<?php include('include/header.php'); ?>

<div class="row"></div>
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>
                Users List
                <a href="users-create.php" class="btn btn-primary float-end">Add User</a>
            </h4>
        </div>
        <div class="card-body">

        <?=alertMessage(); ?>

        <table class="table table-bordered table-stripped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>FullName</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>username</td>
                    <td>name</td>
                    <td>email</td>
                    <td>phone</td>
                    <td>
                        <a href="users-edit.php" class="btn btn-success btn-sm">Edit</a>
                        <a href="users-delete.php" class="btn btn-danger btn-sm mx-2">Delete</a>
                    </td>

                </tr>
            </tbody>
        </table>

        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>