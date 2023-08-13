<?php 

include("inc/data.php");
if(isset($_GET['page'])){$page = $_GET['page'];} else {$page = 1;}
if($problem[$areacode]['subarea']==""){$subarea = null; $area = $problem[$areacode]['area'];}

$all = null;
$all = $_GET['all'];
$full = $_GET['full'];
$grade = $_GET['grade'];



  

   

// STEP 4 - function takes IDs and returns corresponding values from data.php 




function get_area($grade,$id,$item,$problem,$i,$area,$subarea,$full){

$gradesarray = array();
foreach ($problem as $key => $value):
  if ($problem[$key - ($key % 100)]['section'] == $problem[$id]['section'] and is_integer($problem[$key]['grade'])){
  $gradesarray[] = $problem[$key]['grade'];
}

endforeach;
$test2 = (array_count_values($gradesarray));
$problemmax = max($test2);
$grademax = max(array_keys($test2));
$grademin = min(array_keys($test2));
$V0 = round($test2[0] / $problemmax * 100);
$V1 = round($test2[1] / $problemmax * 100);
$V2 = round($test2[2] / $problemmax * 100);
$V3 = round($test2[3] / $problemmax * 100);
$V4 = round($test2[4] / $problemmax * 100);
$V5 = round($test2[5] / $problemmax * 100);
$V6 = round($test2[6] / $problemmax * 100);
$V7 = round($test2[7] / $problemmax * 100);
$V8 = round($test2[8] / $problemmax * 100);
$V9 = round($test2[9] / $problemmax * 100);
$V10 = round($test2[10] / $problemmax * 100);
$V11 = round($test2[11] / $problemmax * 100);
$V12 = round($test2[12] / $problemmax * 100);
$V13 = round($test2[13] / $problemmax * 100);

$problems = -1;
foreach ($problem as $key => $value):
  if ($problem[$key - ($key % 100)]['section'] == $problem[$id]['section']){
  $problems +=1;
}

endforeach;

$star = 0;
  foreach ($problem as $key => $value):
  
if($problem[$key - ($key % 100)]['section'] == $problem[$id]['section'] && $value['star'] == "y"){
    $star +=1;
  }
endforeach;

$heart = 0;
foreach ($problem as $key => $value):
 if ($problem[$key - ($key % 100)]['section'] == $problem[$id]['section'] && $value['best'] == "y"){
  $heart +=1;
}
endforeach;

$bench = 0;
foreach ($problem as $key => $value):
 if ($problem[$key - ($key % 100)]['section'] == $problem[$id]['section'] && $value['bench'] == "y"){
  $bench +=1;
}
endforeach;

$turd = 0;
foreach ($problem as $key => $value):
 if ($problem[$key - ($key % 100)]['section'] == $problem[$id]['section'] && $value['turd'] == "y"){
  $turd +=1;
}
endforeach;

$gpslink = $problem[$areacode]['gps'];

$turdpercent = round($turd/$problems*100);

  if ($grade == "h"){$hardlink2 = "&grade=h";} else {$hardlink2 = "";}
  if ($grade == "h"){$hardparam = "+ '&grade=h'";} else {$hardparam = "";}
  if ($full == "y"){$fullparam = "+ '&full=y'";} else {$fullparam = "";}

  if ($area == null && $subarea == null){$areaphoto = $problem[$id]['area'];} else if ($area != null && $subarea == null && $problem[$id]['subarea'] == "") {$areaphoto = $problem[$id]['section'];} else if ($area != null && $subarea == null && $problem[$id]['subarea'] != "") {$areaphoto = $problem[$id]['subarea'];} else if ($subarea != null) {$areaphoto = $problem[$id]['section'];}


  if ($area == null && $subarea == null){$areadescription = $problem[$id]['adescription'];} else if ($area != null && $subarea == null && $problem[$id]['subarea'] == "") {$areadescription = $problem[$id]['areadescription'];} else if ($area != null && $subarea == null && $problem[$id]['subarea'] != "") {$areadescription = $problem[$id]['subadescription'];} else if ($subarea != null) {$areadescription = $problem[$id]['areadescription'];}

  if ($area == null && $subarea == null){$areaapproach = $problem[$id]['aapproach']." mins";} else if ($area != null && $subarea == null && $problem[$id]['subarea'] == "") {$areaapproach = $problem[$id]['topoapproach']." m, ".round($problem[$id]['topoapproach']/1000/3*60)." mins";} else if ($area != null && $subarea == null && $problem[$id]['subarea'] != "") {$areaapproach = $problem[$id]['aapproach']." mins";} else if ($subarea != null) {$areaapproach = $problem[$id]['topoapproach']." m, ".round($problem[$id]['topoapproach']/1000/3.2*60)." mins";}

  if(isset($problem[$id]['drivegps'])){$areadrive = "<b>Drive ".$problem[$id]['adrive']."  min <a href='https://www.google.com/maps/dir/?api=1&origin=&destination=".$problem[$id]['drivegps'][0].",".$problem[$id]['drivegps'][1]."'><i class='w3-hover-shadow fas fa-external-link-alt'></i></a><br>";} else $areadrive = "<b>Drive ".$problem[$id]['adrive']."  min<br>";
  if ($area == null){$link = "areas.php?all=y&area=".$problem[$id]['area'];}

  if ($area == null){$sorterarea = $problem[$id]['areatitle'];} else if ($area != null && $subarea == null && $sorterarea = $problem[$id]['subarea'] == ""){$sorterarea = $problem[$id]['title'];} else if ($area != null && $subarea == null && $sorterarea = $problem[$id]['subarea'] != ""){$sorterarea = $problem[$id]['subareatitle'];} 
  if ($subarea != null){$sorterarea = $problem[$id]['title'];} 

  if ($area == null){$sortertitlecode = $problem[$id]['area'];} else if ($area != null && $subarea == null){$sortertitlecode = $problem[$id]['subarea'];}
  if ($area == null){$areaparam = "area";} else if ($area != null && $subarea == null){$areaparam = "subarea";}
  if ($area != null && $subarea != null){$areaparam = "section";}

  if(isset($problem[$id]['areaseasontext'])){$areaseasontext = $problem[$id]['areaseasontext'];}

  if(in_array(1,$problem[$id]['areaseasonicon'])){$areaspringincon = "<i class='w3-text-green w3-large fas fa-seedling'></i>";} else {$areaspringincon = "";}
  if(in_array(2,$problem[$id]['areaseasonicon'])){$areasummericon = "<i class='w3-text-yellow w3-large fas fa-solid fa-sun'></i>";} else {$areasummericon = "";}
  if(in_array(3,$problem[$id]['areaseasonicon'])){$areafallicon = "<i class='w3-text-brown w3-large fab fa-brands fa-canadian-maple-leaf'></i>";} else {$areafallicon = "";}
  if(in_array(4,$problem[$id]['areaseasonicon'])){$areawintericon = "<i class='w3-text-blue w3-large fas fa-regular fa-snowflake'></i>";} else {$areawintericon = "";}

  if(isset($problem[$id]['areaseasontext'])){$areaseasons = "</p><b>Seasons</b> ".$areaspringincon." ".$areasummericon." ".$areafallicon." ".$areawintericon." <i onclick='texthide".$id."()' class='w3-hover-shadow w3-large w3-dropdown-hover far fa-caret-square-down'></i><div class='w3-hide' id='texthidediv".$id."'>".$areaseasontext."</div><p><script>var first_click".$id." = true; function texthide".$id."() { if (first_click".$id.") {document.getElementById('texthidediv".$id."').className = ''; first_click".$id." = false;} else{document.getElementById('texthidediv".$id."').className = 'w3-hide'; first_click".$id." = true;}}</script>";} else {$areaseasons = "";}



  if ($area == null && $subarea == null){$areadescription = $problem[$id]['adescription'];} else if ($area != null && $subarea == null && $problem[$id]['subarea'] == "") {$areadescription = $problem[$id]['areadescription'];} else if ($area != null && $subarea == null && $problem[$id]['subarea'] != "") {$areadescription = $problem[$id]['subadescription'];} else if ($subarea != null) {$areadescription = $problem[$id]['areadescription'];}

  if ($problem[$id]['comprehensivetopoonly'] == "y"){$fulllink = "&full=y";} else {$fulllink = "";}
  if ($full == "y" && $problem[$id]['comprehensivetopoonly'] != "y"){$fulllink2 = "&full=y";} else {$fulllink2 = "";}

  if ($area == null && $subarea == null){$topolink = "";} else if ($area != null && $subarea == null && $problem[$id]['subarea'] == "") {$topolink = "<a href='topo.php?topo=".$id.$fulllink.$fulllink2.$hardlink2."'>";} else if ($area != null && $subarea == null && $problem[$id]['subarea'] != "") {$topolink = "";} else if ($subarea != null) {$topolink = "<a href='topo.php?topo=".$id.$fulllink.$fulllink2.$hardlink2."'>";}

  if ($area == null && $subarea == null){$topolinkclose = "";} else if ($area != null && $subarea == null && $problem[$id]['subarea'] == "") {$topolinkclose = "</a>";} else if ($area != null && $subarea == null && $problem[$id]['subarea'] != "") {$topolinkclose = "";} else if ($subarea != null) {$topolinkclose = "</a>";}

  $gpslink = $problem[$id]['gps'];

  

    $output =   
    
    $areacode."<div><div><h4><b></h4>Problems ".$problems."<p> <i class='w3-text-yellow w3-large fas fa-solid fa-star'></i> ".$star. " <i class='w3-text-red w3-large fas fa-solid fa-heart'></i> ".$heart." <img style='width: 19px; margin-top: -6px;' src='/img/ico/bench.png' alt='star'> ".$bench." <i class='w3-text-brown w3-large fas fa-solid fa-poo'></i> ".$turdpercent." %<br><div class='sparkline w3-padding-large'><span class='index'><span class='count' style='height: ".$V0."%;'>V1</span> </span><span class='index'><span class='count' style='height: ".$V1."%;'>V2</span> </span><span class='index'><span class='count' style='height: ".$V2."%;'>V3</span> </span><span class='index'><span class='count' style='height: ".$V3."%;'>V4</span> </span><span class='index'><span class='count' style='height: ".$V4."%;'>V5</span> </span><span class='index'><span class='count' style='height: ".$V5."%;'>V6</span> </span><span class='index'><span class='count' style='height: ".$V6."%;'>V7</span> </span><span class='index'><span class='count' style='height: ".$V7."%;'>V8</span> </span><span class='index'><span class='count' style='height: ".$V8."%;'>V9</span> </span><span class='index'><span class='count' style='height: ".$V9."%;'>V10</span> </span><span class='index'><span class='count' style='height: ".$V10."%;'>V11</span> </span><span class='index'><span class='count' style='height: ".$V11."%;'>V12</span> </span><span class='index'><span class='count' style='height: ".$V12."%;'>V13</span> </span><span class='index'><span class='count' style='height: ".$V13."%;'>V13</span> </span></div><p><br>Grades V".$grademin." - V".$grademax."<div class='w3-container'></b>".$areaseasons.$areadrive."<b>Approach ".$areaapproach."  <a href='".$gpslink."'><i class='w3-hover-shadow fas fa-external-link-alt'></a></i></p></b></b></div></div></div><script>function updateURL".$sortertitlecode."() {if (history.pushState) {var newurl = window.location.protocol + '//' + window.location.host + window.location.pathname + '?".$areaparam."=".$sortertitlecode."' + '&all=y' ".$hardparam.$fullparam." ; window.history.pushState({path:newurl},'',newurl); location.reload();var elem = document.getElementById('ele'); elem.scrollIntoView(true);window.scrollBy(0,-200);}}</script></div>";
    
    return $output;

}


