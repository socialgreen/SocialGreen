<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

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


<style>
    table.gunluk {
    width:  100%;
}

 
table.gunluk tr {
    border-bottom: 1px solid #ddd;
 
}

table.gunluk td,table.gunluk th {
    padding: 7px;
    text-align: left;
}

table.gunluk tr:hover {
    background-color: #ddd;
}

 
</style>


<!-- number of tree -->
<section class="page-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Günlük Kayıt Ekle</h2>
                <h3 class="section-subheading text-muted">-</h3>



                 <?php

                 //$sure = 200;
                 /* 

                 if($sure == 0) { $yuzde = 10; }
                 else if($sure > 0 AND $sure <= 20 ) { $yuzde = 5; }
                 else if($sure > 21 AND $sure <= 60 ) { $yuzde = -5; }
                 else if($sure > 61 AND $sure <= 90 ) { $yuzde = -20; }
                 else if($sure > 91 AND $sure <= 120 ) { $yuzde = -30; }
                 else if($sure >= 91 ) { $yuzde = -50; }

                 */ 

                 //echo 'yüzde : '. $yuzde; 

                 // echo yuzde_hesapla(10); 
  
 
                if (isset($_POST['kayit_ekle'])) {

                    //print_r($_POST);

                    //trim() boşlukları temizler diğerlerini de trim için alın. ya da trimi bir fonsiyonun içine alın ordan kullanın 


                    $uygulama_name = trim($_POST['uygulama_name']);
                    $online_suresi = $_POST['online_suresi'];
                     
                    if ($uygulama_name == '') {
                        $hata[] = 'Lütfen uygulama_name giriniz.';
                    }
                    if ($online_suresi == ''){
                        $hata[] = 'Lütfen online_suresi giriniz';
                    }

                    $yuzde = yuzde_hesapla($online_suresi); 


                    $user_id = $_SESSION['userid'];
                    
 

                    //print_r($hata);

                    if(isset($hata))
                    {
                        
                        foreach ($hata as $key => $value) {
                            echo $value. '<br>'; 
                        }
                    }
                    else
                    {
             
                         $sql = "INSERT INTO gunluk (user_id, uygulama_name, online_suresi, yuzde)
                        VALUES ('$user_id', '$uygulama_name', '$online_suresi','$yuzde')";


                     

                    if (mysqli_query($conn, $sql)) {
                        echo "Kayıt Eklendi. Teşekkür ederiz.";
                        echo ' <meta http-equiv="refresh" content="2;URL=days.php">'; 

                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }



                    }

              
            } 
             

            ?>



                    

                <form action="" method="POST">
                
                <div class="col-md-8">


                    <div class="form-group">
                        <input type="text" name="uygulama_name" id="" class="form-control" placeholder="Uygulama Adı">
                    </div>
                    
                    <div class="form-group">
                        <input type="number" name="online_suresi" id="" class="form-control" placeholder="Online Süresi">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Kayıt Ekle" name="kayit_ekle" class="btn btn-success">
                    </div>

                
                </div>
                

 

                </form>
                


                <?php 


                    $sql = "SELECT * FROM gunluk"; 

                    $results =  mysqli_query($conn,$sql); 

                    //print_r($results); 
                    // mysqli_fetch_assoc tek kayıt getiriyor 

                    $query = mysqli_fetch_all($results,MYSQLI_ASSOC); 

                   // echo '<pre>';
                   // print_r($query); 
                   // echo '</pre>'; 

                     ?>
                      
                    

                 
        

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
