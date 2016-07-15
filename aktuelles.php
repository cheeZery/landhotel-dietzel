<?php
	if(!(isset($_GET["silvester"])) and !(isset($_GET["xxxxxxxxx"]))) {
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'index.php';
		header("Location: http://$host$uri/$extra");
		exit;
	}
?>
<?php include("include/topInclude.php"); ?>
	<?php if(isset($_GET["silvester"])) { ?> 
		<div class="contentItem">
			<h1>Silvester 2014/2015</h1>
			Unser f&uuml;r Sie zusammengestelltes Programm beginnt am Sonntag, den 28.12., gerne k&ouml;nnen Sie aber auch schon zuvor anreisen.<br/><ybr/>
			<h2>Sonntag, 28.12.14</h2>
			Wir hei&szlig;en Sie mit einer Bierspezialit&auml;t im Sauerland willkommen. Nach dem Abendessen gem&uuml;tliches Beisammensein in der Silberdistel oder Bierakademie.<br/><br/>
			<h2>Montag, 29.12.14</h2>
			Bis 10 Uhr haben Sie die M&ouml;glichkeit, sich an unserem reichhaltigen Fr&uuml;hst&uuml;cksb&uuml;ffet zu st&auml;rken. Danach haben Sie Zeit, das schneebedeckte Sauerland zu erkunden, hierf&uuml;r bieten sich unter anderem das nahe gelegene Kloster Oelinghausen, der Wildwald Vo&szlig;winkel oder der M&ouml;hnesee an. <br/>
			Ab 13 Uhr hat unser Koch wieder ein leckeres B&uuml;ffet f&uuml;r Sie vorbereitet.<br/>
			Nach dem Abendessen beginnt das Preiskegeln, bei dem jeder Teilnehmer einen keinen Preis gewinnt.<br/><br/>
			<h2>Dienstag, 30.12.14</h2>
			Nach dem Fr&uuml;hst&uuml;ck besteht die M&ouml;glichkeit an einer gef&uuml;hrten Wanderung rund um Herdringen teilzunehmen. Zwischendurch wird eine Rast eingelegt, bei der hei&szlig;er Gl&uuml;hwein gereicht wird.<br/>
			Nach dem Mittagessen k&ouml;nnen Sie die Kegelbahn reservieren.<br/>
			Am Nachmittag werden frische Waffeln mit hei&szlig;en Kirschen gereicht.<br/>
			Am Abend treffen Sie sich in der Silberdistel zum Abendessen und anschlie&szlig;ender Feuerzangenbowle bei Kerzenschein.<br/><br/>
			<h2>Mittwoch, 31.12.14.</h2>
			Nach dem Fr&uuml;hst&uuml;ck tanken Sie nochmal frische Luft f&uuml;r den langen Tag.<br/>
			Dann genie&szlig;en Sie das Mittagessen und nachmittags erwartet Sie ein Kuchenb&uuml;ffet.<br/>
			Der Abend beginnt mit der Er&ouml;ffnung des Silvesterb&uuml;ffet um 19.30 Uhr. Danach starten in der geschm&uuml;ckten Silberdistel die Feierlichkeiten mit unserem DJ. Stimmung und Tanz bis in den fr&uuml;hen Morgen.<br/><br/>
			<h2>Donnerstag, 01.01.15</h2>
			Am Neujahrmorgen bieten wir ihnen gen&uuml;gend Zeit zum Ausschlafen. Ab 10 Uhr bis 14.00 Uhr d&uuml;rfen Sie sich am Brunchb&uuml;ffet bedienen.<br/>
			Im Laufe des Tages w&uuml;nschen wir Ihnen dann eine angenehme Heimreise.<br/><br/><br/>
			<table border=0 class="preistable">
			<tr>
				<td colspan=5><b>Preise pro Person:</b></td>
			</tr>
			<tr>
				<td>Aufenthalt vom</td>
				<td>28.12.14. - 01.01.15</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td class="preisTd">237,00 &euro;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>29.12.14. - 01.01.15</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td class="preisTd">202,00 &euro;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>30.12.14. - 01.01.15</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td class="preisTd">147,00 &euro;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>31.12.14. - 01.01.15</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td class="preisTd">105,00 &euro;</td>
			</tr>
			<tr>
				<td colspan=3>Zuschlag für ein Einzelzimmer (pro Tag)</td>
				<td>&nbsp;</td>
				<td class="preisTd">12,00 &euro;</td>
			</tr>
			<tr>
				<td colspan=5>&nbsp;</td>
			</tr>
			<tr>
				<td colspan=5><b>Preise f&uuml;r Verl&auml;ngerungstag:</b></td>
			</tr>
			<tr>
				<td colspan=3>&Uuml;bernachtung mit Fr&uuml;hst&uuml;ck (pro Person)</td>
				<td>&nbsp;</td>
				<td class="preisTd">27,00 &euro;</td>
			</tr>
			<tr>
				<td colspan=3>Halbpensionszuschlag (pro Person)</td>
				<td>&nbsp;</td>
				<td class="preisTd">12,00 &euro;</td>
			</tr>
			<tr>
				<td colspan=3>Vollpensionszuschlag (pro Person)</td>
				<td>&nbsp;</td>
				<td class="preisTd">22,00 &euro;</td>
			</tr>
			</table>
			<span style="font-size: 80%; color: #AAA;">Bei der Reservierung ist eine Anzahlung von 50,00 € pro Person zu t&auml;tigen.</span>
			<br/><br/>
			Bei weiteren Fragen bez&uuml;glich des Programms, unserem Haus oder der Umgebung, z&ouml;gern Sie bitte nicht, uns zu kontaktieren.<br/>
			Wir freuen uns, wenn wir Sie im Sauerland zum Jahreswechsel begr&uuml;&szlig;en d&uuml;rfen.
		</div>
	<?php } ?> 
<?php include("include/bottomInclude.php"); ?>