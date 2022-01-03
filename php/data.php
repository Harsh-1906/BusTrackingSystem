<?php
$conn=mysql_connect("localhost","root","") or die('Connect Prob1');
$db=mysql_select_db("bus_php", $conn) or die('Connect Prob1');;
$src=$_POST['src'];
$dest=$_POST['dest'];

$q="select * from busDetails where srcLocation='$src' AND destLocation='$dest'";
$data=mysql_query($q);
$_row=mysql_fetch_array($data);
if($_row!=null){
while($_row=mysql_fetch_array($data)){
    
echo '<table border="1" cellspacing=5 cellpadding=5>';
echo '<tr>';
echo '<td>';
echo $_row['busNo'];;
echo '</td>';
echo '<td>';
echo $_row['srcLocation'];
echo '</td>';
echo '<td>';
echo $_row['destLocation'];
echo '</td>';
echo '</tr>';
echo '</table>';
   
}

}
else{
    echo 'No Record Found';
}
?>