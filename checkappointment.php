<?php include 'backend.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
    padding: 8px;
}
    </style>
</head>
<body>
    <div>
    <table class="table">
        <thead>

            <tr>
                <th scope="col" >No</th>
                <th scope="col" >Name</th>
                <th scope="col" >Number</th>
                <th scope="col" >Date</th>
                <th scope="col" >Time</th>
                <th scope="col" >Problem</th>
      
            </tr>
    </thead>
    <?php $sql = "SELECT `name`,`number`,`date`,`time`,`problem` FROM `details`";
    $result = mysqli_query($conn, $sql);
    $i = 0;
    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()) {
        echo"
        <tbody>
            <tr>
                <td>".++$i."</td>
                <td>".$rows['name']."</td>
                <td>".$rows['number']."</td>
                <td>".$rows['date']."</td>
                <td>".$rows['time']."</td>
                <td>".$rows['problem']."</td>
            </tr>";
    }}
    else{
      echo"";
    }?>
    </tbody>
    </table>
    </div>
</body>
</html>