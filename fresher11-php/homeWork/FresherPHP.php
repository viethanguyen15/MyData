<?php
    session_start();
    class FresherPHP
    {
        public $firstName;
        public $lastName;
        public $middleName;
        public $birthday;
        public $phoneNumber;
        public $fresherPHP = [];
        public $patternFirstName = '/^[A-Za-z_]{5,15}$/';
        public $patternLastName = '/^[A-Za-z_]{5,15}$/';
        public $patternMiddleName = '/^[A-Za-z_]{5,15}$/';
        public $patternBirthday = '/^[0-9]{2}-[0-9]{2}-{0-9}{4}$/';
        public $patternPhoneNumber = '/^[0-9]{10,11}$/';

        public function __construct($fresherPHP)
        {
            $this->fresherPHP = $fresherPHP;
        }

        public function getData()
        {
            return $this->fresherPHP;
        }

        // public function validate()
        // {
            

        //     if (isset($_POST['submit'])) {
        //         $this->firstName = $_POST['firstName'];
        //         $this->lastName = $_POST['lastName'];
        //         $this->middleName = $_POST['middleName'];
        //         $this->birthday = $_POST['birthday'];
        //         $this->phoneNumber = $_POST['phoneNumber'];

        //         if (empty($this->firstName)) {
        //             throw new Exception("first name is not empty");

        //         } elseif (empty($this->lastName)) {
        //             throw new Exception("last name is not empty");

        //         } elseif (empty($this->middleName)) {
        //             throw new Exception("middle name is not empty");

        //         } elseif (empty($this->birthday)) {
        //             throw new Exception("birthday is not empty");

        //         } elseif (empty($this->phoneNumber)) {
        //             throw new Exception("phone number is not empty");
                    
        //         } else {
        //             if (!preg_match($this->patternFirstName, $this->firstName, $matches)) {
        //                 throw new Exception("first Name wrong format");
                        
        //             } 

        //             if (!preg_match($this->patternLastName, $this->lastName, $matches)) {
        //                 throw new Exception("last Name wrong format");
                        
        //             } 

        //             if (!preg_match($this->patternMiddleName, $this->middleName, $matches)) {
        //                 throw new Exception("middle name wrong format");
                        
        //             } 

        //             if (!preg_match($this->patternBirthday, $this->birthday, $matches)) {
        //                 throw new Exception("birthday wrong format");
                        
        //             } 
        //             if (!preg_match($this->patternPhoneNumber, $this->phoneNumber, $matches)) {
        //                 throw new Exception("phone number wrong format");
                        
        //             } 
        //         }
        //     }
        // }

        public function addStudent()
        {
            $this->fresherPHP = [
                'firstName' => $this->$_POST['firstName'],
                'lastName' => $_POST['lastName'],
                'middleName' => $_POST['middleName'],
                'birthday' => $_POST['birthday'],
                'phoneNumber' => $_POST['phoneNumber'],
            ];
            $_SESSION['infoStudent'] = [];
            $_SESSION['infoStudent'][] = $this->fresherPHP;
        }

    }


    $fresherPHP = [
        'firstName' => 'Ha',
        'lastName' => 'Nguyen',
        'middleName' => 'Viet',
        'birthday' => '01-10-1997',
        'phoneNumber' => '0123456789'
    ];

    $fresher = new FresherPHP($fresherPHP);

    // foreach ($fresher->getData() as $key => $value) {
    //     echo $value;
    // }

    // try {
    //     $fresher->validate();
    // } catch (Exception $e) {
    //     echo 'Message: ' . $e->getMessage();
    // }
?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>FresherPHP</title>
</head>
<body>
    <h1>quan ly sinh vien</h1>
    <!-- Default form subscription -->
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <form class="text-center border border-light p-5" action="#" style="width: 500px; height: 400px;" method="post">
                    <p class="h4 mb-4">Add</p>
                    <input type="text" class="form-control mb-4" name="firstName" placeholder="firstName">
                    <input type="text" class="form-control mb-4" name="lastName" placeholder="lastName">
                    <input type="text" class="form-control mb-4" name="middleName" placeholder="middleName">
                    <input type="text" class="form-control mb-4" name="birthday" placeholder="birthday">
                    <input type="text" class="form-control mb-4" name="phoneNumber" placeholder="phoneNumber">
                    <button class="btn btn-info btn-block" type="submit" name="submit">Add</button>
                </form>
            </div>

            <div class="col-lg-7">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Middle Name</th>
                            <th scope="col">Birdthay</th>
                            <th scope="col">Phone Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($fresher->getData() as $key => $row) { 
                        ?>
                        <tr>
                            <td><?php echo $row; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
