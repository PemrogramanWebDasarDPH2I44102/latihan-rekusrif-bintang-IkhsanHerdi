<?php

 function rekursif($i){
  $a = $i;
  echo "<br>".rek($a);
  $i++;
  if($i < 6){
    rekursif($i);
  }    
}

 function rek($p){
    echo "*";
    $p++;
    if ($p < 6){
        rek ($p);
    }
}
rekursif(1);

echo "<br><br>===============================================================================================================<br><br>";

$batas = 1;
function rkursif($a = 1){
    
    global $batas;
    echo $a;
    $a++;
    if($a<=$batas){
      rkursif($a);
    }else {
        echo "<br>";
        $batas++;
        if ($batas<=5) {
            rkursif();
        }
    }
  }
  rkursif();

?> 
