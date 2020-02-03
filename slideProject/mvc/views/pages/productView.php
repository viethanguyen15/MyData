<script>
        function deleteProduct(productName)
        {
            return confirm ('Bạn có muốn xóa sản phẩm ' + productName + ' không ?');
        }
    </script>
    <div class="container-fluid" >
        <div class="row" style="background: #000000;color: #dce8f1">
            <div class="col-md-9" id="right-status" >
                PRODUCT MANAGEMENT
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
                <a><i class="fa fa-bars"></i> PRODUCT MANAGEMENT</a>
            </nav>
        </div>
        </thead>
        <br/>
        <div id="add-category">
            <a href="/slideProject/ProductController/add"><button type="submit" style="background-color: #507298;" class="btn btn-primary">Add Product</button></a>
        </div>
        <br/>
        <form method="post" action="">
        <tbody>
            <tr style="color: #507298;">
                <th scope="col"><input type="checkbox" aria-label="Checkbox for following text input"></th>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Active</th>
                <th scope="col">Time Created</th>
                <th scope="col">Time Updated</th>
                <th scope="col">Action</th>
            </tr>

            <?php
                foreach ($data['listProducts'] as $key => $listProduct) {
            // while ($row = mysqli_fetch_assoc($data['listUser'])) {
            ?>
            <tr>
                <th scope="row"><input type="checkbox" name="" value="" aria-label="Checkbox for following text input"></th>

                <td><?php echo $listProduct['id']; ?></td>
                <td><?php echo $listProduct['productName']; ?></td>
                <td><?php echo $listProduct['price']; ?></td>
                <td><?php echo $listProduct['description']; ?></td>
                <td>
                    <span class="badge badge-<?php if ($listProduct['activate'] == 1) { echo 'success'; } else { echo 'danger'; } ?>">
                        <?php
                            if ($listProduct['activate'] == 1) {
                                echo 'Activated';
                            } else {
                                echo 'Deactive';
                            }
                        ?>
                    </span>    
                </td>
                <td><?php echo $listProduct['timeCreated']; ?></td>
                <td><?php echo $listProduct['timeUpdated']; ?></td>
                <td>
                    <a href="/slideProject/ProductController/getOne/<?php echo $listProduct['id']; ?>"><input class="btn btn-primary" style="width: 80px;" value="Edit"></a><br><br>
                    <a onclick="return deleteProduct('<?php echo $listProduct['productName']; ?>')" href="/slideProject/ProductController/deleteProduct/<?php echo $listProduct['id']; ?>"><input class="btn btn-danger" style="width: 80px;" value="Delete"></a>
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
