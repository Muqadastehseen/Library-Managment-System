<?php
$ID=$_GET['id'];
$connection= mysqli_connect("localhost","root","","librarysystem");

//step 2
$query="SELECT * FROM books1 WHERE (id=$ID)";//sary column ka data lana ho
$query_result= mysqli_query($connection, $query);//mysqli_query()give schema type info
$data=mysqli_fetch_assoc($query_result);//2 value pass ...quesry result//,MYSQLI_ASSOC for associative array.


//echo "<pre>";
//print_r($data);
//echo $query_result->num_rows;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>show data using php</title>
</head>
<body>

<table border="1">
<tr>
     
    <th>Books_Name</th>
    <th>Categories_Name</th>
    <th>Author_Name</th>
    <th>Books_Number</th>
    <th>Books_Price</th>
</tr>
<tr>
    <td><?php echo $data['Books_Name']; ?></td>
    <td><?php echo $data['Categories_Name']; ?></td>
    <td><?php echo $data['Author_Name']; ?></td>
    <td><?php echo $data['Books_Number']; ?></td>
    <td><?php echo $data['Books_Price']; ?></td>
   
</tr>
</table>
</body>