// STEP 2 - Search function - outputs an array of IDs based on parameters of a foreach loop, and specified input value $grade



function search_array($full,$problem,$area,$subarea,$section,$areacode){
$output = array();
foreach ($problem as $id => $item){
    if ($problem[$areacode]['section']==$item['section']){
          $sort = $item['area'];  
          $output[$id] = $sort;
          $output = array_unique($output); 
    }



}

asort($output);
return array_keys($output);



}


// STEP 1 - creates an variable containing an array of IDs generated by the array_category function. Specify the input to pass to the search function 

$areasearch = search_array($full,$problem,$area,$subarea,$section,$areacode);
$resultstotal = count($areasearch);

// STEP 3 - takes an array of IDs from the search and returns valuses from get_grade function





// foreach (associateive array AS array key => array key's value) {code to execute}
//functions are named containers for code snippets to be executed with passed variables
//function function_name(variables to pass to function){code to execute using passed variables}

?>

<!-- Problem Sorter Controls -->


 <!-- DEVELOPMENT AID -->

	<?php


//print_r($areasearch); 

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
$itemsperpage = 20;
$pagestotal = ceil(count($areasearch)/$itemsperpage);

?>
<!-- First Row -->



<?php

// STEP 4 code the calls the results of the sorted and formatted search array and inserts results into the page 
 if ($all == null){$areasearch = array_slice($areasearch,0,3);}else if ($all == "y"){$areasearch = $areasearch;}
 $arrayslice2 = array_slice($areasearch,(0+($itemsperpage*($page -1))),$itemsperpage);
 

 $i = 1;
 foreach ($arrayslice2 as $id){
echo get_area($grade,$id,$problem[$id],$problem,$i,$area,$subarea,$full);
$i +=1;

}





// Pagination links

?>



</html>