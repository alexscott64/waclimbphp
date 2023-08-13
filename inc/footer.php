<?php

$blog = null;
$blog = $_GET["blog"];

?>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">

<div class="topo-description w3-center w3-content">Provided free for NS Bouldering passion. <?php echo (date("Y") - 2011);?>+ years. Support via button below.<br><br></div>

<input type = "hidden" value="8C6ti8LfmFuWnY9RSgdc5CdFtkdbwDYQi6aBzQo8QWdN8s8PAYPYGVFRjykiRNQZ1dQ917eAoHFb99Ttez5LWk16MMXNkUm" id="moneroaddy">
<img class="w3-dropdown-hover w3-hover-opacity" src = "/img/cpt/monero.png" style="height:40px;" onclick="myFunctionMonero()"></img>



<script>
function myFunctionMonero() {
  var copyText = document.getElementById("moneroaddy");
  copyText.select();
  navigator.clipboard.writeText(copyText.value);
  alert("XMR address copied to clipboard. Paste in the send field in your favorite Monero wallet: \n \n" + copyText.value);
}
</script>


<!--

<input type = "hidden" value="bc1qvqa7pthawf46eunty60qthv9q4v2cprzwfdgnv" id="bitcoinaddy">
<img src = "/img/cpt/bitcoin.png" style="height:40px;" onclick="myFunctionBitcoin()"></img>

