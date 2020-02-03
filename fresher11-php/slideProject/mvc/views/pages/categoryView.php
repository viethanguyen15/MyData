<div class="container-fluid" >
        <div class="row" style="background: #000000;color: #dce8f1">
            <div class="col-md-9" id="right-status" >
            CATEGORY MANAGEMENT
            </div>
        </div>
    </div>
    <!--Search Box-->
    <nav class="navbar navbar-light bg-light" style="margin-top: 15px;">
        <form class="form-inline" action="/baseMVC/Users/search" method="POST">
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
                <a><i class="fa fa-bars"></i> CATEGORY MANAGEMENT</a>
            </nav>
        </div>
        </thead>
        <br/>
        <div id="add-category">
            <a href="/fresher11-php/slideProject/CategoryController/add"><button type="submit" style="background-color: #507298;" class="btn btn-primary">Add CATEGORY</button></a>
        </div>
        <br/>
        <form method="POST" action="">
        <tbody>
            <tr style="color: #507298;">
                <th scope="col"><input type="checkbox" aria-label="Checkbox for following text input"></th>
                <th scope="col">ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Active</th>
                <th scope="col">Time Created</th>
                <th scope="col">Time Updated</th>
                <th scope="col">Action</th>
            </tr>

            <?php
                foreach ($data['listCategories'] as $key => $listCategory) {
            ?>
            <tr>
                <th scope="row"><input type="checkbox" aria-label="Checkbox for following text input"></th>

                <td><?php echo $listCategory['id']; ?></td>
                <td><?php echo $listCategory['categoryName']; ?></td>
                <td>
                    <span class="badge badge-<?php if ($listCategory['activate'] == 1) { echo 'success'; } else { echo 'danger'; } ?>">
                        <?php
                            if ($listCategory['activate'] == 1) {
                                echo 'Activated';
                            } else {
                                echo 'Deactive';
                            }
                        ?>
                    </span>    
                </td>
                <td><?php echo $listCategory['timeCreated']; ?></td>
                <td><?php echo $listCategory['timeUpdated']; ?></td>
                <td>
                    <a href="/fresher11-php/slideProject/UserController/getOne/<?php echo $values['id']; ?>"><input class="btn btn-primary" style="width: 80px;" value="Edit" id=""></a>
                    <a href="/fresher11-php/slideProject/UserController/getOne/<?php echo $values['id']; ?>"><input class="btn btn-danger" style="width: 80px;" value="Delete" id=""></a>
                </td>
            </tr>
            <?php
                }
            ?>           
            <tr>
                <td colspan="7">
                    <button type="button" class="btn btn-success">Active</button>
                    <button type="button" class="btn btn-danger">DeActive</button>
                </td>
            </tr>
        </tbody>
        </form>
    </table>
