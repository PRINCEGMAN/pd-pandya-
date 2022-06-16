<?php   
    $insert=false;
    if(isset($_POST['name']))
    {
    $server = "localhost:3306";
    $username = "prince";
    $password = "0y42nrQ@";

    $con = mysqli_connect($server, $username, $password);
    if(!$con)
    {
            die("FAILED TO CONNECT DATA BASE ".mysqli_connect_error());
    }
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $pn = $_POST['tel'];
    $desc = $_POST['Description'];
    // echo $desr;
    $sql = "INSERT INTO `princedb`.`form` (`name`, `age`, `gender`, `email`, `phone number`,`description`) VALUES ('$name', '$age', '$gender', '$email', '$pn', '$desc')";
        // echo "success to connect db";
    if($con->query($sql) == TRUE)
    {
        $insert=true;  
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }
    $con->close();
}
?>


