<html>
<head>
    <title>
        Welcome to Facebook
    </title>
    <link rel="stylesheet" href="css/styles.css ">
    <a href="http://www.accuweather.com/en/bg/sofia/51097/weather-forecast/51097" class="aw-widget-legal">
        <!--
        By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
        -->
    </a><div id="awcc1464355185144" class="aw-widget-current"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="false" data-uid="awcc1464355185144"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
</head>




<h2>Welcome to Facebook!!!</h2>

<p>
    Your can start to register as a new user.
    <br>

    Then, you can search others users.
    <br>
    And you can login to access your private area.

</p>

<?php
	session_start();
	require_once 'src/header.php';
	require_once  "src/mainmenu.php";


    require_once 'src/footer.php';
?>

</html>