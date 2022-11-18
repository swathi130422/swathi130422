<?php 
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach ($result as $row) { 

?>
					<tr>
						 
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td> 
									<td><?php echo $row["mobile"]; ?></td>
                                    <td><?php echo $row["arrival date"]; ?> </td>
									<td><?php echo $row["number of person"]; ?></td> 
									<td><?php echo $row["date of booking"]; ?></td> 
									<td><?php echo $row["date of leaving"]; ?></td> 
									<td><?php echo $row["payment"]; ?> </td>
									<td><?php echo $row["payment gateway"]; ?></td> 
									<td><?php echo $row["Term"]; ?></td> 
					</tr>   
<?php
} ?>