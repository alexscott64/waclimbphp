<!--PROBLEM TEMPLATE -->

<div class="topo <?php if ($problem[++$areacode]['comprehensiveonly'] == "y"){ if ($full != "y") { echo "w3-hide"; }} ?>"><b><?php echo "<a class='anchor' id='"; print_r($areacode); echo "'></a>"; ?><?php if ($full == "y") {echo $problem[$areacode]['numberfull']; } else if($full != "y") { echo $problem[$areacode]['numberselect'];}?>. <?php echo $problem[$areacode]['name'];?><?php if ($problem[$areacode]['SDS'] == "y") {echo " SDS"; }?> 

<?php if (is_string($problem[$areacode]["grade"])){$gradeadjust = $problem[$areacode]["grade"];} else { $gradeadjust = round(pow(($problem[$areacode]["grade"]), 1.056), 1);}
if (($gradeadjust - floor($gradeadjust)) == 0.5 OR is_float($problem[$areacode]["grade"])){$gradeadjust = $gradeadjust;} else {$gradeadjust = round($gradeadjust,0);} 

if (isset($problem[$areacode]["classicgrade"])){$gradeadjust = $problem[$areacode]["classicgrade"];}  
?>

<?php if (strlen($problem[$areacode]['description']) < 70 && strlen($problem[$areacode]['description']) > 50){$emsp = "&emsp; &emsp; &emsp; &emsp;";} else if (strlen($problem[$areacode]['description']) < 50){$emsp = "&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;";} else {$emsp = "";}?>

<?php if (is_string($problem[$areacode]["grade"]) && ($grade == "TMI" or $grade == null)){echo " V".$problem[$areacode]["grade"]." ";} else if ($grade == "h" && is_float($problem[$areacode]["grade"])){echo " V".floor($problem[$areacode]["grade"])."/".ceil($problem[$areacode]["grade"])." ";} else if ($grade == "h"){echo " V".$problem[$areacode]["grade"];} else if ($problem[$areacode]["classicgrade"] == null && ($grade == "TMI" or $grade == null) && is_float($problem[$areacode]["grade"]) or ($gradeadjust - floor($gradeadjust)) == 0.5) {$problemgrade = " V".floor($gradeadjust)."/".ceil($gradeadjust)." ";} else {$problemgrade = " V".($gradeadjust)." ";} if (($grade == "TMI" or $grade == null) && is_string($problem[$areacode]["grade"])){echo "";} else if(($grade == "TMI" or $grade == null)) {echo $problemgrade." ";} ?></b>

<!--SUN DIAL CODE -->


<?php if(isset($problem[$areacode]['windicon'])) {${'radialgradient'.$areacode} = "#767677 ".$problem[$areacode]['windicon'][0]."deg, #767677 ".$problem[$areacode]['windicon'][1]."deg, #0623e0 ".$problem[$areacode]['windicon'][2]."deg, #0623e0 ".$problem[$areacode]['windicon'][3]."deg, #767677 ".$problem[$areacode]['windicon'][4]."deg, #767677 ".$problem[$areacode]['windicon'][5]."deg";} ?>

<style>




<?php echo(".donut".$areacode); ?> {
  position: relative;
  width: 20px;
  height: 20px;
  background: radial-gradient(white 40%, transparent 41%),
    conic-gradient(<?php echo(${'radialgradient'.$areacode});?>);
  display: inline-block;
  border-radius: 50%;
}

<?php echo(".donut".$areacode); ?>::after {
  display: inline-block;
  content:'';

  color: #fff;
  background-image: url("../img/ico/wind.png");
  background-size:100% 100%;
  width: 100%;
  height: 100%;

}

<?php

if(is_null)

$fuzzyfactor = 7;

