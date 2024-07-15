<?php 

$servername = "localhost";
$username = "portfolio";
$password = "TEST1234!@#$";
$dbname = "portfolio";



// Check connection

    $conn = mysqli_connect($servername,
                            $username, 
                            $password,
                            $dbname);

    // if($link) // you can't use variables that are not declared first 


    // if($conn)
    // {
    //     echo "you are connected! </br>";
    // }
    // else{
    //     echo "could not connect!";
    // }



    // sql to create table
    // $sql = "CREATE TABLE user_data (
    //     id int AUTO_INCREMENT , 
    //     user_name VARCHAR(255) NOT NULL,    
    //     user_job VARCHAR(255),              
    //     about_user TEXT,                     
    //     about_more TEXT,
    //     skill TEXT,                       
    //     phone_number VARCHAR(20),            
    //     address VARCHAR(255),               
    //     email VARCHAR(255) NOT NULL,
    //     PRIMARY KEY (id)
    // )";


    // if (mysqli_query($conn, $sql)) {
    //     echo "Table MyGuests created successfully </br>";
    //   } else {
    //     echo "Error creating table: " . mysqli_error($conn);
    //   }



    
    
?>
























