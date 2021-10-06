<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";
  
$conn = mysqli_connect("localhost", "root", "", "register");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
$name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone =  $_REQUEST['phone'];
        $college = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
          
        // Performing insert query execution
        // here our table name is college
         $sql = "insert into userdata(name,email,phone,college,message) values('$name', 
             '$email','$phone','$college','$message')";
            
             if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully." 
                    . " Please browse your localhost php my admin" 
                    . " to view the updated data</h3>"; 
      
             } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
             mysqli_close($conn);
             ?>
          
  

