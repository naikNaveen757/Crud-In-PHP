<?php include("connect.php"); ?>
<style>
    td
    {
        padding: 10px;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="split right">
      <h2>OUTPUT TABLE</h2>
    <?php
    $query="SELECT * FROM STUDENT_INFO";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    
    if($total!=0)
    {
        ?>
        <table>
            <tr>
                <th>Regno</th>
                <th>name</th>
                <th>dob</th>
                <th>course</th>
                <th>gender</th>
                <th>phone</th>
                <th>address</th>
                <th colspan="2">OPARTIONS</th>
            </tr>
        

        <?php
        while( $result=mysqli_fetch_assoc($data))

        {
           echo" <tr> 
                <td>".$result['regno']."</td>
                <td>".$result['name']."</td>
                <td>".$result['dob']."</td>
                <td>".$result['course']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['phoneno']."</td>
                <td>".$result['add']."</td> 
            <td><a href='update.php?regno=$result[regno]&name=$result[name]&dob=$result[dob]&course=$result[course]&gender=$result[gender]&phoneno=$result[phoneno]&add=$result[add]'> EDIT </td></a>

                <td> <a href='delete.php?regno=$result[regno]'>DELETE </td> </tr>";
            }
   
    }
    else
    {
        echo "No records found";
    }
     ?>
    </table>

</body>
</html>