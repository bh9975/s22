<?php
$x=$_POST['txt1'];
$y=$_POST['txt2'];
$z=$_POST['txt3'];
$opt=$_POST['radio'];

 if($opt=='op1')
{
    
   $pos=strpos($x,$y);        
   echo "first occurance of:$y in $x is:$pos<br>";
  $last=strrpos($x,$y);
echo"lastoccurance of:$y in $x is:$last<br>";
}
else
if($opt=='op2')
{
  $cnt=substr_count($x,$y);
   echo"$y occurs $cnt times";
}
else
if($opt=='op3')
{
   echo"origonal string is:$x<br>";
  $rep=str_replace($y,$z,$x);
  echo"replaced string is:$rep<br>";
}
?>
