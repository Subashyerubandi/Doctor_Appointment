<?php include 'backend.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("pic8.avif");
            background-size: cover;
        }
        form{
            border: 1px solid rgb(202, 229, 240);
            width: 350px;
            height: 380px;
            padding: 0px 30px 30px 30px;
            margin: auto;
            margin-top: 130px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgb(187, 190, 192);
        }
        .c23{
            color: rgb(216, 47, 47);
            width: 98%;
            height: 28px;
            background: rgb(247, 248, 245);
            padding: 4px;
            margin-top: 18px;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 1px solid rgb(249, 246, 187);
            font-size: 16px;

        }
        .c24{
            font-size: 17px;
            background-color: rgb(183, 192, 198);
            transition: 0.5s ease;
            margin-top: 10px;
            margin-left: 130px;
            height: 40px;
            width: 80px;
            padding: 6px;
            border-radius: 6px;
            cursor: pointer;
        }
        .c24:hover{
            background-color: rgb(246, 246, 173);
        }
        .c211{
            text-align: center;
        }
        .c3{
          font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="c1">
        <form method="POST" class="c21">
            <div class="c211"><h2>Appointment Form</h2></div>
            <input type="text" class="c23" id="exampleInputname" placeholder="enter your name" name="name"><br>

            <input type="number" class="c23" id="exampleInputnumber" placeholder="enter your phone number" name="number"><br>
              
            <input type="date" class="c23" placeholder="enter date" name="date"><br>

            <input type="time" class="c23" placeholder="enter date" name="time"><br>

            <input type="text" class="c23" placeholder="enter your problem" name="problem">
              
            <input type="submit" class="c24" name="appointment">
        </form>
    </div>
</body>
</html>