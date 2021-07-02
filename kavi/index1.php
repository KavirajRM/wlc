<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index1.php" method="get">
  <label for="breads">Number of breads:</label>
  <input type="text" id="breads" name="breads"><br><br>
  <label for="vada">Number of vada</label>
  <input type="text" id="vada" name="vada">
  <label for="samosa">Number of samosa</label>
  <input type="text" id="samosa" name="samosa">
  <label for="vadapavprice">Vada Pav price</label>
  <input type="text" id="vadapavprice" name="vadapavprice">
  <label for="samosapavprice">Samosa Pav Price</label>
  <input type="text" id="samosapavprice" name="samosapavprice">
 <br><br>
  <input type="submit" value="Submit" name="submit">
</form>   
</body>
</html>

<?php

if(isset($_GET['submit']))
{
$breads=$_GET['breads'];
$vada=$_GET['vada'];
$samosa=$_GET['samosa'];
$vadapavprice=$_GET['vadapavprice'];
$samosapavprice=$_GET['samosapavprice'];
$price1=0;
$price2=0;
if($vadapavprice<$samosapavprice){
    for($i=1;$i<=$samosa&&$breads>1;$i++){
        $price1=$samosapavprice*$i;
        $breads=$breads-2;
    }
    for($j=1;$j<=$vada&&$breads>1;$j++){
        $price2=$vadapavprice*$j;
        $breads=$breads-2;
    }
    $totalprice = $price1+$price2;
    echo"Maximum profit possible is Rs.$totalprice";
}
if($vadapavprice>=$samosapavprice){
    for($i=1;$i<=$vada&&$breads>1;$i++){
        $price1=$vadapavprice*$i;
        $breads=$breads-2;
    }
    for($j=1;$j<=$samosa&&$breads>1;$j++){
        $price2=$samosapavprice*$j;
        $breads=$breads-2;
    }
    $totalprice = $price1+$price2;
    echo"Maximum profit possible is Rs.$totalprice";
}


}

?>