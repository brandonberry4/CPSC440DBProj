<html>
    <head>    
        <title>Sign-up</title>    
    </head>    
    <body>    
        <link href = "style.css" type = "text/css" rel = "stylesheet" />    
        <h2>Sign-Up</h2>    
        <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >    
            <div class = "container">    
                <div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "fname" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "mname" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>ID:</label>    
                    <input type = "text" name = "lname" value = "" required/>    
                </div>
				<label for="Sport">Sport:</label>

				<select> name="sport" id="sports">
				<option value="Empty">-</option>
				<option value="Track & Field">Track & Field</option>
				<option value="Football">Football</option>
				<option value="Soccer">Soccer</option>
				<option value="Basketball">Basketball</option>
				</select>
				
				<form action="signin.html">
				<input type="submit" value="Go to Sign-in Page" />
				</form>
            </div>    
        </form>    
    </body>    
</html> 