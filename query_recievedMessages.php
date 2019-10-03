<?php


include 'db_connection.php';

$conn = OpenCon();	
mysqli_query($conn,"SET NAMES UTF8");
	$sql = "SELECT * FROM tblcontact";
  
	
		if($result = mysqli_query($conn, $sql))
		{
				if(mysqli_num_rows($result) > 0)
				{
					
					echo '<table class="table1" width="95%"  align="center" border="5" cellspacing="2" cellpadding="2"> 
						 
							
							
						</tr>';
					
						
					while($row = mysqli_fetch_assoc($result))
					{
						
							
							$field1name = $row["id_tblcontact"];
							$field2name = $row["user_name"];
							$field3name = $row["user_email"];
							$field4name = $row["subject"];
							$field5name = $row["content"];
							
							
								echo '<tr> 
							  <td>'.$field2name.'</td> 							  
							  <td>'.$field3name.'</td> 
							  <td>'.$field4name.'</td>  
							  <td colspan="2"><textarea class="box">'.$field5name.'</textarea></td>
							   </tr>';   
							  
							
							
						
							   
						
             
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