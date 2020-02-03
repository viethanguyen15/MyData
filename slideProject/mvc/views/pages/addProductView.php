<div class="row">
    <div class="col-12" id="header-table" style="background-color: #507298;">
        <nav class="navbar navbar-light" style="color:white">
            <a><i class="fa fa-bars"></i> Add Product</a>
        </nav>
    </div>

    <form method="POST" action="">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       placeholder="please enter product" name="productName">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
            <div class="col-md-10">
                <input type="text" style="width: 900px; " class="form-control" id="inputEmail3" required
                       placeholder="please enter price" name="price">
            </div>
        </div>
        <hr>

        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Description</label>
            <div class="col-md-10">
                <textarea name="description" cols="100" rows="7"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Activate </label>
            <div class="col-md-10">
                <input type="number" required style="width: 900px;" class="form-control" id="inputEmail3"
                       placeholder="please choose values" min="0" max="1" name="activate">
            </div>
        </div>
        <div id="add-category">
            <a>
                <button type="submit" style="background-color: #507298;" class="btn btn-primary" name="addProduct">
                    Add Product
                </button>
            </a>
        </div>
    </form>
</div>
