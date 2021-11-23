<?php

$a=$_POST['t1'];
$month=$_POST['t2'];
$date=$_POST['t3'];
$longitude=$_POST['t4'];

//for sun 
$ujjain=75.7849;
$sunmotion=0.9856028595;
$manda=79.0092727778;
$p0=13.6667;
$pe=14;

//for moon

$moonmotion=13.1763548855; //constant 4
$moonmanda=79.0092727778;

$moonp0=31.6667; //constant 8
$moonpe=32;

//for jupiter

$jupitermotion=0.0830963596; //constant 4
$jupitermanda=79.0092727778;

$jupiterp0=32; //constant 8
$jupiterpe=33;

$jupitersighrap0=72; //constant 9
$jupitersighrape=70;

//for saturn

$saturnmotion=0.0334393148; //constant 4
$saturnmanda=79.0092727778;

$saturnp0=48; //constant 8
$saturnpe=49;

$saturnsighrap0=40; //constant 9
$saturnsighrape=39; 

//for mars

$marsmotion=0.5240185751; //constant 4
$marsmanda=79.0092727778;

$marsp0=72; //constant 8
$marspe=75;

$marssighrap0=232; //constant 9
$marssighrape=235;

//for venus

$venusmotion=0.9856028595; //constant 4
$venusmanda=79.0092727778;

$venusp0=11; // constant 8
$venuspe=12;

$venussighrap0=260; //constant 9
$venussighrape=262;

//for mercury

$mercurymotion=0.9856028595; //constant 4
$mercurymanda=79.0092727778;

$mercuryp0=28; //constant 8
$mercurype=30;

