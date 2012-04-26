<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Directory Contents</title>
	<link rel="stylesheet" href="../dirStyle.css">
	<script src="../js/sorttable.js"></script>
</head>

<body>

	<div id="container">
	
		<h1>Meeting Minutes</h1>
		
		<table class="sortable">
			<thead>
				<tr>
					<th>Filename</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$myDirectory=opendir("../minutes");
				while($entryName=readdir($myDirectory)) {
					$dirArray[]=$entryName;
				}
				closedir($myDirectory);
				
				$indexCount=count($dirArray);
				for ($index=0; $index < $indexCount; $index++) {
				
					// always hide . files
					if(substr("$dirArray[$index]", 0, 1) != ".") {
						$path = "../minutes/" . $dirArray[$index];

						$modtime=date("M j Y g:i A", filemtime($path));
						$timekey=date("YmdHis", filemtime($path));
	
						print("
						<tr class='file'>
							<td><a href='$path'>$dirArray[$index]</a></td>
							<td sorttable_customkey='$timekey'><a href='$path'>$modtime</a></td>
						</tr>");
					}
				}
			?>
			</tbody>
		</table>
	
	</div>
	
</body>

</html>