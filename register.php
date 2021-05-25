<?php
$fnameErr = $unameErr = $emailErr = $conErr = $countryErr = $stErr =$distErr =$munErr =$serviceErr= $otherErr= "";
$err= $submit =0;         
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function validate_phone_number($phone)
{
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        return false;
     } else {
       return true;
     }
}
/*$fullname = $_POST['fname'];c
$orgname = $_POST['oname'];
$email = $_POST['email'];c
$username = $_POST['uname'];c
$contact_pri = $_POST['con1'];c
$contact_sec = $_POST['con2'];
$country = $_POST['country'];c
$state = $_POST['state'];c
$district = $_POST['district'];c
$municipality = $_POST['mun'];c
//$service_for =$_POST[''];c
//$others =$_POST[''];
*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err = 0;
    $submit = 1;
    $orgname = test_input($_POST['oname']);
    $contact_sec = test_input($_POST['con2']);
    $service_for =test_input($_POST['service']);
    $others = test_input($_POST['others']);

    if (empty($_POST["fname"])) {
      $fnameErr = "Name is required";
      $err=1;
    } else {
      $fullname = test_input($_POST["fname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$fullname)) {
        $fnameErr = "Only letters and white space allowed";
        $err=1;
      }
    }

    if (empty($_POST["uname"])) {
        $unameErr = "Username is required";
        $err=1;
    }else{
        $username = test_input($_POST["uname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
          $unameErr = "Only letters and white space allowed";
          $err=1;
        }
    }     

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $err=1;
    }else{
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Invalid email format";
           $err=1;
        }
    }
    
    if (empty($_POST["country"])) {
        $countryErr = "Required Field";
        $err=1;
      } else {
        $country = test_input($_POST["country"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$country)) {
          $countryErr = "Only letters and white space allowed";
          $err=1;
        }
      }

    if (empty($_POST["district"])) {
        $distErr = "Required Field";
        $err=1;
      } else {
        $district = test_input($_POST["country"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$district)) {
          $distErr = "Only letters and white space allowed";
          $err=1;
        }
      }

      if (empty($_POST["state"])) {
        $stErr = "Required Field";
        $err=1;
      } else {
        $state = test_input($_POST["state"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[1-7]*$/",$state)) {
          $stErr = "Invalid format";
          $err=1;
        }
      }
    
      if (empty($_POST["mun"])) {
        $munErr = "Required Field";
        $err=1;
      } else {
        $municipality = test_input($_POST["country"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$municipality)) {
          $munErr = "Only letters and white space allowed";
          $err=1;
        }
      }
    if (empty($_POST["con1"])) {
        $conErr = "Contact is required";
        $err=1;
    } else{
        $contact_pri= test_input($_POST["con1"]);
        if (validate_phone_number($contact_pri) == false){
        $conErr = "Invalid format";
        $err=1;
        }
    }

    if(empty($_POST['service'])){
        $serviceErr = "Required Field";
        $err=1;
    }

    if($service_for=="other"){ 
        if (empty($_POST["others"])) {
            $otherErr = "Required Field";
            $err=1;
        } else {
            $others = test_input($_POST['others']);
        }   
    }    
}

if($err==0 && $submit==1){
    include 'dbreg.php';
    $query = "INSERT INTO register(Fullname, Organization_Name, Email, Username, Contact1, Contact2, Country, District, Municipality,Service_For) VALUES ('$fullname','$orgname','$email','$username','$contact_pri','$contact_sec','$country','$district','$municipality','$service_for')";
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
            alert("Register Successful");
        </script>
    <?php   
    }
}
?>