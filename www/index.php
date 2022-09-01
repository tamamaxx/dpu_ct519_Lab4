<?php
if(isset($_GET['id'])) {
 $id = $_GET['id'];
}else{
  $id = null;
}

$mysql_hostname = "10.1.1.22"; 
$mysql_user = "Tamamaxx"; 
$mysql_password = "T@maM@xx";
$mysql_database = "CT519_Movies";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");

if (!$bd) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully".'<br>';

if($id>0)
{
$sql_stmt = "select * from Movie_Name n left join Movie_Type t on n.type = t.type where n.type=".$id;

}else
{
$sql_stmt = "select * from Movie_Name n left join Movie_Type t on n.type = t.type";
}

$result=mysqli_query($bd,$sql_stmt);
if(!$result)
{
die("Database access failed".mysqli_error());
}

$rows=mysqli_num_rows($result);

if($rows){
echo '<!DOCTYPE html><html lang="en-US"><head><title>CT519 Lab4</title></head><body>';

 while($row = mysqli_fetch_array($result)){
   echo 'Title: '.$row['Title'].'<br>';
   echo 'Director: '.$row['Director'].'<br>';
   echo 'Type: '.$row['Detail'].'<br>';
   echo 'Trailer: <a href="'.$row['Trailler'].'" target="_blank">'.$row['Trailler'].'</a><br><br>';
 }

echo '<button onclick="myFuction()">SQL statement to DB</button>'.PHP_EOL ;
echo '<script type="text/Javascript">' .PHP_EOL. 'function myFuction(){alert("'.$sql_stmt.'");}' .PHP_EOL. '</script>';
echo '</body></html>';
}

echo '<br><br> <a href="about.php">about me</a>';
mysqli_free_result($result);
mysqli_close($bd);
?>

