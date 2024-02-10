<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$conn = mysqli_connect($server, $username, $password, $database);

if($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
echo"";
session_start();
if(isset($_POST['Login'])){
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

if(isset($_POST['job'])){
    $cname = $_POST['cname'];
    $position = $_POST['position'];
    $skills = $_POST['skills'];
    $CTC = $_POST['CTC'];
    $Jdesc = $_POST['Jdesc'];

    $job = "INSERT INTO `jobs`(`cname`, `position`, `skills`, `CTC`, `Jdesc`) VALUES ('$cname','$position','$skills','$CTC','$Jdesc')";
    mysqli_query($conn, $job);
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $qual = $_POST['qual'];
    $apply = $_POST['apply'];
    $year = $_POST['year'];

    $submit = "INSERT INTO `candidates`(`name`, `qual`, `apply`, `year`) VALUES ('$name','$qual','$apply','$year')";
    mysqli_query($conn, $submit);
}

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

if(isset($_POST['contact'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    
    $contact = "INSERT INTO `contact`(`firstname`, `lastname`, `email`, `number`,`subject`) VALUES ('$firstname','$lastname','$email','$number','$subject')";
    if(mysqli_query($conn,$contact)){
        echo "<script>alert('Submitted Successfully');</script>";
    } else{
        echo "ERROR: Could not able to execute $contact. " . mysqli_error($conn);
    }
}

?>
