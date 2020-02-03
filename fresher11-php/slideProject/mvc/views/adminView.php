<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!--Header--> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="background-color: #507298;">
                <nav class="navbar navbar-light" style="color:white">
                   <strong>NTQ Solution Admin</strong>
                </nav>                
            </div>
        </div>
    </div>
    <!--End Header--> 
    <!--  Status-->
    <div class="container-fluid">
        <div class="row" >
            <div class="col-md-3" id="left-status">
                Hi, admin
            </div>
            <!-- <div class="col-md-9" id="right-status">
                List Categories
            </div> -->
        </div>
    </div>
    <!--End Status-->
    <!--  Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" id="left-bar">               
                  <!-- Sidebar -->
                    <nav id="sidebar">
                        <div >
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-xs-3 offset-1">
                                  <div id="img">                                   
                                    <img src="public/image/ntq.jpg" alt="Avatar" class="img-thumbnail">
                                  </div>
                                </div>
                                <div class="col-xs-6 offset-1">
                                    <p><i class="fa fa-cog"></i>Update Profile</p>
                                    <p><i class="fa fa-times-circle"></i>Logout</p>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                            <div class="list-group col-12">
                                <a href="/fresher11-php/slideProject/CategoryController" class="list-group-item "><i class="fa fa-bars" aria-hidden="true"></i> Categories</a>
                                <a href="#" class="list-group-item"><i class="fa fa-product-hunt" aria-hidden="true"></i> Products</a>
                                <a href="/fresher11-php/slideProject/UserController" class="list-group-item"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                            </div>                            
                        </div>              
                    </nav>
            </div>
                    <div class="col-md-9" id="content">
                        <?php 
                            if(isset($data['pageUser'])) {
                                require_once "pages/" . $data['pageUser'] . ".php";
                            }

                            if(isset($data['pageAddUser'])) {
                                require_once "pages/" . $data['pageAddUser'] . ".php";                           
                            }

                            if (isset($data['pageEditUser'])) {
                                require_once "pages/" . $data['pageEditUser'] . ".php";
                            }

                            if (isset($data['pageCategory'])) {
                                require_once "pages/" . $data['pageCategory'] . ".php";
                            }

                            if (isset($data['pageAddCategory'])) {
                                require_once "pages/" . $data['pageAddCategory'] . ".php";
                            }
                        ?>
                    </div>
            <!--end-->
        </div>
    </div>
    <!--End content-->
</body>
</html>