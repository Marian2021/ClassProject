<?php
$status="";
$db = mysqli_connect('localhost', 'root', '', 'photosite');
?>
    <h2>User Table</h2>

<?php
$result = mysqli_query($db,"SELECT * FROM user");
echo "<table style='width:50%' class='striped'>
<tr class='header'>
				<td>userId</td>
                <td>email</td>
                <td>username</td>
				<td>permissions</td>
                <td>isAdmin</td>
            </tr>";
while($row = mysqli_fetch_assoc($result)){
	echo '<tr><td>'.$row['userId'].'</td><td><p>'.$row['email'].'</p></td><td><p>'.$row['username'].'</p></td><td><p>'.$row['permissions'].'</p></td><td><p>'.$row['adminRights'].'</p></td></tr>';

       }
echo "</table>";
mysqli_close($db);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>







