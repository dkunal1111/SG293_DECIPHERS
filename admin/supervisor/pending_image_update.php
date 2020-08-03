<?php 
if(isset($_REQUEST['cid']))
{
    include '../../includes/db.php';
    $contractor_id = $_REQUEST['cid'];
    $user_id = $_REQUEST['uid'];
    $project_id = $_REQUEST['pid'];
    $project_step = $_REQUEST['p_step'];
    $image_verify = "UPDATE u_c_p_image ucp SET ucp.image_verification='verified',ucp.verify_time=now() WHERE ucp.contractor_id=$contractor_id AND ucp.user_id=$user_id AND ucp.project_id=$project_id AND ucp.project_step=$project_step";
    $image_verify_query = mysqli_query($conn,$image_verify);
    if($project_step==4)
    {
        $project_status = 'complete';
        $complete_project = "INSERT INTO project_status (user_id,contractor_id,project_id,project_status) VALUES('$user_id','$contractor_id','$project_id','$project_status')";
        mysqli_query($conn,$complete_project);
    }

    
   if($image_verify_query) { ?>

    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Image Verify</title>
    </head>

    <body>

        <div class="container pt-3 pb-3">
            <div class="jumbotron text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Image Verified</h1>
                        <a href="pending_image.php"><button class="btn btn-primary">Go back</button></a>
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
