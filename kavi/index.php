





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Problem 1</h1>
<form action="index.php" method="get">
  <label for="servers">Number of servers:</label>
  <input type="text" id="servers" name="servers"><br><br>
  <label for="minute1">Load Minute 1</label>
  <input type="text" id="minute1" name="minute1">
  <label for="minute2">Load Minute 2</label>
  <input type="text" id="minute2" name="minute2">
  <label for="minute3">Load Minute 3</label>
  <input type="text" id="minute3" name="minute3">
  <label for="minute4">Load Minute 4</label>
  <input type="text" id="minute4" name="minute4">
  <label for="minute5">Load Minute 5</label>
  <input type="text" id="minute5" name="minute5"><br><br>
  <input type="submit" value="Submit" name="submit">
</form>
<?php

if(isset($_GET['submit']))
{
$servers=$_GET['servers'];
$minute1=$_GET['minute1'];
$minute2=$_GET['minute2'];
$minute3=$_GET['minute3'];
$minute4=$_GET['minute4'];
$minute5=$_GET['minute5'];

function calculateload($minute,$servers){
    if($minute<50){
        $servers=$servers/2;
        $servers=floor($servers);
    }else{
        $servers=(2*$servers)+1;
    }
    
    return $servers;
}

$servers= calculateload($minute1,$servers);
$servers= calculateload($minute2,$servers);
$servers= calculateload($minute3,$servers);
$servers= calculateload($minute4,$servers);
$servers= calculateload($minute5,$servers);
echo "Output: The number of servers running after 5 minutes is $servers";
}

?>

</body>
</html>

