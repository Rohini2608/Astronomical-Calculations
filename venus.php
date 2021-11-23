<?php


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

      $venustruemean1=$venustruemean-$venussighracorrectionnew;
     }

     else{

      $venustruemean1=$venustruemean+$venussighracorrectionnew;
    }
    
    //dessantra

    
      
      $venusdiff=$ujjain-$longitude;

     
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

    



?>