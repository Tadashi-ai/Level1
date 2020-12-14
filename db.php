<?php  


function Createdb(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Details";

     //create connection
	$con = mysqli_connect($servername, $username, $password);

	//check connection
	if(!$con){
		die("Connection Failed:".mysqli_connect_error());
	}

	//create database
	$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

	if(mysqli_query($con, $sql)) {
        $con = mysqli_connect($servername, $username, $password,$dbname);


        $sql = "CREATE TABLE IF NOT EXISTS students(
                 id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
                 student_name VARCHAR(25)NOT NULL ,
                 student_course VARCHAR(20),
                 student_phone VARCHAR(10),
                 student_gender VARCHAR(10));
        ";

        if (mysqli_query($con,$sql)) {
            return $con;
            }else{
            echo "table not created";
        }
	}else{
		echo "Error while creatingDataBase".mysqli_error($con);

		
	}
}