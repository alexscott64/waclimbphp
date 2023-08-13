<?php 

include("inc/data.php");
if(isset($_GET['page'])){$page = $_GET['page'];} else {$page = 1;}
$areacode=$_GET['topo'];
$full = null;
$full = $_GET['full'];
$section = $problem[$areacode]['section'];
$title = $problem[$areacode]['title'];
$basecode= $areacode;
$area = $_GET["area"];
$lowgrade = $_GET["lowgrade"];
$highgrade = $_GET["highgrade"];
$star = $_GET["star"];
$best = $_GET["best"];
$bench = $_GET["bench"];
$turd = $_GET["turd"];
$tall = $_GET["tall"];
$risk = $_GET["risk"];
$poke = $_GET["poke"];
$vizzy = $_GET["vizzy"];
$grade = $_GET["grade"];

   include("inc/header.php");
   include("inc/topostyle.php");



  

   

// STEP 4 - function takes IDs and returns corresponding values from data.php 

function get_grade($grade,$id,$item,$problem){

  
  
 // <!--  SUN DIAL CODE -->

 if(isset($item['windicon'])) {${'radialgradient'.$id} = "(#767677 ".$item['windicon'][0]."deg, #767677 ".$item['windicon'][1]."deg, #0623e0 ".$item['windicon'][2]."deg, #0623e0 ".$item['windicon'][3]."deg, #767677 ".$item['windicon'][4]."deg, #767677 ".$item['windicon'][5]."deg";}

 $fuzzyfactor = 7;
  
 if(isset($item['morningshade']) && is_null($item['eveningshade'])){
 ${"lineargradientsun".$id} = "linear-gradient(45deg, HSL(49, 0%, 40%) 0% ".($item['morningshade'])."%,  HSL(49, 95%, 60%) ".($item['morningshade'] + $fuzzyfactor)."% 100%);";
 ${"lineargradientroundbefore".$id} = "linear-gradient(90deg, HSL(49, 0%, 40%) 0% ".(($item['morningshade'] - 14.6) * sqrt(2))."%, HSL(49, 95%, 60%) ".(($item['morningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
 ${"lineargradientroundafter".$id} = "linear-gradient(90deg, HSL(60, 10%, 50%) 0% ".(($item['morningshade'] - 14.6) * sqrt(2))."%, HSL(60, 95%, 60%) ".(($item['morningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%, HSL(60, 10%, 50%) 0% 0%);";
 }
 
 if(isset($item['morningshade']) && isset($item['eveningshade'])){
   ${"lineargradientsun".$id} = "linear-gradient(45deg, HSL(49, 0%, 40%) 0% ".($item['morningshade'])."%,  HSL(49, 95%, 60%) ".($item['morningshade'] + $fuzzyfactor)."% ".($item['eveningshade'])."%, HSL(49, 0%, 40%) ".($item['eveningshade'] + $fuzzyfactor)."% 100%);";
   ${"lineargradientroundbefore".$id} = "linear-gradient(90deg, HSL(49, 0%, 40%) 0% ".(($item['morningshade'] - 14.6) * sqrt(2))."%, HSL(49, 95%, 60%) ".(($item['morningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% ".($item['eveningshade'])."%, HSL(49, 0%, 40%) ".(($item['eveningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
   ${"lineargradientroundafter".$id} = "linear-gradient(90deg, HSL(60, 10%, 50%) 0% ".(($item['morningshade'] - 14.6) * sqrt(2))."%, HSL(60, 95%, 60%) ".(($item['morningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% ".(($item['eveningshade'] - 14.6) * sqrt(2))."%, HSL(60, 10%, 50%) ".(($item['eveningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 0%);";
 
 }
 
 if(is_null($item['morningshade']) && isset($item['eveningshade'])){
   ${"lineargradientsun".$id} = "linear-gradient(45deg, HSL(49, 95%, 60%) 0% ".($item['eveningshade'])."%,  HSL(49, 0%, 40%) ".($item['eveningshade'] + $fuzzyfactor)."% 100%);";
   ${"lineargradientroundbefore".$id} = "linear-gradient(90deg, HSL(49, 95%, 60%) 0% ".(($item['eveningshade'] - 14.6) * sqrt(2))."%, HSL(49, 0%, 40%) ".(($item['eveningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
   ${"lineargradientroundafter".$id} = "linear-gradient(90deg, HSL(60, 95%, 60%) 0% ".(($item['eveningshade'] - 14.6) * sqrt(2))."%, HSL(60, 10%, 50%) ".(($item['eveningshade'] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
   }
 
   if(isset($item['afternoonshade'])){
     ${"lineargradientsun".$id} = "linear-gradient(45deg, HSL(49, 95%, 60%) 0% ".($item['afternoonshade'][0])."%,  HSL(49, 0%, 40%) ".($item['afternoonshade'][0] + $fuzzyfactor)."% ".($item['afternoonshade'][1])."%, HSL(49, 95%, 60%) ".($item['afternoonshade'][1] + $fuzzyfactor)."% 100%);";
     
     ${"lineargradientroundbefore".$id} = "linear-gradient(90deg, HSL(49, 95%, 60%) 0% ".(($item['afternoonshade'][0] - 14.6) * sqrt(2))."%, HSL(49, 0%, 40%) ".(($item['afternoonshade'][0] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% ".(($item['afternoonshade'][1] - 14.6) * sqrt(2))."%, HSL(49, 95%, 60%) ".(($item['afternoonshade'][1] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
     
     ${"lineargradientroundafter".$id} = "linear-gradient(90deg, HSL(60, 95%, 60%) 0% ".(($item['afternoonshade'][0] - 14.6) * sqrt(2))."%, HSL(60, 10%, 50%) ".(($item['afternoonshade'][0] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% ".(($item['afternoonshade'][1] - 14.6) * sqrt(2))."%, HSL(60, 95%, 60%) ".(($item['afternoonshade'][1] - 14.6) * sqrt(2) + ($fuzzyfactor * sqrt(2)))."% 100%);";
     }

 $sunstylecode = "<style> .sun".$id." { position: relative; display: inline-block; top: -15px; margin-left: 5px; margin-right: 2px; } .sun".$id."::after { content: ''; height: 0px; width: 15px; border-radius: 2px; display: inline-block;} .sun".$id."::before{ content: ''; height: 15px; width: 15px; border-radius: 2px; display: inline-block;  position: absolute; top: 0; transform: rotate(45deg); background: ".${"lineargradientsun".$id}." } .round".$id." {  position: absolute; } .round".$id."::before{ content: ''; background-color: #FDD835; background: ".${"lineargradientroundbefore".$id}." height: 15px; width: 15px; border-radius: 2px;display: block; } .round".$id."::after{ content: ''; background-color: #FFEB3B; background: ".${"lineargradientroundafter".$id}." height: 15px; width: 15px; border-radius: 100%; display: block; position: absolute; top: 0; </style>";
  
 $windstylecode = "<style> .donut".$id." { position: relative; width: 20px; height: 20px; background: radial-gradient(white 40%, transparent 41%), conic-gradient".${"radialgradient".$id}."); display: inline-block; border-radius: 50%;} .donut".$id."::after {display: inline-block; content:''; color: #fff; background-image: url('../img/ico/wind.png'); background-size:100% 100%; width: 100%; height: 100%;}</style>";
 
 // <!--  END SUN DIAL CODE -->

  if (isset($item["videourl"][1])) {$sorterdropdown = "w3-dropdown-hover"; } else {$sorterdropdown ="";}
  if (empty($item["videourl"][1])) {$sortervidlink = "<a href='".$item['videourl'][0]."'>";} else {$sortervidlink = "";}
  if (empty($item['videourl'][0])) {$sorternovideohide = "w3-hide"; } else {$sorternovideohide = "";} 
  if (empty($item['videourl'][1])) {$sorterclosingtag = "</a>";} else {$sorterclosingtag = "";}
  if (isset($item["videourl"][1])) {$sortervideourl1 = $item['videourl'][0];}
  if (isset($item["videourl"][1])) {$sortervideourl2 = $item['videourl'][1];}
  if (isset($item["videourl"][2])) {$sortervideourl3 = $item['videourl'][2];}
  if (isset($item["videourl"][3])) {$sortervideourl4 = $item['videourl'][3];}
  if (isset($item["videourl"][4])) {$sortervideourl5 = $item['videourl'][4];}
  if (isset($item["videourl"][5])) {$sortervideourl6 = $item['videourl'][5];}
  if (isset($item["videoname"][1])) {$sortervideoname1 = $item['videoname'][0];}
  if (isset($item["videoname"][1])) {$sortervideoname2 = $item['videoname'][1];}
  if (isset($item["videoname"][2])) {$sortervideoname3 = $item['videoname'][2];}
  if (isset($item["videoname"][3])) {$sortervideoname4 = $item['videoname'][3];}
  if (isset($item["videoname"][4])) {$sortervideoname5 = $item['videoname'][4];}
  if (isset($item["videoname"][5])) {$sortervideoname6 = $item['videoname'][5];}
  if (isset($item["videourl"][1])) {$sortervideolink1 = "<a href='".$sortervideourl1."' class='w3-bar-item w3-button'>".$sortervideoname1."</a>";}
  if (isset($item["videourl"][1])) {$sortervideolink2 = "<a href='".$sortervideourl2."' class='w3-bar-item w3-button'>".$sortervideoname2."</a>";}
  if (isset($item["videourl"][2])) {$sortervideolink3 = "<a href='".$sortervideourl3."' class='w3-bar-item w3-button'>".$sortervideoname3."</a>";}
  if (isset($item["videourl"][3])) {$sortervideolink4 = "<a href='".$sortervideourl4."' class='w3-bar-item w3-button'>".$sortervideoname4."</a>";}
  if (isset($item["videourl"][4])) {$sortervideolink5 = "<a href='".$sortervideourl5."' class='w3-bar-item w3-button'>".$sortervideoname5."</a>";}
  if (isset($item["videourl"][5])) {$sortervideolink6 = "<a href='".$sortervideourl6."' class='w3-bar-item w3-button'>".$sortervideoname6."</a>";}
  $sortername = $item["name"];
  if ($item["SDS"] == "y"){$sorterSDS=" SDS";} else {$sorterSDS="";}


if (is_string($item["grade"])){$gradeadjust = $item["grade"];} else { $gradeadjust = round(pow(($item["grade"]), 1.056), 1);}
if (($gradeadjust - floor($gradeadjust)) == 0.5 OR is_float($item["grade"])){$gradeadjust = $gradeadjust;} else {$gradeadjust = round($gradeadjust,0);}  

if (is_string($item["grade"])){$sordergrade = " V".$item["grade"]." ";} else if (is_float($item["grade"]) or ($gradeadjust - floor($gradeadjust)) == 0.5) {$sordergrade = " V".floor($gradeadjust)."/".ceil($gradeadjust)." ";} else {$sordergrade = " V".$gradeadjust." ";}

if ($grade == "h" && is_float($item["grade"])){$sordergrade = " V".floor($item["grade"])."/".ceil($item["grade"])." ";} else if ($grade == "h"){$sordergrade = " V".$item["grade"]." ";}

if ($grade == "TMI" && isset($item["classicgrade"])){reset ($sordergrade); $sordergrade = " V".$item["classicgrade"]." ";}  

  if ($item['star'] == "y"){$sorterstar = "<i class='w3-text-yellow w3-large fas fa-solid fa-star'></i>"; } else {$sorterstar ="";}
  if ($item['best'] == "y"){$sorterbest = "<i class='w3-text-red w3-large fas fa-solid fa-heart'></i>"; } else {$sorterbest ="";}
  if ($item['bench'] == "y"){$sorterbench = "<img style='width: 19px; margin-top: -3px;' src='/img/ico/bench.png' alt='star'>"; } else {$sorterbench ="";}
  if ($item['turd'] == "y"){$sorterturd = "<i class='w3-text-brown w3-large fas fa-solid fa-poo'></i>"; } else {$sorterturd ="";}
  if ($item['tall'] == "y"){$sortertall = "<i class='w3-text-green w3-large fas fa-solid fa-mountain'></i>"; } else {$sorterstall ="";}
  if ($item['risk'] == "y"){$sorterrisk = "<i style='margin-left: 4px;' class='w3-large fas fa-skull-crossbones'></i>"; } else {$sorterrisk ="";}
  if (isset($item['windicon'])){$sorterwind = "<span style='transform: translate(0px, 3px); margin-left: 3px; margin-right: 0px;' class='donut".$id."');'></span>"; } else {$sorterwind ="";}
  //if ($item['sun'] == "y"){$sortersun = "<img src='/img/ico/".$item['sunurl'].".png' alt='star'>"; } else {$sorterwind ="";}
  if (is_null($item['morningshade']) && is_null($item['afternoonshade']) && is_null($item['eveningshade'])) {$sortersun ="";} else {$sortersun = "<div class='sun".$id."'><div class='round".$id."'></div></div>";}
  $sorterdescription = $item["description"];
  if ($item['comprehensiveonly'] == "y"){$topolink = "/topo.php?topo=".($id - ($id % 100))."&full=y";} else {$topolink = "/topo.php?topo=".($id - ($id % 100));}
  $sorterbaseimage = $problem[$id - ($id % 100)]['section'];
  if ($item['image'] < 10){$sorterimagenumber = "_00".$item['image'];} else {$sorterimagenumber = "_0".$item['image'];}
  if ($item['comprehensiveonly'] == "y"){$sortercomprehensivemod = "f";} else {"";}
  $sortersection = $problem[$id - ($id % 100)]['title'];
  $sorterarea = $problem[$id - ($id % 100)]['areatitle'];
  if($problem[$id - ($id % 100)]['subareatitle'] != ""){$sortersubarea = ", ".$problem[$id - ($id % 100)]['subareatitle'];} else {$sortersubarea = "";}
  if ($item['comprehensiveonly'] == "y"){$sorterproblemnumber = $item['numberfull'].". ";} else {$sorterproblemnumber = $item['numberselect'].". ";}



    $output =   $windstylecode.$sunstylecode."<div class='w3-content'><div class='w3-center topo-row-padding w3-white'><div class='w3-quarter'><a href='".$topolink."'><img src='/img/pro/".$sorterbaseimage.$sorterimagenumber.$sortercomprehensivemod."_500.jpg' style='width:600px; max-width:100%' class='w3-hover-opacity w3-full' sizes='(max-width:600px) 100vw, 10vw' srcset='/img/pro/".$sorterbaseimage.$sorterimagenumber.$sortercomprehensivemod."_500.jpg 500w, /img/pro/".$sorterbaseimage.$sorterimagenumber.$sortercomprehensivemod."_800.jpg 800w, /img/pro/".$sorterbaseimage.$sorterimagenumber.$sortercomprehensivemod."_1000.jpg 1000w, /img/pro/".$sorterbaseimage.$sorterimagenumber.$sortercomprehensivemod."_1000.jpg 1000w, /img/pro/".$sorterbaseimage.$sorterimagenumber.$sortercomprehensivemod."_1200.jpg 1200w, /img/pro/".$sorterbaseimage.$sorterimagenumber.$sortercomprehensivemod."_1500.jpg 1500w, /img/pro/".$sorterbaseimage.$sorterimagenumber.$sortercomprehensivemod."_1800.jpg 1800w, /img/pro/".$sorterbaseimage.$sorterimagenumber.$sortercomprehensivemod."_2200.jpg 2200w'></div></a><div class='w3-threequarter topo-text w3-left-align '><b>".$sorterproblemnumber.$sortername.$sorterSDS.$sordergrade."</b>".$sorterstar.$sorterbest.$sorterbench.$sorterturd.$sortertall.$sorterrisk.$sorterwind.$sortersun."<span class='".$sorterdropdown."'>".$sortervidlink."<i style='margin-left: 4px;' class='w3-hover-opacity fab fa-youtube w3-large w3-text-red ".$sorternovideohide."'></i>".$sorterclosingtag."<div class='w3-dropdown-content w3-bar-block w3-card-4 dropdown-menu-center'><a href='' class='w3-hide'></a>".$sortervideolink1.$sortervideolink2.$sortervideolink3.$sortervideolink4.$sortervideolink5.$sortervideolink6."</div></span> <br>".$sorterdescription."<br><br><b>"." @ ".$sortersection.$sortersubarea.", ".$sorterarea."</b>&emsp; &emsp; &emsp; &emsp;</div></div></div>";
    return $output;
}


// STEP 2 - Search function - outputs an array of IDs based on parameters of a foreach loop, and specified input value $grade

function array_category($grade,$vizzy,$full,$problem,$highgrade,$lowgrade,$bench,$star,$best,$turd,$tall,$risk,$area,$poke){

$output = array();
foreach ($problem as $id => $item){

  if (is_string($item["grade"])){$gradeadjust2 = $item["grade"];} else { $gradeadjust2 = round(pow(($item["grade"]), 1.056), 1);}
  if (($gradeadjust2 - floor($gradeadjust2)) == 0.5 OR is_float($item["grade"])){$gradeadjust2 = $gradeadjust2;} else {$gradeadjust2 = round($gradeadjust2,0);}  

  if ($grade == "h"){$filtergrade = $item["grade"];} else {$filtergrade = $gradeadjust2;}

  if ($grade == "TMI" && isset($item["classicgrade"])){$filtergrade = $item["classicgrade"];}  

  if(($full == "n" && $item['comprehensiveonly'] != "y") OR is_null($full) OR $full == "y")
  {
    if (isset ($item["grade"]) && is_string($item["grade"]) != true && isset($lowgrade) && (($lowgrade <= $filtergrade && $highgrade >= floor($filtergrade)) or ($lowgrade > 0 && $lowgrade <= ceil($filtergrade) && $highgrade >= ceil($filtergrade))) ){//<- Start Test
        if ((isset($poke) && empty($item["videourl"])) && ($area == $problem[$id - ($id % 100)]['area'] or $area == "all")){
          $sort = $filtergrade;  
          $output[$id] = $sort;

        }
        elseif($area == $problem[$id - ($id % 100)]['area'] or $area == "all"){
        if($bench == $item["bench"] or $star == $item["star"] or $best == $item["best"] or $turd == $item["turd"] or $tall == $item["tall"] or $risk == $item["risk"] or (isset($vizzy) &&$vizzy == $item["vizsla"])) {
          $sort = $filtergrade;  
          $output[$id] = $sort;
        }
        elseif(empty($bench) && empty($star) && empty($best) && empty($turd) && empty($tall) && empty($risk) && empty($poke) && empty($vizzy)){
          $sort = $filtergrade;  
          $output[$id] = $sort;

        }
      }
    }
  elseif (is_string($filtergrade) && $highgrade >= 15 && isset($poke) && empty($item["videourl"]) && $filtergrade != "-Scramble" && $filtergrade != "?" && $area == "all"){
    $sort = $filtergrade;  
    $output[$id] = $sort;
  }
}
}
asort($output);
return array_keys($output);



}

// STEP 1 - creates an variable containing an array of IDs generated by the array_category function. Specify the input to pass to the search function 

$test = array_category($grade,$vizzy,$full,$problem,$highgrade,$lowgrade,$bench,$star,$best,$turd,$tall,$risk,$area,$poke);
$resultstotal = count($test);

// STEP 3 - takes an array of IDs from the search and returns valuses from get_grade function





// foreach (associateive array AS array key => array key's value) {code to execute}
//functions are named containers for code snippets to be executed with passed variables
//function function_name(variables to pass to function){code to execute using passed variables}

?>

<!-- Problem Sorter Controls -->

<div class="w3-container" id="where" style="padding-bottom:0px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-16"><span class="w3-tag w3-wide">PROBLEM SORTER</span></h5>
    <form action="sorter.php" method="get">
      <select class="w3-input w3-border" placeholder="Name" required name="area">  
      <option value="all">All</option>  
      <option value="aspotogen">Aspotogen Peninsula</option>
        <option value="chebucto">Chebucto Head</option>
        <option value="dover">Dover</option>
        <option value="herringcove">Herring Cove</option>
        <option value="loc">Land Of Confustion</option>
        <option value="pollys">Polly's Cove</option>
        <option value="prospect">Prospect</option>
        <option value="solitary">Solitary Boulders</option>
        <option value="sambro">Sambro</option>
        <option value="tbay">Terrance Bay</option>
        <option value="wp">West Pennant</option>
  </select>
  <div class="slider">
  <p><input type="range" min="0" max="15" value="0" class="slider" id="id1" name="lowgrade" method="get"></p>
</div>
<span>Min Grade:</span> <span id="f" style="font-weight:bold;"></span>
<div class="slider">
  <input type="range" min="0" max="15" value="15" class="slider" id="id2" name="highgrade" method="get">
  <span>Max Grade:</span> <span id="g" style="font-weight:bold;"></span>
</div><br>
<p>
    <div class="w3-center">
<input class="w3-radio" type="checkbox" name="star" value="y" method="get">
<label><i class='w3-text-yellow w3-large fas fa-solid fa-star'></i></label>
<input class="w3-radio" type="checkbox" name="best" value="y" method="get">
<label><i class='w3-text-red w3-large fas fa-solid fa-heart'></i></label>
<input class="w3-radio" type="checkbox" name="bench" value="y" method="get">
<label><img style="width: 19px; margin-top: -6px;" src="/img/ico/bench.png" alt="star"></label>
<input class="w3-radio" type="checkbox" name="turd" value="y" method="get">
<label><i class='w3-text-brown w3-large fas fa-solid fa-poo'></i></label>
<input class="w3-radio" type="checkbox" name="tall" value="y" method="get">
<label><i class='w3-text-green w3-large fas fa-solid fa-mountain'></i></label>
<input class="w3-radio" type="checkbox" name="risk" value="y" method="get">
<label><i class='w3-large fas fa-skull-crossbones'></i></label>
<input class="w3-radio" type="checkbox" name="poke" value="y" method="get">
<label><img src="/img/ico/poke.png" alt="star"></label>
<input class="w3-radio" type="checkbox" name="vizzy" value="y" method="get">
<label><img src="/img/ico/vizzy.png" alt="star"></label>
</p>
<input type="hidden" name="full" value="<?php if($full == "y"){echo "y";} else echo "n"; ?>" />
<input type="hidden" name="grade" value="<?php if($grade == "h"){echo "h";} else echo "TMI"; ?>" />

      <button class="w3-button w3-black" type="submit">SORT</button>
</div>
    </form>
  </div>
</div>

<div class='w3-right-align w3-content w3-bold' style="font-weight:bold; padding-right:16px;">results: <?php echo $resultstotal;?></div>

 <!-- Display area -->

	<?php

function addOrUpdateUrlParam($name, $value) // function to create links adding new html parameters while keeping the old ones
{
    $params = $_GET;
    unset($params[$name]);
    $params[$name] = $value;
    return basename($_SERVER['PHP_SELF']).'?'.http_build_query($params);
}

// code to create pagination 

$urlnext = addOrUpdateUrlParam("page", $page+1);
$urlprevious = addOrUpdateUrlParam("page", $page-1);
$itemsperpage = 10;
$pagestotal = ceil(count($test)/$itemsperpage);


// STEP 4 code the calls the results of the sorted and formatted search array and inserts results into the page 

 $arrayslice = array_slice($test,(0+($itemsperpage*($page -1))),$itemsperpage);
 foreach ($arrayslice as $id){
echo get_grade($grade,$id,$problem[$id],$problem);


}


// Pagination links

?>
       <div class="w3-center">
 <?php if ($page > 1){echo "<a href='".$urlprevious."'>";} ?><button class="w3-button w3-large <?php if ($page > 1){echo "w3-black";} else {echo "w3-lightgrey";} ?>">&#8249;</button><?php if ($page > 1){echo "</a>";} ?>
 <?php if ($page < $pagestotal){echo "<a href='".$urlnext."'>";} ?><button class="w3-button w3-large <?php if ($page < $pagestotal){echo "w3-black";} else {echo "w3-lightgrey";} ?>">&#8250;</button><?php if ($page < $pagestotal){echo "</a>";} ?>
</div>

<?php include("inc/footer.php");?>


<script>
var slideCol = document.getElementById("id1");
var y = document.getElementById("f");
y.innerHTML = slideCol.value;

slideCol.oninput = function() {
    y.innerHTML = this.value;
}

</script>

<script>
var slideCol2 = document.getElementById("id2");
var y2 = document.getElementById("g");
y2.innerHTML = slideCol2.value;

slideCol2.oninput = function() {
    y2.innerHTML = this.value;
}

</script>

</html>