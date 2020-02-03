<div class="row">
    <div class="col-12" id="header-table" style="background-color: #507298;">
        <nav class="navbar navbar-light" style="color:white">
            <a><i class="fa fa-bars"></i> Add Category</a>
        </nav>
    </div>

    <form method="POST" action="">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       placeholder="please enter category name" name="categoryName">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Active </label>
            <div class="col-md-10">
                <input type="number" required style="width: 900px;" class="form-control" id="inputEmail3"
                       placeholder="please choose values" min="0" max="1" name="active">
            </div>
        </div>
        <div id="add-category">
            <a>
                <button type="submit" style="background-color: #507298;" class="btn btn-primary" name="addCategory">
                    Add Category
                </button>
            </a>
        </div>
    </form>
</div>
