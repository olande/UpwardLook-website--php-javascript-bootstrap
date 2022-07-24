<?php
include_once 'databaseretrieve.php';
$result = mysqli_query($conn,"SELECT * FROM contact_us");
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
	
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 10px;

}

tr:nth-child(even) {
    background-color: white;

}
</style>
</head>
<body>
<table>
<tr style="font-size: 20px; background-color: #6dd5ed;
">
<td >Id</td>
<td>Full Names</td>
<td>Email</td>
<td>Country</td>
<td>Message</td>
<td>Date</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["country"]; ?></td>
<td><?php echo $row["message"]; ?></td>
<td><?php echo $row["Date"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html> 