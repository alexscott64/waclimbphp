<div class="w3-center w3-content"><div class='map-row-padding w3-white w3-card' style='padding-bottom: 8px;'><div class=<?php if($map[$areacode]['maptype']=="solitary"){echo "'mapdivsolitary'";} else {echo "'mapdiv'";}?>>
          
      <svg   version="1.2" viewbox="0 0 2200 1238">

          <foreignObject x="0" y="0" width="2200" height="1238" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility">
            <img src="<?php echo($problem[$areacode]['section']); ?>_map_1200.jpg" style='width:2000px; min-width:100%' sizes='(min-width:1920px) 51vw, (min-width:1250px) 88vw, 100vw'
                 style='width:2200px; max-width:100%'
                 srcset="/img/maps/<?php echo($problem[$areacode]['section']); ?>_map_500.jpg 500w,
                 /img/maps/<?php echo($problem[$areacode]['section']); ?>_map_800.jpg 800w,
                 /img/maps/<?php echo($problem[$areacode]['section']); ?>_map_1000.jpg 1000w,
                 /img/maps/<?php echo($problem[$areacode]['section']); ?>_map_1100.jpg 1100w,
                 /img/maps/<?php echo($problem[$areacode]['section']); ?>_map_1200.jpg 1200w,
                 /img/maps/<?php echo($problem[$areacode]['section']); ?>_map_1500.jpg 1500w,
                 /img/maps/<?php echo($problem[$areacode]['section']); ?>_map_1600.jpg 1600w,
                 /img/maps/<?php echo($problem[$areacode]['section']); ?>_map_1800.jpg 1800w,
                 /img/maps/<?php echo($problem[$areacode]['section']); ?>_map_2200.jpg 2200w"
                 alt="A responsive placeholder image"
                 width="2200" height="1238">
          </foreignObject>

         
          <?php 

               $bouldermapnumber = 0;
                for($bmn = 0; $bmn <= count($map[$areacode]['boulderoutline']); $bmn++){
                  if(isset($map[$areacode]['boulderstyle'][$bouldermapnumber])){$boulderstyle=("style='".$map[$areacode]['boulderstyle'][$bouldermapnumber]."'");}
                  echo("<a xlink:title='".$map[$areacode]['bouldername'][$bouldermapnumber]."' xlink:href='".$map[$areacode]['boulderlink'][$bouldermapnumber]."'><path ".$boulderstyle." d='".$map[$areacode]['boulderoutline'][$bouldermapnumber]."'/></a>");
                  $bouldermapnumber++;
                  $boulderstyle="";
   
                     }
                     $bouldermapnumber = $bouldermapnumber - count($map[$areacode]['boulderoutline']) + 1;
            
            ?>

</svg>
       
</div><?php include("inc/areasummary.php");?></div></div>

