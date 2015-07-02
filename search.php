<html>
<head>
<meta name="txtweb-appkey" content="29eea197-252e-43e1-92be-30011b2f2df9"/>
</head>
<body>
<?php
$msg=$_GET['txtweb-message'];
if($msg==NULL)
{ echo " Services on textweb <br>";
  echo " 1.Classifields and shopping <br>";
  echo " 2.finance <br>";
  echo " 3.health <br>";
  echo " 4.Jobs and education <br>";
  echo " 5.Miscellaneous <br>";
  echo " 6.News and entertainment <br>";
  echo " 7.Social networking <br>";
  echo " 8.Sports <br>";
  echo " 9.Travel <br>";
  echo " 10.txtweb Improvements <br>";
  
  echo "want to know details of any app for how to use it reply @appdetail";
}
else if($msg)
{
switch($msg)
{
case 1:	echo "Best 50 apps from Classifields and shopping";
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=9";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array1=$array1.$cout[$i];
	}
	$f=strpos($array1,'apps/');
	$l=strpos($array1,'"',$f+1);
	echo "<br> 1.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array1[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array2=$array2.$cout[$i];
	}
	$f=strpos($array2,'apps/');
	$l=strpos($array2,'"',$f+1);
	echo "<br> 2.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array2[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array3=$array3.$cout[$i];
	}
	$f=strpos($array3,'apps/');
	$l=strpos($array3,'"',$f+1);
	echo "<br> 3.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array3[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array4=$array4.$cout[$i];
	}
	$f=strpos($array4,'apps/');
	$l=strpos($array4,'"',$f+1);
	echo "<br> 4.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array4[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array5=$array5.$cout[$i];
	}
	$f=strpos($array5,'apps/');
	$l=strpos($array5,'"',$f+1);
	echo "<br> 5.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array5[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array6=$array6.$cout[$i];
	}
	$f=strpos($array6,'apps/');
	$l=strpos($array6,'"',$f+1);
	echo "<br> 6.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array6[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array7=$array7.$cout[$i];
	}
	$f=strpos($array7,'apps/');
	$l=strpos($array7,'"',$f+1);
	echo "<br> 7.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array7[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array8=$array8.$cout[$i];
	}
	$f=strpos($array8,'apps/');
	$l=strpos($array8,'"',$f+1);
	echo "<br> 8.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array8[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array9=$array9.$cout[$i];
	}
	$f=strpos($array9,'apps/');
	$l=strpos($array9,'"',$f+1);
	echo "<br> 9.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array9[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array10=$array10.$cout[$i];
	}
	$f=strpos($array10,'apps/');
	$l=strpos($array10,'"',$f+1);
	echo "<br> 10.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array10[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array11=$array11.$cout[$i];
	}
	$f=strpos($array11,'apps/');
	$l=strpos($array11,'"',$f+1);
	echo "<br> 11.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array11[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array12=$array12.$cout[$i];
	}
	$f=strpos($array12,'apps/');
	$l=strpos($array12,'"',$f+1);
	echo "<br> 12.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array12[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array13=$array13.$cout[$i];
	}
	$f=strpos($array13,'apps/');
	$l=strpos($array13,'"',$f+1);
	echo "<br> 13.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array13[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array14=$array14.$cout[$i];
	}
	$f=strpos($array14,'apps/');
	$l=strpos($array14,'"',$f+1);
	echo "<br> 14.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array14[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array15=$array15.$cout[$i];
	}
	$f=strpos($array15,'apps/');
	$l=strpos($array15,'"',$f+1);
	echo "<br> 15.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array15[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array16=$array16.$cout[$i];
	}
	$f=strpos($array16,'apps/');
	$l=strpos($array16,'"',$f+1);
	echo "<br> 16.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array16[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array17=$array17.$cout[$i];
	}
	$f=strpos($array17,'apps/');
	$l=strpos($array17,'"',$f+1);
	echo "<br> 17.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array17[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array18=$array18.$cout[$i];
	}
	$f=strpos($array18,'apps/');
	$l=strpos($array18,'"',$f+1);
	echo "<br> 18.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array18[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array19=$array19.$cout[$i];
	}
	$f=strpos($array19,'apps/');
	$l=strpos($array19,'"',$f+1);
	echo "<br> 19.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array19[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array20=$array20.$cout[$i];
	}
	$f=strpos($array20,'apps/');
	$l=strpos($array20,'"',$f+1);
	echo "<br> 20.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array20[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array21=$array21.$cout[$i];
	}
	$f=strpos($array21,'apps/');
	$l=strpos($array21,'"',$f+1);
	echo "<br> 21.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array21[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array22=$array22.$cout[$i];
	}
	$f=strpos($array22,'apps/');
	$l=strpos($array22,'"',$f+1);
	echo "<br> 22.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array22[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array23=$array23.$cout[$i];
	}
	$f=strpos($array23,'apps/');
	$l=strpos($array23,'"',$f+1);
	echo "<br> 23.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array23[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array24=$array24.$cout[$i];
	}
	$f=strpos($array24,'apps/');
	$l=strpos($array24,'"',$f+1);
	echo "<br> 24.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array24[$i]; }
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=9&page=2";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array25=$array25.$cout[$i];
	}
	$f=strpos($array25,'apps/');
	$l=strpos($array25,'"',$f+1);
	echo "<br> 25.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array25[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array26=$array26.$cout[$i];
	}
	$f=strpos($array26,'apps/');
	$l=strpos($array26,'"',$f+1);
	echo "<br> 26.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array26[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array27=$array27.$cout[$i];
	}
	$f=strpos($array27,'apps/');
	$l=strpos($array27,'"',$f+1);
	echo "<br> 27.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array27[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array28=$array28.$cout[$i];
	}
	$f=strpos($array28,'apps/');
	$l=strpos($array28,'"',$f+1);
	echo "<br> 28.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array28[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array29=$array29.$cout[$i];
	}
	$f=strpos($array29,'apps/');
	$l=strpos($array29,'"',$f+1);
	echo "<br> 29.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array29[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array30=$array30.$cout[$i];
	}
	$f=strpos($array30,'apps/');
	$l=strpos($array30,'"',$f+1);
	echo "<br> 30.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array30[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array31=$array31.$cout[$i];
	}
	$f=strpos($array31,'apps/');
	$l=strpos($array31,'"',$f+1);
	echo "<br> 31.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array31[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array32=$array32.$cout[$i];
	}
	$f=strpos($array32,'apps/');
	$l=strpos($array32,'"',$f+1);
	echo "<br> 32.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array32[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array33=$array33.$cout[$i];
	}
	$f=strpos($array33,'apps/');
	$l=strpos($array33,'"',$f+1);
	echo "<br> 33.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array33[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array34=$array34.$cout[$i];
	}
	$f=strpos($array34,'apps/');
	$l=strpos($array34,'"',$f+1);
	echo "<br> 34.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array34[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array35=$array35.$cout[$i];
	}
	$f=strpos($array35,'apps/');
	$l=strpos($array35,'"',$f+1);
	echo "<br> 35.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array35[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array36=$array36.$cout[$i];
	}
	$f=strpos($array36,'apps/');
	$l=strpos($array36,'"',$f+1);
	echo "<br> 36.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array36[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array37=$array37.$cout[$i];
	}
	$f=strpos($array37,'apps/');
	$l=strpos($array37,'"',$f+1);
	echo "<br> 37.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array37[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array38=$array38.$cout[$i];
	}
	$f=strpos($array38,'apps/');
	$l=strpos($array38,'"',$f+1);
	echo "<br> 38.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array38[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array39=$array39.$cout[$i];
	}
	$f=strpos($array39,'apps/');
	$l=strpos($array39,'"',$f+1);
	echo "<br> 39.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array39[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array40=$array40.$cout[$i];
	}
	$f=strpos($array40,'apps/');
	$l=strpos($array40,'"',$f+1);
	echo "<br> 40.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array40[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array41=$array41.$cout[$i];
	}
	$f=strpos($array41,'apps/');
	$l=strpos($array41,'"',$f+1);
	echo "<br> 41.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array41[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array42=$array42.$cout[$i];
	}
	$f=strpos($array42,'apps/');
	$l=strpos($array42,'"',$f+1);
	echo "<br> 42.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array42[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array43=$array43.$cout[$i];
	}
	$f=strpos($array43,'apps/');
	$l=strpos($array43,'"',$f+1);
	echo "<br> 43.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array43[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array44=$array44.$cout[$i];
	}
	$f=strpos($array44,'apps/');
	$l=strpos($array44,'"',$f+1);
	echo "<br> 44.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array44[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array45=$array45.$cout[$i];
	}
	$f=strpos($array45,'apps/');
	$l=strpos($array45,'"',$f+1);
	echo "<br> 45.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array45[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array46=$array46.$cout[$i];
	}
	$f=strpos($array46,'apps/');
	$l=strpos($array46,'"',$f+1);
	echo "<br> 46.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array46[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array47=$array47.$cout[$i];
	}
	$f=strpos($array47,'apps/');
	$l=strpos($array47,'"',$f+1);
	echo "<br> 47.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array47[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array48=$array48.$cout[$i];
	}
	$f=strpos($array48,'apps/');
	$l=strpos($array48,'"',$f+1);
	echo "<br> 48.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array48[$i]; }
         $url="http://developer.txtweb.com/user/apps/most-used?catlist=9&page=3";
	$cout=file_get_contents("$url");
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array49=$array49.$cout[$i];
	}
	$f=strpos($array49,'apps/');
	$l=strpos($array49,'"',$f+1);
	echo "<br> 49.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array49[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array50=$array50.$cout[$i];
	}
	$f=strpos($array50,'apps/');
	$l=strpos($array50,'"',$f+1);
	echo "<br> 50.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array50[$i]; }
	break;

