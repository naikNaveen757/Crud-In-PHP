<?php include("connect.php");
$regno=$_GET['regno'];
$query="DELETE FROM STUDENT_INFO WHERE regno='$regno' ";
$data=mysqli_query($conn,$query);
if($data)
{
    
    echo "<script>alert('Record deleted')
    window.location.href='insert.php';
    </script>";

}
else
{
    echo "<script>alert('Failed')
    window.location.href='insert.php';
    </script>";
}
?>