<!-- Start PHP script -->
<?php

if ($_POST['submit']) {

// Error messages
  if (!$_POST['name']) {
    $error="<br/>- Please enter your name.";
  }
  if (!$_POST['email']) {
    $error.="<br/>- Please enter your e-mail address. ";
  }
  if (!$_POST['message']) {
    $error.="<br/>- Please enter a message. ";
  }
  if (!$_POST['check']) {
    $error.="<br/>- Please confirm that your are human.";
  }

// Start error test
  if ($error) {
    $result='<div class="alert alert-danger" role="alert"><strong>There is an error.</strong> Correct the following: '.$error.'</div>';
// End error test
  } else {
    mail("songwright66@gmail.com", "Contact message", "Name: ".$_POST['name']."
E-mail: ".$_POST['email']."
Message: ".$_POST['message']);

    {
      $result='<div class="alert alert-success" role="alert"><strong>Thank you.</strong> We\'ll be in touch shortly.</div>'; // Success message
    }
  }

}

?>
<!-- End PHP script -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Concordia Development Inc.</title>
  <link rel="icon" type="image/png" href="img/R_logo.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<!-- Start Header -->
  <header>
    <div class="container-fluid">
        <h5 id="callout">&#9742; (615) 474-9809</h5>
    </div>
  </header>
<!-- End Header -->
  <nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!-- Hamburger button -->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <img src="img/logo.svg">
        <img src="img/RobertsonDrapery.png" alt="Robertson Drapery">
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="services.html">Services</a></li>
          <li class="active"><a href="contact.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container text-center">
    <div class="row">
      <div class="col-sm-9 col-md-9 col-lg-8 col-aligncenter">
        <h1>Contact Form</h1>
          <?php echo $result; ?> <!-- Display error result -->
        <p>Send a message via the form below</p>
        <form role="form"  method="post">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Your E-mail Address" value="<?php echo $_POST['email']; ?>">
          </div>
          <div class="form-group">
            <textarea name="message" rows="5" class="form-control" placeholder="Your Message"><?php echo $_POST['message']; ?></textarea>
          </div>
          <div class="checkbox" align="left">
            <label>
              <input type="checkbox" name="check"> I am human.
            </label>
          </div>
          <input type="submit" name="submit" class="btn btn-secondary" value="send message">
        </form>
        <br>
      </div> <!-- End contact form input fields -->
    </div>
  </div>

  <!-- Start Footer -->
  <footer class="container-fluid text-center">
  <div class="row">
      <div class="col-md-8 col-aligncenter">
        <div class="col-sm-6">
          <h3>Contact Us</h3>
          <h4>Robertson Drapery</h4>
          <h4>&#9742; (615) 474-9809</h4>
          <h4>George Robertson</h4>
        </div>
        <div class="col-sm-6">
          <h3>Services</h3>
          <h4>Pick Up and Delivery Service</h4>
          <h4>Alteration Services</h4>
          <h4>Installation</h4>
          <h4>Measuring</h4>
          <h4>Expert Designers and Sales Staff</h4>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
</body>
</html>
