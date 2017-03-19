<?php
$aList = array(9,9,8,7,7,6,5,5,4,3,3,2,1,1);
$foundS="";
$arrayLen = count($aList);

for($x=0;$x<$arrayLen;$x++){
  $temp0=$aList[$x];
  $checkF=false;
    for($y=0;$y<$arrayLen;$y++){
      If($x!=$y){
        if($temp0===$aList[$y]){
          $checkF=false;
          break;
        }else{$checkF=true;}
      }
    }
  if($checkF){$foundS=$foundS . $temp0 . " ";}
}

echo $foundS;
