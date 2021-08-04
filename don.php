<?php
$YourName = $_POST['YourName'];
$Email = $_POST['Email'];
$PhoneNumber = $_POST['PhoneNumber'];
$Password = $_POST['Password'];
echo $PhoneNumber;
$conn =  mysqli_connect('localhost','root','','Register');
if ($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into input(YourName, Email, PhoneNumber, Password)values(?, ?, ?, ?)");
    $stmt->bind_param("ssis",$YourName, $Email, $Phonenumber, $Password);
    if(!$stmt->execute())echo $stmt->error;
    echo "Registeration Successfully .....";
    $stmt->close();
    $conn->close();
}
?><br><br>
    Back To Log in<br><br>

<a href=../appe.php><input type=button class="auth-btn" value='Login'></a><br>

