<?php
$status="";
$db = mysqli_connect('localhost', 'root', '', 'photosite');
?>
    <h2>Picture Table</h2>

<?php
$result = mysqli_query($db,"SELECT * FROM picture");
echo "<table style='width:50%' class='striped'>
<tr class='header'>
                <td>photoId</td>
                <td>userId</td>
                <td>albumId</td>
				<td>title</td>
				<td>description</td>
				<td>pictureDirectory</td>
            </tr>";
while($row = mysqli_fetch_assoc($result)){
	echo '<tr><td>'.$row['pictureId'].'</td><td><p>'.$row['userId'].'</p></td><td><p>'.$row['albumId'].'</p></td><td><p>'.$row['pictureTitle'].'</p></td><td><p>'.$row['pictureDescription'].'</p></td><td><p>'.$row['pictureDirectory'].'</p></td></tr>';

       }
echo "</table>";
mysqli_close($db);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>







