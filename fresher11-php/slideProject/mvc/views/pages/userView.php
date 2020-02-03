    <script>
        function deleteUser(userId)
        {
            return confirm ('Bạn có muốn xóa ' + userId + 'không ?');
        }
    </script>
    <div class="container-fluid" >
        <div class="row" style="background: #000000;color: #dce8f1">
            <div class="col-md-9" id="right-status" >
                USER MANAGEMENT
            </div>
        </div>
    </div>
    <!--Search Box-->
    <nav class="navbar navbar-light bg-light" style="margin-top: 15px;">
        <form class="form-inline" action="" method="POST">
            <input class="form-control" style="width: 850px;" id="search-input" type="search" name="search"
                   placeholder="Search" aria-label="Search" required>
            <button class="btn btn-primary" style="margin-left: 10px;" type="submit" name="submit" >Search</button>
        </form>
    </nav>
    <!--End Search Box-->
    <table class="table table-bordered table-striped" id="table">
        <thead>
        <div class="col-12" id="header-table" style="background-color: #507298;">
            <nav class="navbar navbar-light" style="color:white">
                <a><i class="fa fa-bars"></i> USER MANAGEMENT</a>
            </nav>
        </div>
        </thead>
        <br/>
        <div id="add-category">
            <a href="/slideProject/UserController/add"><button type="submit" style="background-color: #507298;" class="btn btn-primary">Add User</button></a>
        </div>
        <br/>
        <form method="post" action="/fresher11-php/slideProject/mvc/controller/ActiveController.php">
        <tbody>
            <tr style="color: #507298;">
                <th scope="col"><input type="checkbox" aria-label="Checkbox for following text input"></th>
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Pass Word</th>
                <th scope="col">Active</th>
                <th scope="col">Action</th>
            </tr>

            <?php
                foreach ($data['listUser'] as $key => $values) {
            // while ($row = mysqli_fetch_assoc($data['listUser'])) {
            ?>
            <tr>
                <th scope="row"><input type="checkbox" name="checkBox[]" value="<?php echo $values['id']; ?>" aria-label="Checkbox for following text input"></th>

                <td><?php echo $values['id']; ?></td>
                <td><?php echo $values['fullName']; ?></td>
                <td><?php echo $values['userName']; ?></td>
                <td><?php echo $values['email']; ?></td>
                <td><?php echo $values['password']; ?></td>
                <td>
                    <span class="badge badge-<?php if ($values['active'] == 1) { echo 'success'; } else { echo 'danger'; } ?>">
                        <?php
                            if ($values['active'] == 1) {
                                echo 'Activated';
                            } else {
                                echo 'Deactive';
                            }
                        ?>
                    </span>    
                </td>
                <td>
                    <a href="/fresher11-php/slideProject/UserController/getOne/<?php echo $values['id']; ?>"><input class="btn btn-primary" style="width: 80px;" value="Edit"></a><br><br>
                    <a onclick="return deleteUser('<?php echo $values['userName']; ?>')" href="/fresher11-php/slideProject/UserController/deleteUser/<?php echo $values['id']; ?>"><input class="btn btn-danger" style="width: 80px;" value="Delete"></a>
                </td>
            </tr>
            <?php
                }
            ?>           
            <tr>
                <td colspan="7">
                    <button type="submit" class="btn btn-success" name="active">Active</button>
                    <button type="submit" class="btn btn-danger" name="deactive">DeActive</button>
                </td>
            </tr>
        </tbody>
        </form>
    </table>