if(isset($problem[$areacode]['morningshade']) && is_null($problem[$areacode]['eveningshade'])){
${"lineargradientsun".$areacode} = "linear-gradient(45deg, HSL(49, 0%, 40%) 0% ".($problem[$areacode]['morningshade'])."%,  HSL(49, 95%, 60%) ".($problem[$areacode]['morningshade'] + $fuzzyfactor)."% 100%);";
${"lineargradientroundbefore".$areacode} = "linear-gradient(90deg, HSL(49, 0%, 40%) 0% ".(($problem[$areacode]['morningshade'] - 14.6) * sqrt(2))."%, HSL(49, 95%, 60%) ".(($problem[$areacode]['morningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
${"lineargradientroundafter".$areacode} = "linear-gradient(90deg, HSL(60, 10%, 50%) 0% ".(($problem[$areacode]['morningshade'] - 14.6) * sqrt(2))."%, HSL(60, 95%, 60%) ".(($problem[$areacode]['morningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%, HSL(60, 10%, 50%) 0% 0%);";
}

if(isset($problem[$areacode]['morningshade']) && isset($problem[$areacode]['eveningshade'])){
  ${"lineargradientsun".$areacode} = "linear-gradient(45deg, HSL(49, 0%, 40%) 0% ".($problem[$areacode]['morningshade'])."%,  HSL(49, 95%, 60%) ".($problem[$areacode]['morningshade'] + $fuzzyfactor)."% ".($problem[$areacode]['eveningshade'])."%, HSL(49, 0%, 40%) ".($problem[$areacode]['eveningshade'] + $fuzzyfactor)."% 100%);";
  ${"lineargradientroundbefore".$areacode} = "linear-gradient(90deg, HSL(49, 0%, 40%) 0% ".(($problem[$areacode]['morningshade'] - 14.6) * sqrt(2))."%, HSL(49, 95%, 60%) ".(($problem[$areacode]['morningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% ".($problem[$areacode]['eveningshade'])."%, HSL(49, 0%, 40%) ".(($problem[$areacode]['eveningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
  ${"lineargradientroundafter".$areacode} = "linear-gradient(90deg, HSL(60, 10%, 50%) 0% ".(($problem[$areacode]['morningshade'] - 14.6) * sqrt(2))."%, HSL(60, 95%, 60%) ".(($problem[$areacode]['morningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% ".(($problem[$areacode]['eveningshade'] - 14.6) * sqrt(2))."%, HSL(60, 10%, 50%) ".(($problem[$areacode]['eveningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 0%);";

}

if(is_null($problem[$areacode]['morningshade']) && isset($problem[$areacode]['eveningshade'])){
  ${"lineargradientsun".$areacode} = "linear-gradient(45deg, HSL(49, 95%, 60%) 0% ".($problem[$areacode]['eveningshade'])."%,  HSL(49, 0%, 40%) ".($problem[$areacode]['eveningshade'] + $fuzzyfactor)."% 100%);";
  ${"lineargradientroundbefore".$areacode} = "linear-gradient(90deg, HSL(49, 95%, 60%) 0% ".(($problem[$areacode]['eveningshade'] - 14.6) * sqrt(2))."%, HSL(49, 0%, 40%) ".(($problem[$areacode]['eveningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
  ${"lineargradientroundafter".$areacode} = "linear-gradient(90deg, HSL(60, 95%, 60%) 0% ".(($problem[$areacode]['eveningshade'] - 14.6) * sqrt(2))."%, HSL(60, 10%, 50%) ".(($problem[$areacode]['eveningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
  }

  if(isset($problem[$areacode]['afternoonshade'])){
    ${"lineargradientsun".$areacode} = "linear-gradient(45deg, HSL(49, 95%, 60%) 0% ".($problem[$areacode]['afternoonshade'][0])."%,  HSL(49, 0%, 40%) ".($problem[$areacode]['afternoonshade'][0] + $fuzzyfactor)."% ".($problem[$areacode]['afternoonshade'][1])."%, HSL(49, 95%, 60%) ".($problem[$areacode]['afternoonshade'][1] + $fuzzyfactor)."% 100%);";
    
    ${"lineargradientroundbefore".$areacode} = "linear-gradient(90deg, HSL(49, 95%, 60%) 0% ".(($problem[$areacode]['afternoonshade'][0] - 14.6) * sqrt(2))."%, HSL(49, 0%, 40%) ".(($problem[$areacode]['afternoonshade'][0] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% ".(($problem[$areacode]['afternoonshade'][1] - 14.6) * sqrt(2))."%, HSL(49, 95%, 60%) ".(($problem[$areacode]['afternoonshade'][1] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
    
    ${"lineargradientroundafter".$areacode} = "linear-gradient(90deg, HSL(60, 95%, 60%) 0% ".(($problem[$areacode]['afternoonshade'][0] - 14.6) * sqrt(2))."%, HSL(60, 10%, 50%) ".(($problem[$areacode]['afternoonshade'][0] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% ".(($problem[$areacode]['afternoonshade'][1] - 14.6) * sqrt(2))."%, HSL(60, 95%, 60%) ".(($problem[$areacode]['afternoonshade'][1] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
    }

$lineargradientroundbefore = null;
$lineargradientroundafter = null;
?>

<?php echo(".sun".$areacode); ?> {
  position: relative;
  display: inline-block;
  top: 3px;
  margin-left: 2px;
  margin-right: 2px;

}

<?php echo(".sun".$areacode); ?>::after {
    content: '';
   
    height: 15px;
    width: 15px;
    border-radius: 0px;
    display: inline-block;

}
<?php echo(".sun".$areacode); ?>::before{
    content: '';
    height: 15px;
    width: 15px;
    border-radius: 2px;
    display: inline-block;

    position: absolute;
    top: 0;
    transform: rotate(45deg);
    background: <?php echo(${"lineargradientsun".$areacode}); ?>
  }
  

  

  <?php echo(".round".$areacode); ?>{
  position: absolute;
}
<?php echo(".round".$areacode); ?>::before{
    content: '';
    background-color: #FDD835;
    background: <?php echo(${"lineargradientroundbefore".$areacode}); ?>
    height: 15px;
    width: 15px;
    border-radius: 2px;
    display: block;
   
    
  }
  <?php echo(".round".$areacode); ?>::after{
    content: '';
    background-color: #FFEB3B;
    background: <?php echo(${"lineargradientroundafter".$areacode}); ?>
    height: 15px;
    width: 15px;
    border-radius: 100%;
    display: block;
    position: absolute;
    top: 0;
    



</style>

<!-- END SUN DIAL CODE -->


<?php echo($test);?><span>
    <i class="w3-text-yellow w3-large <?php if ($problem[$areacode]['star'] == "n") {echo "w3-hide"; } ?> fas fa-solid fa-star"></i>
        <i class="w3-text-red w3-large <?php if ($problem[$areacode]['best'] == "n") {echo "w3-hide"; } ?> fas fa-solid fa-heart"></i>
        <img style="width: 20px; margin-top: -3px;" class="<?php if ($problem[$areacode]['bench'] == "n") {echo "w3-hide"; } ?>" src="/img/ico/bench.png" alt="star">
        <i class="w3-text-brown w3-large <?php if ($problem[$areacode]['turd'] == "n") {echo "w3-hide"; } ?> fas fa-solid fa-poo"></i>
        <i class="w3-text-green w3-large <?php if ($problem[$areacode]['tall'] == "n") {echo "w3-hide"; } ?> fas fa-solid fa-mountain"></i>
        <i class="w3-large <?php if ($problem[$areacode]['risk'] == "n") {echo "w3-hide"; } ?> fas fa-skull-crossbones"></i>
        <span style="transform: translate(-1px, 4px); margin-left: 0px; margin-right: -2px;" class="<?php echo("donut".$areacode);?> <?php if (is_null($problem[$areacode]['windicon'])) {echo "w3-hide"; } ?>"></span>
        <div class="<?php echo("sun".$areacode); ?> <?php if (is_null($problem[$areacode]['morningshade']) && is_null($problem[$areacode]['afternoonshade']) && is_null($problem[$areacode]['eveningshade'])) {echo "w3-hide"; } ?>"><div class="<?php echo("round".$areacode); ?> <?php if (is_null($problem[$areacode]['morningshade']) && is_null($problem[$areacode]['afternoonshade']) && is_null($problem[$areacode]['eveningshade'])) {echo "w3-hide"; } ?>"></div></div>
      <span  <?php if (isset($problem[$areacode]['videourl'][1])) {echo "class='w3-dropdown-hover'"; } ?>>
      <?php if (empty($problem[$areacode]['videourl'][1])) {echo "<a href='" . $problem[$areacode]['videourl'][0] . "'>"; } ?><i class="w3-large w3-text-red w3-hover-opacity fab fa-youtube <?php if (empty($problem[$areacode]['videourl'][0])) { echo "w3-hide"; } ?>"></i><?php if (empty($problem[$areacode]['videourl'][1])) {echo "</a>";}?>
          <div class="w3-dropdown-content w3-bar-block w3-card-4 dropdown-menu-center">
          <a href="" class="w3-hide"></a>
            <?php 
            
            $videonumber = 0;
            for($v = 0; $v < count($problem[$areacode]['videourl']); $v++){
              include("inc/videolink.php");
              $videonumber++;
            }
            $videonumber = $videonumber - count($problem[$areacode]['videourl']) + 1;
            
            ?>
          </div>
      </span> </span>
      <br><?php echo $problem[$areacode]['description'].$emsp?>
    </div>