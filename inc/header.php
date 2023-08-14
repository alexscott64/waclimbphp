<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> .-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" crossorigin="anonymous" />
    <!-- <script data-name="BMC-Widget" data-cfasync="false" src="/js/widget.prod.min.js" data-id="mobeta" data-description="Support me on Buy me a coffee!" data-message="Thanks for visiting, you can buy Mobeta a coffee to support development." data-color="#FFDD00" data-position="Right" data-x_margin="70" data-y_margin="2"></script>
-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-176710766-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-176710766-1');
    </script>


    <style>
        body,
        html {
            height: 100%;
            font-family: "Inconsolata", sans-serif;
            background-color: #f1f1f1;
        }

        .bgimg {
            background-position: center;
            background-size: cover;
            background-image: url("/img/logo/logo2000.jpg");
        }

        @media screen and (max-width: 1500px) {
            .bgimg {
                background-image: url("/img/logo/logo1500.jpg");
            }
        }

        @media screen and (max-width: 1200px) {
            .bgimg {
                background-image: url("/img/logo/logo1200.jpg");
            }
        }

        @media screen and (max-width: 900px) {
            .bgimg {
                background-image: url("/img/logo/logo1000.jpg");
            }
        }

        @media screen and (max-width: 600px) {
            .bgimg {
                background-image: url("/img/logo/logo600.jpg");
            }
        }

        @media screen and (max-width: 400px) {
            .bgimg {
                background-image: url("/img/logo/logo400.jpg");
            }
        }




        }

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

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body>

    <?php

    header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

    include("inc/data.php");
    include("inc/trending.php");
    $all = null;
    $all = $_GET['all'];
    $full = $_GET['full'];
    if ($_GET['grade'] == null) {
        $grade = "h";
    } else {
        $grade = $_GET['grade'];
    }

    ?>


    <!-- Top Menu Bar (sit on top) -->
    <div class="w3-top">
        <div class="w3-row w3-padding w3-black">
            <a class="w3-bar-item w3-button w3-padding w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-ellipsis-v"></i></a>
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding w3-hide-large w3-left" onclick="w3_open()"><i class="fa fa-bars"></i></a>
            <div class="w3-col s2 w3-hide-small  w3-hide-medium">
                <a href="/blog.php<?php if ($full == "y") {
                                        echo "?full=y";
                                    } else echo "?full=n"; ?><?php if ($grade == "h") {
                                                                                                        echo "&grade=h";
                                                                                                    } else echo "&grade=TMI"; ?>" class="w3-button w3-block w3-black">BLOG</a>
            </div>
            <div class="w3-col s2 w3-hide-small w3-hide-medium">
                <a href="/index.php<?php if ($full == "y") {
                                        echo "?full=y";
                                    } else echo "?full=n"; ?><?php if ($grade == "h") {
                                                                                                        echo "&grade=h";
                                                                                                    } else echo "&grade=TMI"; ?>" class="w3-button w3-block w3-black">HOME</a>
            </div>
            <div class="w3-bar-item w3-left w3-hide-large w3-padding">
                BOULDERING AREAS
            </div>
            <div class="w3-right w3-hide-large">
                <a href="/index.php<?php if ($full == "y") {
                                        echo "?full=y";
                                    } else echo "?full=n"; ?><?php if ($grade == "h") {
                                                                                                        echo "&grade=h";
                                                                                                    } else echo "&grade=TMI"; ?>" class="w3-button w3-block w3-black"><i class="fa fa-home" aria-hidden="true"></i></a>
            </div>
            <div class="w3-col s2 w3-hide-small w3-hide-medium">
                <a href="/sorter.php?area=all&lowgrade=0&highgrade=15&bench=y<?php if ($full == "y") {
                                                                                    echo "&full=y";
                                                                                } else echo "&full=n"; ?><?php if ($grade == "h") {
                                                                                                                                                echo "&grade=h";
                                                                                                                                            } else echo "&grade=TMI"; ?>" class="w3-button w3-block w3-black">SORTER</a>
            </div>
            <div class="w3-col s2 w3-hide-small  w3-hide-medium">
                <a href="https://www.google.com/maps/d/u/0/edit?mid=1xneFgpjC2uw58AwjiczID5LcJ5U&msa=0&ll=44.71028807059341%2C-63.437414000000004&spn=0.898726%2C2.113495&z=9" class="w3-button w3-block w3-black">MAP</a>
            </div>
            <div class="w3-col s2 w3-hide-small w3-hide-medium w3-dropdown-hover">
                <button class="w3-button w3-block w3-black">LIBRARY <i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="#" class="w3-bar-item w3-button w3-hide">Documents</a>

                    <a href="/zigsite.php?startyear=2003&endyear=2003<?php if ($full == "y") {
                                                                            echo "&full=y";
                                                                        } else echo "&full=n"; ?><?php if ($grade == "h") {
                                                                                                                                        echo "&grade=h";
                                                                                                                                    } else echo "&grade=TMI"; ?>" class="w3-bar-item w3-button">Zig's Site</a>
                    <a href="/timer/workout.html" class="w3-bar-item w3-button">Hangboard Workout</a>
                    <a href="/timer2/workout.html" class="w3-bar-item w3-button">Gym Timer</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide">Problem Graveyard</a>
                    <a href="http://youtu.be/fQ0aaf-HwTI" class="w3-bar-item w3-button">Todd Foster's Classic Video - Eastern Tides</a>


                </div>
            </div>
            <div class="w3-col s2 w3-hide-small w3-hide-medium">
                <a href="contribute.php" class="w3-button w3-block w3-black">CONTRIBUTE</a>
            </div>
        </div>
    </div>



    <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
    <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
        <a href="/blog.php<?php if ($full == "y") {
                                echo "?full=y";
                            } else echo "?full=n"; ?><?php if ($grade == "h") {
                                                                                                echo "&grade=h";
                                                                                            } else echo "&grade=TMI"; ?>" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BLOG</a>
        <a href="/sorter.php?area=all&lowgrade=1&highgrade=15&bench=y<?php if ($full == "y") {
                                                                            echo "&full=y";
                                                                        } else echo "&full=n"; ?><?php if ($grade == "h") {
                                                                                                                                        echo "&grade=h";
                                                                                                                                    } else echo "&grade=TMI"; ?>" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">PROBLEM SORTER</a>
        <a href="https://www.google.com/maps/d/u/0/edit?mid=1xneFgpjC2uw58AwjiczID5LcJ5U&msa=0&ll=44.71028807059341%2C-63.437414000000004&spn=0.898726%2C2.113495&z=9" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MAP</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hide" onclick="myFunction()">LIBRARY</a>
        <a href="/zigsite.php?startyear=2003&endyear=2003<?php if ($full == "y") {
                                                                echo "&full=y";
                                                            } else echo "&full=n"; ?><?php if ($grade == "h") {
                                                                                                                            echo "&grade=h";
                                                                                                                        } else echo "&grade=TMI"; ?>" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ZIG'S SITE</a>
        <a href="/contribute.php" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTRIBUTE</a>
        <a href="/timer/workout.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HANGBOARD WORKOUT</a>
        <a href="/timer2/workout.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">GYM TIMER</a>
    </div>

    <!-- PSA -->

    <!--
