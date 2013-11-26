<?php
$db2 = mysql_connect("localhost","username","password");
mysql_select_db("database",$db2);
if(!empty($_POST["key"]))
{
$key = $_POST["key"];
$re = mysql_query("SELECT * FROM `query` WHERE `key` LIKE '%".$key."%'");
if(mysql_num_rows($re) < 1)
{
echo "<p>No results</p>";	
}
else
{
while($r = mysql_fetch_array($re))
{
printf("<p>%s</p>",$r["key"]);	
}
}
}
?>