case 2:  echo "Best 50 apps of finance";
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=8";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array1=$array1.$cout[$i];
	}
	$f=strpos($array1,'apps/');
	$l=strpos($array1,'"',$f+1);
	echo "<br> 1.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array1[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array2=$array2.$cout[$i];
	}
	$f=strpos($array2,'apps/');
	$l=strpos($array2,'"',$f+1);
	echo "<br> 2.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array2[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array3=$array3.$cout[$i];
	}
	$f=strpos($array3,'apps/');
	$l=strpos($array3,'"',$f+1);
	echo "<br> 3.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array3[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array4=$array4.$cout[$i];
	}
	$f=strpos($array4,'apps/');
	$l=strpos($array4,'"',$f+1);
	echo "<br> 4.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array4[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array5=$array5.$cout[$i];
	}
	$f=strpos($array5,'apps/');
	$l=strpos($array5,'"',$f+1);
	echo "<br> 5.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array5[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array6=$array6.$cout[$i];
	}
	$f=strpos($array6,'apps/');
	$l=strpos($array6,'"',$f+1);
	echo "<br> 6.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array6[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array7=$array7.$cout[$i];
	}
	$f=strpos($array7,'apps/');
	$l=strpos($array7,'"',$f+1);
	echo "<br> 7.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array7[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array8=$array8.$cout[$i];
	}
	$f=strpos($array8,'apps/');
	$l=strpos($array8,'"',$f+1);
	echo "<br> 8.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array8[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array9=$array9.$cout[$i];
	}
	$f=strpos($array9,'apps/');
	$l=strpos($array9,'"',$f+1);
	echo "<br> 9.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array9[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array10=$array10.$cout[$i];
	}
	$f=strpos($array10,'apps/');
	$l=strpos($array10,'"',$f+1);
	echo "<br> 10.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array10[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array11=$array11.$cout[$i];
	}
	$f=strpos($array11,'apps/');
	$l=strpos($array11,'"',$f+1);
	echo "<br> 11.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array11[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array12=$array12.$cout[$i];
	}
	$f=strpos($array12,'apps/');
	$l=strpos($array12,'"',$f+1);
	echo "<br> 12.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array12[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array13=$array13.$cout[$i];
	}
	$f=strpos($array13,'apps/');
	$l=strpos($array13,'"',$f+1);
	echo "<br> 13.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array13[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array14=$array14.$cout[$i];
	}
	$f=strpos($array14,'apps/');
	$l=strpos($array14,'"',$f+1);
	echo "<br> 14.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array14[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array15=$array15.$cout[$i];
	}
	$f=strpos($array15,'apps/');
	$l=strpos($array15,'"',$f+1);
	echo "<br> 15.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array15[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array16=$array16.$cout[$i];
	}
	$f=strpos($array16,'apps/');
	$l=strpos($array16,'"',$f+1);
	echo "<br> 16.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array16[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array17=$array17.$cout[$i];
	}
	$f=strpos($array17,'apps/');
	$l=strpos($array17,'"',$f+1);
	echo "<br> 17.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array17[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array18=$array18.$cout[$i];
	}
	$f=strpos($array18,'apps/');
	$l=strpos($array18,'"',$f+1);
	echo "<br> 18.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array18[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array19=$array19.$cout[$i];
	}
	$f=strpos($array19,'apps/');
	$l=strpos($array19,'"',$f+1);
	echo "<br> 19.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array19[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array20=$array20.$cout[$i];
	}
	$f=strpos($array20,'apps/');
	$l=strpos($array20,'"',$f+1);
	echo "<br> 20.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array20[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array21=$array21.$cout[$i];
	}
	$f=strpos($array21,'apps/');
	$l=strpos($array21,'"',$f+1);
	echo "<br> 21.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array21[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array22=$array22.$cout[$i];
	}
	$f=strpos($array22,'apps/');
	$l=strpos($array22,'"',$f+1);
	echo "<br> 22.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array22[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array23=$array23.$cout[$i];
	}
	$f=strpos($array23,'apps/');
	$l=strpos($array23,'"',$f+1);
	echo "<br> 23.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array23[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array24=$array24.$cout[$i];
	}
	$f=strpos($array24,'apps/');
	$l=strpos($array24,'"',$f+1);
	echo "<br> 24.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array24[$i]; }
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=8&page=2";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array25=$array25.$cout[$i];
	}
	$f=strpos($array25,'apps/');
	$l=strpos($array25,'"',$f+1);
	echo "<br> 25.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array25[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array26=$array26.$cout[$i];
	}
	$f=strpos($array26,'apps/');
	$l=strpos($array26,'"',$f+1);
	echo "<br> 26.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array26[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array27=$array27.$cout[$i];
	}
	$f=strpos($array27,'apps/');
	$l=strpos($array27,'"',$f+1);
	echo "<br> 27.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array27[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array28=$array28.$cout[$i];
	}
	$f=strpos($array28,'apps/');
	$l=strpos($array28,'"',$f+1);
	echo "<br> 28.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array28[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array29=$array29.$cout[$i];
	}
	$f=strpos($array29,'apps/');
	$l=strpos($array29,'"',$f+1);
	echo "<br> 29.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array29[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array30=$array30.$cout[$i];
	}
	$f=strpos($array30,'apps/');
	$l=strpos($array30,'"',$f+1);
	echo "<br> 30.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array30[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array31=$array31.$cout[$i];
	}
	$f=strpos($array31,'apps/');
	$l=strpos($array31,'"',$f+1);
	echo "<br> 31.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array31[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array32=$array32.$cout[$i];
	}
	$f=strpos($array32,'apps/');
	$l=strpos($array32,'"',$f+1);
	echo "<br> 32.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array32[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array33=$array33.$cout[$i];
	}
	$f=strpos($array33,'apps/');
	$l=strpos($array33,'"',$f+1);
	echo "<br> 33.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array33[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array34=$array34.$cout[$i];
	}
	$f=strpos($array34,'apps/');
	$l=strpos($array34,'"',$f+1);
	echo "<br> 34.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array34[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array35=$array35.$cout[$i];
	}
	$f=strpos($array35,'apps/');
	$l=strpos($array35,'"',$f+1);
	echo "<br> 35.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array35[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array36=$array36.$cout[$i];
	}
	$f=strpos($array36,'apps/');
	$l=strpos($array36,'"',$f+1);
	echo "<br> 36.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array36[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array37=$array37.$cout[$i];
	}
	$f=strpos($array37,'apps/');
	$l=strpos($array37,'"',$f+1);
	echo "<br> 37.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array37[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array38=$array38.$cout[$i];
	}
	$f=strpos($array38,'apps/');
	$l=strpos($array38,'"',$f+1);
	echo "<br> 38.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array38[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array39=$array39.$cout[$i];
	}
	$f=strpos($array39,'apps/');
	$l=strpos($array39,'"',$f+1);
	echo "<br> 39.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array39[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array40=$array40.$cout[$i];
	}
	$f=strpos($array40,'apps/');
	$l=strpos($array40,'"',$f+1);
	echo "<br> 40.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array40[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array41=$array41.$cout[$i];
	}
	$f=strpos($array41,'apps/');
	$l=strpos($array41,'"',$f+1);
	echo "<br> 41.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array41[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array42=$array42.$cout[$i];
	}
	$f=strpos($array42,'apps/');
	$l=strpos($array42,'"',$f+1);
	echo "<br> 42.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array42[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array43=$array43.$cout[$i];
	}
	$f=strpos($array43,'apps/');
	$l=strpos($array43,'"',$f+1);
	echo "<br> 43.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array43[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array44=$array44.$cout[$i];
	}
	$f=strpos($array44,'apps/');
	$l=strpos($array44,'"',$f+1);
	echo "<br> 44.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array44[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array45=$array45.$cout[$i];
	}
	$f=strpos($array45,'apps/');
	$l=strpos($array45,'"',$f+1);
	echo "<br> 45.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array45[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array46=$array46.$cout[$i];
	}
	$f=strpos($array46,'apps/');
	$l=strpos($array46,'"',$f+1);
	echo "<br> 46.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array46[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array47=$array47.$cout[$i];
	}
	$f=strpos($array47,'apps/');
	$l=strpos($array47,'"',$f+1);
	echo "<br> 47.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array47[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array48=$array48.$cout[$i];
	}
	$f=strpos($array48,'apps/');
	$l=strpos($array48,'"',$f+1);
	echo "<br> 48.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array48[$i]; }
        $url="http://developer.txtweb.com/user/apps/most-used?catlist=8&page=3";
	$cout=file_get_contents("$url");
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array49=$array49.$cout[$i];
	}
	$f=strpos($array49,'apps/');
	$l=strpos($array49,'"',$f+1);
	echo "<br> 49.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array49[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array50=$array50.$cout[$i];
	}
	$f=strpos($array50,'apps/');
	$l=strpos($array50,'"',$f+1);
	echo "<br> 50.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array50[$i]; }
	break;

