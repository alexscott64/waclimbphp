<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/style.css?rnd=23">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-176710766-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-176710766-1');
</script>


<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
  background-color: #f1f1f1;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("/logo.jpg");

}

.menu {
  display: none;
}
.iframe-container {
  overflow: hidden;
  /* 16:9 aspect ratio */
  padding-top: 20%;
  position: relative;
}

.iframe-container iframe {
   border: 0;
   height: 100%;
   left: 0;
   position: absolute;
   top: 0;
   width: 100%;
}
</style>
</head>
<body>

<?php 


include("inc/data.php");
if(isset($_GET['page'])){$page = $_GET['page'];} else {$page = 1;}
$area = null;
$area = $_GET["area"];
$subarea = null;
$subarea = $_GET["subarea"];
$section = $_GET["section"];
$all = null;
$all = $_GET['all'];
$full = null;
$full = $_GET['full'];


?>

<!-- Top Menu Bar (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
  <a class="w3-bar-item w3-button w3-padding w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <div class="w3-col s2 w3-hide-small">
      <a href="/blog.php" class="w3-button w3-block w3-black">BLOG</a>
    </div>
    <div class="w3-col s2">
      <a href="/index.php" class="w3-button w3-block w3-black">HOME</a>
    </div>
       <div class="w3-col s2 w3-hide-small">
      <a href="/sorter.php?area=all&lowgrade=0&highgrade=15&bench=y" class="w3-button w3-block w3-black">SORTER</a>
    </div>
    <div class="w3-col s2 w3-hide-small">
        <a href="https://www.google.com/maps/d/u/0/edit?mid=1xneFgpjC2uw58AwjiczID5LcJ5U&msa=0&ll=44.71028807059341%2C-63.437414000000004&spn=0.898726%2C2.113495&z=9" class="w3-button w3-block w3-black">MAP</a>
    </div>
    <div class="w3-col s2 w3-hide-small w3-dropdown-hover">
            <button class="w3-button w3-block w3-black">LIBRARY <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="#" class="w3-bar-item w3-button w3-hide">Documents</a>
        <a href="/zigsite.php?startyear=2003&endyear=2003" class="w3-bar-item w3-button">Zig's Site</a>
        <a href="#" class="w3-bar-item w3-button w3-hide">Problem Graveyard</a>
        <a href="http://youtu.be/fQ0aaf-HwTI" class="w3-bar-item w3-button">Todd Foster's Classic Video - Eastern Tides</a>
            
        </div>
        </div>
    <div class="w3-col s2 w3-hide-small">
                <a href="contribute.php" class="w3-button w3-block w3-black">CONTRIBUTE</a>
      </div>
    </div>
  </div>



<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="/blog.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BLOG</a>
    <a href="/sorter.php?area=all&lowgrade=1&highgrade=15&bench=y" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PROBLEM SORTER</a>
  <a href="https://www.google.com/maps/d/u/0/edit?mid=1xneFgpjC2uw58AwjiczID5LcJ5U&msa=0&ll=44.71028807059341%2C-63.437414000000004&spn=0.898726%2C2.113495&z=9" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MAP</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide" onclick="myFunction()">LIBRARY</a>
  <a href="/zigsite.php?startyear=2003&endyear=2003" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ZIG'S SITE</a>
</div>




  
<?php
   




function search_array_header($problem,$full){
$output = array();
foreach ($problem as $id => $item){
    if (((isset($full) && ($item["comprehensivetopoonly"] == $full OR is_null($item["comprehensivetopoonly"]))) OR (is_null($full) && is_null($item["comprehensivetopoonly"]))) && isset($item["area"])){
          $sort = $item['area'];  
          $output[$id] = $sort;
          $output = array_unique($output); 
    }
}

asort($output);
return array_keys($output);

}

function search_array_subarea($problem,$full){
$output = array();
foreach ($problem as $id => $item){
    if (((isset($full) && ($item["comprehensivetopoonly"] == $full OR is_null($item["comprehensivetopoonly"]))) OR (is_null($full) && is_null($item["comprehensivetopoonly"]))) && $item["subarea"] != ""){
          $sort = $item['subarea'];  
          $output[$id] = $sort;
          $output = array_unique($output); 
    }
}

asort($output);
return array_keys($output);

}

function search_array_section($problem,$full){
  $output = array();
  foreach ($problem as $id => $item){
      if (((isset($full) && ($item["comprehensivetopoonly"] == $full OR is_null($item["comprehensivetopoonly"]))) OR (is_null($full) && is_null($item["comprehensivetopoonly"]))) && isset($item["section"])){
            $sort = $item['section'];  
            $output[$id] = $sort;
            $output = array_unique($output); 
      }
  }
  
  asort($output);
  return array_keys($output);
  
  }




$areasearch = search_array_header($problem,$full);
$subareasearch = search_array_subarea($problem,$full);
$sectionsearch = search_array_section($problem,$full);
?>

<!-- Sidebar/menu -->

<nav class="w3-sidebar w3-black w3-bar-block w3-collapse w3-top" style="z-index:3;width:250px;height: calc(100% - 54px); top: 54px;" id="mySidebar">
    <div class="w3-container w3-display-container w3-padding-16">
      <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
      <h3 class="w3-wide"><b>BOULDERING AREAS</b></h3>
    </div>






<?php


foreach ($areasearch as $key => $value){
  foreach ($sectionsearch as $key6 => $value6){
    if ($problem[$value6]['subarea'] == "" && $problem[$value6]['area'] == $problem[$value]['area']){
      $areasectioncount[] = $problem[$value6]['area'];
      $areasectioncountnumber = count($areasectioncount);
    }
 
  }
  foreach($subareasearch as $key7 => $value7){
    if ($problem[$value]['area'] == $problem[$value7]['area']){
      $subareacount[] = $problem[$value]['area'];
      $subareacountnumber = count($subareacount);
  
    }

  }
  $areacount = $key+1;
  $highlight = "";
  if ($area == $problem[$value]['area']){$highlight = "w3-white";}
  $sectionhighlight = "";
  if ($section == $problem[$value]['section']){$sectionhighlight = "w3-white";}
  if ($full == 'y'){$fullhide = "&full=y"; } else if($full == 'n') { $fullhide = "&full=n"; } else if ($full == null){ $fullhide = "&full=n";}
  $topolink = "<a onclick='myAccFunc".$areacount."()' href='javascript:void(0)' id='myBtn' class='w3-button w3-block w3-left-align ".$highlight."'>".$problem[$value]['areatitle']." <i class='fa fa-caret-down'></i>";
  if ($areasectioncountnumber == 1){$topolink = "<a href='topo.php?topo=".$value.$fullhide."' class='w3-bar-item w3-button".$sectionhighlight."'>".$problem[$value]['areatitle'];}

  echo "<div class='w3-padding-16 w3-large w3-text-grey' style='font-weight:bold'>".$topolink."</a>";
  echo "<script> function myAccFunc".$areacount."() {var x = document.getElementById('demoAcc".$areacount."'); if (x.className.indexOf('w3-show') == -1) {x.className += ' w3-show';} else {x.className = x.className.replace(' w3-show', '');}}</script>";
  echo "<div id='demoAcc".$areacount."' class='w3-bar-block w3-hide w3-padding-large w3-medium'>";

  foreach($sectionsearch as $key4 => $value4){
    
    $highlight2 = "";
    $sectionhighlight2 = "";
    if ($area == $problem[$value4]['area']){$highlight2 = "w3-white";}
    if ($section == $problem[$value4]['section']){$sectionhighlight2 = "w3-white";}
    if ($full == 'y'){$fullhide2 = "&full=y"; } else if($full == 'n') { $fullhide2 = "&full=n"; } else if ($full == null){ $fullhide2 = "&full=n";}
    $topolink2 = $key4;
    
      if($problem[$value4]['area'] == $problem[$value]['area'] && $problem[$value4]['subarea'] == ""){
        echo "<a href='topo.php?topo=".$value4.$fullhide2."' class='w3-bar-item w3-button ".$sectionhighlight2."'>".$problem[$value4]['title']."</a>";
        
      }
  }
  


  foreach ($subareasearch as $key2 => $value2){

    if($problem[$value2]['area'] == $problem[$value]['area'] && $problem[$value2]['subarea'] != ""){
      $countsubarea[] = $problem[$value3]['subarea'];
      $subareafuncnum = count($countsubarea);
      $subareahighlight = "";
      echo "<a onclick='subFunc".$subareafuncnum."()' href='javascript:void(0)' class='w3-button w3-block w3-left-align' id='myBtn'>".$problem[$value2]['subareatitle']." <i class='fa fa-caret-down'></i></a>";
      echo "<script> function subFunc".$subareafuncnum."() {var x = document.getElementById('subAcc".$subareafuncnum."'); if (x.className.indexOf('w3-show') == -1) {x.className += ' w3-show';} else {x.className = x.className.replace(' w3-show', '');}}</script>";
      echo "<div id='subAcc".$subareafuncnum."' class='w3-bar-block w3-hide w3-padding-large w3-medium'>";

      foreach ($sectionsearch as $key8 => $value8){
        if($problem[$value8]['subarea'] == $problem[$value2]['subarea']){
         $subsectiontotal[] = $problem[$value8]['title'];
         $subsectiontotalnum = count($subsectiontotal);
        }
      }
      
      $subsectioncount = 0;
      foreach ($sectionsearch as $key3 => $value3){
        $highlight3 = "";
        $sectionhighlight3 = "";
        if ($area == $problem[$value3]['area']){$highlight3 = "w3-white";}
        if ($section == $problem[$value3]['section']){$sectionhighlight3 = "w3-white";}
        if ($full == 'y'){$fullhide3 = "&full=y"; } else if($full == 'n') { $fullhide3 = "&full=n"; } else if ($full == null){ $fullhide3 = "&full=n";}
        $topolink3 = $key3;
        if($problem[$value3]['subarea'] == $problem[$value2]['subarea']){
          $subsectioncount++;

          echo "<a href='topo.php?topo=".$value3.$fullhide3."' class='w3-bar-item w3-button ".$sectionhighlight3."'>".$problem[$value3]['title']."</a>";
          if ($subsectiontotalnum == $subsectioncount){echo "</div>";}
        }
       
      }
   
      unset ($subsectiontotalnum);
      unset ($subsectiontotal);
     
    }
    
  }
  
  unset($areasectioncount);
  unset($areasectioncountnumber);
  unset($subareacount);
  unset($subareacountnumber);
  
  echo "</div>";
}



?>







 





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