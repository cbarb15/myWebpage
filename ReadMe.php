<?php
echo"
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>Static Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"../css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"../css/stylish-portfolio.css\" rel=\"stylesheet\">

    <link href=\"../css/bootstrap.css\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"../../assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"navbar-static-top.css\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>
";

include 'css/Navbar.php';

echo"
            <ol class='breadcrumb'>
                <li><a href='index.php'>Home</a> </li>
                <li class='active'>ReadMe</li>
            </ol>
<div class=\"container\">

    <!-- Main component for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
        <h1>Database Schema</h1>
    </div>

</div> <!-- /container -->

<div class='container'>
  <ol id=\"readMeBody\">
        <li>Charlie Barber. Uid: u0980833
            This is the sevnth part of the Graduate Student Due Progress assignment.  This part of the program focused
            on using ajax and charts in our program
        <li>
            GitHub Page: <a href=\"https://github.com/uofu-cs4540/980833\">GitHub</a>
        </li>
        <li>
            This program is the seventh part in developing a way for the graduate program in the school of computing, to track
            the progress of their graduate students.  This project was very involved.  I struggled with getting the charts
            to display my data.   The syntax threw me. After working with Samarth though I came to really understand what was going on.  
        </li>
        <li>
           For this project I changed my look a lot and had some cool Bootstrap themes.
        </li>
        <li>
            The chart data is after you log into the DGS's page.   Log in with the info below and you will see the buttons to bring up the charts
            on the next page after logging in.  
            <br><br>
            Example Logins to test the site:<br><br>
            <ol>
                  
                    <li>
                    DGS:  <br><br>Miles Williams <br><br> password: bigboss
                    </li><br><br>
            </ol>

            I made it so no dgs could be created.  I put a DGS into my database and the only way to access that part is to use the
            DGS credentials I've provided here.
        </li>
        <li>
            To test my pages I coded and then looked at how it appeared when put on the server.  I had some troubles
            with understanding how to use the MySQL and call to the database.  Also I had trouble formatting my data
            in the tables at first, but I simplified some of my code and tested it in a separate project to see how
            one in particular section worked.  After simplifiying it, I was able to achieve my desired results.
        </li>
        <li>
            The most frequent webpage that I visited and where I got the bulk of my information was:
            <ol>
                <li><a href=\"http://www.w3schools.com\">http://www.w3schools.com</a></li>
                <li><a href=\"http://www.tutorialspoint.com\">tutorialPoint.com</a></li>
               <li><a href=\"http://php.net\">php.net</a></li>
            </ol>
        </li>
        <li>
            The schema was drafted up between two other classmates of mine and myself. One of my classmates has
            very good extensive knowledge with databases.  He did most of the work drawing it up.  He did an excellent
            job.  Everything meshes well together.  There are no null spaces in any tables.  I think it is a very well
            designed schema for a database.
        </li>
    </ol>
</div>
<aside class=\"callout\">
    <div class=\"text-vertical-center\">
        <img id=\"logo\" src='/img/ULogo.jpg' width=\"100px\" height=\"100px\">
    </div>
</aside>";

include 'css/Footer.php';

echo"
</body>
</html>";
?>
