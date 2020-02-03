<?php
    class UserController extends Controller
    {
        public function index()
        {
            $modelGetUser = $this->model('UserModel');
            $getUser = $modelGetUser->getAllUser();
            $this->view('adminView',[
                'pageUser' => 'userView',
                'listUser' => $getUser,
            ]);
        }

        public function add()
        {
            if (isset($_POST['addUser'])) {
                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                //$password = password_hash($password, PASSWORD_DEFAULT);
                $active = $_POST['active'];

                $modelAddUser = $this->model('UserModel');
                $addUser = $modelAddUser->addUser($fullname, $username, $email, $password, $active);
                //header('location: /fresher11-php/slideProject/UserController');
                $getUser = $modelAddUser->getAllUser();
                $this->view('adminView',[
                    'pageUser' => 'userView',
                    'listUser' => $getUser,
                ]);
             
            }
            $this->view('adminView',[
                'pageAddUser' => 'addUserView',
            ]);  
        }

        public function getOne($id)
        {
            if (isset($_POST['updateUser'])) {
                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                //$password = password_hash($password, PASSWORD_DEFAULT);
                $active = $_POST['active'];

                $sql = "UPDATE user SET fullName = '$fullname', userName = '$username', 
                                        email = '$email', password = '$password', active = '$active'
                                        WHERE id = '$id'";
                $modelUpdateOneUser = $this->model('UserModel');
                $update = $modelUpdateOneUser->updateUser($sql);
                $getUser = $modelUpdateOneUser->getAllUser();

                $this->view('adminView',[
                    'pageUser' => 'userView',
                    'listUser' => $getUser,
                ]);
            }

            $modelEditUser = $this->model('UserModel');
            $listOneUser = $modelEditUser->getOneUser($id);
            $this->view('adminView', [
                'pageEditUser' => 'editUserView',
                'listOneUser' => $listOneUser,
            ]);
        }
        
        public function paginateUser()
        {
            if(isset($_GET['page'])){
                $pageCurrent = $_GET['page'];
            }
            else{
                $pageCurrent = 1;
            }
            $recordPerPage = 4;
            $offset = $pageCurrent * $recordPerPage - $recordPerPage;
            $userModel = $this->model('UserModel');
            $getNumRowUser = $userModel->userNumRow();
            $totalPage = ceil($getNumRowUser / $recordPerPage);
            $listPage = '';
            $pagePrev = $pageCurrent - 1;
            if ($pagePrev <= 0) {
                $pagePrev = 1;
            }
            $listPage = '<li class="page-item"><a class="page-link" href="/slideProject/UserController/paginateUser/page">Previous</a></li>';
            $getUser = $userModel->getAllUser();
            $this->view('adminView', [
                'pageUser' => 'userView',
                'listUser' => $getUser,
            ]);
        }

        public function deleteUser($userId)
        {
            $modelDeleteUser = $this->model('UserModel');
            $deleteUser = $modelDeleteUser->delete($userId);
            $getUser = $modelDeleteUser->getAllUser();
           
            $this->view('adminView',[
                'pageUser' => 'userView',
                'listUser' => $getUser,
            ]);
        }
    }

