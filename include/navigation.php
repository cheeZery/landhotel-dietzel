	<?php
		$navItem["link"] = "index.php";
		$navItem["caption"] = "Startseite";
		$navItem["id"] = "";
		$navItems[] = $navItem;
		
		$navItem["link"] = "silvester.php";
		$navItem["caption"] = "Silvester 2015/2016";
		$navItem["id"] = "silvester";
		// $navItems[] = $navItem;
		
		$navItem["link"] = "unserhaus.php";
		$navItem["caption"] = "Unser Haus";
		$navItem["id"] = "";
		$navItems[] = $navItem;
		
		$navItem["link"] = "angebote.php";
		$navItem["caption"] = "Angebote";
		$navItem["id"] = "";
		$navItems[] = $navItem;
		
		$navItem["link"] = "umgebung.php";
		$navItem["caption"] = "Umgebung";
		$navItem["id"] = "";
		$navItems[] = $navItem;
		
		$navItem["link"] = "kontakt.php";
		$navItem["caption"] = "Kontakt";
		$navItem["id"] = "";
		$navItems[] = $navItem;
		
		$curPage = substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], "/") + 1);
	?>
	<div id="navigation">
		<?php foreach($navItems as $navItem) { ?>
			<div class="navItem <?php echo ($curPage == $navItem["link"]?"navItemSel":""); ?>" id="<?php echo $navItem["id"]; ?>" attrLink="<?php echo $navItem["link"]; ?>"><?php echo $navItem["caption"]; ?></div>
		<?php } ?>
	</div>