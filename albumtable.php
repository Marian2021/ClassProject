<?php
$status="";
$db = mysqli_connect('localhost', 'root', '', 'photosite');
?>
    <h2>Album Table</h2>

<?php
$result = mysqli_query($db,"SELECT * FROM albums INNER JOIN user ON albums.userId = user.userId");
echo "<table style='width:50%' class='striped'>
<tr class='header'>
                <td>albumId</td>
				<td>userId</td>
				<td>Title</td>
                <td>Description</td>
                
            </tr>";
while($row = mysqli_fetch_assoc($result)){
	echo '<tr><td>'.$row['albumId'].'</td><td><p>'.$row['username'].'</p></td><td><p>'.$row['title'].'</p></td><td><p>'.$row['description'].'</p></td></tr>';

       }
echo "</table>";
mysqli_close($db);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>







