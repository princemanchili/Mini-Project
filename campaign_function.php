<?php 
function load_campaign($sql,$con)
{
	echo '
				<table rules="all" border_color="red" class="table table-striped">
				<tr>
				<th>Campaign Name Name</th>
				<th>Organised By</th>
				<th>Start of Campaign</th>
				<th>End of Campaign</th>
                             <th>Description</th>

				
				</tr>';
				
					
							$result=$con->query($sql);
							$n=0;
							if($result->num_rows>0)
							{
								while($row=$result->fetch_assoc())
								{   
									$n++;
									echo "<tr>";
								
									echo "<td>".$row['C_NAME']."</td>";
			
									echo "<td>".$row['CO_B']."</td>";
                                                                        echo "<td>".$row['s_DOB']."</td>";
									echo "<td>".$row['E_DOB']."</td>";
									echo"<td>".$row['LOC']."</td>";
                                                                        echo"<td>".$row['DES']."</td>";
										
									
									echo "</tr>";
								}
							}
							
						
				
			echo'</table>';

}
?>