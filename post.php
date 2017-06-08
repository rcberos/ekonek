<?php
$servername = "maindb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com";
$username = "Gameplandigital";
$password = "Gameplandigital01";
$dbname = "gp_digital";

$newContact = $_POST['contact'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$inquiry = $_POST['inquiry'];
$service = $_POST['service'];
$subservice = $_POST['subservice'];
$description = $_POST['description'];

/*
$sql = mysqli_query("INSERT INTO ekonek_inquiries(inquiryType, serviceType, subserviceType, comments) VALUES('".$inquiry."', '".$service."', '".$subservice."', '".$description."')");
$row = mysqli_num_rows($sql);
*/
$sql = "INSERT INTO ekonek_inquiries(inquiryType, serviceType, subserviceType, comments)
VALUES('".$inquiry."', '".$service."', '".$subservice."', '".$description."')";

if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">alert("New record created successfully!");</script>';
    echo '<script type="text/javascript">history.go(-1);</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>