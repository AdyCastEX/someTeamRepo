<!-- This document is the view of the search module for user accounts-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>ICS Library</title>
		<script type = "text/javascript">
			function changeTextBox(value){ // This function checks the value of the text box
				if(value=='name'){
					string = "<input type='text' placeholder='Enter first name' name='firstname'/>";
	            	string+= "<input type='text' placeholder='Enter middle name' name='middlename'/>";
	            	string+= "<input type='text' placeholder='Enter last name' name='lastname'/>";
	            	document.getElementById("divtext").innerHTML = string; 
				}
				else if(value=='stdno'){
					string = "<input type='text' placeholder='Enter student number' name='studentno'/>";
					document.getElementById("divtext").innerHTML = string;
				}
				else if(value=='uname'){
					string = "<input type='text' placeholder='Enter username' name='username'/>";
					document.getElementById("divtext").innerHTML = string;
				}
				else if(value=='email'){
					string = "<input type='text' placeholder='Enter email address' name='emailadd'/>";
					document.getElementById("divtext").innerHTML = string;
				}
			}
		</script>
	</head>

	<body>
		<div id="container">
			<h1>ICS Library</h1>
		  	<div id="body">
		  		<form name="myform" method="post" action ="index.php/search_controller/search">
			  		<select name="field" onchange='changeTextBox(value)'>
						<option value="name">Name</option>
						<option value="stdno">Student Number</option>
						<option value="uname">Username</option>
						<option value="email">Email Address</option>
					</select>
					<div id="divtext">
	            		<input type="text" placeholder="Enter first name" name="firstname"/>
	            		<input type="text" placeholder="Enter middle name" name="middlename"/>
	            		<input type="text" placeholder="Enter last name" name="lastname"/>
	            	</div>
	            	</br><input type = "radio" name = "status" value = "all"/>All
	            	<input type = "radio" name = "status" value = "pending"/>Pending
	            	<input type = "radio" name = "status" value = "enabled"/>Enabled
	            	<input type = "radio" name = "status" value = "disabled"/>Disabled

	            	</br><button type="submit" id="submitButton"> Search </button>
	            </form>
          	</div>
          	<div id="result">

          	</div>
		</div>
	</body>
</html>