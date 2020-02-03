<div class="row">
    <div class="col-12" id="header-table" style="background-color: #507298;">
        <nav class="navbar navbar-light" style="color:white">
            <a><i class="fa fa-bars"></i>Update User</a>
        </nav>
    </div>
    <?php foreach ($data['listOneUser'] as $key => $value) { ?>
    <form method="POST" action = "">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       value="<?php echo $value['id']; ?>" name="fullname">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">User Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       value="<?php echo $value['userName']; ?>" name="username">
            </div>
        </div>
        <hr>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email </label>
            <div class="col-md-10">
                <input type="email" style="width: 900px; " class="form-control" id="inputEmail3"
                       value="<?php echo $value['email']; ?>" name="email">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">PassWord</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px;" name="password"
                       class="form-control" id="inputEmail3" value="<?php echo $value['password']; ?>" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Active </label>
            <div class="col-md-10">
                <input type="number" required style="width: 900px;" class="form-control" id="inputEmail3"
                       value="<?php echo $value['active']; ?>" name="active">
            </div>
        </div>

        <tr>
            <td colspan="7">
                <a href="">
                    <button type="submit" class="btn btn-success" name="updateUser">Save</button>
                </a>
                <a href="">
                    <button type="button" name="refreshUser" class="btn btn-danger">Delete</button>
                </a>
            </td>
        </tr>
    </form>
    <?php } ?>

</div>
