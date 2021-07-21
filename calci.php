<?php
session_start();
?>
<?php
$conn=mysqli_connect("localhost","id17268780_transfer","Straightline#16","id17268780_transactions");
/*if(!$conn){
echo "connection failed";
}
else{
echo "connection successful";
}*/
?>
<?php
$a=$_POST['amount'];
$_SESSION['at']=$a;
$temp=$_SESSION['sino'];
$sql="SELECT amt FROM customers WHERE sno=$temp;"; 
$rst=mysqli_query($conn,$sql); 
$resno=mysqli_num_rows($rst);
if($resno>0){
while($row=mysqli_fetch_assoc($rst)){
    $temp2=$row['amt'];
    $_SESSION['acamt']=$temp2
}
}
if($_SESSION['at']<$temp2){
    header('Location:https://btransfer.000webhostapp.com/success.php');
}
else{
    header("location:https://btransfer.000webhostapp.com/error.php");
}
?>


<?php
/*
$temp1=$_SESSION['sino1'];
$sql="SELECT amt FROM customers WHERE sno=$temp1;"; 
$rst=mysqli_query($conn,$sql); 
$resno=mysqli_num_rows($rst);
if($resno>0){
    while($row=mysqli_fetch_assoc($rst)){
        $temp3=$row['amt'];
    }
}
$temp3=$temp3+$_SESSION['at'];
$temp2=$temp2-$_SESSION['at'];
$query="UPDATE customers SET amt=$temp3 WHERE sno=$temp1;";
$query1="UPDATE customers SET amt=$temp2 WHERE sno=$temp;";
$result=mysqli_query($conn,$query);
*/
?>