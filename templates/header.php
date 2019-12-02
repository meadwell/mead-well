<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mead Well">

    <title>Mead Well</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon-apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/img/site.webmanifest">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/sections.css">
    <link rel="stylesheet" href="/css/style-min.css">
    <link rel="stylesheet" href="/css/components-min.css">
    <link rel="stylesheet" href="/css/layout-min.css">
    <link rel="stylesheet" href="/css/normalize-min.css">

    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel|Roboto|Open+Sans|Lato">

    <!-- age verification -->

    <!-- Age Verification dependencies -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/agecheck.css">
    <script type="text/javascript" src="/js/jquery.agecheck.js"></script>
    <!-- End Age Verification dependencies -->

    <script>
        $(window).on('load', function() {
            $.ageCheck()
        })

    </script>
</head>

<body>
    <nav>
        <a href="/" class="img"><img src="/img/PMW.svg" id="logo" ></a>
        <a id="menu-pulley-link" onclick="toggleMenu()" class="img">
            <img id="menu-pulley" class="" src="/img/menu-pulley.svg">
        </a>
        <menu>
            <li><a href="/mead.php">SHOP</a></li>
            <!--li>ABOUT</li-->
            <li><a href="/visit.php">VISIT</a></li>
            <li><a href="prospector-society.php"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="-170 -9 704.573 244"  height="16px"><path d=" M 361.951 121.009 L 229.236 121.009 C 227.729 125.549 225.578 128.443 223.16 128.443 C 220.741 128.443 218.59 125.549 217.083 121.009 L 50.825 121.009 C 49.318 125.549 47.158 128.443 44.749 128.443 C 42.34 128.443 40.179 125.549 38.673 121.009 L 31.011 121.009 C 29.504 125.549 27.343 128.443 24.934 128.443 C 22.526 128.443 20.365 125.549 18.858 121.009 L -4.436 121.009 C -7.162 185.528 -42.429 235 -87.084 235 C -133.582 235 -170 181.414 -170 113 C -170 44.586 -133.582 -9 -87.084 -9 C -45.651 -9 -12.296 33.603 -5.506 91.272 L 18.61 91.272 C 20.127 86.267 22.377 83.015 24.934 83.015 C 27.492 83.015 29.742 86.267 31.258 91.272 L 38.435 91.272 C 39.951 86.267 42.201 83.015 44.759 83.015 C 47.316 83.015 49.566 86.267 51.083 91.272 L 216.845 91.272 C 218.382 86.267 220.622 83.015 223.179 83.015 C 225.737 83.015 228.007 86.267 229.513 91.272 L 530.459 91.272 L 530.459 91.272 C 532.729 91.272 534.573 97.923 534.573 106.141 C 534.573 114.358 532.729 121.009 530.459 121.009 L 520.547 121.009 L 510.635 121.009 L 361.951 121.009 L 361.951 121.009 Z  M -88.025 205.263 C -122.183 205.263 -151.043 162.997 -151.043 113 C -151.043 62.993 -122.183 20.737 -88.025 20.737 C -53.868 20.737 -25.008 62.983 -25.008 113 C -25.008 163.017 -53.868 205.263 -88.025 205.263 L -88.025 205.263 Z " fill-rule="evenodd" /><path d=" M 510.635 191.965 L 504.348 191.965 L 504.348 173.166 L 488.839 173.166 L 488.839 183.51 L 478.734 183.51 L 478.734 173.166 L 470.978 173.166 L 470.978 193.61 L 458.995 193.61 L 458.995 198.074 L 454.062 200.713 L 449.598 198.074 L 449.598 193.61 L 449.364 193.61 L 449.364 161.651 L 444.662 161.651 L 444.662 209.666 L 443.176 209.666 L 443.176 223.059 L 438.317 227.918 L 438.314 227.918 L 433.46 223.059 L 433.46 209.666 L 431.971 209.666 L 431.971 168.93 L 421.635 168.93 L 421.635 163.997 L 415.876 163.997 L 415.876 208.942 L 414.469 209.997 L 414.469 212.583 L 413.114 213.346 L 413.114 215.519 L 411.998 216.456 L 411.998 218.571 L 410.117 219.807 L 409.833 230.044 L 409.549 219.807 L 407.668 218.571 L 407.668 216.456 L 406.552 215.519 L 406.552 213.346 L 405.195 212.583 L 405.195 209.997 L 403.793 208.942 L 403.793 159.062 L 399.781 159.062 L 399.781 166.112 L 391.086 166.112 L 391.086 179.745 L 380.039 179.745 L 380.039 154.671 L 376.13 154.69 L 376.13 179.001 C 376.13 179.001 376.751 179.787 376.319 180.69 C 376.28 182.842 375.656 191.221 373.073 191.221 C 372.836 192.634 372.754 193.412 372.754 193.412 C 372.754 193.412 373.465 193.807 372.754 194.591 C 372.678 196.077 372.134 199.053 371.584 199.053 C 371.66 200.374 371.81 200.994 371.052 200.931 C 370.3 200.994 370.45 200.371 370.526 199.053 C 369.976 199.053 369.432 196.077 369.35 194.591 C 368.645 193.807 369.35 193.412 369.35 193.412 C 369.35 193.412 369.274 192.634 369.037 191.221 C 366.454 191.221 365.828 182.842 365.785 180.69 C 365.359 179.787 365.985 179.001 365.985 179.001 L 365.985 161.414 L 361.951 161.414 L 361.951 149.562 L 394.766 149.562 L 401.528 149.562 L 428.325 149.562 L 435.097 149.562 L 510.635 149.562 L 510.635 191.965 Z " fill-rule="evenodd" /><rect x="361.951" y="111.097" width="148.684" height="39.649" transform="matrix(1,0,0,1,0,0)" /></svg></a></li>
            <br>
        </menu>
    </nav>
    <!-- <div id="agecheck">
        <h2>Are you of legal drinking age?</h2>
        <input value="yes" type="button" onclick="ageCheck(this)">
        <input value="no" type="button" onclick=ageCheck(this)>
    </div> -->

    <style>
        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0px;
            padding: 0px;
            color: #5B4E4A;
        }

        #logo {
            padding-left: 8px;
            max-height: 70px;
            width: auto;
            fill: inherit;
        }
        svg {
            fill: black;   
        }
        svg:hover {
            fill: darkgoldenrod;
        }

        #menu-pulley {
            height: 100px;
            top: -32px;
            position: absolute;
            right: 15px;
            transition: 0.1s linear;
            z-index: 100;
            padding-right: 8px;
            padding-left: 8px;
            cursor: pointer;
        }

        #menu-pulley.open {
            top: -8px;
        }

        #menu-pulley:active {
            top: 0px;
        }

        menu {
            height: 0px;
            overflow: hidden;
            transition: 0.51s cubic-bezier(0.4, 0, 1, 1) 0.25s;
            margin: 0px;
            z-index: 90;
            position: relative;
            background: #ecece5;
            list-style: none;
            margin-top: -7px;
        }

        menu li {
            line-height: 2em;
            font-family: Cinzel;
            font-weight: unset;
            text-rendering: optimizeLegibility;
            color: black;
            padding: 6px;
            
        }

        menu li a:hover {
            cursor: pointer;
        }

        menu.open {
            height: 150px;
            max-height: 300px;

        }


        nav {
            height: 70px;
            background: #EFEFE9;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        #login {
            max-height: 1em;
        }


        @media (min-width:768px) {
            #menu-pulley-link {
                display: none;
            }
            menu {
                display: inline-block;
                float: right;
                padding: 20px;
                height: initial;
                background: initial;
                transition: none;
            }
            menu li {
                display: inline-block;
                padding: 0px 20px;
            }
        }

    </style>

    <script>
        function toggleMenu() {
            document.getElementById("menu-pulley").classList.toggle("open");
            document.getElementsByTagName("menu")[0].classList.toggle("open");
        }

    </script>
