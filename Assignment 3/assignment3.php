<?php
    $username = "root";
    $servername = "localhost";
    $password="";
    $dbname="Feedback";
    $Name=$_POST['Text'];
    $Email=$_POST['email'];
    $FeedMsg=$_POST['Msg'];

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
    die("connection Fail".mysqli_connect_error());
    }


    $sql2="INSERT INTO FeedbackTable(UserName , Email,FeedBack ) VALUES('$Name','$Email','$FeedMsg')";
    if(mysqli_query($conn,$sql2)){
            echo "Inserted Successfully";
        }else
        {
            echo"error".mysqli_error($conn);
        }

    // $sql2="INSERT INTO FeedbackTable(UserName , Email,FeedBack ) VALUES('$Name','$Email','$FeedMsg')";
    // if(mysqli_query($conn,$sql2)){
    //         echo "Inserted Successfully";
    //     }else
    //     {
    //         echo"error".mysqli_error($conn);
    //     }


    // $sql1="CREATE TABLE FeedbackTable(id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, UserName Varchar(10),Email varchar(10),FeedBack varchar (300))";
    // if(mysqli_query($conn,$sql1)){
    //     echo "Created Successfully";
    // }
    // else{
    //     echo "Error".mysqli_error($conn);
    // }
   
    // $sql = "CREATE DATABASE Feedback";
    // if(mysqli_query($conn,$sql)){
    //     echo "Database Created";
    // }
    // else{
    //     echo "Error".mysql_error($conn);
    // }
?>