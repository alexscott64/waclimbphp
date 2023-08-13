<!DOCTYPE html>

<?php
include("inc/data.php");
include("inc/mapdata.php");

$areacode = $_GET['topo'];
$full = null;
$full = $_GET['full'];
$subarea = $problem[$areacode]['subarea'];
$area = $problem[$areacode]['area'];
$section = $problem[$areacode]['section'];
$title = $problem[$areacode]['title'];
$basecode = $areacode;
?>

<head>

    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo strip_tags($problem[$basecode]['areadescription']); ?>">
</head>

<?php

include("inc/header.php");
include("inc/topostyle.php");

?>




<!-- Topo Heading and Map Link-->

<div class="w3-light-grey w3-row-padding topo-heading w3-center">
    <h5 class="w3-center w3-light-grey"><a href="<?php echo $problem[$areacode]['gps']; ?>"><span class="topo-tag w3-wide w3-round"><?php
                                                                                                                                    echo strtoupper($title);
                                                                                                                                    ?> <i class="fa fa-globe"></i></span></a></h5><?php if (is_null($problem[$basecode]['author'])) {
                                                    "";
                                                } else {
                                                    echo "<div style='color:grey; margin: -8px 0px 8px 0px;'>Topo By " . $problem[$areacode]['author'] . "</div>";
                                                } ?>
</div>

<!-- Topo Description-->

<div class="topo-description w3-center w3-large w3-content"><?php echo $problem[$basecode]['areadescription']; ?></div>

<!-- Topo Map -->
<?php
if (isset($map[$areacode])) {
    include("inc/map.php");
}
?>
<!-- Topo Boulders and Problems-->

<?php


$bouldernumber = 1;
for ($i = 0; $i < count($problem[$basecode]['problemsperboulder']); $i++) {
    if ($full == "y" && isset($problem[$basecode]['bouldername' . $bouldernumber])) {
        include("inc/boulderheader.php");
    } elseif (isset($problem[$basecode]['bouldername' . $bouldernumber]) && $problem[$basecode]['imageo'][$bouldernumber - 1] == "n") {
        include("inc/boulderheader.php");
    }
    include("inc/boulder.php");
    $bouldernumber++;
}
?>



<?php include("inc/footer.php"); ?>




</body>

</html>