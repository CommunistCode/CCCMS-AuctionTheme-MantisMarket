<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600' rel='stylesheet' type='text/css'>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title><?php echo($title." : ".$pageContent['title']); ?></title>
		<link href="../themes/<?php echo($pageTools->getTheme("base")); ?>/stylesheets/base.css" rel="stylesheet" type="text/css" />
		<link href="themes/<?php echo($pageTools->getTheme("auction")); ?>/stylesheets/auctionStyle.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="mainContainerFaux">
			<div id="title">
				<?php 
					require_once($fullPath."/themes/".$pageTools->getTheme("base")."/templates/title.inc.php"); 
				?>
			</div>
			<div id='navBar'>
				<?php 
					require_once($fullPath."/themes/".$pageTools->getTheme("base")."/templates/links.inc.php"); 
				?>
			</div>
			<div id='body'>

				<div class="marketplaceLinks">
					<?php
						require_once("includes/marketplaceLinks.inc.php");
					?>
				</div>
			
				<div class="auctionBody">
		
			  <?php

					echo("<h1>".$heading."</h1>");

					if (isset($help)) {
						
						echo("<div class='help'>".$help."</div>");

					}

					if (isset($content)) {

						echo($content);

					}

          if (isset($include)) {

						include($include);

					}

        ?>

				
				</div>
			</div>
		</div>

		<div id="footer">
			<?php 
				require_once($fullPath."/themes/".$pageTools->getTheme("base")."/templates/footer.inc.php"); 
			?>
		</div>
	</body>
</html>



