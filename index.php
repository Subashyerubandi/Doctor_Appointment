<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        body{
            background-image: url("pic7.avif");
            background-size: cover;
        }
        .c2{
            position: absolute;
            top: 10px;
            left: 10px;
        
        }
        .nav{
            width: 100vw;
        }
        .nav ul{
            height: 10px;
            list-style: none;
            margin-left: 400px;
            margin-right: 20px;
            float: left;
        }
        .nav ul li{
            display: flex;
            float: left;
            margin-top: 25px;
            margin-left: 20px;
        }
        .nav ul li a{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-decoration: none;
            color: rgb(11, 170, 239);
            font-size: 22px;
            transition: 1s ease;
        }
        .nav ul li a:hover{
            color: rgb(118, 70, 239);
        }
        .content{
            color: rgb(12, 11, 11);
            clear: both;
            /*border: 1px solid white;*/
            width: 60vw;
            padding-top: 300px;
            padding-left: 30px;
            float: left;
        }
        .a1{
            opacity: 0.9;
        }
        .a2{
            opacity: 0.9;
        }
        .a3{
            opacity: 0.9;
        }
        .a4{
            opacity: 0.9;
        }
        .p1{
            font-size: 25px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-left: 0%;
            padding-top: 20px;
        }
        .c21{
            color: rgb(29, 111, 244);
            font-size: 40px;
        }
        
    </style>
</head>
<body>
    <div class="c1">
        <div class="header">
            <div class="c2">
                <h1 class="c21"><b>Doctor Appointment</b></h1>
            </div>
            <div class="nav">
                <ul>
                    <li><a class="a1" href="main.php">Main</a></li>
                    <li><a class="a2" href="appointment.php">Book Appointment</a></li>
                    <li><a class="a3" href="checkappointment.php">Check Appointment</a></li>
                    <li><a class="a4" href="login.php">Log out</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <p class="p1">A doctor holds a very important position in society.</p>
            <p class="p1">He cures all types of diseases and all types of people without any discrimination.</p>
            <p class="p1">He makes people get relief from pain and suffering.</p>
            <p class="p1">There are different types of doctors like Dentist, ENT Doctor, Child Specialists, Gynaecologists etc.</p>
        </div>
    </div>
</body>
</html>