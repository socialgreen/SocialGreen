<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8"> 
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

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



<!-- number of tree -->
<section class="page-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Number Of Tree</h2>
                <h3 class="section-subheading text-muted">-</h3>


                <?php 

                 $sql = "SELECT SUM(yuzde) FROM gunluk WHERE user_id = '{$_SESSION['userid']}' ";  // yuzde  toplamı aldm sum ile 

                $results =  mysqli_query($conn,$sql); 

                 $query = mysqli_fetch_assoc($results); 

                 // print_r($query);

                    $sonuc =  $query["SUM(yuzde)"]; 
                   

                   $agac = floor($sonuc / 100);

                  
                   $kalan_yuzde = $sonuc % 100;

                 echo '<hr>'; 

                 if($agac >0)
                 {
                    echo 'Tebrikler '. $agac. ' adet ağaca sahipsininiz. ';
                     echo '<hr>';
                 }
                 else
                 {
                    echo 'Henüz ağacınız yok ';
                     echo '<hr>';
                 }



                for ($i=1; $i<=$agac ; $i++) { 
                    echo '<img src="img/agac.png" alt="">';
                }


                ?>

                <hr> 
                
                
                <?php echo ($agac+1). '. ağacınız büyümeye devam ediyor.'; ?> 

                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $kalan_yuzde;?>"
                  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $kalan_yuzde;?>%">
                    <?php echo $kalan_yuzde;?>%
                  </div>
                </div>

                <!--

                <img src="img/agac.png" alt="">
                <img src="img/agac.png" alt="">
                <img src="img/agac.png" alt="">
                --> 







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