case 3:
	echo "Best 50 apps of Health";
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=7";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array1=$array1.$cout[$i];
	}
	$f=strpos($array1,'apps/');
	$l=strpos($array1,'"',$f+1);
	echo "<br> 1.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array1[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array2=$array2.$cout[$i];
	}
	$f=strpos($array2,'apps/');
	$l=strpos($array2,'"',$f+1);
	echo "<br> 2.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array2[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array3=$array3.$cout[$i];
	}
	$f=strpos($array3,'apps/');
	$l=strpos($array3,'"',$f+1);
	echo "<br> 3.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array3[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array4=$array4.$cout[$i];
	}
	$f=strpos($array4,'apps/');
	$l=strpos($array4,'"',$f+1);
	echo "<br> 4.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array4[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array5=$array5.$cout[$i];
	}
	$f=strpos($array5,'apps/');
	$l=strpos($array5,'"',$f+1);
	echo "<br> 5.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array5[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array6=$array6.$cout[$i];
	}
	$f=strpos($array6,'apps/');
	$l=strpos($array6,'"',$f+1);
	echo "<br> 6.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array6[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array7=$array7.$cout[$i];
	}
	$f=strpos($array7,'apps/');
	$l=strpos($array7,'"',$f+1);
	echo "<br> 7.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array7[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array8=$array8.$cout[$i];
	}
	$f=strpos($array8,'apps/');
	$l=strpos($array8,'"',$f+1);
	echo "<br> 8.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array8[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array9=$array9.$cout[$i];
	}
	$f=strpos($array9,'apps/');
	$l=strpos($array9,'"',$f+1);
	echo "<br> 9.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array9[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array10=$array10.$cout[$i];
	}
	$f=strpos($array10,'apps/');
	$l=strpos($array10,'"',$f+1);
	echo "<br> 10.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array10[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array11=$array11.$cout[$i];
	}
	$f=strpos($array11,'apps/');
	$l=strpos($array11,'"',$f+1);
	echo "<br> 11.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array11[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array12=$array12.$cout[$i];
	}
	$f=strpos($array12,'apps/');
	$l=strpos($array12,'"',$f+1);
	echo "<br> 12.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array12[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array13=$array13.$cout[$i];
	}
	$f=strpos($array13,'apps/');
	$l=strpos($array13,'"',$f+1);
	echo "<br> 13.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array13[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array14=$array14.$cout[$i];
	}
	$f=strpos($array14,'apps/');
	$l=strpos($array14,'"',$f+1);
	echo "<br> 14.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array14[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array15=$array15.$cout[$i];
	}
	$f=strpos($array15,'apps/');
	$l=strpos($array15,'"',$f+1);
	echo "<br> 15.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array15[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array16=$array16.$cout[$i];
	}
	$f=strpos($array16,'apps/');
	$l=strpos($array16,'"',$f+1);
	echo "<br> 16.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array16[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array17=$array17.$cout[$i];
	}
	$f=strpos($array17,'apps/');
	$l=strpos($array17,'"',$f+1);
	echo "<br> 17.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array17[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array18=$array18.$cout[$i];
	}
	$f=strpos($array18,'apps/');
	$l=strpos($array18,'"',$f+1);
	echo "<br> 18.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array18[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array19=$array19.$cout[$i];
	}
	$f=strpos($array19,'apps/');
	$l=strpos($array19,'"',$f+1);
	echo "<br> 19.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array19[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array20=$array20.$cout[$i];
	}
	$f=strpos($array20,'apps/');
	$l=strpos($array20,'"',$f+1);
	echo "<br> 20.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array20[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array21=$array21.$cout[$i];
	}
	$f=strpos($array21,'apps/');
	$l=strpos($array21,'"',$f+1);
	echo "<br> 21.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array21[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array22=$array22.$cout[$i];
	}
	$f=strpos($array22,'apps/');
	$l=strpos($array22,'"',$f+1);
	echo "<br> 22.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array22[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array23=$array23.$cout[$i];
	}
	$f=strpos($array23,'apps/');
	$l=strpos($array23,'"',$f+1);
	echo "<br> 23.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array23[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array24=$array24.$cout[$i];
	}
	$f=strpos($array24,'apps/');
	$l=strpos($array24,'"',$f+1);
	echo "<br> 24.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array24[$i]; }
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=7&page=2";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array25=$array25.$cout[$i];
	}
	$f=strpos($array25,'apps/');
	$l=strpos($array25,'"',$f+1);
	echo "<br> 25.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array25[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array26=$array26.$cout[$i];
	}
	$f=strpos($array26,'apps/');
	$l=strpos($array26,'"',$f+1);
	echo "<br> 26.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array26[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array27=$array27.$cout[$i];
	}
	$f=strpos($array27,'apps/');
	$l=strpos($array27,'"',$f+1);
	echo "<br> 27.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array27[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array28=$array28.$cout[$i];
	}
	$f=strpos($array28,'apps/');
	$l=strpos($array28,'"',$f+1);
	echo "<br> 28.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array28[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array29=$array29.$cout[$i];
	}
	$f=strpos($array29,'apps/');
	$l=strpos($array29,'"',$f+1);
	echo "<br> 29.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array29[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array30=$array30.$cout[$i];
	}
	$f=strpos($array30,'apps/');
	$l=strpos($array30,'"',$f+1);
	echo "<br> 30.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array30[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array31=$array31.$cout[$i];
	}
	$f=strpos($array31,'apps/');
	$l=strpos($array31,'"',$f+1);
	echo "<br> 31.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array31[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array32=$array32.$cout[$i];
	}
	$f=strpos($array32,'apps/');
	$l=strpos($array32,'"',$f+1);
	echo "<br> 32.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array32[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array33=$array33.$cout[$i];
	}
	$f=strpos($array33,'apps/');
	$l=strpos($array33,'"',$f+1);
	echo "<br> 33.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array33[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array34=$array34.$cout[$i];
	}
	$f=strpos($array34,'apps/');
	$l=strpos($array34,'"',$f+1);
	echo "<br> 34.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array34[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array35=$array35.$cout[$i];
	}
	$f=strpos($array35,'apps/');
	$l=strpos($array35,'"',$f+1);
	echo "<br> 35.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array35[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array36=$array36.$cout[$i];
	}
	$f=strpos($array36,'apps/');
	$l=strpos($array36,'"',$f+1);
	echo "<br> 36.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array36[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array37=$array37.$cout[$i];
	}
	$f=strpos($array37,'apps/');
	$l=strpos($array37,'"',$f+1);
	echo "<br> 37.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array37[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array38=$array38.$cout[$i];
	}
	$f=strpos($array38,'apps/');
	$l=strpos($array38,'"',$f+1);
	echo "<br> 38.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array38[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array39=$array39.$cout[$i];
	}
	$f=strpos($array39,'apps/');
	$l=strpos($array39,'"',$f+1);
	echo "<br> 39.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array39[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array40=$array40.$cout[$i];
	}
	$f=strpos($array40,'apps/');
	$l=strpos($array40,'"',$f+1);
	echo "<br> 40.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array40[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array41=$array41.$cout[$i];
	}
	$f=strpos($array41,'apps/');
	$l=strpos($array41,'"',$f+1);
	echo "<br> 41.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array41[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array42=$array42.$cout[$i];
	}
	$f=strpos($array42,'apps/');
	$l=strpos($array42,'"',$f+1);
	echo "<br> 42.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array42[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array43=$array43.$cout[$i];
	}
	$f=strpos($array43,'apps/');
	$l=strpos($array43,'"',$f+1);
	echo "<br> 43.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array43[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array44=$array44.$cout[$i];
	}
	$f=strpos($array44,'apps/');
	$l=strpos($array44,'"',$f+1);
	echo "<br> 44.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array44[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array45=$array45.$cout[$i];
	}
	$f=strpos($array45,'apps/');
	$l=strpos($array45,'"',$f+1);
	echo "<br> 45.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array45[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array46=$array46.$cout[$i];
	}
	$f=strpos($array46,'apps/');
	$l=strpos($array46,'"',$f+1);
	echo "<br> 46.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array46[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array47=$array47.$cout[$i];
	}
	$f=strpos($array47,'apps/');
	$l=strpos($array47,'"',$f+1);
	echo "<br> 47.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array47[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array48=$array48.$cout[$i];
	}
	$f=strpos($array48,'apps/');
	$l=strpos($array48,'"',$f+1);
	echo "<br> 48.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array48[$i]; }
        $url="http://developer.txtweb.com/user/apps/most-used?catlist=7&page=3";
	$cout=file_get_contents("$url");
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array49=$array49.$cout[$i];
	}
	$f=strpos($array49,'apps/');
	$l=strpos($array49,'"',$f+1);
	echo "<br> 49.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array49[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array50=$array50.$cout[$i];
	}
	$f=strpos($array50,'apps/');
	$l=strpos($array50,'"',$f+1);
	echo "<br> 50.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array50[$i]; }
	break;
case 4: echo " Best 50 apps of Jobs and Education";
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=4";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array1=$array1.$cout[$i];
	}
	$f=strpos($array1,'apps/');
	$l=strpos($array1,'"',$f+1);
	echo "<br> 1.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array1[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array2=$array2.$cout[$i];
	}
	$f=strpos($array2,'apps/');
	$l=strpos($array2,'"',$f+1);
	echo "<br> 2.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array2[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array3=$array3.$cout[$i];
	}
	$f=strpos($array3,'apps/');
	$l=strpos($array3,'"',$f+1);
	echo "<br> 3.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array3[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array4=$array4.$cout[$i];
	}
	$f=strpos($array4,'apps/');
	$l=strpos($array4,'"',$f+1);
	echo "<br> 4.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array4[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array5=$array5.$cout[$i];
	}
	$f=strpos($array5,'apps/');
	$l=strpos($array5,'"',$f+1);
	echo "<br> 5.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array5[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array6=$array6.$cout[$i];
	}
	$f=strpos($array6,'apps/');
	$l=strpos($array6,'"',$f+1);
	echo "<br> 6.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array6[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array7=$array7.$cout[$i];
	}
	$f=strpos($array7,'apps/');
	$l=strpos($array7,'"',$f+1);
	echo "<br> 7.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array7[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array8=$array8.$cout[$i];
	}
	$f=strpos($array8,'apps/');
	$l=strpos($array8,'"',$f+1);
	echo "<br> 8.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array8[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array9=$array9.$cout[$i];
	}
	$f=strpos($array9,'apps/');
	$l=strpos($array9,'"',$f+1);
	echo "<br> 9.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array9[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array10=$array10.$cout[$i];
	}
	$f=strpos($array10,'apps/');
	$l=strpos($array10,'"',$f+1);
	echo "<br> 10.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array10[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array11=$array11.$cout[$i];
	}
	$f=strpos($array11,'apps/');
	$l=strpos($array11,'"',$f+1);
	echo "<br> 11.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array11[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array12=$array12.$cout[$i];
	}
	$f=strpos($array12,'apps/');
	$l=strpos($array12,'"',$f+1);
	echo "<br> 12.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array12[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array13=$array13.$cout[$i];
	}
	$f=strpos($array13,'apps/');
	$l=strpos($array13,'"',$f+1);
	echo "<br> 13.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array13[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array14=$array14.$cout[$i];
	}
	$f=strpos($array14,'apps/');
	$l=strpos($array14,'"',$f+1);
	echo "<br> 14.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array14[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array15=$array15.$cout[$i];
	}
	$f=strpos($array15,'apps/');
	$l=strpos($array15,'"',$f+1);
	echo "<br> 15.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array15[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array16=$array16.$cout[$i];
	}
	$f=strpos($array16,'apps/');
	$l=strpos($array16,'"',$f+1);
	echo "<br> 16.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array16[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array17=$array17.$cout[$i];
	}
	$f=strpos($array17,'apps/');
	$l=strpos($array17,'"',$f+1);
	echo "<br> 17.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array17[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array18=$array18.$cout[$i];
	}
	$f=strpos($array18,'apps/');
	$l=strpos($array18,'"',$f+1);
	echo "<br> 18.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array18[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array19=$array19.$cout[$i];
	}
	$f=strpos($array19,'apps/');
	$l=strpos($array19,'"',$f+1);
	echo "<br> 19.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array19[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array20=$array20.$cout[$i];
	}
	$f=strpos($array20,'apps/');
	$l=strpos($array20,'"',$f+1);
	echo "<br> 20.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array20[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array21=$array21.$cout[$i];
	}
	$f=strpos($array21,'apps/');
	$l=strpos($array21,'"',$f+1);
	echo "<br> 21.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array21[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array22=$array22.$cout[$i];
	}
	$f=strpos($array22,'apps/');
	$l=strpos($array22,'"',$f+1);
	echo "<br> 22.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array22[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array23=$array23.$cout[$i];
	}
	$f=strpos($array23,'apps/');
	$l=strpos($array23,'"',$f+1);
	echo "<br> 23.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array23[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array24=$array24.$cout[$i];
	}
	$f=strpos($array24,'apps/');
	$l=strpos($array24,'"',$f+1);
	echo "<br> 24.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array24[$i]; }
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=4&page=2";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array25=$array25.$cout[$i];
	}
	$f=strpos($array25,'apps/');
	$l=strpos($array25,'"',$f+1);
	echo "<br> 25.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array25[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array26=$array26.$cout[$i];
	}
	$f=strpos($array26,'apps/');
	$l=strpos($array26,'"',$f+1);
	echo "<br> 26.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array26[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array27=$array27.$cout[$i];
	}
	$f=strpos($array27,'apps/');
	$l=strpos($array27,'"',$f+1);
	echo "<br> 27.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array27[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array28=$array28.$cout[$i];
	}
	$f=strpos($array28,'apps/');
	$l=strpos($array28,'"',$f+1);
	echo "<br> 28.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array28[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array29=$array29.$cout[$i];
	}
	$f=strpos($array29,'apps/');
	$l=strpos($array29,'"',$f+1);
	echo "<br> 29.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array29[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array30=$array30.$cout[$i];
	}
	$f=strpos($array30,'apps/');
	$l=strpos($array30,'"',$f+1);
	echo "<br> 30.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array30[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array31=$array31.$cout[$i];
	}
	$f=strpos($array31,'apps/');
	$l=strpos($array31,'"',$f+1);
	echo "<br> 31.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array31[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array32=$array32.$cout[$i];
	}
	$f=strpos($array32,'apps/');
	$l=strpos($array32,'"',$f+1);
	echo "<br> 32.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array32[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array33=$array33.$cout[$i];
	}
	$f=strpos($array33,'apps/');
	$l=strpos($array33,'"',$f+1);
	echo "<br> 33.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array33[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array34=$array34.$cout[$i];
	}
	$f=strpos($array34,'apps/');
	$l=strpos($array34,'"',$f+1);
	echo "<br> 34.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array34[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array35=$array35.$cout[$i];
	}
	$f=strpos($array35,'apps/');
	$l=strpos($array35,'"',$f+1);
	echo "<br> 35.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array35[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array36=$array36.$cout[$i];
	}
	$f=strpos($array36,'apps/');
	$l=strpos($array36,'"',$f+1);
	echo "<br> 36.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array36[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array37=$array37.$cout[$i];
	}
	$f=strpos($array37,'apps/');
	$l=strpos($array37,'"',$f+1);
	echo "<br> 37.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array37[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array38=$array38.$cout[$i];
	}
	$f=strpos($array38,'apps/');
	$l=strpos($array38,'"',$f+1);
	echo "<br> 38.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array38[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array39=$array39.$cout[$i];
	}
	$f=strpos($array39,'apps/');
	$l=strpos($array39,'"',$f+1);
	echo "<br> 39.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array39[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array40=$array40.$cout[$i];
	}
	$f=strpos($array40,'apps/');
	$l=strpos($array40,'"',$f+1);
	echo "<br> 40.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array40[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array41=$array41.$cout[$i];
	}
	$f=strpos($array41,'apps/');
	$l=strpos($array41,'"',$f+1);
	echo "<br> 41.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array41[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array42=$array42.$cout[$i];
	}
	$f=strpos($array42,'apps/');
	$l=strpos($array42,'"',$f+1);
	echo "<br> 42.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array42[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array43=$array43.$cout[$i];
	}
	$f=strpos($array43,'apps/');
	$l=strpos($array43,'"',$f+1);
	echo "<br> 43.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array43[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array44=$array44.$cout[$i];
	}
	$f=strpos($array44,'apps/');
	$l=strpos($array44,'"',$f+1);
	echo "<br> 44.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array44[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array45=$array45.$cout[$i];
	}
	$f=strpos($array45,'apps/');
	$l=strpos($array45,'"',$f+1);
	echo "<br> 45.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array45[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array46=$array46.$cout[$i];
	}
	$f=strpos($array46,'apps/');
	$l=strpos($array46,'"',$f+1);
	echo "<br> 46.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array46[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array47=$array47.$cout[$i];
	}
	$f=strpos($array47,'apps/');
	$l=strpos($array47,'"',$f+1);
	echo "<br> 47.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array47[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array48=$array48.$cout[$i];
	}
	$f=strpos($array48,'apps/');
	$l=strpos($array48,'"',$f+1);
	echo "<br> 48.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array48[$i]; }
        $url="http://developer.txtweb.com/user/apps/most-used?catlist=4&page=3";
	$cout=file_get_contents("$url");
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array49=$array49.$cout[$i];
	}
	$f=strpos($array49,'apps/');
	$l=strpos($array49,'"',$f+1);
	echo "<br> 49.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array49[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array50=$array50.$cout[$i];
	}
	$f=strpos($array50,'apps/');
	$l=strpos($array50,'"',$f+1);
	echo "<br> 50.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array50[$i]; }
	break;

