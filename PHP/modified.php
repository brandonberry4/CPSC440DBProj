<?php    
    
while($row = mysql_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->StudentID;?>  
        </td>  
        <td>  
            <?php echo $row->FirstName;?>  
        </td>  
        <td>  
            <?php echo $row->LastName;?>  
        </td>  
        <td>  
            <?php echo $row->SportName;?>  
        </td>
		<td>  
            <?php echo $row->Position;?>  
        </td> 
        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
            <? php } ?>