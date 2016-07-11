<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Results</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap-table.css">
<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
<script>

//The following code is used for changing values in table based on sem clicked.

	function getvalue(e)
	{
		var opt=e.value;
		if('none'!=opt)
		{
			document.cookie="sem='"+opt+"'";
			document.location.reload(true);
		}
		/* -- to access the cookie --
		var sem = document.cookie;
		window.prompt(sem); or alert(sem);
		use alert() as print*/
	}
</script>
</head>

<body>
	
		<div id="header-wrapper">
			<div class="logo">					
				<h1>Vedavyasa Educations</h1>					
			</div>
			<div class="logout" style="float:right;margin-right:10px;margin-top:-50px">
				<a class="btn btn-success" href="logout.php">Logout</a>
			</div>  
		</div>
		<div id="sub-header" align="center">
			<div class="table-title">
				<h3>
					<?php
						error_reporting(E_ALL ^ E_NOTICE);
						//DB conection
						$conn = mysqli_connect("localhost","root","","save");
						//Getting USername and password details from test page
						$us=$_SESSION['us'];
						$pw=$_SESSION['pw'];
						//Query to select exsact user details
						$sql = "select * from login1 where Username='$us' and Rool_No='$pw'";
						$result=mysqli_query($conn, $sql);
						$rowcount=mysqli_num_rows($result);
						$row = mysqli_fetch_assoc($result);
						echo"Welcome ".$row["Name"]." !!";
					?>
				</h3>
			</div>
				<br>
				<form action="profile.php" method="get" >
					<select name="basic" id="basic" class="form-control1" onchange="getvalue(this);">
					<option>-- Select Sem --</option>
					<option value=1>sem-1</option>
					<option value=2>sem-2</option>
					<option value=3>sem-3</option>
					<option value=4>sem-4</option>
					<option value=5>sem-5</option>
					<option value=6>sem-6</option>
					<option value=7>sem-7</option>
					<option value=8>sem-8 </option>
					</select>
				</form>
				
		</div>
		<br>
			<div id="tbl" >
				<table class="table-fill">
					<thead>
						<tr>
							<th data-field="id">Sub-Code</th>
							<th data-field="name">Subject</th>
							<th data-field="sm">Sec-Marks</th>
							<th data-field="mm">Max-Marks</th>
							<th data-field="r">Result</th>
							<th data-field="r">Semester</th>
						</tr>
					</thead>
					<?php
						error_reporting(E_ALL ^ E_NOTICE);
						$conn = mysqli_connect("localhost","root","","save");
						$us=$_SESSION['us'];
						$pw=$_SESSION['pw'];
						/* use isset function to see if the cookie is set or not*/
						if(isset($_COOKIE["sem"]))
							$semester=$_COOKIE["sem"];
						else
							$semester=2;
						$sql = "select * from login1 where Username='$us' and Rool_No='$pw' and Sem=$semester";
						$result=mysqli_query($conn, $sql);
						$row = mysqli_fetch_assoc($result);
						//Below will calculate row count
						$row_cnt = mysqli_num_rows($result);
						if($row_cnt>0)
						{
							while($row_cnt>0)
							{
								echo"<tbody class='table-hover'>
											<tr>
												<td class='text-left'>".$row["Sub-Code"]."</td>
												<td class='text-left'>".$row["Subject"]."</td>
												<td class='text-left'>".$row["Sec-Marks"]."</td>
												<td class='text-left'>".$row["Max-Marks"]."</td>
												<td class='text-left'>".$row["Pass/Fail"]."</td>
												<td class='text-left'>".$row["Sem"]."</td>
											</tr>
									 </tbody>";
								$row = mysqli_fetch_assoc($result);
								$row_cnt--;
							}
						}
						else
						{
							echo "<h3 align='center'>Sorry no entries found !! Try choosing your current Semester. </h3>";
						}
					?>
				</table>
				<br>
			</div>
</body>
</html>