<div id="PSA" class="w3-padding w3-hide w3-hide-large w3-hide-medium w3-top w3-show" style="margin-top:58px">

<title>PSA</title><div class='w3-content w3-center w3-large blog-text'><div><i class="fa fa-window-close w3-right w3-xxlarge w3-animate-fading" onclick="PSA()" aria-hidden="true"></i><div class='w3-container w3-white w3-card'><h2 class='w3-wide'>PUBLIC SERVICE ANNONCEMENT</h2><p class='w3-opacity'><i>June 4th 2022</i></p></div>
  
<img src='img/blo/PSA_1000.jpg' alt='none' width='100%' class='w3-center' sizes='(max-width:600px) 90vw, 768px' srcset='img/blo/PSA_600.jpg 600w, img/blo/PSA_1000.jpg 1000w, img/blo/PSA_1500.jpg 1500w'>

<div class='w3-container w3-white w3-card w3-display-container' style="height: 500px; overflow: scroll;"><p class='w3-left-align'><span style="color:red">Unfortunately, someone in Nova Scotia has been permanentaly altering climbs.</span> The crimp on <b><i>Dilemma</b></i> has incontrovertable evidence of metal tools being used to change the texture of the hold. Several other climbs are suspected to be affected.<br><br>This may have been done out of ignorance of the ethics of outdoor bouldering. If this is the case, you didn't know better, but now you do - <b>please stop</b>.<br><br>The most likely culprit is whomever is working Dilemma in the last month. If you have seen anyone in that area of Grover in the past month, please reach out to admin@cnsmobeta.ca</p><div class=" w3-white w3-row-padding w3-padding-16 w3-center">
<a href="#"><h5 class="w3-center w3-animate-fading" onclick="PSA()"><span class="w3-tag w3-wide">CLOSE</span></h5></a><br><br><br><br><br><br>
</div>

