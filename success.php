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
$_SESSION['acamt']=$_SESSION['acamt']-$_SESSION['at'];

$query="UPDATE customers SET amt=$temp3 WHERE sno=$temp1;";
$query1="UPDATE customers SET amt=$_SESSION['acamt']' WHERE sno='$_SESSION['sino']';";

$result=mysqli_query($conn,$query);
$result1=mysqli_query($conn,$query1);

if($result){
    echo "successfully updated";
}
else{
    echo "no successful";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction successful</title>
</head>
<body>
    <h1>Transaction Successful!</h1>
</body>
</html>