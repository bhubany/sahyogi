<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname ="db_sahyogi";

// Create connection
$conn = mysqli_connect($server, $user, $pass, $dbname);

if($conn){
    ?>
        <script>
            alert("Connection Successful");
        </script>
    <?php    
}else{
    ?>
        <script>
            alert("Connection Unsuccessful");
        </script>
    <?php      
}
?>