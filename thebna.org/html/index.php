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
<!--
Physically included because we're in a .php file, and I don't
want to mess with .htaccess.
-->
<body>
  <div id="page-background"><img src="../img/blue-rain-bg.jpg" width="100%" height="100%"/></div>
  <div id="banner"></div>

  <div id="nav-toplevel">
    <div id="nav-main">
      <ul title="Major Site Sections">
        <li><a href="main.shtml" title="Main Page">Home</a></li>
        <li><a href="join.shtml" title="Join The BNA!">Membership</a></li>
        <li><a href="contact.shtml" title="Contact Us">Contact</a></li>
        <li><a href="events.shtml" title="Upcoming Events">Events</a></li>
        <li><a href="community.shtml" title="Useful Information">Community</a></li>
        <li><a href="links.shtml" title="Handy Links">Related Links</a></li>
      </ul>
    </div>
  </div>

<div id="container">
  <div id="content">
      <div id="content2">
		<table class="sortable">
			<thead>
				<tr>
					<th>Meeting Minutes</th>
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
			    writeFileList("minutes");
			?>
			</tbody>
		</table>
	
	</div>
    </div>
    <div id="nav-subs">
      <div id="nav-section">
        <ul>
          <li><a href="forum.shtml" title="Join the Discussion">The BNA Email
          Discussion Forum</a></li>
          <br />

          <li><a href="tools.shtml">Tools for meeting your neighbors</a></li>
          <br />

          <li><a href="../pdf/BNA_By_Laws_Accepted.pdf">By-Laws</a></li>
          <br />

          <li><a href="book.shtml">The Broadmoor Bungalow Book</a></li>
          <br />

          <li><a href="about.shtml">About the Broadmoor Neighborhood</a></li>
          <br />

          <li><a href="index.php">Board Meeting Minutes</a></li>

        </ul>
      </div> <!-- id="nav-section" -->
    </div>
  </div>

  <div id="info-site">
  </div>
</body>
</html>
