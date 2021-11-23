<?php

$a=$_POST['t1'];
$month=$_POST['t2'];
$date=$_POST['t3'];
$longitude=$_POST['t4'];

$ujjain=75.7849;
$rahuvelocity=0.0529820856;

if ($a>4620) {
	# code...

	$b=$a-1;
 $c=$b-4620;
 $d=$c*12;
 $e=$month-1;
 $f=$d+$e;
 $g=$f*1593336;
 $h=$g/51840000;
 $i=(int)$h;
 $j=$f+$i;
 $k=$j*30;
 $l=$date-1;
 $m=$k+$l;
 $n=$m*25082580;
 $o=$n/1603000080;
 $p=(int)$o;
 $q=$m-$p; //found agarhana value

 
 //echo "$q";


 $t=$q*232226;
 $u=$t/1577917500;
 $v=(int)$u;
 $w=$u-$v;
 $x=$w*360;

 $deg=27.63333;
 

 if ($deg<$x ) {
	# code...
	$add=$deg+360;

	$final5=$add-$x;
 }
 else{

	$final5=$deg-$x;
 }

	
  	 $diff=$ujjain-$longitude;
  	 $diff1=-($diff); //sign changed for above 4620

  	 $angle=$rahuvelocity*$diff1;

  	 //deg findings for the above

  	 
  	 $angledeg=$angle/360;

  	 $finaldeg=$final5+$angledeg;

  	 //finding mins seconds

  	 $y=(int)$finaldeg;
     $z=$finaldeg-$y;
     $aa=$z*60;
     $bb=(int)$aa;
     $cc=$aa-$bb;
     $dd=$cc*60;
     $ee=(int)$dd;
     $ff=$dd-$ee;
     $gg=$ff*60;
     $jj=sprintf('%0.2f',$gg);


  	 if ($y>360) {
  	 	# code...
  	 	$finaldegval=$y-360;
  	 }
  	 else{
  	 	$finaldegval=$y;
  	 }

  	  echo "$finaldegval °  $bb' $ee'' $jj'''";

 
     
 }
 

 elseif ($a<0) {

	$b=-($a);
 $c=$b-1;
 $d=$c+4620;
 $e=$d*12;
 $f=12-$month;
 $g=$e+$f;
 $h=$g*1593336;
 $i=$h/51840000;
 $j=(int)$i;
 $k=$g+$j;
 $l=$k*30;
 $m=$date-1;
 $n=30-$m;
 $o=$l+$n;
 $p=$o*25082580;
 $q=$p/1603000080;
 $r=(int)$q;
 $s=$o-$r; //agarhana value

 
 $t=$s*232226;
 $u=$t/1577917500;
 $v=(int)$u;
 $w=$u-$v;
 $x=$w*360;
 

 $deg=27.63333;
 


 $final=$deg+$x;
 

  if ($final>360) {
	# code...

	$final5=$final-360;
 }
 else{

	$final5=$final;
 }
	

	 $diff=$ujjain-$longitude;
  	 
  	 //for rahu values same as it as for below 4620

     $angle=$rahuvelocity*$diff;

  	 //deg findings for the above

  	 
  	 $angledeg=$angle/360;

  	 $finaldeg=$final5+$angledeg;

  	 //finding mins seconds

  	 $y=(int)$finaldeg;
     $z=$finaldeg-$y;
     $aa=$z*60;
     $bb=(int)$aa;
     $cc=$aa-$bb;
     $dd=$cc*60;
     $ee=(int)$dd;
     $ff=$dd-$ee;
     $gg=$ff*60;
     $jj=sprintf('%0.2f',$gg);


  	 if ($y>360) {
  	 	# code...
  	 	$finaldegval=$y-360;
  	 }
  	 else{
  	 	$finaldegval=$y;
  	 }

  	  echo "$finaldegval °  $bb' $ee'' $jj'''";

 
  	
 }

 elseif ($a<=4620) {


	$b=4620-$a;
 $c=$b*12;
 $d=12-$month;
 $e=$c+$d;
 $f=$e * 1593336;
 $g=$f/51840000;
 $h=(int)$g;
 $i=$e+$h;
 $j=$i*30;
 $k=$date-1;
 $l=30-$k;
 $m=$j+$l;
 $n=$m*25082580;
 $o=$n/1603000080;
 $p=(int)$o;
 $q=$m-$p; //agarhana value

	

 $t=$q*232226;
 $u=$t/1577917500;
 $v=(int)$u;
 $w=$u-$v;
 $x=$w*360;

 $deg=27.63333;
 


 $final=$deg+$x;
 

  if ($final>360) {
	# code...

	$final5=$final-360;
 }
 else{

	$final5=$final;
 }
	

	 $diff=$ujjain-$longitude;
  	 
  	 //for rahu values same as it as for below 4620

     $angle=$rahuvelocity*$diff;

  	 //deg findings for the above

  	 
  	 $angledeg=$angle/360;

  	 $finaldeg=$final5+$angledeg;

  	 //finding mins seconds

  	 $y=(int)$finaldeg;
     $z=$finaldeg-$y;
     $aa=$z*60;
     $bb=(int)$aa;
     $cc=$aa-$bb;
     $dd=$cc*60;
     $ee=(int)$dd;
     $ff=$dd-$ee;
     $gg=$ff*60;
     $jj=sprintf('%0.2f',$gg);


  	 if ($y>360) {
  	 	# code...
  	 	$finaldegval=$y-360;
  	 }
  	 else{
  	 	$finaldegval=$y;
  	 }

  	  echo "$finaldegval °  $bb' $ee'' $jj'''";



 
 }


 


 

 
 else{
 	echo "INVALID NUMBER";
  }



?>