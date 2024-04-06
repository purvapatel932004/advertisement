<html>
    <a href="viewuser.php">login</a>
<?php
include('connection.php');
$sql="SELECT * FROM `usertbl`";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0)
{
    echo "<table >
    <th> Id </th>
    <th> Name </th>
    <th> Password </th>
    <th> Edit </th>
    <th> Delete </th>";
    while($row=$result->fetch_assoc())
    {
        echo '<tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['username'].'</td>
        <td>'.$row['password'].'</td>
        <td><a href="edit.php?edit_id='.$row['id'].'">Edit</a></td>
        <td><a href="delete.php?delete_id='.$row['id'].'">Delete</a></td> 
        </tr>';
    }
    echo "</table>";
}
else
{
    echo "<table >
    <th> Id </th>
    <th> Name </th>
    <th> Password </th>
    <th> Edit </th>
    <th> Delete </th>
    </table>";
}
?>
