<!doctype html>
<html lang="us">
    
<head>
 
<link rel="stylesheet" type="text/css" href="css/styles.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<!----JQuery------->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="script.js"></script>
    
    <!---JavaScript-->
    <script type="text/javascript" src="javascript/jquery-3.3.1.mis.js"></script>
    
<!----Bootstrap---->
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">  
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    
<!-----GOOGLE FONTS---->
 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
 <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
    
<!-----FONT AWESOME ICONS--------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<script src="script.js"></script>
    
<script>
    
    function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
        }
    
    $(document).ready(function() {
        $('#bowling-overlay-dropdown').click(function() {
            $('#bowling-dropdown-submenu').slideToggle("medium");
        });
    });
    
</script>
  
<div id="hours">
    
    <p>HOURS: Sunday - Thursday 11am - 10pm • Friday &amp; Saturday 11am - Midnight • Sundays Closed starting May 12th</p>
    
</div>
    
<header>
    
    <a href="index.php"><img src="images/logo-village-bowl.png" id="logo" /></a>
    
    <ul id="nav">
    
        <li><a href="index.php">HOME</a></li>
        
        <div id="bowling-dropdown">
            
            <li><a href="#">BOWLING</a></li>
                <ul class="submenu-content">
                    <li><a href="open-bowling.php">OPEN BOWLING</a></li>
                    <li><a href="league-information.php">LEAGUE INFORMATION</a></li>
                    <li><a href="tournaments.php">TOURNAMENTS</a></li>
                    <li><a href="company-outings.php">COMPANY OUTINGS</a></li>
                    <li><a href="bowling-links">BOWLING LINKS</a></li>
                </ul>
            
        </div>
        
        <li><a href="bugline-sports-bar.php">SPORTS BAR</a></li>
        <li><a href="banquet-halls.php">BANQUET HALLS</a></li>
        <li><a href="contact-us.php">CONTACT</a></li>
        
    </ul>
    
<span style="font-size:30px;cursor:pointer" onclick="openNav()" id="mobile-nav">&#9776;</span>
    
    
    <div id="myNav" class="overlay">
    
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
    
        <div class="overlay-content">
            
            <ul id="overlay-nav">
        
                <li><a href="index.php">HOME</a></li>

                <div id="bowling-overlay-dropdown"><a href="#" class="overlay-link">BOWLING <img src="images/arrow.png" id="arrow" width="20" /></a>
                    <ul id="bowling-dropdown-submenu">
                        <li><a href="open-bowling.php">OPEN BOWLING</a></li>
                        <li><a href="league-information.php">LEAGUE INFORMATION</a></li>
                        <li><a href="tournaments.php">TOURNAMENTS</a></li>
                        <li><a href="company-outings.php">COMPANY OUTINGS</a></li>
                        <li><a href="bowling-links.php">BOWLING LINKS</a></li>
                    </ul>
                </div>

                <li><a href="bugline-sports-bar.php">SPORTS BAR</a></li>
                <li><a href="banquet-halls.php">BANQUET HALLS</a></li>
                <li><a href="contact-us.php">CONTACT</a></li>
                
            </ul>
            
        </div>
    
    
    </div>
    
    
</header>