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
        
        public function deleteUser($userId)
        {
            print_r($userId);
            $modelDeleteUser = $this->model('UserModel');
            $deleteUser = $modelDeleteUser->delete($userId);
            $getUser = $modelDeleteUser->getAllUser();
           
            $this->view('adminView',[
                'pageUser' => 'userView',
                'listUser' => $getUser,
            ]);
        }
    }

