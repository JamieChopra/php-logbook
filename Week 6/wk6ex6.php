<?php
	include("myfunctions.inc");
	html_header("My second function demo");
	echo "I pay £ " . calculatetax(12200,22) . " tax";
	html_footer();
?>
