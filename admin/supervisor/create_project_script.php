<?php
if(isset($_POST['create_project_submit']))
{
    include '../../includes/db.php';
   $project_name = $_POST['project_name'];
   $project_description = $_POST['project_description'];
   $project_state = $_POST['project_state'];
   $project_city = $_POST['project_city'];
   $project_address = $_POST['project_address'];
   $project_latitude = $_POST['project_latitude'];
   $project_longitude = $_POST['project_longitude'];

   
   $project_creating_insert = "INSERT INTO project (p_name,p_description,p_state,p_city,p_address,p_latitude,p_longitude) VALUES('$project_name','$project_description','$project_state','$project_city','$project_address','$project_latitude','$project_longitude')";
   $project_creating_insert_query = mysqli_query($conn,$project_creating_insert);
   if ($project_creating_insert_query) { ?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Project Registration!</title>
    </head>

    <body>

        <div class="container pt-3 pb-3">
            <div class="jumbotron text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Project successfully Created!!</h1>
                        <a href="create_project.php"><button class="btn btn-primary">Go back</button></a>
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

else {
    
}
   
   
}
?>