case 5: echo "Best 24 apps of Miscellaneous";
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=11";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array1=$array1.$cout[$i];
	}
	$f=strpos($array1,'apps/');
	$l=strpos($array1,'"',$f+1);
	echo "<br> 1.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array1[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array2=$array2.$cout[$i];
	}
	$f=strpos($array2,'apps/');
	$l=strpos($array2,'"',$f+1);
	echo "<br> 2.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array2[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array3=$array3.$cout[$i];
	}
	$f=strpos($array3,'apps/');
	$l=strpos($array3,'"',$f+1);
	echo "<br> 3.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array3[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array4=$array4.$cout[$i];
	}
	$f=strpos($array4,'apps/');
	$l=strpos($array4,'"',$f+1);
	echo "<br> 4.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array4[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array5=$array5.$cout[$i];
	}
	$f=strpos($array5,'apps/');
	$l=strpos($array5,'"',$f+1);
	echo "<br> 5.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array5[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array6=$array6.$cout[$i];
	}
	$f=strpos($array6,'apps/');
	$l=strpos($array6,'"',$f+1);
	echo "<br> 6.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array6[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array7=$array7.$cout[$i];
	}
	$f=strpos($array7,'apps/');
	$l=strpos($array7,'"',$f+1);
	echo "<br> 7.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array7[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array8=$array8.$cout[$i];
	}
	$f=strpos($array8,'apps/');
	$l=strpos($array8,'"',$f+1);
	echo "<br> 8.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array8[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array9=$array9.$cout[$i];
	}
	$f=strpos($array9,'apps/');
	$l=strpos($array9,'"',$f+1);
	echo "<br> 9.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array9[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array10=$array10.$cout[$i];
	}
	$f=strpos($array10,'apps/');
	$l=strpos($array10,'"',$f+1);
	echo "<br> 10.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array10[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array11=$array11.$cout[$i];
	}
	$f=strpos($array11,'apps/');
	$l=strpos($array11,'"',$f+1);
	echo "<br> 11.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array11[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array12=$array12.$cout[$i];
	}
	$f=strpos($array12,'apps/');
	$l=strpos($array12,'"',$f+1);
	echo "<br> 12.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array12[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array13=$array13.$cout[$i];
	}
	$f=strpos($array13,'apps/');
	$l=strpos($array13,'"',$f+1);
	echo "<br> 13.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array13[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array14=$array14.$cout[$i];
	}
	$f=strpos($array14,'apps/');
	$l=strpos($array14,'"',$f+1);
	echo "<br> 14.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array14[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array15=$array15.$cout[$i];
	}
	$f=strpos($array15,'apps/');
	$l=strpos($array15,'"',$f+1);
	echo "<br> 15.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array15[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array16=$array16.$cout[$i];
	}
	$f=strpos($array16,'apps/');
	$l=strpos($array16,'"',$f+1);
	echo "<br> 16.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array16[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array17=$array17.$cout[$i];
	}
	$f=strpos($array17,'apps/');
	$l=strpos($array17,'"',$f+1);
	echo "<br> 17.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array17[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array18=$array18.$cout[$i];
	}
	$f=strpos($array18,'apps/');
	$l=strpos($array18,'"',$f+1);
	echo "<br> 18.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array18[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array19=$array19.$cout[$i];
	}
	$f=strpos($array19,'apps/');
	$l=strpos($array19,'"',$f+1);
	echo "<br> 19.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array19[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array20=$array20.$cout[$i];
	}
	$f=strpos($array20,'apps/');
	$l=strpos($array20,'"',$f+1);
	echo "<br> 20.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array20[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array21=$array21.$cout[$i];
	}
	$f=strpos($array21,'apps/');
	$l=strpos($array21,'"',$f+1);
	echo "<br> 21.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array21[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array22=$array22.$cout[$i];
	}
	$f=strpos($array22,'apps/');
	$l=strpos($array22,'"',$f+1);
	echo "<br> 22.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array22[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array23=$array23.$cout[$i];
	}
	$f=strpos($array23,'apps/');
	$l=strpos($array23,'"',$f+1);
	echo "<br> 23.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array23[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array24=$array24.$cout[$i];
	}
	$f=strpos($array24,'apps/');
	$l=strpos($array24,'"',$f+1);
	echo "<br> 24.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array24[$i]; }
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=11&page=2";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array25=$array25.$cout[$i];
	}
	$f=strpos($array25,'apps/');
	$l=strpos($array25,'"',$f+1);
	echo "<br> 25.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array25[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array26=$array26.$cout[$i];
	}
	$f=strpos($array26,'apps/');
	$l=strpos($array26,'"',$f+1);
	echo "<br> 26.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array26[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array27=$array27.$cout[$i];
	}
	$f=strpos($array27,'apps/');
	$l=strpos($array27,'"',$f+1);
	echo "<br> 27.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array27[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array28=$array28.$cout[$i];
	}
	$f=strpos($array28,'apps/');
	$l=strpos($array28,'"',$f+1);
	echo "<br> 28.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array28[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array29=$array29.$cout[$i];
	}
	$f=strpos($array29,'apps/');
	$l=strpos($array29,'"',$f+1);
	echo "<br> 29.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array29[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array30=$array30.$cout[$i];
	}
	$f=strpos($array30,'apps/');
	$l=strpos($array30,'"',$f+1);
	echo "<br> 30.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array30[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array31=$array31.$cout[$i];
	}
	$f=strpos($array31,'apps/');
	$l=strpos($array31,'"',$f+1);
	echo "<br> 31.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array31[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array32=$array32.$cout[$i];
	}
	$f=strpos($array32,'apps/');
	$l=strpos($array32,'"',$f+1);
	echo "<br> 32.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array32[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array33=$array33.$cout[$i];
	}
	$f=strpos($array33,'apps/');
	$l=strpos($array33,'"',$f+1);
	echo "<br> 33.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array33[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array34=$array34.$cout[$i];
	}
	$f=strpos($array34,'apps/');
	$l=strpos($array34,'"',$f+1);
	echo "<br> 34.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array34[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array35=$array35.$cout[$i];
	}
	$f=strpos($array35,'apps/');
	$l=strpos($array35,'"',$f+1);
	echo "<br> 35.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array35[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array36=$array36.$cout[$i];
	}
	$f=strpos($array36,'apps/');
	$l=strpos($array36,'"',$f+1);
	echo "<br> 36.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array36[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array37=$array37.$cout[$i];
	}
	$f=strpos($array37,'apps/');
	$l=strpos($array37,'"',$f+1);
	echo "<br> 37.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array37[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array38=$array38.$cout[$i];
	}
	$f=strpos($array38,'apps/');
	$l=strpos($array38,'"',$f+1);
	echo "<br> 38.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array38[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array39=$array39.$cout[$i];
	}
	$f=strpos($array39,'apps/');
	$l=strpos($array39,'"',$f+1);
	echo "<br> 39.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array39[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array40=$array40.$cout[$i];
	}
	$f=strpos($array40,'apps/');
	$l=strpos($array40,'"',$f+1);
	echo "<br> 40.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array40[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array41=$array41.$cout[$i];
	}
	$f=strpos($array41,'apps/');
	$l=strpos($array41,'"',$f+1);
	echo "<br> 41.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array41[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array42=$array42.$cout[$i];
	}
	$f=strpos($array42,'apps/');
	$l=strpos($array42,'"',$f+1);
	echo "<br> 42.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array42[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array43=$array43.$cout[$i];
	}
	$f=strpos($array43,'apps/');
	$l=strpos($array43,'"',$f+1);
	echo "<br> 43.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array43[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array44=$array44.$cout[$i];
	}
	$f=strpos($array44,'apps/');
	$l=strpos($array44,'"',$f+1);
	echo "<br> 44.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array44[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array45=$array45.$cout[$i];
	}
	$f=strpos($array45,'apps/');
	$l=strpos($array45,'"',$f+1);
	echo "<br> 45.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array45[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array46=$array46.$cout[$i];
	}
	$f=strpos($array46,'apps/');
	$l=strpos($array46,'"',$f+1);
	echo "<br> 46.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array46[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array47=$array47.$cout[$i];
	}
	$f=strpos($array47,'apps/');
	$l=strpos($array47,'"',$f+1);
	echo "<br> 47.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array47[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array48=$array48.$cout[$i];
	}
	$f=strpos($array48,'apps/');
	$l=strpos($array48,'"',$f+1);
	echo "<br> 48.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array48[$i]; }
        $url="http://developer.txtweb.com/user/apps/most-used?catlist=11&page=3";
	$cout=file_get_contents("$url");
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array49=$array49.$cout[$i];
	}
	$f=strpos($array49,'apps/');
	$l=strpos($array49,'"',$f+1);
	echo "<br> 49.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array49[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array50=$array50.$cout[$i];
	}
	$f=strpos($array50,'apps/');
	$l=strpos($array50,'"',$f+1);
	echo "<br> 50.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array50[$i]; }
	break;

