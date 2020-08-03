<?php

if (isset($_POST['contractor_registration_submit'])) {
    include '../../includes/db.php';

    $first_name = $_POST['contractor_first_name'];
    $last_name = $_POST['contractor_last_name'];
    $contractor_user_name = $_POST['contractor_user_name'];
    $password = $_POST['contractor_password'];
    $email = $_POST['contractor_email'];
    $gender = $_POST['contractor_gender'];
    $experience = $_POST['contractor_experience'];
    $phone = $_POST['contractor_phone_number'];
    $state = $_POST['contractor_state'];
    $city = $_POST['contractor_city'];
    $address = $_POST['contractor_address'];

    $contractor_registration_insert = "INSERT INTO contractor (first_name,last_name,contractor_user_name,contractor_password,contractor_email,contractor_gender,contractor_experience,contractor_phone,contractor_state,contractor_city,contractor_address) VALUES('$first_name','$last_name','$contractor_user_name','$password','$email','$gender','$experience','$phone','$state','$city','$address')";
    $contractor_insert_query = mysqli_query($conn, $contractor_registration_insert);

    if ($contractor_insert_query) { ?>

        <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

            <title>Contractor Registration!</title>
        </head>

        <body>

            <div class="container pt-3 pb-3">
                <div class="jumbotron text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Contractor successfully Registered!!</h1>
                            <a href="contractor_registration.php"><button class="btn btn-primary">Go back</button></a>
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

<?php }

} else {?>
    
    <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

            <title>Contractor Registration!</title>
        </head>

        <body>

            <div class="container pt-3 pb-3">
                <div class="jumbotron text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Contractor Not Registered!!</h1>
                            <a href="contractor_registration.php"><button class="btn btn-primary">Go back</button></a>
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

<?php }
?>