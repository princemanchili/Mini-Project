<!DOCTYPE html>

<html lang="en">
<?php include"head.css";?>
<body>


<?php include"top_nav.php";?>
   <img src="donor_image/bb.jpg" height="75%" width="100%"></img>
    <div class="container" >
        <div >
            <div >
                <h1 class="page-header text-primary">
                   Online Blood Bank Management System
                </h1>
            </div>
            		 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i> Donor Registration</h4>
                    </div>
                    <div class="panel-body">
                        <p>Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?This thought laid our foundation. </p>
                        <a href="Donor_reg.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i> Need Blood</h4>
                    </div>
                    <div class="panel-body">
                        <p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly.  </p>
                        <a href="request_blood.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 
			  <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i>Search Donor</h4>
                    </div>
                    <div class="panel-body">
                        <p>Some people who have serious injuries they need blood transfusions to replace blood lost during the injury.Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed.</p>
                        <a href="Search_Donor.php" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
			 
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Why we need you to give blood ?</h2>
            </div>
            <div class="col-md-6">
              

			<ul>
				<li>Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.</li>

				<li>Many people would not be alive today if donors had not generously given their blood.</li>

				<li>We need over 6,000 blood donations every day to treat patients in need across india. Which is why there’s always a need for people to give blood.</li>

				<li>Each year we need approximately 200,000 new donors, as some donors can no longer give blood.</li>

				<li>Most people between the ages of 17-65 are able to give blood.</li>

				<li>Around half our current donors are over 45. That's why we need more young people (over the age of 17) to start giving blood, so we can make sure we have enough blood in the future.</li>

			</ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/contact.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>We expect your loyal feedback to improve our standard.For more details and any subject related queries..</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="contact.php"><i class="fa fa-phone"></i> Call to Action</a>
                </div>
            </div>
        </div>
		
		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
		<img src='' width="100%" height="100%" id='ModalImg'>
    </div>
  </div>
</div>

        <hr>

        <!-- Footer -->
		<?php include"footer.php"; ?>


</body>

</html>
