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
                $timeCreated = date("Y-m-d H:i:s");

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
   
        public function getOne($categoryId)
        {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            if (isset($_POST['updateCate'])) {
                $categoryName = $_POST['categoryName'];
                $active = $_POST['active'];
                $timeUpdated = date("Y-m-d H:i:s");

                $sql = "UPDATE category SET categoryName = '$categoryName', activate = '$active', timeUpdated = '$timeUpdated'
                                        WHERE id = '$categoryId'";
                $modelUpdateOneCategory = $this->model('CategoryModel');
                $update = $modelUpdateOneCategory->updateCategory($sql);
                $getCategories = $modelUpdateOneCategory->getAllCategories();

                $this->view('adminView',[
                    'pageCategory' => 'categoryView',
                    'listCategories' => $getCategories,
                ]);
            }
                
            $modelEditCategory = $this->model('CategoryModel');
            $listOneCategory = $modelEditCategory->getOneCategory($categoryId);
            $this->view('adminView',[
                'pageEditCategory' => 'editCategoryView',
                'listOneCategory' => $listOneCategory,
            ]);
        }
        
        public function deleteCategory($categoryId)
        {
            $modelDeleteCategory = $this->model('CategoryModel');
            $deleteCategory = $modelDeleteCategory->delete($categoryId);
            $getCategories = $modelDeleteCategory->getAllCategories();
           
            $this->view('adminView',[
                'pageCategory' => 'categoryView',
                'listCategories' => $getCategories,
            ]);
        }

    }