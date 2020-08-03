<?php 
    include '../../includes/db.php';
    $supervisor_profile = "SELECT * FROM supervisor";
    $supervisor_profile_query = mysqli_query($conn,$supervisor_profile);
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'supervisor_head.php'; ?>

<body>


    <div id="wrapper">

        <?php include 'supervisor_dashboard_layout.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            My Profile
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Profile
                            </li>
                        </ol>

                        


                    </div>

                    
                    <div class="col-lg-4"></div>
                        <div class="col-lg-4" style="border:2px solid black ;">
                            <h1 class="display-1 text-center">My Profile</h1>


                            <form>
                                <?php
                                while ($supervisor_row = mysqli_fetch_assoc($supervisor_profile_query)) { ?>


                                    <div class="form-group col-md-6">
                                        <label for="ApplicationID1">Application ID</label>
                                        <input type="text" class="form-control" id="ApplicationID1" value="<?php echo $supervisor_row['id']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="firstName1">First Name</label>
                                        <input type="text" class="form-control" id="firstName1" value="<?php echo $supervisor_row['first_name']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lastName1">Last Name</label>
                                        <input type="text" class="form-control" id="lastName1" value="<?php echo $supervisor_row['last_name']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="userName1">User name</label>
                                        <input type="text" class="form-control" id="userName1" value="<?php echo $supervisor_row['user_name']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Password1">Password</label>
                                        <input type="text" class="form-control" id="Password1" value="<?php echo $supervisor_row['password']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Gmail1">Gmail ID</label>
                                        <input type="text" class="form-control" id="Gmail1" value="<?php echo $supervisor_row['email']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Gender1">Gender</label>
                                        <input type="text" class="form-control" id="Gender1" value="<?php echo $supervisor_row['gender']; ?>" disabled>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="Phone1">Phone</label>
                                        <input type="text" class="form-control" id="Phone1" value="<?php echo $supervisor_row['phone']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="State1">State</label>
                                        <input type="text" class="form-control" id="State1" value="<?php echo $supervisor_row['state']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="City1">City</label>
                                        <input type="text" class="form-control" id="City1" value="<?php echo $supervisor_row['city']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Address1">Address</label>
                                        <input type="text" class="form-control" id="Address1" value="<?php echo $supervisor_row['address']; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="RegistrationTime1">Registration Time</label>
                                        <input type="text" class="form-control" id="RegistrationTime1" value="<?php echo $supervisor_row['registration_time']; ?>" disabled>
                                    </div>
                                <?php } ?>
                            </form>

                        </div>
                        <div class="col-lg-4"></div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>