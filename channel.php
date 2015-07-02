<html>
<head>
</head>
<body>
<?php

/* this is for each channel */

$url="http://entertainment.oneindia.in/television/program/ETVKannada.html";
$content=file_get_contents("$url");
$first=strpos($content,"<table border='0' width='680' class = 'tvmaintable'>");
$last=strpos($content,'</table>',$first+1);
for($i=$first;$i<$last;$i++)
{ echo $content[$i];}

/* this is for each theatre */




?>
</body>
</html> 