case 6: echo " Best 24 apps of News and Entertainment";
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=3";
	$cout=file_get_contents("$url");
        $first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array1=$array1.$cout[$i];
	}
	$f=strpos($array1,'apps/');
	$l=strpos($array1,'"',$f+1);
	echo "<br> 1.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array1[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array2=$array2.$cout[$i];
	}
	$f=strpos($array2,'apps/');
	$l=strpos($array2,'"',$f+1);
	echo "<br> 2.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array2[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array3=$array3.$cout[$i];
	}
	$f=strpos($array3,'apps/');
	$l=strpos($array3,'"',$f+1);
	echo "<br> 3.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array3[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array4=$array4.$cout[$i];
	}
	$f=strpos($array4,'apps/');
	$l=strpos($array4,'"',$f+1);
	echo "<br> 4.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array4[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array5=$array5.$cout[$i];
	}
	$f=strpos($array5,'apps/');
	$l=strpos($array5,'"',$f+1);
	echo "<br> 5.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array5[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array6=$array6.$cout[$i];
	}
	$f=strpos($array6,'apps/');
	$l=strpos($array6,'"',$f+1);
	echo "<br> 6.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array6[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array7=$array7.$cout[$i];
	}
	$f=strpos($array7,'apps/');
	$l=strpos($array7,'"',$f+1);
	echo "<br> 7.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array7[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array8=$array8.$cout[$i];
	}
	$f=strpos($array8,'apps/');
	$l=strpos($array8,'"',$f+1);
	echo "<br> 8.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array8[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array9=$array9.$cout[$i];
	}
	$f=strpos($array9,'apps/');
	$l=strpos($array9,'"',$f+1);
	echo "<br> 9.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array9[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array10=$array10.$cout[$i];
	}
	$f=strpos($array10,'apps/');
	$l=strpos($array10,'"',$f+1);
	echo "<br> 10.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array10[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array11=$array11.$cout[$i];
	}
	$f=strpos($array11,'apps/');
	$l=strpos($array11,'"',$f+1);
	echo "<br> 11.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array11[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array12=$array12.$cout[$i];
	}
	$f=strpos($array12,'apps/');
	$l=strpos($array12,'"',$f+1);
	echo "<br> 12.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array12[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array13=$array13.$cout[$i];
	}
	$f=strpos($array13,'apps/');
	$l=strpos($array13,'"',$f+1);
	echo "<br> 13.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array13[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array14=$array14.$cout[$i];
	}
	$f=strpos($array14,'apps/');
	$l=strpos($array14,'"',$f+1);
	echo "<br> 14.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array14[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array15=$array15.$cout[$i];
	}
	$f=strpos($array15,'apps/');
	$l=strpos($array15,'"',$f+1);
	echo "<br> 15.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array15[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array16=$array16.$cout[$i];
	}
	$f=strpos($array16,'apps/');
	$l=strpos($array16,'"',$f+1);
	echo "<br> 16.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array16[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array17=$array17.$cout[$i];
	}
	$f=strpos($array17,'apps/');
	$l=strpos($array17,'"',$f+1);
	echo "<br> 17.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array17[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array18=$array18.$cout[$i];
	}
	$f=strpos($array18,'apps/');
	$l=strpos($array18,'"',$f+1);
	echo "<br> 18.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array18[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array19=$array19.$cout[$i];
	}
	$f=strpos($array19,'apps/');
	$l=strpos($array19,'"',$f+1);
	echo "<br> 19.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array19[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array20=$array20.$cout[$i];
	}
	$f=strpos($array20,'apps/');
	$l=strpos($array20,'"',$f+1);
	echo "<br> 20.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array20[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array21=$array21.$cout[$i];
	}
	$f=strpos($array21,'apps/');
	$l=strpos($array21,'"',$f+1);
	echo "<br> 21.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array21[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array22=$array22.$cout[$i];
	}
	$f=strpos($array22,'apps/');
	$l=strpos($array22,'"',$f+1);
	echo "<br> 22.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array22[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array23=$array23.$cout[$i];
	}
	$f=strpos($array23,'apps/');
	$l=strpos($array23,'"',$f+1);
	echo "<br> 23.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array23[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array24=$array24.$cout[$i];
	}
	$f=strpos($array24,'apps/');
	$l=strpos($array24,'"',$f+1);
	echo "<br> 24.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array24[$i]; }
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=3&page=2";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array25=$array25.$cout[$i];
	}
	$f=strpos($array25,'apps/');
	$l=strpos($array25,'"',$f+1);
	echo "<br> 25.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array25[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array26=$array26.$cout[$i];
	}
	$f=strpos($array26,'apps/');
	$l=strpos($array26,'"',$f+1);
	echo "<br> 26.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array26[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array27=$array27.$cout[$i];
	}
	$f=strpos($array27,'apps/');
	$l=strpos($array27,'"',$f+1);
	echo "<br> 27.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array27[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array28=$array28.$cout[$i];
	}
	$f=strpos($array28,'apps/');
	$l=strpos($array28,'"',$f+1);
	echo "<br> 28.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array28[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array29=$array29.$cout[$i];
	}
	$f=strpos($array29,'apps/');
	$l=strpos($array29,'"',$f+1);
	echo "<br> 29.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array29[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array30=$array30.$cout[$i];
	}
	$f=strpos($array30,'apps/');
	$l=strpos($array30,'"',$f+1);
	echo "<br> 30.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array30[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array31=$array31.$cout[$i];
	}
	$f=strpos($array31,'apps/');
	$l=strpos($array31,'"',$f+1);
	echo "<br> 31.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array31[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array32=$array32.$cout[$i];
	}
	$f=strpos($array32,'apps/');
	$l=strpos($array32,'"',$f+1);
	echo "<br> 32.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array32[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array33=$array33.$cout[$i];
	}
	$f=strpos($array33,'apps/');
	$l=strpos($array33,'"',$f+1);
	echo "<br> 33.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array33[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array34=$array34.$cout[$i];
	}
	$f=strpos($array34,'apps/');
	$l=strpos($array34,'"',$f+1);
	echo "<br> 34.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array34[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array35=$array35.$cout[$i];
	}
	$f=strpos($array35,'apps/');
	$l=strpos($array35,'"',$f+1);
	echo "<br> 35.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array35[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array36=$array36.$cout[$i];
	}
	$f=strpos($array36,'apps/');
	$l=strpos($array36,'"',$f+1);
	echo "<br> 36.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array36[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array37=$array37.$cout[$i];
	}
	$f=strpos($array37,'apps/');
	$l=strpos($array37,'"',$f+1);
	echo "<br> 37.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array37[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array38=$array38.$cout[$i];
	}
	$f=strpos($array38,'apps/');
	$l=strpos($array38,'"',$f+1);
	echo "<br> 38.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array38[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array39=$array39.$cout[$i];
	}
	$f=strpos($array39,'apps/');
	$l=strpos($array39,'"',$f+1);
	echo "<br> 39.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array39[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array40=$array40.$cout[$i];
	}
	$f=strpos($array40,'apps/');
	$l=strpos($array40,'"',$f+1);
	echo "<br> 40.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array40[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array41=$array41.$cout[$i];
	}
	$f=strpos($array41,'apps/');
	$l=strpos($array41,'"',$f+1);
	echo "<br> 41.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array41[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array42=$array42.$cout[$i];
	}
	$f=strpos($array42,'apps/');
	$l=strpos($array42,'"',$f+1);
	echo "<br> 42.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array42[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array43=$array43.$cout[$i];
	}
	$f=strpos($array43,'apps/');
	$l=strpos($array43,'"',$f+1);
	echo "<br> 43.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array43[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array44=$array44.$cout[$i];
	}
	$f=strpos($array44,'apps/');
	$l=strpos($array44,'"',$f+1);
	echo "<br> 44.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array44[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array45=$array45.$cout[$i];
	}
	$f=strpos($array45,'apps/');
	$l=strpos($array45,'"',$f+1);
	echo "<br> 45.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array45[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array46=$array46.$cout[$i];
	}
	$f=strpos($array46,'apps/');
	$l=strpos($array46,'"',$f+1);
	echo "<br> 46.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array46[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array47=$array47.$cout[$i];
	}
	$f=strpos($array47,'apps/');
	$l=strpos($array47,'"',$f+1);
	echo "<br> 47.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array47[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array48=$array48.$cout[$i];
	}
	$f=strpos($array48,'apps/');
	$l=strpos($array48,'"',$f+1);
	echo "<br> 48.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array48[$i]; }
        $url="http://developer.txtweb.com/user/apps/most-used?catlist=3&page=3";
	$cout=file_get_contents("$url");
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array49=$array49.$cout[$i];
	}
	$f=strpos($array49,'apps/');
	$l=strpos($array49,'"',$f+1);
	echo "<br> 49.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array49[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array50=$array50.$cout[$i];
	}
	$f=strpos($array50,'apps/');
	$l=strpos($array50,'"',$f+1);
	echo "<br> 50.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array50[$i]; }
	break;

