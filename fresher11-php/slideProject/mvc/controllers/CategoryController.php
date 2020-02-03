<?php
    class CategoryController extends Controller
    {
        public function index()
        {
            $modelGetCategories = $this->model('CategoryModel');
            $getCategories = $modelGetCategories->getAllCategories();
            $this->view('adminView', [
                'pageCategory' => 'categoryView',
                'listCategories' => $getCategories,
            ]);
        }

        public function add()
        {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            if (isset($_POST['addCategory'])) {
                $categoryName = $_POST['categoryName'];
                $active = $_POST['active'];
                $timeCreated = date("Y-m-d", time());

                $modelAddCategory = $this->model('CategoryModel');
                $addUser = $modelAddCategory->addCategory($categoryName, $active, $timeCreated);
                $getCategories = $modelAddCategory->getAllCategories();
                // header('location: /fresher11-php/slideProject/CategoryController');
                $this->view('adminView', [
                    'pageCategory' => 'categoryView',
                    'listCategories' => $getCategories,
                ]);
             
            }
            $this->view('adminView', [
                'pageAddCategory' => 'addCategoryView',
            ]);           
            
        }
    }