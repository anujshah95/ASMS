<?php
$link=mysql_connect("localhost","root","root");
if (!$link) {
    die("Connection failed: " . mysql_connect_error());
}

$qq=mysql_select_db("asms",$link);



$c=$_GET['c'];

	
if($c=="head_light")
{
	$query=mysql_query("select * from tbl_category where type='head light'");
echo "<table>
<tr>

<th>Name</th>
<th>Image</th>
</tr>";
while($row = mysql_fetch_array($query)) {
    echo "<tr>";
    
    echo "<td>" . $row['name'] . "</td>";
  echo '<td><img  width=100 height=100 src="data:image/jpeg;base64,'.base64_encode( $row['image_url'] ).'"/></td>';
      echo "</tr>";
    
}
echo "</table>";	
}
else if($c=="side_light")
{
	$query=mysql_query("select * from tbl_category where type='ac filter'");
echo "<table>
<tr>

<th>Name</th>
<th>Image</th>
</tr>";
while($row = mysql_fetch_array($query)) {
    echo "<tr>";
    
    echo "<td>" . $row['name'] . "</td>";
  echo '<td><img  width=100 height=100 src="data:image/jpeg;base64,'.base64_encode( $row['image_url'] ).'"/></td>';
      echo "</tr>";
    
}
echo "</table>";	
}
else
{
	echo "not Found";
}

?>

