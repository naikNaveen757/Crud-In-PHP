<?php include("connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insert.css">
    <title>STUDENT REG FORM</title>
</head>
<body>
</html>
<header> </header>
<div class="split left">
        <div class="container"> 
        <center> <h2 class="student">STUDENT FORM</h2></center>
        <form method="get" action="">
        <b>REGISTATION NO:</b>
        <input type="text" name="regno" value="" required >
        <b>NAME:</>
        <input type="text" name="name" value="" required >
        <b>DATE OF BIRTH:</b>
        <input type="date" name="dob" value="" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <b>COURSE:</b>
        <select id="course" name="course">
        <option value="MCA">MCA</option>
        <option value="MBA">MBA</option>
        <option value="Mtech">MTECH</option>
        </select><br></br>

        <b>GENDER:</b>
        <input type="radio" value="Male" name="gender" checked > Male   
             <input type="radio" value="Female" name="gender"> Female   
                <input type="radio" value="Other" name="gender"> Other  <br></br>
        <b>MOBILE NO:</b>
        <input type="text" name="phno" value="" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required />
       <b> ADDRESS :</b>
        <textarea cols="10" name="add" value="" required ></textarea><br></br>
    <center>
        <button  class="button button1" input type="submit" name="submit">INSERT</button>
        </center>
    </form>
        </div>
</div>
    <?php
    if (isset($_GET['submit']))
    {
        $regno=$_GET['regno'];
        $name=$_GET['name'];
        $dob=$_GET['dob'];
        $course=$_GET['course'];
        $gender=$_GET['gender'];
        $phno=$_GET['phno'];
        $add=$_GET['add'];

    if(isset($_GET)&!empty($_GET))
    {
    $res="select * from student_info where regno='$regno' or phoneno='$phno'";
    $data1=mysqli_query($conn,$res);
    $getData=mysqli_num_rows($data1);
	if($getData>0)
    {
        echo "<script>alert('Record already exists CONSTRAINT VOILATIONS')
        window.location.href='insert.php';
        </script>";
	}
	else
    {
        $query="INSERT INTO student_info VALUES ('$regno','$name','$dob','$course','$gender','$phno','$add')";

        $data=mysqli_query($conn,$query);

        if($data)
        {
          
        }
        else
        {
            echo "<script>alert('Failed')
            window.location.href='insert.php';
            </script>";
        }
        
    }
    }
}
        
        
    
{
    
}
			
    ?>
 

    <div class="split right">
    <div class="container1"> 
     <center> <h2>OUTPUT TABLE</h2></center>
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
                <th colspan="2">OPERATIONS</th>
            </tr>
        

        <?php
        while( $result=mysqli_fetch_assoc($data))

        {
           echo" <tr> 
                <td><span class='insert'>".$result['regno']."</td>
                <td>".$result['studname']."</td>
                <td>".$result['dob']."</td>
                <td>".$result['course']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['phoneno']."</td>
                <td>".$result['addr']."</td> 
                <td><button><a href='update.php?rno=$result[regno]'><p style='color:green;'>UPDATE </P></button></td></a>

                <td><button><a href='delete.php?regno=$result[regno]' ><p style='color:red;'> DELETE </P></button></td> </a></tr>";
            }
   
    }
    else
    {
        echo "<p style='color:red;'> No records found </P>";
    }
    
     ?>
    </table>
  
    </div>
    <center>
     
<div class="dropdown">
 <button class="button button1">Search by</button>
  <div class="dropdown-content">
    <a href="regno.php">REGISTRATION NO</a>
    <a href="name.php">NAME</a>
    <a href="course.php">COURSE</a>
  </div>
</div>
<button class="button button1" onclick="window.location.href='desc.php'">DESCENDING</button></a>
<button class="button button1" onclick="window.location.href='tochar.php'">DATE FORMAT</button></a>

        </center>
        
</div>

    
</body>
</html>
<style>
/* Dropdown Button */
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}

  
</style>
<script>
function myConfirm() {
  var result = confirm("Want to delete?");
  if (result==true) {
   return true;
  } else {
   return false;
  }
}
