<?php
$status="";
$db = mysqli_connect('localhost', 'root', '', 'photosite');
?>
    <h2>Comment Table</h2>

<?php
$result = mysqli_query($db,"SELECT * FROM comment INNER JOIN commentSection ON commentSection.sectionId = comment.sectionId INNER JOIN picture ON commentSection.pictureId = picture.pictureId INNER JOIN user ON comment.userId = user.userId");
echo "<table style='width:50%' class='striped'>
<tr class='header'>
				<td>pictureId</td>
                <td>commentId</td>
				<td>userId</td>
                <td>sectionId</td>
                <td>content</td>
            </tr>";
while($row = mysqli_fetch_assoc($result)){
	echo '<tr><td><p>'.$row['pictureTitle'].'</p></td><td><p>'.$row['commentId'].'</p></td><td><p>'.$row['username'].'</p></td><td><p>'.$row['sectionId'].'</p></td><td><p>'.$row['content'].'</p></td></tr>';

       }
echo "</table>";
mysqli_close($db);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>