$mercurysighrap0=132; //constant 9
$mercurysighrape=133;


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
 echo "<br/>";
      echo "<h2><font color=#fff>AGARHANA=$q</font></h2>";


 

 $t=$q*4320000;
 $u=$t/1577917500;
 $v=(int)$u;
 $w=$u-$v;
 $x=$w*360;

 $deg=349.683333;

 $y=$x+$deg;


 if ($y>360) {
      # code...
      $finaldegval=$y-360;
     }
     else{
      $finaldegval=$y;
     }
      
      
        $diff=$ujjain-$longitude;
    




     
      // same for above 4620

     $angle=$sunmotion*$diff;

     $angledeg=$angle/360;

     $finaldege=$finaldegval+$angledeg; //meansun value


      if ($finaldege>360) {
       # code...
      $finaldeg=$finaldege-360;
     }
     else{
      $finaldeg=$finaldege;
     }






     //manda calculation

     $a1=$a-1;
     $month1=$month-1;
     $date1=$date-1;
     $yearvalue=$a1-4620;
     $monthmul=$month1*30.478;
     $dateadd=$monthmul+$date1;
     $yearvaluefinal=$dateadd/365.256; 
     $totalyear=$yearvaluefinal+$yearvalue; //totalyear

     //manda uccha

     $mandauccha=$totalyear*360*387;
     $mandaucchafinal=$mandauccha/4320000000;
     //echo "$mandaucchafinal";


     //echo "$mandaucchafinal";

    
     
      $mandaucchavalue=79.0092727778+$mandaucchafinal;
     

     //manda kendra

     if ($mandaucchavalue<$finaldeg) {
      # code...

      $mandaucchavalue1=$mandaucchavalue+360;

      $mandakendra=$mandaucchavalue1-$finaldeg;
     }
     else{
      $mandakendra=$mandaucchavalue-$finaldeg;
     }

     $sine1=sin($mandakendra*3.14159265/180); //finding sin
     
   
     if ($sine1<0) {
      # code...
      $sine=-($sine1);
     }
     else{
      $sine=$sine1;
     }

     //pem formula

     $sub1=$pe-$p0;
     $sub2=$sub1*$sine;
     $pem=$pe-$sub2;
     //manda correction;

     $mandacorrection1=$pem*3438*$sine1;
     $mandacorrection=$mandacorrection1/360;
      $mandacorrectionmin=$mandacorrection/60;

     //true mean sun

     
      $sundeg=$finaldeg+$mandacorrectionmin;


     
     

     //bhujantara correction

     $bhu= $mandacorrectionmin*$sunmotion;
     $bhujantaracorrection=$bhu/360;
     //echo "$bhujantaracorrection";


     $truesun=$sundeg+$bhujantaracorrection;

     $yy=(int)$truesun; //deg

     
     $z=$truesun-$yy;
     $aa=$z*60;
     $bb=(int)$aa; //min
     $cc=$aa-$bb;
     $dd=$cc*60;
     $ee=(int)$dd; //sec
     $ff=$dd-$ee;
     $gg=$ff*60;
     $jj=sprintf('%0.2f',$gg); //third


     if ($yy>360) {
      # code...
      $finaldegvalue=$yy-360;
     }
     else{
      $finaldegvalue=$yy;
     }



      $op= "$finaldegvalue °  $bb' $ee'' $jj'''";

     echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF SUN IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$op."</font></p></h1>";
     

     //for moon after agarhana

     $moont=$q*57753336; //constant1
     $moonu=$moont/1577917500; //constant2
     $moonv=(int)$moonu;
     $moonw=$moonu-$moonv;
     $moonx=$moonw*360;



     $moondeg=349.1; // constant3

     $moony=$moonx+$moondeg;

     if ($moony>360) {
      # code...
      $moonfinaldegval=$moony-360;
     }
     else{
      $moonfinaldegval=$moony;
     }

    
      
     
        $moondiff=$ujjain-$longitude;





     
      // same for above 4620

     $moonangle=$moonmotion*$moondiff;

     $moonangledeg=$moonangle/360;

     $moonfinaldege=$moonfinaldegval+$moonangledeg; //meansun value

     if ($moonfinaldege>360) {
       # code...
      $moonfinaldeg=$moonfinaldege-360;
     }
     else{
      $moonfinaldeg=$moonfinaldege;
     }



     //manda calculation

     $moona1=$a-1;
     $moonmonth1=$month-1;
     $moondate1=$date-1;
     $moonyearvalue=$moona1-4620;
     $moonmonthmul=$moonmonth1*30.478;
     $moondateadd=$moonmonthmul+$moondate1;
     $moonyearvaluefinal=$moondateadd/365.256; 
     $moontotalyear=$moonyearvaluefinal+$moonyearvalue; //totalyear

     //manda uccha

     $moonmandauccha1=$moontotalyear*488211; //constant 6
     $moonmandaucchafinal=$moonmandauccha1/4320000; //constant 7

     //ommiting 
     $moonommit=(int)$moonmandaucchafinal;
     $moonmandauccha=$moonmandaucchafinal-$moonommit;
     $moonmandaucchafinalval=$moonmandauccha*360;
    

    // $moonmandaucchavalue=491.235-$moonmandaucchafinalval; //constant 5

     
    
      $moonmandaucchavalue=131.235+$moonmandaucchafinalval;
      


     //manda kendra

     if ($moonmandaucchavalue<$moonfinaldeg) {
      # code...

      $moonmandaucchavalue1=$moonmandaucchavalue+360;

      $moonmandakendra=$moonmandaucchavalue1-$moonfinaldeg;
     }
     else{
      $moonmandakendra=$moonmandaucchavalue-$moonfinaldeg;
     }

     $moonsine1=sin($moonmandakendra*3.14159265/180); //finding sin
     
   
     if ($moonsine1<0) {
      # code...
      $moonsine=-($moonsine1);
     }
     else{
      $moonsine=$moonsine1;
     }

     //pem formula

     $moonsub1=$moonpe-$moonp0;
     $moonsub2=$moonsub1*$moonsine;
     $moonpem=$moonpe-$moonsub2;

     //manda correction;

     $moonmandacorrection1=$moonpem*3438*$moonsine1;
     $moonmandacorrection=$moonmandacorrection1/360;
      $moonmandacorrectionmin=$moonmandacorrection/60;

     //true mean moon depends on sine 

    
      $moonsundeg=$moonfinaldeg+$moonmandacorrectionmin;

    

     //bhujantara correction

     $moonbhu= $mandacorrectionmin*$moonmotion;
     $moonbhujantaracorrection=$moonbhu/360;


     $moontruesun=$moonsundeg+$moonbhujantaracorrection;


     $moonyy=(int)$moontruesun; //deg

     
     $moonz=$moontruesun-$moonyy;
     $moonaa=$moonz*60;
     $moonbb=(int)$moonaa; //min
     $mooncc=$moonaa-$moonbb;
     $moondd=$mooncc*60;
     $moonee=(int)$moondd; //sec
     $moonff=$moondd-$moonee;
     $moongg=$moonff*60;
     $moonjj=sprintf('%0.2f',$moongg); //third


     if ($moonyy>360) {
      # code...
      $moonfinaldegval=$moonyy-360;
     }
     else{
      $moonfinaldegval=$moonyy;
     }



      $moonop= "$moonfinaldegval °  $moonbb' $moonee'' $moonjj'''";

     echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF MOON IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$moonop."</font></p></h1>";

    
      //for jupiter


      $jupitert=$q*364220; //constant1
     $jupiteru=$jupitert/1577917500; //constant2
     $jupiterv=(int)$jupiteru;
     $jupiterw=$jupiteru-$jupiterv;
     $jupiterx=$jupiterw*360;

     $jupiterdeg=212.26667; // constant3

     $jupitery=$jupiterx+$jupiterdeg;

     if ($jupitery>360) {
      # code...
      $jupiterfinaldegval=$jupitery-360;
     }
     else{
      $jupiterfinaldegval=$jupitery;
     }

     
      

      
        $jupiterdiff=$ujjain-$longitude;
      

  

     
      // same for above 4620

     $jupiterangle=$jupitermotion*$jupiterdiff;

     $jupiterangledeg=$jupiterangle/360;

     $jupiterfinaldege=$jupiterfinaldegval+$jupiterangledeg; //meanjupiter value

     if ($jupiterfinaldege>360) {
       # code...
      $jupiterfinaldeg=$jupiterfinaldege-360;
     }
     else{
      $jupiterfinaldeg=$jupiterfinaldege;
     }



     //manda calculation

     $jupitera1=$a-1;
     $jupitermonth1=$month-1;
     $jupiterdate1=$date-1;
     $jupiteryearvalue=$jupitera1-4620;
     $jupitermonthmul=$jupitermonth1*30.478;
     $jupiterdateadd=$jupitermonthmul+$jupiterdate1;
     $jupiteryearvaluefinal=$jupiterdateadd/365.256; 
     $jupitertotalyear=$jupiteryearvaluefinal+$jupiteryearvalue; //totalyear

     //manda uccha

     $jupitermandauccha=$jupitertotalyear*360*900; //constant 6
     $jupitermandaucchafinal=$jupitermandauccha/4320000000; //constant 7


    
      $jupitermandaucchavalue1=173.1551+$jupitermandaucchafinal; //manda uccha value

      if ($jupitermandaucchavalue1>360) {
        # code...
        $jupitermandaucchavalue=$jupitermandaucchavalue1-360;
      }
      else{
        $jupitermandaucchavalue=$jupitermandaucchavalue1;
      }


     //manda kendra

     if ($jupitermandaucchavalue<$jupiterfinaldeg) {
      # code...

      $jupitermandaucchavalue1=$jupitermandaucchavalue+360;

      $jupitermandakendra=$jupitermandaucchavalue1-$jupiterfinaldeg;
     }
     else{
      $jupitermandakendra=$jupitermandaucchavalue-$jupiterfinaldeg;
     }

     $jupitersine1=sin($jupitermandakendra*3.14159265/180); //finding sin

     if ($jupitersine1<0) {
      # code...
      $jupitersine=-($jupitersine1);
     }
     else{

       $jupitersine=$jupitersine1;
     }
     
   
     //echo "$sine";

     //pem formula

     $jupitersub1=$jupiterpe-$jupiterp0;
     $jupitersub2=$jupitersub1*$jupitersine;
     $jupiterpem=$jupiterpe-$jupitersub2;

     //sighra correction and sighrakendra

     //meansun-meanjupiter add 360 step

     if ($finaldeg<$jupiterfinaldeg) {
       # code...
      $jupi=$finaldeg+360;
       $jupitersighrakendra=$jupi-$jupiterfinaldeg;

     }
     else{
       $jupitersighrakendra=$finaldeg-$jupiterfinaldeg;
     }

     

     $jupitersine1sighra=sin($jupitersighrakendra*3.14159265/180); //sine 

     $jupitercos1sighra=cos($jupitersighrakendra*3.14159265/180); //cos

     if ($jupitersine1sighra<0) {
      # code...
      $jupitersinesighra=-($jupitersine1sighra);
     }
     else{

       $jupitersinesighra=$jupitersine1sighra;
     }
     if ($jupitercos1sighra<0) {
      # code...
      $jupitercossighra=-($jupitercos1sighra);
     }
     else{

       $jupitercossighra=$jupitercos1sighra;
     }



     //manda correction;

     $jupitermandacorrection1=$jupiterpem*3438*$jupitersine;
     $jupitermandacorrection=$jupitermandacorrection1/360;
     $jupitermandacorrectionmin=$jupitermandacorrection/60;

     $jupiterhalfmandacorrection=$jupitermandacorrectionmin/2;

     //pes formula

     $jupitersub11=$jupitersighrape-$jupitersighrap0;
     $jupitersub22=$jupitersub11*$jupitersinesighra;
     $jupiterpes=$jupitersighrape-$jupitersub22;

     //doh phala

     $jupiterdohphala1=$jupiterpes*3438*$jupitersinesighra;
     $jupiterdohphala=$jupiterdohphala1/360;

     //koti phala

     $jupiterkotiphala1=$jupiterpes*3438*$jupitercossighra;
     $jupiterkotiphala=$jupiterkotiphala1/360;

     //sphuta koti

     if ($jupitersighrakendra>=90 && $jupitersighrakendra<=270) {
       # code...
      $jupitersphutakoti=3438-$jupiterkotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($jupitersighrakendra>=0 && $jupitersighrakendra<=90) {
       # code...
      $jupitersphutakoti=3438+$jupiterkotiphala;
      //echo "quadrant1";


     }
     elseif ($jupitersighrakendra>=270 && $jupitersighrakendra<=360) {
       # code...

      $jupitersphutakoti=3438+$jupiterkotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $jupiterhyp1=$jupiterdohphala*$jupiterdohphala;
     $jupiterhyp2=$jupitersphutakoti*$jupitersphutakoti;
     $jupiterhyp3=$jupiterhyp1+$jupiterhyp2;
     $jupiterkarna=sqrt($jupiterhyp3);

     //sighra correction

     $jupitersighracorr=$jupiterdohphala/$jupiterkarna;
     $jupitersighracorr1=asin($jupitersighracorr);
     $jupitersighracorrection=$jupitersighracorr1*180/3.14159265;

     $jupiterhalfsighracorrection=$jupitersighracorrection/2;

     //procedure 1

     if ($jupitersighrakendra<180) {
       # code...
         $jupiterp11=$jupiterfinaldeg+$jupiterhalfsighracorrection; //meanjupiter+halfsc

         if ($jupiterp11>360) {
           # code...
          $jupiterp1=$jupiterp11-360;
         }
         else{
          $jupiterp1=$jupiterp11;
         }
     }
     else{

      if ($jupiterfinaldeg<$jupiterhalfsighracorrection) {
        # code...
        $jupiadd=$jupiterfinaldeg+360;
        $jupiterp1=$jupiterfinaldeg-$jupiterhalfsighracorrection;

      }
      else{
        $jupiterp1=$jupiterfinaldeg-$jupiterhalfsighracorrection;
      }

       //more than 180

     }

     //procedure 2

     if ($jupitermandakendra<180) {
       # code...
       $jupiterp22=$jupiterp1+$jupiterhalfmandacorrection;

      if ($jupiterp22>360) {
           # code...
          $jupiterp2=$jupiterp22-360;
         }
         else{
          $jupiterp2=$jupiterp22;
         }

      
      // echo "p1";

     }
     else {
       # code... 
      if ($jupiterp1<$jupiterhalfmandacorrection) {
        # code...
        $jupiaddd=$jupiterp1+360;
        $jupiterp2=$jupiaddd-$jupiterhalfmandacorrection;

      }
      else{
        $jupiterp2=$jupiterp1-$jupiterhalfmandacorrection;
      }
      
      //echo "p2";

     }
     


     //procedure 3 -  new manda kendra

     
     if ($jupitermandaucchavalue<$jupiterp2) {
       # code...
      $newadd=$jupitermandaucchavalue+360;
      $jupiternewmandakendra=$newadd-$jupiterp2;

     }
     else{

      $jupiternewmandakendra=$jupitermandaucchavalue-$jupiterp2;

     }


     $jupitersine1new=sin($jupiternewmandakendra*3.14159265/180); //finding sin

     if ($jupitersine1new<0) {
      # code...
      $jupitersinenew=-($jupitersine1new);
     }
     else{

       $jupitersinenew=$jupitersine1new;
     }

     //new pem

     $jupitersub1new=$jupiterpe-$jupiterp0;
     $jupitersub2new=$jupitersub1new*$jupitersinenew;
     $jupiterpemnew=$jupiterpe-$jupitersub2new;

     // new manda correction;

     $jupitermandacorrection1new=$jupiterpemnew*3438*$jupitersine1new;
     $jupitermandacorrectionnew=$jupitermandacorrection1new/360;
     $jupitermandacorrectionminnew=$jupitermandacorrectionnew/60;

     
      $jupiterp33=$jupiterfinaldeg+$jupitermandacorrectionminnew;

      if ($jupiterp33>360) {
        # code...
        $jupiterp3=$jupiterp33-360;
      }
      else{
        $jupiterp3=$jupiterp33;
      }
     

     //procedure 4 (new sighra kendra)

     if ($finaldeg<$jupiterp3) {
       # code...
      $jfinaldeg=$finaldeg+360;

      $jupiternewsighrakendra=$jfinaldeg-$jupiterp3;

     }
     else{
       $jupiternewsighrakendra=$finaldeg-$jupiterp3;
     }

     //new sine and cos

     $jupitersine1sighranew=sin($jupiternewsighrakendra*3.14159265/180); //sine 

     $jupitercos1sighranew=cos($jupiternewsighrakendra*3.14159265/180); //cos

     if ($jupitersine1sighranew<0) {
      # code...
      $jupitersinesighranew=-($jupitersine1sighranew);
     }
     else{

       $jupitersinesighranew=$jupitersine1sighranew;
     }
     if ($jupitercos1sighranew<0) {
      # code...
      $jupitercossighranew=-($jupitercos1sighranew);
     }
     else{

       $jupitercossighranew=$jupitercos1sighranew;
     }




     // new pes formula

     $jupitersub11new=$jupitersighrape-$jupitersighrap0;
     $jupitersub22new=$jupitersub11new*$jupitersinesighranew; //no minus sign
     $jupiterpesnew=$jupitersighrape-$jupitersub22new;

     // new doh phala

     $jupiterdohphala1new=$jupiterpesnew*3438*$jupitersinesighranew;
     $jupiterdohphalanew=$jupiterdohphala1new/360;

     //new koti phala

     $jupiterkotiphala1new=$jupiterpesnew*3438*$jupitercossighranew;
     $jupiterkotiphalanew=$jupiterkotiphala1new/360;

     //new sphuta koti

     if ($jupiternewsighrakendra>=90 && $jupiternewsighrakendra<=270) {
       # code...
      $jupitersphutakotinew=3438-$jupiterkotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($jupiternewsighrakendra>=0 && $jupiternewsighrakendra<=90) {
       # code...
      $jupitersphutakotinew=3438+$jupiterkotiphalanew;
      //echo "quadrant1";


     }
     elseif ($jupiternewsighrakendra>=270 && $jupiternewsighrakendra<=360) {
       # code...

      $jupitersphutakotinew=3438+$jupiterkotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $jupiterhyp1new=$jupiterdohphalanew*$jupiterdohphalanew;
     $jupiterhyp2new=$jupitersphutakotinew*$jupitersphutakotinew;
     $jupiterhyp3new=$jupiterhyp1new+$jupiterhyp2new;
     $jupiterkarnanew=sqrt($jupiterhyp3new);

     //new sighra correction

     $jupitersighracorrnew=$jupiterdohphalanew/$jupiterkarnanew;
     $jupitersighracorr1new=asin($jupitersighracorrnew);
     $jupitersighracorrectionnew=$jupitersighracorr1new*180/3.14159265;

     //p4

     if ($jupiternewsighrakendra>180) {
       # code...
      if ($jupiterp3<$jupitersighracorrectionnew) {
        # code...
        $jupiadding=$jupiterp3+360;
        $jupiterp4=$jupiadding-$jupitersighracorrectionnew;
       // echo "op1";
      }
      else{
        $jupiterp4=$jupiterp3-$jupitersighracorrectionnew;
        //echo "op2";
      }

        //more than 180
     }
     else{

      $jupiterp44=$jupiterp3+$jupitersighracorrectionnew;
      
      if ($jupiter44>360) {
        # code...
        $jupiterp4=$jupiter44-360;
       // echo "op3";

      }
      else{
        $jupiterp4=$jupiterp44;
       // echo "op4";

      }

     }

     
     //bhujantara correction

     $jupiterbhu= $mandacorrectionmin*$jupitermotion;
     $jupiterbhujantaracorrection=$jupiterbhu/360;


     $jupitertruesun=$jupiterp4+$jupiterbhujantaracorrection;

    

     $jupiteryy=(int)$jupitertruesun; //deg

     
     $jupiterz=$jupitertruesun-$jupiteryy;
     $jupiteraa=$jupiterz*60;
     $jupiterbb=(int)$jupiteraa; //min
     $jupitercc=$jupiteraa-$jupiterbb;
     $jupiterdd=$jupitercc*60;
     $jupiteree=(int)$jupiterdd; //sec
     $jupiterff=$jupiterdd-$jupiteree;
     $jupitergg=$jupiterff*60;
     $jupiterjj=sprintf('%0.2f',$jupitergg); //third


     if ($jupiteryy>360) {
      # code...
      $jupiterfinaldegval=$jupiteryy-360;
     }
     else{
      $jupiterfinaldegval=$jupiteryy;
     }



      $jupiterop= "$jupiterfinaldegval °  $jupiterbb' $jupiteree'' $jupiterjj'''";

     echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF JUPITER IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$jupiterop."</font></p></h1>";

      
   //for saturn


     $saturnt=$q*146568; //constant1
     $saturnu=$saturnt/1577917500; //constant2
     $saturnv=(int)$saturnu;
     $saturnw=$saturnu-$saturnv;
     $saturnx=$saturnw*360;

     $saturndeg=285.35; // constant3

     $saturny=$saturnx+$saturndeg;

     if ($saturny>360) {
      # code...
      $saturnfinaldegval=$saturny-360;
     }
     else{
      $saturnfinaldegval=$saturny;
     }

    
      
     
        $saturndiff=$ujjain-$longitude;



    
      // same for above 4620

     $saturnangle=$saturnmotion*$saturndiff;

     $saturnangledeg=$saturnangle/360;

     $saturnfinaldege=$saturnfinaldegval+$saturnangledeg; //meanjupiter value

     if ($saturnfinaldege>360) {
       # code...
      $saturnfinaldeg=$saturnfinaldege-360;
     }
     else{
      $saturnfinaldeg=$saturnfinaldege;
     }



     //manda calculation

     $saturna1=$a-1;
     $saturnmonth1=$month-1;
     $saturndate1=$date-1;
     $saturnyearvalue=$saturna1-4620;
     $saturnmonthmul=$saturnmonth1*30.478;
     $saturndateadd=$saturnmonthmul+$saturndate1;
     $saturnyearvaluefinal=$saturndateadd/365.256; 
     $saturntotalyear=$saturnyearvaluefinal+$saturnyearvalue; //totalyear

     //manda uccha

     $saturnmandauccha=$saturntotalyear*360*39; //constant 6
     $saturnmandaucchafinal=$saturnmandauccha/4320000000; //constant 7


    
      $saturnmandaucchavalue=235.963071+$saturnmandaucchafinal; //manda uccha value

      //echo "========$saturnmandaucchavalue";
     


     //manda kendra

     if ($saturnmandaucchavalue<$saturnfinaldeg) {
      # code...

      $saturnmandaucchavalue1=$saturnmandaucchavalue+360;

      $saturnmandakendra=$saturnmandaucchavalue1-$saturnfinaldeg;
     }
     else{
      $saturnmandakendra=$saturnmandaucchavalue-$saturnfinaldeg;
     }

     $saturnsine1=sin($saturnmandakendra*3.14159265/180); //finding sin

     if ($saturnsine1<0) {
      # code...
      $saturnsine=-($saturnsine1);
     }
     else{

       $saturnsine=$saturnsine1;
     }
     
   
     //echo "$sine";

     //pem formula

     $saturnsub1=$saturnpe-$saturnp0;
     $saturnsub2=$saturnsub1*$saturnsine;
     $saturnpem=$saturnpe-$saturnsub2;

     //sighra correction and sighrakendra

     //meansun-meanjupiter add 360 step

     if ($finaldeg<$saturnfinaldeg) {
       # code...
      $satu=$finaldeg+360;
       $saturnsighrakendra=$satu-$saturnfinaldeg;

     }
     else{
       $saturnsighrakendra=$finaldeg-$saturnfinaldeg;
     }

     $saturnsine1sighra=sin($saturnsighrakendra*3.14159265/180); //sine 

     $saturncos1sighra=cos($saturnsighrakendra*3.14159265/180); //cos

     if ($saturnsine1sighra<0) {
      # code...
      $saturnsinesighra=-($saturnsine1sighra);
     }
     else{

       $saturnsinesighra=$saturnsine1sighra;
     }
     if ($saturncos1sighra<0) {
      # code...
      $saturncossighra=-($saturncos1sighra);
     }
     else{

       $saturncossighra=$saturncos1sighra;
     }



     //manda correction;

     $saturnmandacorrection1=$saturnpem*3438*$saturnsine;
     $saturnmandacorrection=$saturnmandacorrection1/360;
     $saturnmandacorrectionmin=$saturnmandacorrection/60;

     $saturnhalfmandacorrection=$saturnmandacorrectionmin/2;

     //pes formula

     $saturnsub11=$saturnsighrape-$saturnsighrap0;
     $saturnsub22=$saturnsub11*$saturnsinesighra;
     $saturnpes=$saturnsighrape-$saturnsub22;

     //doh phala

     $saturndohphala1=$saturnpes*3438*$saturnsinesighra;
     $saturndohphala=$saturndohphala1/360;

     //koti phala

     $saturnkotiphala1=$saturnpes*3438*$saturncossighra;
     $saturnkotiphala=$saturnkotiphala1/360;

     //sphuta koti

     if ($saturnsighrakendra>=90 && $saturnsighrakendra<=270) {
       # code...
      $saturnsphutakoti=3438-$saturnkotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($saturnsighrakendra>=0 && $saturnsighrakendra<=90) {
       # code...
      $saturnsphutakoti=3438+$saturnkotiphala;
      //echo "quadrant1";


     }
     elseif ($saturnsighrakendra>=270 && $saturnsighrakendra<=360) {
       # code...

      $saturnsphutakoti=3438+$saturnkotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $saturnhyp1=$saturndohphala*$saturndohphala;
     $saturnhyp2=$saturnsphutakoti*$saturnsphutakoti;
     $saturnhyp3=$saturnhyp1+$saturnhyp2;
     $saturnkarna=sqrt($saturnhyp3);

     //sighra correction

     $saturnsighracorr=$saturndohphala/$saturnkarna;
     $saturnsighracorr1=asin($saturnsighracorr);
     $saturnsighracorrection=$saturnsighracorr1*180/3.14159265;

     $saturnhalfsighracorrection=$saturnsighracorrection/2;

     //procedure 1

     if ($saturnsighrakendra<180) {
       # code...
         $saturnp11=$saturnfinaldeg+$saturnhalfsighracorrection; //meanjupiter+halfsc

         if ($saturnp11>360) {
           # code...
          $saturnp1=$saturnp11-360;
         }
         else{
          $saturnp1=$saturnp11;
         }
     }
     else{

      if ($saturnfinaldeg<$saturnhalfsighracorrection) {
        # code...
        $satadd=$saturnfinaldeg+360;
        $saturnp1=$satadd-$saturnhalfsighracorrection;

      }
      else{
        $saturnp1=$saturnfinaldeg-$saturnhalfsighracorrection;
      }

       //more than 180

     }

    

     
       //procedure 2

     if ($saturnmandakendra<180) {
       # code...
       $saturnp22=$saturnp1+$saturnhalfmandacorrection;

       if ($saturnp22>360) {
         # code..
        $saturnp2=$saturnp22-360;
       }
       else{
        $saturnp2=$saturnp22;
       }

     }
     else {
       # code... 
      if ($saturnp1<$saturnhalfmandacorrection) {
        # code...
        $satt=$saturnp1+360;
         $saturnp2=$saturnp1-$saturnhalfmandacorrection;

      }
      else{
         $saturnp2=$saturnp1-$saturnhalfmandacorrection;
      }
     

     }

     
     //procedure 3 -  new manda kendra

     
     if ($saturnmandaucchavalue<$saturnp2) {
       # code...
      $saturnnewadd=$saturnmandaucchavalue+360;
      $saturnnewmandakendra=$saturnnewadd-$saturnp2;

     }
     else{

      $saturnnewmandakendra=$saturnmandaucchavalue-$saturnp2;

     }


     $saturnsine1new=sin($saturnnewmandakendra*3.14159265/180); //finding sin

     if ($saturnsine1new<0) {
      # code...
      $saturnsinenew=-($saturnsine1new);
     }
     else{

       $saturnsinenew=$saturnsine1new;
     }

     //new pem

     $saturnsub1new=$saturnpe-$saturnp0;
     $saturnsub2new=$saturnsub1new*$saturnsinenew;
     $saturnpemnew=$saturnpe-$saturnsub2new;

     // new manda correction;

     $saturnmandacorrection1new=$saturnpemnew*3438*$saturnsine1new;
     $saturnmandacorrectionnew=$saturnmandacorrection1new/360;
     $saturnmandacorrectionminnew=$saturnmandacorrectionnew/60;

     
     
      $saturnp33=$saturnfinaldeg+$saturnmandacorrectionminnew;
     
     if ( $saturnp33>360) {
       # code...
       $saturnp3= $saturnp33-360;
     }
     else{
       $saturnp3= $saturnp33;
     }

     //procedure 4 (new sighra kendra)

     if ($finaldeg<$saturnp3) {
       # code...
      $sfinaldeg=$finaldeg+360;

      $saturnnewsighrakendra=$sfinaldeg-$saturnp3;

     }
     else{
       $saturnnewsighrakendra=$finaldeg-$saturnp3;
     }

     //new sine and cos

     $saturnsine1sighranew=sin($saturnnewsighrakendra*3.14159265/180); //sine 

     $saturncos1sighranew=cos($saturnnewsighrakendra*3.14159265/180); //cos

     if ($saturnsine1sighranew<0) {
      # code...
      $saturnsinesighranew=-($saturnsine1sighranew);
     }
     else{

       $saturnsinesighranew=$saturnsine1sighranew;
     }
     if ($saturncos1sighranew<0) {
      # code...
      $saturncossighranew=-($saturncos1sighranew);
     }
     else{

       $saturncossighranew=$saturncos1sighranew;
     }




     // new pes formula

     $saturnsub11new=$saturnsighrape-$saturnsighrap0;
     $saturnsub22new=$saturnsub11new*$saturnsinesighranew; //no minus sign
     $saturnpesnew=$saturnsighrape-$saturnsub22new;

     // new doh phala

     $saturndohphala1new=$saturnpesnew*3438*$saturnsinesighranew;
     $saturndohphalanew=$saturndohphala1new/360;

     //new koti phala

     $saturnkotiphala1new=$saturnpesnew*3438*$saturncossighranew;
     $saturnkotiphalanew=$saturnkotiphala1new/360;

     //new sphuta koti

     if ($saturnnewsighrakendra>=90 && $saturnnewsighrakendra<=270) {
       # code...
      $saturnsphutakotinew=3438-$saturnkotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($saturnnewsighrakendra>=0 && $saturnnewsighrakendra<=90) {
       # code...
      $saturnsphutakotinew=3438+$saturnkotiphalanew;
      //echo "quadrant1";


     }
     elseif ($saturnnewsighrakendra>=270 && $saturnnewsighrakendra<=360) {
       # code...

      $saturnsphutakotinew=3438+$saturnkotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $saturnhyp1new=$saturndohphalanew*$saturndohphalanew;
     $saturnhyp2new=$saturnsphutakotinew*$saturnsphutakotinew;
     $saturnhyp3new=$saturnhyp1new+$saturnhyp2new;
     $saturnkarnanew=sqrt($saturnhyp3new);

     //new sighra correction

     $saturnsighracorrnew=$saturndohphalanew/$saturnkarnanew;
     $saturnsighracorr1new=asin($saturnsighracorrnew);
     $saturnsighracorrectionnew=$saturnsighracorr1new*180/3.14159265;

     //p4

     if ($saturnnewsighrakendra>180) {
       # code...
      if ($saturnp3<$saturnsighracorrectionnew) {
        # code...
        $sss=$saturnp3+360;
        $saturnp4=$sss-$saturnsighracorrectionnew;

      }
      else{
        $saturnp4=$saturnp3-$saturnsighracorrectionnew;
      }

        //more than 180
     }
     else{

      $saturnp44=$saturnp3+$saturnsighracorrectionnew;
      if ($saturnp44>360) {
        # code...
        $saturnp4=$saturnp44-360;
      }
      else{
        $saturnp4=$saturnp44;
      }

     }

     

     //bhujantara correction

     $saturnbhu= $mandacorrectionmin*$saturnmotion;
     $saturnbhujantaracorrection=$saturnbhu/360;


     $saturntruesun=$saturnp4+$saturnbhujantaracorrection;

     $saturnyy=(int)$saturntruesun; //deg

     
     $saturnz=$saturntruesun-$saturnyy;
     $saturnaa=$saturnz*60;
     $saturnbb=(int)$saturnaa; //min
     $saturncc=$saturnaa-$saturnbb;
     $saturndd=$saturncc*60;
     $saturnee=(int)$saturndd; //sec
     $saturnff=$saturndd-$saturnee;
     $saturngg=$saturnff*60;
     $saturnjj=sprintf('%0.2f',$saturngg); //third


     if ($saturnyy>360) {
      # code...
      $saturnfinaldegval=$saturnyy-360;
     }
     else{
      $saturnfinaldegval=$saturnyy;
     }



      $saturnop= "$saturnfinaldegval °  $saturnbb' $saturnee'' $saturnjj'''";

     echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF SATURN IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$saturnop."</font></p></h1>";

     

      //for mars


     $marst=$q*2296828; //constant1
     $marsu=$marst/1577917500; //constant2
     $marsv=(int)$marsu;
     $marsw=$marsu-$marsv;
     $marsx=$marsw*360;

     //echo "note=$marsu";

     $marsdeg=307.13333; // constant3

     $marsy=$marsx+$marsdeg;

     if ($marsy>360) {
      # code...
      $marsfinaldegval=$marsy-360;
     }
     else{
      $marsfinaldegval=$marsy;
     }

     
      
    
        $marsdiff=$ujjain-$longitude;
     
   
      // same for above 4620

     $marsangle=$marsmotion*$marsdiff;

     $marsangledeg=$marsangle/360;

     $marsfinaldege=$marsfinaldegval+$marsangledeg; //meanjupiter value

     if ($marsfinaldege>360) {
       # code...
      $marsfinaldeg=$marsfinaldege-360;
     }
     else{
      $marsfinaldeg=$marsfinaldege;
     }



     //manda calculation

     $marsa1=$a-1;
     $marsmonth1=$month-1;
     $marsdate1=$date-1;
     $marsyearvalue=$marsa1-4620;
     $marsmonthmul=$marsmonth1*30.478;
     $marsdateadd=$marsmonthmul+$marsdate1;
     $marsyearvaluefinal=$marsdateadd/365.256; 
     $marstotalyear=$marsyearvaluefinal+$marsyearvalue; //totalyear

     //manda uccha

     $marsmandauccha=$marstotalyear*360*204; //constant 6
     $marsmandaucchafinal=$marsmandauccha/4320000000; //constant 7


     
      $marsmandaucchavalue=128.92576+$marsmandaucchafinal;
     


     //manda kendra

     if ($marsmandaucchavalue<$marsfinaldeg) {
      # code...

      $marsmandaucchavalue1=$marsmandaucchavalue+360;

      $marsmandakendra=$marsmandaucchavalue1-$marsfinaldeg;
     }
     else{
      $marsmandakendra=$marsmandaucchavalue-$marsfinaldeg;
     }
//echo "vvv===$marsfinaldeg";
     $marssine1=sin($marsmandakendra*3.14159265/180); //finding sin

     if ($marssine1<0) {
      # code...
      $marssine=-($marssine1);
     }
     else{

       $marssine=$marssine1;
     }
     
   
     //echo "$sine";

     //pem formula

     $marssub1=$marspe-$marsp0;
     $marssub2=$marssub1*$marssine;
     $marspem=$marspe-$marssub2;

     //sighra correction and sighrakendra

     //meansun-meanjupiter add 360 step

     if ($finaldeg<$marsfinaldeg) {
       # code...
      $mar=$finaldeg+360;
       $marssighrakendra=$mar-$marsfinaldeg;

     }
     else{
       $marssighrakendra=$finaldeg-$marsfinaldeg;
     }


     $marssine1sighra=sin($marssighrakendra*3.14159265/180); //sine 

     $marscos1sighra=cos($marssighrakendra*3.14159265/180); //cos

     if ($marssine1sighra<0) {
      # code...
      $marssinesighra=-($marssine1sighra);
     }
     else{

       $marssinesighra=$marssine1sighra;
     }
     if ($marscos1sighra<0) {
      # code...
      $marscossighra=-($marscos1sighra);
     }
     else{

       $marscossighra=$marscos1sighra;
     }



     //manda correction;

     $marsmandacorrection1=$marspem*3438*$marssine;
     $marsmandacorrection=$marsmandacorrection1/360;
     $marsmandacorrectionmin=$marsmandacorrection/60;

     $marshalfmandacorrection=$marsmandacorrectionmin/2;

     //pes formula

     $marssub11=$marssighrape-$marssighrap0;


     $marssub22=$marssub11*$marssinesighra;
     $marspes=$marssighrape-$marssub22;
    

     //doh phala

     $marsdohphala1=$marspes*3438*$marssinesighra;
     $marsdohphala=$marsdohphala1/360;

     //koti phala

     $marskotiphala1=$marspes*3438*$marscossighra;
     $marskotiphala=$marskotiphala1/360;

     //sphuta koti

     if ($marssighrakendra>=90 && $marssighrakendra<=270) {
       # code...
      $marssphutakoti=3438-$marskotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($marssighrakendra>=0 && $marssighrakendra<=90) {
       # code...
      $marssphutakoti=3438+$marskotiphala;
      //echo "quadrant1";


     }
     elseif ($marssighrakendra>=270 && $marssighrakendra<=360) {
       # code...

      $marssphutakoti=3438+$marskotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $marshyp1=$marsdohphala*$marsdohphala;
     $marshyp2=$marssphutakoti*$marssphutakoti;
     $marshyp3=$marshyp1+$marshyp2;
     $marskarna=sqrt($marshyp3);

     //sighra correction

     $marssighracorr=$marsdohphala/$marskarna;
     $marssighracorr1=asin($marssighracorr);
     $marssighracorrection=$marssighracorr1*180/3.14159265;

     $marshalfsighracorrection=$marssighracorrection/2;

     //procedure 1

     if ($marssighrakendra<180) {
       # code...
         $marsp11=$marsfinaldeg+$marshalfsighracorrection; //meanjupiter+halfsc
         if ($marsp11>360) {
           # code...
          $marsp1=$marsp11-360;
         }
         else{
          $marsp1=$marsp11;
         }
     }
     else{
      if ($marsfinaldeg<$marshalfsighracorrection) {
        # code...
        $mmm=$marsfinaldeg+360;
         $marsp1=$mmm-$marshalfsighracorrection;

      }
      else{
         $marsp1=$marsfinaldeg-$marshalfsighracorrection; //more than 180
      }

     

     }

    

      //procedure 2

     if ($marsmandakendra<180) {
       # code...
       $marsp22=$marsp1+$marshalfmandacorrection;
       if ($marsp22>360) {
         # code...
        $marsp2=$marsp22-360;
       }
       else{
        $marsp2=$marsp22;
       }

     }
     else {
       # code... 
      if ($marsp1<$marshalfmandacorrection) {
        # code...
        $maa=$marsp1+360;
        $marsp2=$maa-$marshalfmandacorrection;

      }
      else{
        $marsp2=$marsp1-$marshalfmandacorrection;
      }
      

     }

         

     //procedure 3 -  new manda kendra

     if ($marsmandaucchavalue<$marsp2) {
       # code...
      $marsnewadd=$marsmandaucchavalue+360;
      $marsnewmandakendra=$marsnewadd-$marsp2;

     }
     else{

      $marsnewmandakendra=$marsmandaucchavalue-$marsp2;

     }


     $marssine1new=sin($marsnewmandakendra*3.14159265/180); //finding sin

     if ($marssine1new<0) {
      # code...
      $marssinenew=-($marssine1new);
     }
     else{

       $marssinenew=$marssine1new;
     }

     //new pem

     $marssub1new=$marspe-$marsp0;
     $marssub2new=$marssub1new*$marssinenew;
     $marspemnew=$marspe-$marssub2new;

     // new manda correction;

     $marsmandacorrection1new=$marspemnew*3438*$marssine1new;
     $marsmandacorrectionnew=$marsmandacorrection1new/360;
     $marsmandacorrectionminnew=$marsmandacorrectionnew/60;

     
      $marsp3=$marsfinaldeg+$marsmandacorrectionminnew;
     

     //procedure 4 (new sighra kendra)

     if ($finaldeg<$marsp3) {
       # code...
      $mafinaldeg=$finaldeg+360;

      $marsnewsighrakendra=$mafinaldeg-$marsp3;

     }
     else{
       $marsnewsighrakendra=$finaldeg-$marsp3;
     }

     //new sine and cos

     $marssine1sighranew=sin($marsnewsighrakendra*3.14159265/180); //sine 

     $marscos1sighranew=cos($marsnewsighrakendra*3.14159265/180); //cos

     if ($marssine1sighranew<0) {
      # code...
      $marssinesighranew=-($marssine1sighranew);
     }
     else{

       $marssinesighranew=$marssine1sighranew;
     }
     if ($marscos1sighranew<0) {
      # code...
      $marscossighranew=-($marscos1sighranew);
     }
     else{

       $marscossighranew=$marscos1sighranew;
     }




     // new pes formula

     $marssub11new=$marssighrape-$marssighrap0;
     $marssub22new=$marssub11new*$marssinesighranew; //no minus sign
     $marspesnew=$marssighrape-$marssub22new;

     // new doh phala

     $marsdohphala1new=$marspesnew*3438*$marssinesighranew;
     $marsdohphalanew=$marsdohphala1new/360;

     //new koti phala

     $marskotiphala1new=$marspesnew*3438*$marscossighranew;
     $marskotiphalanew=$marskotiphala1new/360;

     //new sphuta koti

     if ($marsnewsighrakendra>=90 && $marsnewsighrakendra<=270) {
       # code...
      $marssphutakotinew=3438-$marskotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($marsnewsighrakendra>=0 && $marsnewsighrakendra<=90) {
       # code...
      $marssphutakotinew=3438+$marskotiphalanew;
      //echo "quadrant1";


     }
     elseif ($marsnewsighrakendra>=270 && $marsnewsighrakendra<=360) {
       # code...

      $marssphutakotinew=3438+$marskotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $marshyp1new=$marsdohphalanew*$marsdohphalanew;
     $marshyp2new=$marssphutakotinew*$marssphutakotinew;
     $marshyp3new=$marshyp1new+$marshyp2new;
     $marskarnanew=sqrt($marshyp3new);

     //new sighra correction

     $marssighracorrnew=$marsdohphalanew/$marskarnanew;
     $marssighracorr1new=asin($marssighracorrnew);
     $marssighracorrectionnew=$marssighracorr1new*180/3.14159265;

     //p4

     if ($marsnewsighrakendra>180) {
       # code...
      if ($marsp3<$marssighracorrectionnew) {
        # code..
        $maas=$marsp3+360;
        $marsp4=$maas-$marssighracorrectionnew;

      }
      else{
        $marsp4=$marsp3-$marssighracorrectionnew;
      }

        //more than 180
     }
     else{

      $marsp44=$marsp3+$marssighracorrectionnew;
      if ($marsp44>360) {
        # code...
        $marsp4=$marsp44-360;
      }
      else{
        $marsp4=$marsp44;
      }

     }



     

     //bhujantara correction

     $marsbhu= $mandacorrectionmin*$marsmotion;
     $marsbhujantaracorrection=$marsbhu/360;


     $marstruesun=$marsp4+$marsbhujantaracorrection;
     


     $marsyy=(int)$marstruesun; //deg

     
     $marsz=$marstruesun-$marsyy;
     $marsaa=$marsz*60;
     $marsbb=(int)$marsaa; //min
     $marscc=$marsaa-$marsbb;
     $marsdd=$marscc*60;
     $marsee=(int)$marsdd; //sec
     $marsff=$marsdd-$marsee;
     $marsgg=$marsff*60;
     $marsjj=sprintf('%0.2f',$marsgg); //third


     if ($marsyy>360) {
      # code...
      $marsfinaldegval=$marsyy-360;
     }
     else{
      $marsfinaldegval=$marsyy;
     }



      $marsop= "$marsfinaldegval °  $marsbb' $marsee'' $marsjj'''";

     echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF MARS IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$marsop."</font></p></h1>";

     



   

      //for venus

       $venust=$q*2702376; //constant1
     $venusu=$venust/1577917500; //constant2
     $venusv=(int)$venusu;
     $venusw=$venusu-$venusv;
     $venusx=$venusw*360;

     $venusdeg=230.15; // constant3

     $venusy=$venusx+$venusdeg; //add bcoz above 4620

     if ($venusy>360) {
      # code...
      $venusfinaldegval=$venusy-360;
     }
     else{
      $venusfinaldegval=$venusy;
     }

    

     //manda calculation

     $venusa1=$a-1;
     $venusmonth1=$month-1;
     $venusdate1=$date-1;
     $venusyearvalue=$venusa1-4620;
     $venusmonthmul=$venusmonth1*30.478;
     $venusdateadd=$venusmonthmul+$venusdate1;
     $venusyearvaluefinal=$venusdateadd/365.256; 
     $venustotalyear=$venusyearvaluefinal+$venusyearvalue; //totalyear

     //manda uccha

     $venusmandauccha=$venustotalyear*360*535; //constant 6
     $venusmandaucchafinal=$venusmandauccha/4320000000; //constant 7


     
      $venusmandaucchavalue=80.2631972+$venusmandaucchafinal; //manda uccha value
    

     //sighra correction and sighrakendra

     //meansun-meanjupiter add 360 step
    
       $venussighrakendra=$venusfinaldegval;
     

     $venussine1sighra=sin($venussighrakendra*3.14159265/180); //sine 

     $venuscos1sighra=cos($venussighrakendra*3.14159265/180); //cos

     if ($venussine1sighra<0) {
      # code...
      $venussinesighra=-($venussine1sighra);
     }
     else{

       $venussinesighra=$venussine1sighra;
     }
     if ($venuscos1sighra<0) {
      # code...
      $venuscossighra=-($venuscos1sighra);
     }
     else{

       $venuscossighra=$venuscos1sighra;
     }


     //pes formula

     $venussub11=$venussighrape-$venussighrap0;
     $venussub22=$venussub11*$venussinesighra;
     $venuspes=$venussighrape-$venussub22;

     //doh phala

     $venusdohphala1=$venuspes*3438*$venussinesighra;
     $venusdohphala=$venusdohphala1/360;

     //koti phala

     $venuskotiphala1=$venuspes*3438*$venuscossighra;
     $venuskotiphala=$venuskotiphala1/360;

     //sphuta koti

     if ($venussighrakendra>=90 && $venussighrakendra<=270) {
       # code...
      $venussphutakoti=3438-$venuskotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($venussighrakendra>=0 && $venussighrakendra<=90) {
       # code...
      $venussphutakoti=3438+$venuskotiphala;
      //echo "quadrant1";


     }
     elseif ($venussighrakendra>=270 && $venussighrakendra<=360) {
       # code...

      $venussphutakoti=3438+$venuskotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $venushyp1=$venusdohphala*$venusdohphala;
     $venushyp2=$venussphutakoti*$venussphutakoti;
     $venushyp3=$venushyp1+$venushyp2;
     $venuskarna=sqrt($venushyp3);

     //sighra correction

     $venussighracorr=$venusdohphala/$venuskarna;
     $venussighracorr1=asin($venussighracorr);
     $venussighracorrection=$venussighracorr1*180/3.14159265;

     $venushalfsighracorrection=$venussighracorrection/2;


      //new manda uccha value condition must
     if ($venussighrakendra>180) {
       # code...
      $venusnewmandauccha=$venusmandaucchavalue+$venushalfsighracorrection; 

     }
     else{
      $venusnewmandauccha=$venusmandaucchavalue-$venushalfsighracorrection; 


     }

    

 
       // manda kendra

    if ($finaldegval<$venusnewmandauccha) {
       # code...
      $fi=$finaldegval+360;
      $venusmandakendra=$fi-$venusnewmandauccha;
     }
     else{
      $venusmandakendra=$finaldegval-$venusnewmandauccha;
     }

    

     

      $venussine1=sin($venusmandakendra*3.14159265/180); //finding sin

     if ($venussine1<0) {
      # code...
      $venussine=-($venussine1);
     }
     else{

       $venussine=$venussine1;
     }
     
   
     //echo "$sine";

     //pem formula

     $venussub1=$venuspe-$venusp0;
     $venussub2=$venussub1*$venussine;
     $venuspem=$venuspe-$venussub2;

     //manda correction;

     $venusmandacorrection1=$venuspem*3438*$venussine;
     $venusmandacorrection=$venusmandacorrection1/360;
     $venusmandacorrectionmin=$venusmandacorrection/60;

     //true mean venus  condition must

     if ($venusmandakendra>180) {
      # code...

      $venustruemean=$finaldegval+$venusmandacorrectionmin; 
      //the value will be in minus so + to subtract
     }

     else{

      $venustruemean=$finaldegval-$venusmandacorrectionmin;

     }
    

     //venus sighra uccha

     $venussighrauccha1=$venussighrakendra+$finaldegval;

     if ($venussighrauccha1>360) {
      # code...
      $venussighrauccha=$venussighrauccha1-360;
     }
     else{
      $venussighrauccha=$venussighrauccha1;
     }

     //new sighra kendra

     
     if ($venussighrauccha<$venustruemean) {
      # code...
      $venusaddneww=$venussighrauccha+360;
      $venusnewsighrakendra=$venusaddneww-$venustruemean;

     }
     else{
      $venusnewsighrakendra=$venussighrauccha-$venustruemean;
     }

     //new sine and cos

     $venussine1sighranew=sin($venusnewsighrakendra*3.14159265/180); //sine 

     $venuscos1sighranew=cos($venusnewsighrakendra*3.14159265/180); //cos

     if ($venussine1sighranew<0) {
      # code...
      $venussinesighranew=-($venussine1sighranew);
     }
     else{

       $venussinesighranew=$venussine1sighranew;
     }
     if ($venuscos1sighranew<0) {
      # code...
      $venuscossighranew=-($venuscos1sighranew);
     }
     else{

       $venuscossighranew=$venuscos1sighranew;
     }




     // new pes formula

     $venussub11new=$venussighrape-$venussighrap0;
     $venussub22new=$venussub11new*$venussinesighranew; //no minus sign
     $venuspesnew=$venussighrape-$venussub22new;

     // new doh phala

     $venusdohphala1new=$venuspesnew*3438*$venussinesighranew;
     $venusdohphalanew=$venusdohphala1new/360;

     //new koti phala

     $venuskotiphala1new=$venuspesnew*3438*$venuscossighranew;
     $venuskotiphalanew=$venuskotiphala1new/360;

     //new sphuta koti

     if ($venusnewsighrakendra>=90 && $venusnewsighrakendra<=270) {
       # code...
      $venussphutakotinew=3438-$venuskotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($venusnewsighrakendra>=0 && $venusnewsighrakendra<=90) {
       # code...
      $venussphutakotinew=3438+$venuskotiphalanew;
      //echo "quadrant1";


     }
     elseif ($venusnewsighrakendra>=270 && $venusnewsighrakendra<=360) {
       # code...

      $venussphutakotinew=3438+$venuskotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $venushyp1new=$venusdohphalanew*$venusdohphalanew;
     $venushyp2new=$venussphutakotinew*$venussphutakotinew;
     $venushyp3new=$venushyp1new+$venushyp2new;
     $venuskarnanew=sqrt($venushyp3new);

     //new sighra correction

     $venussighracorrnew=$venusdohphalanew/$venuskarnanew;
     $venussighracorr1new=asin($venussighracorrnew);
     $venussighracorrectionnew=$venussighracorr1new*180/3.14159265;


 
     //true mean venus 1 consition must

     if ($venusnewsighrakendra>180) {
      # code...

      if ($venustruemean<$venussighracorrectionnew) {
        # code...
        $venustruemeanadd=$venustruemean+360;
        $venustruemean1=$venustruemeanadd-$venussighracorrectionnew;
     }
     else
     {
      $venustruemean1=$venustruemean-$venussighracorrectionnew;
     }
     }
     

     else{

      $venustruemean1=$venustruemean+$venussighracorrectionnew;
    }
    //dessantra correction for true mean venus 2

    
      if ($ujjain<$longitude) {
        # code...
        $ujjainadd=$ujjain+360;
        $venusdiff=$ujjainadd-$longitude;
      }
      else{
        $venusdiff=$ujjain-$longitude;
      }


    

     // same for above 4620

     $venusangle=$venusmotion*$venusdiff;

     $venusangledeg=$venusangle/360;

     $venustruemean2=$venustruemean1+$venusangledeg; //meanjupiter value


     //bhujantara correction

     $venusbhu= $mandacorrectionmin*$venusmotion;
     $venusbhujantaracorrection=$venusbhu/360;


     $venustruesun=$venustruemean2+$venusbhujantaracorrection;

     $venusyy=(int)$venustruesun; //deg

     
     $venusz=$venustruesun-$venusyy;
     $venusaa=$venusz*60;
     $venusbb=(int)$venusaa; //min
     $venuscc=$venusaa-$venusbb;
     $venusdd=$venuscc*60;
     $venusee=(int)$venusdd; //sec
     $venusff=$venusdd-$venusee;
     $venusgg=$venusff*60;
     $venusjj=sprintf('%0.2f',$venusgg); //third


     if ($venusyy>360) {
      # code...
      $venusfinaldegvall=$venusyy-360;
     }
     else{
      $venusfinaldegvall=$venusyy;
     }


      $venusop= "$venusfinaldegvall °  $venusbb' $venusee'' $venusjj'''";
      echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF VENUS IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$venusop."</font></p></h1>";

   
     //for mercury
       $mercuryt=$q*13617060; //constant1
     $mercuryu=$mercuryt/1577917500; //constant2
     $mercuryv=(int)$mercuryu;
     $mercuryw=$mercuryu-$mercuryv;
     $mercuryx=$mercuryw*360;

     //dessantra correction for true mean venus 2
    $mercurydeg=269.55; // constant3

     $mercuryy=$mercuryx+$mercurydeg;

     if ($mercuryy>360) {
      # code...
      $mercuryfinaldegval=$mercuryy-360;
     }
     else{
      $mercuryfinaldegval=$mercuryy;
     }




     //manda calculation

     $mercurya1=$a-1;
     $mercurymonth1=$month-1;
     $mercurydate1=$date-1;
     $mercuryyearvalue=$mercurya1-4620;
     $mercurymonthmul=$mercurymonth1*30.478;
     $mercurydateadd=$mercurymonthmul+$mercurydate1;
     $mercuryyearvaluefinal=$mercurydateadd/365.256; 
     $mercurytotalyear=$mercuryyearvaluefinal+$mercuryyearvalue; //totalyear


    //manda uccha

     $mercurymandauccha=$mercurytotalyear*360*368; //constant 6
     $mercurymandaucchafinal=$mercurymandauccha/4320000000; //constant 7


    
      $mercurymandaucchavalue=226.85668+$mercurymandaucchafinal; //manda uccha value
    
      //sighra correction and sighrakendra

     //meansun-meanjupiter add 360 step

    
      
       $mercurysighrakendra=$mercuryfinaldegval;
     

     $mercurysine1sighra=sin($mercurysighrakendra*3.14159265/180); //sine 

     $mercurycos1sighra=cos($mercurysighrakendra*3.14159265/180); //cos

     if ($mercurysine1sighra<0) {
      # code...
      $mercurysinesighra=-($mercurysine1sighra);
     }
     else{

       $mercurysinesighra=$mercurysine1sighra;
     }
     if ($mercurycos1sighra<0) {
      # code...
      $mercurycossighra=-($mercurycos1sighra);
     }
     else{

       $mercurycossighra=$mercurycos1sighra;
     }


     //pes formula

     $mercurysub11=$mercurysighrape-$mercurysighrap0;
     $mercurysub22=$mercurysub11*$mercurysinesighra;
     $mercurypes=$mercurysighrape-$mercurysub22;

     //doh phala

     $mercurydohphala1=$mercurypes*3438*$mercurysinesighra;
     $mercurydohphala=$mercurydohphala1/360;

     //koti phala

     $mercurykotiphala1=$mercurypes*3438*$mercurycossighra;
     $mercurykotiphala=$mercurykotiphala1/360;

     //sphuta koti

     if ($mercurysighrakendra>=90 && $mercurysighrakendra<=270) {
       # code...
      $mercurysphutakoti=3438-$mercurykotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($mercurysighrakendra>=0 && $mercurysighrakendra<=90) {
       # code...
      $mercurysphutakoti=3438+$mercurykotiphala;
      //echo "quadrant1";


     }
     elseif ($mercurysighrakendra>=270 && $mercurysighrakendra<=360) {
       # code...

      $mercurysphutakoti=3438+$mercurykotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $mercuryhyp1=$mercurydohphala*$mercurydohphala;
     $mercuryhyp2=$mercurysphutakoti*$mercurysphutakoti;
     $mercuryhyp3=$mercuryhyp1+$mercuryhyp2;
     $mercurykarna=sqrt($mercuryhyp3);

     //sighra correction

     $mercurysighracorr=$mercurydohphala/$mercurykarna;
     $mercurysighracorr1=asin($mercurysighracorr);
     $mercurysighracorrection=$mercurysighracorr1*180/3.14159265;

     $mercuryhalfsighracorrection=$mercurysighracorrection/2;

     //new manda uccha value condition must
     if ($mercurysighrakendra>180) {
       # code...
      $mercurynewmandauccha=$mercurymandaucchavalue+$mercuryhalfsighracorrection; 

     }
     else{
      $mercurynewmandauccha=$mercurymandaucchavalue-$mercuryhalfsighracorrection; 


     }

     //echo "new moonmandaucchavalue=$mercurynewmandauccha";



     // manda kendra

     if ($finaldegval<$mercurynewmandauccha) {
       # code...
      $finaldegvalue=$finaldegval+360;
      $mercurymandakendra=$finaldegvalue-$mercurynewmandauccha;
     }
     else{
      $mercurymandakendra=$finaldegval-$mercurynewmandauccha;
     }

     
      $mercurysine1=sin($mercurymandakendra*3.14159265/180); //finding sin

     if ($mercurysine1<0) {
      # code...
      $mercurysine=-($mercurysine1);
     }
     else{

       $mercurysine=$mercurysine1;
     }
     
   
     //echo "$sine";

     //pem formula

     $mercurysub1=$mercurype-$mercuryp0;
     $mercurysub2=$mercurysub1*$mercurysine;
     $mercurypem=$mercurype-$mercurysub2;

     //manda correction;

     $mercurymandacorrection1=$mercurypem*3438*$mercurysine;
     $mercurymandacorrection=$mercurymandacorrection1/360;
     $mercurymandacorrectionmin=$mercurymandacorrection/60;

     //true mean venus  condition must

     if ($mercurymandakendra>180) {
      # code...

      $mercurytruemean=$finaldegval+$mercurymandacorrectionmin; 
      //the value will be in minus so + to subtract
     }

     else{

      $mercurytruemean=$finaldegval-$mercurymandacorrectionmin;

     }
    


     //venus sighra uccha

     $mercurysighrauccha1=$mercurysighrakendra+$finaldegval;

     

     if ($mercurysighrauccha1>360) {
      # code...
      $mercurysighrauccha=$mercurysighrauccha1-360;
     }
     else{
      $mercurysighrauccha=$mercurysighrauccha1;
     }

     //new sighra kendra

     
     if ($mercurysighrauccha<$mercurytruemean) {
      # code...
      $mercuryaddneww=$mercurysighrauccha+360;
      $mercurynewsighrakendra=$mercuryaddneww-$mercurytruemean;

     }
     else{
      $mercurynewsighrakendra=$mercurysighrauccha-$mercurytruemean;
     }

     //new sine and cos

     $mercurysine1sighranew=sin($mercurynewsighrakendra*3.14159265/180); //sine 

     $mercurycos1sighranew=cos($mercurynewsighrakendra*3.14159265/180); //cos

     if ($mercurysine1sighranew<0) {
      # code...
      $mercurysinesighranew=-($mercurysine1sighranew);
     }
     else{

       $mercurysinesighranew=$mercurysine1sighranew;
     }
     if ($mercurycos1sighranew<0) {
      # code...
      $mercurycossighranew=-($mercurycos1sighranew);
     }
     else{

       $mercurycossighranew=$mercurycos1sighranew;
     }




     // new pes formula

     $mercurysub11new=$mercurysighrape-$mercurysighrap0;
     $mercurysub22new=$mercurysub11new*$mercurysinesighranew; //no minus sign
     $mercurypesnew=$mercurysighrape-$mercurysub22new;

     // new doh phala

     $mercurydohphala1new=$mercurypesnew*3438*$mercurysinesighranew;
     $mercurydohphalanew=$mercurydohphala1new/360;

     //new koti phala

     $mercurykotiphala1new=$mercurypesnew*3438*$mercurycossighranew;
     $mercurykotiphalanew=$mercurykotiphala1new/360;

     //new sphuta koti

     if ($mercurynewsighrakendra>=90 && $mercurynewsighrakendra<=270) {
       # code...
      $mercurysphutakotinew=3438-$mercurykotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($mercurynewsighrakendra>=0 && $mercurynewsighrakendra<=90) {
       # code...
      $mercurysphutakotinew=3438+$mercurykotiphalanew;
      //echo "quadrant1";


     }
     elseif ($mercurynewsighrakendra>=270 && $mercurynewsighrakendra<=360) {
       # code...

      $mercurysphutakotinew=3438+$mercurykotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $mercuryhyp1new=$mercurydohphalanew*$mercurydohphalanew;
     $mercuryhyp2new=$mercurysphutakotinew*$mercurysphutakotinew;
     $mercuryhyp3new=$mercuryhyp1new+$mercuryhyp2new;
     $mercurykarnanew=sqrt($mercuryhyp3new);

     //new sighra correction

     $mercurysighracorrnew=$mercurydohphalanew/$mercurykarnanew;
     $mercurysighracorr1new=asin($mercurysighracorrnew);
     $mercurysighracorrectionnew=$mercurysighracorr1new*180/3.14159265;

    
     
     //true mean venus 1 consition must

     if ($mercurynewsighrakendra>180) {
      # code...
        if ($mercurytruemean<$mercurysighracorrectionnew) {
        # code...
        $mercurytruemeanadd=$mercurytruemean+360;
        $mercurytruemean1=$mercurytruemeanadd-$mercurysighracorrectionnew;
     }
     else{
      $mercurytruemean1=$mercurytruemean-$mercurysighracorrectionnew;
     }

     }

      

     else{

      $mercurytruemean1=$mercurytruemean+$mercurysighracorrectionnew;
    }
    

    
    

     
      if ($ujjain<$longitude) {
        # code...
        $ujjainadd=$ujjain+360;
        $mercurydiff=$ujjainadd-$longitude;
      }
      else{
        $mercurydiff=$ujjain-$longitude;
      }


     

     // same for above 4620

     $mercuryangle=$mercurymotion*$mercurydiff;

     $mercuryangledeg=$mercuryangle/360;

     $mercurytruemean2=$mercurytruemean1+$mercuryangledeg; //meanjupiter value


      //bhujantara correction

     $mercurybhu= $mandacorrectionmin*$mercurymotion;
     $mercurybhujantaracorrection=$mercurybhu/360;


     $mercurytruesun=$mercurytruemean2+$mercurybhujantaracorrection;

     $mercuryyy=(int)$mercurytruesun; //deg

     
     $mercuryz=$mercurytruesun-$mercuryyy;
     $mercuryaa=$mercuryz*60;
     $mercurybb=(int)$mercuryaa; //min
     $mercurycc=$mercuryaa-$mercurybb;
     $mercurydd=$mercurycc*60;
     $mercuryee=(int)$mercurydd; //sec
     $mercuryff=$mercurydd-$mercuryee;
     $mercurygg=$mercuryff*60;
     $mercuryjj=sprintf('%0.2f',$mercurygg); //third


     if ($mercuryyy>360) {
      # code...
      $mercuryfinaldegvall=$mercuryyy-360;
     }
     else{
      $mercuryfinaldegvall=$mercuryyy;
     }

        $mercuryop= "$mercuryfinaldegvall °  $mercurybb' $mercuryee'' $mercuryjj'''";   

    echo "<br/>";

  echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF MERCURY IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$mercuryop."</font></p></h1>";

   



}


//for negative

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

 echo "<br/>";
      echo "<h2><font color=#fff>AGARHANA=$s</font></h2>";


 $t=$s*4320000;
 $u=$t/1577917500;
 $v=(int)$u;
 $w=$u-$v;
 $x=$w*360;

 


 $deg=349.683333;

  if ($deg<$x ) {
  # code...
  $add=$deg+360;

  $y=$add-$x;

  
 }
 else{

  $y=$deg-$x;
  
 }

 if ($y>360) {
      # code...
      $finaldegval=$y-360;

      
     }
     else{
      $finaldegval=$y;
      
     }

    

    
     
        $diff=$ujjain-$longitude;
     


     
     $diff1=-($diff); //sign changed for below 4620

     $angle=$sunmotion*$diff1;
     $angledeg=$angle/360;

     $finaldege=$finaldegval+$angledeg; //meansun value

     if ($finaldege>360) {
       # code...
      $finaldeg=$finaldege-360;
     }
     else{
      $finaldeg=$finaldege;
     }


     //manda calculation


     $a1=-($a);
     $yearvalue=4620+$a1;
     $month1=$month-1;
     $date1=$date-1;
     $monthmul=$month1*30.478;
     $dateadd=$monthmul+$date1;
     $yearvaluefinal=$dateadd/365.256; 
     $totalyear=$yearvalue-$yearvaluefinal; //total years

      

     //manda uccha

     $mandauccha=$totalyear*360*387;
     $mandaucchafinal=$mandauccha/4320000000;

     //$mandaucchavalue=79.0092727778-$mandaucchafinal;

      if ($mandaucchafinal>79.0092727778) {
       # code...
      $adddition=79.0092727778+360;
      $mandaucchavalue=$adddition-$mandaucchafinal;
      //echo "op1";
     }
     else{
      $mandaucchavalue=79.0092727778-$mandaucchafinal;
      //echo "op2";
    }

     //manda kendra

     if ($mandaucchavalue<$finaldeg) {
      # code...

      $mandaucchavalue1=$mandaucchavalue+360;

      $mandakendra=$mandaucchavalue1-$finaldeg;
     }
     else{
      $mandakendra=$mandaucchavalue-$finaldeg;

     }
     

     $sine1=sin($mandakendra*3.14159265/180); //finding sin


     if ($sine1<0) {
      # code...
      $sine=-($sine1);
     }
     else{

       $sine=$sine1;
     }
     

     //pem formula

     $sub1=$pe-$p0;
     $sub2=$sub1*$sine;
     $pem=$pe-$sub2;

     //manda correction;

     $mandacorrection1=$pem*3438*$sine1;
     $mandacorrection=$mandacorrection1/360;

     

     $mandacorrectionmin=$mandacorrection/60;


    // echo "$mandacorrectionmin";

     //true mean sun

     if ($mandakendra<180) {
      # code...

      $sundeg=$finaldeg+$mandacorrectionmin;
     }

     else{

      $sundeg=$finaldeg+$mandacorrectionmin;
      
     }
    

  

     //bhujantara correction

     $bhu= $mandacorrectionmin*$sunmotion;
     $bhujantaracorrection=$bhu/360;

     $truesun=$sundeg+$bhujantaracorrection;


  

     $yy=(int)$truesun; //deg

     
     $z=$truesun-$yy;
     $aa=$z*60;
     $bb=(int)$aa; //min
     $cc=$aa-$bb;
     $dd=$cc*60;
     $ee=(int)$dd; //sec
     $ff=$dd-$ee;
     $gg=$ff*60;
     $jj=sprintf('%0.2f',$gg); //third


     if ($yy>360) {
      # code...
      $finaldegvall=$yy-360;
     }
     else{
      $finaldegvall=$yy;
     }



      $op= "$finaldegvall °  $bb' $ee'' $jj'''";

    echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF SUN IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$op."</font></p></h1>";

      //for moon after agarhana

      $moont=$s*57753336; //constant 1
 $moonu=$moont/1577917500; //constant 2
 $moonv=(int)$moonu;
 $moonw=$moonu-$moonv;
 $moonx=$moonw*360;

 

 $moondeg=349.1; //constant 3

  if ($moondeg<$moonx ) {
  # code...
  $moonadd=$moondeg+360;

  $moony=$moonadd-$moonx;

  
 }
 else{

  $moony=$moondeg-$moonx;
  
 }




 if ($moony>360) {
      # code...
      $moonfinaldegval=$moony-360;

      
     }
     else{
      $moonfinaldegval=$moony;
      
     }

    

    
      
     
        $moondiff=$ujjain-$longitude;
     


     
     $moondiff1=-($moondiff); //sign changed for below 4620

     $moonangle=$moonmotion*$moondiff1;

     $moonangledeg=$moonangle/360;  

     $moonfinaldege=$moonfinaldegval+$moonangledeg; //meansun value

     if ($moonfinaldege>360) {
       # code...
      $moonfinaldeg=$moonfinaldege-360;
     }
     else{
      $moonfinaldeg=$moonfinaldege;
     }



     //manda calculation


     $moona1=-($a);
     $moonyearvalue=4620+$moona1;
     $moonmonth1=$month-1;
     $moondate1=$date-1;
     $moonmonthmul=$moonmonth1*30.478;
     $moondateadd=$moonmonthmul+$moondate1;
     $moonyearvaluefinal=$moondateadd/365.256; 
     $moontotalyear=$moonyearvalue-$moonyearvaluefinal; //total years

     //manda uccha

     $moonmandauccha1=$moontotalyear*488211; //constant 6
     $moonmandaucchafinal=$moonmandauccha1/4320000; //constant 7


    //ommiting 
     $moonommit=(int)$moonmandaucchafinal;
     $moonmandauccha=$moonmandaucchafinal-$moonommit;
     $moonmandaucchafinalval=$moonmandauccha*360;
    

    //echo "$moonmandaucchafinalval";
     if ($moonmandaucchafinalval>131.235) {
       # code...
      $moonadddition=131.235+360;
      $moonmandaucchavalue=$moonadddition-$moonmandaucchafinalval;
      //echo "op1";
     }
     else{
      $moonmandaucchavalue=131.235-$moonmandaucchafinalval;
      //echo "op2";
     }


     //manda kendra

     if ($moonmandaucchavalue<$moonfinaldeg) {
      # code...

      $moonmandaucchavalue1=$moonmandaucchavalue+360;

      $moonmandakendra=$moonmandaucchavalue1-$moonfinaldeg;
     }
     else{
      $moonmandakendra=$moonmandaucchavalue-$moonfinaldeg;
     }




     $moonsine1=sin($moonmandakendra*3.14159265/180); //finding sin


     
   
     if ($moonsine1<0) {
      # code...

      $moonsine=-($moonsine1);
     }
     else{
      $moonsine=$moonsine1;
     }

     //pem formula

     $moonsub1=$moonpe-$moonp0;
     $moonsub2=$moonsub1*$moonsine;
     $moonpem=$moonpe-$moonsub2;


     //manda correction;

     $moonmandacorrection1=$moonpem*3438*$moonsine1;
     $moonmandacorrection=$moonmandacorrection1/360;
      $moonmandacorrectionmin=$moonmandacorrection/60;


     //true mean sun

     

      $moonsundeg=$moonfinaldeg+$moonmandacorrectionmin;

  


     //bhujantara correction

     $moonbhu= $mandacorrectionmin*$moonmotion;
     $moonbhujantaracorrection=$moonbhu/360;



     $moontruesun=$moonsundeg+$moonbhujantaracorrection;


     $moonyy=(int)$moontruesun; //deg

     
     $moonz=$moontruesun-$moonyy;
     $moonaa=$moonz*60;

     $moonbb=(int)$moonaa; //min
     $mooncc=$moonaa-$moonbb;
     $moondd=$mooncc*60;

     $moonee=(int)$moondd; //sec
     $moonff=$moondd-$moonee;
     $moongg=$moonff*60;
     
     $moonjj=sprintf('%0.2f',$moongg); //third


     if ($moonyy>360) {
      # code...
      $moonfinaldegvall=$moonyy-360;
     }
     else{
      $moonfinaldegvall=$moonyy;
     }

      $moonop= "$moonfinaldegvall °  $moonbb' $moonee'' $moonjj'''";

    echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF MOON IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$moonop."</font></p></h1>";

      //for jupiter

       $jupitert=$s*364220; //constant 1
       $jupiteru=$jupitert/1577917500; //constant 2
       $jupiterv=(int)$jupiteru;
       $jupiterw=$jupiteru-$jupiterv;
       $jupiterx=$jupiterw*360;



 

 $jupiterdeg=212.26667; //constant 3

  if ($jupiterdeg<$jupiterx ) {
  # code...
  $jupiteradd=$jupiterdeg+360;

  $jupitery=$jupiteradd-$jupiterx;

  
 }
 else{

  $jupitery=$jupiterdeg-$jupiterx;
  
 }


 if ($jupitery>360) {
      # code...
      $jupiterfinaldegval=$jupitery-360;

      
     }
     else{
      $jupiterfinaldegval=$jupitery;
      
     }


    
 
    
      
    
        $jupiterdiff=$ujjain-$longitude;
   


     
     $jupiterdiff1=-($jupiterdiff); //sign changed for below 4620

     $jupiterangle=$jupitermotion*$jupiterdiff1;

     $jupiterangledeg=$jupiterangle/360;    


     $jupiterfinaldege=$jupiterfinaldegval+$jupiterangledeg; //meansun value

     if ($jupiterfinaldege>360) {
       # code...
      $jupiterfinaldeg=$jupiterfinaldege-360;
     }
     else{
      $jupiterfinaldeg=$jupiterfinaldege;
     }



     //manda calculation


     $jupitera1=-($a);
     $jupiteryearvalue=4620+$jupitera1;
     $jupitermonth1=$month-1;
     $jupiterdate1=$date-1;
     $jupitermonthmul=$jupitermonth1*30.478;
     $jupiterdateadd=$jupitermonthmul+$jupiterdate1;
     $jupiteryearvaluefinal=$jupiterdateadd/365.256; 
     $jupitertotalyear=$jupiteryearvalue-$jupiteryearvaluefinal; //total years




     //manda uccha

     $jupitermandauccha=$jupitertotalyear*360*900; //constant 6
     $jupitermandaucchafinal=$jupitermandauccha/4320000000; //constant 7

     //$jupitermandaucchavalue=173.1551-$jupitermandaucchafinal; //constant 5

     if ($jupitermandaucchafinal>173.1551) {
       # code...
      $jupiteradddition=173.1551+360;
      $jupitermandaucchavalue=$jupiteradddition-$jupitermandaucchafinal;
      //echo "op1";
     }
     else{
      $jupitermandaucchavalue=173.1551-$jupitermandaucchafinal;
      //echo "op2";
     }




     //manda kendra

     if ($jupitermandaucchavalue<$jupiterfinaldeg) {
      # code...

      $jupitermandaucchavalue1=$jupitermandaucchavalue+360;

      $jupitermandakendra=$jupitermandaucchavalue1-$jupiterfinaldeg;
     }
     else{
      $jupitermandakendra=$jupitermandaucchavalue-$jupiterfinaldeg;
     }



     $jupitersine1=sin($jupitermandakendra*3.14159265/180); //finding sin

     
   
      if ($jupitersine1<0) {
        # code...
        $jupitersine=-($jupitersine1);
       }
       else{
        $jupitersine=$jupitersine1;
       }

     //pem formula

     $jupitersub1=$jupiterpe-$jupiterp0;
     $jupitersub2=$jupitersub1*$jupitersine;
     $jupiterpem=$jupiterpe-$jupitersub2;


      

     //sighra correction and sighrakendra

     //$jupitersighrakendra=$finaldeg-$jupiterfinaldeg; //meansun-meanjupiter add 360 step

     if ($finaldeg<$jupiterfinaldeg) {
       # code...
      $jupi=$finaldeg+360;
       $jupitersighrakendra=$jupi-$jupiterfinaldeg;

     }
     else{
       $jupitersighrakendra=$finaldeg-$jupiterfinaldeg;
     }



     $jupitersine1sighra=sin($jupitersighrakendra*3.14159265/180); //sine 

     $jupitercos1sighra=cos($jupitersighrakendra*3.14159265/180); //cos


     if ($jupitersine1sighra<0) {
      # code...
      $jupitersinesighra=-($jupitersine1sighra);
     }
     else{

       $jupitersinesighra=$jupitersine1sighra;
     }
     if ($jupitercos1sighra<0) {
      # code...
      $jupitercossighra=-($jupitercos1sighra);
     }
     else{

       $jupitercossighra=$jupitercos1sighra;
     }




     //manda correction;

     $jupitermandacorrection1=$jupiterpem*3438*$jupitersine;
     $jupitermandacorrection=$jupitermandacorrection1/360;
      $jupitermandacorrectionmin=$jupitermandacorrection/60;


      $jupiterhalfmandacorrection=$jupitermandacorrectionmin/2;

      //pes formula

     $jupitersub11=$jupitersighrape-$jupitersighrap0;
     $jupitersub22=$jupitersub11*$jupitersinesighra;
     $jupiterpes=$jupitersighrape-$jupitersub22;


     

     //doh phala

     $jupiterdohphala1=$jupiterpes*3438*$jupitersinesighra;
     $jupiterdohphala=$jupiterdohphala1/360;


     //koti phala

     $jupiterkotiphala1=$jupiterpes*3438*$jupitercossighra;
     $jupiterkotiphala=$jupiterkotiphala1/360;


     //sphuta koti

     if ($jupitersighrakendra>=90 && $jupitersighrakendra<=270) {
       # code...
      $jupitersphutakoti=3438-$jupiterkotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($jupitersighrakendra>=0 && $jupitersighrakendra<=90) {
       # code...
      $jupitersphutakoti=3438+$jupiterkotiphala;
      //echo "quadrant1";


     }
     elseif ($jupitersighrakendra>=270 && $jupitersighrakendra<=360) {
       # code...

      $jupitersphutakoti=3438+$jupiterkotiphala;
      //echo "quadrant4";
     }



     //sighra karna hypotenuse

     $jupiterhyp1=$jupiterdohphala*$jupiterdohphala;
     $jupiterhyp2=$jupitersphutakoti*$jupitersphutakoti;
     $jupiterhyp3=$jupiterhyp1+$jupiterhyp2;
     $jupiterkarna=sqrt($jupiterhyp3);



     //sighra correction

     $jupitersighracorr=$jupiterdohphala/$jupiterkarna;
     $jupitersighracorr1=asin($jupitersighracorr);
     $jupitersighracorrection=$jupitersighracorr1*180/3.14159265;



     $jupiterhalfsighracorrection=$jupitersighracorrection/2;

     //procedure 1

     if ($jupitersighrakendra<180) {
       # code...
         $jupiterp11=$jupiterfinaldeg+$jupiterhalfsighracorrection; //meanjupiter+halfsc
         if ($jupiterp11>360) {
           # code...
          $jupiterp1=$jupiterp11-360;


         }
         else{
          $jupiterp1=$jupiterp11;
         }
     }
     else{
      if ($jupiterfinaldeg<$jupiterhalfsighracorrection) {
        # code...
        $juu=$jupiterfinaldeg+360;
        $jupiterp1=$juu-$jupiterhalfsighracorrection; //more than 180

      }
      else{
        $jupiterp1=$jupiterfinaldeg-$jupiterhalfsighracorrection; //more than 180

      }

      
     }



     //procedure 2

    if ($jupitermandakendra<180) {
       # code...
       $jupiterp22=$jupiterp1+$jupiterhalfmandacorrection;
      // echo "p1";
       if ($jupiterp22>360) {
         # code...
        $jupiterp2=$jupiterp22-360;

       }
       else{
        $jupiterp2=$jupiterp22;
       }

     }
     else {
       # code... 
      if ($jupiterp1<$jupiterhalfmandacorrection) {
        # code...
        $jjup=$jupiterp1+360;
        $jupiterp2=$jjup-$jupiterhalfmandacorrection;
     // echo "p2";

      }
      else{
        $jupiterp2=$jupiterp1-$jupiterhalfmandacorrection;
     // echo "p2";
      }
      

     }

     
     
      
    

     //procedure 3 -  new manda kendra

     
     if ($jupitermandaucchavalue<$jupiterp2) {
       # code...
      $newadd=$jupitermandaucchavalue+360;
      $jupiternewmandakendra=$newadd-$jupiterp2;

     }
     else{

      $jupiternewmandakendra=$jupitermandaucchavalue-$jupiterp2;

     }



     $jupitersine1new=sin($jupiternewmandakendra*3.14159265/180); //finding sin



     if ($jupitersine1new<0) {
      # code...
      $jupitersinenew=-($jupitersine1new);
     }
     else{

       $jupitersinenew=$jupitersine1new;
     }

     //new pem

     $jupitersub1new=$jupiterpe-$jupiterp0;
     $jupitersub2new=$jupitersub1new*$jupitersinenew;
     $jupiterpemnew=$jupiterpe-$jupitersub2new;

     

     // new manda correction;

     $jupitermandacorrection1new=$jupiterpemnew*3438*$jupitersine1new;
     $jupitermandacorrectionnew=$jupitermandacorrection1new/360;
     $jupitermandacorrectionminnew=$jupitermandacorrectionnew/60;

     //echo "new mandacorrection=$jupitermandacorrectionminnew";

    
      $jupiterp33=$jupiterfinaldeg+$jupitermandacorrectionminnew;

      if ($jupiterp33>360) {
        # code...
        $jupiterp3=$jupiterp33-360;
      }
      else{
        $jupiterp3=$jupiterp33;
      }
     
     

     //procedure 4 (new sighra kendra)

     if ($finaldeg<$jupiterp3) {
       # code...
      $jfinaldeg=$finaldeg+360;

      $jupiternewsighrakendra=$jfinaldeg-$jupiterp3;

     }
     else{
       $jupiternewsighrakendra=$finaldeg-$jupiterp3;
     }



     //new sine and cos

     $jupitersine1sighranew=sin($jupiternewsighrakendra*3.14159265/180); //sine 

     $jupitercos1sighranew=cos($jupiternewsighrakendra*3.14159265/180); //cos

     //echo "$jupitercos1sighranew";




     if ($jupitersine1sighranew<0) {
      # code...
      $jupitersinesighranew=-($jupitersine1sighranew);
     }
     else{

       $jupitersinesighranew=$jupitersine1sighranew;
     }
     if ($jupitercos1sighranew<0) {
      # code...
      $jupitercossighranew=-($jupitercos1sighranew);
     }
     else{

       $jupitercossighranew=$jupitercos1sighranew;
     }




     // new pes formula

     $jupitersub11new=$jupitersighrape-$jupitersighrap0;
     $jupitersub22new=$jupitersub11new*$jupitersinesighranew; //no minus sign
     $jupiterpesnew=$jupitersighrape-$jupitersub22new;



     // new doh phala

     $jupiterdohphala1new=$jupiterpesnew*3438*$jupitersinesighranew;
     $jupiterdohphalanew=$jupiterdohphala1new/360;

     //new koti phala

     $jupiterkotiphala1new=$jupiterpesnew*3438*$jupitercossighranew;
     $jupiterkotiphalanew=$jupiterkotiphala1new/360;

     


     //new sphuta koti

     if ($jupiternewsighrakendra>=90 && $jupiternewsighrakendra<=270) {
       # code...
      $jupitersphutakotinew=3438-$jupiterkotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($jupiternewsighrakendra>=0 && $jupiternewsighrakendra<=90) {
       # code...
      $jupitersphutakotinew=3438+$jupiterkotiphalanew;
      //echo "quadrant1";


     }
     elseif ($jupiternewsighrakendra>=270 && $jupiternewsighrakendra<=360) {
       # code...

      $jupitersphutakotinew=3438+$jupiterkotiphalanew;
      //echo "quadrant4";
     }


     //new sighra karna hypotenuse

     $jupiterhyp1new=$jupiterdohphalanew*$jupiterdohphalanew;
     $jupiterhyp2new=$jupitersphutakotinew*$jupitersphutakotinew;
     $jupiterhyp3new=$jupiterhyp1new+$jupiterhyp2new;
     $jupiterkarnanew=sqrt($jupiterhyp3new);



     //new sighra correction

     $jupitersighracorrnew=$jupiterdohphalanew/$jupiterkarnanew;
     $jupitersighracorr1new=asin($jupitersighracorrnew);
     $jupitersighracorrectionnew=$jupitersighracorr1new*180/3.14159265;



     //p4

     if ($jupiternewsighrakendra>180) {
       # code...
      if ($jupiterp3<$jupitersighracorrectionnew) {
        # code...
        $jju=$jupiterp3+360;
        $jupiterp4=$jju-$jupitersighracorrectionnew;
      }
      else{
        $jupiterp4=$jupiterp3-$jupitersighracorrectionnew;
      }

        //more than 180
     }
     else{

      $jupiterp44=$jupiterp3+$jupitersighracorrectionnew;
      if ($jupiterp44>360) {
        # code...
        $jupiterp4=$jupiterp44-360;
      }
      else{
        $jupiterp4=$jupiterp44;
      }

     }


     //bhujantara correction

     $jupiterbhu= $mandacorrectionmin*$jupitermotion;
     $jupiterbhujantaracorrection=$jupiterbhu/360;

     //echo "$jupiterbhujantaracorrection";


     $jupitertruesun=$jupiterp4+$jupiterbhujantaracorrection;

     //echo "$jupitertruesun";

     $jupiteryy=(int)$jupitertruesun; //deg

     
     $jupiterz=$jupitertruesun-$jupiteryy;
     $jupiteraa=$jupiterz*60;
     $jupiterbb=(int)$jupiteraa; //min
     $jupitercc=$jupiteraa-$jupiterbb;
     $jupiterdd=$jupitercc*60;
     $jupiteree=(int)$jupiterdd; //sec
     $jupiterff=$jupiterdd-$jupiteree;
     $jupitergg=$jupiterff*60;
     $jupiterjj=sprintf('%0.2f',$jupitergg); //third


     if ($jupiteryy>360) {
      # code...
      $jupiterfinaldegvall=$jupiteryy-360;
     }
     else{
      $jupiterfinaldegvall=$jupiteryy;
     }

      $jupiterop= "$jupiterfinaldegvall °  $jupiterbb' $jupiteree'' $jupiterjj'''";

    echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF JUPITER IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$jupiterop."</font></p></h1>";

    

      //for staurn

       $saturnt=$s*146568; //constant 1
       $saturnu=$saturnt/1577917500; //constant 2
       $saturnv=(int)$saturnu;
       $saturnw=$saturnu-$saturnv;
       $saturnx=$saturnw*360;

 

 $saturndeg=285.35; //constant 3

  if ($saturndeg<$saturnx ) {
  # code...
  $saturnadd=$saturndeg+360;

  $saturny=$saturnadd-$saturnx;

  
 }
 else{

  $saturny=$saturndeg-$saturnx;
  
 }

 if ($saturny>360) {
      # code...
      $saturnfinaldegval=$saturny-360;

      
     }
     else{
      $saturnfinaldegval=$saturny;
      
     }

    

    
      
     
        $saturndiff=$ujjain-$longitude;
     



     
     $saturndiff1=-($saturndiff); //sign changed for below 4620

     $saturnangle=$saturnmotion*$saturndiff1;

     $saturnangledeg=$saturnangle/360; 



     $saturnfinaldege=$saturnfinaldegval+$saturnangledeg; //meansun value

     if ($saturnfinaldege>360) {
       # code...
      $saturnfinaldeg=$saturnfinaldege-360;
     }
     else{
      $saturnfinaldeg=$saturnfinaldege;
     }


     //manda calculation


     $saturna1=-($a);
     $saturnyearvalue=4620+$saturna1;
     $saturnmonth1=$month-1;
     $saturndate1=$date-1;
     $saturnmonthmul=$saturnmonth1*30.478;
     $saturndateadd=$saturnmonthmul+$saturndate1;
     $saturnyearvaluefinal=$saturndateadd/365.256; 
     $saturntotalyear=$saturnyearvalue-$saturnyearvaluefinal; //total years

     //manda uccha

     $saturnmandauccha=$saturntotalyear*360*39; //constant 6
     $saturnmandaucchafinal=$saturnmandauccha/4320000000; //constant 7

     //$jupitermandaucchavalue=173.1551-$jupitermandaucchafinal; //constant 5

     if ($saturnmandaucchafinal>235.963071) {
       # code...
      $saturnadddition=235.963071+360;
      $saturnmandaucchavalue=$saturnadddition-$saturnmandaucchafinal;
      //echo "op1";
     }
     else{
      $saturnmandaucchavalue=235.963071-$saturnmandaucchafinal;
      //echo "op2";
     }


     //manda kendra

     if ($saturnmandaucchavalue<$saturnfinaldeg) {
      # code...

      $saturnmandaucchavalue1=$saturnmandaucchavalue+360;

      $saturnmandakendra=$saturnmandaucchavalue1-$saturnfinaldeg;
     }
     else{
      $saturnmandakendra=$saturnmandaucchavalue-$saturnfinaldeg;
     }

     $saturnsine1=sin($saturnmandakendra*3.14159265/180); //finding sin
     
   
      if ($saturnsine1<0) {
        # code...
        $saturnsine=-($saturnsine1);
       }
       else{
        $saturnsine=$saturnsine1;
       }

     //pem formula

     $saturnsub1=$saturnpe-$saturnp0;
     $saturnsub2=$saturnsub1*$saturnsine;
     $saturnpem=$saturnpe-$saturnsub2;

     //sighra correction and sighrakendra

     //$jupitersighrakendra=$finaldeg-$jupiterfinaldeg; //meansun-meanjupiter add 360 step

     if ($finaldeg<$saturnfinaldeg) {
       # code...
      $satu=$finaldeg+360;
       $saturnsighrakendra=$satu-$saturnfinaldeg;

     }
     else{
       $saturnsighrakendra=$finaldeg-$saturnfinaldeg;
     }

     $saturnsine1sighra=sin($saturnsighrakendra*3.14159265/180); //sine 

     $saturncos1sighra=cos($saturnsighrakendra*3.14159265/180); //cos

     if ($saturnsine1sighra<0) {
      # code...
      $saturnsinesighra=-($saturnsine1sighra);
     }
     else{

       $saturnsinesighra=$saturnsine1sighra;
     }
     if ($saturncos1sighra<0) {
      # code...
      $saturncossighra=-($saturncos1sighra);
     }
     else{

       $saturncossighra=$saturncos1sighra;
     }




     //manda correction;

     $saturnmandacorrection1=$saturnpem*3438*$saturnsine;
     $saturnmandacorrection=$saturnmandacorrection1/360;
      $saturnmandacorrectionmin=$saturnmandacorrection/60;

      $saturnhalfmandacorrection=$saturnmandacorrectionmin/2;

      //pes formula

     $saturnsub11=$saturnsighrape-$saturnsighrap0;
     $saturnsub22=$saturnsub11*$saturnsinesighra;
     $saturnpes=$saturnsighrape-$saturnsub22;

     //doh phala

     $saturndohphala1=$saturnpes*3438*$saturnsinesighra;
     $saturndohphala=$saturndohphala1/360;

     //koti phala

     $saturnkotiphala1=$saturnpes*3438*$saturncossighra;
     $saturnkotiphala=$saturnkotiphala1/360;

     //sphuta koti

     if ($saturnsighrakendra>=90 && $saturnsighrakendra<=270) {
       # code...
      $saturnsphutakoti=3438-$saturnkotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($saturnsighrakendra>=0 && $saturnsighrakendra<=90) {
       # code...
      $saturnsphutakoti=3438+$saturnkotiphala;
      //echo "quadrant1";


     }
     elseif ($saturnsighrakendra>=270 && $saturnsighrakendra<=360) {
       # code...

      $saturnsphutakoti=3438+$saturnkotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $saturnhyp1=$saturndohphala*$saturndohphala;
     $saturnhyp2=$saturnsphutakoti*$saturnsphutakoti;
     $saturnhyp3=$saturnhyp1+$saturnhyp2;
     $saturnkarna=sqrt($saturnhyp3);

     //sighra correction

     $saturnsighracorr=$saturndohphala/$saturnkarna;
     $saturnsighracorr1=asin($saturnsighracorr);
     $saturnsighracorrection=$saturnsighracorr1*180/3.14159265;

     $saturnhalfsighracorrection=$saturnsighracorrection/2;

     //procedure 1

     if ($saturnsighrakendra<180) {
       # code...
         $saturnp11=$saturnfinaldeg+$saturnhalfsighracorrection; //meanjupiter+halfsc
         if ($saturnp11>360) {
           # code...
          $saturnp1=$saturnp11-360;
         }
         else{
          $saturnp1=$saturnp11;
         }
     }
     else{
      if ($saturnfinaldeg<$saturnhalfsighracorrection) {
        # code...
        $ssa=$saturnfinaldeg+360;
        $saturnp1=$ssa-$saturnhalfsighracorrection;
      }
      else{
        $saturnp1=$saturnfinaldeg-$saturnhalfsighracorrection;
      }

       //more than 180

     }

      //procedure 2

     if ($saturnmandakendra<180) {
       # code...
       $saturnp22=$saturnp1+$saturnhalfmandacorrection;
       if ($saturnp22>360) {
         # code...
        $saturnp2=$saturnp22-360;
       }
       else{
        $saturnp2=$saturnp22;
       }

     }
     else {
       # code... 
      if ($saturnp1<$saturnhalfmandacorrection) {
        # code...
        $saturna=$saturnp1+360;
         $saturnp2=$saturna-$saturnhalfmandacorrection;

      }
      else{
         $saturnp2=$saturnp1-$saturnhalfmandacorrection;
      }
     

     }

     //procedure 3 -  new manda kendra

     
     if ($saturnmandaucchavalue<$saturnp2) {
       # code...
      $satnewadd=$saturnmandaucchavalue+360;
      $saturnnewmandakendra=$satnewadd-$saturnp2;

     }
     else{

      $saturnnewmandakendra=$saturnmandaucchavalue-$saturnp2;

     }


     $saturnsine1new=sin($saturnnewmandakendra*3.14159265/180); //finding sin

     if ($saturnsine1new<0) {
      # code...
      $saturnsinenew=-($saturnsine1new);
     }
     else{

       $saturnsinenew=$saturnsine1new;
     }

     //new pem

     $saturnsub1new=$saturnpe-$saturnp0;
     $saturnsub2new=$saturnsub1new*$saturnsinenew;
     $saturnpemnew=$saturnpe-$saturnsub2new;
     

     // new manda correction;

     $saturnmandacorrection1new=$saturnpemnew*3438*$saturnsine1new;
     $saturnmandacorrectionnew=$saturnmandacorrection1new/360;
     $saturnmandacorrectionminnew=$saturnmandacorrectionnew/60;

    
      $saturnp33=$saturnfinaldeg+$saturnmandacorrectionminnew;

      if ($saturnp33>360) {
        # code...
        $saturnp3=$saturnp33-360;

      }
      else{
        $saturnp3=$saturnp33;
      }
     

     //procedure 4 (new sighra kendra)

     if ($finaldeg<$saturnp3) {
       # code...
      $sfinaldeg=$finaldeg+360;

      $saturnnewsighrakendra=$sfinaldeg-$saturnp3;

     }
     else{
       $saturnnewsighrakendra=$finaldeg-$saturnp3;
     }

     //new sine and cos

     $saturnsine1sighranew=sin($saturnnewsighrakendra*3.14159265/180); //sine 

     $saturncos1sighranew=cos($saturnnewsighrakendra*3.14159265/180); //cos

     if ($saturnsine1sighranew<0) {
      # code...
      $saturnsinesighranew=-($saturnsine1sighranew);
     }
     else{

       $saturnsinesighranew=$saturnsine1sighranew;
     }
     if ($saturncos1sighranew<0) {
      # code...
      $saturncossighranew=-($saturncos1sighranew);
     }
     else{

       $saturncossighranew=$saturncos1sighranew;
     }




     // new pes formula

     $saturnsub11new=$saturnsighrape-$saturnsighrap0;
     $saturnsub22new=$saturnsub11new*$saturnsinesighranew; //no minus sign
     $saturnpesnew=$saturnsighrape-$saturnsub22new;

     // new doh phala

     $saturndohphala1new=$saturnpesnew*3438*$saturnsinesighranew;
     $saturndohphalanew=$saturndohphala1new/360;

     //new koti phala

     $saturnkotiphala1new=$saturnpesnew*3438*$saturncossighranew;
     $saturnkotiphalanew=$saturnkotiphala1new/360;

     //new sphuta koti

     if ($saturnnewsighrakendra>=90 && $saturnnewsighrakendra<=270) {
       # code...
      $saturnsphutakotinew=3438-$saturnkotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($saturnnewsighrakendra>=0 && $saturnnewsighrakendra<=90) {
       # code...
      $saturnsphutakotinew=3438+$saturnkotiphalanew;
      //echo "quadrant1";


     }
     elseif ($saturnnewsighrakendra>=270 && $saturnnewsighrakendra<=360) {
       # code...

      $saturnsphutakotinew=3438+$saturnkotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $saturnhyp1new=$saturndohphalanew*$saturndohphalanew;
     $saturnhyp2new=$saturnsphutakotinew*$saturnsphutakotinew;
     $saturnhyp3new=$saturnhyp1new+$saturnhyp2new;
     $saturnkarnanew=sqrt($saturnhyp3new);

     //new sighra correction

     $saturnsighracorrnew=$saturndohphalanew/$saturnkarnanew;
     $saturnsighracorr1new=asin($saturnsighracorrnew);
     $saturnsighracorrectionnew=$saturnsighracorr1new*180/3.14159265;

     //p4

     if ($saturnnewsighrakendra>180) {
       # code...
      if ($saturnp3<$saturnsighracorrectionnew) {
        # code...
        $satuu=$saturnp3+360;
        $saturnp4=$satuu-$saturnsighracorrectionnew;
      }
     else{
      $saturnp4=$saturnp3-$saturnsighracorrectionnew;
     }

        //more than 180
     }
     else{

      $saturnp44=$saturnp3+$saturnsighracorrectionnew;
      if ($saturnp44>360) {
        # code...
        $saturnp4=$saturnp44-360;
      }
      else{
        $saturnp4=$saturnp44;
      }

     }


     

     //bhujantara correction

     $saturnbhu= $mandacorrectionmin*$saturnmotion;
     $saturnbhujantaracorrection=$saturnbhu/360;



     $saturntruesun=$saturnp4+$saturnbhujantaracorrection;

     $saturnyy=(int)$saturntruesun; //deg

     
     $saturnz=$saturntruesun-$saturnyy;
     $saturnaa=$saturnz*60;
     $saturnbb=(int)$saturnaa; //min
     $saturncc=$saturnaa-$saturnbb;
     $saturndd=$saturncc*60;
     $saturnee=(int)$saturndd; //sec
     $saturnff=$saturndd-$saturnee;
     $saturngg=$saturnff*60;
     $saturnjj=sprintf('%0.2f',$saturngg); //third


     if ($saturnyy>360) {
      # code...
      $saturnfinaldegvall=$saturnyy-360;
     }
     else{
      $saturnfinaldegvall=$saturnyy;
     }

      $saturnop= "$saturnfinaldegvall °  $saturnbb' $saturnee'' $saturnjj'''";

    echo "<br/>";

    echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF SATURN IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$saturnop."</font></p></h1>";

      

      //for mars

       $marst=$s*2296828; //constant 1
       $marsu=$marst/1577917500; //constant 2
       $marsv=(int)$marsu;
       $marsw=$marsu-$marsv;
       $marsx=$marsw*360;

 

 $marsdeg=307.13333; //constant 3

  if ($marsdeg<$marsx ) {
  # code...
  $marsadd=$marsdeg+360;

  $marsy=$marsadd-$marsx;

  
 }
 else{

  $marsy=$marsdeg-$marsx;
  
 }

 if ($marsy>360) {
      # code...
      $marsfinaldegval=$marsy-360;

      
     }
     else{
      $marsfinaldegval=$marsy;
      
     }

    

    
      
    
        $marsdiff=$ujjain-$longitude;
      


     
     $marsdiff1=-($marsdiff); //sign changed for below 4620

     $marsangle=$marsmotion*$marsdiff1;

     $marsangledeg=$marsangle/360;    

     $marsfinaldege=$marsfinaldegval+$marsangledeg; //meansun value

     if ($marsfinaldege>360) {
       # code...
      $marsfinaldeg=$marsfinaldege-360;
     }
     else{
      $marsfinaldeg=$marsfinaldege;
     }


     //manda calculation


     $marsa1=-($a);
     $marsyearvalue=4620+$marsa1;
     $marsmonth1=$month-1;
     $marsdate1=$date-1;
     $marsmonthmul=$marsmonth1*30.478;
     $marsdateadd=$marsmonthmul+$marsdate1;
     $marsyearvaluefinal=$marsdateadd/365.256; 
     $marstotalyear=$marsyearvalue-$marsyearvaluefinal; //total years

     //manda uccha

     $marsmandauccha=$marstotalyear*360*204; //constant 6
     $marsmandaucchafinal=$marsmandauccha/4320000000; //constant 7

     //$jupitermandaucchavalue=173.1551-$jupitermandaucchafinal; //constant 5

     if ($marsmandaucchafinal>128.92576) {
       # code...
      $marsadddition=128.92576+360;
      $marsmandaucchavalue=$marsadddition-$marsmandaucchafinal;
      //echo "op1";
     }
     else{
      $marsmandaucchavalue=128.92576-$marsmandaucchafinal;
      //echo "op2";
     }


     //manda kendra

     if ($marsmandaucchavalue<$marsfinaldeg) {
      # code...

      $marsmandaucchavalue1=$marsmandaucchavalue+360;

      $marsmandakendra=$marsmandaucchavalue1-$marsfinaldeg;
     }
     else{
      $marsmandakendra=$marsmandaucchavalue-$marsfinaldeg;
     }

     $marssine1=sin($marsmandakendra*3.14159265/180); //finding sin
     
   
      if ($marssine1<0) {
        # code...
        $marssine=-($marssine1);
       }
       else{
        $marssine=$marssine1;
       }

     //pem formula

     $marssub1=$marspe-$marsp0;
     $marssub2=$marssub1*$marssine;
     $marspem=$marspe-$marssub2;

     //sighra correction and sighrakendra

     //$jupitersighrakendra=$finaldeg-$jupiterfinaldeg; //meansun-meanjupiter add 360 step

     if ($finaldeg<$marsfinaldeg) {
       # code...
      $satu1=$finaldeg+360;
       $marssighrakendra=$satu1-$marsfinaldeg;

     }
     else{
       $marssighrakendra=$finaldeg-$marsfinaldeg;
     }

     $marssine1sighra=sin($marssighrakendra*3.14159265/180); //sine 

     $marscos1sighra=cos($marssighrakendra*3.14159265/180); //cos

     if ($marssine1sighra<0) {
      # code...
      $marssinesighra=-($marssine1sighra);
     }
     else{

       $marssinesighra=$marssine1sighra;
     }
     if ($marscos1sighra<0) {
      # code...
      $marscossighra=-($marscos1sighra);
     }
     else{

       $marscossighra=$marscos1sighra;
     }




     //manda correction;

     $marsmandacorrection1=$marspem*3438*$marssine;
     $marsmandacorrection=$marsmandacorrection1/360;
     $marsmandacorrectionmin=$marsmandacorrection/60;

     $marshalfmandacorrection=$marsmandacorrectionmin/2;

      //pes formula

     $marssub11=$marssighrape-$marssighrap0;
     $marssub22=$marssub11*$marssinesighra;
     $marspes=$marssighrape-$marssub22;

     //doh phala

     $marsdohphala1=$marspes*3438*$marssinesighra;
     $marsdohphala=$marsdohphala1/360;

     //koti phala

     $marskotiphala1=$marspes*3438*$marscossighra;
     $marskotiphala=$marskotiphala1/360;

     //sphuta koti

     if ($marssighrakendra>=90 && $marssighrakendra<=270) {
       # code...
      $marssphutakoti=3438-$marskotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($marssighrakendra>=0 && $marssighrakendra<=90) {
       # code...
      $marssphutakoti=3438+$marskotiphala;
      //echo "quadrant1";


     }
     elseif ($marssighrakendra>=270 && $marssighrakendra<=360) {
       # code...

      $marssphutakoti=3438+$marskotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $marshyp1=$marsdohphala*$marsdohphala;
     $marshyp2=$marssphutakoti*$marssphutakoti;
     $marshyp3=$marshyp1+$marshyp2;
     $marskarna=sqrt($marshyp3);

     //sighra correction

     $marssighracorr=$marsdohphala/$marskarna;
     $marssighracorr1=asin($marssighracorr);
     $marssighracorrection=$marssighracorr1*180/3.14159265;

     $marshalfsighracorrection=$marssighracorrection/2;

     //procedure 1

     if ($marssighrakendra<180) {
       # code...
         $marsp11=$marsfinaldeg+$marshalfsighracorrection; //meanjupiter+halfsc
         if ($marsp11>360) {
           # code...
          $marsp1=$marsp11-360;
         }
         else{
          $marsp1=$marsp11;
         }
     }
     else{
      if ($marsfinaldeg<$marshalfsighracorrection) {
        # code...
        $maasf=$marsfinaldeg+360;
        $marsp1=$maasf-$marshalfsighracorrection; 
      }
      else{
        $marsp1=$marsfinaldeg-$marshalfsighracorrection; 
      }

      //more than 180

     }

      //procedure 2

     if ($marsmandakendra<180) {
       # code...
       $marsp22=$marsp1+$marshalfmandacorrection;
       if ($marsp22>360) {
         # code...
        $marsp2=$marsp22-360;
       }
       else{
        $marsp2=$marsp22;
       }

     }
     else {
       # code... 
      if ($marsp1<$marshalfmandacorrection) {
        # code...
        $massff=$marsp1+360;
         $marsp2=$massff-$marshalfmandacorrection;
      }
      else{
         $marsp2=$marsp1-$marshalfmandacorrection;
      }
     

     }

     //procedure 3 -  new manda kendra

     
     if ($marsmandaucchavalue<$marsp2) {
       # code...
      $marnewadd=$marsmandaucchavalue+360;
      $marsnewmandakendra=$marnewadd-$marsp2;

     }
     else{

      $marsnewmandakendra=$marsmandaucchavalue-$marsp2;

     }


     $marssine1new=sin($marsnewmandakendra*3.14159265/180); //finding sin

     if ($marssine1new<0) {
      # code...
      $marssinenew=-($marssine1new);
     }
     else{

       $marssinenew=$marssine1new;
     }

     //new pem

     $marssub1new=$marspe-$marsp0;
     $marssub2new=$marssub1new*$marssinenew;
     $marspemnew=$marspe-$marssub2new;
     

     // new manda correction;

     $marsmandacorrection1new=$marspemnew*3438*$marssine1new;
     $marsmandacorrectionnew=$marsmandacorrection1new/360;
     $marsmandacorrectionminnew=$marsmandacorrectionnew/60;

    
      $marsp3=$marsfinaldeg+$marsmandacorrectionminnew;
     

     //procedure 4 (new sighra kendra)

     if ($finaldeg<$marsp3) {
       # code...
      $smfinaldeg=$finaldeg+360;

      $marsnewsighrakendra=$smfinaldeg-$marsp3;

     }
     else{
       $marsnewsighrakendra=$finaldeg-$marsp3;
     }

     //new sine and cos

     $marssine1sighranew=sin($marsnewsighrakendra*3.14159265/180); //sine 

     $marscos1sighranew=cos($marsnewsighrakendra*3.14159265/180); //cos

     if ($marssine1sighranew<0) {
      # code...
      $marssinesighranew=-($marssine1sighranew);
     }
     else{

       $marssinesighranew=$marssine1sighranew;
     }
     if ($marscos1sighranew<0) {
      # code...
      $marscossighranew=-($marscos1sighranew);
     }
     else{

       $marscossighranew=$marscos1sighranew;
     }




     // new pes formula

     $marssub11new=$marssighrape-$marssighrap0;
     $marssub22new=$marssub11new*$marssinesighranew; //no minus sign
     $marspesnew=$marssighrape-$marssub22new;

     // new doh phala

     $marsdohphala1new=$marspesnew*3438*$marssinesighranew;
     $marsdohphalanew=$marsdohphala1new/360;

     //new koti phala

     $marskotiphala1new=$marspesnew*3438*$marscossighranew;
     $marskotiphalanew=$marskotiphala1new/360;

     //new sphuta koti

     if ($marsnewsighrakendra>=90 && $marsnewsighrakendra<=270) {
       # code...
      $marssphutakotinew=3438-$marskotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($marsnewsighrakendra>=0 && $marsnewsighrakendra<=90) {
       # code...
      $marssphutakotinew=3438+$marskotiphalanew;
      //echo "quadrant1";


     }
     elseif ($marsnewsighrakendra>=270 && $marsnewsighrakendra<=360) {
       # code...

      $marssphutakotinew=3438+$marskotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $marshyp1new=$marsdohphalanew*$marsdohphalanew;
     $marshyp2new=$marssphutakotinew*$marssphutakotinew;
     $marshyp3new=$marshyp1new+$marshyp2new;
     $marskarnanew=sqrt($marshyp3new);

     //new sighra correction

     $marssighracorrnew=$marsdohphalanew/$marskarnanew;
     $marssighracorr1new=asin($marssighracorrnew);
     $marssighracorrectionnew=$marssighracorr1new*180/3.14159265;

     //p4

     if ($marsnewsighrakendra>180) {
       # code...
      if ($marsp3<$marssighracorrectionnew) {
        # code...
        $marssd=$marsp3+360;
        $marsp4=$marssd-$marssighracorrectionnew;

      }
      else{
        $marsp4=$marsp3-$marssighracorrectionnew;
      }

        //more than 180
     }
     else{

      $marsp44=$marsp3+$marssighracorrectionnew;
      if ($marsp44>360) {
        # code...
        $marsp4=$marsp44-360;
      }
      else{
        $marsp4=$marsp44;
      }

     }


     //true mean sun


     //bhujantara correction

     $marsbhu= $mandacorrectionmin*$marsmotion;
     $marsbhujantaracorrection=$marsbhu/360;


     $marstruesun=$marsp4+$marsbhujantaracorrection;

     $marsyy=(int)$marstruesun; //deg

     
     $marsz=$marstruesun-$marsyy;
     $marsaa=$marsz*60;
     $marsbb=(int)$marsaa; //min
     $marscc=$marsaa-$marsbb;
     $marsdd=$marscc*60;
     $marsee=(int)$marsdd; //sec
     $marsff=$marsdd-$marsee;
     $marsgg=$marsff*60;
     $marsjj=sprintf('%0.2f',$marsgg); //third


     if ($marsyy>360) {
      # code...
      $marsfinaldegvall=$marsyy-360;
     }
     else{
      $marsfinaldegvall=$marsyy;
     }

      $marsop= "$marsfinaldegvall °  $marsbb' $marsee'' $marsjj'''";

    echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF MARS IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$marsop."</font></p></h1>";


      //for venus

     $venust=$s*2702376; //constant1
     $venusu=$venust/1577917500; //constant2
     $venusv=(int)$venusu;
     $venusw=$venusu-$venusv;
     $venusx=$venusw*360;




 

 //dessantra correction for true mean venus 2
    $venusdeg=230.15; // constant3

  if ($venusdeg<$venusx ) {
  # code...
  $venusadd=$venusdeg+360;

  $venusy=$venusadd-$venusx;

  
 }
 else{

  $venusy=$venusdeg-$venusx;
  
 }






 if ($venusy>360) {
      # code...
      $venusfinaldegval=$venusy-360;

      
     }
     else{
      $venusfinaldegval=$venusy;
      
     }


     //manda calculation


     $venusa1=-($a);
     $venusyearvalue=4620+$venusa1;
     $venusmonth1=$month-1;
     $venusdate1=$date-1;
     $venusmonthmul=$venusmonth1*30.478;
     $venusdateadd=$venusmonthmul+$venusdate1;
     $venusyearvaluefinal=$venusdateadd/365.256; 
     $venustotalyear=$venusyearvalue-$venusyearvaluefinal; //total years



    //manda uccha

     $venusmandauccha=$venustotalyear*360*535; //constant 6
     $venusmandaucchafinal=$venusmandauccha/4320000000; //constant 7




     if ($venusmandaucchafinal>80.2631972) {
       # code...
      $venusadddition=80.2631972+360;
      $venusmandaucchavalue=$venusadddition-$venusmandaucchafinal;
      //echo "op1";
     }
     else{
      $venusmandaucchavalue=80.2631972-$venusmandaucchafinal; //manda uccha value
      //echo "op2";
     }

    

      //sighra correction and sighrakendra

     //meansun-meanjupiter add 360 step

    
       $venussighrakendra=$venusfinaldegval;
    
      

     $venussine1sighra=sin($venussighrakendra*3.14159265/180); //sine 

     $venuscos1sighra=cos($venussighrakendra*3.14159265/180); //cos



     if ($venussine1sighra<0) {
      # code...
      $venussinesighra=-($venussine1sighra);
     }
     else{

       $venussinesighra=$venussine1sighra;
     }
     if ($venuscos1sighra<0) {
      # code...
      $venuscossighra=-($venuscos1sighra);
     }
     else{

       $venuscossighra=$venuscos1sighra;
     }


     //pes formula

     $venussub11=$venussighrape-$venussighrap0;
     $venussub22=$venussub11*$venussinesighra;
     $venuspes=$venussighrape-$venussub22;


     //doh phala

     $venusdohphala1=$venuspes*3438*$venussinesighra;
     $venusdohphala=$venusdohphala1/360;


     //koti phala

     $venuskotiphala1=$venuspes*3438*$venuscossighra;
     $venuskotiphala=$venuskotiphala1/360;


     //sphuta koti

     if ($venussighrakendra>=90 && $venussighrakendra<=270) {
       # code...
      $venussphutakoti=3438-$venuskotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($venussighrakendra>=0 && $venussighrakendra<=90) {
       # code...
      $venussphutakoti=3438+$venuskotiphala;
      //echo "quadrant1";


     }
     elseif ($venussighrakendra>=270 && $venussighrakendra<=360) {
       # code...

      $venussphutakoti=3438+$venuskotiphala;
      //echo "quadrant4";
     }

     

     //sighra karna hypotenuse

     $venushyp1=$venusdohphala*$venusdohphala;
     $venushyp2=$venussphutakoti*$venussphutakoti;
     $venushyp3=$venushyp1+$venushyp2;
     $venuskarna=sqrt($venushyp3);


     //sighra correction

     $venussighracorr=$venusdohphala/$venuskarna;
     $venussighracorr1=asin($venussighracorr);
     $venussighracorrection=$venussighracorr1*180/3.14159265;



     $venushalfsighracorrection=$venussighracorrection/2;

     //new manda uccha value condition must
     if ($venussighrakendra>180) {
       # code...
      $venusnewmandauccha=$venusmandaucchavalue+$venushalfsighracorrection; 

     }
     else{
      $venusnewmandauccha=$venusmandaucchavalue-$venushalfsighracorrection; 


     }

         

     // manda kendra

     if ($finaldegval<$venusnewmandauccha) {
       # code...
      $finaldegval1=$finaldegval+360;
      $venusmandakendra=$finaldegval1-$venusnewmandauccha;
     }
     else{
      $venusmandakendra=$finaldegval-$venusnewmandauccha;
     }




      $venussine1=sin($venusmandakendra*3.14159265/180); //finding sin

     if ($venussine1<0) {
      # code...
      $venussine=-($venussine1);
     }
     else{

       $venussine=$venussine1;
     }
     
   
     //echo "$venussine1";

     //pem formula

     $venussub1=$venuspe-$venusp0;
     $venussub2=$venussub1*$venussine;
     $venuspem=$venuspe-$venussub2;


     //manda correction;

     $venusmandacorrection1=$venuspem*3438*$venussine;
     $venusmandacorrection=$venusmandacorrection1/360;
     $venusmandacorrectionmin=$venusmandacorrection/60;



     //true mean venus  condition must

     if ($venusmandakendra>180) {
      # code...

      $venustruemean=$finaldegval+$venusmandacorrectionmin; 
      //the value will be in minus so + to subtract
     }

     else{

      $venustruemean=$finaldegval-$venusmandacorrectionmin;

     }
     

     //venus sighra uccha

     $venussighrauccha1=$venussighrakendra+$finaldegval;


     if ($venussighrauccha1>360) {
      # code...
      $venussighrauccha=$venussighrauccha1-360;
     }
     else{
      $venussighrauccha=$venussighrauccha1;
     }

     //new sighra kendra

     
     if ($venussighrauccha<$venustruemean) {
      # code...
      $venusaddneww=$venussighrauccha+360;
      $venusnewsighrakendra=$venusaddneww-$venustruemean;

     }
     else{
      $venusnewsighrakendra=$venussighrauccha-$venustruemean;
     }


     //new sine and cos

     $venussine1sighranew=sin($venusnewsighrakendra*3.14159265/180); //sine 

     $venuscos1sighranew=cos($venusnewsighrakendra*3.14159265/180); //cos

     if ($venussine1sighranew<0) {
      # code...
      $venussinesighranew=-($venussine1sighranew);
     }
     else{

       $venussinesighranew=$venussine1sighranew;
     }
     if ($venuscos1sighranew<0) {
      # code...
      $venuscossighranew=-($venuscos1sighranew);
     }
     else{

       $venuscossighranew=$venuscos1sighranew;
     }





     // new pes formula

     $venussub11new=$venussighrape-$venussighrap0;
     $venussub22new=$venussub11new*$venussinesighranew; //no minus sign
     $venuspesnew=$venussighrape-$venussub22new;



     // new doh phala

     $venusdohphala1new=$venuspesnew*3438*$venussinesighranew;
     $venusdohphalanew=$venusdohphala1new/360;



     //new koti phala

     $venuskotiphala1new=$venuspesnew*3438*$venuscossighranew;
     $venuskotiphalanew=$venuskotiphala1new/360;



     //new sphuta koti

     if ($venusnewsighrakendra>=90 && $venusnewsighrakendra<=270) {
       # code...
      $venussphutakotinew=3438-$venuskotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($venusnewsighrakendra>=0 && $venusnewsighrakendra<=90) {
       # code...
      $venussphutakotinew=3438+$venuskotiphalanew;
      //echo "quadrant1";


     }
     elseif ($venusnewsighrakendra>=270 && $venusnewsighrakendra<=360) {
       # code...

      $venussphutakotinew=3438+$venuskotiphalanew;
      //echo "quadrant4";
     }

  

     //new sighra karna hypotenuse

     $venushyp1new=$venusdohphalanew*$venusdohphalanew;
     $venushyp2new=$venussphutakotinew*$venussphutakotinew;
     $venushyp3new=$venushyp1new+$venushyp2new;
     $venuskarnanew=sqrt($venushyp3new);



     //new sighra correction

     $venussighracorrnew=$venusdohphalanew/$venuskarnanew;
     $venussighracorr1new=asin($venussighracorrnew);
     $venussighracorrectionnew=$venussighracorr1new*180/3.14159265;

     
     //true mean venus 1 consition must
 if ($venusnewsighrakendra>180) {
      # code...

      if ($venustruemean<$venussighracorrectionnew) {
        # code...
        $venustruemeanadd=$venustruemean+360;
        $venustruemean1=$venustruemeanadd-$venussighracorrectionnew;
     }
     else
     {
      $venustruemean1=$venustruemean-$venussighracorrectionnew;
     }
     }
     

     else{

      $venustruemean1=$venustruemean+$venussighracorrectionnew;
    }

    
     //echo "===========$venustruemean1";
     

    
if ($ujjain<$longitude) {
        # code...
        $ujjainadd=$ujjain+360;
        $venusdiff=$ujjainadd-$longitude;
      }
      else{
        $venusdiff=$ujjain-$longitude;
      }
;

     
     $venusdiff1=-($venusdiff); //sign changed for below 4620

     $venusangle=$venusmotion*$venusdiff1;

     $venusangledeg=$venusangle/360; 




     $venustruemean2=$venustruemean1+$venusangledeg; //meanjupiter value


      //bhujantara correction

     $venusbhu= $mandacorrectionmin*$venusmotion;
     $venusbhujantaracorrection=$venusbhu/360;



     $venustruesun=$venustruemean2+$venusbhujantaracorrection;


     $venusyy=(int)$venustruesun; //deg

     
     $venusz=$venustruesun-$venusyy;
     $venusaa=$venusz*60;
     $venusbb=(int)$venusaa; //min
     $venuscc=$venusaa-$venusbb;
     $venusdd=$venuscc*60;
     $venusee=(int)$venusdd; //sec
     $venusff=$venusdd-$venusee;
     $venusgg=$venusff*60;
     $venusjj=sprintf('%0.2f',$venusgg); //third


     if ($venusyy>360) {
      # code...
      $venusfinaldegvall=$venusyy-360;
     }
     else{
      $venusfinaldegvall=$venusyy;
     }



      $venusop= "$venusfinaldegvall °  $venusbb' $venusee'' $venusjj'''";   

      echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF VENUS IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$venusop."</font></p></h1>";

    


      //for mercury

        $mercuryt=$s*13617060; //constant1
     $mercuryu=$mercuryt/1577917500; //constant2
     $mercuryv=(int)$mercuryu;
     $mercuryw=$mercuryu-$mercuryv;
     $mercuryx=$mercuryw*360;


 //dessantra correction for true mean venus 2
    $mercurydeg=269.55; // constant3

  if ($mercurydeg<$mercuryx ) {
  # code...
  $mercuryadd=$mercurydeg+360;

  $mercuryy=$mercuryadd-$mercuryx;

  
 }
 else{

  $mercuryy=$mercurydeg-$mercuryx;
  
 }


 if ($mercuryy>360) {
      # code...
      $mercuryfinaldegval=$mercuryy-360;

      
     }
     else{
      $mercuryfinaldegval=$mercuryy;
      
     }



     //manda calculation


     $mercurya1=-($a);
     $mercuryyearvalue=4620+$mercurya1;
     $mercurymonth1=$month-1;
     $mercurydate1=$date-1;
     $mercurymonthmul=$mercurymonth1*30.478;
     $mercurydateadd=$mercurymonthmul+$mercurydate1;
     $mercuryyearvaluefinal=$mercurydateadd/365.256; 
     $mercurytotalyear=$mercuryyearvalue-$mercuryyearvaluefinal; //total years
     


    
    //manda uccha

     $mercurymandauccha=$mercurytotalyear*360*368; //constant 6
     $mercurymandaucchafinal=$mercurymandauccha/4320000000; //constant 7



     if ($mercurymandaucchafinal>226.85668) {
       # code...
      $mercuryadddition=226.85668+360;
      $mercurymandaucchavalue=$mercuryadddition-$mercurymandaucchafinal;
      //echo "op1";
     }
     else{
      $mercurymandaucchavalue=226.85668-$mercurymandaucchafinal; //manda uccha value
      //echo "op2";
     }

      //sighra correction and sighrakendra

       $mercurysighrakendra=$mercuryfinaldegval;


     $mercurysine1sighra=sin($mercurysighrakendra*3.14159265/180); //sine 

     $mercurycos1sighra=cos($mercurysighrakendra*3.14159265/180); //cos

     


     if ($mercurysine1sighra<0) {
      # code...
      $mercurysinesighra=-($mercurysine1sighra);
     }
     else{

       $mercurysinesighra=$mercurysine1sighra;
     }
     if ($mercurycos1sighra<0) {
      # code...
      $mercurycossighra=-($mercurycos1sighra);
     }
     else{

       $mercurycossighra=$mercurycos1sighra;
     }


     //pes formula

     $mercurysub11=$mercurysighrape-$mercurysighrap0;
     $mercurysub22=$mercurysub11*$mercurysinesighra;
     $mercurypes=$mercurysighrape-$mercurysub22;


     //doh phala

     $mercurydohphala1=$mercurypes*3438*$mercurysinesighra;
     $mercurydohphala=$mercurydohphala1/360;

     //koti phala

     $mercurykotiphala1=$mercurypes*3438*$mercurycossighra;
     $mercurykotiphala=$mercurykotiphala1/360;

     //sphuta koti

     if ($mercurysighrakendra>=90 && $mercurysighrakendra<=270) {
       # code...
      $mercurysphutakoti=3438-$mercurykotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($mercurysighrakendra>=0 && $mercurysighrakendra<=90) {
       # code...
      $mercurysphutakoti=3438+$mercurykotiphala;
      //echo "quadrant1";


     }
     elseif ($mercurysighrakendra>=270 && $mercurysighrakendra<=360) {
       # code...

      $mercurysphutakoti=3438+$mercurykotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $mercuryhyp1=$mercurydohphala*$mercurydohphala;
     $mercuryhyp2=$mercurysphutakoti*$mercurysphutakoti;
     $mercuryhyp3=$mercuryhyp1+$mercuryhyp2;
     $mercurykarna=sqrt($mercuryhyp3);


     //sighra correction

     $mercurysighracorr=$mercurydohphala/$mercurykarna;
     $mercurysighracorr1=asin($mercurysighracorr);
     $mercurysighracorrection=$mercurysighracorr1*180/3.14159265;

     $mercuryhalfsighracorrection=$mercurysighracorrection/2;

     //new manda uccha value condition must
     if ($mercurysighrakendra>180) {
       # code...
      $mercurynewmandauccha=$mercurymandaucchavalue+$mercuryhalfsighracorrection; 

     }
     else{
      $mercurynewmandauccha=$mercurymandaucchavalue-$mercuryhalfsighracorrection; 


     }



     // manda kendra

     if ($finaldegval<$mercurynewmandauccha) {
       # code...
      $finaldegval1=$finaldegval+360;
      $mercurymandakendra=$finaldegval1-$mercurynewmandauccha;
     }
     else{
      $mercurymandakendra=$finaldegval-$mercurynewmandauccha;
     }

      $mercurysine1=sin($mercurymandakendra*3.14159265/180); //finding sin

     if ($mercurysine1<0) {
      # code...
      $mercurysine=-($mercurysine1);
     }
     else{

       $mercurysine=$mercurysine1;
     }
     
   
     //echo "$sine";

     //pem formula

     $mercurysub1=$mercurype-$mercuryp0;
     $mercurysub2=$mercurysub1*$mercurysine;
     $mercurypem=$mercurype-$mercurysub2;

     //manda correction;

     $mercurymandacorrection1=$mercurypem*3438*$mercurysine;
     $mercurymandacorrection=$mercurymandacorrection1/360;
     $mercurymandacorrectionmin=$mercurymandacorrection/60;

     //true mean venus  condition must

     if ($mercurymandakendra>180) {
      # code...

      $mercurytruemean=$finaldegval+$mercurymandacorrectionmin; 
      //the value will be in minus so + to subtract
     }

     else{

      $mercurytruemean=$finaldegval-$mercurymandacorrectionmin;

     }
    
     //venus sighra uccha

     $mercurysighrauccha1=$mercurysighrakendra+$finaldegval;

     if ($mercurysighrauccha1>360) {
      # code...
      $mercurysighrauccha=$mercurysighrauccha1-360;
     }
     else{
      $mercurysighrauccha=$mercurysighrauccha1;
     }

     //new sighra kendra

     
     if ($mercurysighrauccha<$mercurytruemean) {
      # code...
      $mercuryaddneww=$mercurysighrauccha+360;
      $mercurynewsighrakendra=$mercuryaddneww-$mercurytruemean;

     }
     else{
      $mercurynewsighrakendra=$mercurysighrauccha-$mercurytruemean;
     }

     //new sine and cos

     $mercurysine1sighranew=sin($mercurynewsighrakendra*3.14159265/180); //sine 

     $mercurycos1sighranew=cos($mercurynewsighrakendra*3.14159265/180); //cos

     if ($mercurysine1sighranew<0) {
      # code...
      $mercurysinesighranew=-($mercurysine1sighranew);
     }
     else{

       $mercurysinesighranew=$mercurysine1sighranew;
     }
     if ($mercurycos1sighranew<0) {
      # code...
      $mercurycossighranew=-($mercurycos1sighranew);
     }
     else{

       $mercurycossighranew=$mercurycos1sighranew;
     }




     // new pes formula

     $mercurysub11new=$mercurysighrape-$mercurysighrap0;
     $mercurysub22new=$mercurysub11new*$mercurysinesighranew; //no minus sign
     $mercurypesnew=$mercurysighrape-$mercurysub22new;

     // new doh phala

     $mercurydohphala1new=$mercurypesnew*3438*$mercurysinesighranew;
     $mercurydohphalanew=$mercurydohphala1new/360;

     //new koti phala

     $mercurykotiphala1new=$mercurypesnew*3438*$mercurycossighranew;
     $mercurykotiphalanew=$mercurykotiphala1new/360;

     //new sphuta koti

     if ($mercurynewsighrakendra>=90 && $mercurynewsighrakendra<=270) {
       # code...
      $mercurysphutakotinew=3438-$mercurykotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($mercurynewsighrakendra>=0 && $mercurynewsighrakendra<=90) {
       # code...
      $mercurysphutakotinew=3438+$mercurykotiphalanew;
      //echo "quadrant1";


     }
     elseif ($mercurynewsighrakendra>=270 && $mercurynewsighrakendra<=360) {
       # code...

      $mercurysphutakotinew=3438+$mercurykotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $mercuryhyp1new=$mercurydohphalanew*$mercurydohphalanew;
     $mercuryhyp2new=$mercurysphutakotinew*$mercurysphutakotinew;
     $mercuryhyp3new=$mercuryhyp1new+$mercuryhyp2new;
     $mercurykarnanew=sqrt($mercuryhyp3new);

     //new sighra correction

     $mercurysighracorrnew=$mercurydohphalanew/$mercurykarnanew;
     $mercurysighracorr1new=asin($mercurysighracorrnew);
     $mercurysighracorrectionnew=$mercurysighracorr1new*180/3.14159265;

     
     //true mean venus 1 consition must

    if ($mercurynewsighrakendra>180) {
      # code...
        if ($mercurytruemean<$mercurysighracorrectionnew) {
        # code...
        $mercurytruemeanadd=$mercurytruemean+360;
        $mercurytruemean1=$mercurytruemeanadd-$mercurysighracorrectionnew;
     }
     else{
      $mercurytruemean1=$mercurytruemean-$mercurysighracorrectionnew;
     }

     }

      

     else{

      $mercurytruemean1=$mercurytruemean+$mercurysighracorrectionnew;
    }
    

    

    
     if ($ujjain<$longitude) {
        # code...
        $ujjainadd=$ujjain+360;
        $mercurydiff=$ujjainadd-$longitude;
      }
      else{
        $mercurydiff=$ujjain-$longitude;
      }


     
     $mercurydiff1=-($mercurydiff); //sign changed for below 4620

     $mercuryangle=$mercurymotion*$mercurydiff1;

     $mercuryangledeg=$mercuryangle/360;    


     $mercurytruemean2=$mercurytruemean1+$mercuryangledeg; //meanjupiter value

      //bhujantara correction

     $mercurybhu= $mandacorrectionmin*$mercurymotion;
     $mercurybhujantaracorrection=$mercurybhu/360;


     $mercurytruesun=$mercurytruemean2+$mercurybhujantaracorrection;

     $mercuryyy=(int)$mercurytruesun; //deg

     
     $mercuryz=$mercurytruesun-$mercuryyy;
     $mercuryaa=$mercuryz*60;
     $mercurybb=(int)$mercuryaa; //min
     $mercurycc=$mercuryaa-$mercurybb;
     $mercurydd=$mercurycc*60;
     $mercuryee=(int)$mercurydd; //sec
     $mercuryff=$mercurydd-$mercuryee;
     $mercurygg=$mercuryff*60;
     $mercuryjj=sprintf('%0.2f',$mercurygg); //third

     if ($mercuryyy>360) {
      # code...
      $mercuryfinaldegvall=$mercuryyy-360;
     }
     else{
      $mercuryfinaldegvall=$mercuryyy;
     }

      $mercuryop= "$mercuryfinaldegvall °  $mercurybb' $mercuryee'' $mercuryjj'''";   

    echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF MERCURY IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$mercuryop."</font></p></h1>";

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

  echo "<br/>";
      echo "<h2><font color=#fff>AGARHANA=$q</font></h2>";

 

 

 $t=$q*4320000;
 $u=$t/1577917500;
 $v=(int)$u;
 $w=$u-$v;
 $x=$w*360;


 $deg=349.683333;

  if ($deg<$x ) {
  # code...
  $add=$deg+360;

  $y=$add-$x;
  

 }
 else{

  $y=$deg-$x;
  
 }

 if ($y>360) {
      # code...
      $finaldegval=$y-360;
      
     }
     else{
      $finaldegval=$y;
      
     }
 
      
    
     
        $diff=$ujjain-$longitude;



     
     $diff1=-($diff); //sign changed for above 4620

     $angle=$sunmotion*$diff1;

     $angledeg=$angle/360;

     $finaldege=$finaldegval+$angledeg; //meansun value

     if ($finaldege>360) {
       # code...
      $finaldeg=$finaldege-360;
     }
     else{
      $finaldeg=$finaldege;
     }


     //manda calculation

     $a1=$a-1;
     $month1=$month-1;
     $date1=$date-1;
     $yearvalue=4620-$a1;
     $monthmul=$month1*30.478;
     $dateadd=$monthmul+$date1;
     $yearvaluefinal=$dateadd/365.256; 
     $totalyear=$yearvalue-$yearvaluefinal;

     //manda uccha

     $mandauccha=$totalyear*360*387;
     $mandaucchafinal=$mandauccha/4320000000;

     //$mandaucchavalue=79.0092727778-$mandaucchafinal;

      if ($mandaucchafinal>79.0092727778) {
       # code...
      $adddition=79.0092727778+360;
      $mandaucchavalue=$adddition-$mandaucchafinal;
      //echo "op1";
     }
     else{
      $mandaucchavalue=79.0092727778-$mandaucchafinal;
      //echo "op2";
     }



     //manda kendra

     if ($mandaucchavalue<$finaldeg) {
      # code...

      $mandaucchavalue1=$mandaucchavalue+360;

      $mandakendra=$mandaucchavalue1-$finaldeg;
     }
     else{
      $mandakendra=$mandaucchavalue-$finaldeg;
     }

      $sine1=sin($mandakendra*3.14159265/180); //finding sin
     
       if ($sine1<0) {
        # code...
        $sine=-($sine1);
       }
       else{
        $sine=$sine1;
       }
   

     //pem formula

     $sub1=$pe-$p0;
     $sub2=$sub1*$sine;
     $pem=$pe-$sub2;

     

     //manda correction;

     $mandacorrection1=$pem*3438*$sine1;
     $mandacorrection=$mandacorrection1/360;

      $mandacorrectionmin=$mandacorrection/60;

     //true mean sun

     if ($mandakendra<180) {
      # code...

      $sundeg=$finaldeg+$mandacorrectionmin;
     }

     else{

      $sundeg=$finaldeg+$mandacorrectionmin;

     }

     //bhujantara correction

     $bhu= $mandacorrectionmin*$sunmotion;
     $bhujantaracorrection=$bhu/360;


     $truesun=$sundeg+$bhujantaracorrection;

     $yy=(int)$truesun; //deg

     
     $z=$truesun-$yy;
     $aa=$z*60;
     $bb=(int)$aa; //min
     $cc=$aa-$bb;
     $dd=$cc*60;
     $ee=(int)$dd; //sec
     $ff=$dd-$ee;
     $gg=$ff*60;
     $jj=sprintf('%0.2f',$gg); //third


     if ($yy>360) {
      # code...
      $finaldegvall=$yy-360;
     }
     else{
      $finaldegvall=$yy;
     }

      $op= "$finaldegvall °  $bb' $ee'' $jj'''";

     echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF SUN IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$op."</font></p></h1>";

      //for moon after agarhana

      //for moon after agarhana

      $moont=$q*57753336; //constant 1
 $moonu=$moont/1577917500; //constant 2
 $moonv=(int)$moonu;
 $moonw=$moonu-$moonv;
 $moonx=$moonw*360;

 

 $moondeg=349.1; //constant 3

  if ($moondeg<$moonx ) {
  # code...
  $moonadd=$moondeg+360;

  $moony=$moonadd-$moonx;

  
 }
 else{

  $moony=$moondeg-$moonx;
  
 }




 if ($moony>360) {
      # code...
      $moonfinaldegval=$moony-360;

      
     }
     else{
      $moonfinaldegval=$moony;
      
     }

    
    
        $moondiff=$ujjain-$longitude;
 


     
     $moondiff1=-($moondiff); //sign changed for below 4620

     $moonangle=$moonmotion*$moondiff1;

     $moonangledeg=$moonangle/360;  

     $moonfinaldege=$moonfinaldegval+$moonangledeg; //meansun value

     if ($moonfinaldege>360) {
       # code...
      $moonfinaldeg=$moonfinaldege-360;
     }
     else{
      $moonfinaldeg=$moonfinaldege;
     }



     //manda calculation

      $moona1=$a-1;
     $moonmonth1=$month-1;
     $moondate1=$date-1;
     $moonyearvalue=4620-$moona1;
     $moonmonthmul=$moonmonth1*30.478;
     $moondateadd=$moonmonthmul+$date1;
     $moonyearvaluefinal=$moondateadd/365.256; 
     $moontotalyear=$moonyearvalue-$moonyearvaluefinal;

     //manda uccha

     $moonmandauccha1=$moontotalyear*488211; //constant 6
     $moonmandaucchafinal=$moonmandauccha1/4320000; //constant 7


    //ommiting 
     $moonommit=(int)$moonmandaucchafinal;
     $moonmandauccha=$moonmandaucchafinal-$moonommit;
     $moonmandaucchafinalval=$moonmandauccha*360;
    

    //echo "$moonmandaucchafinalval";
     if ($moonmandaucchafinalval>131.235) {
       # code...
      $moonadddition=131.235+360;
      $moonmandaucchavalue=$moonadddition-$moonmandaucchafinalval;
      //echo "op1";
     }
     else{
      $moonmandaucchavalue=131.235-$moonmandaucchafinalval;
      //echo "op2";
     }


     //manda kendra

     if ($moonmandaucchavalue<$moonfinaldeg) {
      # code...

      $moonmandaucchavalue1=$moonmandaucchavalue+360;

      $moonmandakendra=$moonmandaucchavalue1-$moonfinaldeg;
     }
     else{
      $moonmandakendra=$moonmandaucchavalue-$moonfinaldeg;
     }




     $moonsine1=sin($moonmandakendra*3.14159265/180); //finding sin


     
   
     if ($moonsine1<0) {
      # code...

      $moonsine=-($moonsine1);
     }
     else{
      $moonsine=$moonsine1;
     }

     //pem formula

     $moonsub1=$moonpe-$moonp0;
     $moonsub2=$moonsub1*$moonsine;
     $moonpem=$moonpe-$moonsub2;


     //manda correction;

     $moonmandacorrection1=$moonpem*3438*$moonsine1;
     $moonmandacorrection=$moonmandacorrection1/360;
      $moonmandacorrectionmin=$moonmandacorrection/60;


     //true mean sun

     

      $moonsundeg=$moonfinaldeg+$moonmandacorrectionmin;

  


     //bhujantara correction

     $moonbhu= $mandacorrectionmin*$moonmotion;
     $moonbhujantaracorrection=$moonbhu/360;



     $moontruesun=$moonsundeg+$moonbhujantaracorrection;


     $moonyy=(int)$moontruesun; //deg

     
     $moonz=$moontruesun-$moonyy;
     $moonaa=$moonz*60;

     $moonbb=(int)$moonaa; //min
     $mooncc=$moonaa-$moonbb;
     $moondd=$mooncc*60;

     $moonee=(int)$moondd; //sec
     $moonff=$moondd-$moonee;
     $moongg=$moonff*60;
     
     $moonjj=sprintf('%0.2f',$moongg); //third


     if ($moonyy>360) {
      # code...
      $moonfinaldegvall=$moonyy-360;
     }
     else{
      $moonfinaldegvall=$moonyy;
     }

      $moonop= "$moonfinaldegvall °  $moonbb' $moonee'' $moonjj'''";

       echo "<br/>";

       echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF MOON IS:</font></p></h1>";
       echo "<br/>";
       echo "<h1><font color=#fff><p align=center>".$moonop."</font></p></h1>";
  

       //for jupiter

       $jupitert=$q*364220; //constant 1
 $jupiteru=$jupitert/1577917500; //constant 2
 $jupiterv=(int)$jupiteru;
 $jupiterw=$jupiteru-$jupiterv;
 $jupiterx=$jupiterw*360;


  $jupiterdeg=212.26667; //constant 3

  if ($jupiterdeg<$jupiterx ) {
  # code...
  $jupiteradd=$jupiterdeg+360;

  $jupitery=$jupiteradd-$jupiterx;

  
 }
 else{

  $jupitery=$jupiterdeg-$jupiterx;
  
 }

 if ($jupitery>360) {
      # code...
      $jupiterfinaldegval=$jupitery-360;

      
     }
     else{
      $jupiterfinaldegval=$jupitery;
      
     }   
      
   
    
        $jupiterdiff=$ujjain-$longitude;
   

     
     $jupiterdiff1=-($jupiterdiff); //sign changed for below 4620

     $jupiterangle=$jupitermotion*$jupiterdiff1;

     $jupiterangledeg=$jupiterangle/360;    

     $jupiterfinaldege=$jupiterfinaldegval+$jupiterangledeg; //meansun value

     if ($jupiterfinaldege>360) {
       # code...
      $jupiterfinaldeg=$jupiterfinaldege-360;
     }
     else{
      $jupiterfinaldeg=$jupiterfinaldege;
     }




     //manda calculation

      $jupitera1=$a-1;
     $jupitermonth1=$month-1;
     $jupiterdate1=$date-1;
     $jupiteryearvalue=4620-$jupitera1;
     $jupitermonthmul=$jupitermonth1*30.478;
     $jupiterdateadd=$jupitermonthmul+$jupiterdate1;
     $jupiteryearvaluefinal=$jupiterdateadd/365.256; 
     $jupitertotalyear=$jupiteryearvalue-$jupiteryearvaluefinal;



         //manda uccha

     $jupitermandauccha=$jupitertotalyear*360*900; //constant 6
     $jupitermandaucchafinal=$jupitermandauccha/4320000000; //constant 7

     //$jupitermandaucchavalue=173.1551-$jupitermandaucchafinal; //constant 5

     if ($jupitermandaucchafinal>173.1551) {
       # code...
      $jupiteradddition=173.1551+360;
      $jupitermandaucchavalue=$jupiteradddition-$jupitermandaucchafinal;
      //echo "op1";
     }
     else{
      $jupitermandaucchavalue=173.1551-$jupitermandaucchafinal;
      //echo "op2";
     }


     //manda kendra

     if ($jupitermandaucchavalue<$jupiterfinaldeg) {
      # code...

      $jupitermandaucchavalue1=$jupitermandaucchavalue+360;

      $jupitermandakendra=$jupitermandaucchavalue1-$jupiterfinaldeg;
     }
     else{
      $jupitermandakendra=$jupitermandaucchavalue-$jupiterfinaldeg;
     }

     $jupitersine1=sin($jupitermandakendra*3.14159265/180); //finding sin
     
   
      if ($jupitersine1<0) {
        # code...
        $jupitersine=-($jupitersine1);
       }
       else{
        $jupitersine=$jupitersine1;
       }

     //pem formula

     $jupitersub1=$jupiterpe-$jupiterp0;
     $jupitersub2=$jupitersub1*$jupitersine;
     $jupiterpem=$jupiterpe-$jupitersub2;

     //sighra correction and sighrakendra

     //$jupitersighrakendra=$finaldeg-$jupiterfinaldeg; //meansun-meanjupiter add 360 step

     if ($finaldeg<$jupiterfinaldeg) {
       # code...
      $jupi=$finaldeg+360;
       $jupitersighrakendra=$jupi-$jupiterfinaldeg;

     }
     else{
       $jupitersighrakendra=$finaldeg-$jupiterfinaldeg;
     }

     $jupitersine1sighra=sin($jupitersighrakendra*3.14159265/180); //sine 

     $jupitercos1sighra=cos($jupitersighrakendra*3.14159265/180); //cos

     if ($jupitersine1sighra<0) {
      # code...
      $jupitersinesighra=-($jupitersine1sighra);
     }
     else{

       $jupitersinesighra=$jupitersine1sighra;
     }
     if ($jupitercos1sighra<0) {
      # code...
      $jupitercossighra=-($jupitercos1sighra);
     }
     else{

       $jupitercossighra=$jupitercos1sighra;
     }




     //manda correction;

     $jupitermandacorrection1=$jupiterpem*3438*$jupitersine;
     $jupitermandacorrection=$jupitermandacorrection1/360;
      $jupitermandacorrectionmin=$jupitermandacorrection/60;

       $jupiterhalfmandacorrection=$jupitermandacorrectionmin/2;


      //pes formula

     $jupitersub11=$jupitersighrape-$jupitersighrap0;
     $jupitersub22=$jupitersub11*$jupitersinesighra;
     $jupiterpes=$jupitersighrape-$jupitersub22;

     //doh phala

     $jupiterdohphala1=$jupiterpes*3438*$jupitersinesighra;
     $jupiterdohphala=$jupiterdohphala1/360;

     //koti phala

     $jupiterkotiphala1=$jupiterpes*3438*$jupitercossighra;
     $jupiterkotiphala=$jupiterkotiphala1/360;

     //sphuta koti

     if ($jupitersighrakendra>=90 && $jupitersighrakendra<=270) {
       # code...
      $jupitersphutakoti=3438-$jupiterkotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($jupitersighrakendra>=0 && $jupitersighrakendra<=90) {
       # code...
      $jupitersphutakoti=3438+$jupiterkotiphala;
      //echo "quadrant1";


     }
     elseif ($jupitersighrakendra>=270 && $jupitersighrakendra<=360) {
       # code...

      $jupitersphutakoti=3438+$jupiterkotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $jupiterhyp1=$jupiterdohphala*$jupiterdohphala;
     $jupiterhyp2=$jupitersphutakoti*$jupitersphutakoti;
     $jupiterhyp3=$jupiterhyp1+$jupiterhyp2;
     $jupiterkarna=sqrt($jupiterhyp3);

     //sighra correction

     $jupitersighracorr=$jupiterdohphala/$jupiterkarna;
     $jupitersighracorr1=asin($jupitersighracorr);
     $jupitersighracorrection=$jupitersighracorr1*180/3.14159265;

     $jupiterhalfsighracorrection=$jupitersighracorrection/2;

     //procedure 1

     if ($jupitersighrakendra<180) {
       # code...
         $jupiterp11=$jupiterfinaldeg+$jupiterhalfsighracorrection; //meanjupiter+halfsc
         if ($jupiterp11>360) {
           # code...
          $jupiterp1=$jupiterp11-360;
         }
         else{
          $jupiterp1=$jupiterp11;
         }
     }
     else{
      if ($jupiterfinaldeg<$jupiterhalfsighracorrection) {
        # code...
        $jupilo=$jupiterfinaldeg+360;
         $jupiterp1=$jupilo-$jupiterhalfsighracorrection;

      }
      else{
         $jupiterp1=$jupiterfinaldeg-$jupiterhalfsighracorrection;
      }

      //more than 180

     }

     //procedure 2

     if ($jupitermandakendra<180) {
       # code...
      $jupiterp22=$jupiterp1+$jupiterhalfmandacorrection;
      if ($jupiterp22>360) {
        # code...
        $jupiterp2=$jupiterp22-360;
      }
      else{
        $jupiterp2=$jupiterp22;
      }
     }
     else{
      if ($jupiterp1<$jupiterhalfmandacorrection) {
        # code...
        $jupitad=$jupiterp1+360;
        $jupiterp2=$jupitad-$jupiterhalfmandacorrection;

      }
      else{
        $jupiterp2=$jupiterp1-$jupiterhalfmandacorrection;
      }
       
     }

     //procedure 3 -  new manda kendra

     
     if ($jupitermandaucchavalue<$jupiterp2) {
       # code...
      $newadd=$jupitermandaucchavalue+360;
      $jupiternewmandakendra=$newadd-$jupiterp2;

     }
     else{

      $jupiternewmandakendra=$jupitermandaucchavalue-$jupiterp2;

     }


     $jupitersine1new=sin($jupiternewmandakendra*3.14159265/180); //finding sin

     if ($jupitersine1new<0) {
      # code...
      $jupitersinenew=-($jupitersine1new);
     }
     else{

       $jupitersinenew=$jupitersine1new;
     }

     //new pem

     $jupitersub1new=$jupiterpe-$jupiterp0;
     $jupitersub2new=$jupitersub1new*$jupitersinenew;
     $jupiterpemnew=$jupiterpe-$jupitersub2new;

     // new manda correction;

     $jupitermandacorrection1new=$jupiterpemnew*3438*$jupitersine1new;
     $jupitermandacorrectionnew=$jupitermandacorrection1new/360;
     $jupitermandacorrectionminnew=$jupitermandacorrectionnew/60;

     
      $jupiterp33=$jupiterfinaldeg+$jupitermandacorrectionminnew;
      if ($jupiterp33>360) {
        # code...
        $jupiterp3=$jupiterp33-360;
      }
      else{
        $jupiterp3=$jupiterp33;
      }
     

     //procedure 4 (new sighra kendra)

     if ($finaldeg<$jupiterp3) {
       # code...
      $jfinaldeg=$finaldeg+360;

      $jupiternewsighrakendra=$jfinaldeg-$jupiterp3;

     }
     else{
       $jupiternewsighrakendra=$finaldeg-$jupiterp3;
     }

     //new sine and cos

     $jupitersine1sighranew=sin($jupiternewsighrakendra*3.14159265/180); //sine 

     $jupitercos1sighranew=cos($jupiternewsighrakendra*3.14159265/180); //cos

     if ($jupitersine1sighranew<0) {
      # code...
      $jupitersinesighranew=-($jupitersine1sighranew);
     }
     else{

       $jupitersinesighranew=$jupitersine1sighranew;
     }
     if ($jupitercos1sighranew<0) {
      # code...
      $jupitercossighranew=-($jupitercos1sighranew);
     }
     else{

       $jupitercossighranew=$jupitercos1sighranew;
     }




     // new pes formula

     $jupitersub11new=$jupitersighrape-$jupitersighrap0;
     $jupitersub22new=$jupitersub11new*$jupitersinesighranew; //no minus sign
     $jupiterpesnew=$jupitersighrape-$jupitersub22new;

     // new doh phala

     $jupiterdohphala1new=$jupiterpesnew*3438*$jupitersinesighranew;
     $jupiterdohphalanew=$jupiterdohphala1new/360;

     //new koti phala

     $jupiterkotiphala1new=$jupiterpesnew*3438*$jupitercossighranew;
     $jupiterkotiphalanew=$jupiterkotiphala1new/360;

     //new sphuta koti

     if ($jupiternewsighrakendra>=90 && $jupiternewsighrakendra<=270) {
       # code...
      $jupitersphutakotinew=3438-$jupiterkotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($jupiternewsighrakendra>=0 && $jupiternewsighrakendra<=90) {
       # code...
      $jupitersphutakotinew=3438+$jupiterkotiphalanew;
      //echo "quadrant1";


     }
     elseif ($jupiternewsighrakendra>=270 && $jupiternewsighrakendra<=360) {
       # code...

      $jupitersphutakotinew=3438+$jupiterkotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $jupiterhyp1new=$jupiterdohphalanew*$jupiterdohphalanew;
     $jupiterhyp2new=$jupitersphutakotinew*$jupitersphutakotinew;
     $jupiterhyp3new=$jupiterhyp1new+$jupiterhyp2new;
     $jupiterkarnanew=sqrt($jupiterhyp3new);

     //new sighra correction

     $jupitersighracorrnew=$jupiterdohphalanew/$jupiterkarnanew;
     $jupitersighracorr1new=asin($jupitersighracorrnew);
     $jupitersighracorrectionnew=$jupitersighracorr1new*180/3.14159265;

     //p4

     if ($jupiternewsighrakendra>180) {
       # code...

      if ($jupiterp3<$jupitersighracorrectionnew) {
        # code...
        $june=$jupiterp3+360;
        $jupiterp4=$june-$jupitersighracorrectionnew;

      }
      else{
        $jupiterp4=$jupiterp3-$jupitersighracorrectionnew;
      }

        //more than 180
     }
     else{

      $jupiterp44=$jupiterp3+$jupitersighracorrectionnew;
      if ($jupiterp44>360) {
        # code...
        $jupiterp4=$jupiterp44-360;
      }
      else{
        $jupiterp4=$jupiterp44;
      }

     }

     
     //bhujantara correction

     $jupiterbhu= $mandacorrectionmin*$jupitermotion;
     $jupiterbhujantaracorrection=$jupiterbhu/360;


     $jupitertruesun=$jupiterp4+$jupiterbhujantaracorrection;

     $jupiteryy=(int)$jupitertruesun; //deg

     
     $jupiterz=$jupitertruesun-$jupiteryy;
     $jupiteraa=$jupiterz*60;
     $jupiterbb=(int)$jupiteraa; //min
     $jupitercc=$jupiteraa-$jupiterbb;
     $jupiterdd=$jupitercc*60;
     $jupiteree=(int)$jupiterdd; //sec
     $jupiterff=$jupiterdd-$jupiteree;
     $jupitergg=$jupiterff*60;
     $jupiterjj=sprintf('%0.2f',$jupitergg); //third


     if ($jupiteryy>360) {
      # code...
      $jupiterfinaldegvall=$jupiteryy-360;
     }
     else{
      $jupiterfinaldegvall=$jupiteryy;
     }

      $jupiterop= "$jupiterfinaldegvall °  $jupiterbb' $jupiteree'' $jupiterjj'''";

    echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF JUPITER IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$jupiterop."</font></p></h1>";


     
      //for staurn

       $saturnt=$q*146568; //constant 1
 $saturnu=$saturnt/1577917500; //constant 2
 $saturnv=(int)$saturnu;
 $saturnw=$saturnu-$saturnv;
 $saturnx=$saturnw*360;

 

 $saturndeg=285.35; //constant 3

  if ($saturndeg<$saturnx ) {
  # code...
  $saturnadd=$saturndeg+360;

  $saturny=$saturnadd-$saturnx;

  
 }
 else{

  $saturny=$saturndeg-$saturnx;
  
 }

 if ($saturny>360) {
      # code...
      $saturnfinaldegval=$saturny-360;

      
     }
     else{
      $saturnfinaldegval=$saturny;
      
     }      
     
        $saturndiff=$ujjain-$longitude;
      


     
     $saturndiff1=-($saturndiff); //sign changed for below 4620

     $saturnangle=$saturnmotion*$saturndiff1;

     $saturnangledeg=$saturnangle/360;    

     $saturnfinaldege=$saturnfinaldegval+$saturnangledeg; //meansun value

     if ($saturnfinaldege>360) {
       # code...
      $saturnfinaldeg=$saturnfinaldege-360;
     }
     else{
      $saturnfinaldeg=$saturnfinaldege;
     }


     //manda calculation

      $saturna1=$a-1;
     $saturnmonth1=$month-1;
     $saturndate1=$date-1;
     $saturnyearvalue=4620-$a1;
     $saturnmonthmul=$saturnmonth1*30.478;
     $saturndateadd=$saturnmonthmul+$saturndate1;
     $saturnyearvaluefinal=$saturndateadd/365.256; 
     $saturntotalyear=$saturnyearvalue-$saturnyearvaluefinal;
     
     //manda uccha

     $saturnmandauccha=$saturntotalyear*360*39; //constant 6
     $saturnmandaucchafinal=$saturnmandauccha/4320000000; //constant 7

     //$jupitermandaucchavalue=173.1551-$jupitermandaucchafinal; //constant 5

     if ($saturnmandaucchafinal>235.963071) {
       # code...
      $saturnadddition=235.963071+360;
      $saturnmandaucchavalue=$saturnadddition-$saturnmandaucchafinal;
      //echo "op1";
     }
     else{
      $saturnmandaucchavalue=235.963071-$saturnmandaucchafinal;
      //echo "op2";
     }


     //manda kendra

     if ($saturnmandaucchavalue<$saturnfinaldeg) {
      # code...

      $saturnmandaucchavalue1=$saturnmandaucchavalue+360;

      $saturnmandakendra=$saturnmandaucchavalue1-$saturnfinaldeg;
     }
     else{
      $saturnmandakendra=$saturnmandaucchavalue-$saturnfinaldeg;
     }

     $saturnsine1=sin($saturnmandakendra*3.14159265/180); //finding sin
     
   
      if ($saturnsine1<0) {
        # code...
        $saturnsine=-($saturnsine1);
       }
       else{
        $saturnsine=$saturnsine1;
       }

     //pem formula

     $saturnsub1=$saturnpe-$saturnp0;
     $saturnsub2=$saturnsub1*$saturnsine;
     $saturnpem=$saturnpe-$saturnsub2;

     //sighra correction and sighrakendra

      //meansun-meanjupiter add 360 step

     if ($finaldeg<$saturnfinaldeg) {
       # code...
      $satu=$finaldeg+360;
       $saturnsighrakendra=$satu-$saturnfinaldeg;

     }
     else{
       $saturnsighrakendra=$finaldeg-$saturnfinaldeg;
     }

     $saturnsine1sighra=sin($saturnsighrakendra*3.14159265/180); //sine 

     $saturncos1sighra=cos($saturnsighrakendra*3.14159265/180); //cos

     if ($saturnsine1sighra<0) {
      # code...
      $saturnsinesighra=-($saturnsine1sighra);
     }
     else{

       $saturnsinesighra=$saturnsine1sighra;
     }
     if ($saturncos1sighra<0) {
      # code...
      $saturncossighra=-($saturncos1sighra);
     }
     else{

       $saturncossighra=$saturncos1sighra;
     }




     //manda correction;

     $saturnmandacorrection1=$saturnpem*3438*$saturnsine;
     $saturnmandacorrection=$saturnmandacorrection1/360;
      $saturnmandacorrectionmin=$saturnmandacorrection/60;

      $saturnhalfmandacorrection=$saturnmandacorrectionmin/2;

      //pes formula

     $saturnsub11=$saturnsighrape-$saturnsighrap0;
     $saturnsub22=$saturnsub11*$saturnsinesighra;
     $saturnpes=$saturnsighrape-$saturnsub22;

     //doh phala

     $saturndohphala1=$saturnpes*3438*$saturnsinesighra;
     $saturndohphala=$saturndohphala1/360;

     //koti phala

     $saturnkotiphala1=$saturnpes*3438*$saturncossighra;
     $saturnkotiphala=$saturnkotiphala1/360;

     //sphuta koti

     if ($saturnsighrakendra>=90 && $saturnsighrakendra<=270) {
       # code...
      $saturnsphutakoti=3438-$saturnkotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($saturnsighrakendra>=0 && $saturnsighrakendra<=90) {
       # code...
      $saturnsphutakoti=3438+$saturnkotiphala;
      //echo "quadrant1";


     }
     elseif ($saturnsighrakendra>=270 && $saturnsighrakendra<=360) {
       # code...

      $saturnsphutakoti=3438+$saturnkotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $saturnhyp1=$saturndohphala*$saturndohphala;
     $saturnhyp2=$saturnsphutakoti*$saturnsphutakoti;
     $saturnhyp3=$saturnhyp1+$saturnhyp2;
     $saturnkarna=sqrt($saturnhyp3);

     //sighra correction

     $saturnsighracorr=$saturndohphala/$saturnkarna;
     $saturnsighracorr1=asin($saturnsighracorr);
     $saturnsighracorrection=$saturnsighracorr1*180/3.14159265;

     $saturnhalfsighracorrection=$saturnsighracorrection/2;

     //procedure 1

     if ($saturnsighrakendra<180) {
       # code...
         $saturnp11=$saturnfinaldeg+$saturnhalfsighracorrection; //meanjupiter+halfsc
         if ($saturnp11>360) {
           # code...
          $saturnp1=$saturnp11-360;
         }
         else{
          $saturnp1=$saturnp11;
         }
     }
     else{
      if ($saturnfinaldeg<$saturnhalfsighracorrection) {
        # code...
        $satadding=$saturnfinaldeg+360;
        $saturnp1=$satadding-$saturnhalfsighracorrection; //more than 180


      }
      else{
        $saturnp1=$saturnfinaldeg-$saturnhalfsighracorrection; //more than 180

      }

      
     }

      //procedure 2

     if ($saturnmandakendra<180) {
       # code...
       $saturnp22=$saturnp1+$saturnhalfmandacorrection;
       if ($saturnp22>360) {
         # code...
        $saturnp2=$saturnp22-360;
       }
       else{
        $saturnp2=$saturnp22;
       }

     }
     else {
       # code... 
      if ($saturnp1<$saturnhalfmandacorrection) {
        # code...
        $saadd=$saturnp1+360;
          $saturnp2=$saadd-$saturnhalfmandacorrection;

      }
      else{
          $saturnp2=$saturnp1-$saturnhalfmandacorrection;

      }
    
     }


     //procedure 3 -  new manda kendra

     
     if ($saturnmandaucchavalue<$saturnp2) {
       # code...
      $satnewadd=$saturnmandaucchavalue+360;
      $saturnnewmandakendra=$satnewadd-$saturnp2;

     }
     else{

      $saturnnewmandakendra=$saturnmandaucchavalue-$saturnp2;

     }


     $saturnsine1new=sin($saturnnewmandakendra*3.14159265/180); //finding sin

     if ($saturnsine1new<0) {
      # code...
      $saturnsinenew=-($saturnsine1new);
     }
     else{

       $saturnsinenew=$saturnsine1new;
     }

     //new pem

     $saturnsub1new=$saturnpe-$saturnp0;
     $saturnsub2new=$saturnsub1new*$saturnsinenew;
     $saturnpemnew=$saturnpe-$saturnsub2new;
     

     // new manda correction;

     $saturnmandacorrection1new=$saturnpemnew*3438*$saturnsine1new;
     $saturnmandacorrectionnew=$saturnmandacorrection1new/360;
     $saturnmandacorrectionminnew=$saturnmandacorrectionnew/60;

    
      $saturnp3=$saturnfinaldeg+$saturnmandacorrectionminnew;
     

     //procedure 4 (new sighra kendra)

     if ($finaldeg<$saturnp3) {
       # code...
      $sfinaldeg=$finaldeg+360;

      $saturnnewsighrakendra=$sfinaldeg-$saturnp3;

     }
     else{
       $saturnnewsighrakendra=$finaldeg-$saturnp3;
     }

     //new sine and cos

     $saturnsine1sighranew=sin($saturnnewsighrakendra*3.14159265/180); //sine 

     $saturncos1sighranew=cos($saturnnewsighrakendra*3.14159265/180); //cos

     if ($saturnsine1sighranew<0) {
      # code...
      $saturnsinesighranew=-($saturnsine1sighranew);
     }
     else{

       $saturnsinesighranew=$saturnsine1sighranew;
     }
     if ($saturncos1sighranew<0) {
      # code...
      $saturncossighranew=-($saturncos1sighranew);
     }
     else{

       $saturncossighranew=$saturncos1sighranew;
     }




     // new pes formula

     $saturnsub11new=$saturnsighrape-$saturnsighrap0;
     $saturnsub22new=$saturnsub11new*$saturnsinesighranew; //no minus sign
     $saturnpesnew=$saturnsighrape-$saturnsub22new;

     // new doh phala

     $saturndohphala1new=$saturnpesnew*3438*$saturnsinesighranew;
     $saturndohphalanew=$saturndohphala1new/360;

     //new koti phala

     $saturnkotiphala1new=$saturnpesnew*3438*$saturncossighranew;
     $saturnkotiphalanew=$saturnkotiphala1new/360;

     //new sphuta koti

     if ($saturnnewsighrakendra>=90 && $saturnnewsighrakendra<=270) {
       # code...
      $saturnsphutakotinew=3438-$saturnkotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($saturnnewsighrakendra>=0 && $saturnnewsighrakendra<=90) {
       # code...
      $saturnsphutakotinew=3438+$saturnkotiphalanew;
      //echo "quadrant1";


     }
     elseif ($saturnnewsighrakendra>=270 && $saturnnewsighrakendra<=360) {
       # code...

      $saturnsphutakotinew=3438+$saturnkotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $saturnhyp1new=$saturndohphalanew*$saturndohphalanew;
     $saturnhyp2new=$saturnsphutakotinew*$saturnsphutakotinew;
     $saturnhyp3new=$saturnhyp1new+$saturnhyp2new;
     $saturnkarnanew=sqrt($saturnhyp3new);

     //new sighra correction

     $saturnsighracorrnew=$saturndohphalanew/$saturnkarnanew;
     $saturnsighracorr1new=asin($saturnsighracorrnew);
     $saturnsighracorrectionnew=$saturnsighracorr1new*180/3.14159265;

     //p4

     if ($saturnnewsighrakendra>180) {
       # code...
      if ($saturnp3<$saturnsighracorrectionnew) {
        # code...
        $sdsd=$saturnp3+360;
        $saturnp4=$sdsd-$saturnsighracorrectionnew;

      }
      else{
        $saturnp4=$saturnp3-$saturnsighracorrectionnew;
      }

        //more than 180
     }
     else{

      $saturnp44=$saturnp3+$saturnsighracorrectionnew;
      if ( $saturnp44>360) {
        # code...
         $saturnp4= $saturnp44-360;

      }
      else{
         $saturnp4= $saturnp44;
      }

     }


     //bhujantara correction

     $saturnbhu= $mandacorrectionmin*$saturnmotion;
     $saturnbhujantaracorrection=$saturnbhu/360;


     $saturntruesun=$saturnp4+$saturnbhujantaracorrection;

     $saturnyy=(int)$saturntruesun; //deg

     
     $saturnz=$saturntruesun-$saturnyy;
     $saturnaa=$saturnz*60;
     $saturnbb=(int)$saturnaa; //min
     $saturncc=$saturnaa-$saturnbb;
     $saturndd=$saturncc*60;
     $saturnee=(int)$saturndd; //sec
     $saturnff=$saturndd-$saturnee;
     $saturngg=$saturnff*60;
     $saturnjj=sprintf('%0.2f',$saturngg); //third


     if ($saturnyy>360) {
      # code...
      $saturnfinaldegvall=$saturnyy-360;
     }
     else{
      $saturnfinaldegvall=$saturnyy;
     }

      $saturnop= "$saturnfinaldegvall °  $saturnbb' $saturnee'' $saturnjj'''";

    echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF SATURN IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$saturnop."</font></p></h1>";



      //for mars

       $marst=$q*2296828; //constant 1
 $marsu=$marst/1577917500; //constant 2
 $marsv=(int)$marsu;
 $marsw=$marsu-$marsv;
 $marsx=$marsw*360;

 

 $marsdeg=307.13333; //constant 3

  if ($marsdeg<$marsx ) {
  # code...
  $marsadd=$marsdeg+360;

  $marsy=$marsadd-$marsx;

  
 }
 else{

  $marsy=$marsdeg-$marsx;
  
 }

 if ($marsy>360) {
      # code...
      $marsfinaldegval=$marsy-360;

      
     }
     else{
      $marsfinaldegval=$marsy;
      
     }

    

   
     
        $marsdiff=$ujjain-$longitude;
     


     
     $marsdiff1=-($marsdiff); //sign changed for below 4620

     $marsangle=$marsmotion*$marsdiff1;

     $marsangledeg=$marsangle/360;    

     $marsfinaldege=$marsfinaldegval+$marsangledeg; //meansun value

     if ($marsfinaldege>360) {
       # code...
      $marsfinaldeg=$marsfinaldege-360;
     }
     else{
      $marsfinaldeg=$marsfinaldege;
     }


     //manda calculation

      $marsa1=$a-1;
     $marsmonth1=$month-1;
     $marsdate1=$date-1;
     $marsyearvalue=4620-$marsa1;
     $marsmonthmul=$marsmonth1*30.478;
     $marsdateadd=$marsmonthmul+$date1;
     $marsyearvaluefinal=$marsdateadd/365.256; 
     $marstotalyear=$marsyearvalue-$marsyearvaluefinal;
    
     //manda uccha

     $marsmandauccha=$marstotalyear*360*204; //constant 6
     $marsmandaucchafinal=$marsmandauccha/4320000000; //constant 7

     //$jupitermandaucchavalue=173.1551-$jupitermandaucchafinal; //constant 5

     if ($marsmandaucchafinal>128.92576) {
       # code...
      $marsadddition=128.92576+360;
      $marsmandaucchavalue=$marsadddition-$marsmandaucchafinal;
      //echo "op1";
     }
     else{
      $marsmandaucchavalue=128.92576-$marsmandaucchafinal;
      //echo "op2";
     }


     //manda kendra

     if ($marsmandaucchavalue<$marsfinaldeg) {
      # code...

      $marsmandaucchavalue1=$marsmandaucchavalue+360;

      $marsmandakendra=$marsmandaucchavalue1-$marsfinaldeg;
     }
     else{
      $marsmandakendra=$marsmandaucchavalue-$marsfinaldeg;
     }

     $marssine1=sin($marsmandakendra*3.14159265/180); //finding sin
     
   
      if ($marssine1<0) {
        # code...
        $marssine=-($marssine1);
       }
       else{
        $marssine=$marssine1;
       }

     //pem formula

     $marssub1=$marspe-$marsp0;
     $marssub2=$marssub1*$marssine;
     $marspem=$marspe-$marssub2;

     //sighra correction and sighrakendra

     //$jupitersighrakendra=$finaldeg-$jupiterfinaldeg; //meansun-meanjupiter add 360 step

     if ($finaldeg<$marsfinaldeg) {
       # code...
      $satu1=$finaldeg+360;
       $marssighrakendra=$satu1-$marsfinaldeg;

     }
     else{
       $marssighrakendra=$finaldeg-$marsfinaldeg;
     }

     $marssine1sighra=sin($marssighrakendra*3.14159265/180); //sine 

     $marscos1sighra=cos($marssighrakendra*3.14159265/180); //cos

     if ($marssine1sighra<0) {
      # code...
      $marssinesighra=-($marssine1sighra);
     }
     else{

       $marssinesighra=$marssine1sighra;
     }
     if ($marscos1sighra<0) {
      # code...
      $marscossighra=-($marscos1sighra);
     }
     else{

       $marscossighra=$marscos1sighra;
     }




     //manda correction;

     $marsmandacorrection1=$marspem*3438*$marssine;
     $marsmandacorrection=$marsmandacorrection1/360;
     $marsmandacorrectionmin=$marsmandacorrection/60;

     $marshalfmandacorrection=$marsmandacorrectionmin/2;

      //pes formula

     $marssub11=$marssighrape-$marssighrap0;
     $marssub22=$marssub11*$marssinesighra;
     $marspes=$marssighrape-$marssub22;

     //doh phala

     $marsdohphala1=$marspes*3438*$marssinesighra;
     $marsdohphala=$marsdohphala1/360;

     //koti phala

     $marskotiphala1=$marspes*3438*$marscossighra;
     $marskotiphala=$marskotiphala1/360;

     //sphuta koti

     if ($marssighrakendra>=90 && $marssighrakendra<=270) {
       # code...
      $marssphutakoti=3438-$marskotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($marssighrakendra>=0 && $marssighrakendra<=90) {
       # code...
      $marssphutakoti=3438+$marskotiphala;
      //echo "quadrant1";


     }
     elseif ($marssighrakendra>=270 && $marssighrakendra<=360) {
       # code...

      $marssphutakoti=3438+$marskotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $marshyp1=$marsdohphala*$marsdohphala;
     $marshyp2=$marssphutakoti*$marssphutakoti;
     $marshyp3=$marshyp1+$marshyp2;
     $marskarna=sqrt($marshyp3);

     //sighra correction

     $marssighracorr=$marsdohphala/$marskarna;
     $marssighracorr1=asin($marssighracorr);
     $marssighracorrection=$marssighracorr1*180/3.14159265;

     $marshalfsighracorrection=$marssighracorrection/2;

     //procedure 1

     if ($marssighrakendra<180) {
       # code...
         $marsp11=$marsfinaldeg+$marshalfsighracorrection; //meanjupiter+halfsc
         if ($marsp11>360) {
           # code...
          $marsp1=$marsp11-360;
         }
         else{
          $marsp1=$marsp11;
         }
     }
     else{
      if ($marsfinaldeg<$marshalfsighracorrection) {
        # code...
        $msms=$marsfinaldeg+360;
        $marsp1=$msms-$marshalfsighracorrection;

      }
      else{
        $marsp1=$marsfinaldeg-$marshalfsighracorrection;
      }

       //more than 180

     }

      //procedure 2

     if ($marsmandakendra<180) {
       # code...
       $marsp22=$marsp1+$marshalfmandacorrection;
       if ($marsp22>360) {
         # code...
        $marsp2=$marsp22-360;
       }
       else{
        $marsp2=$marsp22;
       }

     }
     else {
       # code... 
      if ($marsp1<$marshalfmandacorrection) {
        # code...
        $mam=$marsp1+360;
        $marsp2=$mam-$marshalfmandacorrection;

      }
      else{
        $marsp2=$marsp1-$marshalfmandacorrection;
      }
      

     }

     //procedure 3 -  new manda kendra

     
     if ($marsmandaucchavalue<$marsp2) {
       # code...
      $marnewadd=$marsmandaucchavalue+360;
      $marsnewmandakendra=$marnewadd-$marsp2;

     }
     else{

      $marsnewmandakendra=$marsmandaucchavalue-$marsp2;

     }


     $marssine1new=sin($marsnewmandakendra*3.14159265/180); //finding sin

     if ($marssine1new<0) {
      # code...
      $marssinenew=-($marssine1new);
     }
     else{

       $marssinenew=$marssine1new;
     }

     //new pem

     $marssub1new=$marspe-$marsp0;
     $marssub2new=$marssub1new*$marssinenew;
     $marspemnew=$marspe-$marssub2new;
     

     // new manda correction;

     $marsmandacorrection1new=$marspemnew*3438*$marssine1new;
     $marsmandacorrectionnew=$marsmandacorrection1new/360;
     $marsmandacorrectionminnew=$marsmandacorrectionnew/60;

    
      $marsp3=$marsfinaldeg+$marsmandacorrectionminnew;
     

     //procedure 4 (new sighra kendra)

     if ($finaldeg<$marsp3) {
       # code...
      $smfinaldeg=$finaldeg+360;

      $marsnewsighrakendra=$smfinaldeg-$marsp3;

     }
     else{
       $marsnewsighrakendra=$finaldeg-$marsp3;
     }

     //new sine and cos

     $marssine1sighranew=sin($marsnewsighrakendra*3.14159265/180); //sine 

     $marscos1sighranew=cos($marsnewsighrakendra*3.14159265/180); //cos

     if ($marssine1sighranew<0) {
      # code...
      $marssinesighranew=-($marssine1sighranew);
     }
     else{

       $marssinesighranew=$marssine1sighranew;
     }
     if ($marscos1sighranew<0) {
      # code...
      $marscossighranew=-($marscos1sighranew);
     }
     else{

       $marscossighranew=$marscos1sighranew;
     }




     // new pes formula

     $marssub11new=$marssighrape-$marssighrap0;
     $marssub22new=$marssub11new*$marssinesighranew; //no minus sign
     $marspesnew=$marssighrape-$marssub22new;

     // new doh phala

     $marsdohphala1new=$marspesnew*3438*$marssinesighranew;
     $marsdohphalanew=$marsdohphala1new/360;

     //new koti phala

     $marskotiphala1new=$marspesnew*3438*$marscossighranew;
     $marskotiphalanew=$marskotiphala1new/360;

     //new sphuta koti

     if ($marsnewsighrakendra>=90 && $marsnewsighrakendra<=270) {
       # code...
      $marssphutakotinew=3438-$marskotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($marsnewsighrakendra>=0 && $marsnewsighrakendra<=90) {
       # code...
      $marssphutakotinew=3438+$marskotiphalanew;
      //echo "quadrant1";


     }
     elseif ($marsnewsighrakendra>=270 && $marsnewsighrakendra<=360) {
       # code...

      $marssphutakotinew=3438+$marskotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $marshyp1new=$marsdohphalanew*$marsdohphalanew;
     $marshyp2new=$marssphutakotinew*$marssphutakotinew;
     $marshyp3new=$marshyp1new+$marshyp2new;
     $marskarnanew=sqrt($marshyp3new);

     //new sighra correction

     $marssighracorrnew=$marsdohphalanew/$marskarnanew;
     $marssighracorr1new=asin($marssighracorrnew);
     $marssighracorrectionnew=$marssighracorr1new*180/3.14159265;

     //p4

     if ($marsnewsighrakendra>180) {
       # code...
      if ($marsp3<$marssighracorrectionnew) {
        # code...
        $mang=$marsp3+360;
        $marsp4=$mang-$marssighracorrectionnew;

      }
      else{
        $marsp4=$marsp3-$marssighracorrectionnew;
      }

        //more than 180
     }
     else{

      $marsp44=$marsp3+$marssighracorrectionnew;

      if ($marsp44>360) {
        # code...
        $marsp4=$marsp44-360;
      }
      else{
        $marsp4=$marsp44;
      }

     }

     //bhujantara correction

     $marsbhu= $mandacorrectionmin*$marsmotion;
     $marsbhujantaracorrection=$marsbhu/360;


     $marstruesun=$marsp4+$marsbhujantaracorrection;

     $marsyy=(int)$marstruesun; //deg

     
     $marsz=$marstruesun-$marsyy;
     $marsaa=$marsz*60;
     $marsbb=(int)$marsaa; //min
     $marscc=$marsaa-$marsbb;
     $marsdd=$marscc*60;
     $marsee=(int)$marsdd; //sec
     $marsff=$marsdd-$marsee;
     $marsgg=$marsff*60;
     $marsjj=sprintf('%0.2f',$marsgg); //third


     if ($marsyy>360) {
      # code...
      $marsfinaldegvall=$marsyy-360;
     }
     else{
      $marsfinaldegvall=$marsyy;
     }

      $marsop= "$marsfinaldegvall °  $marsbb' $marsee'' $marsjj'''";

    echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF MARS IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$marsop."</font></p></h1>";


      //for venus


      $venust=$q*2702376; //constant1
     $venusu=$venust/1577917500; //constant2
     $venusv=(int)$venusu;
     $venusw=$venusu-$venusv;
     $venusx=$venusw*360;
 

     //dessantra correction for true mean venus 2
    $venusdeg=230.15; // constant3

  if ($venusdeg<$venusx ) {
  # code...
  $venusadd=$venusdeg+360;

  $venusy=$venusadd-$venusx;

  
 }
 else{

  $venusy=$venusdeg-$venusx;
  
 }

 if ($venusy>360) {
      # code...
      $venusfinaldegval=$venusy-360;

      
     }
     else{
      $venusfinaldegval=$venusy;
      
     }
      
     //manda calculation


     $venusa1=$a-1;
     $venusmonth1=$month-1;
     $venusdate1=$date-1;
     $venusyearvalue=4620-$venusa1;
     $venusmonthmul=$venusmonth1*30.478;
     $venusdateadd=$venusmonthmul+$date1;
     $venusyearvaluefinal=$venusdateadd/365.256; 
     $venustotalyear=$venusyearvalue-$venusyearvaluefinal;



    //manda uccha

     $venusmandauccha=$venustotalyear*360*535; //constant 6
     $venusmandaucchafinal=$venusmandauccha/4320000000; //constant 7


     if ($venusmandaucchafinal>80.2631972) {
       # code...
      $venusadddition=80.2631972+360;
      $venusmandaucchavalue=$venusadddition-$venusmandaucchafinal;
      //echo "op1";
     }
     else{
      $venusmandaucchavalue=80.2631972-$venusmandaucchafinal; //manda uccha value
      //echo "op2";
     }

      //sighra correction and sighrakendra

     //meansun-meanjupiter add 360 step

     
       $venussighrakendra=$venusfinaldegval;
     

     $venussine1sighra=sin($venussighrakendra*3.14159265/180); //sine 

     $venuscos1sighra=cos($venussighrakendra*3.14159265/180); //cos

     if ($venussine1sighra<0) {
      # code...
      $venussinesighra=-($venussine1sighra);
     }
     else{

       $venussinesighra=$venussine1sighra;
     }
     if ($venuscos1sighra<0) {
      # code...
      $venuscossighra=-($venuscos1sighra);
     }
     else{

       $venuscossighra=$venuscos1sighra;
     }
 


     //pes formula

     $venussub11=$venussighrape-$venussighrap0;
     $venussub22=$venussub11*$venussinesighra;
     $venuspes=$venussighrape-$venussub22;

     //doh phala

     $venusdohphala1=$venuspes*3438*$venussinesighra;
     $venusdohphala=$venusdohphala1/360;

     //koti phala

     $venuskotiphala1=$venuspes*3438*$venuscossighra;
     $venuskotiphala=$venuskotiphala1/360;

     //sphuta koti

     if ($venussighrakendra>=90 && $venussighrakendra<=270) {
       # code...
      $venussphutakoti=3438-$venuskotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($venussighrakendra>=0 && $venussighrakendra<=90) {
       # code...
      $venussphutakoti=3438+$venuskotiphala;
      //echo "quadrant1";


     }
     elseif ($venussighrakendra>=270 && $venussighrakendra<=360) {
       # code...

      $venussphutakoti=3438+$venuskotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $venushyp1=$venusdohphala*$venusdohphala;
     $venushyp2=$venussphutakoti*$venussphutakoti;
     $venushyp3=$venushyp1+$venushyp2;
     $venuskarna=sqrt($venushyp3);

     //sighra correction

     $venussighracorr=$venusdohphala/$venuskarna;
     $venussighracorr1=asin($venussighracorr);
     $venussighracorrection=$venussighracorr1*180/3.14159265;

     $venushalfsighracorrection=$venussighracorrection/2;

     //new manda uccha value condition must
     if ($venussighrakendra>180) {
       # code...
      $venusnewmandauccha=$venusmandaucchavalue+$venushalfsighracorrection; 

     }
     else{
      $venusnewmandauccha=$venusmandaucchavalue-$venushalfsighracorrection; 


     }

     // manda kendra

     if ($finaldegval<$venusnewmandauccha) {
       # code...
      $finaldegval1=$finaldegval+360;
      $venusmandakendra=$finaldegval1-$venusnewmandauccha;
     }
     else{
      $venusmandakendra=$finaldegval-$venusnewmandauccha;
     }


      $venussine1=sin($venusmandakendra*3.14159265/180); //finding sin

     if ($venussine1<0) {
      # code...
      $venussine=-($venussine1);
     }
     else{

       $venussine=$venussine1;
     }
     
   
     //echo "$sine";

     //pem formula

     $venussub1=$venuspe-$venusp0;
     $venussub2=$venussub1*$venussine;
     $venuspem=$venuspe-$venussub2;

     //manda correction;

     $venusmandacorrection1=$venuspem*3438*$venussine;
     $venusmandacorrection=$venusmandacorrection1/360;
     $venusmandacorrectionmin=$venusmandacorrection/60;

     //true mean venus  condition must

     if ($venusmandakendra>180) {
      # code...

      $venustruemean=$finaldegval+$venusmandacorrectionmin; 
      //the value will be in minus so + to subtract
     }

     else{

      $venustruemean=$finaldegval-$venusmandacorrectionmin;

     }
    


     //venus sighra uccha

     $venussighrauccha1=$venussighrakendra+$finaldegval;

     
     if ($venussighrauccha1>360) {
      # code...
      $venussighrauccha=$venussighrauccha1-360;
     }
     else{
      $venussighrauccha=$venussighrauccha1;
     }


     //new sighra kendra

     
     if ($venussighrauccha<$venustruemean) {
      # code...
      $venusaddneww=$venussighrauccha+360;
      $venusnewsighrakendra=$venusaddneww-$venustruemean;

     }
     else{
      $venusnewsighrakendra=$venussighrauccha-$venustruemean;
     }

     //new sine and cos

     $venussine1sighranew=sin($venusnewsighrakendra*3.14159265/180); //sine 

     $venuscos1sighranew=cos($venusnewsighrakendra*3.14159265/180); //cos

     if ($venussine1sighranew<0) {
      # code...
      $venussinesighranew=-($venussine1sighranew);
     }
     else{

       $venussinesighranew=$venussine1sighranew;
     }
     if ($venuscos1sighranew<0) {
      # code...
      $venuscossighranew=-($venuscos1sighranew);
     }
     else{

       $venuscossighranew=$venuscos1sighranew;
     }




     // new pes formula

     $venussub11new=$venussighrape-$venussighrap0;
     $venussub22new=$venussub11new*$venussinesighranew; //no minus sign
     $venuspesnew=$venussighrape-$venussub22new;

     // new doh phala

     $venusdohphala1new=$venuspesnew*3438*$venussinesighranew;
     $venusdohphalanew=$venusdohphala1new/360;

     //new koti phala

     $venuskotiphala1new=$venuspesnew*3438*$venuscossighranew;
     $venuskotiphalanew=$venuskotiphala1new/360;

     //new sphuta koti

     if ($venusnewsighrakendra>=90 && $venusnewsighrakendra<=270) {
       # code...
      $venussphutakotinew=3438-$venuskotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($venusnewsighrakendra>=0 && $venusnewsighrakendra<=90) {
       # code...
      $venussphutakotinew=3438+$venuskotiphalanew;
      //echo "quadrant1";


     }
     elseif ($venusnewsighrakendra>=270 && $venusnewsighrakendra<=360) {
       # code...

      $venussphutakotinew=3438+$venuskotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $venushyp1new=$venusdohphalanew*$venusdohphalanew;
     $venushyp2new=$venussphutakotinew*$venussphutakotinew;
     $venushyp3new=$venushyp1new+$venushyp2new;
     $venuskarnanew=sqrt($venushyp3new);

     //new sighra correction

     $venussighracorrnew=$venusdohphalanew/$venuskarnanew;
     $venussighracorr1new=asin($venussighracorrnew);
     $venussighracorrectionnew=$venussighracorr1new*180/3.14159265;



     
     //true mean venus 1 consition must

     if ($venusnewsighrakendra>180) {
      # code...

      if ($venustruemean<$venussighracorrectionnew) {
        # code...
        $venustruemeanadd=$venustruemean+360;
        $venustruemean1=$venustruemeanadd-$venussighracorrectionnew;
     }
     else
     {
      $venustruemean1=$venustruemean-$venussighracorrectionnew;
     }
     }
     

     else{

      $venustruemean1=$venustruemean+$venussighracorrectionnew;
    }
    
    
    //dessantra

    
      
     if ($ujjain<$longitude) {
        # code...
        $ujjainadd=$ujjain+360;
        $venusdiff=$ujjainadd-$longitude;
      }
      else{
        $venusdiff=$ujjain-$longitude;
      }


     
     $venusdiff1=-($venusdiff); //sign changed for below 4620

     $venusangle=$venusmotion*$venusdiff1;

     $venusangledeg=$venusangle/360;    


     $venustruemean2=$venustruemean1+$venusangledeg; //meanjupiter value

      //bhujantara correction

     $venusbhu= $mandacorrectionmin*$venusmotion;
     $venusbhujantaracorrection=$venusbhu/360;


     $venustruesun=$venustruemean2+$venusbhujantaracorrection;

     $venusyy=(int)$venustruesun; //deg

     
     $venusz=$venustruesun-$venusyy;
     $venusaa=$venusz*60;
     $venusbb=(int)$venusaa; //min
     $venuscc=$venusaa-$venusbb;
     $venusdd=$venuscc*60;
     $venusee=(int)$venusdd; //sec
     $venusff=$venusdd-$venusee;
     $venusgg=$venusff*60;
     $venusjj=sprintf('%0.2f',$venusgg); //third


     if ($venusyy>360) {
      # code...
      $venusfinaldegvall=$venusyy-360;
     }
     else{
      $venusfinaldegvall=$venusyy;
     }



      $venusop= "$venusfinaldegvall °  $venusbb' $venusee'' $venusjj'''";   

      echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF VENUS IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$venusop."</font></p></h1>";

    

    


      //for mercury

      $mercuryt=$q*13617060; //constant1
     $mercuryu=$mercuryt/1577917500; //constant2
     $mercuryv=(int)$mercuryu;
     $mercuryw=$mercuryu-$mercuryv;
     $mercuryx=$mercuryw*360;


 

 //dessantra correction for true mean venus 2
    $mercurydeg=269.55; // constant3

  if ($mercurydeg<$mercuryx ) {
  # code...
  $mercuryadd=$mercurydeg+360;

  $mercuryy=$mercuryadd-$mercuryx;

  
 }
 else{

  $mercuryy=$mercurydeg-$mercuryx;
  
 }


 if ($mercuryy>360) {
      # code...
      $mercuryfinaldegval=$mercuryy-360;

      
     }
     else{
      $mercuryfinaldegval=$mercuryy;
      
     }


     //manda calculation


     $mercurya1=$a-1;
     $mercurymonth1=$month-1;
     $mercurydate1=$date-1;
     $mercuryyearvalue=4620-$mercurya1;
     $mercurymonthmul=$mercurymonth1*30.478;
     $mercurydateadd=$mercurymonthmul+$date1;
     $mercuryyearvaluefinal=$mercurydateadd/365.256; 
     $mercurytotalyear=$mercuryyearvalue-$mercuryyearvaluefinal;


    //manda uccha

     $mercurymandauccha=$mercurytotalyear*360*368; //constant 6
     $mercurymandaucchafinal=$mercurymandauccha/4320000000; //constant 7


     if ($mercurymandaucchafinal>226.85668) {
       # code...
      $mercuryadddition=226.85668+360;
      $mercurymandaucchavalue=$mercuryadddition-$mercurymandaucchafinal;
      //echo "op1";
     }
     else{
      $mercurymandaucchavalue=226.85668-$mercurymandaucchafinal; //manda uccha value
      //echo "op2";
     }

      //sighra correction and sighrakendra

     //meansun-meanjupiter add 360 step

    
       $mercurysighrakendra=$mercuryfinaldegval;
    

     $mercurysine1sighra=sin($mercurysighrakendra*3.14159265/180); //sine 

     $mercurycos1sighra=cos($mercurysighrakendra*3.14159265/180); //cos

     if ($mercurysine1sighra<0) {
      # code...
      $mercurysinesighra=-($mercurysine1sighra);
     }
     else{

       $mercurysinesighra=$mercurysine1sighra;
     }
     if ($mercurycos1sighra<0) {
      # code...
      $mercurycossighra=-($mercurycos1sighra);
     }
     else{

       $mercurycossighra=$mercurycos1sighra;
     }


     //pes formula

     $mercurysub11=$mercurysighrape-$mercurysighrap0;
     $mercurysub22=$mercurysub11*$mercurysinesighra;
     $mercurypes=$mercurysighrape-$mercurysub22;

     //doh phala

     $mercurydohphala1=$mercurypes*3438*$mercurysinesighra;
     $mercurydohphala=$mercurydohphala1/360;

     //koti phala

     $mercurykotiphala1=$mercurypes*3438*$mercurycossighra;
     $mercurykotiphala=$mercurykotiphala1/360;

     //sphuta koti

     if ($mercurysighrakendra>=90 && $mercurysighrakendra<=270) {
       # code...
      $mercurysphutakoti=3438-$mercurykotiphala;

      //echo "quadrant2 3";

      
     }
     elseif ($mercurysighrakendra>=0 && $mercurysighrakendra<=90) {
       # code...
      $mercurysphutakoti=3438+$mercurykotiphala;
      //echo "quadrant1";


     }
     elseif ($mercurysighrakendra>=270 && $mercurysighrakendra<=360) {
       # code...

      $mercurysphutakoti=3438+$mercurykotiphala;
      //echo "quadrant4";
     }

     //sighra karna hypotenuse

     $mercuryhyp1=$mercurydohphala*$mercurydohphala;
     $mercuryhyp2=$mercurysphutakoti*$mercurysphutakoti;
     $mercuryhyp3=$mercuryhyp1+$mercuryhyp2;
     $mercurykarna=sqrt($mercuryhyp3);

     //sighra correction

     $mercurysighracorr=$mercurydohphala/$mercurykarna;
     $mercurysighracorr1=asin($mercurysighracorr);
     $mercurysighracorrection=$mercurysighracorr1*180/3.14159265;

     $mercuryhalfsighracorrection=$mercurysighracorrection/2;

     //new manda uccha value condition must
     if ($mercurysighrakendra>180) {
       # code...
      $mercurynewmandauccha=$mercurymandaucchavalue+$mercuryhalfsighracorrection; 

     }
     else{
      $mercurynewmandauccha=$mercurymandaucchavalue-$mercuryhalfsighracorrection; 


     }



     // manda kendra

     if ($finaldegval<$mercurynewmandauccha) {
       # code...
      $finaldegval1=$finaldegval+360;
      $mercurymandakendra=$finaldegval1-$mercurynewmandauccha;
     }
     else{
      $mercurymandakendra=$finaldegval-$mercurynewmandauccha;
     }

     

      $mercurysine1=sin($mercurymandakendra*3.14159265/180); //finding sin

     if ($mercurysine1<0) {
      # code...
      $mercurysine=-($mercurysine1);
     }
     else{

       $mercurysine=$mercurysine1;
     }
     
   
     //echo "$sine";

     //pem formula

     $mercurysub1=$mercurype-$mercuryp0;
     $mercurysub2=$mercurysub1*$mercurysine;
     $mercurypem=$mercurype-$mercurysub2;

     //manda correction;

     $mercurymandacorrection1=$mercurypem*3438*$mercurysine;
     $mercurymandacorrection=$mercurymandacorrection1/360;
     $mercurymandacorrectionmin=$mercurymandacorrection/60;

     //true mean venus  condition must

     if ($mercurymandakendra>180) {
      # code...

      $mercurytruemean=$finaldegval+$mercurymandacorrectionmin; 
      //the value will be in minus so + to subtract
     }

     else{

      $mercurytruemean=$finaldegval-$mercurymandacorrectionmin;

     }
    
     //venus sighra uccha

     $mercurysighrauccha1=$mercurysighrakendra+$finaldegval;

    

     if ($mercurysighrauccha1>360) {
      # code...
      $mercurysighrauccha=$mercurysighrauccha1-360;
     }
     else{
      $mercurysighrauccha=$mercurysighrauccha1;
     }

     //new sighra kendra

     
     if ($mercurysighrauccha<$mercurytruemean) {
      # code...
      $mercuryaddneww=$mercurysighrauccha+360;
      $mercurynewsighrakendra=$mercuryaddneww-$mercurytruemean;

     }
     else{
      $mercurynewsighrakendra=$mercurysighrauccha-$mercurytruemean;
     }
 

     //new sine and cos

     $mercurysine1sighranew=sin($mercurynewsighrakendra*3.14159265/180); //sine 

     $mercurycos1sighranew=cos($mercurynewsighrakendra*3.14159265/180); //cos

     if ($mercurysine1sighranew<0) {
      # code...
      $mercurysinesighranew=-($mercurysine1sighranew);
     }
     else{

       $mercurysinesighranew=$mercurysine1sighranew;
     }
     if ($mercurycos1sighranew<0) {
      # code...
      $mercurycossighranew=-($mercurycos1sighranew);
     }
     else{

       $mercurycossighranew=$mercurycos1sighranew;
     }




     // new pes formula

     $mercurysub11new=$mercurysighrape-$mercurysighrap0;
     $mercurysub22new=$mercurysub11new*$mercurysinesighranew; //no minus sign
     $mercurypesnew=$mercurysighrape-$mercurysub22new;

     // new doh phala

     $mercurydohphala1new=$mercurypesnew*3438*$mercurysinesighranew;
     $mercurydohphalanew=$mercurydohphala1new/360;

     //new koti phala

     $mercurykotiphala1new=$mercurypesnew*3438*$mercurycossighranew;
     $mercurykotiphalanew=$mercurykotiphala1new/360;

     //new sphuta koti

     if ($mercurynewsighrakendra>=90 && $mercurynewsighrakendra<=270) {
       # code...
      $mercurysphutakotinew=3438-$mercurykotiphalanew;

      //echo "quadrant2 3";

      
     }
     elseif ($mercurynewsighrakendra>=0 && $mercurynewsighrakendra<=90) {
       # code...
      $mercurysphutakotinew=3438+$mercurykotiphalanew;
      //echo "quadrant1";


     }
     elseif ($mercurynewsighrakendra>=270 && $mercurynewsighrakendra<=360) {
       # code...

      $mercurysphutakotinew=3438+$mercurykotiphalanew;
      //echo "quadrant4";
     }

     //new sighra karna hypotenuse

     $mercuryhyp1new=$mercurydohphalanew*$mercurydohphalanew;
     $mercuryhyp2new=$mercurysphutakotinew*$mercurysphutakotinew;
     $mercuryhyp3new=$mercuryhyp1new+$mercuryhyp2new;
     $mercurykarnanew=sqrt($mercuryhyp3new);

     //new sighra correction

     $mercurysighracorrnew=$mercurydohphalanew/$mercurykarnanew;
     $mercurysighracorr1new=asin($mercurysighracorrnew);
     $mercurysighracorrectionnew=$mercurysighracorr1new*180/3.14159265;



     
     //true mean venus 1 consition must

    if ($mercurynewsighrakendra>180) {
      # code...
        if ($mercurytruemean<$mercurysighracorrectionnew) {
        # code...
        $mercurytruemeanadd=$mercurytruemean+360;
        $mercurytruemean1=$mercurytruemeanadd-$mercurysighracorrectionnew;
     }
     else{
      $mercurytruemean1=$mercurytruemean-$mercurysighracorrectionnew;
     }

     }

      

     else{

      $mercurytruemean1=$mercurytruemean+$mercurysighracorrectionnew;
    }
    

    

    //dessantra

    
      
     if ($ujjain<$longitude) {
        # code...
        $ujjainadd=$ujjain+360;
        $mercurydiff=$ujjainadd-$longitude;
      }
      else{
        $mercurydiff=$ujjain-$longitude;
      }


     
     $mercurydiff1=-($mercurydiff); //sign changed for below 4620

     $mercuryangle=$mercurymotion*$mercurydiff1;

     $mercuryangledeg=$mercuryangle/360;    


     $mercurytruemean2=$mercurytruemean1+$mercuryangledeg; //meanjupiter value

      //bhujantara correction

     $mercurybhu= $mandacorrectionmin*$mercurymotion;
     $mercurybhujantaracorrection=$mercurybhu/360;


     $mercurytruesun=$mercurytruemean2+$mercurybhujantaracorrection;

     $mercuryyy=(int)$mercurytruesun; //deg

     
     $mercuryz=$mercurytruesun-$mercuryyy;
     $mercuryaa=$mercuryz*60;
     $mercurybb=(int)$mercuryaa; //min
     $mercurycc=$mercuryaa-$mercurybb;
     $mercurydd=$mercurycc*60;
     $mercuryee=(int)$mercurydd; //sec
     $mercuryff=$mercurydd-$mercuryee;
     $mercurygg=$mercuryff*60;
     $mercuryjj=sprintf('%0.2f',$mercurygg); //third


     if ($mercuryyy>360) {
      # code...
      $mercuryfinaldegvall=$mercuryyy-360;
     }
     else{
      $mercuryfinaldegvall=$mercuryyy;
     }



      $mercuryop= "$mercuryfinaldegvall °  $mercurybb' $mercuryee'' $mercuryjj'''";   

    echo "<br/>";

      echo "<h1><font color=#fff><p align=center>THE EXACT POSITION OF MERCURY IS:</font></p></h1>";
       echo "<br/>";
      echo "<h1><font color=#fff><p align=center>".$mercuryop."</font></p></h1>";


      }


     else{
  echo "INVALID NUMBER";
  }



?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
  </style>
</head>
<body style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(sp.jpg)">

</body>
</html>