<script>
function myFunctionBitcoin() {
  var copyText = document.getElementById("bitcoinaddy");
  copyText.select();
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
-->
<p class="w3-small"><b><i class="far fa-copyright"></i> <?php echo date("Y");?>, rev 2.1154</p>
</footer>

<script src="/js/app.js"></script>

<script>

// Sidebar functions 

function myAccFunc1() {
  var x = document.getElementById("demoAcc1");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function myAccFunc2() {
  var x = document.getElementById("demoAcc2");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function myAccFunc3() {
  var x = document.getElementById("demoAcc3");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function myAccFunc4() {
  var x = document.getElementById("demoAcc4");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function myAccFunc5() {
  var x = document.getElementById("demoAcc5");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function myAccFunc6() {
  var x = document.getElementById("demoAcc6");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function myAccFunc7() {
  var x = document.getElementById("demoAcc7");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

function myAccFunc8() {
  var x = document.getElementById("demoAcc8");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
function myAccFunc9() {
  var x = document.getElementById("demoAcc9");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
function myAccFunc10() {
  var x = document.getElementById("demoAcc10");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
function myAccFunc11() {
  var x = document.getElementById("demoAcc11");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}


// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

function PSA() {
  var x = document.getElementById("PSA");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Update URLS to set state

function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}

function updateURL() {
      if (history.pushState) {
          var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?all=y' <?php if($area == null){echo "";} else if ($area != null){echo "+ '&area=' + getQueryVariable('area')";}?><?php if($full == null){echo "";} else if ($full != null){echo "+ '&full=' + getQueryVariable('full')";}?>;
          window.history.pushState({path:newurl},'',newurl);
          location.reload();
      }
    }

    function updateURL2() {
      if (history.pushState) {
          var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?topo=' + getQueryVariable("topo") + '&full=y'<?php
           if (isset($blog)){echo "+ '&blog=".$blog."'";} else {echo "";}
           if (isset($area)){echo "+ '&area=".$area."'";} else {echo "";}
           if (isset($all)){echo "+ '&all=".$all."'";} else {echo "";}
           if (isset($subarea)){echo "+ '&subarea=".$subarea."'";} else {echo "";}
           if (isset($lowgrade)){echo "+ '&lowgrade=".$lowgrade."'";} else {echo "";}
           if (isset($highgrade)){echo "+ '&highgrade=".$highgrade."'";} else {echo "";}
           if (isset($star)){echo "+ '&star=".$star."'";} else {echo "";}
           if (isset($best)){echo "+ '&best=".$best."'";} else {echo "";}
           if (isset($bench)){echo "+ '&bench=".$bench."'";} else {echo "";}
           if (isset($turd)){echo "+ '&turd=".$turd."'";} else {echo "";}
           if (isset($tall)){echo "+ '&tall=".$tall."'";} else {echo "";}
           if (isset($risk)){echo "+ '&risk=".$risk."'";} else {echo "";}
           if (isset($poke)){echo "+ '&poke=".$poke."'";} else {echo "";}
           if (isset($vizzy)){echo "+ '&vizzy=".$vizzy."'";} else {echo "";}
           if (isset($grade)){echo "+ '&grade=".$grade."'";} else {echo "";}
?>;
          window.history.pushState({path:newurl},'',newurl);
          location.reload();
      }
    }

    function updateURL3() {
      if (history.pushState) {
          var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?topo=' + getQueryVariable("topo") + '&full=n'<?php
           if (isset($blog)){echo "+ '&blog=".$blog."'";} else {echo "";}
           if (isset($area)){echo "+ '&area=".$area."'";} else {echo "";}
           if (isset($all)){echo "+ '&all=".$all."'";} else {echo "";}
           if (isset($subarea)){echo "+ '&subarea=".$subarea."'";} else {echo "";}
           if (isset($lowgrade)){echo "+ '&lowgrade=".$lowgrade."'";} else {echo "";}
           if (isset($highgrade)){echo "+ '&highgrade=".$highgrade."'";} else {echo "";}
           if (isset($star)){echo "+ '&star=".$star."'";} else {echo "";}
           if (isset($best)){echo "+ '&best=".$best."'";} else {echo "";}
           if (isset($bench)){echo "+ '&bench=".$bench."'";} else {echo "";}
           if (isset($turd)){echo "+ '&turd=".$turd."'";} else {echo "";}
           if (isset($tall)){echo "+ '&tall=".$tall."'";} else {echo "";}
           if (isset($risk)){echo "+ '&risk=".$risk."'";} else {echo "";}
           if (isset($poke)){echo "+ '&poke=".$poke."'";} else {echo "";}
           if (isset($vizzy)){echo "+ '&vizzy=".$vizzy."'";} else {echo "";}
           if (isset($grade)){echo "+ '&grade=".$grade."'";} else {echo "";}
?>;
          window.history.pushState({path:newurl},'',newurl);
          location.reload();
      }
    }
  
    function updateURL4() {
      if (history.pushState) {
          var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?topo=' + getQueryVariable("topo") + '&grade=h'<?php
           if (isset($blog)){echo "+ '&blog=".$blog."'";} else {echo "";}
           if (isset($area)){echo "+ '&area=".$area."'";} else {echo "";}
           if (isset($all)){echo "+ '&all=".$all."'";} else {echo "";}
           if (isset($subarea)){echo "+ '&subarea=".$subarea."'";} else {echo "";}
           if (isset($lowgrade)){echo "+ '&lowgrade=".$lowgrade."'";} else {echo "";}
           if (isset($highgrade)){echo "+ '&highgrade=".$highgrade."'";} else {echo "";}
           if (isset($star)){echo "+ '&star=".$star."'";} else {echo "";}
           if (isset($best)){echo "+ '&best=".$best."'";} else {echo "";}
           if (isset($bench)){echo "+ '&bench=".$bench."'";} else {echo "";}
           if (isset($turd)){echo "+ '&turd=".$turd."'";} else {echo "";}
           if (isset($tall)){echo "+ '&tall=".$tall."'";} else {echo "";}
           if (isset($risk)){echo "+ '&risk=".$risk."'";} else {echo "";}
           if (isset($poke)){echo "+ '&poke=".$poke."'";} else {echo "";}
           if (isset($vizzy)){echo "+ '&vizzy=".$vizzy."'";} else {echo "";}
           if (isset($full)){echo "+ '&full=".$full."'";} else {echo "";}
?>;
          window.history.pushState({path:newurl},'',newurl);
          location.reload();
      }
    }

    function updateURL5() {
      if (history.pushState) {
          var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?topo=' + getQueryVariable("topo") + '&grade=TMI'<?php
           if (isset($blog)){echo "+ '&blog=".$blog."'";} else {echo "";}
           if (isset($area)){echo "+ '&area=".$area."'";} else {echo "";}
           if (isset($all)){echo "+ '&all=".$all."'";} else {echo "";}
           if (isset($subarea)){echo "+ '&subarea=".$subarea."'";} else {echo "";}
           if (isset($lowgrade)){echo "+ '&lowgrade=".$lowgrade."'";} else {echo "";}
           if (isset($highgrade)){echo "+ '&highgrade=".$highgrade."'";} else {echo "";}
           if (isset($star)){echo "+ '&star=".$star."'";} else {echo "";}
           if (isset($best)){echo "+ '&best=".$best."'";} else {echo "";}
           if (isset($bench)){echo "+ '&bench=".$bench."'";} else {echo "";}
           if (isset($turd)){echo "+ '&turd=".$turd."'";} else {echo "";}
           if (isset($tall)){echo "+ '&tall=".$tall."'";} else {echo "";}
           if (isset($risk)){echo "+ '&risk=".$risk."'";} else {echo "";}
           if (isset($poke)){echo "+ '&poke=".$poke."'";} else {echo "";}
           if (isset($vizzy)){echo "+ '&vizzy=".$vizzy."'";} else {echo "";}
           if (isset($full)){echo "+ '&full=".$full."'";} else {echo "";}
?>;
          window.history.pushState({path:newurl},'',newurl);
          location.reload();
      }
    }


</script>
