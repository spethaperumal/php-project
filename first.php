
<?php
$a=$_POST['stname'];
$b=$_POST['stclass'];
$con=mysqli_connect("localhost","root","Pethu@1234","detail");
$sql="INSERT INTO student_detail(name,class) values('$a','$b')";
$c=mysqli_query($con,$sql);
if($c)
{
    echo"successfully added";

}
else{
    echo"not added";
}



?>
