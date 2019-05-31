<?php require_once 'config.php';
if(!isset($_SESSION["firstname"])){
        echo ' <meta http-equiv="refresh" content="0;URL=login.php">'; // meta yünlendirme kodu
    exit;
}

?>

<!DOCTYPE html>
<html lang="tr">
<meta charset="UTF-8">
<head>
<?php //error_reporting(0); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Social Green</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php include __DIR__."/includes/navbar.php"?>




  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">What is Social Green ?</h2>
          <h3 class="section-subheading text-muted">Social Green is an application whose purpose is to evaluate habits or inform addicts, in order to deter those habits or addictions by seeing how much time you have spent on a given action.</h3>
        </div>
      </div>
      
    </div>
  </section>

<section class="page-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">How to use it? ?</h2>
                <h3 class="section-subheading text-muted">1. First of all you need to register the system (If you here you have already done that :) )</h3>
                <h3 class="section-subheading text-muted">2. Then, you will record the time you have spent in social media into the page Daily Record</h3>
                <h3 class="section-subheading text-muted">3. You can see how many trees you have achieved and the percentage of the current tree.</h3>
                <h3 class="section-subheading text-muted">Thanks for your support....</h3>
            </div>
        </div>

    </div>
</section>


<?php include __DIR__."/includes/footer.php"; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
