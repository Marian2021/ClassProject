<?php
$status="";
$db = mysqli_connect('localhost', 'root', '', 'photosite');
?>
    <h2>Comment Section Table</h2>

<?php
$result = mysqli_query($db,"SELECT * FROM commentSection");
echo "<table style='width:50%' class='striped'>
<tr class='header'>
                <td>sectionId</td>
                <td>pictureId</td>
            </tr>";
while($row = mysqli_fetch_assoc($result)){
	echo '<tr><td>'.$row['sectionId'].'</td><td><p>'.$row['pictureId'].'</p></td></tr>';

       }
echo "</table>";
mysqli_close($db);
?>
 
<div style="clear:both;"></div>
 
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>







