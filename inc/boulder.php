<!-- Boulder Description-->

<div class="topo-row-padding w3-white <?php if ($problem[$basecode]['imageo'][$bouldernumber - 1] == "y"){if ($full != "y") { echo "w3-hide"; }}?>">
  <div class="topo-align avoid-clicks"><?php echo "<a class='anchor' id='boulder"; print_r($bouldernumber); echo "'></a>"; ?>
    <img src="../img/pro/<?php echo $section; ?>_0<?php if ($bouldernumber < 10){echo 0;} echo $bouldernumber; if ($problem[$basecode]['imagef'][$bouldernumber - 1] == "y"){ if ($full == "y") { echo "f"; }} ?>_1200.jpg" alt="<?php echo $section; ?>1" style='width:2000px; max-width:100%' class='w3-hover-opacity w3-full' sizes='(min-width:900px) 44vw, 100vw'
    srcset="../img/pro/<?php echo $section; ?>_0<?php if ($bouldernumber < 10){echo 0;} echo $bouldernumber; if ($problem[$basecode]['imagef'][$bouldernumber - 1] == "y"){ if ($full == "y") { echo "f"; }} ?>_500.jpg 500w, ../img/pro/<?php echo $section; ?>_0<?php if ($bouldernumber < 10){echo 0;} echo $bouldernumber; if ($problem[$basecode]['imagef'][$bouldernumber - 1] == "y"){ if ($full == "y") { echo "f"; }} ?>_800.jpg 800w, ../img/pro/<?php echo $section; ?>_0<?php if ($bouldernumber < 10){echo 0;} echo $bouldernumber; if ($problem[$basecode]['imagef'][$bouldernumber - 1] == "y"){ if ($full == "y") { echo "f"; }} ?>_1000.jpg 1000w, ../img/pro/<?php echo $section; ?>_0<?php if ($bouldernumber < 10){echo 0;} echo $bouldernumber; if ($problem[$basecode]['imagef'][$bouldernumber - 1] == "y"){ if ($full == "y") { echo "f"; }} ?>_1100.jpg 1100w, ../img/pro/<?php echo $section; ?>_0<?php if ($bouldernumber < 10){echo 0;} echo $bouldernumber; if ($problem[$basecode]['imagef'][$bouldernumber - 1] == "y"){ if ($full == "y") { echo "f"; }} ?>_1200.jpg 1200w, ../img/pro/<?php echo $section; ?>_0<?php if ($bouldernumber < 10){echo 0;} echo $bouldernumber; if ($problem[$basecode]['imagef'][$bouldernumber - 1] == "y"){ if ($full == "y") { echo "f"; }} ?>_1500.jpg 1500w, ../img/pro/<?php echo $section; ?>_0<?php if ($bouldernumber < 10){echo 0;} echo $bouldernumber; if ($problem[$basecode]['imagef'][$bouldernumber - 1] == "y"){ if ($full == "y") { echo "f"; }} ?>_1600.jpg 1600w, ../img/pro/<?php echo $section; ?>_0<?php if ($bouldernumber < 10){echo 0;} echo $bouldernumber; if ($problem[$basecode]['imagef'][$bouldernumber - 1] == "y"){ if ($full == "y") { echo "f"; }} ?>_1800.jpg 1800w, ../img/pro/<?php echo $section; ?>_0<?php if ($bouldernumber < 10){echo 0;} echo $bouldernumber; if ($problem[$basecode]['imagef'][$bouldernumber - 1] == "y"){ if ($full == "y") { echo "f"; }} ?>_2200.jpg 2200w">
  </div>
  <div class="topo-align">
    <div class="topo-text ">

<?php

for($p = 0; $p < $problem[$basecode]['problemsperboulder'][$bouldernumber - 1]; $p++){
 include("inc/problem.php");
}
?>

</div>
</div>
</div>