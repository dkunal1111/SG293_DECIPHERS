<?php
if (isset($_POST['user_registration_submit'])) {
    include '../../includes/db.php';

    $first_name = $_POST['user_first_name'];
    $last_name = $_POST['user_last_name'];
    $user_name = $_POST['user_name'];
    $password = $_POST['user_password'];
    $email = $_POST['user_email'];
    $gender = $_POST['user_gender'];
    $phone = $_POST['user_phone_number'];
    $state = $_POST['user_state'];
    $city = $_POST['user_city'];
    $address = $_POST['user_address'];

    $user_registration_insert = "INSERT INTO user (first_name,last_name,user_name,user_password,user_email,user_gender,user_phone,user_state,user_city,user_address) VALUES('$first_name','$last_name','$user_name','$password','$email','$gender','$phone','$state','$city','$address')";
    $user_query = mysqli_query($conn, $user_registration_insert);

    if($user_query) { ?>

        <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

            <title>User Registration!</title>
        </head>

        <body>

            <div class="container pt-3 pb-3">
                <div class="jumbotron text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>user successfully Registered!!</h1>
                            <a href="user_registration.php"><button class="btn btn-primary">Go back</button></a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        </body>

        </html>

    <?php } ?>
    <?php }?>
    
    
