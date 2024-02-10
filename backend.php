<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'doctorappointment';

$conn = mysqli_connect($server, $username, $password, $database);

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
echo"";
session_start();

if(isset($_POST['register'])){ 
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO `user`(`name`, `email`, `number`, `password`) VALUES ('$name','$email','$number','$password')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('User registered successfully.');</script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query="SELECT * FROM user WHERE `email` ='$email' AND `password`='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (mysqli_num_rows($result) == 1){
        header("location:index.php");
    }
    else{
        $error = 'emailid or password is incorrect';
    }
}

if(isset($_POST['appointment'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $problem = $_POST['problem'];
    
    $contact = "INSERT INTO `details`(`name`, `number`, `date`, `time`,`problem`) VALUES ('$name','$number','$date','$time','$problem')";
    if(mysqli_query($conn,$contact)){
        echo "<script>alert('Submitted Successfully');</script>";
    } else{
        echo "ERROR: Could not able to execute $contact. " . mysqli_error($conn);
    }
}

?>
