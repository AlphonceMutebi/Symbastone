<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Symbastone | Admin</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/symbastoneIcon.svg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Advent+Pro:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
  <nav class="navbar navbar-light bg-light navbar-expand-lg">
    <a class="navbar-brand" href="index.html">
      <img src="assets/img/symbastoneIcon.svg" class="animated fadeInUp ml-5" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link text-center" href="company.html">Company </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-center" href="holding.html" >Holding </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#">Data Room</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-center" href="contact.html">Contact</a>
        </li>
     
      </ul>
    </div>
  </nav>
  
  <!-- Upload File -->
  <div class="row p-5">
      <div class="container">
        <div class="col-md-12">
            <button class="btn btn-warning btn-lg " style="color:#ffffff; background-color:#eb7500;" data-toggle="modal" data-target="#exampleModalCenter">Upload File</button>
            <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">File Upload</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <input type="file" name="file">
 
                          
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit" value="Upload">Upload</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
      </div>
  </div>

  <!-- View Files -->
  <div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">File Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Sample</td>
            <td>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          
        </tr>
        <!-- <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
           
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            
        </tr> -->
        </tbody>
    </table>
</div>
  
 





     
  




   

 






<!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left"data-aos="zoom-out" >
				<div class="col-xs-12 col-sm-4 col-md-4">
          <h5>Contact</h5>
          Symbastone Ltd.<br>
          P. O. Box 2887 - 00606<br>
          Nairobi / Kenya<br>
          E-Mail: connect@symbastone.com<br>
          Tel.: +254 721 990 613 / +1 (515) 771-3112<br>
				
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li> <a href="http://extremeclean.co.ke/" >Extreme Clean</a></li>
						<li> <a href="https://bik-group.co.ke/"> Bik Contracts</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Legal</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="privacy.html">Privacy Notice</a></li>
						<li><a href="terms.html">Terms & Conditions</a></li>
						<li><a href="disclaimer.html">Disclaimer</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          Copyright <sup>&copy; </sup> <script>document.write(new Date().getFullYear());</script> Symbastone Ltd. All rights reserved.

				</div>
				<hr>
			</div>	
			
		</div>
	</section>
	<!-- ./Footer -->
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>