case 7: echo "Best 24 apps of Social networking";
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=5";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array1=$array1.$cout[$i];
	}
	$f=strpos($array1,'apps/');
	$l=strpos($array1,'"',$f+1);
	echo "<br> 1.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array1[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array2=$array2.$cout[$i];
	}
	$f=strpos($array2,'apps/');
	$l=strpos($array2,'"',$f+1);
	echo "<br> 2.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array2[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array3=$array3.$cout[$i];
	}
	$f=strpos($array3,'apps/');
	$l=strpos($array3,'"',$f+1);
	echo "<br> 3.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array3[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array4=$array4.$cout[$i];
	}
	$f=strpos($array4,'apps/');
	$l=strpos($array4,'"',$f+1);
	echo "<br> 4.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array4[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array5=$array5.$cout[$i];
	}
	$f=strpos($array5,'apps/');
	$l=strpos($array5,'"',$f+1);
	echo "<br> 5.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array5[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array6=$array6.$cout[$i];
	}
	$f=strpos($array6,'apps/');
	$l=strpos($array6,'"',$f+1);
	echo "<br> 6.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array6[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array7=$array7.$cout[$i];
	}
	$f=strpos($array7,'apps/');
	$l=strpos($array7,'"',$f+1);
	echo "<br> 7.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array7[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array8=$array8.$cout[$i];
	}
	$f=strpos($array8,'apps/');
	$l=strpos($array8,'"',$f+1);
	echo "<br> 8.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array8[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array9=$array9.$cout[$i];
	}
	$f=strpos($array9,'apps/');
	$l=strpos($array9,'"',$f+1);
	echo "<br> 9.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array9[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array10=$array10.$cout[$i];
	}
	$f=strpos($array10,'apps/');
	$l=strpos($array10,'"',$f+1);
	echo "<br> 10.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array10[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array11=$array11.$cout[$i];
	}
	$f=strpos($array11,'apps/');
	$l=strpos($array11,'"',$f+1);
	echo "<br> 11.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array11[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array12=$array12.$cout[$i];
	}
	$f=strpos($array12,'apps/');
	$l=strpos($array12,'"',$f+1);
	echo "<br> 12.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array12[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array13=$array13.$cout[$i];
	}
	$f=strpos($array13,'apps/');
	$l=strpos($array13,'"',$f+1);
	echo "<br> 13.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array13[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array14=$array14.$cout[$i];
	}
	$f=strpos($array14,'apps/');
	$l=strpos($array14,'"',$f+1);
	echo "<br> 14.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array14[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array15=$array15.$cout[$i];
	}
	$f=strpos($array15,'apps/');
	$l=strpos($array15,'"',$f+1);
	echo "<br> 15.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array15[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array16=$array16.$cout[$i];
	}
	$f=strpos($array16,'apps/');
	$l=strpos($array16,'"',$f+1);
	echo "<br> 16.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array16[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array17=$array17.$cout[$i];
	}
	$f=strpos($array17,'apps/');
	$l=strpos($array17,'"',$f+1);
	echo "<br> 17.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array17[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array18=$array18.$cout[$i];
	}
	$f=strpos($array18,'apps/');
	$l=strpos($array18,'"',$f+1);
	echo "<br> 18.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array18[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array19=$array19.$cout[$i];
	}
	$f=strpos($array19,'apps/');
	$l=strpos($array19,'"',$f+1);
	echo "<br> 19.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array19[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array20=$array20.$cout[$i];
	}
	$f=strpos($array20,'apps/');
	$l=strpos($array20,'"',$f+1);
	echo "<br> 20.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array20[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array21=$array21.$cout[$i];
	}
	$f=strpos($array21,'apps/');
	$l=strpos($array21,'"',$f+1);
	echo "<br> 21.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array21[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array22=$array22.$cout[$i];
	}
	$f=strpos($array22,'apps/');
	$l=strpos($array22,'"',$f+1);
	echo "<br> 22.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array22[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array23=$array23.$cout[$i];
	}
	$f=strpos($array23,'apps/');
	$l=strpos($array23,'"',$f+1);
	echo "<br> 23.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array23[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array24=$array24.$cout[$i];
	}
	$f=strpos($array24,'apps/');
	$l=strpos($array24,'"',$f+1);
	echo "<br> 24.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array24[$i]; }
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=5&page=2";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array25=$array25.$cout[$i];
	}
	$f=strpos($array25,'apps/');
	$l=strpos($array25,'"',$f+1);
	echo "<br> 25.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array25[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array26=$array26.$cout[$i];
	}
	$f=strpos($array26,'apps/');
	$l=strpos($array26,'"',$f+1);
	echo "<br> 26.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array26[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array27=$array27.$cout[$i];
	}
	$f=strpos($array27,'apps/');
	$l=strpos($array27,'"',$f+1);
	echo "<br> 27.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array27[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array28=$array28.$cout[$i];
	}
	$f=strpos($array28,'apps/');
	$l=strpos($array28,'"',$f+1);
	echo "<br> 28.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array28[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array29=$array29.$cout[$i];
	}
	$f=strpos($array29,'apps/');
	$l=strpos($array29,'"',$f+1);
	echo "<br> 29.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array29[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array30=$array30.$cout[$i];
	}
	$f=strpos($array30,'apps/');
	$l=strpos($array30,'"',$f+1);
	echo "<br> 30.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array30[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array31=$array31.$cout[$i];
	}
	$f=strpos($array31,'apps/');
	$l=strpos($array31,'"',$f+1);
	echo "<br> 31.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array31[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array32=$array32.$cout[$i];
	}
	$f=strpos($array32,'apps/');
	$l=strpos($array32,'"',$f+1);
	echo "<br> 32.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array32[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array33=$array33.$cout[$i];
	}
	$f=strpos($array33,'apps/');
	$l=strpos($array33,'"',$f+1);
	echo "<br> 33.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array33[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array34=$array34.$cout[$i];
	}
	$f=strpos($array34,'apps/');
	$l=strpos($array34,'"',$f+1);
	echo "<br> 34.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array34[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array35=$array35.$cout[$i];
	}
	$f=strpos($array35,'apps/');
	$l=strpos($array35,'"',$f+1);
	echo "<br> 35.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array35[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array36=$array36.$cout[$i];
	}
	$f=strpos($array36,'apps/');
	$l=strpos($array36,'"',$f+1);
	echo "<br> 36.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array36[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array37=$array37.$cout[$i];
	}
	$f=strpos($array37,'apps/');
	$l=strpos($array37,'"',$f+1);
	echo "<br> 37.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array37[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array38=$array38.$cout[$i];
	}
	$f=strpos($array38,'apps/');
	$l=strpos($array38,'"',$f+1);
	echo "<br> 38.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array38[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array39=$array39.$cout[$i];
	}
	$f=strpos($array39,'apps/');
	$l=strpos($array39,'"',$f+1);
	echo "<br> 39.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array39[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array40=$array40.$cout[$i];
	}
	$f=strpos($array40,'apps/');
	$l=strpos($array40,'"',$f+1);
	echo "<br> 40.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array40[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array41=$array41.$cout[$i];
	}
	$f=strpos($array41,'apps/');
	$l=strpos($array41,'"',$f+1);
	echo "<br> 41.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array41[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array42=$array42.$cout[$i];
	}
	$f=strpos($array42,'apps/');
	$l=strpos($array42,'"',$f+1);
	echo "<br> 42.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array42[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array43=$array43.$cout[$i];
	}
	$f=strpos($array43,'apps/');
	$l=strpos($array43,'"',$f+1);
	echo "<br> 43.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array43[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array44=$array44.$cout[$i];
	}
	$f=strpos($array44,'apps/');
	$l=strpos($array44,'"',$f+1);
	echo "<br> 44.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array44[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array45=$array45.$cout[$i];
	}
	$f=strpos($array45,'apps/');
	$l=strpos($array45,'"',$f+1);
	echo "<br> 45.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array45[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array46=$array46.$cout[$i];
	}
	$f=strpos($array46,'apps/');
	$l=strpos($array46,'"',$f+1);
	echo "<br> 46.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array46[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array47=$array47.$cout[$i];
	}
	$f=strpos($array47,'apps/');
	$l=strpos($array47,'"',$f+1);
	echo "<br> 47.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array47[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array48=$array48.$cout[$i];
	}
	$f=strpos($array48,'apps/');
	$l=strpos($array48,'"',$f+1);
	echo "<br> 48.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array48[$i]; }
        $url="http://developer.txtweb.com/user/apps/most-used?catlist=5&page=3";
	$cout=file_get_contents("$url");
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array49=$array49.$cout[$i];
	}
	$f=strpos($array49,'apps/');
	$l=strpos($array49,'"',$f+1);
	echo "<br> 49.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array49[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array50=$array50.$cout[$i];
	}
	$f=strpos($array50,'apps/');
	$l=strpos($array50,'"',$f+1);
	echo "<br> 50.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array50[$i]; }
	break;

case 8: echo "Best 24 apps of Sports";
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=21";
	$cout=file_get_contents("$url");
       $first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array1=$array1.$cout[$i];
	}
	$f=strpos($array1,'apps/');
	$l=strpos($array1,'"',$f+1);
	echo "<br> 1.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array1[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array2=$array2.$cout[$i];
	}
	$f=strpos($array2,'apps/');
	$l=strpos($array2,'"',$f+1);
	echo "<br> 2.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array2[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array3=$array3.$cout[$i];
	}
	$f=strpos($array3,'apps/');
	$l=strpos($array3,'"',$f+1);
	echo "<br> 3.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array3[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array4=$array4.$cout[$i];
	}
	$f=strpos($array4,'apps/');
	$l=strpos($array4,'"',$f+1);
	echo "<br> 4.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array4[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array5=$array5.$cout[$i];
	}
	$f=strpos($array5,'apps/');
	$l=strpos($array5,'"',$f+1);
	echo "<br> 5.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array5[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array6=$array6.$cout[$i];
	}
	$f=strpos($array6,'apps/');
	$l=strpos($array6,'"',$f+1);
	echo "<br> 6.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array6[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array7=$array7.$cout[$i];
	}
	$f=strpos($array7,'apps/');
	$l=strpos($array7,'"',$f+1);
	echo "<br> 7.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array7[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array8=$array8.$cout[$i];
	}
	$f=strpos($array8,'apps/');
	$l=strpos($array8,'"',$f+1);
	echo "<br> 8.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array8[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array9=$array9.$cout[$i];
	}
	$f=strpos($array9,'apps/');
	$l=strpos($array9,'"',$f+1);
	echo "<br> 9.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array9[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array10=$array10.$cout[$i];
	}
	$f=strpos($array10,'apps/');
	$l=strpos($array10,'"',$f+1);
	echo "<br> 10.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array10[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array11=$array11.$cout[$i];
	}
	$f=strpos($array11,'apps/');
	$l=strpos($array11,'"',$f+1);
	echo "<br> 11.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array11[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array12=$array12.$cout[$i];
	}
	$f=strpos($array12,'apps/');
	$l=strpos($array12,'"',$f+1);
	echo "<br> 12.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array12[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array13=$array13.$cout[$i];
	}
	$f=strpos($array13,'apps/');
	$l=strpos($array13,'"',$f+1);
	echo "<br> 13.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array13[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array14=$array14.$cout[$i];
	}
	$f=strpos($array14,'apps/');
	$l=strpos($array14,'"',$f+1);
	echo "<br> 14.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array14[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array15=$array15.$cout[$i];
	}
	$f=strpos($array15,'apps/');
	$l=strpos($array15,'"',$f+1);
	echo "<br> 15.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array15[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array16=$array16.$cout[$i];
	}
	$f=strpos($array16,'apps/');
	$l=strpos($array16,'"',$f+1);
	echo "<br> 16.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array16[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array17=$array17.$cout[$i];
	}
	$f=strpos($array17,'apps/');
	$l=strpos($array17,'"',$f+1);
	echo "<br> 17.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array17[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array18=$array18.$cout[$i];
	}
	$f=strpos($array18,'apps/');
	$l=strpos($array18,'"',$f+1);
	echo "<br> 18.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array18[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array19=$array19.$cout[$i];
	}
	$f=strpos($array19,'apps/');
	$l=strpos($array19,'"',$f+1);
	echo "<br> 19.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array19[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array20=$array20.$cout[$i];
	}
	$f=strpos($array20,'apps/');
	$l=strpos($array20,'"',$f+1);
	echo "<br> 20.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array20[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array21=$array21.$cout[$i];
	}
	$f=strpos($array21,'apps/');
	$l=strpos($array21,'"',$f+1);
	echo "<br> 21.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array21[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array22=$array22.$cout[$i];
	}
	$f=strpos($array22,'apps/');
	$l=strpos($array22,'"',$f+1);
	echo "<br> 22.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array22[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array23=$array23.$cout[$i];
	}
	$f=strpos($array23,'apps/');
	$l=strpos($array23,'"',$f+1);
	echo "<br> 23.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array23[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array24=$array24.$cout[$i];
	}
	$f=strpos($array24,'apps/');
	$l=strpos($array24,'"',$f+1);
	echo "<br> 24.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array24[$i]; }
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=21&page=2";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array25=$array25.$cout[$i];
	}
	$f=strpos($array25,'apps/');
	$l=strpos($array25,'"',$f+1);
	echo "<br> 25.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array25[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array26=$array26.$cout[$i];
	}
	$f=strpos($array26,'apps/');
	$l=strpos($array26,'"',$f+1);
	echo "<br> 26.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array26[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array27=$array27.$cout[$i];
	}
	$f=strpos($array27,'apps/');
	$l=strpos($array27,'"',$f+1);
	echo "<br> 27.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array27[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array28=$array28.$cout[$i];
	}
	$f=strpos($array28,'apps/');
	$l=strpos($array28,'"',$f+1);
	echo "<br> 28.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array28[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array29=$array29.$cout[$i];
	}
	$f=strpos($array29,'apps/');
	$l=strpos($array29,'"',$f+1);
	echo "<br> 29.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array29[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array30=$array30.$cout[$i];
	}
	$f=strpos($array30,'apps/');
	$l=strpos($array30,'"',$f+1);
	echo "<br> 30.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array30[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array31=$array31.$cout[$i];
	}
	$f=strpos($array31,'apps/');
	$l=strpos($array31,'"',$f+1);
	echo "<br> 31.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array31[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array32=$array32.$cout[$i];
	}
	$f=strpos($array32,'apps/');
	$l=strpos($array32,'"',$f+1);
	echo "<br> 32.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array32[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array33=$array33.$cout[$i];
	}
	$f=strpos($array33,'apps/');
	$l=strpos($array33,'"',$f+1);
	echo "<br> 33.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array33[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array34=$array34.$cout[$i];
	}
	$f=strpos($array34,'apps/');
	$l=strpos($array34,'"',$f+1);
	echo "<br> 34.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array34[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array35=$array35.$cout[$i];
	}
	$f=strpos($array35,'apps/');
	$l=strpos($array35,'"',$f+1);
	echo "<br> 35.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array35[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array36=$array36.$cout[$i];
	}
	$f=strpos($array36,'apps/');
	$l=strpos($array36,'"',$f+1);
	echo "<br> 36.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array36[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array37=$array37.$cout[$i];
	}
	$f=strpos($array37,'apps/');
	$l=strpos($array37,'"',$f+1);
	echo "<br> 37.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array37[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array38=$array38.$cout[$i];
	}
	$f=strpos($array38,'apps/');
	$l=strpos($array38,'"',$f+1);
	echo "<br> 38.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array38[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array39=$array39.$cout[$i];
	}
	$f=strpos($array39,'apps/');
	$l=strpos($array39,'"',$f+1);
	echo "<br> 39.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array39[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array40=$array40.$cout[$i];
	}
	$f=strpos($array40,'apps/');
	$l=strpos($array40,'"',$f+1);
	echo "<br> 40.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array40[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array41=$array41.$cout[$i];
	}
	$f=strpos($array41,'apps/');
	$l=strpos($array41,'"',$f+1);
	echo "<br> 41.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array41[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array42=$array42.$cout[$i];
	}
	$f=strpos($array42,'apps/');
	$l=strpos($array42,'"',$f+1);
	echo "<br> 42.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array42[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array43=$array43.$cout[$i];
	}
	$f=strpos($array43,'apps/');
	$l=strpos($array43,'"',$f+1);
	echo "<br> 43.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array43[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array44=$array44.$cout[$i];
	}
	$f=strpos($array44,'apps/');
	$l=strpos($array44,'"',$f+1);
	echo "<br> 44.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array44[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array45=$array45.$cout[$i];
	}
	$f=strpos($array45,'apps/');
	$l=strpos($array45,'"',$f+1);
	echo "<br> 45.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array45[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array46=$array46.$cout[$i];
	}
	$f=strpos($array46,'apps/');
	$l=strpos($array46,'"',$f+1);
	echo "<br> 46.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array46[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array47=$array47.$cout[$i];
	}
	$f=strpos($array47,'apps/');
	$l=strpos($array47,'"',$f+1);
	echo "<br> 47.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array47[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array48=$array48.$cout[$i];
	}
	$f=strpos($array48,'apps/');
	$l=strpos($array48,'"',$f+1);
	echo "<br> 48.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array48[$i]; }
        $url="http://developer.txtweb.com/user/apps/most-used?catlist=21&page=3";
	$cout=file_get_contents("$url");
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array49=$array49.$cout[$i];
	}
	$f=strpos($array49,'apps/');
	$l=strpos($array49,'"',$f+1);
	echo "<br> 49.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array49[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array50=$array50.$cout[$i];
	}
	$f=strpos($array50,'apps/');
	$l=strpos($array50,'"',$f+1);
	echo "<br> 50.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array50[$i]; }
	break;

