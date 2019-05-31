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
                <h2 class="section-heading text-uppercase">Tüm Kullanıcılar</h2>
                <h3 class="section-subheading text-muted">-</h3>

                <div style="text-align: right;"> 

                     
                   


                </div>
              
              




                <table class="gunluk"> 
                
                <tr>
                    <th>Kullanıcı id</th>
                    <th>Kullanıcı Ad </th>
                     <th>Kullanıcı Soyad</th>
                    <th>Kullanıcı Email</th>
                    <th>gender</th>
                    <th>country</th>
                    <th>Yetki</th>
                    <th>Ağaç</th>
                </tr>

                <?php 

                     $sql = "SELECT * FROM users";  


                    

                    $results =  mysqli_query($conn,$sql); 

                    //print_r($results); 
                    // mysqli_fetch_assoc tek kayıt getiriyor 

                    $query = mysqli_fetch_all($results,MYSQLI_ASSOC); 

                   // echo '<pre>';
                   // print_r($query); 
                   // echo '</pre>'; 

                    foreach ($query as $key => $value) {?>
                     <tr>
                         <td><?php echo $value['userid'];?> </td>
                         <td><?php echo $value['firstname'];?></td>
                         <td><?php echo $value['lastname'];?></td>
                         <td><?php echo $value['email'];?></td>
                         <td><?php echo $value['gender'];?> </td>
                         <td><?php echo $value['country'];?></td>
                         <td><?php echo $value['isReviewer'] ==  1 ? 'Admin' : 'Kullanıcı' ;?></td>
                         <td><a href="numberoftree.php?user_id=<?php echo $value['userid'];?>"><button class="btn btn-success btn-sm">Ağaç</button></a></td>
                      </tr>
                    <?php }



                ?>

                </table>
        

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
