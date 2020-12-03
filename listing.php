<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from studentathlete where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from studentathlete";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                   
                <td>First Name</td>     
                <td>Last Name</td> 
				<td>ID</td>
				<td>Sport</td>
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>    