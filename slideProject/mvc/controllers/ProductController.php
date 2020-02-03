<?php
    class ProductController extends Controller
    {
        public function index()
        {
            $modelGetProducts = $this->model('ProductModel');
            $getProducts = $modelGetProducts->getAllProducts();
            $this->view('adminView',[
                'pageProduct' => 'productView',
                'listProducts' => $getProducts,
            ]);
        }

        public function add()
        {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            if (isset($_POST['addProduct'])) {
                $productName = $_POST['productName'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $activate = $_POST['activate'];
                $timeCreated = date("Y-m-d H:i:s");

                $modelAddProduct = $this->model('ProductModel');
                $addProduct = $modelAddProduct->addProduct($productName, $price, $description, $activate, $timeCreated);
                $getProducts = $modelAddProduct->getAllProducts();
                $this->view('adminView',[
                    'pageProduct' => 'productView',
                    'listProducts' => $getProducts,
                ]);
             
            }
            $this->view('adminView',[
                'pageAddProduct' => 'addProductView',
            ]);
        }

        public function getOne($productId)
        {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            if (isset($_POST['updateProduct'])) {
                $productName = $_POST['productName'];
                $price = $_POST['price'];
                $description = $_POST['description'];
                $activate = $_POST['activate'];
                $timeUpdated = date("Y-m-d H:i:s");

                $sql = "UPDATE product SET productName = '$productName', price = '$price', description = '$description',activate = '$activate', timeUpdated = '$timeUpdated'
                                        WHERE id = '$productId'";
                $modelUpdateOneProduct = $this->model('ProductModel');
                $update = $modelUpdateOneProduct->updateProduct($sql);
                $getProducts = $modelUpdateOneProduct->getAllProducts();

                $this->view('adminView',[
                    'pageProduct' => 'productView',
                    'listProducts' => $getProducts,
                ]);
            }

            $modelEditProduct = $this->model('ProductModel');
            $listOneProduct = $modelEditProduct->getOneProduct($productId);
            $this->view('adminView',[
                'pageEditProduct' => 'editProductView',
                'listOneProduct' => $listOneProduct,
            ]);
        }

        public function deleteProduct($productId)
        {
            $modelDeleteProduct = $this->model('ProductModel');
            $deleteProduct = $modelDeleteProduct->delete($productId);
            $getProducts = $modelDeleteProduct->getAllProducts();

            $this->view('adminView',[
                'pageProduct' => 'productView',
                'listProducts' => $getProducts,
            ]);
        }
    }