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
echo "the transferer is: ".$_SESSION['sino'];
?>

<?php
$sn1=$_POST['first1'];
$_SESSION['sino1']=$sn1;
echo "the debitor is: ".$_SESSION['sino1'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calci.php" method="POST">
        <label>Amount:</label><input type="number" name="amount">
        <input type="submit" value="submit">
    </form>
</body>
</html>