case 9: echo " Best 24 apps of Travel";
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=6";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array1=$array1.$cout[$i];
	}
	$f=strpos($array1,'apps/');
	$l=strpos($array1,'"',$f+1);
	echo "<br> 1.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array1[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array2=$array2.$cout[$i];
	}
	$f=strpos($array2,'apps/');
	$l=strpos($array2,'"',$f+1);
	echo "<br> 2.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array2[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array3=$array3.$cout[$i];
	}
	$f=strpos($array3,'apps/');
	$l=strpos($array3,'"',$f+1);
	echo "<br> 3.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array3[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array4=$array4.$cout[$i];
	}
	$f=strpos($array4,'apps/');
	$l=strpos($array4,'"',$f+1);
	echo "<br> 4.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array4[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array5=$array5.$cout[$i];
	}
	$f=strpos($array5,'apps/');
	$l=strpos($array5,'"',$f+1);
	echo "<br> 5.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array5[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array6=$array6.$cout[$i];
	}
	$f=strpos($array6,'apps/');
	$l=strpos($array6,'"',$f+1);
	echo "<br> 6.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array6[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array7=$array7.$cout[$i];
	}
	$f=strpos($array7,'apps/');
	$l=strpos($array7,'"',$f+1);
	echo "<br> 7.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array7[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array8=$array8.$cout[$i];
	}
	$f=strpos($array8,'apps/');
	$l=strpos($array8,'"',$f+1);
	echo "<br> 8.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array8[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array9=$array9.$cout[$i];
	}
	$f=strpos($array9,'apps/');
	$l=strpos($array9,'"',$f+1);
	echo "<br> 9.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array9[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array10=$array10.$cout[$i];
	}
	$f=strpos($array10,'apps/');
	$l=strpos($array10,'"',$f+1);
	echo "<br> 10.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array10[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array11=$array11.$cout[$i];
	}
	$f=strpos($array11,'apps/');
	$l=strpos($array11,'"',$f+1);
	echo "<br> 11.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array11[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array12=$array12.$cout[$i];
	}
	$f=strpos($array12,'apps/');
	$l=strpos($array12,'"',$f+1);
	echo "<br> 12.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array12[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array13=$array13.$cout[$i];
	}
	$f=strpos($array13,'apps/');
	$l=strpos($array13,'"',$f+1);
	echo "<br> 13.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array13[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array14=$array14.$cout[$i];
	}
	$f=strpos($array14,'apps/');
	$l=strpos($array14,'"',$f+1);
	echo "<br> 14.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array14[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array15=$array15.$cout[$i];
	}
	$f=strpos($array15,'apps/');
	$l=strpos($array15,'"',$f+1);
	echo "<br> 15.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array15[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array16=$array16.$cout[$i];
	}
	$f=strpos($array16,'apps/');
	$l=strpos($array16,'"',$f+1);
	echo "<br> 16.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array16[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array17=$array17.$cout[$i];
	}
	$f=strpos($array17,'apps/');
	$l=strpos($array17,'"',$f+1);
	echo "<br> 17.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array17[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array18=$array18.$cout[$i];
	}
	$f=strpos($array18,'apps/');
	$l=strpos($array18,'"',$f+1);
	echo "<br> 18.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array18[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array19=$array19.$cout[$i];
	}
	$f=strpos($array19,'apps/');
	$l=strpos($array19,'"',$f+1);
	echo "<br> 19.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array19[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array20=$array20.$cout[$i];
	}
	$f=strpos($array20,'apps/');
	$l=strpos($array20,'"',$f+1);
	echo "<br> 20.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array20[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array21=$array21.$cout[$i];
	}
	$f=strpos($array21,'apps/');
	$l=strpos($array21,'"',$f+1);
	echo "<br> 21.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array21[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array22=$array22.$cout[$i];
	}
	$f=strpos($array22,'apps/');
	$l=strpos($array22,'"',$f+1);
	echo "<br> 22.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array22[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array23=$array23.$cout[$i];
	}
	$f=strpos($array23,'apps/');
	$l=strpos($array23,'"',$f+1);
	echo "<br> 23.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array23[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array24=$array24.$cout[$i];
	}
	$f=strpos($array24,'apps/');
	$l=strpos($array24,'"',$f+1);
	echo "<br> 24.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array24[$i]; }
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=6&page=2";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array25=$array25.$cout[$i];
	}
	$f=strpos($array25,'apps/');
	$l=strpos($array25,'"',$f+1);
	echo "<br> 25.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array25[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array26=$array26.$cout[$i];
	}
	$f=strpos($array26,'apps/');
	$l=strpos($array26,'"',$f+1);
	echo "<br> 26.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array26[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array27=$array27.$cout[$i];
	}
	$f=strpos($array27,'apps/');
	$l=strpos($array27,'"',$f+1);
	echo "<br> 27.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array27[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array28=$array28.$cout[$i];
	}
	$f=strpos($array28,'apps/');
	$l=strpos($array28,'"',$f+1);
	echo "<br> 28.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array28[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array29=$array29.$cout[$i];
	}
	$f=strpos($array29,'apps/');
	$l=strpos($array29,'"',$f+1);
	echo "<br> 29.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array29[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array30=$array30.$cout[$i];
	}
	$f=strpos($array30,'apps/');
	$l=strpos($array30,'"',$f+1);
	echo "<br> 30.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array30[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array31=$array31.$cout[$i];
	}
	$f=strpos($array31,'apps/');
	$l=strpos($array31,'"',$f+1);
	echo "<br> 31.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array31[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array32=$array32.$cout[$i];
	}
	$f=strpos($array32,'apps/');
	$l=strpos($array32,'"',$f+1);
	echo "<br> 32.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array32[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array33=$array33.$cout[$i];
	}
	$f=strpos($array33,'apps/');
	$l=strpos($array33,'"',$f+1);
	echo "<br> 33.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array33[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array34=$array34.$cout[$i];
	}
	$f=strpos($array34,'apps/');
	$l=strpos($array34,'"',$f+1);
	echo "<br> 34.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array34[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array35=$array35.$cout[$i];
	}
	$f=strpos($array35,'apps/');
	$l=strpos($array35,'"',$f+1);
	echo "<br> 35.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array35[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array36=$array36.$cout[$i];
	}
	$f=strpos($array36,'apps/');
	$l=strpos($array36,'"',$f+1);
	echo "<br> 36.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array36[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array37=$array37.$cout[$i];
	}
	$f=strpos($array37,'apps/');
	$l=strpos($array37,'"',$f+1);
	echo "<br> 37.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array37[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array38=$array38.$cout[$i];
	}
	$f=strpos($array38,'apps/');
	$l=strpos($array38,'"',$f+1);
	echo "<br> 38.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array38[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array39=$array39.$cout[$i];
	}
	$f=strpos($array39,'apps/');
	$l=strpos($array39,'"',$f+1);
	echo "<br> 39.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array39[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array40=$array40.$cout[$i];
	}
	$f=strpos($array40,'apps/');
	$l=strpos($array40,'"',$f+1);
	echo "<br> 40.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array40[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array41=$array41.$cout[$i];
	}
	$f=strpos($array41,'apps/');
	$l=strpos($array41,'"',$f+1);
	echo "<br> 41.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array41[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array42=$array42.$cout[$i];
	}
	$f=strpos($array42,'apps/');
	$l=strpos($array42,'"',$f+1);
	echo "<br> 42.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array42[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array43=$array43.$cout[$i];
	}
	$f=strpos($array43,'apps/');
	$l=strpos($array43,'"',$f+1);
	echo "<br> 43.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array43[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array44=$array44.$cout[$i];
	}
	$f=strpos($array44,'apps/');
	$l=strpos($array44,'"',$f+1);
	echo "<br> 44.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array44[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array45=$array45.$cout[$i];
	}
	$f=strpos($array45,'apps/');
	$l=strpos($array45,'"',$f+1);
	echo "<br> 45.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array45[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array46=$array46.$cout[$i];
	}
	$f=strpos($array46,'apps/');
	$l=strpos($array46,'"',$f+1);
	echo "<br> 46.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array46[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array47=$array47.$cout[$i];
	}
	$f=strpos($array47,'apps/');
	$l=strpos($array47,'"',$f+1);
	echo "<br> 47.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array47[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array48=$array48.$cout[$i];
	}
	$f=strpos($array48,'apps/');
	$l=strpos($array48,'"',$f+1);
	echo "<br> 48.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array48[$i]; }
        $url="http://developer.txtweb.com/user/apps/most-used?catlist=6&page=3";
	$cout=file_get_contents("$url");
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array49=$array49.$cout[$i];
	}
	$f=strpos($array49,'apps/');
	$l=strpos($array49,'"',$f+1);
	echo "<br> 49.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array49[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array50=$array50.$cout[$i];
	}
	$f=strpos($array50,'apps/');
	$l=strpos($array50,'"',$f+1);
	echo "<br> 50.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array50[$i]; }
	break;

