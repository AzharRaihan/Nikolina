<?php 
$name  = $_POST ['name'];
$company  = $_POST ['company'];
$email  = $_POST ['email'];
$number  = $_POST ['number'];
$subject  = $_POST ['subject'];
$message  = $_POST ['message'];
$conn = new mysqli('localhost', 'root', '', 'nikolina');
if($conn->connect_error){
    die('Connection Filed :'.$conn->connect_error);
}else{
    $stmt = $conn->prepare ("insert into user_contact(name,company,email,number,subject,message) value(?,?,?,?,?,?)");
    $stmt->bind_param("sssiss", $name, $company, $email, $number, $subject, $message);
    $stmt->execute();
    echo "Contacted Successful";
    $stmt->close();
    $conn->close();
}

?>