<?php 
    
    function user_name_sec($user_id)
    {
        global $conn; 

        $results = mysqli_query($conn, "SELECT * FROM users WHERE userid ='$user_id'");
        $query = mysqli_fetch_assoc($results);

        return $query["firstname"]. ' '. $query["lastname"]; 
    }



    function yuzde_hesapla($sure)
    {

        if($sure == 0) { $yuzde = 10; }
        else if($sure > 0 AND $sure <= 20 ) { $yuzde = 5; }
        else if($sure > 21 AND $sure <= 60 ) { $yuzde = -5; }
        else if($sure > 61 AND $sure <= 90 ) { $yuzde = -20; }
        else if($sure > 91 AND $sure <= 120 ) { $yuzde = -30; }
        else if($sure >= 91 ) { $yuzde = -50; }
        else { $yuzde = 0; }

        return $yuzde;


}




?>