
<html>
<head>
<title> LMC Post-AGB Database </title>
</head>
<body>
<?php 
$iracdes = $_REQUEST['filename'] ;
$twom = "SSTISAGE1C_" . substr($iracdes,11,15);
$fts = $_REQUEST['fts'] ;
echo "<p>Individual Source: $iracdes </p><br>To view a larger version of the image, right-click on it and select 'View Image' in your browser.  To download the fits file, click on the image or right click and select 'Save link as...'.<br><br>"; 

echo "<a href=\"".$iracdes."_mcps.fits\"><img src=\"".$iracdes."_mcps.gif\" width=500 title=\"MCPS\"></a>";
echo "<a href=\"$twom"."_2MASS_J.fits\"> <img src=\"$twom"."_2MASS_J.gif\" width=500 title=\"2mass J\"> </a>";
echo "<a href=\"$twom"."_2MASS_H.fits\"> <img src=\"$twom"."_2MASS_H.gif\" width=500 title=\"2mass H\"> </a>";
echo "<a href=\"$twom"."_2MASS_K.fits\"> <img src=\"$twom"."_2MASS_K.gif\" width=500 title=\"2mass K\"> </a>";
echo "<a href=\"".$iracdes."_irac_ch1.fits\"><img src=\"".$iracdes."_irac_ch1.gif\" width=500 title=\"IRAC 3.6\" ></a>";
echo "<a href=\"".$iracdes."_irac_ch2.fits\"><img src=\"".$iracdes."_irac_ch2.gif\" width=500 title=\"IRAC 4.5\" ></a>";
echo "<a href=\"".$iracdes."_irac_ch3.fits\"><img src=\"".$iracdes."_irac_ch3.gif\" width=500 title=\"IRAC 5.8\" ></a>";
echo "<a href=\"".$iracdes."_irac_ch4.fits\"><img src=\"".$iracdes."_irac_ch4.gif\" width=500 title=\"IRAC 8.0\" ></a>";
echo "<a href=\"".$iracdes."_mips24.fits\"><img src=\"".$iracdes."_mips24.gif\" width=500 title=\"MIPS 24\" ></a>";
echo "<a href=\"".$iracdes."_mips70.fits\"><img src=\"".$iracdes."_mips70.gif\" width=500 title=\"MIPS 70\" ></a>";
echo "<a href=\"".$iracdes."_mips160.fits\"><img src=\"".$iracdes."_mips160.gif\" width=500 title=\"MIPS 160\" ></a>";
echo "<a href=\"".$iracdes.".txt\"><img src=\"".$iracdes.".png\" width=500 title=\"SED\" ></a>";
echo "<img src=\"macho.php?fts=$fts\" width=500 title=\"MACHO Light Curve\">";

?>
</body>
</html>

