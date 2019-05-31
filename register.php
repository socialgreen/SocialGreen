<?php require 'config.php'; ?> 
<?php error_reporting(0); ?>

<?php 

 
    if(isset($_SESSION["firstname"])){
        echo ' <meta http-equiv="refresh" content="1;URL=index.php">'; // meta yünlendirme kodu 
    }

?>


<?php 

    /*
    $gunler = array('pazartesi','salı','çarsamba','perşembe','cuma','cumartesi','pazar');

    echo '<pre>';
    print_r($gunler); 
    echo '</pre>'; 

     foreach ($gunler as $key => $value) {
         echo $value. '<br>';
     }

     */ 

?>
 
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .register-form {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }
        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #4CAF50;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
            background: #43A047;
        }
        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }
        .form .message a {
            color: #4CAF50;
            text-decoration: none;
        }
        .form .register-form {
            display: none;
        }
        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }
        .container:before, .container:after {
            content: "";
            display: block;
            clear: both;
        }
        .container .info {
            margin: 50px auto;
            text-align: center;
        }
        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }
        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }
        .container .info span a {
            color: #000000;
            text-decoration: none;
        }
        .container .info span .fa {
            color: #EF3B3A;
        }
        body {
            background: #76b852; /* fallback for old browsers */
            background: -webkit-linear-gradient(right, #76b852, #8DC26F);
            background: -moz-linear-gradient(right, #76b852, #8DC26F);
            background: -o-linear-gradient(right, #76b852, #8DC26F);
            background: linear-gradient(to left, #76b852, #8DC26F);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>
<body>

<div class="form">
    <div class="form_container">

        <div>
            <?php
 
 
                if (isset($_POST['register'])) {

                    //print_r($_POST);

                    //trim() boşlukları temizler diğerlerini de trim için alın. ya da trimi bir fonsiyonun içine alın ordan kullanın 


                    $email = trim($_POST['email']);
                    $password = $_POST['password'];
                    $firstname = $_POST['firstname'];
                    $lastname= $_POST['lastname'];
                    $gender= $_POST['gender'];
                    $country= $_POST['country'];

                    if ($email == '') {
                        $hata[] = 'Lütfen email giriniz.';
                    }
                    if ($password == ''){
                        $hata[] = 'Lütfen şifre giriniz';
                    }
                    if ($firstname == ''){
                        $hata[] = 'Enter firstname';
                    }
                    if ($lastname == ''){
                        $hata[] = 'Enter lastname';
                    }
                    if ($gender == ''){
                        $hata[] = 'Lütfen cinsiyet seçiniz';
                    }
                    if ($country == ''){
                        $hata[] = 'Lütfen ülke seçiniz';
                    }


                    
                    $kontrol = mysqli_query($conn, "SELECT * FROM users WHERE email ='$email'"); // email daha önce eklenmiş mi
                    
                    if (mysqli_num_rows($kontrol) > 0) {
                        $hata[] = 'Bu email daha önce kullanılmış.';
               
                    }

                    //print_r($hata);

                    if($hata)
                    {
                        // print_r($hata); 
                        // hataları arraya attım ve burda listeliyorum
                        foreach ($hata as $key => $value) {
                            echo $value. '<br>'; 
                        }
                    }
                    else
                    {
             
                         $sql = "INSERT INTO users (email, password, firstname, lastname,gender,country)
                        VALUES ('$email', '$password', '$firstname','$lastname','$gender','$country')";


                    /*
                    oop
                    if ($conn->query($sql) === TRUE) {
                        echo "kayıt eklendi";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    */


                    if (mysqli_query($conn, $sql)) {
                        echo "Kayıt Eklendi. Teşekkür ederiz.";
                        echo ' <meta http-equiv="refresh" content="2;URL=login.php">'; 

                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }



                    }

             

            } 
             

            ?>

        </div>
        <div class="title_container">

 
            <h2>Social Green Registration System</h2>
        </div>
        <div class="row clearfix">
            <div class="">
                <form action="" method="POST">
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                        <input type="email" name="email" placeholder="Email" value="<?php echo @$_POST['email'];?>" required />
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="password" name="password" placeholder="Password" value="<?php echo @$_POST['password'];?>" required />
                    </div>
                    <div class="row clearfix">
                        <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" name="firstname" placeholder="First Name" value="<?php echo @$_POST['firstname'];?>" />
                            </div>
                        </div>
                        <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" name="lastname" placeholder="Last Name" required value="<?php echo @$_POST['lastname'];?>" />
                            </div>
                        </div>
                    </div>
                    <div class="input_field radio_option">
                        <input type="radio" name="gender" value="male" id="rd1">
                        <label for="rd1">Male</label>
                        <input type="radio" name="gender" value="female" id="rd2">
                        <label for="rd2">Female</label>
                    </div>
                    <div class="input_field select_option">
                        <select name="country">
                            <option value="">Select a country</option>
                            <option value="Türkiye">Türkiye</option>
                            <option value="Diğer">Diğer</option>
                        </select>
                        <div class="select_arrow"></div>
                    </div>

                    <input class="button" type="submit" name="register" value="Register" />
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>

