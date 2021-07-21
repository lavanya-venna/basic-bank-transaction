<?php
$conn=mysqli_connect("localhost","id17268780_transfer","Straightline#16","id17268780_transactions");
/*if(!$conn){
echo "connection failed";
}
else{
echo "connection successful";
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Now</title>
    <link rel="stylesheet" href="custstyle.css">
</head>
<body>
    <a href="home.html"><img class="logo" src="images/logo.svg" alt="logo"></a>
    <h1>TRANSFER NOW!</h1>
    <form action="transfer.php" method="POST">
        <table>
            <tr>
                <th> </th>
                <th>S.no</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td><input type="radio" name="first" value="1"></td>
                <td>1</td>
                <td>
                    <?php $sql="SELECT nameid FROM customers WHERE sno=1;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['nameid'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT email FROM customers WHERE sno=1;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['email'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT amt FROM customers WHERE sno=1;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['amt'];
                        }
                    }?>
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="first" value="2"></td>
                <td>2</td>
                <td>
                    <?php $sql="SELECT nameid FROM customers WHERE sno=2;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['nameid'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT email FROM customers WHERE sno=2;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['email'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT amt FROM customers WHERE sno=2;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['amt'];
                        }
                    }?>
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="first" value="3"></td>
                <td>3</td>
                <td>
                    <?php $sql="SELECT nameid FROM customers WHERE sno=3;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['nameid'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT email FROM customers WHERE sno=3;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['email'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT amt FROM customers WHERE sno=3;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['amt'];
                        }
                    }?>
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="first" value="4"></td>
                <td>4</td>
                <td>
                    <?php $sql="SELECT nameid FROM customers WHERE sno=4;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['nameid'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT email FROM customers WHERE sno=4;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['email'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT amt FROM customers WHERE sno=4;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['amt'];
                        }
                    }?>
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="first" value="5"></td>
                <td>5</td>
                <td>
                    <?php $sql="SELECT nameid FROM customers WHERE sno=5;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['nameid'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT email FROM customers WHERE sno=5;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['email'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT amt FROM customers WHERE sno=5;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['amt'];
                        }
                    }?>
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="first" value="6"></td>
                <td>6</td>
                <td>
                    <?php $sql="SELECT nameid FROM customers WHERE sno=6;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['nameid'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT email FROM customers WHERE sno=6;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['email'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT amt FROM customers WHERE sno=6;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['amt'];
                        }
                    }?>
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="first" value="7"></td>
                <td>7</td>
                <td>
                    <?php $sql="SELECT nameid FROM customers WHERE sno=7;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['nameid'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT email FROM customers WHERE sno=7;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['email'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT amt FROM customers WHERE sno=7;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['amt'];
                        }
                    }?>
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="first" id="#" value="8"></td>
                <td>8</td>
                <td>
                    <?php $sql="SELECT nameid FROM customers WHERE sno=8;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['nameid'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT email FROM customers WHERE sno=8;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['email'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT amt FROM customers WHERE sno=8;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['amt'];
                        }
                    }?>
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="first" value="9"></td>
                <td>9</td>
                <td>
                    <?php $sql="SELECT nameid FROM customers WHERE sno=9;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['nameid'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT email FROM customers WHERE sno=9;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['email'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT amt FROM customers WHERE sno=9;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['amt'];
                        }
                    }?>
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="first" value="10"></td>
                <td>10</td>
                <td>
                    <?php $sql="SELECT nameid FROM customers WHERE sno=10;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['nameid'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT email FROM customers WHERE sno=10;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['email'];
                        }
                    }?>
                </td>
                <td>
                    <?php $sql="SELECT amt FROM customers WHERE sno=10;"; 
                    $rst=mysqli_query($conn,$sql); 
                    $resno=mysqli_num_rows($rst); 
                    if($resno>0){
                        while($row=mysqli_fetch_assoc($rst)){
                            echo $row['amt'];
                        }
                    }?>
                </td>
            </tr>   
        </table>
        <input type="submit" value="TRANSFER NOW">
    </form>
</body>
</html>