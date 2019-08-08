<?php
$firstName =filter_input(INPUT_POST,"Firstname");
$lastName = filter_input(INPUT_POST,"Lastname");
$email = filter_input(INPUT_POST,"Email");
$username = filter_input(INPUT_POST,"Username");
$password = filter_input(INPUT_POST,"Password");
$gender = filter_input(INPUT_POST,"Gender");
if(!empty($firstName)){
    if(!empty($lastName)){
        if(!empty($email)){
            if(!empty($username)){
                if(!empty($password)){
                    if(!empt($gender)){
                         
                    }
                }
            }
        }
    }


$host = "localhost";
$dbFirstname = "root";
$dbLastName = "root";
$dbEmail = "root";
$dbUsername = "root";
$dbPassword = " ";
$dbGender = "root";
$dbname ="online-selfcare";

//create connection
$conn = new mysql($host , $dbFirstname,$dbLastName,$dbEmail,$dbUsername,$dbPassword,$dbGender);
if(mysql_connect_error()){
    die("connect error('.mysql_connect_error().')".mysql_connect_error());
}
else{
    $sql ="Insert INTO user-table (firstName,lastName,email,username,password,gender) values ('$firstName,$lastName,$email,$username,$password,$gender')";
    if ($conn->query($sql)){
        echo "New record is inserted sucessfully";
    }
    else{
        echo "connection error";
    }
    $conn->close();
}
}

?>