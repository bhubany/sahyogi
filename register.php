<?php

$fullname = $_POST['fname'];
$orgname = $_POST['oname'];
$email = $_POST['email'];
$username = $_POST['uname'];
$contact_pri = $_POST['con1'];
$contact_sec = $_POST['con2'];
$country = $_POST['country'];
$state = $_POST['state'];
$district = $_POST['district'];
$municipality = $_POST['mun'];
//$service_for =$_POST[''];
//$others =$_POST[''];

include 'dbreg.php';

$query = "INSERT INTO register(Fullname, Organization_Name, Email, Username, Contact1, Contact2, Country, District, Municipality) VALUES ('$fullname','$orgname','$email','$username','$contact_pri','$contact_sec','$country','$district','$municipality')";
$result = mysqli_query($conn, $query);

if($result){
    ?>
        <script>
            alert("Register Successful");
        </script>
    <?php    
}else{
    ?>
        <script>
            alert("Register Unsuccessful");
        </script>
    <?php      
}
?>
<a href="index.php">Click here to go to home</a>