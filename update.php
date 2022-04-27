<?php include("connect.php"); 
$regno='';
$name='';
$dob='';
$course='';
$gender='';
$phoneno='';
$add='';

if(isset($_GET['rno']) && $_GET['rno']!= '') {
$regno=$_GET['rno'];
$stud = "select * from student_info where regno ='$regno'";
$res = mysqli_query($conn,$stud);
$row = mysqli_fetch_assoc($res);
$regno=$row['regno'];
$name=$row['studname'];
$dob=$row['dob'];
$course=$row['course'];
$gender=$row['gender'];
$phoneno=$row['phoneno'];
$add=$row['addr'];
}
?>

<?php   
     if (isset($_GET['submit']))
    {
       
        $regno=$_GET['regno'];
        $name=$_GET['name'];
        $dob=$_GET['dob'];
        $course=$_GET['course'];
        $gender=$_GET['gender'];
        $phoneno=$_GET['phno'];
        $add=$_GET['add'];

        $up= "UPDATE student_info SET studname = '$name',dob='$dob',course='$course',gender='$gender',phoneno='$phoneno',addr='$add' WHERE regno='$regno'";
        mysqli_query($conn,$up);
        header("location:insert.php");

        /* if($data)
         {
             echo "<script>alert('Record updated sucessfully.')
             window.location.href='insert.php';
             </script>";
         }
        else
        {
             echo "Record not updated";
        }*/
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insert.css">
    <title>UPDATE PAGE</title>
</head>
<body>
<div class="container"> 
    <form method="" action="">
        <b>REGISTATION NO:</b>
        <input readonly type="text" name="regno" value="<?php echo $regno; ?>"  /><br></br>
        <b>NAME:</b>
        <input type="text" name="name" value="<?php echo $name;?>" required /><br></br>
        <b>DATE OF BIRTH:</b>
        <input type="date" name="dob" value="<?php echo $dob;?>" required /><br></br>
         <b>COURSE:</b>
        <select id="course" name="course">
        <option value="<?php echo $course;?>">MCA</option>
        <option value="<?php echo $course;?>">MBA</option>
        <option value="<?php echo $course;?>">MTECH</option>
        </select><br></br>
       <b>GENDER:</b>
        <?php if($gender=='M') { ?>
        <input type="radio" value="Male" name="gender" checked > Male   
             <input type="radio" value="Female" name="gender"> Female   
                <input type="radio" value="Other" name="gender"> Other  <br></br>
        <?php } ?>
        <?php if($gender=='F') { ?>
        <input type="radio" value="Male" name="gender" checked > Male   
             <input type="radio" value="Female" name="gender" checked > Female   
                <input type="radio" value="Other" name="gender"> Other  <br></br>
        <?php } ?>
        <?php if($gender=='O') { ?>
        <input type="radio" value="Male" name="gender" > Male   
             <input type="radio" value="Female" name="gender"> Female   
                <input type="radio" value="Other" name="gender" checked > Other  <br></br>
        <?php } ?>
        <b>MOBILE NO:</b>
        <input type="TEXT" name="phno" value="<?php echo $phoneno;?>" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required /><br></br>
       <b> ADDRESS :</b>
        <input type="text" name="add" value="<?php echo $add; ?>" required /><br></br>

        
        <center>
        <button  class="button button1" input type="submit" name="submit">UPDATE</button>
        </center>

    </form>
    
        </div>
</body>
</html> 