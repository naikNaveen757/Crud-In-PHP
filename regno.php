<?php
 include ("connect.php");
 ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="search.css">
</head>
<body>
<a href="insert.php" class="previous">&laquo; Previous</a>
<div class="bar">
  <form class="example" action="" method="GET" style="margin:auto;max-width:400px">
  <input type="text" placeholder="Enter the REGISTRATION NO" name="regno">
  <button type="submit" name="submit"><i class="fa fa-search"></i></button>
  </form>
</div>
  <?php
  if(isset($_GET['submit']))
 {
    $search=$_GET['regno'];
    $query="select * from student_info where regno like '%$search%'";
    $data=mysqli_query($conn,$query) or die("query failed");
    $total=mysqli_num_rows($data);
    if($total!=0)
    {
        ?>
        <div class="tableposition">

        <table>
            <tr>
                <th>Regno</th>
                <th>name</th>
                <th>dob</th>
                <th>course</th>
                <th>gender</th>
                <th>phone</th>
                <th>address</th>
                
            </tr>
        

        <?php
    while($row=mysqli_fetch_assoc($data))
        { 
            echo" <tr> 
                 <td>".$row['regno']."</td>
                 <td>".$row['studname']."</td>
                 <td>".$row['dob']."</td>
                 <td>".$row['course']."</td>
                 <td>".$row['gender']."</td>
                 <td>".$row['phoneno']."</td>
                 <td>".$row['addr']."</td> 
                 </tr>";
 
         }
    
     }
     
     else
     {
        echo "<script>alert('No records found!')
        window.location.href='course.php';
        </script>";
     }
    }
?>
</div>


</body>
</html> 
