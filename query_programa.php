	<?php


	include 'db_connection.php';
	
	$conn = OpenCon();	
	mysqli_query($conn,"SET NAMES UTF8");
	$sql = "SELECT * FROM predstavleniq";

	
		if($result = mysqli_query($conn, $sql))
		{
				if(mysqli_num_rows($result) > 0)
				{
					
					echo '<table class="table1" width="95%"  align="center" cellspacing="2" cellpadding="2"> 
						 
							
							
						</tr>';
					
						$i=1;
					while($row = mysqli_fetch_assoc($result))
					{
						
						
							 
							
							$field1name = $row["id_predst"];
							$field2name = $row["ime_predst"];
							$field3name = $row["time_predst"];
							$field4name = $row["date_predst"];
						
							
							echo '<tr> 
							  <td colspan = 3>
							  <td>'.$i.'</td> 	
							  <td>'.$field2name.'</td> 							  
							  <td>'.$field3name.'</td> 
							  <td>'.$field4name.'</td> 
							   </tr>';   
							
							
							$i++;
             
					}
						echo "</table>";
				mysqli_free_result($result);
				} 
		else{
        echo "Няма налични записи!";
			}
		} else
		{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
 
	
CloseCon($conn);
?>