</div>
</div></div></div>
-->



    <!-- Sidebar/menu -->

    <nav class="w3-sidebar w3-black w3-bar-block w3-collapse w3-top" style="z-index:3;width:250px;height: calc(100% - 54px); top: 54px;" id="mySidebar">
        <div class="w3-container w3-display-container w3-padding-16">
            <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
            <h3 class="w3-wide"><b>BOULDERING AREAS</b></h3>


            <div class='w3-large w3-text-grey' style='font-weight:bold'><a onclick='popular()' href='javascript:void(0)' id='myBtn' class='w3-button w3-block w3-left-align '>Trending Topos <i class='fa fa-caret-down'></i></a>
                <script>
                    function popular() {
                        var x = document.getElementById('popular1');
                        if (x.className.indexOf('w3-show') == -1) {
                            x.className += ' w3-show';
                        } else {
                            x.className = x.className.replace(' w3-show', '');
                        }
                    }
                </script>
                <div id='popular1' class='w3-bar-block w3-hide w3-padding-large w3-medium'><span style='font-weight:normal'><i>Community favs by traffic (<?php echo (date('F') . ' ' . date('Y')); ?>):</i></span>
                    <div class='w3-large w3-text-grey' style='font-weight:bold'><a onclick='popular2()' href='javascript:void(0)' id='myBtn' class='w3-button w3-block w3-left-align '>Monthly Top 5 <i class='fa fa-caret-down'></i></a>
                        <script>
                            function popular2() {
                                var x = document.getElementById('popular2');
                                if (x.className.indexOf('w3-show') == -1) {
                                    x.className += ' w3-show';
                                } else {
                                    x.className = x.className.replace(' w3-show', '');
                                }
                            }
                        </script>
                        <div id='popular2' class='w3-bar-block w3-hide w3-medium'>
                            <?php
                            $monthlycount = 1;
                            foreach ($monthlytop5 as $value) {
                                echo "<a href='topo.php?topo=" . $value . "&full=n&grade=h' class='w3-bar-item w3-button ' style='margin-left: 10px'>" . $monthlycount . ". " . $problem[$value]["title"] . "</a>";
                                $monthlycount++;
                            }

                            ?>
                        </div>
                    </div>

                    <div class='w3-large w3-text-grey' style='font-weight:bold'><a onclick='popular3()' href='javascript:void(0)' id='myBtn' class='w3-button w3-block w3-left-align '>Yearly Top <?php echo (count($yearlytop5)); ?> <i class='fa fa-caret-down'></i></a>
                        <script>
                            function popular3() {
                                var x = document.getElementById('popular3');
                                if (x.className.indexOf('w3-show') == -1) {
                                    x.className += ' w3-show';
                                } else {
                                    x.className = x.className.replace(' w3-show', '');
                                }
                            }
                        </script>
                        <div id='popular3' class='w3-bar-block w3-hide w3-medium'>
                            <?php
                            $yearlycount = 1;
                            foreach ($yearlytop5 as $value) {
                                echo "<a href='topo.php?topo=" . $value . "&full=n&grade=h' class='w3-bar-item w3-button' style='margin-left: 10px'>" . $yearlycount . ". " . $problem[$value]["title"] . "</a>";
                                $yearlycount++;
                            }

                            ?>

                        </div>
                    </div>
                </div>
                <?php

                function search_array($problem, $full, $search_key)
                {
                    $output = array();
                    foreach ($problem as $id => $item) {
                        if (isset($item["comprehensivetopoonly"]) &&
                            (is_null($full) || $item["comprehensivetopoonly"] == $full) &&
                            isset($item[$search_key]) && $item[$search_key] != "") {
                            
                            $sort = $item[$search_key];
                            $output[$id] = $sort;
                        }
                    }

                    asort($output);
                    return array_keys($output);
                }

                $areasearch = search_array($problem, $full, 'area');
                $subareasearch = search_array($problem, $full, 'subarea');
                $sectionsearch = search_array($problem, $full, 'section');


                
                ?>

                <?php


                foreach ($areasearch as $key => $value) {
                    if ($grade == "h") {
                        $hardlink = "&grade=h";
                    } else {
                        $hardlink = "";
                    }
                    foreach ($sectionsearch as $key6 => $value6) {
                        if ($problem[$value6]['subarea'] == "" && $problem[$value6]['area'] == $problem[$value]['area']) {
                            $areasectioncount[] = $problem[$value6]['area'];
                            $areasectioncountnumber = count($areasectioncount);
                        }
                    }
                    foreach ($subareasearch as $key7 => $value7) {
                        if ($problem[$value]['area'] == $problem[$value7]['area']) {
                            $subareacount[] = $problem[$value]['area'];
                            $subareacountnumber = count($subareacount);
                        }
                    }
                    $areacount = $key + 1;
                    $highlight = "";
                    if ($area == $problem[$value]['area']) {
                        $highlight = "w3-white";
                    }
                    $sectionhighlight = "";
                    if ($section == $problem[$value]['section']) {
                        $sectionhighlight = "w3-white";
                    }
                    if ($full == 'y') {
                        $fullhide = "&full=y";
                    } else if ($full == 'n') {
                        $fullhide = "&full=n";
                    } else if ($full == null) {
                        $fullhide = "&full=n";
                    }
                    $topolink = "<a onclick='myAccFunc" . $areacount . "()' href='javascript:void(0)' id='myBtn' class='w3-button w3-block w3-left-align " . $highlight . "'>" . $problem[$value]['areatitle'] . " <i class='fa fa-caret-down'></i>";
                    if ($areasectioncountnumber == 1 && $subareacount == 0) {
                        $topolink = "<a href='topo.php?topo=" . $value . $fullhide . $hardlink . "' class=' w3-bar-item w3-button " . $highlight . "'>" . $problem[$value]['areatitle'];
                    }

                    echo "<div class='w3-large w3-text-grey' style='font-weight:bold'>" . $topolink . "</a>";
                    echo "<script> function myAccFunc" . $areacount . "() {var x = document.getElementById('demoAcc" . $areacount . "'); if (x.className.indexOf('w3-show') == -1) {x.className += ' w3-show';} else {x.className = x.className.replace(' w3-show', '');}}</script>";
                    echo "<div id='demoAcc" . $areacount . "' class='w3-bar-block w3-hide w3-padding-large w3-medium'>";

                    foreach ($sectionsearch as $key4 => $value4) {

                        $highlight2 = "";
                        $sectionhighlight2 = "";
                        if ($area == $problem[$value4]['area']) {
                            $highlight2 = "w3-white";
                        }
                        if ($section == $problem[$value4]['section']) {
                            $sectionhighlight2 = "w3-white";
                        }
                        if ($full == 'y') {
                            $fullhide2 = "&full=y";
                        } else if ($full == 'n') {
                            $fullhide2 = "&full=n";
                        } else if ($full == null) {
                            $fullhide2 = "&full=n";
                        }
                        $topolink2 = $key4;

                        if ($problem[$value4]['area'] == $problem[$value]['area'] && $problem[$value4]['subarea'] == "") {
                            echo "<a href='topo.php?topo=" . $value4 . $fullhide2 . $hardlink . "' class='w3-bar-item w3-button " . $sectionhighlight2 . "'>" . $problem[$value4]['title'] . "</a>";
                        }
                    }



                    foreach ($subareasearch as $key2 => $value2) {

                        if ($problem[$value2]['area'] == $problem[$value]['area'] && $problem[$value2]['subarea'] != "") {
                            $subhighlight = "";
                            if ($subarea == $problem[$value2]['subarea']) {
                                $subhighlight = "w3-white";
                            }
                            $countsubarea[] = $problem[$value3]['subarea'];
                            $subareafuncnum = count($countsubarea);
                            $subareahighlight = "";
                            echo "<a onclick='subFunc" . $subareafuncnum . "()' href='javascript:void(0)' class='w3-bar-item w3-button w3-block w3-left-align " . $subhighlight . "' id='myBtn'>" . $problem[$value2]['subareatitle'] . " <i class='fa fa-caret-down'></i></a>";
                            echo "<script> function subFunc" . $subareafuncnum . "() {var x = document.getElementById('subAcc" . $subareafuncnum . "'); if (x.className.indexOf('w3-show') == -1) {x.className += ' w3-show';} else {x.className = x.className.replace(' w3-show', '');}}</script>";
                            echo "<div id='subAcc" . $subareafuncnum . "' class='w3-bar-block w3-hide w3-medium' style='margin-left: 15px'>";

                            foreach ($sectionsearch as $key8 => $value8) {
                                if ($problem[$value8]['subarea'] == $problem[$value2]['subarea']) {
                                    $subsectiontotal[] = $problem[$value8]['title'];
                                    $subsectiontotalnum = count($subsectiontotal);
                                }
                            }

                            $subsectioncount = 0;
                            foreach ($sectionsearch as $key3 => $value3) {
                                $highlight3 = "";
                                $sectionhighlight3 = "";
                                if ($area == $problem[$value3]['area']) {
                                    $highlight3 = "w3-white";
                                }
                                if ($section == $problem[$value3]['section']) {
                                    $sectionhighlight3 = "w3-white";
                                }
                                if ($full == 'y') {
                                    $fullhide3 = "&full=y";
                                } else if ($full == 'n') {
                                    $fullhide3 = "&full=n";
                                } else if ($full == null) {
                                    $fullhide3 = "&full=n";
                                }
                                $topolink3 = $key3;
                                if ($problem[$value3]['subarea'] == $problem[$value2]['subarea']) {
                                    $subsectioncount++;

                                    echo "<a href='topo.php?topo=" . $value3 . $fullhide3 . $hardlink . "' class='w3-bar-item w3-button " . $sectionhighlight3 . "'>" . $problem[$value3]['title'] . "</a>";
                                    if ($subsectiontotalnum == $subsectioncount) {
                                        echo "</div>";
                                    }
                                }
                            }

                            unset($subsectiontotalnum);
                            unset($subsectiontotal);
                        }
                    }

                    unset($areasectioncount);
                    unset($areasectioncountnumber);
                    unset($subareacount);
                    unset($subareacountnumber);

                    echo "</div>";
                }



                ?>




                <br>
                <button class="w3-bar-item w3-button w3-black w3-margin-bottom w3-animate-opacity w3-bottom-left <?php if ($noselect == "true") {
                                                                                                                        echo "w3-hide";
                                                                                                                    } ?><?php if ($full == "y") {
                                                                                                                                                                            echo "w3-hide";
                                                                                                                                                                        } ?>" onclick="updateURL2();"><i class="fa fa-cog"></i> Select Topos</button>
                <button class="w3-bar-item w3-button w3-black w3-animate-opacity w3-margin-bottom <?php if ($full == null) {
                                                                                                        echo "w3-hide";
                                                                                                    } ?><?php if ($full == "n") {
                                                                                                                                                        echo "w3-hide";
                                                                                                                                                    } ?>" onclick="updateURL3();"><i class="fa fa-cog "></i> Full Topos</button>

                <button class="w3-bar-item w3-button w3-black w3-margin-bottom w3-animate-opacity w3-bottom-left <?php if ($noselect == "true") {
                                                                                                                        echo "w3-hide";
                                                                                                                    } ?><?php if ($grade == "h") {
                                                                                                                                                                            echo "w3-hide";
                                                                                                                                                                        } ?>" onclick="updateURL4();"><i class="fa fa-cog"></i> Halifax Classic</button>
                <button class="w3-bar-item w3-button w3-black w3-animate-opacity w3-margin-bottom <?php if ($grade == null) {
                                                                                                        echo "w3-hide";
                                                                                                    } ?><?php if ($grade == "TMI") {
                                                                                                                                                        echo "w3-hide";
                                                                                                                                                    } ?>" onclick="updateURL5();"><i class="fa fa-cog "></i> International</button>

            </div>

    </nav>

    <!-- End of Navbar -->



    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- Push down content on small screens -->
    <div class="w3-hide-large" style="margin-top:0px"></div>