<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
        include_once "head.php";
?>
</head>

<body class="bg-white">
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <?php
        include_once "nav.php";
    ?>
    <!-- Humberger End -->
    <style>
        .view:hover {
            color: black;
        }
    </style>
    <!-- Header Section Begin -->
    <?php
        include_once "header.php";
        include_once "ajax.php";
    ?>




    <div class="container-fluid">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">


                                <?php 

                          include_once "../admin/dbcontroller.php";
                          $handle=new DBcontroller();
  if(isset($_SESSION['user_data']['email'])){
    $email=$_SESSION['user_data']['email'];
    $query="select * from registration where `email`='$email'";

    $fetch=$handle->fetchresult($query);
  //    echo $fetch["image"];
  //    die();
  // }
        
  if(isset($fetch["image"])){
  ?>
                                <img src="profile/<?php echo $fetch["image"] ?>" alt="Admin" class="rounded-circle"
                                    height="200" width="200px">

                                <?php } 
                          
                          
  }?>
                                <div class="mt-3">
                                    <h4><?php echo $fetch["first_name"].' '.$fetch['last_name'] ?></h4>
                                    <p class="text-secondary mb-1"></p>

                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <?php include_once 'sideprofile.php';?>

                    </div>
                </div>
                <div class="col-md-8">

                    <?php
        if(isset($_GET['info'])){
          echo '<div class="alert alert-success">'.$_GET['info'].'</div>';
        }
        
        ?>
                 <div class="card mb-3">
            <form action="process_userdetail.php" method="post">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mt-3">First Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="f_name" class="form-control" value="<?php echo $fetch["first_name"] ?>">

                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mt-3">Last Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="l_name" class="form-control" value="<?php echo $fetch["last_name"] ?>">

                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="email" class="form-control" value="<?php echo $fetch["email"] ?>"
                      disabled="true">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Mobile</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="phone" class="form-control" value="<?php echo $fetch["phone_no"]?>">
                  </div>
                </div>
                <hr>

                <hr>
                <!-- <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Gender</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="gender" class="form-control" value="<?php echo $fetch['gender'] ?>">
                  </div>
                </div> -->
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="address" class="form-control" value="<?php echo $fetch['address'] ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-info ">Edit</button>
                  </div>
                </div>

              </div>
            </form>
          </div>





                </div>
            </div>

        </div>
    </div>
    <!--================ start footer Area  =================-->
    <?php include_once 'footer.php'?>
    <!--================end footer Area  =================-->
</body>

</html>
<style>
    body {
        margin-top: 20px;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }

    .main-body {
        padding: 15px;
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }

    .h-100 {
        height: 100% !important;
    }

    .shadow-none {
        box-shadow: none !important;
    }
</style>