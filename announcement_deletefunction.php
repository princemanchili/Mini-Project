<?php 
function load_deleteannouncement($sql,$con)
{
	echo '
				<table rules="all" border_color="red" class="table table-striped">
				<tr>
				<th>Announcement Name</th>
				<th>Organised By</th>
				<th>Date of Announcement</th>
				<th>Blood Needed</th>
                             <th>Requirements</th>
<th>Remarks</th>
                             <th>Delete</th>

				
				</tr>';
				
					
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{   
									$n++;
									echo "<tr>";
								
									echo "<td>".$row['A_NAME']."</td>";
			
									echo "<td>".$row['O_B']."</td>";
                                                                        echo "<td>".$row['DOB']."</td>";
									echo "<td>".$row['A_BLOOD']."</td>";
									echo"<td>".$row['REQUIREMENTS']."</td>";
echo"<td>".$row['REMARK']."</td>";
									echo "<td><a href='admin_announcement_delete.php?id=".$row['A_ID']."' class='btn btn-danger btn-xs'><i class='fa fa-trash'></i> Delete</a></td>";
										
									
									echo "</tr>";
								}
							}
							
						
				
			echo'</table>';

}
?>