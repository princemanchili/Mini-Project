<?php include"config.php";?>
<!DOCTYPE html>
<html lang="en">
<?php include"head.php";?>
<?php include"announcement_functions.php";?>
<body>

<?php
	 include"top_nav.php";
?>
	
    <!-- Page Content -->
    <div class="container" style="margin-top:70px;">
  <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header  text-primary">Announcement Details
                </h1>
                
            </div>
        </div>
<?php 
				$sql="Select * from blood_announcements ";
				load_announcement($sql,$con);
			?>
        <!-- /.row -->

        <!-- Intro Content -->
        
        <!-- /.row -->


        <hr>
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>