case 10: echo " Best 24 apps of Textweb Improvements";
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=10";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array1=$array1.$cout[$i];
	}
	$f=strpos($array1,'apps/');
	$l=strpos($array1,'"',$f+1);
	echo "<br> 1.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array1[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array2=$array2.$cout[$i];
	}
	$f=strpos($array2,'apps/');
	$l=strpos($array2,'"',$f+1);
	echo "<br> 2.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array2[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array3=$array3.$cout[$i];
	}
	$f=strpos($array3,'apps/');
	$l=strpos($array3,'"',$f+1);
	echo "<br> 3.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array3[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array4=$array4.$cout[$i];
	}
	$f=strpos($array4,'apps/');
	$l=strpos($array4,'"',$f+1);
	echo "<br> 4.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array4[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array5=$array5.$cout[$i];
	}
	$f=strpos($array5,'apps/');
	$l=strpos($array5,'"',$f+1);
	echo "<br> 5.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array5[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array6=$array6.$cout[$i];
	}
	$f=strpos($array6,'apps/');
	$l=strpos($array6,'"',$f+1);
	echo "<br> 6.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array6[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array7=$array7.$cout[$i];
	}
	$f=strpos($array7,'apps/');
	$l=strpos($array7,'"',$f+1);
	echo "<br> 7.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array7[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array8=$array8.$cout[$i];
	}
	$f=strpos($array8,'apps/');
	$l=strpos($array8,'"',$f+1);
	echo "<br> 8.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array8[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array9=$array9.$cout[$i];
	}
	$f=strpos($array9,'apps/');
	$l=strpos($array9,'"',$f+1);
	echo "<br> 9.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array9[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array10=$array10.$cout[$i];
	}
	$f=strpos($array10,'apps/');
	$l=strpos($array10,'"',$f+1);
	echo "<br> 10.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array10[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array11=$array11.$cout[$i];
	}
	$f=strpos($array11,'apps/');
	$l=strpos($array11,'"',$f+1);
	echo "<br> 11.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array11[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array12=$array12.$cout[$i];
	}
	$f=strpos($array12,'apps/');
	$l=strpos($array12,'"',$f+1);
	echo "<br> 12.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array12[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array13=$array13.$cout[$i];
	}
	$f=strpos($array13,'apps/');
	$l=strpos($array13,'"',$f+1);
	echo "<br> 13.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array13[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array14=$array14.$cout[$i];
	}
	$f=strpos($array14,'apps/');
	$l=strpos($array14,'"',$f+1);
	echo "<br> 14.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array14[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array15=$array15.$cout[$i];
	}
	$f=strpos($array15,'apps/');
	$l=strpos($array15,'"',$f+1);
	echo "<br> 15.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array15[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array16=$array16.$cout[$i];
	}
	$f=strpos($array16,'apps/');
	$l=strpos($array16,'"',$f+1);
	echo "<br> 16.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array16[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array17=$array17.$cout[$i];
	}
	$f=strpos($array17,'apps/');
	$l=strpos($array17,'"',$f+1);
	echo "<br> 17.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array17[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array18=$array18.$cout[$i];
	}
	$f=strpos($array18,'apps/');
	$l=strpos($array18,'"',$f+1);
	echo "<br> 18.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array18[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array19=$array19.$cout[$i];
	}
	$f=strpos($array19,'apps/');
	$l=strpos($array19,'"',$f+1);
	echo "<br> 19.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array19[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array20=$array20.$cout[$i];
	}
	$f=strpos($array20,'apps/');
	$l=strpos($array20,'"',$f+1);
	echo "<br> 20.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array20[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array21=$array21.$cout[$i];
	}
	$f=strpos($array21,'apps/');
	$l=strpos($array21,'"',$f+1);
	echo "<br> 21.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array21[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array22=$array22.$cout[$i];
	}
	$f=strpos($array22,'apps/');
	$l=strpos($array22,'"',$f+1);
	echo "<br> 22.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array22[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array23=$array23.$cout[$i];
	}
	$f=strpos($array23,'apps/');
	$l=strpos($array23,'"',$f+1);
	echo "<br> 23.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array23[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array24=$array24.$cout[$i];
	}
	$f=strpos($array24,'apps/');
	$l=strpos($array24,'"',$f+1);
	echo "<br> 24.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array24[$i]; }
	$url="http://developer.txtweb.com/user/apps/most-used?catlist=10&page=2";
	$cout=file_get_contents("$url");
	$first=strpos($cout,'<p class="app_kword">');
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array25=$array25.$cout[$i];
	}
	$f=strpos($array25,'apps/');
	$l=strpos($array25,'"',$f+1);
	echo "<br> 25.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array25[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array26=$array26.$cout[$i];
	}
	$f=strpos($array26,'apps/');
	$l=strpos($array26,'"',$f+1);
	echo "<br> 26.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array26[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array27=$array27.$cout[$i];
	}
	$f=strpos($array27,'apps/');
	$l=strpos($array27,'"',$f+1);
	echo "<br> 27.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array27[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array28=$array28.$cout[$i];
	}
	$f=strpos($array28,'apps/');
	$l=strpos($array28,'"',$f+1);
	echo "<br> 28.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array28[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array29=$array29.$cout[$i];
	}
	$f=strpos($array29,'apps/');
	$l=strpos($array29,'"',$f+1);
	echo "<br> 29.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array29[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array30=$array30.$cout[$i];
	}
	$f=strpos($array30,'apps/');
	$l=strpos($array30,'"',$f+1);
	echo "<br> 30.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array30[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array31=$array31.$cout[$i];
	}
	$f=strpos($array31,'apps/');
	$l=strpos($array31,'"',$f+1);
	echo "<br> 31.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array31[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array32=$array32.$cout[$i];
	}
	$f=strpos($array32,'apps/');
	$l=strpos($array32,'"',$f+1);
	echo "<br> 32.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array32[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array33=$array33.$cout[$i];
	}
	$f=strpos($array33,'apps/');
	$l=strpos($array33,'"',$f+1);
	echo "<br> 33.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array33[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array34=$array34.$cout[$i];
	}
	$f=strpos($array34,'apps/');
	$l=strpos($array34,'"',$f+1);
	echo "<br> 34.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array34[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array35=$array35.$cout[$i];
	}
	$f=strpos($array35,'apps/');
	$l=strpos($array35,'"',$f+1);
	echo "<br> 35.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array35[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array36=$array36.$cout[$i];
	}
	$f=strpos($array36,'apps/');
	$l=strpos($array36,'"',$f+1);
	echo "<br> 36.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array36[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array37=$array37.$cout[$i];
	}
	$f=strpos($array37,'apps/');
	$l=strpos($array37,'"',$f+1);
	echo "<br> 37.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array37[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array38=$array38.$cout[$i];
	}
	$f=strpos($array38,'apps/');
	$l=strpos($array38,'"',$f+1);
	echo "<br> 38.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array38[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array39=$array39.$cout[$i];
	}
	$f=strpos($array39,'apps/');
	$l=strpos($array39,'"',$f+1);
	echo "<br> 39.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array39[$i]; }
	$first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array40=$array40.$cout[$i];
	}
	$f=strpos($array40,'apps/');
	$l=strpos($array40,'"',$f+1);
	echo "<br> 40.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array40[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array41=$array41.$cout[$i];
	}
	$f=strpos($array41,'apps/');
	$l=strpos($array41,'"',$f+1);
	echo "<br> 41.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array41[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array42=$array42.$cout[$i];
	}
	$f=strpos($array42,'apps/');
	$l=strpos($array42,'"',$f+1);
	echo "<br> 42.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array42[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array43=$array43.$cout[$i];
	}
	$f=strpos($array43,'apps/');
	$l=strpos($array43,'"',$f+1);
	echo "<br> 43.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array43[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array44=$array44.$cout[$i];
	}
	$f=strpos($array44,'apps/');
	$l=strpos($array44,'"',$f+1);
	echo "<br> 44.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array44[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array45=$array45.$cout[$i];
	}
	$f=strpos($array45,'apps/');
	$l=strpos($array45,'"',$f+1);
	echo "<br> 45.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array45[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array46=$array46.$cout[$i];
	}
	$f=strpos($array46,'apps/');
	$l=strpos($array46,'"',$f+1);
	echo "<br> 46.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array46[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array47=$array47.$cout[$i];
	}
	$f=strpos($array47,'apps/');
	$l=strpos($array47,'"',$f+1);
	echo "<br> 47.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array47[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array48=$array48.$cout[$i];
	}
	$f=strpos($array48,'apps/');
	$l=strpos($array48,'"',$f+1);
	echo "<br> 48.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array48[$i]; }
        $url="http://developer.txtweb.com/user/apps/most-used?catlist=10&page=3";
	$cout=file_get_contents("$url");
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array49=$array49.$cout[$i];
	}
	$f=strpos($array49,'apps/');
	$l=strpos($array49,'"',$f+1);
	echo "<br> 49.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array49[$i]; }
        $first=strpos($cout,'<p class="app_kword">',$last);
	$last=strpos($cout,'</p>',$first+1);
	for($i=$first;$i<$last;$i++)
	{
	$array50=$array50.$cout[$i];
	}
	$f=strpos($array50,'apps/');
	$l=strpos($array50,'"',$f+1);
	echo "<br> 50.@";
	for($i=$f+5;$i<$l;$i++)
	 { echo $array50[$i]; }
	break;
}
}

?>
</body>
</html>
