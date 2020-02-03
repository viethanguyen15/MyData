<div class="row">
    <div class="col-12" id="header-table" style="background-color: #507298;">
        <nav class="navbar navbar-light" style="color:white">
            <a><i class="fa fa-bars"></i>Update Product</a>
        </nav>
    </div>
    <?php foreach ($data['listOneProduct'] as $key => $listOneProduct) { ?>
    <form method="POST" action = "">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Id</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       value="<?php echo $listOneProduct['id']; ?>" name="id">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       value="<?php echo $listOneProduct['productName']; ?>" name="productName">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       value="<?php echo $listOneProduct['price']; ?>" name="price">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
            <div class="col-md-10">
                <textarea name="description" cols="100" rows="7"><?php echo $listOneProduct['description']; ?></textarea>
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Activate </label>
            <div class="col-md-10">
                <input type="number" required style="width: 900px;" class="form-control" id="inputEmail3"
                       value="<?php echo $listOneProduct['activate']; ?>" name="activate">
            </div>
        </div>

        <tr>
            <td colspan="7">
                <a href="">
                    <button type="submit" class="btn btn-success" name="updateProduct">Save</button>
                </a>
            </td>
        </tr>
    </form>
    <?php } ?>

</div>
