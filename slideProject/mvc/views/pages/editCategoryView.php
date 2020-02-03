<div class="row">
    <div class="col-12" id="header-table" style="background-color: #507298;">
        <nav class="navbar navbar-light" style="color:white">
            <a><i class="fa fa-bars"></i>Update Category</a>
        </nav>
    </div>
    <?php foreach ($data['listOneCategory'] as $key => $listOneCate) { ?>
    <form method="POST" action = "">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Id</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       value="<?php echo $listOneCate['id']; ?>" name="id">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       value="<?php echo $listOneCate['categoryName']; ?>" name="categoryName">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Active </label>
            <div class="col-md-10">
                <input type="number" required style="width: 900px;" class="form-control" id="inputEmail3"
                       value="<?php echo $listOneCate['activate']; ?>" name="active">
            </div>
        </div>

        <tr>
            <td colspan="7">
                <a href="">
                    <button type="submit" class="btn btn-success" name="updateCate">Save</button>
                </a>
            </td>
        </tr>
    </form>
    <?php } ?>

</div>
