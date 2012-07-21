<!DOCTYPE HTML>
<html>
	<head>
		<title>AUDIO SKETCHES</title>
		<script type="text/javascript" src="script.js"></script>
		<script type="text/javascript" src="jquery-1.7.1.js"></script>
		<script type="text/javascript" src="tablefilter.js"></script>
		<link rel="stylesheet" type="text/css" href="main.css">	
		<script type="text/javascript">
		<!--
		/*	var passPrompt;
			var corPass = 'gingaall';
			passPrompt = prompt('Pass:','');
			if (passPrompt!=corPass){window.location = 'http://www.google.com'};

		*/
		-->
		</script>
	</head>


	<body>
		<div class='div_table'>
			GINGA AUDIO SKETCHES 2012
			<table id='table1'>
				<thead><tr>
					<th>Listen</th>
					<th>Name</th>
					<th>Album</th>
					<th>Time</th>
					<th>Year</th>
					<th>Ratings</th>
					<th>Comments</th>
				</tr></thead>

			<?php
				$con = mysql_connect("localhost","eugen","eitJedEstitJapoyp");
				if (!$con)
			  		{
			  		die('Could not connect: ' . mysql_error());
			  		}
				mysql_select_db("eugen_ginga", $con);

				$result = mysql_query("SELECT * FROM audiosketches");
				while($row = mysql_fetch_array($result))
					{	
			    	  $_player="<audio controls='controls' preload='none'>
					  <source src='audio/" . $row['Location'] . "'/>
					  </audio>";
					  echo "<tbody><tr>";	
					  echo "<td>" . $_player . "</td><td>" . $row['Name'] . "</td><td>" . $row['Album'] . "</td><td>";
					  echo $row['Time'] . "</td><td>" . $row['Year'] . "</td><td></td><td><div class='noEdit' id='" . $row['id'];
					  echo "' contenteditable onclick='editContent(this.id)' onblur='editContentDone(this.id)'>" . $row['Comments'] . "</div></td>";
					  echo "</tr></tbody>";
					  }

				mysql_close($con);
			?>
				<script language="javascript" type="text/javascript">
					setFilterGrid("table1");
				</script>
			</table>

		</div>
	</body>
</html>
