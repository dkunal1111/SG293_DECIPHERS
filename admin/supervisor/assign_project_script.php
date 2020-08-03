<?php
if(isset($_POST['assign_project']))
{
    include '../../includes/db.php';
    $user_id_select = $_POST['user_id_select'];
    $contractor_id_select = $_POST['contractor_id_select'];
    $project_id_select = $_POST['project_id_select'];
    $project_status = $_POST['project_status'];

   
   $project_assign_insert = "INSERT INTO u_c_p_status (user_id,contractor_id,project_id,project_status) VALUES('$user_id_select','$contractor_id_select','$project_id_select','$project_status')";
   $project_assign_projectstatus = "UPDATE user u SET u.project_status='$project_status' WHERE u.id=$user_id_select";
   $project_assign_insert_query = mysqli_query($conn,$project_assign_insert);
   //for update project status in user table

   mysqli_query($conn,$project_assign_projectstatus);

   if($project_assign_insert_query) { ?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Assign Poject</title>
    </head>

    <body>

        <div class="container pt-3 pb-3">
            <div class="jumbotron text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Project assigned successfully</h1>
                        <a href="assign_project.php"><button class="btn btn-primary">Go back</button></a>
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




   
<?php }
?>
