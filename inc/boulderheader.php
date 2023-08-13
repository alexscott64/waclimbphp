<!-- Boulder Description-->

<?php if (isset($problem[$basecode]['bouldergps'.$bouldernumber])){
$gpslink = "http://www.google.com/maps/place/".$problem[$basecode]['bouldergps'.$bouldernumber][0].",".$problem[$basecode]['bouldergps'.$bouldernumber][1]."";
$header = "<div class='w3-light-grey w3-row-padding w3-center'><h5 class='w3-center w3-light-grey'><a class='anchor' id='bouldernumber".$bouldernumber."'></a><a href=".$gpslink."><span class='topo-tag w3-wide w3-round'>".$problem[$basecode]['bouldername'.$bouldernumber]." <i class='fa fa-globe'></i></span></a></h5><div class='topo-description w3-center w3-large w3-content topo-description'><i>".$problem[$basecode]['boulderdescription'.$bouldernumber]."</i></div></div>";
}
else {
    $header = "<div class='w3-center w3-margin-bottom'><a class='anchor' id='bouldernumber".$bouldernumber."'></a><h2>".$problem[$basecode]['bouldername'.$bouldernumber]."</h2>
    <div class='topo-description w3-center w3-large w3-content topo-description'><i>".$problem[$basecode]['boulderdescription'.$bouldernumber]."</i></div>
    </div>";
}

echo $header;
?>