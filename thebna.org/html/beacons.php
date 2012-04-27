<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 11 February 2007), see www.w3.org" />
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <meta http-equiv="Content-Language" content="en-us" />
  <meta name="description" content="Broadmoor Neighborhood Assocation" />
  <meta name="keywords" content="Broadmoor Neighborhood Assocation San Leandro CA" />
  <meta name="robots" content="index,follow" />

  <title>Welcome to The BNA!</title>
  <link href="../martinique.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="../print.css" rel="stylesheet" type="text/css" media="print" />
  <script src="../js/sorttable.js"></script>
</head>
<body>
<?php include("header.php"); ?>
					<th><img src="../images/beaconLogo.jpg" alt="" width="500" height="104" /></th>
				</tr>
			</thead>
			<tbody>
			<?php
			    function writeFileList($dir) {
				$myDirectory=opendir("../" . $dir);
				while(false !== ($entryName=readdir($myDirectory))) {
					$dirArray[]=$entryName;
				}
				closedir($myDirectory);
				
				$indexCount=count($dirArray);
				for ($index=0; $index < $indexCount; $index++) {
				
					// always hide . files
					if(substr("$dirArray[$index]", 0, 1) != ".") {
						$path = "../" . $dir . "/" . $dirArray[$index];

						$modtime=date("M j Y g:i A", filemtime($path));
						$timekey=date("YmdHis", filemtime($path));
	
						print("
						<tr class='file'>
							<td sorttable_customkey='$timekey'><a href='$path'>
							 $dirArray[$index]</a></td>
						</tr>");
					}
				}
			    }
			    writeFileList("beacons");
			?>
<?php include("footer.php"); ?>
</body>
</html>
