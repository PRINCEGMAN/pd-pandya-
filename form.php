
<html>
    <head>
        <title>ADMISSION FORM</title>
    </head>
    <body>
        <style>
body{
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    background: url("lapto.jpg");
                    background-size: cover;
                    
                    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }  
            input,textarea{
                width: 70%;
                /* height: 30px; */
                padding: 10px;
                margin: 10px;
                border-radius: 2px;
                border: 2px solid black;

            }
            div{
                margin: auto;
                text-align: center;
            }
            h1{
                padding: 20px;
                color: goldenrod;
              
            }
        </style>
        
        <div>
        <h1>P.D PANDYA BCA COLLEGE</h1>
        <h2>Welcome Student , <br>Fill up the form for Admission</h2>
        <?php 
        if($insert==true)
               echo "<h2 style='color:green'>Thank you for submiting admission form of PDPICA.</h2>"
            ?>
        <form action="form.php" method="post"> 
           <input type="text" name="name" id="name" placeholder="Enter Name here">
        <input type="number" name="age" id="age" placeholder="Enter Age here">
        <input type="text" name="gender" id="gender" placeholder="Enter Gender here">
        <input type="email" name="email" id="email" placeholder="Enter Email here">
        <input type="tel" name="tel" id="tel" placeholder="Enter mobile Number here">
        <input type="text"  name="Description" id="Description" placeholder="Enter Description here"><br>  
        <input style="width: 10%;background-color: lightgray;color: black;letter-spacing: 3px;border-radius: 5px;border-color: black;" type="submit">
</form></div>
    </body>
</html>
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
